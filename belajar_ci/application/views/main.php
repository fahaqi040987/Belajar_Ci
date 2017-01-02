<!DOCTYPE html>
<html lang="">
	<head>
	 	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

		<!-- javascript bootstrap -->
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.3.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="logo">
								<img src="<?php echo base_url(); ?>assets/images/logo/logo-kecil.png" alt="Logo StickerCustom" class="img-responsive" width="195px">
							</div><!--end logo-->
						</div><!--end col 3-->
						<div class="col-xs-12 col-sm-9 col-md-9">
							<div class="menu">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<!-- Brand and toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
								
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse navbar-ex1-collapse">
											<ul class="nav navbar-nav">
												<li><a href="<?php echo base_url('home'); ?>">HOME</a></li>
												<li><a href="<?php echo base_url(); ?>product">PRODUCT</a></li>
												<li><a href="<?php echo base_url('blog'); ?>">BLOG</a></li>
												<li><a href="<?php echo base_url('about'); ?>">ABOUT</a></li>
												<li><a href="<?php echo base_url('contact'); ?>">CONTACT</a></li>
											</ul>
										</div><!-- /.navbar-collapse -->
									</div>
								</nav>
							</div><!--end menu-->
						</div><!--end col sm 9-->
					</div><!--end row-->
				</div><!--end container-->
			</header>	
			<?php if($this->router->fetch_class() == 'home'): ?>
			<!-- slider area -->
			<div class="slider">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-id" data-slide-to="0" class=""></li>
							<li data-target="#carousel-id" data-slide-to="1" class=""></li>
							<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item">
								<img src="<?php echo base_url(); ?>assets/images/slider_01.png" alt="slide pertama" class="img-reponsive">
								<div class="container">
									<div class="carousel-caption">
										<h1>Example headline.</h1>
										<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
										<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo base_url(); ?>assets/images/slider_01.png" alt="slide kedua" class="img-reponsive">
								<div class="container">
									<div class="carousel-caption">
										<h1>Another example headline.</h1>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
										<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
									</div>
								</div>
							</div>
							<div class="item active">
								<img src="<?php echo base_url(); ?>assets/images/slider_01.png" alt="slide ketiga" class="img-reponsive">
								<div class="container">
									<div class="carousel-caption">
										<h1>One more for good measure.</h1>
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
										<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
									</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>	
			</div><!--end slider-->
			<?php endif ?>
			<section class="top20">
				<?php $this->load->view($tampilanTengah); ?>
			</section>
			<?php if($this->router->fetch_class() == 'home'): ?>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3>Blog</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<img src="<?php echo base_url(); ?>assets/images/footer-img.png" alt="img footer" class="img-thumbnail">
							<p class="abu">07/08/2013</p>
							<h4>Judul Blog</h4>
							<div class="text-justify top20">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								<a href="#">read more</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<img src="<?php echo base_url(); ?>assets/images/footer-img.png" alt="img footer" class="img-thumbnail">
							<p class="abu">07/08/2013</p>
							<h4>Judul Blog</h4>
							<div class="text-justify top20">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								<a href="#">read more</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<img src="<?php echo base_url(); ?>assets/images/footer-img.png" alt="img footer" class="img-thumbnail">
							<p class="abu">07/08/2013</p>
							<h4>Judul Blog</h4>
							<div class="text-justify top20">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								<a href="#">read more</a>
							</div>
						</div>
					</div><!--end row-->
				</div>
			</footer>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-8">
							Copyright &copy; 2016 STICKERCUSTOM. All Right Reserved.
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="icon">
								<img src="<?php echo base_url(); ?>assets/images/youtube.png" alt="youtube icon" width="30px">
								<img src="<?php echo base_url(); ?>assets/images/ig.png" alt="instagram icon" width="30px;">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php else: ?>
			<div class="footer-second">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-8">
							Copyright &copy; 2016 STICKERCUSTOM. All Right Reserved.
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="icon">
								<img src="assets/images/youtube.png" alt="youtube icon" width="30px">
								<img src="assets/images/ig.png" alt="instagram icon" width="30px;">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif ?>
		</div>
	</body>
</html>