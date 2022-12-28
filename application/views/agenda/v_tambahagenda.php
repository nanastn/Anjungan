<div class="container">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Tambah Agenda</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'Agenda' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo 
base_url().'Agenda/tambah_aksi'; ?>">
 <div class="form-group">
 <label class="font-weight-bold" for="hari">Hari</label>
 <input type="varchar" class="form-control" name="hari" placeholder="Masukkan 
hari" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="tgl">Tanggal</label>
 <input type="date" class="form-control" name="tgl" 
placeholder="Masukkan Nama Tanggal" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="agenda">Agenda</label>
 <input type="varchar" class="form-control" name="agenda" 
placeholder="Masukkan Agenda" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="jam">Jam</label>
 <input type="time" class="form-control" name="jam" placeholder="Masukkan 
Jam" required="required">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="keterangan">Keterangan</label>
 <input type="text" class="form-control" name="keterangan" 
placeholder="Masukkan Keterangan" required="required">
 </div>
 <br>
 <input type="submit" class="btn btn-primary" value="Simpan">
 </form>
 </div>
 </div>
</div>