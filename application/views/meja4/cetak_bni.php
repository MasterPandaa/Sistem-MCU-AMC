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
    <div>
        <img src="<?php echo 'assets/images/Header.jpg'; ?>" alt="RS AMC Muhammadiyah Header" style="width: 100%;">
    </div>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
            <center><b><font size="4" face="Courier New">Resume <i>Medical Check Up</i></font></b></center>
                <?php foreach($hasil as $u){ 
                    $tgl_periksa = date('d-m-Y', strtotime($u->tgl_periksa))?>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 60%; vertical-align: top;">
                                    <table>
                                        <tr>
                                            <td style="width: 120px"><font size="3" face="Arial">Nama</font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 150%"><font size="3" face="Arial"><?php echo $u->nama ?></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 120px"><font size="3" face="Arial">Jenis Kelamin</font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 150%"><font size="3" face="Arial"><?php echo $u->jk ?></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 120px"><font size="3" face="Arial">Status Pernikahan</font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 150%"><font size="3" face="Arial"><?php echo $u->stts_pernikahan ?></font></td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="width: 40%; vertical-align: top;">
                                    <table>
                                        <tr>
                                            <td style="width: 120px"><font size="3" face="Arial">Tanggal Lahir</font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 150%"><font size="3" face="Arial"><?php echo $u->tgl_lahir ?></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 120px"><font size="3" face="Arial">Jabatan</font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 150%"><font size="3" face="Arial"><?php echo $u->jabatan ?></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 120px"><font size="3" face="Arial">Paket Pemeriksaan</font></td>
                                            <td style="width: 10%"><font size="3" face="Arial">:</font></td>
                                            <td style="width: 150%"><font size="3" face="Arial"><?php echo $u->paket_periksa ?></font></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">A. Hasil Pemeriksaan Laboratorium</td>
                            </tr>
                            <tr>
                                <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
                                <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->pemeriksaan_lab; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">B. Hasil Pemeriksaan Non-Laboratorium</td>
                            </tr>
                            <tr>
                                <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
                                <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->pemeriksaan_non_lab; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">C. Kesimpulan</td>
                            </tr>
                            <tr>
                                <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
                                <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->kesimpulan; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">D. Saran</td>
                            </tr>
                            <tr>
                                <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
                                <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->saran; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">E. Tindah Lanjut</td>
                            </tr>
                            <tr>
                                <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
                                <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->tindak_lanjut; ?></td>
                            </tr>
                            <br><br>
                        </table>
                        <table class="table kanan4">
                                    <tbody>
                                        <tr>
                                            <td  scope="row"style="width: 100px;"><font size="3" face="Courier New"></font></td>
                                            <td  scope="row"style="width: 100px"><font size="3" face="Courier New"></font></td>
                                            <td  scope="row"style="width: 350px"><font size="3" face="Courier New"><center>Yogyakarta, <?php echo $tgl_periksa ?></center></font></td>
                                        </tr>
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
                                            <td  scope="row"style="width: 350px"><font size="2" face="Arial"><center><u><?php echo $u->dokter; ?></u></center></font></td>
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
           


