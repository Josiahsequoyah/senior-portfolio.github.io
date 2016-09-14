<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/Project/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport"    content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
  
  <title>Joe's Jokes</title>

  <link rel="shortcut icon" href="/Project/assets/images/gt_favicon.png">
  
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="/Project/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Project/assets/css/font-awesome.min.css">

  <!-- Custom styles for our template -->
  <link rel="stylesheet" href="/Project/assets/css/bootstrap-theme.css" media="screen" >
  <link rel="stylesheet" href="/Project/assets/css/main.css">

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
          <li><a class="btn" href="/Project/shoppingcart/index.php?cart"><i class="fa fa-shopping-cart fa-5"></i> Cart </a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div> 
  <!-- /.navbar -->

  <!-- Header -->
  <header id="head" class="secondary"></header>
  <!-- /Header -->


  <div class="container text-center">
    <br> 
    <h1>Manage Jokes <i class="fa fa-pencil fa-5"></i></h1>
    <br>
    <p><a href="?add">Add new joke</a></p>
    <form action="" method="get">
      <p>View jokes satisfying the following criteria:</p>
      <div>
        <label for="author">By author:</label>
        <select name="author" id="author">
          <option value="">Any author</option>
          <?php foreach ($authors as $author): ?>
            <option value="<?php htmlout($author['id']); ?>"><?php
                htmlout($author['name']); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label for="category">By category:</label>
        <select name="category" id="category">
          <option value="">Any category</option>
          <?php foreach ($categories as $category): ?>
            <option value="<?php htmlout($category['id']); ?>"><?php
                htmlout($category['name']); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label for="text">Containing text:</label>
        <input type="text" name="text" id="text">
      </div>
      <br>
      <div>
        <input type="hidden" name="action" value="search">
        <input type="submit" value="Search">
      </div>
    </form>
    <?php include '../logout.inc.html.php'; ?>
</div>  <!-- /container -->

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
