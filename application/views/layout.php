<?php
defined('BASEPATH') or exit('No direct script access allowed');
if ($this->session->userdata('level') == 'Penjaga') {
	$site = "penjaga/";
} else if ($this->session->userdata('level') == 'Admin') {
	$site = "page/";
} else {
	$site = "welcome/";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Halaman Admin Antrian</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/loket.css') ?>">

</head>


<body>
	<header>
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-4">
				<div id="logo">
					<img src="<?php echo base_url('media/' . $instansi->logo); ?>" class="img" onclick="window.location='<?php echo site_url($site); ?>'">
				</div>
			</div>
			<div class="col-md-8">
				<div class="instansi">
					<h1 onclick="window.location='<?php echo site_url($site); ?>'"><?php echo $instansi->instansi; ?></h1>
					<h3 class="hidden-xs">No. Telp <?php echo $instansi->telp; ?></h3>
					<h3 id="alamat" class="hidden-xs"><?php echo $instansi->alamat; ?></h3>
				</div>
			</div>
		</div>
	</header>