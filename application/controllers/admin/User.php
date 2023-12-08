<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('User_model');
		if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->result_array();
		$data = array( 
			'title' => 'User Page',
			'user'  => $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array(),
			'user2' => $user,
		); 
		$this->template->load('template_admin','admin/user',$data);
	}

	public function simpan()
	{
		$this->db->from('user');
		$this->db->where('username',$this->input->post('username'));
			$cek = $this->db->get()->result_array();
				if($cek<>NULL){
					$this->session->set_flashdata('alert','<div class="alert alert-danger">
					<i class="ti-face-sad"></i><strong> Username sudah digunakan</strong> </div>');
						redirect('admin/user');
				}
		$this->User_model->simpan();
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong>  Input User Berhasil</strong>
	  </div>');
		redirect('admin/user');
	}

	public function delete($id)
	{
		$this->User_model->delete($id);
		$this->session->set_flashdata('alert','<div class="alert alert-danger">
		<i class="icofont icofont-warning-alt"></i><strong> Data Berhasil Dihapus</strong>
		</div>');
		redirect('admin/user');
	}
	public function update()
	{
		$this->User_model->update();
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong>  Update Nama Pengguna Berhasil</strong>
	 	 </div>');
		redirect('admin/user');
	}
}
