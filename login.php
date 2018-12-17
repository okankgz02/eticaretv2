<?php include 'header.php' ?> 
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Kullanıcı Girişi</h2>
						<form action="nedmin/netting/islem.php" method="POST">
							<input type="email" placeholder="Mail Adresiniz" id="username" class="form-control"  name="kullanici_mail"/>
							<input type="password" placeholder="Şifreniz" id="password" class="form-control"  name="kullanici_password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Oturum Kaydet
							</span>
							<button type="submit"  name="kullanicigiris" class="btn btn-default">Giriş Yap</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Veya</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Kayıt Ol</h2>
						<form action="nedmin/netting/islem.php" method="POST" id="demo-form2">
							<input type="text" placeholder="İsminiz" name="kullanici_adsoyad"/>
							<input type="email" placeholder="Email "  name="kullanici_mail"/>
							<input type="password" placeholder="Password" name="kullanici_passwordone"/>
							<input type="password" placeholder="Password" name="kullanici_passwordtwo"/>
							<button  name="kullanicikaydet" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php include 'footer.php' ?>