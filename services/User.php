<?php
/* Write your own function for a module here */
namespace Abstracts;

use \Abstracts\Helpers\Initialize;
use \Abstracts\Helpers\Database;
use \Abstracts\Helpers\Validation;
use \Abstracts\Helpers\Translation;
use \Abstracts\Helpers\Utilities;

use \Abstracts\Built;
use \Abstracts\Process;

use \Abstracts\API;
use \Abstracts\Log;

use \Abstracts\Product;

use \Abstracts\ProductWarehouse;

use Exception;
use DateTime;
use DateTimeZone;

class User {

  /* configuration */
  public $id = "126";
  public $public_functions = array();
  public $module = null;

  /* core */
  private $config = null;
  private $session = null;
  private $controls = null;

  /* helpers */
  private $database = null;
  private $validation = null;
  private $translation = null;

  /* services */
  private $api = null;
  private $log = null;
  private $user = null;

  function __construct(
    $session = null,
    $controls = null
  ) {

    /* initialize: core */
    $initialize = new Initialize($session, $controls, $this->id);
    $this->config = $initialize->config;
    $this->session = $initialize->session;
    $this->controls = $initialize->controls;
    $this->module = $initialize->module;
    
    /* initialize: helpers */
    $this->database = new Database($this->session, $this->controls);
    $this->validation = new Validation();
    $this->translation = new Translation();

    /* initialize: services */
    $this->api = new API($this->session, 
      Utilities::override_controls(true, true, true, true)
    );
    $this->log = new Log($this->session, 
      Utilities::override_controls(true, true, true, true)
    );
    $this->user = new Built(
      $this->session, 
      $this->controls, 
      $this->module->database_table
    );

  }

  function request($function, $parameters) {
    $result = null;
    if ($this->api->authorize($this->id, $function, $this->public_functions)) {
      /* Override or add function manually to module */
      // if ($function == "login") {
      //   $result = $this->$function();
      // } else {
      //   throw new Exception($this->translation->translate("Function not supported"), 421);
      // }
    }
    return $result;
  }

  /* Override or add function manually to module */
  // function login() {
  // }

}