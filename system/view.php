<?php if(!defined("8bit")) die("no primary access!");

class view extends core
{
    public function __construct()
    {

    }

    public function load($_8bit_view_name_uniq,$vars = null)
    {

        if(empty($vars))
        {

            require(VIEWS_DIR.$_8bit_view_name_uniq.".php");
        }
        else
        {

            extract($vars);

            ob_start();

            require(VIEWS_DIR.$_8bit_view_name_uniq.".php");
            echo ob_get_clean();
        }

    }
}
