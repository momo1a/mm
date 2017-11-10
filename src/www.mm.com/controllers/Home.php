<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('imgs_model','category_model'));
    }

    public function index(){

        $this->output->cache(86400);
        $page_title = '美女图片|性感美女|明星写真|清纯美眉|美女校花|性感车模|旗袍美女';
        $list = $this->imgs_model->home_list();
        $category = $this->category_model->get_all();
        $this->load->view("home/home",get_defined_vars());
    }


    public function get_json(){
        $res = $this->imgs_model->foot_img();
        if($res){
            $this->jsonp_return(200,'success',$res);
        }else{
            $this->jsonp_return(500,'fail',null);
        }
    }
}