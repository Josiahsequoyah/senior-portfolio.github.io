<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Joe's Jokes</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="/Project"><i class="fa fa-th-large fa-5"></i> Joe's Jokes</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="/Project">Home</a></li>
					<li><a href="/Project/jokes/">Jokes</a></li>
					<li><a href="/Project/shoppingcart/index.php">Shop</a></li>
					<li><a href="/Project/filestore">Submit a Joke</a></li>
					<li><a class="btn" href="/Project/shoppingcart/index.php?cart"><i class="fa fa-shopping-cart fa-5"></i> Cart</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head" class="secondary"></header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Congratulations! You just found the best place on the web for jokes!</h2>
		<p class="text-muted">
			Sit back and relax while enjoying some premium jokes or <br>
			add your own jokes and share with them millions of people you'll never meet!
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin"><b>Things to do</b></h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i><a href="/Project/jokes/">Jokes</a></h4></div>
					<div class="h-body text-center">
						<p>Knock, knock. Who's there? Well click and find out!</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-folder-open fa-5"></i><a href="/Project/filestore/">Suggestions</a></h4></div>
					<div class="h-body text-center">
						<p>If you would like to share you own jokes, this is the place to do it!<br><br>
						You can add photos or submit any joke.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-shopping-cart fa-5"></i><a href="/Project/shoppingcart/index.php">Shop</a></h4></div>
					<div class="h-body text-center">
						<p>Wanna impress a friend with your hilarious jokes? Look through our selection of joke books to take on the go.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-briefcase fa-5"></i><a href="/Project/admin/">Administrator</a></h4></div>
					<div class="h-body text-center">
						<p> If you don't know what this section is then you probably shouldn't touch it. <br><br>
						If you do know what it is but you're not a member, then back off! </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<div class="jumbotron top-space">
			<center><img src="/Project/assets/images/dilbert.jpg"></center>
     		<p class="text-right"><a href="/Project/jokes" class="btn btn-primary btn-large">More jokes »</a></p>
  		</div>

</div>	<!-- /container -->

	<footer id="footer" class="top-space">

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="/Project">Home</a> | 
								<a href="/Project/Jokes">Jokes</a> |
								<a href="/Project/shoppingcart">Shop</a> |
								<a href="/Project/filestore">Submit a Joke</a> |
								<b><a href="/Project/admin">Administrators</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget" style="text-align: right;">
						<div class="widget-body">
							<p class="text-right">
								  <?php include_once $_SERVER['DOCUMENT_ROOT'] .
    								'/Project/includes/footer.html.php'; ?>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>