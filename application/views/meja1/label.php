
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="noindex, nofollow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="yoriadiatma">
        <title>Label</title>
        <style>@page { size: A8 landscape; margin: -12px 5px 5px 15px !important;
            padding: 0px 0px 0px 0px !important; }</style>
    </head>
    <body onload="window.print();" class="A8">
        <section style="border:0px solid black">
            <p align="center" style="font-size:15px"><b><u>RS AMC Muhammadiyah</u></b></p>
            <?php foreach($hasil as $u){ ?>
            <table class="table table-borderles">
                            <tbody>
                                <tr>
                                    <td style="width: 20%; font-size:12px "><b>Nama</b></td>
                                    <td style="width: 10%; font-size:12px"><b>:</b></td>
                                    <td style="width: 70%; font-size:10px"><b><?php echo  substr($u->nama ,0,35) ?></b></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%; font-size:12px"><b>Tgl Lahir</b></td>
                                    <td style="width: 10%; font-size:12px"><b>:</b></td>
                                    <td style="width: 70%; font-size:12px"><b><?php echo $u->tgl_lahir ?></b></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%; font-size:12px"><b>Unit Kerja</b></td>
                                    <td style="width: 10%; font-size:12px"><b>:</b></td>
                                    <td style="width: 70%; font-size:12px"><b><?php echo substr($u->prodi,0,30) ?></b></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%; font-size:12px"><b>Paket</b></td>
                                    <td style="width: 10%; font-size:12px"><b>:</b></td>
                                    <td style="width: 70%; font-size:12px"><b><?php echo $u->paket_periksa ?></b></td>
                                </tr>
                            </tbody>
            </table>
            <?php } ?>
        </section>
    </body>
</html>
