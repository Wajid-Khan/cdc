<?php

class Login extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('LoginModel');
        if($this->session->user_info == TRUE)
        {
            return redirect('admin/dashboard');
        }
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function signin() 
    {
        // Set validation rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) 
        {
            // Validation failed, reload the login page or show an error message
            $this->load->view('admin/login');
        } 
        else 
        {
            // Validation succeeded, proceed with authentication
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            // Validate credentials
            $result = $this->LoginModel->authenticate($email);
            if(empty($result))
            {
                $this->session->set_flashdata('email', 'Email not exist...');
                $this->load->view('admin/login');
            }
            else 
            {
                if($password == $result->password)
                {
                    $this->session->set_userdata('user_info', $result);
                    return redirect('admin/dashboard');
                }
                else
                {
                    $this->session->set_flashdata('pwd', 'Password does not match...');
                    $this->load->view('admin/login');
                }
            }
        }
    }

}
