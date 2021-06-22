<?php
$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$porPagina = 3;
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
    <?php
    if ($_GET['categoria'] == 'leve') :
      $slides = Painel::selecionarPorCategoria('tb_lutadores', 'leve', $paginaAtual, $porPagina);
    ?>
      <? foreach ($slides as $key => $value) : ?>
        <? if ($value['peso'] <= 72) : ?>
          <div class="lutador grid-12">
            <img src="../assets/image/<?= $value['img'] ?>" alt="foto do lutador">
            <article>
              <h4 class="nome"><?= $value['nome'] ?></h4>
              <hr>
              <p>Quantidade de vitórias: <?= $value['vitorias'] ?></p>
              <p>Quantidade de derrotas: <?= $value['derrotas'] ?></p>
              <p>Quantidade de empates: <?= $value['empates'] ?></p>
              <hr>
            </article>
          </div>
        <? endif ?>
      <? endforeach ?>

      <? if ($paginaAtual > 1) : ?>
        <a href="<?= INCLUD_PATH ?>home?categoria=leve&&pagina=<?= $paginaAtual - 1 ?>">
          <div class="seta left grid-2"></div>
        </a>
        }<? endif ?>
        <? if ($paginaAtual < ceil(count(Painel::selecionarPorCategoria('tb_lutadores', 'leve')) / $porPagina)) : ?>
          <a href="<?= INCLUD_PATH ?>home?categoria=leve&&pagina=<?= $paginaAtual + 1 ?>">
            <div class="seta right grid-2"></div>
          </a>
        <? endif ?>
      <? endif ?>
      <? if ($_GET['categoria'] == 'mpesado'  || $_GET['categoria'] == '') :
        $slides = Painel::selecionarPorCategoria('tb_lutadores', 'mpesado', $paginaAtual, $porPagina);
      ?>
        <? foreach ($slides as $key => $value) : ?>
          <? if ($value['peso'] > 65 && $value['peso'] <= 90) : ?>
            <div class="lutador grid-12">
              <img src="../assets/image/<?= $value['img'] ?>" alt="foto do lutador">
              <article>
                <h4 class="nome"><?= $value['nome'] ?></h4>
                <hr>
                <p>Quantidade de vitórias: <?= $value['vitorias'] ?></p>
                <p>Quantidade de derrotas: <?= $value['derrotas'] ?></p>
                <p>Quantidade de empates: <?= $value['empates'] ?></p>
                <hr>
              </article>
            </div>
          <? endif ?>
        <? endforeach ?>

        <? if ($paginaAtual > 1) : ?>
          <a href="<?= INCLUD_PATH ?>home?categoria=mpesado&&pagina=<?= $paginaAtual - 1 ?>">
            <div class="seta left grid-2"></div>
          </a>
          }<? endif ?>
          <? if ($paginaAtual < ceil(count(Painel::selecionarPorCategoria('tb_lutadores', 'mpesado')) / $porPagina)) : ?>
            <a href="<?= INCLUD_PATH ?>home?categoria=mpesado&&pagina=<?= $paginaAtual + 1 ?>">
              <div class="seta right grid-2"></div>
            </a>
          <? endif ?>
        <? endif ?>
        <? if ($_GET['categoria'] == 'pesado') :
          $slides = Painel::selecionarPorCategoria('tb_lutadores', 'pesado', $paginaAtual, $porPagina);
        ?>
          <? foreach ($slides as $key => $value) : ?>
            <? if ($value['peso'] > 90) : ?>
              <div class="lutador grid-12">
                <img src="../assets/image/<?= $value['img'] ?>" alt="foto do lutador">
                <article>
                  <h4 class="nome"><?= $value['nome'] ?></h4>
                  <hr>
                  <p>Quantidade de vitórias: <?= $value['vitorias'] ?></p>
                  <p>Quantidade de derrotas: <?= $value['derrotas'] ?></p>
                  <p>Quantidade de empates: <?= $value['empates'] ?></p>
                  <hr>
                </article>
              </div>
            <? endif ?>
          <? endforeach ?>

          <? if ($paginaAtual > 1) : ?>
            <a href="<?= INCLUD_PATH ?>home?categoria=pesado&&pagina=<?= $paginaAtual - 1 ?>">
              <div class="seta left grid-2"></div>
            </a>
            }<? endif ?>
            <? if ($paginaAtual < ceil(count(Painel::selecionarPorCategoria('tb_lutadores', 'pesado')) / $porPagina)) : ?>
              <a href="<?= INCLUD_PATH ?>home?categoria=pesado&&pagina=<?= $paginaAtual + 1 ?>">
                <div class="seta right grid-2"></div>
              </a>
            <? endif ?>
          <? endif ?>
  </section>
</section>
<!-- fighters -->