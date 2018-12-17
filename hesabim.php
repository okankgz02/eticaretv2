<?php include 'header.php' ?> 
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Hesap Bilgileri</h2>
						<?php 

				if ($_GET['durum']=="farklisifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
				</div>
					
				<?php } elseif ($_GET['durum']=="eksiksifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
				</div>
					
				<?php } elseif ($_GET['durum']=="mukerrerkayit") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
				</div>
					
				<?php } elseif ($_GET['durum']=="basarisiz") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
				</div>
					
				<?php }
				 ?>	

				

						<form action="nedmin/netting/islem.php" method="POST">
							<input type="email"  id="username" class="form-control"  name="kullanici_mail"  value="<?php echo $kullanicicek['kullanici_mail']; ?>" disabled="true"/>
							<input type="password"  id="password" class="form-control"  name="kullanici_password" />
							<input type="text"  name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" "/>
							<input type="text"   name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm']; ?>"/>
							<input type="text"  name="kullanici_adres" value="<?php echo $kullanicicek['kullanici_adres']; ?>"/>
							<input type="text" name="kullanici_il" value="<?php echo $kullanicicek["kullanici_il"]; ?>"/>
							<input type="text"  name="kullanici_ilce" value="<?php echo $kullanicicek['kullanici_ilce']; ?>"/>
								<input type="hidden"  name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>"/>
						
							<button type="submit"  name="kullaniciguncelle" class="btn btn-default">Güncelle</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Veya</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Profil Resmi  </h2>
						<form action="nedmin/netting/islem.php" method="POST" id="demo-form2">

							<button  name="kullanicikaydet" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php include 'footer.php' ?>