<?php
class Imgs_model extends CI_Model
{


    protected static $table = 'imgs';

    public function __construct(){
        parent::__construct();
    }

    public function get_list(){
        $query = $this->db->order_by('dateline','desc')->limit(4)->get(self::$table);
        return $query->result_array();

    }

    public function foot_img(){
        $query = $this->db->order_by('id','desc')->limit(12)->get(self::$table);
        return $query->result_array();
    }


    public function home_list(){
        $sql = <<<SQL
select a1.* from mm_imgs a1
inner join
(select a.cid,a.dateline from mm_imgs a left join mm_imgs b
on a.cid=b.cid and a.dateline<=b.dateline
group by a.cid,a.dateline
having count(b.dateline)<=4
)b1
on a1.cid=b1.cid and a1.dateline=b1.dateline
order by a1.cid,a1.dateline desc
SQL;

        $query = $this->db->query($sql);

        return $query->result_array();
    }
}