<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Meja4 extends CI_Controller {
	public function __construct()
    {
        parent::__construct();		
		$this->load->model('m_meja4');
		$this->load->helper('url');
        $this->load->helper('form');
    } 

	public function index()
	{
		$data['pasien'] = $this->m_meja4->saran();
		$this->load->view('meja4/utama', $data);
	}
    public function hasil()
	{
		$data2['cari'] = $this->m_meja4->search();
		$this->load->view('meja4/result', $data2);
	}
		public function sudah_cetak()
	{
		$data2['pasien'] = $this->m_meja4->sudah_cetak();
		$this->load->view('meja4/sudah_cetak', $data2);
	}
    public function periksa()
	{
		$id_pasien    = $this->input->post('id_pasien');
        $saran        = $this->input->post('saran');
        $dokter       = $this->input->post('dokter');
        // var_dump($tgl_lahir);
        // die();
    
        $data = array(
            'saran'   => $saran,
            'dokter'  => $dokter,
            'status'  => 'sudah ada saran'
        );
    
        $where = array(
            'id' => $id_pasien
        );
    
        $this->m_meja4->update_data($where,$data,'pasien');
        redirect('meja4/index');
	}
    public function print($id){

		$data2['hasil'] 	= $this->m_meja4->print($id)->result();
        $data	            = $this->m_meja4->print($id)->result();
         $status = array(
            'status'     => 'sudah dicetak'
        );
        $where = array(
            'id' => $id
        );
        $this->m_meja4->update_data($where,$status,'pasien');
		// var_dump($data);
		// die();
        foreach($data as $nama){
           if($nama->paket_periksa == "A1"){
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->filename = "resume ".$nama->nama.".pdf";
            $this->pdf->load_view('meja4/cetak_a1', $data2);
           }
           else if($nama->paket_periksa == "C1" || $nama->paket_periksa == "C2" || $nama->paket_periksa == "FLEXI"){
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->filename = "resume ".$nama->nama.".pdf";
            $this->pdf->load_view('meja4/cetak_c1c2flexi', $data2);
           }
           else if($nama->paket_periksa == "Bina BNI"){
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->filename = "resume ".$nama->nama.".pdf";
            $this->pdf->load_view('meja4/cetak_bni', $data2);   
           }
           else if($nama->paket_periksa == "TAD"){
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->filename = "resume ".$nama->nama.".pdf";
            $this->pdf->load_view('meja4/cetak_tad', $data2);
           }
           else if($nama->paket_periksa == "D"){
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->filename = "resume ".$nama->nama.".pdf";
            $this->pdf->load_view('meja4/cetak_d', $data2);
           }
           else{
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->filename = "resume ".$nama->nama.".pdf";
            $this->pdf->load_view('meja4/cetak_umum', $data2);
           }
            
        }
	}

    public function export()
     {
          $pasien = $this->m_meja4->excel()->result();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Nama')
                      ->setCellValue('C1', 'Tanggal Lahir')
                      ->setCellValue('D1', 'Prodi/Fakultas')
                      ->setCellValue('E1', 'Paket Pemeriksaan')
                      ->setCellValue('F1', 'Tekanan Darah')
                      ->setCellValue('G1', 'Suhu Badan')
                      ->setCellValue('H1', 'Nadi')
                      ->setCellValue('I1', 'Berat Badan')
                      ->setCellValue('J1', 'BMI')
                      ->setCellValue('K1', 'Lingkar Perut')
                      ->setCellValue('L1', 'Tinggi Badan')
                      ->setCellValue('M1', 'Hasil Pemeriksaan Lab')
                      ->setCellValue('N1', 'Kesimpulan')
                      ->setCellValue('O1', 'Saran')
                      ->setCellValue('P1', 'Dokter Pemeriksa')
                      ->setCellValue('Q1', 'Tanggal Pemeriksaan');

          $kolom = 2;
          $nomor = 1;
          foreach($pasien as $pasien) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $pasien->nama)
                           ->setCellValue('C' . $kolom, $pasien->tgl_lahir)
                           ->setCellValue('D' . $kolom, $pasien->prodi)
                           ->setCellValue('E' . $kolom, $pasien->paket_periksa)
                           ->setCellValue('F' . $kolom, $pasien->TD)
                           ->setCellValue('G' . $kolom, $pasien->S)
                           ->setCellValue('H' . $kolom, $pasien->N)
                           ->setCellValue('I' . $kolom, $pasien->bb)
                           ->setCellValue('J' . $kolom, $pasien->bmi)
                           ->setCellValue('K' . $kolom, $pasien->lingkar_perut)
                           ->setCellValue('L' . $kolom, $pasien->tinggi_badan)
                           ->setCellValue('M' . $kolom, $pasien->hasil_lab)
                           ->setCellValue('N' . $kolom, $pasien->kesimpulan)
                           ->setCellValue('O' . $kolom, $pasien->saran)
                           ->setCellValue('P' . $kolom, $pasien->dokter)
                           ->setCellValue('Q' . $kolom, date('d-m-Y', strtotime($pasien->tgl_periksa)));

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="RESUME.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }
     
      public function label($id){

		$data2['hasil'] 	= $this->m_meja4->print($id)->result();
        $data	            = $this->m_meja4->print($id)->result();
       
		// var_dump($data);
		// die();
        foreach($data as $nama){
            $this->load->library('pdf');
            $this->pdf->setPaper('A9', 'landscape');
            $this->pdf->filename = "";
            $this->pdf->load_view('meja4/label', $data2);
        }
	}

}
