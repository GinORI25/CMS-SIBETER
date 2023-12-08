<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {
	public function __construct(){
        parent::__construct();
	
		if($this->session->userdata('level')==NULL){
			redirect('admin/auth');
		}
    }
	public function index()
	{
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$data = array( 
			'title'		=> 'halaman caraousel',
			'caraousel'  => $caraousel,
			'user'		=> $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array(),
		); 
		$this->template->load('template_admin','admin/caraousel',$data);
	}

	public function simpan()
	{
		$namafoto = date('YmdHis') . '.jpg';
		$config['upload_path']				= 'assets/upload/caraousel' ; 
		$config['max_size']					= 500*1024 ;
		$config['file_name']				=  $namafoto;
		$config['allowed_types']			= '*' ;
		$this->load->library('upload',$config);
		if($_FILES['foto']['size'] >= 500*1024){
			$this->session->set_flashdata('alert','<div class="alert alert-danger">
			<i class="icofont icofont-check-circled"></i><strong>  Ukuran foto terlalu besar, pastikan ukuran foto  kurang dari 500 KB</strong>
		  </div>');
			redirect('admin/caraousel');
		}elseif(!$this->upload->do_upload('foto')){
			$error = array ('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' =>$this->upload->data());
		}
				$data = array(
					'judul' 		 	=> $this->input->post('judul'),
					'caption' 		 	=> $this->input->post('caption'),
					'foto'  			=> $namafoto,
				);
		$this->db->insert('caraousel',$data);
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong> caraousel Berhasil ditambahkan </strong>
	  </div>');
		redirect('admin/caraousel');
	}

	public function delete($id)
	{
		$filename=FCPATH. '/assets/upload/caraousel/'.$id;
			if(file_exists($filename)){
				unlink("./assets/upload/caraousel/".$id);
			}
		$where = array(
			'foto' => $id
		);
		$this->db->delete('caraousel',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-danger">
		<i class="icofont icofont-warning-alt"></i><strong> caraousel Berhasil Dihapus</strong>
		</div>');
		redirect('admin/caraousel');
	}

	
	public function update ()
	{
		$namafoto = $this->input->post('nama_foto');
		$config['upload_path']				= 'assets/upload/caraousel' ; 
		$config['max_size']					= 500*1024 ;
		$config['file_name']				=  $namafoto;
		$config['overwrite']				=  true;
		$config['allowed_types']			= '*' ;
		$this->load->library('upload',$config);
		if($_FILES['foto']['size'] >= 500*1024){
			$this->session->set_flashdata('alert','<div class="alert alert-danger">
			<i class="icofont icofont-check-circled"></i><strong>  Ukuran foto terlalu besar, pastikan ukuran foto  kurang dari 500 KB</strong>
		  </div>');
			redirect('admin/caraousel');
		}elseif(!$this->upload->do_upload('foto')){
			$error = array ('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' =>$this->upload->data());
		}
				$data = array(
					'judul' 		 	=> $this->input->post('judul'),
					
				);
				$where = array (
					'foto'  => 	$this->input->post('nama_foto'),	
				);
		$this->db->update('caraousel',$data,$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong> caraousel Berhasil diperbarui </strong>
	  </div>');
		redirect('admin/caraousel');
	}
}
