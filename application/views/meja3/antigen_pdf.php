<html>
    
	<head>
    <style>
        table.center {
        margin-left: auto; 
        margin-right: auto;
        }
        table.kanan{
            margin-left:50px;
            /* margin-right: auto; */
        }
        table.border, th.border, td.border {
        border: 1px solid black;
        }
        .kanan{
            margin-left:50px;
        }
        .kanan2{
            margin-left:55px;
            text-align: justify;
        }
        .kanan3{
            margin-left:500px;
        }
        .test {
            margin-top: 150px;
        }
        table.border {
        width: 100%;
        border-collapse: collapse;
        }
    </style>
	<title>HASIL ANTIGEN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
			<br>
			<br>
			<br> 
			<br>
			<br>
            <center><b><font size="4" face="Courier New">INSTALASI PATALOGI KLINIK</font></b></center>
            <center><b><font size="4" face="Courier New">HASIL PEMERIKSAAN</font></b></center>
            <br>
                <?php foreach($hasil as $u){ 
                $tgl_periksa = date('d-m-Y', strtotime($u->tgl_periksa));
                $tgl_lahir = date('d-m-Y', strtotime($u->tgl_lahir))?>
                        <table class="table table-borderles center">
                            <tbody>
                                <tr>
                                    <td style="width: 200px"><font size="3" face="Arial">Nama <i>(Name)</i></font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%"><font size="3" face="Arial"><?php echo $u->nm_pasien ?></font></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"><font size="3" face="Arial">Tanggal Lahir <i>(Date of Birth)</i></font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%"><font size="3" face="Arial"><?php echo $tgl_lahir ?></font></td>
                                </tr>
                                <tr>
                                <?php if ($u->jk=="L") { ?>
                                            <td style="width: 20%"><font size="3" face="Arial">Jenis Kelamin <i>(Sex)</i></font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 70%"><font size="3" face="Arial">Laki-laki</font></td>
                                <?php } else { ?>
                                            <td style="width: 20%"><font size="3" face="Arial">Jenis Kelamin <i>(Sex)</i></font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 70%"><font size="3" face="Arial">Perempuan</font></td>
                                <?php } ?>
                                </tr>
                                <tr>
                                    <td style="width: 20%"><font size="3" face="Arial">Alamat <i>(Address)</i></font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%"><font size="3" face="Arial"><?php echo $u->alamat ?></font></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"><font size="3" face="Arial">Tanggal Pemeriksaan <i>(Examination Date)</i></font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%; "><font size="3" face="Arial"><?php echo $tgl_periksa ?></font></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"><font size="3" face="Arial">Jam Pemeriksaan <i>(Examination Time)</i></font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%; "><font size="3" face="Arial"><?php echo $u->waktu_periksa ?> WIB</font></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"><font size="3" face="Arial">No. Telp <i>(Phone Number)</i></font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%; "><font size="3" face="Arial"><?php echo $u->no_tlp ?></font></td>
                                </tr>
                            </tbody>
                        </table><br><br>
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" ><font size="3" face="Arial">PEMERIKSAAN</font></th>
                                            <th class="border" scope="col" ><font size="3" face="Arial">HASIL</font></th>
                                            <th class="border" scope="col" ><font size="3" face="Arial">NILAI RUJUKAN</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="border" scope="row"style="width: 150px"><font size="3" face="Arial">Antigen SARS-Cov-19</font></th>
                                            <td class="border" scope="row"style="width: 80px"><font size="4" face="Arial"><center><b> <?php echo $u->hasil ?></b></center></font></td>
                                            <td class="border" scope="row"style="width: 300px"><font size="3" face="Arial"><center>Negatif</center></font></td>
                                        </tr>
                                    </tbody>
                        </table><br><br>
                        <div class="kanan">
                            <font size="3" face="Courier New">Catatan :</font><br><br>
                            <div class="kanan2">
                                <font size="3" face="Courier New">&bull; Hasil Negatif tidak menyingkirkan kemungkinan terinfeksi SARS-CoV-2 sehingga masih berisiko menularkan ke orang lain, disarankan tes ulang atau tes konfirmasi dengan NAAT (nucleic acid amplification tests), bila probabilitas pretes relatif tinggi, terutama bila pasien bergejala atau diketahui memiliki kontak dengan orang yang terkontaminasi COVID-19.</font>
                                <br><font size="3" face="Courier New">&bull; Hasil Negatif dapat terjadi pada kondisi kuantitas antigen pada spesimen dibawah level deteksi alat.</font>
                            </div>
                        </div><br><br>
                        <div class="kanan3">
                                <font size="3" face="Courier New">Yogyakarta, <?php echo $tgl_periksa ?></font>
                        </div>
                        <table class="table kanan">
                                    <tbody>
                                        <tr>
                                            <th scope="row"style="width: 250px"><font size="3" face="Arial">Mengetahui,</font></th>
                                        </tr>
                                        <tr>
                                            <td  scope="row"style="width: 250px;"><font size="3" face="Arial">DOKTER PENANGGUNG JAWAB,</font></td>
                                            <td  scope="row"style="width: 150px"><font size="3" face="Arial"></font></td>
                                            <td  scope="row"style="width: 80px"><font size="3" face="Arial"><center>PEMERIKSA,</center></font></td>
                                        </tr>
                                        <tr>
                                       
                                            <td  scope="row"style="width: 250px"><center><img src="<?php echo 'assets/images/ttd.png'; ?>" width="100px" height="100px"></center></td>
                                            <td  scope="row"style="width: 150px"><font size="3" face="Arial"></font></td>
                                            <td  scope="row"style="width: 80px"><font size="3" face="Arial"></font></td>
                                        </tr>
                                        <tr>
                                            <td  class="test"scope="row"style="width: 250px;"><font size="3" face="Arial"><center><u>dr.Suryanto,Sp.PK</u></center></font></td>
                                            <td  scope="row"style="width: 150px"><font size="3" face="Arial"></font></td>
                                            <td  scope="row"style="width: 80px"><font size="3" face="Arial"><u><?php echo $u->analis ?></u></font></td>
                                        </tr>
                                        <tr>
                                            <td  scope="row"style="width: 250px" ><font size="3" face="Arial"><center>SIP : 503/0187/dr.Sp/V/2021</center></font></td>
                                        </tr>
                                    </tbody>
                        </table><br><br>
    
                <?php } ?>
                
	</body>
</html>
           