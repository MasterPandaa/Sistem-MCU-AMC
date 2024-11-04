<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();		
		$this->load->model('m_pasien');
		$this->load->helper('url');
    }

	public function index()
	{
		$data['kode_booking'] = $this->m_pasien->get_id();
		// var_dump( $this->m_pasien->get_id());
		// die();
		$this->load->view('welcome/welcome_message', $data);
	}
	function in_data()
	{
		$kode_booking 		= $this->input->post('kode_booking');
		
		$nama 				= $this->input->post('nama');
		$nik 				= $this->input->post('nik');
		$tgl_lahir 			= $this->input->post('tgl_lahir');
		$jk 				= $this->input->post('jk');
		$alamat_ktp	 		= $this->input->post('alamat_ktp');
		$alamat_dom 		= $this->input->post('alamat_dom');
		$agama 				= $this->input->post('agama');
		$stts_perkawinan 	= $this->input->post('stts_perkawinan');
		$hp 				= $this->input->post('hp');
		$email 				= $this->input->post('email');
		$tgl 				= $this->input->post('tgl');
		$tes 				= $this->input->post('tes');
		$pertanyaan_1 		= $this->input->post('pertannyaan1');
		$pertanyaan_2 		= $this->input->post('pertannyaan2');
		$pertanyaan_3 		= $this->input->post('pertannyaan3');
		$pertanyaan_4 		= $this->input->post('pertannyaan4');
		$pertanyaan_5 		= $this->input->post('pertannyaan5');
		$pertanyaan_6 		= $this->input->post('pertannyaan6');
		$pertanyaan_7 		= $this->input->post('pertannyaan7');
		$pertanyaan_8 		= $this->input->post('pertannyaan8');
		$pertanyaan_9 		= $this->input->post('pertannyaan9');
		$tgl_1 		= $this->input->post('tgl1');
		$tgl_2 		= $this->input->post('tgl2');
		$tgl_3 		= $this->input->post('tgl3');
		$tgl_4 		= $this->input->post('tgl4');
		$tgl_5 		= $this->input->post('tgl5');
		$tgl_6 		= $this->input->post('tgl6');
		$tgl_7 		= $this->input->post('tgl7');
		$tgl_8 		= $this->input->post('tgl8');
		$tgl_9 		= $this->input->post('tgl9');
		
		
		$data = array(
			'kode_booking' 		=> $kode_booking,
			'nama' 				=> $nama,
			'nik' 				=> $nik,
			'tgl_lahir' 		=> $tgl_lahir,
			'jk' 				=> $jk,
			'alamat_ktp' 		=> $alamat_ktp,
			'alamat_dom' 		=> $alamat_dom,
			'agama' 			=> $agama,
			'stts_perkawinan' 	=> $stts_perkawinan,
			'hp' 				=> $hp,
			'email' 			=> $email,
			'tgl' 				=> $tgl,
			'tes' 				=> $tes,
			'pertanyaan_1' 				=> $pertanyaan_1,
			'pertanyaan_2' 				=> $pertanyaan_2,
			'pertanyaan_3' 				=> $pertanyaan_3,
			'pertanyaan_4' 				=> $pertanyaan_4,
			'pertanyaan_5' 				=> $pertanyaan_5,
			'pertanyaan_6' 				=> $pertanyaan_6,
			'pertanyaan_7' 				=> $pertanyaan_7,
			'pertanyaan_8' 				=> $pertanyaan_8,
			'pertanyaan_9' 				=> $pertanyaan_9,
			'tgl_1' 				=> $tgl_1,
			'tgl_2' 				=> $tgl_2,
			'tgl_3' 				=> $tgl_3,
			'tgl_4' 				=> $tgl_4,
			'tgl_5' 				=> $tgl_5,
			'tgl_6' 				=> $tgl_6,
			'tgl_7' 				=> $tgl_7,
			'tgl_8' 				=> $tgl_8,
			'tgl_9' 				=> $tgl_9,
			);
		// 	var_dump( $data);
		// die();
		$this->m_pasien->in_data($data);
		redirect('welcome/hasil/'.$kode_booking);
	}

	public function hasil($kode_booking)
	{
		$data['hasil'] 	= $this->m_pasien->hasil($kode_booking);
		$this->load->view('welcome/hasil',$data);
		
	}

	public function laporan_pdf($kode_booking){

		$data2['hasil'] 	= $this->m_pasien->hasil($kode_booking);
		// var_dump($this->m_pasien->hasil($kode_booking));
		// die();
	
		$this->load->library('pdf');
	
		$this->pdf->setPaper('A5', 'potrait');
		$this->pdf->filename = "kode-booking.pdf";
		$this->pdf->load_view('welcome/laporan_pdf', $data2);
	
	
	}
}
