<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja1 extends CI_Controller {
	public function __construct()
    {
        parent::__construct();		
		$this->load->model('m_meja1');
		$this->load->helper('url');
    } 

	public function index()
	{
		$data['pasien'] = $this->m_meja1->datang();
        //   var_dump($this->m_meja1->datang());
        // die();
		$this->load->view('meja1/utama', $data);
	}
    public function hasil()
	{
		$data2['cari'] = $this->m_meja1->search();
		$this->load->view('meja1/result', $data2);
	}
    public function periksa()
	{
		$id_pasien  = $this->input->post('id_pasien');
        $status     = $this->input->post('status');
        $tgl_periksa    = $this->input->post('tgl_periksa');
       
        date_default_timezone_set('Asia/Jakarta');
        $jam = date('H:i');
        // var_dump($tgl_lahir);
        // die();
        $today = date('Y-m-d');
        $data = array(
            'status'        => $status,
            'tgl_periksa'   => $tgl_periksa,
            'jam_datang'    => $jam,
        );
    
        $where = array(
            'id' => $id_pasien
        );
    
        $this->m_meja1->update_data($where,$data,'pasien');
        redirect('meja1/index');
	}
	public function label($id){

		$data2['hasil'] 	= $this->m_meja1->cetak($id)->result();
        $data	            = $this->m_meja1->cetak($id)->result();
		// var_dump($id);
		// die();
        date_default_timezone_set('Asia/Jakarta');
        $jam = date('H:i');
        // var_dump($tgl_lahir);
        // die();
        $today = date('Y-m-d');
        $data3 = array(
            'status'        => "datang",
            'tgl_periksa'   => $today,
            'jam_datang'    => $jam,
        );
    
        $where = array(
            'id' => $id
        );
    
        // var_dump($where);
		// die();
        $this->m_meja1->update_data($where,$data3,'pasien');

        foreach($data as $nama){
            $this->load->library('pdf');
            $this->pdf->setPaper('A8', 'landscape');
            $this->pdf->filename = "label ".$nama->nama.".pdf";
            $this->pdf->load_view('meja1/label', $data2);
        }
	}
}
