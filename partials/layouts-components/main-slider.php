<?php 

include "db.php";
$query = "SELECT * FROM slider_articles INNER JOIN author ON slider_articles.author_id = author.id";
$sql = mysqli_query($conexao, $query) or die(mysqli_connect_error());

$slides_result=mysqli_fetch_all($sql, MYSQLI_ASSOC);

mysqli_close($conexao);

function tease($body, $sentencesToDisplay = 2) {
  $nakedBody = preg_replace('/\s+/',' ',strip_tags($body));
  $sentences = preg_split('/(\.|\?|\!)(\s)/',$nakedBody);

  if (count($sentences) <= $sentencesToDisplay)
      return $nakedBody;

  $stopAt = 0;
  foreach ($sentences as $i => $sentence) {
      $stopAt += strlen($sentence);

      if ($i >= $sentencesToDisplay - 1)
          break;
  }

  $stopAt += ($sentencesToDisplay * 2);
  return trim(substr($nakedBody, 0, $stopAt));
}
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


<!-- Swiper Thumbs Slider -->
<div class="d-none d-lg-block container translate-middle-y position-absolute top-50 start-0 end-0 zi-2">
  <div class="translate-middle-y position-absolute top-50 end-0">
    <div class="js-swiper-blog-journal-hero-thumbs swiper" style="opacity:0;max-width: 13rem;">
      <div class="swiper-wrapper">
      <?php 
        foreach ($slides_result as $value) {
      ?>

        <!-- Slide -->
        <div class="swiper-slide swiper-pagination-progress swiper-pagination-progress-light py-3">
            <p class="text-white">
              <?php echo mb_substr($value["slider_text"], 0, 50, 'UTF-8'); ?>...
            </p>

            <div class="swiper-pagination-progress-body">
              <div class="js-swiper-pagination-progress-body-helper swiper-pagination-progress-body-helper"></div>
            </div>
          </div>
          <!-- End Slide -->

      <?php
        }
      ?>

      </div>
    </div>
  </div>
</div>
<!-- End Swiper Thumbs Slider -->