<?php
require_once "db.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="login.php" method="post">
    <input type="text" name="lgid" placeholder="id" autofocus required>
    <input type="password" name="lgpw" placeholder="pw" required>
    
    <button type="submit">로그인</button>
  </form>
</body>
</html>