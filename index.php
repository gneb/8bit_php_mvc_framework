<?php

session_start();

define("8bit",true);

define("ROOT_DIR", realpath(dirname(__FILE__)));
define("APP_DIR", ROOT_DIR."/application/");
define("SYS_DIR", ROOT_DIR."/system/");
define("CONFIG_FILE", ROOT_DIR."/config.php");
define("LIB_FILE", ROOT_DIR."/autoload_lib.php");
define("LIB_DIR", ROOT_DIR."/lib/");
define("CONTROLLERS_DIR", ROOT_DIR."/application/controllers/");
define("MODELS_DIR", ROOT_DIR."/application/models/");
define("VIEWS_DIR", ROOT_DIR."/application/views/");

require(CONFIG_FILE);
require(LIB_FILE);
global $config,$autoload_lib;

foreach($autoload_lib as $a_item)
{
  if(is_readable(LIB_DIR.$a_item.".php"))
      require(LIB_DIR.$a_item.".php");
    else
      echo "file $a_item.php not exists.";
}
require(SYS_DIR."core.php");
require(SYS_DIR."model.php");
require(SYS_DIR."view.php");
require(SYS_DIR."controller.php");
require(SYS_DIR . "_8bit.php");

new _8bit();