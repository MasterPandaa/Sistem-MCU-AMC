<table class="table table-striped table-bordered table-sm table-paginate">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Paket Pemeriksaan</th>
            <th scope="col">Tanggal Periksa</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $no = 1;
    foreach ($pasien as $p): ?>
        <tr>
            <th><?php echo $no++ ?></th>
            <td><?php echo $p->nama ?></td>
            <td><?php echo $p->paket_periksa ?></td>
            <td><?php echo $p->tgl_periksa ?></td>
            <td><?php echo $p->status ?></td>
            <td>
                <?php if (isset($show_dokter_umum_only) && $show_dokter_umum_only): ?>
                    <!-- Khusus paket D hanya tampilkan Dokter Umum dan Resume -->
                    <a href="<?php echo base_url('meja3/dokter_umum/'.$p->id); ?>" class="btn btn-primary btn-sm">Dokter Umum</a>
                    <a href="<?php echo base_url('meja3/resume/'.$p->id); ?>" class="btn btn-success btn-sm">Resume</a>
                <?php elseif (isset($show_all_buttons) && $show_all_buttons): ?>
                    <a href="<?php echo base_url('meja3/dokter_umum/'.$p->id); ?>" class="btn btn-primary btn-sm">Dokter Umum</a>
                    <a href="<?php echo base_url('meja3/dokter_gigi/'.$p->id); ?>" class="btn btn-info btn-sm">Dokter Gigi</a>
                    <a href="<?php echo base_url('meja3/dokter_mata/'.$p->id); ?>" class="btn btn-warning btn-sm">Dokter Mata</a>
                    <a href="<?php echo base_url('meja3/dokter_jantung/'.$p->id); ?>" class="btn btn-danger btn-sm">Dokter Jantung</a>
                    <a href="<?php echo base_url('meja3/resume/'.$p->id); ?>" class="btn btn-success btn-sm">Resume</a>
                <?php elseif (!isset($show_resume_only) || !$show_resume_only): ?>
                    <a href="<?php echo base_url('meja3/dokter_umum/'.$p->id); ?>" class="btn btn-primary btn-sm">Dokter Umum</a>
                    <a href="<?php echo base_url('meja3/dokter_jantung/'.$p->id); ?>" class="btn btn-danger btn-sm">Dokter Jantung</a>
                    <a href="<?php echo base_url('meja3/resume/'.$p->id); ?>" class="btn btn-success btn-sm">Resume</a>
                <?php else: ?>
                    <a href="<?php echo base_url('meja3/resume/'.$p->id); ?>" class="btn btn-success btn-sm">Resume</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

