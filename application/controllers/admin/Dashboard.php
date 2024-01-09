<?php

class Dashboard extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        if($this->session->user_info === '')
        {
            return redirect('admin/login');
        }
    }

    public function index()
    {
        $this->load->view('admin/dashboard1');
    }
}
