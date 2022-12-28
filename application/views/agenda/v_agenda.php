<br>
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Agenda </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'Welcome' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <a href="<?php echo base_url().'Agenda/tambah' ?>" class='btn btn-sm 
btn-primary pull-left'><i class="fa fa-plus"></i>Agenda</a>

 <br/>
 <br/>
 
 <table class="table table-bordered table-striped table-hover">
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
foreach($agenda as $a){ ?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $a->hari ?></td>
<td><?php echo $a->tgl ?></td>
<td><?php echo $a->agenda ?></td>
<td><?php echo $a->jam ?></td>
<td><?php echo $a->keterangan ?></td>
<td>
 <?php echo anchor('Agenda/edit/'.$a->id_agenda,'<button type="button" class="btn btn-primary">Edit</button>'); ?>
 <?php echo anchor('Agenda/hapus/'.$a->id_agenda,'<button type="button" class="btn btn-danger">Hapus</button>'); ?>
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
