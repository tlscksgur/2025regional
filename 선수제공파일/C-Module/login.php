<?php
session_start();
require_once "db.php";

$loginid = $_POST["lgid"];
$loginpw = $_POST["lgpw"];



$login = DB::fetch("SELECT * FROM user where id = '$loginid'");

if($login && $login->pw === $loginpw) {
  $_SESSION['ss'] = $login;
  echo "<script> location.href='/' </script>";
}else{
  echo "<script>alert('로그인 실패')</script>";
  echo "<script> location.href='/' </script>";
}