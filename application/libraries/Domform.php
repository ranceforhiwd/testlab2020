<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domform {

    private $values = array();
    private $value = null;

    function __construct() {
        $name = 'rance';
       $this->set_values($name);
       $this->value = $this->add_element('input', $name);
       return ;       
    }

    public function some_method()
    {
    }

    public function show_form()
    {
        return $this->value;
    }

    private function get_values(){
        return $this->values;
    }

    private function set_values($v){
        $this->values[] = $v;
    }

    public function add_element($type, $e)
    {
        return '<form id="'.$e.'" class="w3-container">
        <label>'.$e.'</label>
        <input class="w3-input" type="text">
        </form>';
    }
}