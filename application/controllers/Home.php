<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
         parent::__construct();
		$this->load->model('Konten_model');
		
    }
    
	public function index()
	{
		//pagination
		$this->load->library('pagination');

		// keyword
		if ($this->input->post('submit')) {
			$data['search'] = $this->input->post('search');
			$this->session->set_userdata('search', $data['search']);
		} else {
			$data['search'] = $this->session->userdata('search');
		}
		
		$config['base_url'] = base_url('home/index/');
		$this->db->like('judul', $data['search']);
		$this->db->from('konten');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 6;

		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		// $data['konten'] = $this->Home_m->getKonten($config['per_page'], $data['start']);
			$data = array(
				'title'    => "Home | Orvill",
				'konfig'   => $this->db->get('konfigurasi')->row(),
				'kategori'   => $this->db->get('kategori')->result_array(),
				'caraousel'   => $this->db->get('caraousel')->result_array(),
				'konten'   => $this->Konten_model->getKonten($config['per_page'], $data['start'], $data['search']),
				'recentPost'   => $this->Konten_model->RCP(),
				'kontenLimit1'   => $this->Konten_model->konten_limit1(),
			);  
			$this->template->load('template_public','home',$data);

	}
	public function posting()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('user');
		$user = $this->db->get()->row();

		$this->db->from('galery');
		$galery = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->from('konten ');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori','left');
		$this->db->join('user','konten.username = user.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'title'    => "Posting | Orvill",
			'konfig'   => $konfig,
			'user'  	 => $user,
			'kategori'   => $kategori,
			'galery'   => $galery,
			'konten'   => $konten,
			'recentPost'   => $this->Konten_model->RCP(),
		);
		$this->template->load('template_public','posting',$data);

	}
	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->from('konten');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori','left');
		$this->db->join('user','konten.username = user.username','left');
		$this->db->where('konten.id_kategori',$id);
		$konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'title'   		 => $nama_kategori. " | Orvill",
			'jeneng'   		 => $nama_kategori,
			'konfig'   		 => $this->db->get('konfigurasi')->row(),
			'kategori'       => $kategori,
			'konten'         => $konten,
			'recentPost'   => $this->Konten_model->RCP(),
		);
		$this->template->load('template_public','kategori',$data);
	}

    public function artikel($id){
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->from('konten');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori','left');
		$this->db->join('user','konten.username = user.username','left');
		$this->db->where('slug',$id);
		$konten = $this->db->get()->row();
		$data = [
			'title'   	 => $konten->judul . " | Orvill",
			'konfig'  	 =>  $this->db->get('konfigurasi')->row(),
			'kategori'   => $kategori,
			'konten'     => $konten,
			'recentPost'   => $this->Konten_model->RCP(),
		];
		$this->template->load('template_public','detail',$data);

	}
	public function galery()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('galery'); 
		$galery = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->from('konten ');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori','left');
		$this->db->join('user','konten.username = user.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'title'    => "Galery | Orvill",
			'konfig'   => $konfig,
			'kategori'   => $kategori,
			'galery'   => $galery,
			'konten'   => $konten,
			'recentPost'   => $this->Konten_model->RCP(),
		);
		$this->template->load('template_public','galery',$data);
	}
	public function pesan()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('galery');
		$galery = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->from('konten ');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori','left');
		$this->db->join('user','konten.username = user.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'title'    => "Pesan | Orvill",
			'konfig'   => $konfig,
			'kategori'   => $kategori,
			'galery'   => $galery,
			'konten'   => $konten,
			'recentPost'   => $this->Konten_model->RCP(),
		);
		$this->template->load('template_public','pesan',$data);
	}
	public function pesanSimpan()
	{
		$this->db->from('pesan');
		$this->db->where('nama',$this->input->post('nama'));
				$data = array(
					'nama'  => $this->input->post('nama'),
					'email'  => $this->input->post('email'),
					'pesan'  => $this->input->post('pesan'),
				);
				$this->db->insert('pesan',$data);
		$this->session->set_flashdata('alert','<div class="alert alert-success">
		<i class="icofont icofont-check-circled"></i><strong>  Pesan terkirim</strong>
	  </div>');
		redirect('Home/pesan');
	}

	public function about()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('galery');
		$galery = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->from('konten ');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori','left');
		$this->db->join('user','konten.username = user.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'title'    => "Galery | Orvill",
			'konfig'   => $konfig,
			'kategori'   => $kategori,
			'galery'   => $galery,
			'konten'   => $konten,
			'recentPost'   => $this->Konten_model->RCP(),
		);
		$this->template->load('template_public','about',$data);
	}
	
}