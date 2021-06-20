<?php
$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$porPagina = 3;
$slides = Painel::selectAll('tb_lutadores', ($paginaAtual - 1) * $porPagina, $porPagina)
?>
<h1>Lutadores</h1>
<section class="lutadores">
  <section class="container">
    <div class="titulos grid-1-3 selecionado">
      <h3>Leve</h3>
    </div>
    <div class="titulos grid-1-3">
      <h3>Meio-Pesado</h3>
    </div>
    <div class="titulos grid-1-3">
      <h3>Pesado</h3>
    </div>
  </section>
  <!-- container -->
  <section class="container noRow">
    <?php
    foreach ($slides as $key => $value) :
    ?>
      <div class="lutador grid-12">
        <img src="../assets/image/eubg-removebg-preview.png" alt="foto do lutador">
        <article>
          <h4 class="nome"><?= $value['nome'] ?></h4>
          <hr>
          <p>Quantidade de vitórias: <?= $value['vitorias'] ?></p>
          <p>Quantidade de derrotas: <?= $value['derrotas'] ?></p>
          <p>Quantidade de empates: <?= $value['empates'] ?></p>
          <hr>
        </article>
      </div>
    <?php endforeach ?>
    <?php
    if ($paginaAtual > 1) :
    ?>
      <div class="seta left grid-2"><a href="<?= INCLUD_PATH ?>/home?pagina = <?= $paginaAtual - 1 ?>"></a></div>
      }<? endif ?>
      <a href="<?= INCLUD_PATH ?>/home?pagina = <?= $paginaAtual + 1 ?>">
        <div class="seta right grid-2"></div>
      </a>
  </section>
</section>
<!-- fighters -->