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
  <form action="join.php" method="post">
    <input type="text" name="joinid" placeholder="id" autofocus required>
    <input type="password" name="joinpw" placeholder="pw" required>
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="email" placeholder="email" required>

    <button type="submit">회원가입</button>
  </form>
</body>
</html>