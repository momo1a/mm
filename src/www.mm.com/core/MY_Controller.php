<?php
class MY_Controller extends CI_Controller
{

    public function __construct(){
        $this->load->helper('url');
        parent::__construct();
    }


    protected function jsonp_return($code=200,$msg='success',$data){
        $return = array(
            'code'=>$code,
            'msg' =>$msg,
            'data'=>$data
        );
        $jsonCallback = $this->input->get('jsonpCallback');
        exit($jsonCallback.'('.json_encode($return).')');
    }

}