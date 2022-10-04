<?php 

include "db.php";
$query = "SELECT * FROM slider_articles INNER JOIN author ON slider_articles.author_id = author.id";
$sql = mysqli_query($conexao, $query) or die(mysqli_connect_error());

$slides_result=mysqli_fetch_all($sql, MYSQLI_ASSOC);

mysqli_close($conexao);
?>

<!-- Swiper Main Slider -->
<div class="js-swiper-blog-journal-hero swiper">
    <div class="swiper-wrapper">

      <?php 
        foreach ($slides_result as $value) {
          $value["author_picture"] = $value["author_picture"] == null ? "img1.jpg" : $value["author_picture"];
      ?>
        <div class="js-swiper-slide-preload swiper-slide d-flex gradient-x-overlay-sm-dark bg-img-start" style="background-image: url(assets/img/<?php echo $value["background_image_path"]; ?>); min-height: 40rem;">
          <!-- Container -->
          <div class="container d-flex align-items-center" style="min-height: 40rem;">
            <div class="w-lg-50 me-3">
              <!-- Media -->
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-circle">
                    <img class="avatar-img" src="assets/img/160x160/<?php echo $value["author_picture"]; ?>" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <a class="text-white" href="#"><?php echo $value["author_name"]; ?></a>
                </div>
              </div>
              <!-- End Media -->

              <div class="mb-5">
                <h2 class="h1 text-white"><?php echo $value["slider_text"]; ?></h2>
              </div>
              
              <a class="btn btn-primary btn-transition" href="blog-article.php?article=<?php echo $value["article_id"]; ?>">Ler o artigo<i class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>
          <!-- End Container -->
        </div>
      <?php
        }
      ?>

      


    </div>

    <!-- Swiper Pagination -->
    <div class="js-swiper-blog-journal-hero-pagination swiper-pagination swiper-pagination-light swiper-pagination-vertical swiper-pagination-middle-y-end me-3 d-lg-none"></div>

    <div class="js-swiper-preloader d-flex align-items-center justify-content-center top-0 position-absolute w-100 h-100 bg-white zi-1">
      <div class="spinner spinner-border text-primary"></div>
    </div>
</div>
<!-- End Swiper Main Slider -->