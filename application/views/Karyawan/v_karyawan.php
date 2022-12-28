<br>
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Karyawan </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'Welcome' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <a href="<?php echo base_url().'Karyawan/tambah' ?>" class='btn btn-sm 
btn-primary pull-left'><i class="fa fa-plus"></i>Karyawan</a>

 <br/>
 <br/>
 
 <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th width="1%">No</th>
                        <th>NIK</th>
                        <th>Nama Karyawan</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <?php 
$no = 1;
foreach($karyawan as $k){ ?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $k->nik ?></td>
<td><?php echo $k->nama_karyawan ?></td>
<td><?php echo $k->jenis_kelamin ?></td>
<td><?php echo $k->alamat ?></td>
<td><?php echo $k->level ?></td>
<td>
 <?php echo anchor('Karyawan/edit/'.$k->id_karyawan,'<button type="button" class="btn btn-primary">Edit</button>'); ?>
 <?php echo anchor('Karyawan/hapus/'.$k->id_karyawan,'<button type="button" class="btn btn-danger">Hapus</button>'); ?>
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