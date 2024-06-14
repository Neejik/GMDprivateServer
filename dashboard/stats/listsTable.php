<?php
session_start();
require "../incl/dashboardLib.php";
$dl = new dashboardLib();
require_once "../".$dbPath."incl/lib/mainLib.php";
$gs = new mainLib();
$dl->title($dl->getLocalizedString("listTable"));
$dl->printFooter('../');
include "../".$dbPath."incl/lib/connection.php";
$x = 1;
$packtable = "";
$query = $db->prepare("SELECT * FROM lists WHERE unlisted = 0 ORDER BY listID DESC");
$query->execute();
$result = $query->fetchAll();
if(empty($result)) {
	$dl->printSong('<div class="form">
    <h1>'.$dl->getLocalizedString("errorGeneric").'</h1>
    <form class="form__inner" method="post" action=".">
		<p>'.$dl->getLocalizedString("emptyPage").'</p>
        <button type="button" onclick="a(\'\', true, false, \'GET\')" class="btn-primary">'.$dl->getLocalizedString("dashboard").'</button>
    </form>
</div>', 'browse');
	die();
} 
$modcheck = $gs->checkPermission($_SESSION["accountID"], "dashboardModTools");
foreach($result as &$pack){
	$lvlarray = explode(",", $pack["listlevels"]);
	$lvltable = "";
	$listDesc = htmlspecialchars(base64_decode($pack['listDesc']));
	if(empty($listDesc)) $listDesc = '<text style="color:gray">'.$dl->getLocalizedString("noDesc").'</text>';
    $starspack = $pack["starStars"];
    if($pack["starStars"] == 0) $starspack = '<span style="color:grey">0</span>';
  	$coinspack = $pack["countForReward"];
	$pst = '<p class="profilepic"><i class="fa-solid fa-gem"></i> '.$starspack.'</p>';
	if($pack["countForReward"] != 0) $pcc =  '<p class="profilepic"><i class="fa-solid fa-circle-check"></i> '.$coinspack.'</p>'; else $pcc = '';
	$pd = '<p class="profilepic"><i class="fa-solid fa-face-smile-beam"></i> '.$gs->getListDiffName($pack['starDifficulty']).'</p>';
	$lk = '<p class="profilepic"><i class="fa-solid fa-thumbs-'.($pack['likes'] - $pack['dislikes'] > 0 ? 'up' : 'down').'"></i> '.abs($pack['likes'] - $pack['dislikes']).'</p>';
	$dload = '<p class="profilepic"><i class="fa-solid fa-reply fa-rotate-270"></i> '.$pack['downloads'].'</p>';
	$packall = $dload.$lk.$pst.$pd.$pcc;
	foreach($lvlarray as &$lvl) {
		$query = $db->prepare("SELECT * FROM levels WHERE levelID = :levelID");
		$query->execute([':levelID' => $lvl]);
		$action = $query->fetch();
		$levelid = $action["levelID"];
		$levelname = $action["levelName"];
		$levelIDlol = '<button id="copy'.$action["levelID"].'" class="accbtn songidyeah" onclick="copysong('.$action["levelID"].')">'.$action["levelID"].'</button>';
		$levelDesc = htmlspecialchars(base64_decode($action["levelDesc"]));
		if(empty($levelDesc)) $levelDesc = '<text style="color:gray">'.$dl->getLocalizedString("noDesc").'</text>';
		$levelpass = $action["password"];
		$likes = $action["likes"] > 0 ? $action["likes"] : '<span style="color:gray">'.$action["likes"].'</span>';
		$dislikes = $action["dislikes"] > 0 ? $action["dislikes"] : '<span style="color:gray">'.$action["dislikes"].'</span>';
		$stats = '<div class="profilepic" style="display:inline-flex;grid-gap:3px;color:white"><i style="color:#ffffc0" class="fa-regular fa-thumbs-up"></i> '.$likes. ' | <i style="color:#ffc0c0" class="fa-regular fa-thumbs-down"></i> '.$dislikes.'</div>';
		if($modcheck) {
			$levelpass = substr($levelpass, 1);
			$levelpass = preg_replace('/(0)\1+/', '', $levelpass);
			if($levelpass == 0 OR empty($levelpass)) $lp = '<p class="profilepic"><i class="fa-solid fa-unlock"></i> '.$dl->getLocalizedString("nopass").'</p>';
			else {
				if(strlen($levelpass) < 4) while(strlen($levelpass) < 4) $levelpass = '0'.$levelpass;
				$lp = '<p class="profilepic"><i class="fa-solid fa-lock"></i> '.$levelpass.'</p>';
			}
			if($action["requestedStars"] <= 0 && $action["requestedStars"] > 10) $rs = '<p class="profilepic"><i class="fa-solid fa-star-half-stroke"></i> 0</p>';
			else $rs = '<p class="profilepic"><i class="fa-solid fa-star-half-stroke"></i> '.$action["requestedStars"].'</p>';
		} else $lp = $rs = '';
		if($action["songID"] > 0) {
			$songlol = $gs->getSongInfo($action["songID"]);
			$btn = '<button type="button" name="btnsng" id="btn'.$action["songID"].'" title="'.$songlol["authorName"].' — '.$songlol["name"].'" style="display: contents;color: white;margin: 0;" download="'.str_replace('http://', 'https://', $songlol["download"]).'" onclick="btnsong(\''.$action["songID"].'\');"><div class="icon songbtnpic""><i id="icon'.$action["songID"].'" name="iconlol" class="fa-solid fa-play" aria-hidden="false"></i></div></button>';
			$songid = '<div class="profilepic songpic">'.$btn.'<div class="songfullname"><div class="songauthor">'.$songlol["authorName"].'</div><div class="songname">'.$songlol["name"].'</div></div></div>';
		} else $songid = '<p class="profilepic"><i class="fa-solid fa-music"></i> '.strstr($gs->getAudioTrack($action["audioTrack"]), ' by ', true).'</p>';
		$username =  '<form style="margin:0" method="post" action="./profile/"><button type="button" onclick="a(\'profile/'.$action["userName"].'\', true, true, \'POST\')" style="margin:0" class="accbtn" name="accountID">'.$action["userName"].'</button></form>';
		$time = $dl->convertToDate($action["uploadDate"], true);
		$diff = $gs->getDifficulty($action["starDifficulty"], $action["auto"], $action["starDemonDiff"]);
		if($action['levelLength'] == 5) $starIcon = 'moon'; else $starIcon = 'star';
		$st = '<p class="profilepic"><i class="fa-solid fa-'.$starIcon.'"></i> '.$diff.', '.$action["starStars"].'</p>';
		$ln = '<p class="profilepic"><i class="fa-solid fa-clock"></i> '.$gs->getLength($action['levelLength']).'</p>';
		$dls = '<p class="profilepic"><i class="fa-solid fa-reply fa-rotate-270"></i> '.$action['downloads'].'</p>';
		$all = $dls.$stats.$st.$ln.$lp.$rs;
		$lvltable .= '<div style="width: 100%;display: flex;flex-wrap: wrap;justify-content: center;">
			<div class="profile">
			<div class="profacclist">
    			<div class="accnamedesc">
        			<div class="profcard1">
        				<h1 class="dlh1 profh1">'.sprintf($dl->getLocalizedString("demonlistLevel"), $levelname, 0, $action["userName"]).'</h1>
        			</div>
    			    <p class="dlp">'.$levelDesc.'</p>
    			</div>
    			<div class="form-control acccontrol">
        			<div class="acccontrol2 packfc">
        			    '.$all.'
        			</div>
        			'.$songid.'
    			</div>
    		</div>
			<div style="display: flex;justify-content: space-between;margin-top: 10px;"><h3 id="comments" class="songidyeah" style="margin: 0px;width: max-content;align-items: center;">'.$dl->getLocalizedString("levelid").': <b>'.$levelIDlol.'</b></h3><h3 id="comments" class="songidyeah"  style="justify-content: flex-end;grid-gap: 0.5vh;margin: 0px;width: max-content;">'.$dl->getLocalizedString("date").': <b>'.$time.'</b></h3></div>
		</div></div>';
	}
	$packtable .= '<div style="width: 100%;display: flex;flex-wrap: wrap;justify-content: center;">
		<div class="profile packcard">
			<div class="packname">
				<h1>'.sprintf($dl->getLocalizedString("demonlistLevel"), htmlspecialchars($pack["listName"]), 0, htmlspecialchars($gs->getAccountName($pack['accountID']))).'</h1>
				<p>'.$listDesc.'</p>
			</div>
			<div class="form-control longfc">
        		'.$packall.'
			</div>
			<div class="form-control new-form-control packlevels">
				'.$lvltable.'
			</div>
			<div class="commentsdiv" style="margin: 0px 5px">
				<h2 class="comments">ID: '.$pack["listID"].'</h2>
				<h2 class="comments">'.$dl->getLocalizedString('date').': '.$dl->convertToDate($pack["uploadDate"], true).'</h2>
			</div>
		</div>
	</div>';
	$x++;
}
$dl->printSong('<div class="form clan-form"><h1>'.$dl->getLocalizedString('listTable').'</h1>
	<div class="form-control clan-form-control">
		'.$packtable.'
	</div>
</div>', 'browse');
?>