<?php
ob_start();
session_start();

include 'nedmin/netting/baglan.php';



$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();



$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['userkullanici_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">

    <title><?php echo $ayarcek['ayar_title']; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="index.php"><i class="fa fa-phone"></i> <?php echo $ayarcek['ayar_tel']; ?></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> <?php echo $ayarcek['ayar_mail']; ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="http://<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://<?php echo $ayarcek['ayar_youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
								<li><a href="http://<?php echo $ayarcek['ayar_tel']; ?>"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="http://<?php echo $ayarcek['ayar_google']; ?>"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

	
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="Eticaret" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">

							

								<?php if(isset($_SESSION['userkullanici_mail'])){  ?>
								<li><a href=""><i class="fa fa-user"></i> Hoş Geldiniz :<?php echo $kullanicicek['kullanici_adsoyad'] ?></a></li>
								<li><a href=""><i class="fa fa-user"></i> Hesap Bilgilerim</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Siparişlerim</a></li>
								 <li><a href="logout.php"><i class="fa fa-lock"></i> Güvenli Çıkış Yap</a></li>

								<?php }else { ?>
 								 <li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
								<?php }  ?>
		                      
	
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<?php  while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){ ?>

								<li><a href="<?php echo $menucek['menu_url']; ?>" class="active"><?php echo $menucek['menu_ad']; ?></a></li>
							

								<?php	}  ?>




							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
