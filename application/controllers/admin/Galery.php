<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {
	public function __construct(){
        parent::__construct();
	
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->from('galery');
		$galery = $this->db->get()->result_array();

		$data = array( 
			'title'		=> 'halaman galery',
			'galery'  => $galery,
			'user'		=> $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array(),
		); 
		$this->template->load('template_admin','admin/galery',$data);
	}

	public function simpan()
	{
		$namafoto = date('YmdHis') . '.jpg';
		$config['upload_path']				= 'assets/upload/galery' ; 
		$config['max_size']					= 500*1024 ;
		$config['file_name']				=  $namafoto;
		$config['allowed_types']			= '*' ;
		$this->load->library('upload',$config);
		if($_FILES['foto']['size'] >= 500*1024){
			$this->session->set_flashdata('alert','<div class="alert alert-danger">
			<i class="icofont icofont-check-circled"></i><strong>  Ukuran foto terlalu besar, pastikan ukuran foto  kurang dari 500 KB</strong>
		  </div>');
			redirect('admin/galery');
		}elseif(!$this->upload->do_upload('foto')){
			$error = array ('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' =>$this->upload->data());
		}
				$data = array(
					'name' 		 	=> $this->input->post('name'),
					'foto'  			=> $namafoto,
				);
		$this->db->insert('galery',$data);
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong> galery Berhasil ditambahkan </strong>
	  </div>');
		redirect('admin/galery');
	}

	public function delete($id)
	{
		$filename=FCPATH. '/assets/upload/galery/'.$id;
			if(file_exists($filename)){
				unlink("./assets/upload/galery/".$id);
			}
		$where = array(
			'foto' => $id
		);
		$this->db->delete('galery',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-danger">
		<i class="icofont icofont-warning-alt"></i><strong> galery Berhasil Dihapus</strong>
		</div>');
		redirect('admin/galery');
	}

	
	
}