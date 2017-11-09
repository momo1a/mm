<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('imgs_model','category_model'));
    }

    public function index($id=0){

        $category = $this->category_model->get_all();
        $detail = $this->imgs_model->detail(intval($id));
        $recommand = $this->imgs_model->get_recommand(intval($id));

        if(!$detail){
            show_404();
        }
        $page_title = mb_substr($detail['title'],0,mb_strpos($detail['title'],'('));
        $this->load->view("home/detail",get_defined_vars());
    }



}