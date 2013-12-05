<?php if(!defined("8bit")) die("no primarry access!");
class url {

    public $path = array();

    public $controller = null;

    public $method = null;

    public function __construct()
    {
        global $config;

        $this->path = (isset($_SERVER["PATH_INFO"])) ? array_filter(explode("/",$_SERVER["PATH_INFO"])): null;

        $this->controller = isset($this->path[1]) ? $this->path[1] : $config["default_controller"];

        $this->method = isset($this->path[2]) ? $this->path[2] : $config["default_method"];

    }
} 