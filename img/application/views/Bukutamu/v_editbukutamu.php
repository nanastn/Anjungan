<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Data Tamu </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'End_bukutamu' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <?php foreach($buku_tamu as $u){ ?>
 <form method="post" action="<?php echo base_url().'End_bukutamu/update'; ?>">
 <input type="hidden" name="id_tamu" value="<?php 
    echo $u->id_tamu ?>">

    <label for="nama_tamu"><b>Nama Tamu</b></label>
    <input type="text"  class="form-control" name="nama_tamu" value="<?php 
    echo $u->nama_tamu ?>"required><br>

    <label for="instansi"><b>Instansi</b></label>
    <input type="text"  class="form-control" name="instansi"  value="<?php 
    echo $u->instansi ?>" required><br>
    
    <label for="alamat_instansi"><b>Alamat Instansi</b></label>
    <input type="text"  class="form-control" name="alamat_tamu" value="<?php 
    echo $u->alamat_instansi ?>"required><br>

    <label for="tujuan_tamu"><b>Tujuan Bertamu</b></label>
    <input type="text"  class="form-control" name="tujuan_tamu"  value="<?php 
    echo $u->tujuan_tamu ?>" required><br>
    
    <label for="tgl_tamu"><b>Tgl Bertamu</b></label>
    <input type="date"  class="form-control" name="tgl_bertamu" value="<?php 
    echo $u->tgl_bertamu ?>"required><br>

    <label for="keterangan"><b>Keterangan</b></label>
    <input type="text"  class="form-control" name="keterangan"  value="<?php 
    echo $u->keterangan ?>" required><br>


<input type="submit" class="btn btn-primary" value="Simpan">

 <?php } ?>
 </div>
 </div>
</div>
 </div>