<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>BXDEV - Music, Audio and Radio web application</title>
	<meta name="description" content="Music, Musician, Bootstrap">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
	<link rel="apple-touch-icon" href="images/logo.png">
	<meta name="apple-mobile-web-app-title" content="Flatkit">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/images/logo.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css/animate.min.css" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdn.bootcss.com/material-design-icons/3.0.1/iconfont/material-icons.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/dist/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/app.min.css">
</head>


<body>
	<div class="app dk" id="app">
		<!-- Sidebar -->
		<?php $this->load->view('layout/sidebar') ?>
		<div id="content" class="app-content white bg box-shadow-z2" role="main">
			<!-- Header -->
			<?php $this->load->view('layout/header') ?>
			<!-- Footer -->
			<?php $this->load->view('layout/footer') ?>
			<div class="app-body" id="view">
				<div class="page-bg" data-stellar-ratio="2" style="background-image: url('<?php echo base_url(); ?>assets/images/a3.jpg')"></div>
				<div class="page-content">
					<!-- Profile Hero -->
					<?php $this->load->view('component/profile/profile.hero.php') ?>
					<div class="row-col">
						<div class="col-lg-9 b-r no-border-md">
							<div class="padding p-y-0 m-b-md">
								<!-- Track Header -->
								<?php $this->load->view('component/profile/track.header.php') ?>
								<div class="tab-content">
									<!-- Profile chat -->
									<!-- Profile Tracklist -->
									<?php $this->load->view('component/profile/profile.tracklist.php') ?>
									<!-- Profile Playlist -->
									<!-- Profile Like List -->
									<!-- Profile Fomr -->
								</div>
							</div>
						</div>
						<!-- Profile sidebar list -->
					</div>
				</div>
				<!-- profile delete model -->
			</div>
		</div>
		<!-- global switcher -->
		<!-- global search -->
		<!-- global share -->
	</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/app.min.js"></script>
</body>
</html>