<?php
$categoriaAtual = isset($_GET['categoria']) ? $_GET['categoria'] : 'mpesado';
$urlAtual = INCLUD_PATH . "home?categoria=$categoriaAtual";
$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$porPagina = 3;
$slides = Painel::selecionarPorCategoria('tb_lutadores', $categoriaAtual, $paginaAtual, $porPagina);
?>
<h1>Lutadores</h1>
<section class="lutadores">
  <section class="container">
    <a class='titulos grid-1-3 <? if ($_GET['categoria'] == 'leve') echo "selecionado" ?>' href="<?= INCLUD_PATH ?>home?categoria=leve">
      <h3>Leve</h3>
    </a>
    <a class='titulos grid-1-3 <? if ($_GET['categoria'] == 'mpesado'  || $_GET['categoria'] == '') echo "selecionado" ?>' href="<?= INCLUD_PATH ?>home?categoria=mpesado">
      <div>
        <h3>Meio-Pesado</h3>
      </div>
    </a>
    <a class='titulos grid-1-3 <? if ($_GET['categoria'] == 'pesado') echo "selecionado" ?>' href="<?= INCLUD_PATH ?>home?categoria=pesado">
      <div>
        <h3>Pesado</h3>
      </div>
    </a>
  </section>
  <!-- container -->
  <section class="container noRow">
    <? foreach ($slides as $key => $value) : ?>
      <div class="lutador grid-12">
        <img src="../assets/image/<?= $value['img'] ?>" alt="foto do lutador">
        <article>
          <h4 class="nome"><?= $value['nome'] ?></h4>
          <hr>
          <p>Idade: <?= Painel::getIdade($value['idade']) ?> anos</p>
          <p>Peso: <?= $value['peso'] ?> kg</p>
          <p>Altura: <?= $value['altura'] ?> m</p>
          <p>Quantidade de vitórias: <?= $value['vitorias'] ?></p>
          <p>Quantidade de derrotas: <?= $value['derrotas'] ?></p>
          <p>Quantidade de empates: <?= $value['empates'] ?></p>
          <hr>
        </article>
      </div>
    <? endforeach ?>

    <? if ($paginaAtual > 1) : ?>
      <a href="<?= $urlAtual ?>&&pagina=<?= $paginaAtual - 1 ?>">
        <div class="seta left grid-2"></div>
      </a>
      }<? endif ?>
      <? if ($paginaAtual < ceil(count(Painel::selecionarPorCategoria('tb_lutadores', $categoriaAtual)) / $porPagina)) : ?>
        <a href="<?= $urlAtual ?>&&pagina=<?= $paginaAtual + 1 ?>">
          <div class="seta right grid-2"></div>
        </a>
      <? endif ?>
  </section>
</section>
<!-- fighters -->