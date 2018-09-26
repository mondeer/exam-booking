<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exams || Information Management System</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  	<link href="css/nivo-lightbox.css" rel="stylesheet" />
  	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	  <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
        <div class="row">
					<div class="col-sm-4 col-md-4">
					  <p class="bold text-left">Monday - Monday, 24/7 </p>
					</div>
          <div class="col-sm-4 col-md-">
            <p class="bold text-center">Today: {{ Carbon\Carbon::now()->format('l j F Y')}} </p>
					</div>
					<div class="col-sm-4 col-md-4">
					<p class="bold text-right">Call us now +254 700 000000</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">

          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="/">
                  <img src="img/logo.png" alt="" width="150" height="40" />
              </a>
          </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="/">Register</a></li>
				<li><a href="/">Help?</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 imond">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
            <br><br>
					<h2  class="h-ultra imondwhite">Login to get ACCESS</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light imondwhite">We Value Security, </h4>
					</div>
						<div class="well well-trans">
              <form class="form-horizontal" role="form" method="POST" action="/login">
                    {{ csrf_field() }}

                    @if( session('error') )
                        <div class="alert alert-danger">
                          {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="" href="/register">
                                Not yet Registered?
                            </a>
                        </div>
                    </div>
                </form>
						</div>


					</div>
					<div class="col-lg-6 ">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<img src="img/ha.jpg" class="img-responsive" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->
  <footer>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
            <strong>Copyright &copy; 2018 exams.</strong> All rights
            reserved.
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<div class="credits">
              <a href="#">Developed</a> by <a href="#">Rebecca</a>
            </div>
					</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
