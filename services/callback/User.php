<?php
/* Write your own callback functions for a module here */
namespace Abstracts\Callback;

use \Abstracts\Helpers\Initialize;
use \Abstracts\Helpers\Database;
use \Abstracts\Helpers\Validation;
use \Abstracts\Helpers\Translation;
use \Abstracts\Helpers\Utilities;

use \Abstracts\Built;

use Exception;

class User {

  /* initialization */
  private $module = null;
  private $config = null;
  private $session = null;
  private $controls = null;

  /* helpers */
  private $database = null;
  private $validation = null;
  private $translation = null;

  /* services */
  private $vendor = null;

  function __construct(
    $session = null,
    $controls = null,
    $identifier = null
  ) {

    /* initialize: core */
    $initialize = new Initialize($session, $controls, $identifier);
    $this->config = $initialize->config;
    $this->session = $initialize->session;
    $this->controls = $initialize->controls;
    $this->module = $initialize->module;
    
    /* initialize: helpers */
    $this->database = new Database($this->session, $this->controls);
    $this->validation = new Validation();
    $this->translation = new Translation();
    
  }

  function login($arguments = null, $data = null) {
    return $data;
  }
  
}