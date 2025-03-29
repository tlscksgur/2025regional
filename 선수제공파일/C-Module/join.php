<?php
require_once "db.php";

$id = $_POST['joinid'];
$pw = $_POST['joinpw'];
$name = $_POST['name'];
$email = $_POST['email'];

DB::exec("INSERT into user (id, pw, name, email) VALUE ('$id', '$pw', '$name', '$email')");
echo "<script>location.href='/'</script>";
