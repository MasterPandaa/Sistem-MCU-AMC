<html>
    
	<head>
    <style>
        table.center {
        margin-left: auto; 
        margin-right: auto;
        }
        table.kanan{
            margin-left:auto;
            /* margin-right: auto; */
        }
        table.kanan4{
            margin-left:230px;
            /* margin-right: auto; */
        }
        table.border, th.border, td.border {
        border: 1px solid black;
        }
        .kanan{
            margin-left:30px;
        }
        .kanan2{
            margin-left:55px;
            text-align: justify;
        }
        .kanan3{
            margin-left:525px;
        }
        .test {
            margin-bottom: 10px;
        }
        table.border {
        width: 100%;
        border-collapse: collapse;
        }
    </style>
	<title>SISTEM MCU RS AMC Muhammadiyah</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
    <h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
    <center><b><font  size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
    <center><b><font size="2" face="Courier New">E-mail : info@rsamcmuhammadiyah.com | Website : www.rsamcmuhammadiyah.com</font></b></center>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
            <center><b><font size="4" face="Courier New">RESUME <i>GENERAL CHECK UP</i></font></b></center>
            <center><font size="3" face="Courier New">Yang bertandatangan di bawah ini menerangkan bahwa :</font></center>
                <?php foreach($hasil as $u){ 
                    $tgl_periksa = date('d-m-Y', strtotime($u->tgl_periksa))?>
                        <table class="table table-borderles center">
                            <tbody>
                                <tr>
                                    <td style="width: 200px"><font size="3" face="Arial">Nama</font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%"><font size="3" face="Arial"><?php echo $u->nama ?></font></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"><font size="3" face="Arial">Tanggal Lahir</font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%"><font size="3" face="Arial"><?php echo $u->tgl_lahir ?></font></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"><font size="3" face="Arial">Unit Kerja</font></td>
                                    <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                    <td style="width: 70%"><font size="3" face="Arial"><?php echo $u->prodi ?></font></td>
                                </tr>
                            </tbody>
                        </table>
                        <center><font size="3" face="Courier New">Telah diperiksa kesehatannya. Dengan hasil sebagai berikut :</font></center>
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="6"><font size="3" face="Arial">HASIL PEMERIKSAAN FISIK</font></th>
                                        </tr>
                                        <tr>
                                            <th class="border" scope="col" style="width: 20%"><font size="2" face="Arial">Tekanan Darah</font></th>
                                            <th class="border" scope="col"style="width: 20%"><font size="2" face="Arial">Suhu</font></th>
                                            <th class="border" scope="col"style="width: 20%"><font size="2" face="Arial">Nadi</font></th>
                                            <th class="border" scope="col"style="width: 20%"><font size="2" face="Arial">Berat Badan</font></th>
                                            <th class="border" scope="col"style="width: 20%"><font size="2" face="Arial">BMI</font></th>
                                            <!-- <th class="border" scope="col"style="width: 20%"><font size="2" face="Arial">Lingkar Perut</font></th> -->
                                            <th class="border" scope="col"style="width: 20%"><font size="2" face="Arial">Tinggi Badan</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row"style="width: 80px"><font size="2" face="Arial"><center><?php echo $u->TD ?></center></font></td>
                                            <td class="border" scope="row"style="width: 80px"><font size="2" face="Arial"><center><?php echo $u->S ?>°C </center></font></td>
                                            <td class="border" scope="row"style="width: 80px"><font size="2" face="Arial"><center><?php echo $u->N ?>/menit</center></font></td>
                                            <td class="border" scope="row"style="width: 80px"><font size="2" face="Arial"><center><?php echo $u->bb ?> kg</center></font></td>
                                            <td class="border" scope="row"style="width: 80px"><font size="2" face="Arial"><center><?php echo $u->bmi ?></center></font></td>
                                            <!-- <td class="border" scope="row"style="width: 80px"><font size="3" face="Arial"><center><?php echo $u->lingkar_perut ?> cm</center></font></td> -->
                                            <td class="border" scope="row"style="width: 80px"><font size="2" face="Arial"><center><?php echo $u->tinggi_badan ?> cm</center></font></td>
                                        </tr>
                                    </tbody>
                        </table><br><br><br><br>
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="7"><font size="3" face="Arial">HASIL PEMERIKSAAN RONTGEN THORAX</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row" colspan="7" style="width: 300px"><font size="2" face="Arial"><center><?php echo $u->rontgen ?></center></font></td>
                                        </tr>
                                    </tbody>
                        </table><br><br><br>
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="7"><font size="3" face="Arial">HASIL PEMERIKSAAN EKG</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row" colspan="7" style="width: 300px"><font size="2" face="Arial"><center><?php echo $u->ekg ?></center></font></td>
                                        </tr>
                                    </tbody>
                        </table><br><br><br>
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="7"><font size="3" face="Arial">HASIL PEMERIKSAAN LABORATORIUM</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row" colspan="7" style="width: 300px"><font size="2" face="Arial"><center><?php echo $u->hasil_lab ?></center></font></td>
                                        </tr>
                                    </tbody>
                        </table><br><br><br>
                        <!-- <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="4"><font size="3" face="Arial">HASIL PEMERIKSAAN LABORATORIUM</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>Darah Lengkap : <?php echo $u->darah_lengkap ?></center></font></td>
                                            <td class="border" scope="row" style="width: 80px"><font size="2" face="Arial"><center>Urin Rutin : <?php echo $u->urin_rutin ?></center></font></td>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>GDP : <?php echo $u->gdp ?></center></font></td>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>Ureum : <?php echo $u->ureum ?></center></font></td>
                                           
                                        </tr>
                                        <tr>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>Creatinin : <?php echo $u->creatinin ?></center></font></td>
                                            <td class="border" scope="row" style="width: 80px"><font size="2" face="Arial"><center>SGOT : <?php echo $u->sgot ?></center></font></td>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center> SGPT : <?php echo $u->sgpt ?></center></font></td>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>HBsAg : <?php echo $u->hbsag ?></center></font></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>Asam Urat : <?php echo $u->asam_urat ?></center></font></td>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>Kolestrol Total : <?php echo $u->kolestrol_total ?></center></font></td>
                                            <td class="border" scope="row"  style="width: 80px"><font size="2" face="Arial"><center>Trigliserid : <?php echo $u->trigliserid ?></center></font></td>
                                            <td></td>
                                            
                                        </tr>
                                    </tbody>
                        </table><br><br><br><br><br> -->
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="6"><font size="3" face="Arial">KESIMPULAN</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row" colspan="6" style="width: 300px"><font size="2" face="Arial"><center><?php echo $u->kesimpulan ?></center></font></td>
                                           

                                        </tr>
                                    </tbody>
                        </table><br><br><br>
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="6"><font size="4" face="Arial">SARAN</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row" colspan="6" style="width: 300px"><font size="2" face="Arial"><center><?php echo $u->saran ?></center></font></td>
                                        </tr>
                                    </tbody>
                        </table><br><br><br><br><br><br>
                        <table class="table border kanan">
                                    <thead>
                                        <tr>
                                            <th class="border" scope="col" colspan="6"><font size="3" face="Arial">RENCANA TINDAK LANJUT</font></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border" scope="row" colspan="6" style="width: 300px"><font size="2" face="Arial"><center><?php echo $u->tindak_lanjut ?></center></font></td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="border" scope="row" colspan="6" style="width: 80px"><font size="3" face="Arial">Catatan : Jika ada saran pemeriksaan lanjutan, dimohon untuk melakukan pemeriksaan di RS AMC Muhammadiyah. <br> Jadwal Terlampir</font></td>
                                        </tr> -->
                                    </tbody>
                        </table><br><br><br><br><br><br>
                        
                        <div class="kanan3">
                                <font size="3" face="Courier New">Yogyakarta, <?php echo $tgl_periksa ?> </font>
                        </div>
                        <table class="table kanan4">
                                    <tbody>
                                        <tr>
                                            <td  scope="row"style="width: 100px;"><font size="2" face="Arial"></font></td>
                                            <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
                                            <td  scope="row"style="width: 350px"><font size="2" face="Arial"><center>PEMERIKSA,</center></font></td>
                                        </tr>
                                        <tr>
                                            <td  scope="row"style="width: 100px; height: 50px"><center></center></td>
                                            <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
                                            <td  scope="row"style="width: 350px"><center><img src="<?php echo 'assets/images/drrizal.jpeg'; ?>" width="85px" height="85px"></center></td>
                                        </tr>
                                        <tr>
                                            <td  scope="row"style="width: 100px;"><font size="2" face="Arial"></font></td>
                                            <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
                                            <td  scope="row"style="width: 350px"><font size="2" face="Arial"><center><u>dr. Syahrizal Ardhiyand H, MARS</u></center></font></td>
                                            
                                        </tr>
                                        <tr>
                                            <td  scope="row"style="width: 100px;"><font size="2" face="Arial"></font></td>
                                            <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
                                            
                                        </tr>
                                    </tbody>
                        </table>
    
                <?php } ?>
                
	</body>
</html>
           