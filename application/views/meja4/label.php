
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="noindex, nofollow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="yoriadiatma">
        <title>Label</title>
        <style>@page { size: A10 landscape; margin:0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important; }</style>
    </head>
    <body onload="window.print();" class="A10">
        <section style="border:0px solid black">
            <!--<p align="center" style="font-size:12px"><b><u>RS AMC Muhammadiyah</u></b></p>-->
            <?php foreach($hasil as $u){ ?>
            <table class="table table-borderles">
                            <tbody>
                                <tr>
                                    <td style="width: 20%; font-size:9px "><b>Nama</b></td>
                                    <td style="width: 5%; font-size:9px"><b>:</b></td>
                                    <td style="width: 60%; font-size:9px"><b><?php echo  substr($u->nama ,0,15) ?></b></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%; font-size:9px"><b> Tgl Lahir</b></td>
                                    <td style="width: 5%; font-size:9px"><b>:</b></td>
                                    <td style="width: 60%; font-size:9px"><b><?php echo $u->tgl_lahir ?></b></td>
                                </tr>
                                 <tr>
                                    <td style="width: 20%; font-size:9px"><b> Prodi</b></td>
                                    <td style="width: 5%; font-size:9px"><b>:</b></td>
                                    <td style="width: 60%; font-size:9px"><b><?php echo $u->prodi ?></b></td>
                                </tr>
                               
                                <tr>
                                     <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $date = new DateTime('now');
                                $tanggal= $date->format('d F Y');
                                ?>
                                    <td style="width: 20%; font-size:9px"><b>Tgl Periksa</b></td>
                                    <td style="width: 5%; font-size:9px"><b>:</b></td>
                                    <td style="width: 60%; font-size:9px"><b><?php echo $tanggal ?></b></td>
                                </tr>
                            </tbody>
            </table>
            <!--<p align="center" style="font-size:12px"><b><u>RS AMC Muhammadiyah</u></b></p>-->
            <?php } ?>
        </section>
    </body>
</html>
