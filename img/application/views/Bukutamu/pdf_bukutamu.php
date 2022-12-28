<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                    <th>No</th>
                        <th>Nama Tamu</th>
                        <th>Instansi</th>
                        <th>Alamat Instansi</th>
                        <th>Tujuan Bertamu</th>
                        <th>Tgl Bertamu</th>
                        <th>Keterangan</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($buku_tamu as $u){ 
    ?>
    <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $u->nama_tamu ?></td>
    <td><?php echo $u->instansi ?></td>
    <td><?php echo $u->alamat_instansi ?></td>
    <td><?php echo $u->tujuan_tamu ?></td>
    <td><?php echo $u->tgl_bertamu ?></td>
    <td><?php echo $u->keterangan ?></td>
</tr>
<?php } ?>
</tbody>
</table>