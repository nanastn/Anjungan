<!DOCTYPE html>
<html>
<head>
<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
<!-- Bootstrap core CSS -->
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap core JS -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<body>
<div class="container">
	<div class="container py-5 vh-100"><!--agar posisi form berada di tengah-->
<div class="row justify-content-center align-items-center h-100"><!--posisi form ditengah-->
<div class="card shadow border-0"><!--membuat bayangan-->
<div class="card-body p-5"><!--membuat garis tepi pada sekitar form-->
</head>
<body>
<center><h1>Membuat Login Dengan CodeIgniter <br/> www.malasngoding.com</h1></center>
<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
<tr>
<td>Username</td>
<td><input type="text" name="username" class="table table-bordered" pl></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" class="table table-bordered" ></td>
</tr>
<tr>
<td></td>
<button type="submit" class="btn btn-primary">Submit</button>
</tr>
</table>
</form>
</body>
</html>