<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-dark navbar-show-hide"
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
            <?php 
              /*
              @@include("../navbar/navbar-nav-menu.html", {
              "category": "@@category",
              "subcategory": "@@subcategory",
              "link": "@@link"
            })
              */
              include "navbar-nav-menu.html";

            
            ?>

            <!-- Button -->
            <li class="nav-item">
              <a class="btn btn-light btn-transition" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">Fale conosco</a>
            </li>
            <!-- End Button -->
          </ul>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </div>
</header>