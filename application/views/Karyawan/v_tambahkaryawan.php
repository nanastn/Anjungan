<div class="container">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Tambah Karyawan</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'Karyawan' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo 
base_url().'Karyawan/tambah_aksi'; ?>">
 <div class="form-group">
 <label class="font-weight-bold" for="nik">NIK</label>
 <input type="varchar" class="form-control" name="nik" placeholder="Masukkan 
NIK" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="nama_karyawan">Nama Karyawan</label>
 <input type="name" class="form-control" name="nama_karyawan" 
placeholder="Masukkan Nama Karyawan" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label>
 <input type="varchar" class="form-control" name="jenis_kelamin" 
placeholder="Masukkan Jenis Kelamin" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="alamat">Alamat</label>
 <input type="text" class="form-control" name="alamat" placeholder="Masukkan 
Alamat" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="level">Level</label>
 <input type="text" class="form-control" name="level" 
placeholder="Masukkan Level" required="required">
 </div>
 <br>
 <input type="submit" class="btn btn-primary" value="Simpan">
 </form>
 </div>
 </div>
</div>