<?php if(!defined("8bit")) die("no primarry access!");

class model extends core
{
    public function __construct()
    {

    }

    public function load($name)
    {
          require(MODELS_DIR.$name.".php");

          $this->$name = new $name();

    }
}