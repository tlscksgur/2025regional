<?php
session_start();
require_once "db.php";

$adminId = $_POST['AdminId'];
$adminPw = $_POST['AdminPw'];

$adminLogin = DB::exec("SELECT * FROM `admin` WHERE id = '$adminId'");

if($adminLogin && $adminLogin->pw === $adminPw){
  $_SESSION['ad'] = $adminLogin;
  echo "<script>location.href='/'</script>";
}else{
  echo "<script>alert('로그인 실패')</script>";
  echo "<script>location.href='/'</script>";
}
?>