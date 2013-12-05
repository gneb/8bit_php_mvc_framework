<?php if(!defined("8bit")) die("no primarry access!");
class user extends model{

    public function getAll()
    {
      return ["name1"=>"Stinky","name2"=>"btinky","name3"=>"vinky"];
    }
} 