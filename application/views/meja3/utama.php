<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>SISTEM MCU RS AMC Muhammadiyah</title>
	</head>
	<body>
    <?php $this->load->view("/meja3/navbar.php") ?>
		<div class="container">
			<h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
			<center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
			<hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>

			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="a1-tab" data-toggle="tab" href="#a1" role="tab" aria-controls="a1" aria-selected="true" data-tab-type="a1">Pasien A1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="c1c2flexi-tab" data-toggle="tab" href="#c1c2flexi" role="tab" aria-controls="c1c2flexi" aria-selected="false" data-tab-type="c1c2flexi">Pasien C1, C2 dan FLEXI</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="bnitad-tab" data-toggle="tab" href="#bnitad" role="tab" aria-controls="bnitad" aria-selected="false" data-tab-type="bnitad">Pasien Bina BNI dan TAD</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="d-tab" data-toggle="tab" href="#d" role="tab" aria-controls="d" aria-selected="false" data-tab-type="d">Pasien D</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="a1" role="tabpanel" aria-labelledby="a1-tab">
					<h3>Daftar Pasien A1</h3>
					<?php echo $this->load->view('meja3/pasien_table', ['pasien' => $pasien_a1, 'show_all_buttons' => true], true); ?>
				</div>
				<div class="tab-pane fade" id="c1c2flexi" role="tabpanel" aria-labelledby="c1c2flexi-tab">
					<h3>Daftar Pasien C1, C2 dan FLEXI</h3>
					<?php echo $this->load->view('meja3/pasien_table', ['pasien' => $pasien_c1_c2_dan_flexi, 'show_all_buttons' => false, 'resume_type' => 'c1c2flexi'], true); ?>
				</div>
				<div class="tab-pane fade" id="bnitad" role="tabpanel" aria-labelledby="bnitad-tab">
					<h3>Daftar Pasien Bina BNI dan TAD</h3>
					<?php echo $this->load->view('meja3/pasien_table', ['pasien' => $pasien_bni_tad, 'show_all_buttons' => false, 'show_resume_only' => true, 'resume_type' => 'bnitad'], true); ?>
				</div>
				<div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="d-tab">
					<h3>Daftar Pasien D</h3>
					<?php echo $this->load->view('meja3/pasien_table', ['pasien' => $pasien_d, 'show_dokter_umum_only' => true], true); ?>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
		 <script>
            $(document).ready(function() {
                $('.table-paginate').dataTable();

                // Fungsi untuk menentukan tab aktif berdasarkan jenis pemeriksaan
                function setActiveTab(examinationType) {
                    let activeTabType = '';
                    if (['Dokter Umum', 'Dokter Jantung', 'Dokter Mata', 'Dokter Gigi', 'Resume'].includes(examinationType)) {
                        activeTabType = 'a1';
                    } else if (['Dokter Umum', 'Dokter Jantung', 'Resume'].includes(examinationType)) {
                        activeTabType = 'c1c2flexi';
                    } else if (examinationType === 'Resume') {
                        activeTabType = 'bnitad';
                    } else if (['Dokter Umum', 'Resume'].includes(examinationType)) {
                        activeTabType = 'd';
                    }

                    if (activeTabType) {
                        $(`#myTab a[data-tab-type="${activeTabType}"]`).tab('show');
                    }
                }

                // Event listener untuk perubahan pada form pemeriksaan
                $('form').on('change', 'select, input', function() {
                    let examinationType = $(this).val();
                    setActiveTab(examinationType);
                });

                // Simpan tab aktif ke localStorage saat tab berubah
                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    localStorage.setItem('activeTab', $(e.target).attr('href'));
                });
                
                // Periksa localStorage untuk tab aktif saat halaman dimuat
                var activeTab = localStorage.getItem('activeTab');
                if(activeTab){
                    $('#myTab a[href="' + activeTab + '"]').tab('show');
                } else {
                    // Jika tidak ada tab yang disimpan, gunakan tab A1 sebagai default
                    $('#myTab a[href="#a1"]').tab('show');
                }
            } );
        </script>
	</body>
</html>
