<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">

 <h4 align="center">Buku Tamu</h4>


<a href="<?php echo base_url().'Welcome' ?>" class='btn btn-sm btn-light btn-outline-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
  <br> <br>
   <div class="table-responsive">
            <table class="table table-bordered  table-hover table-default" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-default">
                
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
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->