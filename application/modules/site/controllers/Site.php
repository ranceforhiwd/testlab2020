<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://www.roytuts.com
 */
class Site extends MY_Controller {

    private $main_menu = array();

    function __construct() {
        parent::__construct(); 
        $this->load->model('site_model');       
    }

    function index() {
        $this->init();
        $this->startDashboard();
    }

    function init(){
        $this->main_menu['main_menu'] = new Menu($this->site_model->get_menu());
        //echo $main_menu->show_menu();
    }
    /**
     * The client code.
     */
    public function startDashboard()
    {
        $s1 = Dashboard::getInstance();
        $s2 = Dashboard::getInstance();

        if ($s1 === $s2) {
            $this->load->library('menu');
            $this->load->view('testview', $this->main_menu);
        } else {
            exit('error on');
        }
    }
}
/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */