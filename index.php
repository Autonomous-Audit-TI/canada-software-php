<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Canada-Software Apps & Software</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">


  <!-- CSS Implementing Plugins -->
  <!-- bundlecss:vendor [@@autopath] -->
  <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <?php include "partials/navbar/main-with-topbar-absolute-top-light-slide.php"; ?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative">

      <?php include "partials/layouts-components/main-slider.php"; ?>

      <!-- Swiper Thumbs Slider -->
      <div class="d-none d-lg-block container translate-middle-y position-absolute top-50 start-0 end-0 zi-2">
        <div class="translate-middle-y position-absolute top-50 end-0">
          <div class="js-swiper-blog-journal-hero-thumbs swiper" style="opacity:0;max-width: 13rem;">
            <div class="swiper-wrapper">
              <!-- Slide -->
              <div class="swiper-slide swiper-pagination-progress swiper-pagination-progress-light py-3">
                <p class="text-white">Da entrevista ao MVP com seu cliente...</p>

                <div class="swiper-pagination-progress-body">
                  <div class="js-swiper-pagination-progress-body-helper swiper-pagination-progress-body-helper"></div>
                </div>
              </div>
              <!-- End Slide -->

              <!-- Slide -->
              <div class="swiper-slide swiper-pagination-progress swiper-pagination-progress-light py-3">
                <p class="text-white">Low Code + Code : Acelerando processos de construção...</p>

                <div class="swiper-pagination-progress-body">
                  <div class="js-swiper-pagination-progress-body-helper swiper-pagination-progress-body-helper"></div>
                </div>
              </div>
              <!-- End Slide -->

              <!-- Slide -->
              <div class="swiper-slide swiper-pagination-progress swiper-pagination-progress-light py-3">
                <p class="text-white">EDI em projetos governamentais e a assinatura eletrônica...</p>

                <div class="swiper-pagination-progress-body">
                  <div class="js-swiper-pagination-progress-body-helper swiper-pagination-progress-body-helper"></div>
                </div>
              </div>
              <!-- End Slide -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Swiper Thumbs Slider -->
    </div>
    <!-- End Hero -->

    <!-- Card Grid -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-8 mb-10 mb-lg-0">
          <div id="card_container" class="d-grid gap-7 mb-7">
            <!-- CARDS FROM DATABASE ARE RENDERED HERE -->
          </div>

          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>

          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination" id="pagination_component">
            </ul>
          </nav>
          <!-- End Pagination -->
        </div>
        <!-- End Col -->

        <div class="col-lg-3">
          <div class="mb-7">
            <div class="mb-3">
              <h3>Newsletter</h3>
            </div>

            <!-- Form -->
            <form id="newsletter_form">
              <div class="mb-2">
                <input type="email" id="email_input" class="form-control" placeholder="Enter email" aria-label="Enter email">
              </div>
              <div class="d-grid">
                <button type="submit" id="newsletter_submit" class="btn btn-primary">Subscribe</button>
              </div>
            </form>
            <!-- End Form -->

            <p class="form-text">Get special offers on the latest developments from Front.</p>
          </div>

          <div class="mb-7">
            <div class="mb-3">
              <h3 id="first_group_title"></h3>
            </div>

            <!-- List Group -->
            <ul class="list-group list-group-lg" id="first_group_list">
            </ul>
            <!-- End List Group -->
          </div>

          <!-- Sticky Block Start Point -->
          <div id="stickyBlockStartPoint"></div>

          <div class="js-sticky-block"
               data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "targetSelector": "#header",
                 "breakpoint": "md",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 80
               }'>
            <div class="mb-7">
              <div class="mb-3">
                <h3 id="second_group_title"></h3>
              </div>

              <div class="d-grid gap-2" id="second_group_list">
              </div>
            </div>

            <div class="mb-7" id="tags">
              <div class="mb-3">
                <h3>Tags</h3>
              </div>
            </div>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  
  <?php

  // @@include("partials/footer/main-dark.html")
  include 'partials/footer/main-dark.html';

  ?>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <?php

  // @@include("partials/modal/signup.html")
  include 'partials/modal/signup.html';

  ?>
  
  
  <!-- Go To -->
  <?php

  // @@include("partials/layouts-components/go-to.html")
  //include 'partials/layouts-components/go-to.html';

  ?>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory @@deleteLine:build -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <!-- bundlejs:vendor [@@autopath] -->
  <script src="assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>

  <!-- JS Front -->
  <!-- bundlejs:theme [@@autopath] -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/hs.bs-dropdown.js"></script>
  <script src="assets/js/hs.bs-validation.js"></script>

  <!-- SWEET ALERT -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- Custom JS -->
  <script src="assets/js/custom/paginate.js"></script>
  <script src="assets/js/custom/posts.js"></script>
  <script src="assets/js/custom/newsletter.js"></script>



  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF SWIPER
      // =======================================================
      function loadImage( path ) {
        return new Promise(function (resolve) {
          const img = new Image()

          img.addEventListener('load', () => {
            resolve()
          })

          img.src = path.replace(/url\(\"(.*?)\"\)/g, '$1')
        })
      }

      const $preloader = document.querySelector('.js-swiper-preloader')
      const promises = [...document.querySelectorAll('.js-swiper-slide-preload')]
              .map(slide => loadImage(window.getComputedStyle(slide).backgroundImage))

      Promise.all(promises)
              .then(() => {
                $preloader.remove()

                var sliderThumbs = new Swiper('.js-swiper-blog-journal-hero-thumbs', {
                  direction: 'vertical',
                  watchSlidesVisibility: true,
                  watchSlidesProgress: true,
                  slidesPerView: 3,
                  history: false,
                  on: {
                    'afterInit': function (swiper) {
                      swiper.el.style.opacity = 1
                      swiper.el.querySelectorAll('.js-swiper-pagination-progress-body-helper')
                              .forEach($progress => $progress.style.transitionDuration = `${swiper.params.autoplay.delay}ms`)
                    }
                  }
                });

                var swiper = new Swiper('.js-swiper-blog-journal-hero',{
                  effect: 'fade',
                  autoplay: true,
                  loop: true,
                  pagination: {
                    el: '.js-swiper-blog-journal-hero-pagination',
                    clickable: true,
                  },
                  thumbs: {
                    swiper: sliderThumbs
                  }
                });
              })


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      new HSStickyBlock('.js-sticky-block', {
        targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
      })
    })()
  </script>
</body>
</html>
