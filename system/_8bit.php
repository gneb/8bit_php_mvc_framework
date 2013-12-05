<?php if(!defined("8bit")) die("no primary access!");


class _8bit
{
    public $controller;
    public $runing;
    public $errors = array();
    public function __construct()
    {
      $this->controller = new controller();
      $this->run_core();

      $this->handle_errors();

    }

    public  function handle_errors()
    {
        if(!empty($this->errors))
        {
            foreach($this->errors as $error_item)
            {
                echo "<p>".$error_item."</p>";
            }
            die();
        }
    }
    public function run_core()
    {
       if($this->_8bit_controller_class_file_exists() && $this->_8bit_controller_is_class())
       {
        // run controller
        $this->runing = new $this->controller->url->controller();

       }
       else
       {
           $this->errors[] = "requested class not found!";
       }
        // run method
        $tmp_method_name = $this->controller->url->method ? $this->controller->url->method : null;

        if(method_exists($this->runing,$tmp_method_name))
        {
            // call
            $this->runing->$tmp_method_name();
        }
        else
        {
            $this->errors[] = "requested class method not found!";
        }
    }

    private function _8bit_controller_class_file_exists()
    {
        return file_exists(CONTROLLERS_DIR.$this->controller->url->controller.".php");
    }

    private function _8bit_controller_is_class()
    {
        require(CONTROLLERS_DIR.$this->controller->url->controller.".php");
        return class_exists($this->controller->url->controller);
    }
}
