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
        .page-break {
            page-break-after: always;
        }
    </style>
    <title>SISTEM MCU RS AMC Muhammadiyah</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php foreach($hasil as $u){ 
        $tgl_periksa = date('d-m-Y', strtotime($u->tgl_periksa));
    ?>
    
    <!-- Halaman 1: Pemeriksaan Umum -->
    <div>
        <img src="<?php echo 'assets/images/Header.jpg'; ?>" alt="RS AMC Muhammadiyah Header" style="width: 100%;">
    </div>
    <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
    <center><b><font size="4" face="Courier New">Hasil Pemeriksaan Fisik</font></b></center>
    
    <!-- Isi dari cetak_umum.php -->
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
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">A. Anamnesis</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">1.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Keluhan Saat Ini</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->keluhan_saat_ini . ' (' . $u->keluhan_lainnya . ')' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">2.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Riwayat Kebiasaan (Merokok)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->merokok_jumlah . ' batang/hari, sejak tahun ' . $u->merokok_sejak ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">3.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Riwayat Kebiasaan (Olahraga)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->olahraga_frekuensi . ' kali/minggu' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">4.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Riwayat Kebiasaan (Konsumsi Lainnya)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->konsumsi_lainnya; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">5.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Riwayat Penyakit Dahulu</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->riwayat_penyakit_dahulu . ' (' . $u->riwayat_penyakit_dahulu_lainnya . ')' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">6.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Riwayat Penyakit Keluarga</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->riwayat_penyakit_keluarga . ' (' . $u->riwayat_penyakit_keluarga_lainnya . ')' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">7.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Jenis Pekerjaan</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->jenis_pekerjaan; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">8.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Perusahaan</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->perusahaan; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">9.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Lama Kerja</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->lama_kerja; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">10.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Riwayat Vaksinasi</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->riwayat_vaksinasi; ?></td>
        </tr>
        
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">B. Hasil Pemeriksaan Fisik</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">1.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Tekanan Darah (TD)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->TD; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">2.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Nadi (N)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->N . ' kali/menit' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">3.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Suhu (S)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->S . ' °C' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">4.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Tinggi Badan (TB)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->tinggi_badan . ' cm' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">5.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Berat Badan (BB)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->bb . ' kg' ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">6.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">BMI</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->bmi; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">7.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Obesitas</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->obesitas; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">8.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Kepala Wajah</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_kepala_wajah; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">9.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Telinga</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_telinga; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">10.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Hidung</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_hidung; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">11.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Tenggorokan</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_tenggorokan; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">12.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Leher</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_leher; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">13.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Thorax/Dada</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_thorax; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">14.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Paru</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_paru; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">15.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Jantung</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_jantung; ?></td>
        </tr>
         <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">16.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Abdomen</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_abdomen; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">17.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Kulit Kuku</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_kulit_kuku; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">18.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Genitourinaria</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_genitourinaria; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">19.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Ekstremitas Atas</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_ekstremitas_atas; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">20.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Ekstremitas Atas (Lanjutan)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_ekstremitas_atas_tambahan; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">21.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Ekstremitas Bawah</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_ekstremitas_bawah; ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">22.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hasil Pemeriksaan Ekstremitas Bawah (Lanjutan)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_pemeriksaan_ekstremitas_bawah_tambahan; ?></td>
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
                <td  scope="row"style="width: 350px"><font size="2" face="Arial"><center><u><?php echo $u->dr_umum; ?></u></center></font></td>
            </tr>
            <tr>
                <td  scope="row"style="width: 100px;"><font size="2" face="Arial"></font></td>
                <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
            </tr>
        </tbody>
    </table>

    <div class="page-break"></div>

    <!-- Halaman 2: Pemeriksaan Gigi -->
    <div>
        <img src="<?php echo 'assets/images/Header.jpg'; ?>" alt="RS AMC Muhammadiyah Header" style="width: 100%;">
    </div>
    <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
    <center><b><font size="4" face="Courier New">Hasil Pemeriksaan Gigi</font></b></center>
    
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
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">A. Hasil Pemeriksaan Gigi dan Mulut</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->hasil_pemeriksaan_gigi; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">B. Kesimpulan Dokter Gigi</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->kesimpulan_gigi; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">C. Saran Dokter Gigi</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->saran_gigi; ?></td>
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
                <td  scope="row"style="width: 350px"><font size="2" face="Arial"><center><u><?php echo $u->dr_gigi; ?></u></center></font></td>
            </tr>
            <tr>
                <td  scope="row"style="width: 100px;"><font size="2" face="Arial"></font></td>
                <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
            </tr>
        </tbody>
    </table>

    <div class="page-break"></div>

    <!-- Halaman 3: Pemeriksaan Mata -->
    <div>
        <img src="<?php echo 'assets/images/Header.jpg'; ?>" alt="RS AMC Muhammadiyah Header" style="width: 100%;">
    </div>
    <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
    <center><b><font size="4" face="Courier New">Hasil Pemeriksaan Mata</font></b></center>
    
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
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">A. Hasil Pemeriksaan Mata</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->hasil_pemeriksaan_mata; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">B. Visus</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->visus; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">C. Tonometri</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->tonometri; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">D. Kesimpulan Dokter Mata</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->kesimpulan_mata; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">E. Saran Dokter Mata</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->saran_mata; ?></td>
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
                <td  scope="row"style="width: 350px"><font size="2" face="Arial"><center><u><?php echo $u->dr_mata; ?></u></center></font></td>
            </tr>
            <tr>
                <td  scope="row"style="width: 100px;"><font size="2" face="Arial"></font></td>
                <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
            </tr>
        </tbody>
    </table>

    <div class="page-break"></div>

    <!-- Halaman 4: Pemeriksaan Jantung -->
    <div>
        <img src="<?php echo 'assets/images/Header.jpg'; ?>" alt="RS AMC Muhammadiyah Header" style="width: 100%;">
    </div>
    <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
    <center><b><font size="4" face="Courier New">Hasil Pemeriksaan Jantung</font></b></center>
    
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
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">A. Hasil Pemeriksaan Threadmill</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->hasil_pemeriksaan_threadmill; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">B. Hasil Pemeriksaan EKG</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->hasil_pemeriksaan_ekg; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">C. Kesimpulan Dokter Jantung</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->kesimpulan_jantung; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">D. Saran Dokter Jantung</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;"></td>
            <td style="width: 95%; font-size: 12px; font-family: Arial;"><?php echo $u->saran_jantung; ?></td>
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
                <td  scope="row"style="width: 350px"><font size="2" face="Arial"><center><u><?php echo $u->dr_jantung; ?></u></center></font></td>
            </tr>
            <tr>
                <td  scope="row"style="width: 100px;"><font size="2" face="Arial"></font></td>
                <td  scope="row"style="width: 100px"><font size="2" face="Arial"></font></td>
            </tr>
        </tbody>
    </table>

    <div class="page-break"></div>

    <!-- Halaman 5: Resume -->
    <div>
        <img src="<?php echo 'assets/images/Header.jpg'; ?>" alt="RS AMC Muhammadiyah Header" style="width: 100%;">
    </div>
    <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
    <center><b><font size="4" face="Courier New">Resume <i>Medical Check Up</i></font></b></center>
    
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
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">1.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Hematologi Lengkap</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hematologi_lengkap ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">2.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Urine Lengkap</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->urine_lengkap ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">3.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Fungsi Liver</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->fungsi_liver ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">4.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Profile Lemak</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->profile_lemak ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">5.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Fungsi Ginjal</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->fungsi_ginjal ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">6.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Glukosa Darah Puasa</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->glukosa_darah_puasa ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">7.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Glukosa Darah 2 Jam PP</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->glukosa_darah_2_jam_pp ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">8.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">HBsAg</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->hasil_hbsag ?></td>
        </tr>
        <tr>
            <td colspan="3" style="font-weight: bold; font-size: 14px; font-family: Arial;">B. Hasil Pemeriksaan Non-Laboratorium</td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">1.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">ECG</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->ecg ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">2.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Thorax PA (CR)</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->thorax_pa ?></td>
        </tr>
        <tr>
            <td style="width: 5%; font-size: 12px; font-family: Arial; padding-left: 40px;">3.</td>
            <td style="width: 45%; font-size: 12px; font-family: Arial;">Fungsi Liver</td>
            <td style="width: 50%; font-size: 12px; font-family: Arial;">: <?php echo $u->fungsi_liver ?></td>
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

