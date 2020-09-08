<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://www.roytuts.com
 */
class Statistics extends MY_Controller {
    private $main_menu = array();
    private $init_objs = array();

    function __construct() {
        parent::__construct(); 
        $this->load->model('statistics_model');       
    }

    function index() {
        $this->init_objs = $this->init();        
        $this->load->view('statistics_view', $this->init_objs);
    }

    function init(){  
        $m = $this->statistics_model->get_menu();            
        $this->main_menu['main_menu'] = new Menu();
        return $this->main_menu;
    }   
}
/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */