<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
		public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$data = array( 
		'title'   => 'Konfigurasi Page',
		'konfig'  => $konfig,
		'user'		=> $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array(),
			);
		$this->template->load('template_admin','admin/konfigurasi',$data);
	}

	public function update()
	{
		$where = array(
			'id_konfigurasi' =>1
		);
		$data = array (
			'judul_website' 	=> $this->input->post('judul_website'),
			'profil_website' 	=> $this->input->post('profil_website'),
			'about_me' 			=> $this->input->post('about_me'),
			'instagram' 		=> $this->input->post('instagram'),
			'facebook' 			=> $this->input->post('facebook'),
			'xtwitter' 			=> $this->input->post('xtwitter'),
			'github' 			=> $this->input->post('github'),
			'email' 			=> $this->input->post('email'),
			'alamat' 			=> $this->input->post('alamat'),
			'no_wa' 			=> $this->input->post('no_wa'),
		);
		$this->db->update('konfigurasi',$data,$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong>  Update Konfigurasi Berhasil</strong>
	 	 </div>');
		redirect('admin/konfigurasi');
	}
}
