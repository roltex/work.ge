<?php

if (isset($_GET['act']) && $_GET['act'] == 'logout') {

	session_destroy();

	header('location: ?');

	die();

}

if (isset($_POST['submit']) && $_POST['submit'] == $_TRANSLATION['enter']) {

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	$database_link = DBM::open($config['database']);

	$get_admin_query = "SELECT `id`, `name`, `email`, `group_id` FROM `bc_administrators` WHERE `email` = '" . DBM::escape($email) . "' AND `password` = SHA1('" . DBM::escape($password) . "') AND `active` = 'Y'";

	if ($get_admin_result = DBM::queryData($get_admin_query, $database_link)) {

		$get_admin_data = DBM::fetchObject($get_admin_result);

		$_SESSION['admin_id'] = $get_admin_data->id;
		$_SESSION['admin_email'] = $get_admin_data->email;
		$_SESSION['admin_name'] = $get_admin_data->name;

		header('location: ?');

		DBM::close($database_link);

		die();

	}

	DBM::close($database_link);

}

?>
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Simple login form -->
				<form method="post">
					<div class="panel panel-body login-form">
						<div class="text-center">
							<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
							<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" name="email" placeholder="Username">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="password" class="form-control" name="password" placeholder="Password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary btn-block"><?php echo $TRANSLATION['enter']; ?> <i class="icon-circle-right2 position-right"></i></button>
						</div>
					</div>
				</form>
				<!-- /simple login form -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->


		
