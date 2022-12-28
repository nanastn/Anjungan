
<div class="container">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Tambah Tamu</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'End_bukutamu' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo 
base_url().'End_bukutamu/tambah_aksi'; ?>">
 <div class="form-group">
 <label class="font-weight-bold" for="nama">Nama Tamu</label>
 <input type="text" class="form-control" name="nama_tamu" placeholder="Masukkan 
nama tamu" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="username">Instansi</label>
 <input type="text" class="form-control" name="instansi" 
placeholder="Masukkan nama instansi" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="password">Alamat Instansi</label>
 <input type="text" class="form-control" name="alamat_instansi" 
placeholder="Masukkan alamat instansi" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="nama">Tujuan Tamu</label>
 <input type="text" class="form-control" name="tujuan_tamu" placeholder="Masukkan 
tujuan" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="username">Tgl Bertamu</label>
 <input type="date" class="form-control" name="tgl_bertamu" 
placeholder="Masukkan username" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="password">Keterangan</label>
 <input type="text" class="form-control" name="keterangan" 
placeholder="Masukkan Keterangan" required="required">
 </div>
 <br>
 <input type="submit" class="btn btn-primary" value="Simpan">
 </form>
 </div>
 </div>
</div>