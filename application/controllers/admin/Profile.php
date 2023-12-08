<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->db->select('*')->from('user');
		$this->db->where('id_user');  
		$user = $this->db->get()->result_array();
		$data =  array('edit_profile' => $user);
		
		$data['user'] = $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array();
		$data['title'] = 'My profile'; 

		$this->template->load('template_admin','admin/profile',$data);
	}

	public function update()
	{
		$nama = $this->input->post('nama'); 
		$id_user = $this->input->post('id_user'); 

		$upload_image = $_FILES['image']['name'];

                if($upload_image){
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/upload/profile/';
                  
                    $this->load->library('upload', $config);

                    if($this->upload->do_upload('image')){
                        $old_image = $data['user']['image'];
                        if($old_image != 'default.jpg'){
                            unlink (FCPATH . 'assets/upload/profile/' . $old_image);
                        }

                        $new_image = $this->upload->data('file_name');
                        $this->db->set('image', $new_image);
                    }else {
                        echo $this->upload->display_errors();
                    }
                }

            $this->db->set('nama', $nama);
            $this->db->where('id_user', $id_user);
            $this->db->update('user');

            $this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">
            congrats your proflie has been editing :D
          </div>');
            redirect('admin/profile');
	}
	
}
