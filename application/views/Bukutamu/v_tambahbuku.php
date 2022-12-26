<div class="container">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Tambah Tamu</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'Bukutamu' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo 
base_url().'admin/petugas_tambah_aksi'; ?>">
 <div class="form-group">
 <label class="font-weight-bold" for="nama">Nama Tamu</label>
 <input type="text" class="form-control" name="nama" placeholder="Masukkan 
nama tamu" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="username">Instansi</label>
 <input type="text" class="form-control" name="username" 
placeholder="Masukkan nama instansi" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="password">Alamat Instansi</label>
 <input type="password" class="form-control" name="password" 
placeholder="Masukkan alamat instansi" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="nama">Tujuan Tamu</label>
 <input type="text" class="form-control" name="nama" placeholder="Masukkan 
tujuan" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="username">Tgl Bertamu</label>
 <input type="date" class="form-control" name="username" 
placeholder="Masukkan username" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="password">Keterangan</label>
 <input type="password" class="form-control" name="password" 
placeholder="Masukkan Keterangan" required="required">
 </div>
 <br>
 <input type="submit" class="btn btn-primary" value="Simpan">
 </form>
 </div>
 </div>
</div>