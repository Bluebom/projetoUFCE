<?php
class MySQL
{
  //  Atributos
  private static $pdo;

  // Métodos
  public static function conectar()
  {
    if (self::$pdo == NULL) {
      try {
        self::$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
        print "<b>Error!</b> " . $e->getMessage() . "<br/>";
        die();
      }
    }

    return self::$pdo;
  }
}
