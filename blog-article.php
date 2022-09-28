<?php
include 'db.php';

$article_id = htmlspecialchars($_GET["article"]);
$query = "SELECT * FROM blog_post INNER JOIN author ON blog_post.author = author.author_name WHERE blog_post.id = {$article_id}";
$sql = mysqli_query($conexao, $query) or die(mysqli_connect_error());
mysqli_query($conexao, "UPDATE blog_post SET views = (views + 1) WHERE id = {$article_id}");

$article=mysqli_fetch_all($sql, MYSQLI_ASSOC)[0];

mysqli_close($conexao);

$article["author_picture"] = $article["author_picture"] == null ? "img9.jpg" : $article["author_picture"];
?>

<!DOCTYPE html>
<html lang="@@languageDirection.lang" dir="@@if(languageDirection.isRTL){rtl}">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Blog: Article | Front - Multipurpose Responsive Template</title>

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
    <!-- Article Description -->
    <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
      <div class="w-lg-65 mx-lg-auto">
        <div class="mb-4">
          <h1 class="h2" id="post_title"><?php echo $article["title"]; ?></h1>
        </div>

        <div class="row align-items-sm-center mb-5">
          <div class="col-sm-7 mb-4 mb-sm-0">
            <!-- Media -->
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img id="post_author_image" class="avatar avatar-circle" src=<?php echo "assets/img/160x160/".$article["author_picture"]; ?> alt="Image Description">
              </div>

              <div class="flex-grow-1 ms-3">
                <h5 class="mb-0">
                  <a class="text-dark" id="post_author" href="#"><?php echo $article["author_name"]; ?></a>
                </h5>
                <span id="post_date" class="d-block small"><?php echo $article["createdAt"]; ?></span>
              </div>
            </div>
            <!-- End Media -->
          </div>
          <!-- End Col -->

          <div class="col-sm-5">
            <div class="d-flex justify-content-sm-end align-items-center">
              <span class="text-cap mb-0 me-2">Share:</span>

              <div class="d-flex gap-2">
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-facebook"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-twitter"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-instagram"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-telegram"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>


      <div class="w-lg-65 mx-lg-auto" id="post_content">
        <?php 
        echo $article["content"]; 
        ?>
      </div>

      <div class="w-lg-65 mx-lg-auto">
        <!-- Card -->
        <div class="card bg-dark text-center my-4" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
          <div class="card-body">
            <h4 class="text-white mb-4">Like what you're reading? Subscribe to our top stories.</h4>

            <div class="w-lg-75 mx-lg-auto">
              <form id="newsletter_form">
                <!-- Input Card -->
                <div class="input-card input-card-sm border">
                  <div class="input-card-form">
                    <label for="email_input" class="form-label visually-hidden">Enter email</label>
                    <input type="email" class="form-control" id="email_input" placeholder="Enter email" aria-label="Enter email">
                  </div>
                  <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
                <!-- End Input Card -->
              </form>
            </div>
          </div>
        </div>
        <!-- End Card -->

      </div>
    </div>
    <!-- End Article Description -->

    <!-- User Profile -->
    <div class="container content-space-t-1 mb-5">
      <div class="row justify-content-lg-center">
        <div class="col-lg-8">
          <div class="mb-5">
            <h4>About the author</h4>
          </div>

          <!-- Media -->
          <div class="d-sm-flex">
            <div class="flex-shrink-0 mb-3 mb-sm-0">
              <img class="avatar avatar-xl avatar-circle" src=<?php echo "assets/img/160x160/".$article["author_picture"]; ?> alt="Image Description">
            </div>

            <div class="flex-grow-1 ms-sm-4">
              <!-- Media -->
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">
                  <a class="text-dark" href="blog-author-profile.html"><?php echo $article["author_name"];  ?></a>
                </h3>
                <button type="button" class="btn btn-outline-primary btn-sm">
                  <i class="bi-person-plus-fill me-1"></i> Follow
                </button>
              </div>
              <!-- End Media -->

              <p>
                <?php echo $article["author_about"]; ?>
              </p>
            </div>
          </div>
          <!-- End Media -->
        </div>
      </div>
    </div>
    <!-- End User Profile -->

    <iframe id="frame" style="display: none;"></iframe>
    <!-- Post a Comment -->
    <div class="container content-space-b-2">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Post a comment</h2>
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
