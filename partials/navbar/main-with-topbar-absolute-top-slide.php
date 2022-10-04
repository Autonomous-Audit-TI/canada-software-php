<?php 
//ir no banco, pegar a logo e todos os itens do menu
include 'db.php';

$query = "SELECT * FROM menu_solucoes";
$sql = mysqli_query($conexao, $query) or die(mysqli_connect_error());

$menu_result=mysqli_fetch_all($sql, MYSQLI_ASSOC);

mysqli_close($conexao);
?>

<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-dark navbar-scrolled"
        data-hs-header-options='{
          "fixMoment": 1000,
          "fixEffect": "slide"
        }'>

  <div class="container">
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Default Logo -->
      <a class="navbar-brand" href="index.php" aria-label="Front">
        <img class="navbar-brand-logo" src="assets/svg/logos/logo-white.svg" alt="Logo">
      </a>
      <!-- End Default Logo -->

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="bi-list"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="bi-x"></i>
        </span>
      </button>
      <!-- End Toggler -->
      
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-absolute-top-scroller">
          <ul class="navbar-nav">
            <?php include "navbar-nav-menu.php"; ?>
            <!-- Button -->
            <li class="nav-item">
              <a class="btn btn-light btn-transition" href="contact.php" target="_blank">Fale conosco</a>
            </li>
            <!-- End Button -->
          </ul>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </div>
</header>
