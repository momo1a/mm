<?php
class MY_Controller extends CI_Controller
{

    public function __construct(){
        parent::__construct();
    }


    protected function jsonp_return($code=200,$msg='success',$data){
        $return = array(
            'code'=>$code,
            'msg' =>$msg,
            'data'=>$data
        );
        exit(json_encode($return));
    }

}