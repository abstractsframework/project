<!doctype html>
<html lang="<?php echo $config["language"] ? $config["language"] : "en"; ?>">
  <head>

    <base href="<?php echo $config["template_path"]; ?>">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex" />

    <!-- Libraries -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/meta/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/meta/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/meta/apple-touch-icon.png">
    <link rel="manifest" href="assets/meta/site.webmanifest">
    <link rel="mask-icon" href="assets/meta/safari-pinned-tab.svg" color="#64cbff">
    <meta name="msapplication-TileColor" content="#64cbff">
    <meta name="theme-color" content="#64cbff">

    <title><?php echo $error["message"]; ?> | <?php echo $config["site_name"]; ?></title>

  </head>
  <body>

    <div class="content full-height">
      <div class="container force-center-middle">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto">
            <div class="text-center">
              <img class="page-logo" src="assets/images/logo-inverted.svg" alt="Abstracts Framework" />
            </div>
          </div>
          <div class="col-lg-6 mr-auto">
            <div class="text-center text-lg-start">
              <h3 class="text-white mb-4"><?php echo $error["message"]; ?></h3>
              <p class="text-white"><?php echo translate("ERROR"); ?> <?php echo $error["code"]; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" crossorigin="anonymous"></script>

  </body>
</html>