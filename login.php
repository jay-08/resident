<?php 
	session_start(); 
	if(isset($_SESSION['username'])){
		header('Location: dashboard.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/header.php' ?>
	<title>Login -  Barangay Profiling System</title>
	
<body class="login bg-info">
<?php include 'templates/loading_screen.php' ?>
<div class="container-fluid">
		<div class="row">
			
			<div class="col-lg-6 form-block px-4">
			
		<?php if(isset($_SESSION['message'])): ?>
                <div class="bg-transparent text-light alert alert-<?= $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                    <?= $_SESSION['message']; ?>
                </div>
            <?php unset($_SESSION['message']); ?>
            <?php endif ?>
				<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 form-box bg-dark">
					<div class="text-left mb-3 mt-5">
						<h3 class="text-center mb-4">LOG IN</h3>
			<div class="login-form">
                <form method="POST" action="model/login.php">
				<div class="form-group form-floating-label ">
					<input id="username" name="username" type="text" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Username</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">Password</label>
					<span toggle="#password" class="fa fa-eye field-icon toggle-password"></span>
				</div>
				<div class="mb-3 d-flex align-items-center">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="check">
								<label class="custom-control-label text-info" for="check">Remember me</label>
							</div>
						</div>
						</div>
							
				<div class="form-action mb-3">
                    <button type="submit" class="btn-block btn-rounded btn-login">Sign In</button>
				</div>
                </form>
			</div>
		</div>
		
	</div>
	<div class="right-half" style="background-image: url('assets/uploads/06102022053442mc-arthur.jpg');
    height: 100vh">
    <article>
      </article>
  </div>
	<?php include 'templates/footer.php' ?>
</body>
</html>