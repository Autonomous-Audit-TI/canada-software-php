<?php 

#$host = '127.0.0.1';
#$username = 'root';
#$password = '12345678';
#$database = 'products';
$host = "172.106.0.120";
$username = "canadasoftware";
$password = "@Adm4dl3s@";
$database = "canada-software";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexao = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno($conexao)) {
  echo mysqli_connect_error() . "\n";
}

mysqli_set_charset($conexao,'utf8');

?>