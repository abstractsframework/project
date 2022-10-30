<!doctype html>
<html lang="<?php echo $config["language"] ? $config["language"] : "en"; ?>">
  <head>

    <?php
    $code = $_GET["code"];
    if (isset($_GET["status"])) {
      $status = false;
      if ($_GET["status"] == "true") {
        $status = true;
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
              <div id="verify-failed" class="section-sticky"
              <?php echo ((isset($code) && !empty($code)) && $status === true) ? 'style="display: none;"' : ''; ?>>
                <?php 
                if ((isset($code) && !empty($code)) && $status !== true) {
                ?>
                <h2 class="text-danger">
                  <i class="page-icon fa-solid fa-triangle-exclamation"></i>
                  <?php echo translate("Failed"); ?>
                </h2>
                <h4 class="text-danger">
                  <?php echo translate("Please type the code manually"); ?>
                </h4>
                <?php 
                }
                ?>
                <p>
                  <div class="form-group">
                    <label for="site_name" class="col-form-label">Verification Code</label>
                    <input type="text" id="code" class="form-control"></input>
                  </div>
                </p>
                <p class="submit">
                  <button id="btn-submit" class="btn btn-primary">
                    <i class="btn-icon fa-solid fa-check"></i>
                    <?php echo translate("Verify"); ?>
                  </button>
                </p>
              </div>
              <div id="verify-success" class="section-sticky"
              <?php echo (isset($status) && $status === true) ? '' : 'style="display: none;"'; ?>>
                <h2 class="text-success">
                  <i class="page-icon fa-solid fa-check"></i>
                  <?php echo translate("Verified"); ?>
                </h2>
                <p class="submit">
                  <a href="<?php echo $config["website_url"]; ?>">
                    <button class="btn btn-primary">
                      <i class="btn-icon fa-solid fa-arrow-up-right-from-square"></i>
                      <?php echo translate("Home"); ?>
                    </button>
                  </a>
                </p>
              </div>
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

    <div id="modal-resend" class="modal fade" tabindex="-1"
    data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <h5 class="modal-title">
              <i class="title-icon fa-solid fa-redo"></i>
            </h5>
            <h5 class="modal-title">
              Resend
            </h5>
            <p>
              <!-- <?php echo translate("Type email address / phone number to receive code verification"); ?> -->
              <?php echo translate("Type email address to receive verification code"); ?>
            </p>
            <input type="text" id="modal-resend"></input>
          </div>
          <div class="modal-footer">
            <!-- 
            <button type="button" id="btn-resend-email" class="btn btn-primary" data-bs-dismiss="modal">
              <i class="btn-icon fa-solid fa-mobile-alt"></i>
              <?php echo translate("Via Email"); ?>
            </button> 
            <button type="button" id="btn-resend-phone" class="btn btn-primary" data-bs-dismiss="modal">
              <i class="btn-icon fa-solid fa-mobile-alt"></i>
              <?php echo translate("Via Phone"); ?>
            </button> 
            -->
            <button type="button" id="btn-resend-default" class="btn btn-primary" data-bs-dismiss="modal">
              <i class="btn-icon fa-solid fa-envelope"></i>
              <?php echo translate("Send"); ?>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="modal-success" class="modal fade" tabindex="-1"
    data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <h5 class="modal-title">
              <i class="title-icon success fa-solid fa-circle-check"></i>
            </h5>
            <h5 id="success-title" class="modal-title">
            </h5>
            <p id="success-message">
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              <i class="btn-icon fa-solid fa-xmark"></i>
              <?php echo translate("Close"); ?>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="modal-error" class="modal fade" tabindex="-1"
    data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <h5 class="modal-title">
              <i class="title-icon danger fa-solid fa-triangle-exclamation"></i>
            </h5>
            <h5 id="error-title" class="modal-title">
            </h5>
            <p id="error-message">
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" id="btn-resend" class="btn btn-primary" data-bs-dismiss="modal">
              <i class="btn-icon fa-solid fa-redo"></i>
              <?php echo translate("Resend"); ?>
            </button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              <i class="btn-icon fa-solid fa-xmark"></i>
              <?php echo translate("Close"); ?>
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
    $(document).ready(function() {
      $("#btn-submit").click(function () {
        submit();
      });
      $("#modal-response").on('hidden.bs.modal', function () {
        $("#code").val("");
      });
      $("#btn-resend").click(function () {
        $("#modal-response").modal('hide');
        $("#resend").modal("show");
      });
      $("#btn-resend-default").click(function () {
        resendDefault();
      });
    });
    
    function submit() {
      if ($("#code").val()) {
        $("#btn-submit").prop("disabled", true);
        $("#btn-submit").text("<?php echo translate("Verifying") . "..."; ?>");
        $("#error-title").text("");
        $("#error-message").text("");
        $("#success-title").text("");
        $("#success-message").text("");
        var code = $("#code").val();
        $.ajax({
          url: "<?php echo $config["website_url"]; ?>service/core/1.0/user.php",
          type: "POST",
          cache: false,
          dataType: "json",
          data: {
            method: "verify_code",
            code: code
          },
          success: function(response) {
            if (response.status == true) {
              $("#btn-submit").prop("disabled", false);
              $("#btn-submit").text("<?php echo translate("Verify"); ?>");
              $("#verify-failed").hide();
              $("#verify-success").show();
            } else if (response.status == false) {
              $("#error-title").text(`<?php echo translate("Verification Failed"); ?>`);
              $("#error-message").text(`<?php echo translate("Unable to verify with this code. Make sure you give the correct code or click on resend button to receive new code."); ?>`);
              $("#modal-error").modal("show");
              $("#btn-submit").prop("disabled", false);
              $("#btn-submit").text("<?php echo translate("Verify"); ?>");
              $("#verify-success").hide();
              $("#verify-failed").show();
            }
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            $("#error-title").text(`<?php echo translate("Verification Failed"); ?>`);
            $("#error-message").text(`<?php echo translate("Unable to verify due to technical issue. Please try again later."); ?>`);
            $("#modal-error").modal("show");
            $("#btn-submit").prop("disabled", false);
            $("#btn-submit").text("<?php echo translate("Verify"); ?>");
            $("#verify-success").hide();
            $("#verify-failed").show();
          }
        });
      } else {
        $("#error-title").text(`<?php echo translate("Verification Failed"); ?>`);
        $("#error-message").text(`<?php echo translate("Please type the code we sent to you"); ?>`);
        $("#modal-error").modal("show");
        $("#verify-success").hide();
        $("#verify-failed").show();
      }
    }
    
    function resendDefault() {
      if ($("#resend").val()) {
        $("#btn-resend-default").prop("disabled", true);
        $("#btn-resend-default").text("<?php echo translate("Sending") . "..."; ?>");
        var email = $("#resend").val();
        $.ajax({
          url: "<?php echo $config["website_url"]; ?>service/core/1.0/user.php",
          type: "POST",
          cache: false,
          dataType: "json",
          data: {
            method: "send_verification_code_via_email",
            code: email
          },
          success: function(response) {
            if (response.status == true) {
              $("#success-title").text(`<?php echo translate("Resend Successful"); ?>`);
              $("#success-message").text(`<?php echo translate("Verfification code has been sent via email"); ?>`);
              $("#success").modal("show");
              $("#btn-resend-default").prop("disabled", false);
              // $("#btn-resend-default").text("<?php echo translate("Via Email"); ?>");
              $("#btn-resend-default").text("<?php echo translate("Send"); ?>");
            } else if (response.status == false) {
              $("#error-title").text(`<?php echo translate("Resend Failed"); ?>`);
              $("#error-message").text(response.message);
              $("#modal-error").modal("show");
            }
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            $("#btn-resend-default").prop("disabled", false);
            // $("#btn-resend-default").text("<?php echo translate("Via Email"); ?>");
            $("#btn-resend-default").text("<?php echo translate("Send"); ?>");
            $("#error-title").text(`<?php echo translate("Resend Failed"); ?>`);
            $("#error-message").text(`<?php echo translate("Unable to resend verification code to this email due to technical issue. Please try again later."); ?>`);
            $("#modal-error").modal("show");
          }
        });
      } else {
        $("#error-title").text(`<?php echo translate("Resend Failed"); ?>`);
        $("#error-message").text(`<?php echo translate("Please type email you used for signing up"); ?>`);
        $("#modal-error").modal("show");
      }
    }
    </script>

  </body>
</html>