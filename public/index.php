<?php
require_once './config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo INCLUD_PATH; ?>../assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <header>
    <section class="container">
      <div class="grid-2">
        <a href="home"><img src="../assets/image/logo.png" alt="logo do site" width="50" height="50"></a>
      </div>
      <div class="right grid-4">
        <nav>
          <ul>
            <li><a href="home" <?php if (isset($_GET['url'])) if ($_GET['url'] == 'home') echo 'class="ativo"'; ?>>Home</a></li>
            <li><a href="cadastro" <?php if (isset($_GET['url'])) if ($_GET['url'] == 'cadastro') echo 'class="ativo"'; ?>>Cadastro</a></li>
          </ul>
        </nav>
      </div>
    </section>
  </header>
  <?php
  $destino = isset($_GET['url']) ? $_GET['url'] : 'home';
  if (file_exists("pages/$destino.php")) {
    include("pages/$destino.php");
  } else {
    include("pages/error404.php");
  }
  ?>

  <footer>
    <div class="container">
      <div class="form_social grid-4">
        <a href="https://www.linkedin.com/in/franklin-henrique-dev-web" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://github.com/Bluebom" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://www.youtube.com/channel/UC4i2KAIbJSzX88ztqP9wCjg" target="_blank"><i class="fab fa-youtube"></i></a>
      </div><!-- form_social -->
    </div>
    <div class="container">
      <div class="copyright grid-8">
        <p>Franklin Henrique <span>&copy;2021</span></p>
      </div>
    </div>
  </footer>
  <script src="<?php echo INCLUD_PATH; ?>../assets/js/script.js"></script>

</body>

</html>