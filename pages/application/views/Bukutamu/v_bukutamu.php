<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Buku Tamu</h1>
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <form action="<?= base_url('index.php/Excel/upload'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
			<h4>Import Data</h4>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('index.php/Excel/upload'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label>
					<input type="file" name="fileExcel">
				</div>
				<div>
					<button class='btn btn-success' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			    		Import		
					</button>
                    
				</div><br>
			</form>
            </div>
            <hr>
<center><h6 class="m-0 font-weight-bold text-primary" >Data Tamu</h6></center>
    </div>

    <div class="card-body">
    <a href="<?php echo base_url('End_bukutamu/tambah_tamu');?>" class='btn btn-sm 
    btn-primary pull-right'><i class="fa-solid fa-notes-medical"></i>Tamu Baru</a>
    
    <a href="<?php echo base_url('Pdf_bukutamu/index');?>" target="_blank" class='btn btn-sm 
    btn-danger pull-right'><i class="fas fa-print"></i>Pdf</a>
   
   <br><br>
   <div class="table-responsive">
            <table class="table table-bordered  table-hover table-default" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-default">
                
                    <tr>
                        <th>No</th>
                        <th>Nama Tamu</th>
                        <th>Instansi</th>
                        <th>Alamat Instansi</th>
                        <th>Tujuan Bertamu</th>
                        <th>Tgl Bertamu</th>
                        <th>Keterangan</th>
                        <th width="17%">Opsi</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach($buku_tamu as $u){ 
                    ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->nama_tamu ?></td>
                    <td><?php echo $u->instansi ?></td>
                    <td><?php echo $u->alamat_instansi ?></td>
                    <td><?php echo $u->tujuan_tamu ?></td>
                    <td><?php echo $u->tgl_bertamu ?></td>
                    <td><?php echo $u->keterangan ?></td>
                    <td>
                        <a href="<?php echo base_url().'End_bukutamu/edit_tamu'.$u->id_tamu; ?>"class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-nib "></i>Edit</a>
                        <a href="<?php echo base_url().'End_bukutamu/hapus'.$u->id_tamu; ?>"class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can "></i>Hapus</a>

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


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->