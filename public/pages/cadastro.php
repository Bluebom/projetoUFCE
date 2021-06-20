<?php
if (isset($_GET['msg']))
  if ($_GET['msg'] == 'sucesso')
    echo '<p class="toast sucesso"><i class="fas fa-check"></i> Lutador cadastrado!</p>';
  elseif ($_GET['msg'] == 'falha')
    echo '<p class="toast falha"><i class="fas fa-times"></i> Falha ao cadastrar!</p>';
?>
<h1>Cadastro de Lutadores</h1>
<section class="container cadastro">
  <form action="inserirFilme.php" method="POST" enctype=multipart/form-data class="grid-8">
    <input type="text" name="nome" class="w50" placeholder="Nome" required>
    <select name="sexo" class="w50" required>
      <option value="" selected disabled hidden>Sexo</option>
      <option value="Masculino">Masculino</option>
      <option value="Feminino">Feminino</option>
    </select>
    <input type="text" name="idade" class="w50" placeholder="Idade" required>
    <input type="text" name="altura" class="w50" placeholder="Altura" required>
    <input type="text" name="peso" class="w50" placeholder="Peso" required>
    <input type="text" name="nacionalidade" class="w50" placeholder="Nacionalidade" required>
    <label>
      <p class="w100" id="fileLabel">Escolha uma imagem! <i class="fas fa-upload"></i></p>
      <input type="file" id="file" name="img" class="w100" accept="image/png, image/jpeg">
    </label>
    <input type="text" name="vitorias" class="w100" placeholder="Vitórias" required>
    <input type="text" name="derrotas" class="w100" placeholder="Derrotas" required>
    <input type="text" name="empates" class="w100" placeholder="Empates" required>

    <input type="submit" value="Cadastrar" class="w100" name="acao">

  </form>
</section>