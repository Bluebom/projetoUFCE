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
  $img = $_FILES['img'];
  $vitorias = $_POST['vitorias'];
  $derrotas = $_POST['derrotas'];
  $empates = $_POST['empates'];

  if ($nome == '' || $sexo == '' || $idade == '' || $altura == '' || $peso == '' || $nacionalidade  == '' || $img == '' || $vitorias == '' || $derrotas == '' || $empates == '') header("Location: cadastro?msg=Algum campo não foi preenchido");
  if (Painel::imagemValida($img) == false) header("Location: cadastro?msg=Essa imagem não é válida");
  if (Painel::lutadorExiste($nome)) header("Location: cadastro?msg=Esse lutador já foi cadastrado");
  else {
    $img = Painel::uploadFile($img);
    if (Painel::adicionarLutador($nome, $sexo, $idade, $altura, $peso, $nacionalidade, $img, $vitorias, $derrotas, $empates)) header("Location: cadastro?msg=sucesso");
  }
} else {
  header("Location: error404");
}

?>