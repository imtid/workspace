<?php
//
$id_ok = "user01";
$password_ok = "pass01";
//session o kaeshi
session_start();
//request perimeter
$id="";
if (isset($_REQUEST["id"])) 
{
    $id = $_REQUEST["id"];
}
$password = "";
if (isset($_REQUEST["password"])) {
      $password = $_REQUEST["password"];
}

//
$isLogined = false;
if (($id === $id_ok) and ($password === $password_ok)) {
    $_SESSION["id"] = $id;
    $isLogined = true;
}

print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
	<h1>簡単なユーザ認証</h1>
	<?php if ($isLogined === true) {  ?>
	<p>ようこそ、<?= $id ?>さん</p>
	<p><a href="logout.html">ログアウトする</a></p>
	<?php } else { ?>
	<p>Login Failed</p>
	<p><a href="entry.html">go to login page</a></p>
	<?php } ?>
</body>
</html>