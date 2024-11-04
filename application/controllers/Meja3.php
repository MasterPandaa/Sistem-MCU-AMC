<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meja3 extends CI_Controller {
	public function __construct()
    {
        parent::__construct();		
		$this->load->model('M_meja3');
		$this->load->helper('url');
        $this->load->helper('form');
    } 

	public function index()
	{
		$data['pasien_a1'] = $this->M_meja3->get_pasien_by_paket('A1');
		$data['pasien_c1_c2_dan_flexi'] = $this->M_meja3->get_pasien_by_paket(['C1', 'C2', 'FLEXI']);
		$data['pasien_bni_tad'] = $this->M_meja3->get_pasien_by_paket(['Bina BNI', 'TAD']);
		$data['pasien_d'] = $this->M_meja3->get_pasien_by_paket('D');
		$this->load->view('meja3/utama', $data);
	}
    public function hasil()
	{
		$data2['cari'] = $this->M_meja3->search();
		$this->load->view('meja3/result', $data2);
	}
		public function resume($id)
	{
		$pasien = $this->M_meja3->get_pasien($id);
		$paket_type = $this->M_meja3->get_paket_type($pasien->paket_periksa);
		
		$data['cari'] = [$pasien];
		
		if ($paket_type == 'c1c2flexi') {
			$this->load->view('meja3/result_c1c2flexi', $data);
		} elseif ($paket_type == 'bni') {
			$this->load->view('meja3/result_bni', $data);
		} elseif ($paket_type == 'tad') {
			$this->load->view('meja3/result_tad', $data);
		} elseif ($paket_type == 'd') {
			$this->load->view('meja3/result_d', $data);
		} else {
			$this->load->view('meja3/result', $data);
		}
	}
    public function periksa()
	{
		$id_pasien = $this->input->post('id_pasien');
		
		$data = array(
			'hematologi_lengkap' => $this->input->post('hematologi_lengkap'),
			'urine_lengkap' => $this->input->post('urine_lengkap'),
			'fungsi_liver' => $this->input->post('fungsi_liver'),
			'profile_lemak' => $this->input->post('profile_lemak'),
			'fungsi_ginjal' => $this->input->post('fungsi_ginjal'),
			'glukosa_darah_puasa' => $this->input->post('glukosa_darah_puasa'),
			'glukosa_darah_2_jam_pp' => $this->input->post('glukosa_darah_2_jam_pp'),
			'hasil_hbsag' => $this->input->post('hbsag'),
			'ecg' => $this->input->post('ecg'),
			'thorax_pa' => $this->input->post('thorax_pa'),
			'usg_upp_low_abdomen' => $this->input->post('usg_upp_low_abdomen'),
			'kesimpulan' => $this->input->post('kesimpulan'),
			'saran' => $this->input->post('saran'),
			'tindak_lanjut' => $this->input->post('tindak_lanjut'),
			'dokter' => $this->input->post('dokter'),
			'tgl_periksa' => $this->input->post('tgl_periksa'),
			'obesitas' => $this->input->post('obesitas'),
			'pemeriksaan_lab' => $this->input->post('pemeriksaan_lab'),
			'pemeriksaan_non_lab' => $this->input->post('pemeriksaan_non_lab'),
			'pemeriksaan_rontgen' => $this->input->post('pemeriksaan_rontgen'),
			// 'status' => 'sudah ada saran'
		);

		$id_pasien = $this->input->post('id_pasien');

		$where = array('id' => $id_pasien);

		$this->M_meja3->update_data($where, $data, 'pasien');
		redirect('meja3/index');
	}

	public function dokter_umum($id)
	{
		$data2['cari'] = $this->M_meja3->result($id)->result();
		$this->load->view('meja3/dokter_umum', $data2);
	}

	public function dokter_gigi($id)
	{
		$data2['cari'] = $this->M_meja3->result($id)->result();
		$this->load->view('meja3/dokter_gigi', $data2);
	}

	public function dokter_mata($id)
	{
		$data2['cari'] = $this->M_meja3->result($id)->result();
		$this->load->view('meja3/dokter_mata', $data2);
	}

	public function dokter_jantung($id)
	{
		$data2['cari'] = $this->M_meja3->result($id)->result();
		$this->load->view('meja3/dokter_jantung', $data2);
	}

	public function periksa_gigi()
	{
		$id_pasien = $this->input->post('id_pasien');
		
		$data = array(
			'hasil_pemeriksaan_gigi' => $this->input->post('hasil_pemeriksaan_gigi') ? implode(', ', $this->input->post('hasil_pemeriksaan_gigi')) : NULL,
			'kesimpulan_gigi' => $this->input->post('kesimpulan_gigi'),
			'saran_gigi' => $this->input->post('saran_gigi'),
			'dr_gigi' => $this->input->post('dr_gigi'),
		);

		$id_pasien = $this->input->post('id_pasien');

		$where = array('id' => $id_pasien);

		$this->M_meja3->update_data($where, $data, 'pasien');
		redirect('meja3/index');
	}

	public function periksa_mata()
	{
		$id_pasien = $this->input->post('id_pasien');
		
		$data = array(
			'hasil_pemeriksaan_mata' => $this->input->post('hasil_pemeriksaan_mata') ? implode(', ', $this->input->post('hasil_pemeriksaan_mata')) : NULL,
			'visus' => $this->input->post('visus'),
			'tonometri' => $this->input->post('tonometri'),
			'kesimpulan_mata' => $this->input->post('kesimpulan_mata'),
			'saran_mata' => $this->input->post('saran_mata'),
			'dr_mata' => $this->input->post('dr_mata'),
		);

		$id_pasien = $this->input->post('id_pasien');

		$where = array('id' => $id_pasien);

		$this->M_meja3->update_data($where, $data, 'pasien');
		redirect('meja3/index');
	}

	public function periksa_umum()
	{
		$id_pasien = $this->input->post('id_pasien');
		
		$data = array(
			'hasil_pemeriksaan_kepala_wajah' => $this->input->post('hasil_pemeriksaan_kepala_wajah') ? implode(', ', $this->input->post('hasil_pemeriksaan_kepala_wajah')) : NULL,
			'hasil_pemeriksaan_telinga' => $this->input->post('hasil_pemeriksaan_telinga') ? implode(', ', $this->input->post('hasil_pemeriksaan_telinga')) : NULL,
			'hasil_pemeriksaan_hidung' => $this->input->post('hasil_pemeriksaan_hidung') ? implode(', ', $this->input->post('hasil_pemeriksaan_hidung')) : NULL,
			'hasil_pemeriksaan_tenggorokan' => $this->input->post('hasil_pemeriksaan_tenggorokan') ? implode(', ', $this->input->post('hasil_pemeriksaan_tenggorokan')) : NULL,
			'hasil_pemeriksaan_leher' => $this->input->post('hasil_pemeriksaan_leher') ? implode(', ', $this->input->post('hasil_pemeriksaan_leher')) : NULL,
			'hasil_pemeriksaan_thorax' => $this->input->post('hasil_pemeriksaan_thorax') ? implode(', ', $this->input->post('hasil_pemeriksaan_thorax')) : NULL,
			'hasil_pemeriksaan_paru' => $this->input->post('hasil_pemeriksaan_paru') ? implode(', ', $this->input->post('hasil_pemeriksaan_paru')) : NULL,
			'hasil_pemeriksaan_jantung' => $this->input->post('hasil_pemeriksaan_jantung') ? implode(', ', $this->input->post('hasil_pemeriksaan_jantung')) : NULL,
			'hasil_pemeriksaan_abdomen' => $this->input->post('hasil_pemeriksaan_abdomen') ? implode(', ', $this->input->post('hasil_pemeriksaan_abdomen')) : NULL,
			'hasil_pemeriksaan_kulit_kuku' => $this->input->post('hasil_pemeriksaan_kulit_kuku') ? implode(', ', $this->input->post('hasil_pemeriksaan_kulit_kuku')) : NULL,
			'hasil_pemeriksaan_genitourinaria' => $this->input->post('hasil_pemeriksaan_genitourinaria') ? implode(', ', $this->input->post('hasil_pemeriksaan_genitourinaria')) : NULL,
			'hasil_pemeriksaan_ekstremitas_atas' => $this->input->post('hasil_pemeriksaan_ekstremitas_atas') ? implode(', ', $this->input->post('hasil_pemeriksaan_ekstremitas_atas')) : NULL,
			'hasil_pemeriksaan_ekstremitas_atas_tambahan' => $this->input->post('hasil_pemeriksaan_ekstremitas_atas_tambahan') ? implode(', ', $this->input->post('hasil_pemeriksaan_ekstremitas_atas_tambahan')) : NULL,
			'hasil_pemeriksaan_ekstremitas_bawah' => $this->input->post('hasil_pemeriksaan_ekstremitas_bawah') ? implode(', ', $this->input->post('hasil_pemeriksaan_ekstremitas_bawah')) : NULL,
			'hasil_pemeriksaan_ekstremitas_bawah_tambahan' => $this->input->post('hasil_pemeriksaan_ekstremitas_bawah_tambahan') ? implode(', ', $this->input->post('hasil_pemeriksaan_ekstremitas_bawah_tambahan')) : NULL,
			
			'keluhan_saat_ini' => $this->input->post('keluhan_saat_ini') ? implode(', ', $this->input->post('keluhan_saat_ini')) : NULL,
            'keluhan_lainnya' => $this->input->post('keluhan_lainnya'),
            'merokok' => $this->input->post('merokok') ? 'Ya' : 'Tidak',
            'merokok_jumlah' => $this->input->post('merokok_jumlah'),
            'merokok_sejak' => $this->input->post('merokok_sejak'),
            'olahraga' => $this->input->post('olahraga') ? 'Ya' : 'Tidak',
            'olahraga_frekuensi' => $this->input->post('olahraga_frekuensi'),
            'konsumsi_lainnya' => $this->input->post('konsumsi_lainnya'),
            'riwayat_penyakit_dahulu' => $this->input->post('riwayat_penyakit_dahulu') ? implode(', ', $this->input->post('riwayat_penyakit_dahulu')) : NULL,
            'riwayat_penyakit_dahulu_lainnya' => $this->input->post('riwayat_penyakit_dahulu_lainnya'),
            'riwayat_penyakit_keluarga' => $this->input->post('riwayat_penyakit_keluarga') ? implode(', ', $this->input->post('riwayat_penyakit_keluarga')) : NULL,
            'riwayat_penyakit_keluarga_lainnya' => $this->input->post('riwayat_penyakit_keluarga_lainnya'),
            'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
            'perusahaan' => $this->input->post('perusahaan'),
            'lama_kerja' => $this->input->post('lama_kerja'),
            'riwayat_vaksinasi' => $this->input->post('vaksinasi') ? implode(', ', $this->input->post('vaksinasi')) : NULL,
			'dr_umum' => $this->input->post('dr_umum'),
		);

		$id_pasien = $this->input->post('id_pasien');

		$where = array('id' => $id_pasien);

		$this->M_meja3->update_data($where, $data, 'pasien');
		redirect('meja3/index');
	}

	public function periksa_jantung()
	{
		$id_pasien = $this->input->post('id_pasien');
		
		$data = array(
			'hasil_pemeriksaan_threadmill' => $this->input->post('hasil_pemeriksaan_threadmill'),
			'hasil_pemeriksaan_ekg' => $this->input->post('hasil_pemeriksaan_ekg'),
			'kesimpulan_jantung' => $this->input->post('kesimpulan_jantung'),
			'saran_jantung' => $this->input->post('saran_jantung'),
			'dr_jantung' => $this->input->post('dr_jantung'),
		);

		$id_pasien = $this->input->post('id_pasien');

		$where = array('id' => $id_pasien);

		$this->M_meja3->update_data($where, $data, 'pasien');
		redirect('meja3/index');
	}
}
