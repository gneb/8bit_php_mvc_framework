<?php if(!defined("8bit")) die("no primary access!");

class controller extends core
{

    public function __construct()
    {

        $this->url = new url();
        $this->model = new model();
        $this->view = new view();

    }



}
