<?php
$autoload = function ($class) {
  include("../assets/class/$class.php");
};

spl_autoload_register($autoload);

define('INCLUD_PATH', 'http://192.168.2.119/dashboard/projetoUFCE/public/');
define('BASE__DIR__IMG', __DIR__ . '/../assets/image/');

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'UFCE');
