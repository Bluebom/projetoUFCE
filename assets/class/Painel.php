<?php
require_once 'MySQL.php';
class Painel extends MySQL
{

  public static function selecionarPorCategoria($table, $categoria, $page = null, $perPage = null)
  {
    $page = ($page - 1) * $perPage;
    if ($categoria == 'leve') {
      if ($page == null && $perPage == null)
        $sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE peso < :peso");
      else
        $sql = MySQL::conectar()->prepare("SELECT * FROM `$table` WHERE peso < :peso LIMIT $page, $perPage;");
      $sql->execute(array(':peso' => '72'));
      return $sql->fetchAll();
    } elseif ($categoria == 'mpesado') {
      if ($page == null && $perPage == null)
        $sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE peso > :mp AND peso < :lp");
      else
        $sql = MySQL::conectar()->prepare("SELECT * FROM `$table` WHERE peso > :mp AND peso < :lp LIMIT $page, $perPage;");
      $sql->execute(array(':mp' => '72', ':lp' => '90'));
      return $sql->fetchAll();
    } elseif ($categoria == 'pesado') {
      if ($page == null && $perPage == null)
        $sql = MySql::conectar()->prepare("SELECT * FROM `$table`  WHERE peso > :gp");
      else
        $sql = MySQL::conectar()->prepare("SELECT * FROM `$table` WHERE peso > :gp LIMIT $page, $perPage;");
      $sql->execute(array(':gp' => '90'));
      return $sql->fetchAll();
    }
  }

  public static function imagemValida($imagem)
  {
    if (
      $imagem['type'] == 'image/jpeg' ||
      $imagem['type'] == 'image/jpg'  ||
      $imagem['type'] == 'image/png'
    ) {
      $tamanho = intval($imagem['size'] / 1024);
      if ($tamanho < 1024) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public static function uploadFile($file)
  {
    $formatoArquivo = explode('.', $file['name']);
    $imagemNome = uniqid() . '.' . $formatoArquivo[count($formatoArquivo) - 1];
    if (move_uploaded_file($file['tmp_name'], BASE__DIR__IMG . $imagemNome)) {
      return $imagemNome;
    } else {
      return false;
    }
  }

  public static function adicionarLutador($nome, $sexo, $idade, $altura, $peso, $nacionalidade, $img, $vitorias, $derrotas, $empates)
  {
    $db = MySQL::conectar()->prepare("INSERT INTO `tb_lutadores` VALUES (NULL,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($db->execute(array($nome, $sexo, $idade, $altura, $peso, $nacionalidade, $img, $vitorias, $derrotas, $empates))) return true;
  }

  public static function lutadorExiste($nome)
  {
    $sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_lutadores` WHERE nome = ?");
    $sql->execute(array($nome));

    if ($sql->rowCount() == 1)
      return true;
    else
      return false;
  }
}
