<?php 
  include 'db.php';

  $sql = mysqli_query($conexao,"SELECT * FROM blog_post ORDER BY views DESC") or die("Some error ocurred");
  $articles=mysqli_fetch_all($sql, MYSQLI_ASSOC);

  mysqli_close($conexao);

  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($articles);
?>