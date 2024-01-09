<?php

class PostModel extends CI_Model 
{
    public function getPosts()
    {
        return $this->db->get_where('posts')->result();
    }

    public function addPost($data) 
    {
        $resp = $this->db->insert('posts', $data);
        if($resp)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function change_status($postId, $postStatus)
    {
        $this->db->where('id', $postId);
        if($postStatus === 'draft')
        {
            $this->db->set('post_status', 'published');
        }
        else
        {
            $this->db->set('post_status', 'draft');
        }
        $resp = $this->db->update('posts');
        if($resp)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function getPost($slug)
    {
        return $this->db->get_where('posts', array('post_slug' => $slug))->row();
    }

    public function getAllPost()
    {
        $this->db->select('post_heading');
        $this->db->select('post_excert');
        $this->db->select('post_image');
        $this->db->select('post_keywords');
        $this->db->select('post_slug');
        $this->db->select('created_at');
        return $this->db->get_where('posts', array('post_status' => 'published'))->result();
    }

    public function getAllPostBySlug($slug)
    { 
        $this->db->where('post_slug !=', $slug);
        $this->db->where('post_status', 'published');
        return $this->db->get('posts')->result();
    }
}
