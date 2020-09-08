<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu {

    private $values = array();
    private $value = null;

    function __construct($m=null) {
        if($m && !empty($m) && $m != null){
            $this->set_values($m);
            $this->value = $this->add_element('menu', $this->values);
            return ;
        }       
    }

    public function show_menu()
    {
        return $this->value;
    }

    private function get_values(){    
        return $this->values;
    }

    private function set_values($v){
        foreach($v as $x=>$y){
            $this->values[$y['id']] = $y['title'];
        }  
    }

    public function add_element($type, $e)
    {
        $output = '<div class="w3-sidebar w3-bar-block w3-border-right" style="width:10%">';

        foreach($this->values as $t=>$title){
            $output .= '<a href="#module_'.$t.'" class="w3-bar-item w3-button">'.$title.'</a>';
        }

        $output .= '</div>';

        return $output;
    }
}