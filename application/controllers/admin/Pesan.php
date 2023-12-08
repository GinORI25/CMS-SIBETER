<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
	public function __construct(){
        parent::__construct();
	
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->from('pesan');
		$pesan = $this->db->get()->result_array();

		$data = array( 
			'title'		=> 'halaman pesan',
			'pesan'  => $pesan,
			'user'		=> $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array(),
		); 
		$this->template->load('template_admin','admin/pesan',$data);
	}
	public function delete($id)
	{
		$where = array(
			'id' => $id
		);
		$this->db->delete('pesan',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-danger">
		<i class="icofont icofont-warning-alt"></i><strong> Data pesan Berhasil Dihapus</strong>
		</div>');
		redirect('admin/pesan');
	}
}