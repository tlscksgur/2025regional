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
  <form action="admin.php" method="post">
    <input type="text" name="adid" placeholder="Adminid" autofocus required>
    <input type="password" name="adpw" placeholder="Adminpw" required>

    <button type="submit">관리자 로그인하기</button>
  </form>
</body>
</html>
