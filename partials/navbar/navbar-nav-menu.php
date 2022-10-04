<?php
  $is_new_html = "<span class='badge bg-primary rounded-pill ms-1'>Novo</span>";
  $categories = [];
  foreach ($menu_result as $value) {
    array_push($categories, $value["category"]);
  }

  $categories = array_unique($categories);
?>

<!-- Landings -->
<li class="hs-has-mega-menu nav-item">
  <a id="landingsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle @@if(category=='landings'){active}" aria-current="page" href="#" role="button" aria-expanded="false">Soluções</a>

  <!-- Mega Menu -->
  <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="landingsMegaMenu" style="min-width: 30rem;">
    <div class="row">
      <div class="col-lg-6 d-none d-lg-block">
        <!-- Banner Image -->
        <div class="navbar-dropdown-menu-banner" style="background-image: url(assets/svg/components/shape-3.svg);">
          <div class="navbar-dropdown-menu-banner-content">
            <div class="mb-4">
              <span class="h2 d-block">Construímos software que trabalha pra você</span>
              <p>Somos uma empresa que trabalha   para tornar os desafios tecnológicos das empresas uma atividade possível, segura e descomplicada.
              </p>
            </div>
            <a class="btn btn-primary btn-transition" href="#">Saiba mais...<i class="bi-chevron-right small"></i></a>
          </div>
        </div>
        <!-- End Banner Image -->
      </div>
      <!-- End Col -->

      <div class="col-lg-6">
        <div class="navbar-dropdown-menu-inner">
          <div class="row">
            <div class="col-sm mb-3 mb-sm-0">

            <?php foreach ($categories as $category) { ?>
              <span class="dropdown-header"><?php echo $category; ?></span>

              <?php 
                foreach ($menu_result as $link){
                  if ($link["category"] == $category){
                      $href = $link['link'];
                      $title = $link['title'];
                      $is_enabled = $link['is_enabled'];
                      $is_new = $link['is_new'];
                      echo "<a class='dropdown-item' href='{$href}' ";
                      if (!$is_enabled){
                        echo "style='pointer-events: none'";
                      }
                      echo ">{$title}";
                      if ($is_new){
                        echo $is_new_html;
                      }
                      echo "</a>";
                  }
                }
              ?>   

              <?php
                }
              ?>
              
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Mega Menu -->
</li>
<!-- End Landings -->

<!-- Company -->
<li class="hs-has-sub-menu nav-item">
  <a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">A empresa</a>

  <!-- Mega Menu -->
  <div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
    <a class="dropdown-item" href="page-about.html">Nosso time</a>
    <a class="dropdown-item" href="page-services.html">Unidades</a>
   
  </div>
  <!-- End Mega Menu -->
</li>
<!-- End Company -->

<!-- End Portfolio -->