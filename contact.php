<!DOCTYPE html>
<html lang="@@languageDirection.lang" dir="@@if(languageDirection.isRTL){rtl}">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Contact us</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="@@vars.themeFont" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <!-- bundlecss:vendor [@@autopath] -->
  <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">

  <!-- CSS Front Template -->
  <!-- bundlecss:theme [@@autopath] @@vars.version -->
  <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <?php include "partials/navbar/main-with-topbar-absolute-top-light-slide.php"; ?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Post a Comment -->
    <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Contact us</h2>
      </div>
      <!-- End Heading -->

      <div class="row justify-content-lg-center">
        <div class="col-lg-8">
          <!-- Card -->
          <div class="card card-lg border shadow-none">
            <div class="card-body">
              <form id="comment_form">
                <div class="d-grid gap-4">
                  <!-- Form -->
                  <div class="row">
                    <div class="col-sm-6 mb-4 mb-sm-0">
                      <label class="form-label" for="blogContactsFormFirstName">First name</label>
                      <input type="text" class="form-control form-control-lg" name="firstname" id="firstname" placeholder="First name" aria-label="First name">
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label" for="blogContactsFormLasttName">Last name</label>
                      <input type="text" class="form-control form-control-lg" name="lastname" id="lastname" placeholder="Last name" aria-label="Last name">
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->
                  <span class="d-block">
                    <label class="form-label" for="blogContactsFormEmail">Your email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="email@site.com" aria-label="email@site.com">
                  </span>
                  <!-- End Form -->

                  <!-- Form -->
                  <span class="d-block">
                    <label class="form-label" for="blogContactsFormComment">Comment</label>
                    <textarea class="form-control form-control-lg" id="comment" name="comment" placeholder="Leave your comment here..." aria-label="Leave your comment here..." rows="5"></textarea>
                  </span>
                  <!-- End Form -->
                  
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Post a Comment -->

  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <?php include("partials/footer/main-dark.html"); ?>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <?php include("partials/modal/signup.html"); ?>
  
  <!-- Go To -->
  <?php include("partials/layouts-components/go-to.html"); ?>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory @@deleteLine:build -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <!-- bundlejs:vendor [@@autopath] -->
  <script src="assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>

  <!-- JS Front -->
  <!-- bundlejs:theme [@@autopath] -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/hs.bs-dropdown.js"></script>
  <script src="assets/js/hs.bs-validation.js"></script>


  <!-- SWEET ALERT -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <!-- Custom JS -->
   <script src="assets/js/custom/newsletter.js"></script>
   <script src="assets/js/custom/comment.js"></script>

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
    })()
  </script>
</body>
</html>
