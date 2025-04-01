<?php
class DB{
  static $db = null;
  static function getDB() {
    if (!self::$db) self::$db = new PDO("mysql:host=localhost;dbname=regional;charset=utf8mb4","root","",[19=>5, 3=>2]);
    return self::$db;
  }

  static function exec($query) {
    try {
      self::getDB()->exec($query);
      return true;
    } catch (Exception $e) {
      return false;
    }
  }

  static function fetch($query) {
    return self::getDB()->query($query)->fetch();
  }

  static function fetchAll($query) {
    return self::getDB()->query($query)->fetchAll();
  }
}

function ss() {
	return $_SESSION['ss'] ?? false;
}

function adminCreate() {
	$login = DB::fetch("SELECT * FROM user where id = 'admin' ");
	if(!$login) DB::exec("INSERT INTO user (id, pw) VALUES ('admin', '1111')");
}

ss();
adminCreate();