<?php
class Category_model extends CI_Model
{


    protected static $table = 'category';

    public function __construct(){
        parent::__construct();
    }

    public function get_all(){

        $query = $this->db->get(self::$table);
        return $query->result_array();

    }
}