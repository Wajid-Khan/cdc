<?php

class Posts extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        if($this->session->user_info == FALSE)
        {
            return redirect('admin/login');
        }
        $this->load->model('PostModel');
        $this->load->model('CategoryModel');
    }

    public function index()
    {
        $data['posts'] = $this->PostModel->getPosts();
        $this->load->view('admin/post_list1', $data);
    }

    public function create()
    {
        $data['category'] = $this->CategoryModel->getCategories();
        $this->load->view('admin/post_create1', $data);
    }

    public function store() 
    {
        // Set validation rules for mandatory fields
        $this->form_validation->set_rules('post_heading', 'Post Heading', 'trim|required');
        $this->form_validation->set_rules('post_excert', 'Post Excert', 'trim|required');
        // $this->form_validation->set_rules('cat_id', 'Category', 'trim|required');
        $this->form_validation->set_rules('post_image', 'Post Image', 'callback_validate_image');
        $this->form_validation->set_rules('post_content', 'Post Content', 'trim|required');

        // Set validation rules for optional fields
        $this->form_validation->set_rules('post_title', 'Post Title', 'trim');
        $this->form_validation->set_rules('post_keywords', 'Post Keywords', 'trim');
        $this->form_validation->set_rules('post_slug', 'Post Slug', 'trim');
        $this->form_validation->set_rules('post_description', 'Post Description', 'trim');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) 
        {
            $data['category'] = $this->CategoryModel->getCategories();
            $this->load->view('admin/post_create1', $data);
        } 
        else 
        {
            $config['upload_path'] = './uploads/posts/';
            $config['allowed_types'] = 'jpeg|jpg|png|webp';
            $config['max_size'] = 1024; // 1MB max file size
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('post_image')) 
            {
                $data['category'] = $this->CategoryModel->getCategories();
                $data['error'] = $this->upload->display_errors();
                $this->load->view('admin/post_create1', $data);
            } 
            else 
            {
                $data = array(
                    'post_heading'     => $this->input->post('post_heading'),
                    'post_excert'      => $this->input->post('post_excert'),
                    'cat_name'         => 'Health Blogs',
                    'post_image'       => $this->upload->data('file_name'),
                    'post_content'     => $this->input->post('post_content'),
                    'post_title'       => $this->input->post('post_title'),
                    'post_keywords'    => $this->input->post('post_keywords'),
                    'post_slug'        => $this->input->post('post_slug'),
                    'post_description' => $this->input->post('post_description'),
                    'created_at'       => DATE,
                    'created_by'       => $this->session->user_info->email,
                );

                $resp = $this->PostModel->addPost($data);
                if($resp)
                {
                    $this->session->set_flashdata('succ', 'Post has been saved successfully...');
                    return redirect('admin/posts');
                }
                else
                {
                    $this->session->set_flashdata('fail', 'Something went wrong, please try again...');
                    return redirect('admin/posts/create');
                }
            }    
        }
    }

    public function change_status() 
    {
        $postId = $this->input->post('post_id');
        $postStatus = $this->input->post('post_status');
        $status = $this->PostModel->change_status($postId, $postStatus);
        if($status)
        {
            $data['status'] = 200;
            $data['message'] = 'Post status has been changed successfully...';
        }
        else
        {
            $data['status'] = 404;
            $data['message'] = 'Something went wrong, please try again...';
        }
        echo json_encode($data);
    }

    public function edit($postId) 
    {
        // Validation for post fields
        // Update post in the database
    }

    public function delete($postId) 
    {
        // Delete post from the database
    }

    public function view($slug) 
    {
        $data['post'] = $this->PostModel->getPost($slug);
        $this->load->view('admin/post_view', $data);
    }

    public function validate_image($str) 
    {
        $allowed_mime_types = array('image/jpg', 'image/jpeg', 'image/png', 'image/webp');
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime_type = finfo_file($finfo, $_FILES['post_image']['tmp_name']);
        finfo_close($finfo);

        if (in_array($mime_type, $allowed_mime_types)) 
        {
            return TRUE;
        } 
        else 
        {
            $this->form_validation->set_message('post_image', 'Please upload a valid image file (jpg, JPG, web, or PNG).');
            return FALSE;
        }
    }
}
