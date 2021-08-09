<?php
date_default_timezone_set('America/Sao_Paulo');

$autoload = function ($class) {
  include("../assets/class/$class.php");
};

spl_autoload_register($autoload);

define('INCLUD_PATH', 'https://ufce.franklinhenrique.com/');
define('BASE__DIR__IMG', __DIR__ . '/assets/image/');

//define('HOST', 'localhost');
//define('USER', 'root');
//define('PASSWORD', '');
//define('DATABASE', 'UFCE');
define('HOST', '192.185.176.109');
define('USER', 'frankl04_proj');
define('PASSWORD', '8aca7EAE!!');
define('DATABASE', 'frankl04_UFCE');
