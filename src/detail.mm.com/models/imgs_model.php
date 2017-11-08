<?php
class Imgs_model extends CI_Model
{


    protected static $table = 'imgs';

    public function __construct(){
        parent::__construct();
    }

    public function detail($id){
        $query = $this->db->where(array('id'=>$id))->get(self::$table);
        return $query->row_array();

    }


    public function get_recommand($not_id){
        $query = $this->db->select_max('id')->get(self::$table);
        $max = $query->row_array();
        $query = $this->db->select_min('id')->get(self::$table);
        $min = $query->row_array();
        $ids = array();
        $length = 100;
        $count = 0;
        while ($count < $length){
            $rand_id = rand(intval($min['id']),intval($max['id']));
            if ($rand_id == $not_id)
                continue;
            $ids[] = $rand_id;
            array_unique($ids);
            $count = count($ids);
        }

        $query = $this->db->where_in('id',$ids)
            ->order_by('id','DESC')
            ->get(self::$table)
        ;

        return $query->result_array();
    }


}