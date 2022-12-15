<?php include 'server/server.php' ?>
<?php
    $state = $_GET['state'];
    $purok = array();

    if($state=='purok'){
        $query = "SELECT * FROM tblpurok ORDER BY `name`";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()){
            $purok[] = $row; 
        }
    }else{
        $query = "SELECT * FROM tblprecinct";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()){
            $purok[] = $row; 
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Barangay Purok -  Barangay Management System</title>
</head>
<body>
<?php include 'templates/loading_screen.php' ?>
<div class="wrapper">
		<!-- Main Header -->
		<?php include 'templates/main-header.php' ?>
		<!-- End Main Header -->

			<div class="content">
				<div class="panel-header bg-transparent">
					<div class="page-inner">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white fw-bold"><?= $state=='purok' ? 'Purok' : 'Precint' ?></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<div class="row mt--2">
						<div class="col-md-9">
                            <?php if(isset($_SESSION['message'])): ?>
                                <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php unset($_SESSION['message']); ?>
                            <?php endif ?>
                            <div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><?= $state=='purok' ? 'Purok Information' : 'Precint Information' ?></div>
									</div>
								</div>
								<div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    
                                                    <th scope="col"><?= $state=='purok' ? 'Purok No.' : 'Precint No.' ?></th>
                                                    <th scope="col">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($purok)): ?>
                                                    <?php $no=1; foreach($purok as $row): ?>
                                                    <tr>
                                                        
                                                        <td>Purok <?= $state!='purok' ? $row['precinct'] : $row['name'] ?></td>
                                                        <td><?= $row['details'] ?></td>
                                                    </tr>
                                                    <?php $no++; endforeach ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="4" class="text-center">No Available Data</td>
                                                    </tr>
                                                <?php endif ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                   
                                                    <th scope="col"><?= $state=='purok' ? 'Purok No.' : 'Precint No.' ?></th>
                                                    <th scope="col">Details</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
								</div>
							</div>
						</div>
                        <div class="col-md-3">
                            <div class="card card-stats card-round" style="<?= $state=='purok' ? 'background-color:#880a14; color:#fff' : 'background-color:#a349a3; color:#fff' ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="icon-big text-center">
                                                    <i class="fas fa-fingerprint"></i>
                                                </div>
                                            </div>
                                            <div class="col-3 col-stats">
                                            </div>
                                            <div class="col-6 col-stats ">
                                                <div class="numbers">
                                                    <p class="card-category text-light"><?= $state=='purok' ? 'Total Purok' : 'Total Precint' ?></p>
                                                    <h4 class="card-title text-light"><?= number_format(count($purok)) ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>