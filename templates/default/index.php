<!doctype html>
<html lang="<?php echo $config["language"] ? $config["language"] : "en"; ?>">
  <head>

    <base href="<?php echo $config["template_path"]; ?>">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <div class="text-center">
              <img class="page-logo" src="assets/images/logo-inverted.svg" alt="Abstracts Framework" />
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-12 mr-auto">
            <div class="text-center">
              Framework that lets you create scalable platforms with no-code
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