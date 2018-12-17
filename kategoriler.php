<?php 

include 'header.php'; 

if (isset($_GET['sef'])) {


	$kategorisor=$db->prepare("SELECT * FROM kategori where kategori_seourl=:seourl");
	$kategorisor->execute(array(
		'seourl' => $_GET['sef']
		));

	$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

	 $kategori_id=$kategoricek['kategori_id'];


	$urunsor=$db->prepare("SELECT * FROM urun where kategori_id=:kategori_id order by urun_id DESC");
	$urunsor->execute(array(
		'kategori_id' => $kategori_id
		));

	$say=$urunsor->rowCount();

} else {

	$urunsor=$db->prepare("SELECT * FROM urun order by urun_id DESC");
	$urunsor->execute();

}




?>

		
	
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php  include 'sidebar.php' ?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>


					<?php	while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
					  ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/shop/product12.jpg" alt="" />
										<h2><?php echo $uruncek['urun_fiyat']  ?> Tl</h2>
										<p><?php echo $uruncek['urun_ad']  ?></p>
										<a href="urun-<?= ($uruncek['urun_ad']).'-'.$uruncek["urun_id"]  ?>" class="btn btn-default add-to-cart">Kart Ödeme</a>
									</div>

									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Sepete Ekle</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Sepetten Çıkar</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					<?php } ?>

						
					<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
					</ul>				
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php' ?>