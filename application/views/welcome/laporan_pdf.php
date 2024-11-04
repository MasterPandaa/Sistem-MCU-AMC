<style>
table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
<h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
<center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
<center><b><font size="2" face="Courier New">E-mail : info@rsamcmuhammadiyah.com | Website : www.rsamcmuhammadiyah.com</font></b></center>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr><br>
            <?php foreach($hasil as $u){ 
                $tgl = date('d-m-Y', strtotime($u->tgl))?>
            <table class="table table-borderles center">
                <tbody>
                    <tr>
                        <td style="width: 20%">KODE BOOKING</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%"><b><?php echo $u->kode_booking ?><b></td>
                    </tr>
                    <tr>
                        <td style="width: 20%">TANGGAL PERIKSA</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%; "><b>RAPID/SWAB <?php echo $u->tes ?><b></td>
                    </tr>
                    <tr>
                        <td style="width: 20%">TANGGAL PERIKSA</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%"><b><?php echo $tgl ?><b></td>
                    </tr>
                    <tr>
                        <td style="width: 20%">NAMA</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%"><?php echo $u->nama ?></td>
                    </tr>
                </tbody>
            </table><br><br>
            <h3 style="font-style: italic;"><b>UNTUK DIPERHATIKAN</b></h3>
            <h4>1. &ensp; Kode Booking ini berlaku hingga <?php echo $tgl ?> pukul 23:59 WIB.</h4>
            <h4>2. &ensp; Kode booking ini berlaku untuk 1 pasien dengan nama yang sudah didaftarkan.</h4>
            <h4>3. &ensp; Tunjukan kode booking ini kepada petugas RS AMC Muhammadiyah.</h4>
            <h4>4. &ensp; Jangan lupa membawa KTP yang melakukan pemeriksaan diagnosis COVID-19.</h4>
            <br>
                <?php } ?>