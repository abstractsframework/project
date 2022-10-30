<!doctype html>
<html lang="<?php echo $config["language"] ? $config["language"] : "en"; ?>">
  <head>

    <?php 
    $app = "";
    $icon = "";
    if (isset($_GET["app"])) {
      $app = $_GET["app"];
      if ($app == "Google") {
        $icon = '<i class="page-icon fa-brands fa-google"></i>';
      } else if ($app == "Microsoft") {
        $icon = '<i class="page-icon fa-brands fa-microsoft"></i>';
      } else if ($app == "Apple") {
        $icon = '<i class="page-icon fa-brands fa-apple"></i>';
      } else if ($app == "Facebook") {
        $icon = '<i class="page-icon fa-brands fa-facebook"></i>';
      } else if ($app == "Instagram") {
        $icon = '<i class="page-icon fa-brands fa-instagram"></i>';
      } else if ($app == "Twitter") {
        $icon = '<i class="page-icon fa-brands fa-twitter"></i>';
      } else if ($app == "Snapchat") {
        $icon = '<i class="page-icon fa-brands fa-snapchat-ghost"></i>';
      } else if ($app == "Amazon") {
        $icon = '<i class="page-icon fa-brands fa-amazon"></i>';
      } else if ($app == "LinkedIn") {
        $icon = '<i class="page-icon fa-brands fa-linkedin"></i>';
      } else if ($app == "Line") {
        $icon = '<i class="page-icon fa-brands fa-line"></i>';
      } else if ($app == "WeChat") {
        $icon = '<i class="page-icon fa-brands fa-weixin"></i>';
      } else if ($app == "Spotify") {
        $icon = '<i class="page-icon fa-brands fa-spotify"></i>';
      }
    }
    ?>

    <base href="<?php echo $config["template_path"]; ?>">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libraries -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/meta/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/meta/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/meta/apple-touch-icon.png">
    <link rel="manifest" href="assets/meta/site.webmanifest">
    <link rel="mask-icon" href="assets/meta/safari-pinned-tab.svg" color="#ff0d46">
    <meta name="msapplication-TileColor" content="#ff0d46">
    <meta name="theme-color" content="#ff0d46">

    <title><?php echo $page_data["title"]; ?> | <?php echo $config["site_name"]; ?></title>

  </head>
  <body>

    <div class="content full-height">
      <div class="container force-center-middle">
        <div class="row align-items-center">
          <div class="col-lg-12 mr-auto">
            <div class="box fit text-center">
              <h4>
                {{status}}
              </h4>
              <p class="connect-message">
              <?php echo $icon; ?><?php echo $app; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-12 mr-auto">
            <div class="text-center">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="copyright">
        <img class="footer-logo" src="assets/images/logo-inverted.svg" alt="Abstracts Framework" />
        &copy;
      </div>
    </footer>

    <!-- Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>

  </body>
</html>