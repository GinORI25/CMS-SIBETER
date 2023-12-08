<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->row_array();
		
		$data = array( 
			'title' => 'Dashboard Page',
			'user'  => $this->db->get_where('user',['username'=> $this->session->userdata('username')])->row_array(),
			'caraousel' => $this->db->get('caraousel')->num_rows(),
			'konten' => $this->db->get('konten')->num_rows(),
            'usere' => $this->db->get('user')->num_rows(),
            'pesan' => $this->db->get('pesan')->num_rows(),
            'galery' => $this->db->get('galery')->num_rows(),
		);
		
		$this->template->load('template_admin','admin/dashboard',$data);

	}
}
