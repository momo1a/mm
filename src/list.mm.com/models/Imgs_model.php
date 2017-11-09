<?php
class Imgs_model extends CI_Model
{


    protected static $table = 'imgs';

    public function __construct(){
        parent::__construct();
    }

    /**
     * @param $cid
     * @param $offset
     * @param $limit
     * @return mixed
     */
    public function category_list($cid,$offset=0,$limit=16){
        $query = $this->db->where(array('cid'=>$cid))
            ->offset($offset)
            ->limit($limit)
            ->order_by('id','DESC')
            ->get(self::$table);

        return $query->result_array();
    }


    public function category_total($cid){
        $this->db->where(array('cid'=>$cid))
            ->from(self::$table);

        return $this->db->count_all_results();
    }
}