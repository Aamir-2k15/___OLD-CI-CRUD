<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

    public function index()
    {
        // $posts = $this->db->select('posts')->order_by('id', 'DESC')->result_object();
        // $this->db->order_by('id', 'DESC');
        // $posts = $this->db->get('posts')->result_object();
        $posts = get_all('posts','id','DESC');
        $data['posts'] = $posts;
        // echo '<pre>';print_r($posts); exit;
        $this->load->view('inc/header');
        $this->load->view('all', $data);
        $this->load->view('inc/footer');
    }
    public function create()
    {
        $this->load->view('inc/header');
        $this->load->view('create');
        $this->load->view('inc/footer');
    }
    public function store()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        if ($this->form_validation->run() === false) {
            $this->load->view('inc/header');
            $this->load->view('create');
            $this->load->view('inc/footer');
            return;
        }

        create('posts');

        $all_page = site_url('/');
        return redirect($all_page);
    }

    public function view_record()
    {
        $id = $this->uri->segment('2');
        $data['the_record'] = get_by_id('posts',$id);
        $this->load->view('inc/header');
        $this->load->view('show',$data);
        $this->load->view('inc/footer');
    }

    public function edit()
    {
        $id = $this->uri->segment('2');
        $data['the_record'] = get_by_id('posts',$id);
        $this->load->view('inc/header');
        $this->load->view('edit',$data);
        $this->load->view('inc/footer');
    }
    public function update_record()
    {
        // print_r($_REQUEST);
       $id =  $this->input->post('id') ;
    //    echo $id ;
        _update('posts',$id);
        $all_page = site_url('/');
        return redirect($all_page);
    }
    public function delete_record()
    {
        $id = $this->uri->segment('2');
        _delete('posts',$id);
        $all_page = site_url('/');
        return redirect($all_page);
    }
}
