<?php
include "../config/security.php";
include "../incl/lib/connection.php";
require_once "../incl/lib/exploitPatch.php";
require "../incl/lib/generatePass.php";
require_once "../incl/lib/TimeoutCheck.php";

if(!isset($preactivateAccounts)) $preactivateAccounts = true;
if(!empty($_POST["userName"]) AND !empty($_POST["password"]) AND !empty($_POST["email"])) {
	//here im getting all the data
	$userName = ExploitPatch::charclean($_POST["userName"]);
	$password = $_POST["password"];
	$email = ExploitPatch::rucharclean($_POST["email"]);
	//checking if username is within the GD length limit
	if(strlen($userName) > 20) exit("-4");
	if(strlen($userName) < 3) exit("-9");
	if(strlen($password) < 8) exit("-8");
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) exit("-6");
	if($mailEnabled) {
		$checkMail = $db->prepare("SELECT count(*) FROM accounts WHERE email LIKE :mail");
		$checkMail->execute([':mail' => $email]);
		$checkMail = $checkMail->fetchColumn();
		if($checkMail > 0) exit("-3");
	}
	//checking if name is taken
	$query2 = $db->prepare("SELECT count(*) FROM accounts WHERE userName LIKE :userName");
	$query2->execute([':userName' => $userName]);
	$regusrs = $query2->fetchColumn();
	if ($regusrs > 0) {
		echo "-2";
	} else {
        TimeoutCheck::CheckTimeout(-701);
		$hashpass = password_hash($password, PASSWORD_DEFAULT);
		$gjp2 = GeneratePass::GJP2hash($password);
		$query = $db->prepare("INSERT INTO accounts (userName, password, email, registerDate, isActive, gjp2)
		VALUES (:userName, :password, :email, :time, :isActive, :gjp)");
		$query->execute([':userName' => $userName, ':password' => $hashpass, ':email' => $email, ':time' => time(), ':isActive' => $preactivateAccounts ? 1 : 0, ':gjp' => $gjp2]);
		echo "1";
      	if($mailEnabled) $gs->mail($email, $userName);
	}
} else echo "-1";
?>