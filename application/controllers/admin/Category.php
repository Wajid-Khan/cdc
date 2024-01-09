<?php

class Category extends CI_Controller 
{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('CategoryModel');
    }

    public function index()
    {
        $data['category'] = $this->CategoryModel->getCategories();
        $this->load->view('admin/category_view', $data);
    }

    public function create() 
    {
        // Add category functionality
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');
            $this->form_validation->set_rules('category_description', 'Category Description', 'trim|required');

            if ($this->form_validation->run() == FALSE) 
            {
                // Validation failed, reload the create category page or show an error message
                $this->load->view('category_view');
            } 
            else 
            {
                // Validation succeeded, add the category to the database
                $data = array(
                    'category_name' => $this->input->post('category_name'),
                    'category_description' => $this->input->post('category_description'),
                );
                $this->CategoryModel->createCategory($data);
                redirect('category/view');
            }
        } 
        else 
        {
            $this->load->view('create_category_view');
        }
    }

    public function view() 
    {
        // View categories functionality
        $data['categories'] = $this->CategoryModel->getCategories();
        $this->load->view('view_categories_view', $data);
    }

    public function edit($categoryId) 
    {
        // Edit category functionality
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');
            $this->form_validation->set_rules('category_description', 'Category Description', 'trim|required');

            if ($this->form_validation->run() == FALSE) 
            {
                // Validation failed, reload the edit category page or show an error message
                $this->load->view('edit_category_view');
            } 
            else 
            {
                // Validation succeeded, update the category in the database
                $data = array(
                    'category_name' => $this->input->post('category_name'),
                    'category_description' => $this->input->post('category_description'),
                );
                $this->CategoryModel->updateCategory($categoryId, $data);
                redirect('category/view');
            }
        } 
        else 
        {
            // Load category details for editing
            $data['category'] = $this->CategoryModel->getCategoryById($categoryId);
            $this->load->view('edit_category_view', $data);
        }
    }

    public function delete($categoryId) 
    {
        // Delete category functionality
        $this->CategoryModel->deleteCategory($categoryId);
        redirect('category/view');
    }
}
