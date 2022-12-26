<br>
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Buku Tamu</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'Welcome' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <a href="<?php echo base_url().'Bukutamu/tambah_tamu' ?>" class='btn btn-sm 
btn-info pull-left'><i class="fa fa-plus"></i> Tamu Baru</a>

 <br/>
 <br/>
 
 <table class="table table-bordered table-striped table-hover">
 <tr>
 <th width="1%">No</th>
 <th>Nama Tamu</th>
 <th>Instansi</th>
 <th>Alamat Instansi</th>
 <th>Tujuan Bertamu</th>
 <th>Tgl Bertamu</th>
 <th>Keterangan</th>
 <th width="16%">Opsi</th>
 </tr>
 <?php 
 $no = 1;
 foreach($buku_tamu as $p){
 ?>
 <tr>
 <td><?php echo $no++; ?></td>
 <td><?php echo $p->nama_tamu; ?></td>
 <td><?php echo $p->instansi; ?></td>
 <td><?php echo $p->alamat_instansi; ?></td>
 <td><?php echo $p->tujuan_tamu; ?></td>
 <td><?php echo $p->tgl_bertamu; ?></td>
 <td><?php echo $p->keterangan; ?></td>
 <td>
 <a href="<?php echo base_url().'Bukutamu/edit/'.$p->id_tamu; ?>" 
class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
 <a href="<?php echo base_url().'Bukutamu/hapus/'.$p->id_tamu; ?>" 
class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
 </td>
 </tr>
 <?php 
 }
 ?>
 </table>
 </div>
 </div>
</div>