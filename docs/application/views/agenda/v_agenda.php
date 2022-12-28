<?php
include('template/header.php')
?>
<nav class="navbar navbar-primary bg-info">

    <a class="navbar-info" href="#">
      <img src="assets/smg.png" alt="Logo" style="width:80px;" class="d-inline-block align-text-top"> SMKN 1 PURBALINGGA</a>
      <br>
      
    </a>

    <h4><script language='JavaScript'>document.write(tanggallengkap).setTimeout;</script> |<br><h4 id='jam'></h4></h4>
  </div>
</nav>

    </div>
    <div class="card-body"> 
        <div class="table-responsive">
            
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">        
            <thead>

                    <tr>
                        <th width="1%">No</th>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Agenda</th>
                        <th>Jam</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <?php 
$no = 1;
foreach($kelas as $k){ ?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $k->hari ?></td>
<td><?php echo $k->tgl ?></td>
<td><?php echo $k->agenda ?></td>
<td><?php echo $k->jam ?></td>
<td><?php echo $k->keterangan ?></td>
<td>
 <?php echo anchor('Agenda/edit/'.$k->id_agenda,'<button type="button" class="btn btn-primary">Edit</button>'); ?>
 <?php echo anchor('Agenda/hapus/'.$k->id_agenda,'<button type="button" class="btn btn-danger">Hapus</button>'); ?>
</td>
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
</body>
</html>