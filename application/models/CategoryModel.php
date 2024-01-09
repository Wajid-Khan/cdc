<?php
class CategoryModel extends CI_Model 
{

    public function createCategory($data) 
    {
        return $this->db->insert('category', $data);
    }

    public function getCategories() 
    {
        return $this->db->get('category')->result();
    }

    public function getCategoryById($categoryId) 
    {
        $this->db->where('id', $categoryId);
        $query = $this->db->get('category');
        return $query->row();
    }

    public function updateCategory($categoryId, $data) 
    {
        $this->db->where('id', $categoryId);
        $this->db->update('category', $data);
    }

    public function deleteCategory($categoryId) 
    {
        $this->db->where('id', $categoryId);
        $this->db->delete('category');
    }
}
