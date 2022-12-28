<br>
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Agenda</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'Agenda' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <?php foreach($agenda as $a){ ?>
 <form method="post" action="<?php echo base_url().'index.php/Agenda/update'; ?>">
 <input type="hidden" value="<?php echo $a->id_agenda; ?>" name="id_agenda">
 <div class="form-group">
 <label class="font-weight-bold" for="hari">Hari</label>
 <input type="text" class="form-control" name="hari"  required="required" value="<?php echo $a->hari; ?>">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="tgl">Tanggal</label>
 <input type="text" class="form-control" name="tgl" required="required" value="<?php echo $a->tgl; ?>">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="agenda">Agenda</label>
 <input type="text" class="form-control" name="agenda"  required="required" value="<?php echo $a->agenda; ?>">
 </div>
 <div class="form-group">
 <label class="font-weight-bold" for="jam">Jam</label>
 <input type="time" class="form-control" name="jam" required="required" value="<?php echo $a->jam; ?>">
 </div><div class="form-group">
 <label class="font-weight-bold" for="keterangan">Keterangan</label>
 <input type="text" class="form-control" name="keterangan"  required="required" value="<?php echo $a->keterangan; ?>">
 </div>
 <br>
 <input type="submit" class="btn btn-primary" value="Simpan">
 </form>
 <?php } ?>
 </div>
 </div>
</div>