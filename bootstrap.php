<?php
  // Load Config
  require_once 'config/config.php';
  // Load Helpers
  require_once '../app/helpers/url_helper';
  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  
