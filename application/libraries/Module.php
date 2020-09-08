<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module {

    private $data = array();
    private $title = null;
    private $form;

    function __construct($t=null) {
       $this->set_title($t);   
    }

    public function show_title()
    {
        return $this->title;
    }

    private function get_values(){
        return $this->data;
    }

    private function set_title($t){
        $this->title = $t;
    }

    private function set_values($d){
        $this->data[] = $d;
    }

}