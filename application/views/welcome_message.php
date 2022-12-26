<!DOCTYPE html>
<html lang="en">
<head>
  <title>ANJUNGAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script type="text/javascript">
    window.onload = function() { jam(); }
   
    function jam() {
     var e = document.getElementById('jam'),
     d = new Date(), h, m, s;
     h = d.getHours();
     m = set(d.getMinutes());
     s = set(d.getSeconds());
   
     e.innerHTML = h +':'+ m +':'+ s;
   
     setTimeout('jam()', 1000);
    }
   
    function set(e) {
     e = e < 10 ? '0'+ e : e;
     return e;
    }
   </script>

   <style>
    .google-maps {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
    .responsive {
   width: 100%;
   max-width: 130px;
   height: auto;
}
</style>
<script language="JavaScript">
  var tanggallengkap = new String();
  var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
  namahari = namahari.split(" ");
  var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
  namabulan = namabulan.split(" ");
  var tgl = new Date();
  var hari = tgl.getDay();
  var tanggal = tgl.getDate();
  var bulan = tgl.getMonth();
  var tahun = tgl.getFullYear();
  tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
  </script>


</head>

<body>

<nav class="navbar navbar-primary bg-info">

    <a class="navbar-info" href="#">
      <img src="assets/smg.png" alt="Logo" style="width:80px;" class="d-inline-block align-text-top"> SMKN 1 PURBALINGGA</a>
      <br>
      
    </a>

    <h4><script language='JavaScript'>document.write(tanggallengkap).setTimeout;</script> |<br><h4 id='jam'></h4></h4>
  </div>
</nav>
<marquee direction=”right” bgcolor="white"><h2>SELAMAT DATANG DI SMK N 1 PURBALINGGA</h2></marquee>
<br><br>
 <!-- Main row -->
 <div class="container">
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              
               
             <!-- /.card-header -->
              <div class="card-body">
                <!-- <div class="tab-content p-0"> -->
                  <!-- Morris chart - Sales -->
                  <!-- 4:3 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe
  style="border: 1px solid #cccccc; width: 100%; height: 100%"
  src="https://www.youtube.com/embed/PjwZG7m9spQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
</iframe>
</div>
            <!-- /.card -->
              </div>
              <!-- /.card-body -->
              
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
              <!-- /.card-body-->
            <div class="card bg-gradient-light">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-circle"></i>
                  Denah SMK
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
              
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                 <div id="calendar" style="width: 100%; height: 100%" ></div>
                <div class="google-maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.553235761966!2d109.34473481379857!3d-7.403849674956896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6559b9ff8d3795%3A0xa58daaef273f4e44!2sSMKN%201%20Purbalingga!5e0!3m2!1sid!2sid!4v1671688547566!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              </div>
			  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div>
      </div>
    </section>
  </div>
</div>

<br>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-6">

          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Buku Tamu</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-book"></i>
            </div>
            <a href="<?php echo base_url('Bukutamu');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Legalisir</p>
            </div>
            <div class="icon">
              <i class="ion ion-edit"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>44</h3>

              <p>Agenda & Kegiatan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url('Agenda');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->


</body>
</html>