<?php include 'server/server.php' ?>
<?php 

	$query = "SELECT * FROM tblresident WHERE resident_type=1";
    $result = $conn->query($query);
	$total = $result->num_rows;

	
	$query5 = "SELECT * FROM tblpurok";
	$purok = $conn->query($query5)->num_rows;

	$query6 = "SELECT * FROM tblprecinct";
	$precinct = $conn->query($query6)->num_rows;

	$query7 = "SELECT * FROM tblblotter";
	$blotter = $conn->query($query7)->num_rows;

	$date = date('Y-m-d'); 
	$query8 = "SELECT SUM(amounts) as am FROM tblpayments WHERE `date`='$date'";
	$revenue = $conn->query($query8)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title> Home -  Barangay Profiling System</title>
</head>
<body class="image-container" >
	<?php include 'templates/loading_screen.php' ?>

	<div class="wrapper">
			
		<!-- Main Header -->
		<?php include 'templates/main-header.php' ?>
		<!-- End Main Header -->
			<div class="content">
				<div class="panel-header">
					<div class="page-inner">						
						<h2 class="text-dark fw-bold"> BARANGAY PROFILING SYSTEM </h2>			
					</div>
				</div>
				<div class="page-inner mt--2" >
					<?php if(isset($_SESSION['message'])): ?>
							<div class="bg-transparent text-dark alert alert-<?= $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
								<?php echo $_SESSION['message']; ?>
							</div>
						<?php unset($_SESSION['message']); ?>
						<?php endif ?>
						<div >
                                    <div class="d-flex flex-wrap justify-content-around">
                                        <div class="text-center">
										<img src="assets/uploads/<?= $brgy_logo ?>" class="img-fluid" width="150">
										</div>
										<div class="text-center text-dark" style="color:#0C090A;">
                                            <h3 class="mb-0">Province of <?= ucwords($province) ?></h3>
											<h3 class="mb-0"><?= ucwords($town) ?> City</h3>
											<h1 class="fw-bold mb-0"> BARANGAY <?= ucwords($brgy) ?></i></h2>
										</div>
                                        <div class="text-center">
										<img src="assets/uploads/<?= $city_logo ?>" class="img-fluid" width="100">
										</div>
									</div>
						
						<div class="row">
						<div class="col-md-7">
							<div class="card card-stats card-success card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-fingerprint"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-4 col-stats">
											<div class="numbers mt-4">
											<a href="resident.php" class="card-link text-light">
												<h2 class="fw-bold text-uppercase">Barangay Profiling</h2></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="card card-stats card-warning card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-4 col-stats">
											<div class="numbers mt-4">
											<a href="business_permit.php" class="card-link text-light">
												<h2 class="fw-bold text-uppercase">Barangay Clearance</h2>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="card card-stats card-round" style="background-color:#880a14; color:#fff">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="icon-direction"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
											<a href="purok_info.php?state=purok" class="card-link text-light">
												<h2 class="fw-bold text-uppercase">Purok Info</h2>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card card-stats card-round card-danger">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="icon-layers"></i>
											</div>
										</div>
									
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
											<a href="revenue.php" class="card-link text-light">
												<h2 class="fw-bold text-uppercase">History/Revenue</h2>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
	<br><br><br>
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->		
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>