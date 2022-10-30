<?php
if (file_exists("../abstracts.config.php")) {
  require("../abstracts.config.php");
}
require("../vendor/autoload.php");

use \Abstracts\Helpers\Initialize;
use \Abstracts\Render;

Initialize::timeout(0);
Initialize::display_errors(true);
$render = new Render();
$render->response();