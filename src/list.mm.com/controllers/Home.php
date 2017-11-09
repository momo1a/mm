<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('imgs_model','category_model'));
        $this->load->helper('url');
        $this->load->helper('tools');
    }


    public function index($cid,$page=1){

        $category = $this->category_model->get_all();
        for($i = 0; $i < count($category); $i++){
            if (intval($cid) == $category[$i]['id'])
                $page_title = $category[$i]['name'].$page;
        }
        $limit = 16;

        $page = $page == 0 ? 1 : $page;
        $list = $this->imgs_model->category_list(intval($cid),($page-1)*$limit,$limit);
        $total = $this->imgs_model->category_total(intval($cid));
        $config = array(
            'total' => $total,
            'size'  => $limit,
            'url'   => base_url().intval($cid).'/{page}',
            'page'  => $page,
            'show'  => isMobile() ? 0 : 4

        );

        $this->load->library('PagePer',$config);
        $pager = $this->pageper->myde_write();

        $this->load->view("home/list",get_defined_vars());
    }


}