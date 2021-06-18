<?php
require_once './config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo INDEX; ?>../assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <header>
    <section class="container">
      <div class="grid-2">
        <h2>LOGO</h2>
      </div>
      <div class="right grid-4">
        <nav>
          <ul>
            <li><a href="home" <?php if ($_GET['url'] == 'home') echo 'class="ativo"'; ?>>Home</a></li>
            <li><a href="cadastro" <?php if ($_GET['url'] == 'cadastro') echo 'class="ativo"'; ?>>Cadastro</a></li>
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

  <script src="<?php echo INDEX; ?>../assets/js/script.js"></script>

</body>

</html>