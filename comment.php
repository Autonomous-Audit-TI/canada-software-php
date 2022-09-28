<?php 
include "db.php";

$first_name = htmlspecialchars($_POST['firstname']);
$last_name = htmlspecialchars($_POST['lastname']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);

$sql = mysqli_query($conexao, "INSERT INTO comments (first_name, last_name, email, comment) values ('{$first_name}', '{$last_name}', '{$email}', '{$comment}')");
mysqli_close($conexao);

?>