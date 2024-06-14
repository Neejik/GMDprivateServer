<?php
chdir(dirname(__FILE__));
//error_reporting(0);
include "../lib/connection.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/GJPCheck.php";
$stars = 0;
$count = 0;
$xi = 0;
$lbstring = "";
$date = date("d-m");
if(empty($_POST["gameVersion"])){
	$sign = "< 20 AND gameVersion <> 0";
}else{
	$sign = "> 19";
}
if(!empty($_POST["accountID"])){
	$accountID = GJPCheck::getAccountIDOrDie();
}else{
	$accountID = ExploitPatch::remove($_POST["udid"]);
	if(is_numeric($accountID)){
		exit("-1");
	}
}

$type = ExploitPatch::remove($_POST["type"]);
if($type == "top" OR $type == "creators" OR $type == "relative"){
	if($type == "top"){
		$query = $db->prepare("SELECT * FROM users WHERE isBanned = '0' AND gameVersion $sign AND stars > 0 ORDER BY stars DESC LIMIT 10");
		$query->execute();
	}
	if($type == "creators"){
		$query = $db->prepare("SELECT * FROM users WHERE isCreatorBanned = '0' AND creatorPoints > 0 ORDER BY creatorPoints DESC LIMIT 100");
		$query->execute();
	}
	if($type == "relative"){
		$query = "SELECT * FROM users WHERE extID = :accountID";
		$query = $db->prepare($query);
		$query->execute([':accountID' => $accountID]);
		$result = $query->fetchAll();
		$user = $result[0];
		$stars = $user["stars"];
		if($_POST["count"]){
			$count = ExploitPatch::remove($_POST["count"]);
		}else{
			$count = 50;
		}
		$count = floor($count / 2);
		$query = $db->prepare("SELECT	A.* FROM	(
			(
				SELECT	*	FROM users
				WHERE stars <= :stars
				AND isBanned = 0
				AND gameVersion $sign
				ORDER BY stars DESC
				LIMIT $count
			)
			UNION
			(
				SELECT * FROM users
				WHERE stars >= :stars
				AND isBanned = 0
				AND gameVersion $sign
				ORDER BY stars ASC
				LIMIT $count
			)
		) as A
		ORDER BY A.stars DESC");
		$query->execute([':stars' => $stars]);
	}
	$result = $query->fetchAll();
	if($type == "relative"){
		$user = $result[0];
		$extid = $user["extID"];
		$e = "SET @rownum := 0;";
		$query = $db->prepare($e);
		$query->execute();
		$f = "SELECT rank, stars FROM (
							SELECT @rownum := @rownum + 1 AS rank, stars, extID, isBanned
							FROM users WHERE isBanned = '0' AND gameVersion $sign ORDER BY stars DESC
							) as result WHERE extID=:extid";
		$query = $db->prepare($f);
		$query->execute([':extid' => $extid]);
		$leaderboard = $query->fetchAll();
		//var_dump($leaderboard);
		$leaderboard = $leaderboard[0];
		$xi = $leaderboard["rank"] - 1;
	}
	foreach($result as &$user) {
		$extid = 0;
		if(is_numeric($user["extID"])){
			$extid = $user["extID"];
		}
		$xi++;
		$eventText[0] = "";
		switch(date('d-m', time())) {
		    case '01-01': // new year
		        $eventText[1] = " the Fireworks Launcher"; $eventText[2] = " the Goals Planner"; $eventText[3] = " the Drunk"; $eventText[4] = " the Sentimental"; $eventText[5] = " the New Person";
		        $user["color1"] = 6; $user["color2"] = 11; $user["special"] = 2;
		        break;
		    case '14-02': // san valentin
		        $eventText[1] = " the Lover"; $eventText[2] = " the Rejected"; $eventText[3] = " the Forever Alone"; $eventText[4] = " the Cupid"; $eventText[5] = " the Fvckboy";
		        $user["color1"] = 8; $user["color2"] = 12; $user["special"] = 2;
		        break;
		    case '12-03': // unnamersary
		        $eventText[1] = " the Interstellar"; $eventText[2] = " the Fallen Gleam"; $eventText[3] = " the Stardust"; $eventText[4] = " the Nebulous"; $eventText[5] = " the Aurora";
		        $user["color1"] = 20; $user["color2"] = 72; $user["special"] = 2;
		        break;
		    case '17-07': // gdg closure
		        $eventText[1] = " the Astronautilus"; $eventText[2] = " the Discover"; $eventText[3] = " the New Star"; $eventText[4] = " the Wanderer"; $eventText[5] = " the Traveler";
		        $user["color1"] = 94; $user["color2"] = 12; $user["special"] = 2;
		        break;
		    case '31-10': // halloween
		        $eventText[1] = " the Pumpkin"; $eventText[2] = " the Spooky"; $eventText[3] = " the Haunted"; $eventText[4] = " the Scary"; $eventText[5] = " the Soul Collector";
		        $user["color1"] = 15; $user["color2"] = 10; $user["special"] = 2; $user["demons"] = 666;
		        break;
		    case '25-12': // xmas
		        $eventText[1] = " the Snowman"; $eventText[2] = " the Yeti"; $eventText[3] = " the Jingle Bells"; $eventText[4] = " the Padoru"; $eventText[5] = " the Santa Claus";
		        $user["color1"] = 9; $user["color2"] = 12; $user["special"] = 2;
		        break;
		}
		$randNumber = rand(1, 5);
		$lbstring .= "1:".$user["userName"].$eventText[$randNumber].":2:".$user["userID"].":13:".$user["coins"].":17:".$user["userCoins"].":6:".$xi.":9:".$user["icon"].":10:".$user["color1"].":11:".$user["color2"].":51:".$user["color3"].":14:".$user["iconType"].":15:".$user["special"].":16:".$extid.":3:".$user["stars"].":8:".round($user["creatorPoints"],0,PHP_ROUND_HALF_DOWN).":4:".$user["demons"].":7:".$extid.":46:".$user["diamonds"].":52:".$user["moons"]."|";
		/*if($date == "01-04"){
			$lbstring .= "1:sakujes:2:".$user["userID"].":13:999:17:999:6:".$xi.":9:9:10:9:11:8:14:1:15:3:16:".$extid.":3:999:8:99999:4:999:7:".$extid.":46:99999|";
		}else{
			$lbstring .= "1:".$user["userName"].":2:".$user["userID"].":13:".$user["coins"].":17:".$user["userCoins"].":6:".$xi.":9:".$user["icon"].":10:".$user["color1"].":11:".$user["color2"].":51:".$user["color3"].":14:".$user["iconType"].":15:".$user["special"].":16:".$extid.":3:".$user["stars"].":8:".round($user["creatorPoints"],0,PHP_ROUND_HALF_DOWN).":4:".$user["demons"].":7:".$extid.":46:".$user["diamonds"].":52:".$user["moons"]."|";
		}*/
	}
}
if($type == "friends"){
	$query = "SELECT * FROM friendships WHERE person1 = :accountID OR person2 = :accountID";
	$query = $db->prepare($query);
	$query->execute([':accountID' => $accountID]);
	$result = $query->fetchAll();
	$people = "";
	foreach ($result as &$friendship) {
		$person = $friendship["person1"];
		if($friendship["person1"] == $accountID){
			$person = $friendship["person2"];
		}
		$people .= ",".$person;
	}
	$query = "SELECT * FROM users WHERE extID IN (:accountID $people ) ORDER BY stars DESC";
	$query = $db->prepare($query);
	$query->execute([':accountID' => $accountID]);
	$result = $query->fetchAll();
	foreach($result as &$user){
		if(is_numeric($user["extID"])){
			$extid = $user["extID"];
		}else{
			$extid = 0;
		}
		$xi++;
		$eventText[0] = "";
		switch(date('d-m', time())) {
		    case '01-01': // new year
		        $eventText[1] = " the Fireworks Launcher"; $eventText[2] = " the Goals Planner"; $eventText[3] = " the Drunk"; $eventText[4] = " the Sentimental"; $eventText[5] = " the New Person";
		        $user["color1"] = 6; $user["color2"] = 11; $user["special"] = 2;
		        break;
		    case '14-02': // san valentin
		        $eventText[1] = " the Lover"; $eventText[2] = " the Rejected"; $eventText[3] = " the Forever Alone"; $eventText[4] = " the Cupid"; $eventText[5] = " the Fvckboy";
		        $user["color1"] = 8; $user["color2"] = 12; $user["special"] = 2;
		        break;
		    case '12-03': // unnamersary
		        $eventText[1] = " the Interstellar"; $eventText[2] = " the Fallen Gleam"; $eventText[3] = " the Stardust"; $eventText[4] = " the Nebulous"; $eventText[5] = " the Aurora";
		        $user["color1"] = 20; $user["color2"] = 72; $user["special"] = 2;
		        break;
		    case '17-07': // gdg closure
		        $eventText[1] = " the Astronautilus"; $eventText[2] = " the Discover"; $eventText[3] = " the New Star"; $eventText[4] = " the Wanderer"; $eventText[5] = " the Traveler";
		        $user["color1"] = 94; $user["color2"] = 12; $user["special"] = 2;
		        break;
		    case '31-10': // halloween
		        $eventText[1] = " the Pumpkin"; $eventText[2] = " the Spooky"; $eventText[3] = " the Haunted"; $eventText[4] = " the Scary"; $eventText[5] = " the Soul Collector";
		        $user["color1"] = 15; $user["color2"] = 10; $user["special"] = 2; $user["demons"] = 666;
		        break;
		    case '25-12': // xmas
		        $eventText[1] = " the Snowman"; $eventText[2] = " the Yeti"; $eventText[3] = " the Jingle Bells"; $eventText[4] = " the Padoru"; $eventText[5] = " the Santa Claus";
		        $user["color1"] = 9; $user["color2"] = 12; $user["special"] = 2;
		        break;
		}
		$randNumber = rand(1, 5);
		$lbstring .= "1:".$user["userName"].$eventText[$randNumber].":2:".$user["userID"].":13:".$user["coins"].":17:".$user["userCoins"].":6:".$xi.":9:".$user["icon"].":10:".$user["color1"].":11:".$user["color2"].":51:".$user["color3"].":14:".$user["iconType"].":15:".$user["special"].":16:".$extid.":3:".$user["stars"].":8:".round($user["creatorPoints"],0,PHP_ROUND_HALF_DOWN).":4:".$user["demons"].":7:".$extid.":46:".$user["diamonds"].":52:".$user["moons"]."|";
		/*if($date == "01-04"){
			$lbstring .= "1:sakujes:2:".$user["userID"].":13:999:17:999:6:".$xi.":9:9:10:9:11:8:14:1:15:3:16:".$extid.":3:999:8:99999:4:999:7:".$extid.":46:99999|";
		}else{
			$lbstring .= "1:".$user["userName"].":2:".$user["userID"].":13:".$user["coins"].":17:".$user["userCoins"].":6:".$xi.":9:".$user["icon"].":10:".$user["color1"].":11:".$user["color2"].":14:".$user["iconType"].":15:".$user["special"].":16:".$extid.":3:".$user["stars"].":8:".round($user["creatorPoints"],0,PHP_ROUND_HALF_DOWN).":4:".$user["demons"].":7:".$extid.":46:".$user["diamonds"]."|";
		}*/
	}
}
if($lbstring == ""){
	exit("-1");
}
$lbstring = substr($lbstring, 0, -1);
echo $lbstring;
?>