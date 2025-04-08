<?php

$id = $_POST["joinid"];
$pw = $_POST["joinpw"];
$name = $_POST["name"];
$email = $_POST["email"];

DB::exec("INSERT INTO user (id, pw, name, emali) VALUES ('$id','$pw','$name','$email')");
echo "<script>location.href='/'</script>";