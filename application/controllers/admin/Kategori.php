<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct(){
        parent::__construct();
	
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
		$data = array( 
			'title'		=> 'Kategori Konten',
			'kategori'  => $kategori,
			'user'		=> $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array(),
		); 
		$this->template->load('template_admin','admin/kategori',$data);
	}

	public function simpan()
	{
		$this->db->from('kategori');
		$this->db->where('nama_kategori',$this->input->post('nama_kategori'));
			$cek = $this->db->get()->result_array();
				if($cek<>NULL){
					$this->session->set_flashdata('alert','<div class="alert alert-danger">
					<i class="ti-face-sad"></i><strong> kategori konten sudah digunakan</strong> </div>');
						redirect('admin/kategori');
				}
				$data = array(
					'nama_kategori'  => $this->input->post('nama_kategori')
				);
				$this->db->insert('kategori',$data);
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong>  Input Kategori Berhasil</strong>
	  </div>');
		redirect('admin/kategori');
	}

	public function delete($id)
	{
		$where = array(
			'id_kategori' => $id
		);
		$this->db->delete('kategori',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-danger">
		<i class="icofont icofont-warning-alt"></i><strong> Data kategori Berhasil Dihapus</strong>
		</div>');
		redirect('admin/kategori');
	}
	public function update()
	{
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		);
		$data = array (
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$this->db->update('kategori',$data,$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong>  Update Nama Kategori Berhasil</strong>
	 	 </div>');
		redirect('admin/kategori');
	}
}
