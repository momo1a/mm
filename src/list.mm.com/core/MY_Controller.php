<?php

class MY_Controller extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
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


    /**
     * 分页公共方法
     * @param number $total 总记录数
     * @param number $per_page 每页显示记录数
     */
    protected function pager($total = 0, $per_page = 10, $ext_conf = array()){
        $this->load->library('pagination');
        $uri = http_build_query(array_merge($_GET, $_POST));
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['base_url'] = site_url($this->router->class . '/' . $this->router->method);
        $config['prev_link'] = '上一页';
        $config['next_link'] = '下一页';
        $config['first_link'] = '首页';
        $config['last_link'] = '末页';
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
        $ext_conf['first_url'] = isset($ext_conf['first_url'])?$ext_conf['first_url']:NULL;
        if($ext_conf['first_url']){
            $config['first_url'] = $ext_conf['first_url'];
            unset($ext_conf['first_url']);
        }else{
            $config['first_url'] = site_url($this->router->class . '/' . $this->router->method . '/0');
        }
        if($uri){
            $config['suffix'] = '?' . $uri;
            $config['first_url'] = $config['first_url'] . '?' . $uri;
        }
        foreach($ext_conf as $k=>$v){
            if(property_exists($this->pagination, $k)){
                $config[$k] = $v;
            }
        }
        if($config['per_page'] == 0 or $config['total_rows'] == 0){
            return '';
        }
        $this->pagination->initialize($config);
        $html = $this->pagination->create_links();
        $total_page = ceil($config['total_rows'] / $config['per_page']);
        $cur_page = $this->pagination->cur_page;
        $cur_page = $cur_page ? $cur_page : 1;
        $html = '<span style="padding-right:10px;">第'.$cur_page.'页/共'.$total_page.'页</span>'.$html;
        if($total_page>1){
            $html .= '<a href="{offset}" style="display:none;">go</a>';
            $html .= '<form onsubmit="(function(f){';
            $html .= "var per_page = {$config['per_page']};";
            $html .= 'var page = $(f).find(\'input.gopage\').val();';
            $html .= 'if(page>=1 && page<='.$total_page.' && page!='.$cur_page.'){}else{return false;}';	//判断输入的页数是否合理
            $html .= "var a = $(f).prev('a'); var gohref = a.attr('href').replace('{offset}', page*per_page-per_page);";
            $html .= "if(a.attr('rel') && a.attr('type')=='load'){a.attr('href', gohref).trigger('click');}else{location.href=gohref}";
            $html .= '})(this);return false;" style="display:inline;">';
            $html .= ' 到第 <input type="text" size="3" class="gopage" style="padding:2px 1px;" /> 页';
            $html .= ' <input type="submit" value="确定" class="ui-form-btnSearch" />';
            $html .= '</form>';
        }
        return $html;
    }

}