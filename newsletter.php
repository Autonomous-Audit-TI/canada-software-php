<?php
include 'db.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);
$email = $data["email"];

$sql = mysqli_query($conexao, "INSERT INTO newsletter_emails (email) values ('{$email}')");
mysqli_close($conexao);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($email);
