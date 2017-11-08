<?php
class Base_Controller extends CI_Controller
{
    public $_category = null;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->_category = $this->Category_model->get_all();
    }
}