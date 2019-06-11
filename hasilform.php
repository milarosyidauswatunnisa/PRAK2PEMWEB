<?php
session_start();
$uname = $_POST["username"];
$password = $_POST["password"];

if($uname=="informatika" && $pwd=="rakandani") {
$_SESSION["user"] = $uname;
header("Location : berhasil.php");
} else {
echo "gagal";
}
?>