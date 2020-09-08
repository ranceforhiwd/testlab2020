<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}
/* @author: Rance Aaron * Description: Home model class */
class Statistics_model extends CI_Model
{
    private $appdb;

    function __construct()
    {
        parent::__construct();
        $this->appdb = $this->load->database('appdemo', TRUE);
    }
        
    public function get_stats()
    {        
        $sql = "SELECT 
                    *
                FROM
                    reports_table_td;";
        
        $c = $this->appdb->query($sql);        
        return $c->result_array();
    }
    
    public function get_menu()
    {        
        $sql = "SELECT 
                    *
                FROM
                    main_menu;";
        
        $c = $this->appdb->query($sql);        
        return $c->result_array();
    }
}
?>