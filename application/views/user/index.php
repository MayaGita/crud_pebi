<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gusto</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?= base_url('assets/home/'); ?>img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?= base_url('assets/home/'); ?>img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/home/'); ?>img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/home/'); ?>img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?= base_url('assets/home/'); ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/'); ?>fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?= base_url('assets/home/'); ?>css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#features" class="page-scroll">Specials</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
        <li><a href="#contact" class="page-scroll">Creat menu</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Gusto</h1>
            <p>Reservations: (887) 654-3210</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Features Section -->
<div id="features" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Our Specials</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Lorem ipsum dolor</h3>
          <img src="<?= base_url('assets/home/'); ?>img/specials/1.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Consectetur adipiscing</h3>
          <img src="<?= base_url('assets/home/'); ?>img/specials/2.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Duis sed dapibus</h3>
          <img src="<?= base_url('assets/home/'); ?>img/specials/3.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<button style="border-radius: 50%;">50%</button>


<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h3>add new menu</h3>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" method="post" action="<?= base_url('Home/addmenu');?>" novalidate>
        <div class="row">
         
            <div class="form-group">
              <input type="text" id="nama" name="nama_makanan" class="form-control" placeholder="Name" required="required" value="<?= set_value('nama_makanan'); ?>" >
              <p class="help-block text-danger"></p>
            </div>
        
          
            <div class="form-group">
              <input type="text" id="price" name="harga_makanan" class="form-control" placeholder="price" required="required" value="<?= set_value('harga_makanan'); ?>" >
              <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
              <input type="file" id="image" name="image" class="form-control" placeholder="upload image" required="required" value="<?= set_value('image'); ?>" >
              <p class="help-block text-danger"></p>
            </div>

        </div>
        <div class="form-group">
          <textarea name="information" id="information" name="keterangan" class="form-control" rows="4" placeholder="information" required value="<?= set_value('keterangan'); ?>" ></textarea>
          <p class="help-block text-danger"></p>
        </div>
   
        <button type="submit" name="addmenu" class="btn btn-custom btn-lg">add menu</button>
        <h4 style="font-size:10px;"><?= $this->session->flashdata('message'); ?></h4>
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-6">
      <p>&copy; 2017 Gusto. All rights reserved. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
    <div class="col-md-6">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?= base_url('assets/home/'); ?>js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="<?= base_url('assets/home/'); ?>js/bootstrap.js"></script> 
<script type="text/javascript" src="<?= base_url('assets/home/'); ?>js/SmoothScroll.js"></script> 
<script type="text/javascript" src="<?= base_url('assets/home/'); ?>js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="<?= base_url('assets/home/'); ?>js/contact_me.js"></script> 
<script type="text/javascript" src="<?= base_url('assets/home/'); ?>js/main.js"></script>
</body>
</html>
