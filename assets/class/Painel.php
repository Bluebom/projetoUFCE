<?php
require_once 'MySQL.php';
class Painel extends MySQL
{
  public static function selectAll($table, $page = null, $perPage = null)
  {
    if ($page == null && $perPage == null) {
      $sql = MySQL::conectar()->prepare("SELECT * FROM `$table`");
    } else {
      $sql = MySQL::conectar()->prepare("SELECT * FROM `$table` LIMIT $page, $perPage");
    }
    $sql->execute();
    return $sql->fetchAll();
  }
}
