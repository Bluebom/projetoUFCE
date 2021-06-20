<h1>Inserindo dados</h1>
<?php
require_once 'config.php';
if (isset($_POST['acao'])) {
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $idade = $_POST['idade'];
  $altura = $_POST['altura'];
  $peso = $_POST['peso'];
  $nacionalidade = $_POST['nacionalidade'];
  $img = $_POST['img'];
  $vitorias = $_POST['vitorias'];
  $derrotas = $_POST['derrotas'];
  $empates = $_POST['empates'];

  $db = MySQL::conectar()->prepare("INSERT INTO tb_lutadores (nome, sexo, idade, altura, peso, nacionalidade, img, vitorias, derrotas, empates) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

  if ($db->execute(array($nome, $sexo, $idade, $altura, $peso, $nacionalidade, $img, $vitorias, $derrotas, $empates)))
    header("Location: cadastro?msg=sucesso");
  else
    header("Location: cadastro?msg=falha");
} else {
  header("Location: error404");
}
?>