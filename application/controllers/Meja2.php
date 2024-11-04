<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja2 extends CI_Controller {
	public function __construct()
    {
        parent::__construct();		
		$this->load->model('m_meja2');
		$this->load->helper('url');
        $this->load->helper('form');
    } 

	public function index()
	{
		$data['pasien'] = $this->m_meja2->vital_sign();
		// // // var_dump( $this->m_pasien->get_id());
		// // // die();
		$this->load->view('meja2/utama', $data);
	}
    public function hasil()
	{
		$data2['cari'] = $this->m_meja2->search();
		$this->load->view('meja2/result', $data2);
	}
    public function periksa()
	{
		$id_pasien      = $this->input->post('id_pasien');
        $td             = $this->input->post('td');
        $n              = $this->input->post('n');
        $s              = $this->input->post('s');
        $tinggi_badan   = $this->input->post('tinggi_badan');
        $lingkar_perut  = $this->input->post('lingkar_perut');
        $bb             = $this->input->post('bb');
        $tbmeter        = $tinggi_badan/100;
        $tbkuadrat      = $tbmeter * $tbmeter;
        $bmi            = $bb / $tbkuadrat;
        $bmidb          = round($bmi,2);
        // var_dump($bmidb);
        // die();
        // $bmi            = 
        // var_dump($tgl_lahir);
        // die();
    
        $data = array(
            'td'            => $td,
            'n'             => $n,
            's'             => $s,
            'tinggi_badan'  => $tinggi_badan,
            'lingkar_perut' => $lingkar_perut,
            'bb'            => $bb,
            'bmi'           => $bmidb,
            'status'        => 'lengkap, siap diresume'
        );
    
        $where = array(
            'id' => $id_pasien
        );
    
        $this->m_meja2->update_data($where,$data,'pasien');
        redirect('meja2/index');
	}
}
