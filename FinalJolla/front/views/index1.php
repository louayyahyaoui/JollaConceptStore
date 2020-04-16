<?PHP
session_start();
		?>
<!DOCTYPE html>
<html>
<head>
<title>Jolla Concept Store</title>
<!-- for-mobile-apps -->
<link rel="icon" href="images/jollalogo.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/cnx.js">
	
</script>
<!-- //pignose css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>

	<?PHP
			//include "../config.php";
 	include "../core/eventsC.php";
            $produit1C=new panierC();
$listeCat=$produit1C->RecupCategories();

//var_dump($listeEmployes->fetchAll());
?>


<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
		<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:jollaconceptstore@gmail.com">jollaconceptstore@gmail.com</a></li>
	
<!-- <a style="color: white ;  " class="item_add hvr-outline-out button2" href="#"> LogOut </a> -->
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="#"><img src="images/logo3.png"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
		<form method="POST" action="index1.php">
				<div class="search">
				<input type="search" id="arearech" name="search" placeholder="Taper pour rechercher ... " required>
								</div>
				


				<div class="section_room">

                <select name="Idcat">
								<option value="null">All categories</option>
					<?PHP
          foreach($listeCat as $row){
	        ?>
          <option value="<?PHP echo $row['Nom']; ?>"><?PHP echo $row['Nom']; ?></option>   
					<?php
}
?>  
					
					</select>
					</td>
				


					
				</div>

				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">

			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>	
					<?PHP
                    echo  $_SESSION["email"];

		            ?>      </span></a>
					
				</li>


				
				<li><a class="fb" href="https://www.facebook.com/JollaConceptStore/"></a></li>
								<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="https://www.instagram.com/jollaconceptstore/?hl=fr"></a></li>
				<li><a class="you" href="https://www.youtube.com/channel/UCCHKV1YBK51aBn_K0x4GxBg"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
					<?PHP
				$liste=$produit1C->afficherCategories();

          foreach($liste as $row){
						$nom=$row['Nom'];
					
	        ?>

					<li class="dropdown menu__item">

						
						<a a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><?php echo  $nom ?>  <span class="caret"> </a>
						
								<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<li><a href="Chairs.html">Chairs </a></li>
											<li><a href="Cushions.html">Cushions</a></li>
											<li><a href="Tables.html">Tables</a></li>
											<li><a href="Ceramic.html">Ceramic</a></li>
											<li><a href="Cartboard.html">Cartboard</a></li>
											<li><a href="Candles.html">Candles</a></li>
											<li><a href="Painting.html">Painting</a></li>
											<li><a href="Luminaire.html">Luminaire</a></li>
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
					<?php }
					?>
					<li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
	
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout1.php">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>

								<?php 
					
						 include "../entities/panier.php";
						//include "../core/panierC.php";
				        
				          $produit=new panierC;
				          $count=$produit->countpanier($_SESSION["idclient"]);
				          foreach($count as $row)
				            {
				              echo '<div>'.$row["cnt"].'</div>';
				            }
				          
				         ?>
							</h3>
						</a>
						
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<?php 

$event1C=new EventsC();
$listeEvent=$event1C->afficherEvents();

	 ?>
	
<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					 <?php

								foreach($listeEvent as $rw){

				  ?>
				   <li><img class="img-responsive" src="images/logo3.png" alt="Dummy Image" /></li>
					<li><a href="event.php?id=<?= $rw['id'];?>"><img width="1000" height="424" class="img-responsive" src="images/<?php echo $rw['photo'] ?>" alt="<?php echo $rw['photo'] ?>"  /></a></li>
					<?php } ?>
</ul>  			
			<div class="script-wrap">

                   <div class="slide-controller">
						<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
					</div>
			</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->





<?PHP

$produit1C=new panierC();
$listeProduits=$produit1C->afficherproduits();

$promo1C=new panierC();
$listePromo=$promo1C->afficherpromos();

foreach($listePromo as $nn){
	/*$id=$nn['id'];
	$idProd=$nn['idProd'];
	$date_debut=$nn['date_debut'];
	$date_fin=$nn['date_fin'];
	$prix_nouveau=$nn['prix_nouveau'];
	$description=$nn['description'];*/





}



if(empty($_POST['search'])==false and isset($_POST["Idcat"])){

	$x=$_POST['search'];
	$y=$_POST['Idcat'];
		$listeProduits=$produit1C->rechercherProduit($x,$y);
		//$listeProduits=$produit1C->afficherproduits();
		if($_POST['Idcat']=="null")
		{
	
			$listeProduits=$produit1C->rechercherProduit1($x);
		}
		}
		 
		 else
		 {
	 $listeProduits=$produit1C->afficherproduits();

		 }
//var_dump($listeEmployes->fetchAll());
?>
<hr>

<h1 class="container">Our Products</h1>
<hr>

<div class=" container ">
                
								<hr>
								<?php
								foreach($listeProduits as $row){
									?>


<?php

$yID= $row['Id'];

			 
$sql="SELECT * from promo where idProd = $yID ";
$db = config::getConnexion();
$idPromo=$db->query($sql);
$prix = -1;
foreach($idPromo as $nn){
$prix = $nn['prix_nouveau'];
$date_debut=$nn['date_debut'];
$date_fin=$nn['date_fin'];
$taux=$nn['taux'];
}
?>
			  	 

					 
<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem" > 
								<div class="men-thumb-item">
								<img width="500" height="300"src="images/<?php echo $row['Image'] ?>" alt="<?php echo $row['Image'] ?>" class="pro-image-front">
								<img width="500" height="300" src="images/<?php echo $row['Image'] ?>"  alt="<?php echo $row['Image'] ?>" class="pro-image-back">
								<hr>

										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?details=<?= $row['Id'];?>" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<?php
									 								 
																		if($prix!=-1){
																			/*foreach($idPromo as $nn){
																				$prixPromo = $nn['prix_nouveau']; 
																			}*/
																		?>
									<span class="product-new-top">-<?php echo  $nn['taux'] ?>%</span>
<?php
																		}
																		?>
								</div>
								<div class="item-info-product ">
									
									<h4><a href="single.php"><?php echo $row['Nom'] ?></a></h4>
									<div class="info-product-price">


										<?php
									 								 
									if($prix!=-1){
										/*foreach($idPromo as $nn){
											$prixPromo = $nn['prix_nouveau']; 
										}*/
                  ?>
									  <span class="item_price">$<?php echo $prix ?></span>
										<span class="item_price">	<del>$<?php echo $row['Prix'] ?></del></span>


										


										
										<?php
									}
									else {
									?>

                    <span class="item_price">$<?php echo $row['Prix'] ?></span>
										<br>
										
										
<?php
									}
									?>

									</div>
									<form method="POST" action="ajouterproduitaupanier.php"> 
										<input type="hidden" name="idproduit" value="<?php echo $row['Id'] ?>">
									<input type="submit" name="add" class="item_add single-item hvr-outline-out button2" value="add to cart">
									</form>									
								</div>
							</div>
						</div>
						
					
						

						
					
					
<!-- //contact -->
<?php
}
?>
<hr>
	</div>
						</div>
						</div>
						</div>

						
					

<hr>
<br><br><br><br><br><br><br><br><br>



<!-- //product-nav -->

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><img src="images/logo3.png" alt=" " /></a></h2>
			<p>At Jølla, everything is eco-friendly! 100% natural, our products are handmade, with a lot of love. First store in North Africa fully furnished in cardboard. Original, authentic, and seductive, come discover, visit, touch, and feel.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form method="POST" action="ajoutLetter.php" >
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email' ;}" required="" name="mailletter">
					<input type="submit" value="Submit">

				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="Food.html">Food</a></li>
						<li><a href="womens.html">Clothes</a></li>
						<li><a href="decoration.html">Decoration</a></li>
						<li><a href="Accessories.html">Accessories</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 268 Avenue Habib Bourguiba, <span>le Kram,Tunis,Tunisia</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:jollaconceptstore@gmail.com">jollaconceptstore@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +216 71 277 273</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2019 Jolla Concept Store. All rights reserved | Design by Leap Up</p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom"  >
										
										<h3>
										<?PHP
                    echo  $_SESSION["email"]." ".$_SESSION["lastname"]; 
		            ?> 	
										</h3>
										<form name="jassem" method="POST" >
											<h4>	
		              </h4>
		            			     <a href="destroy.php" class="item_add single-item hvr-outline-out button2" >  logout</a><br><br>
									<a href="commande.php" class="item_add single-item hvr-outline-out button2">Commande</a><br><br>
									<a href="check_afficherlivraison.php" class="item_add single-item hvr-outline-out button2">Livraison</a><br><br>
									
											

											
											
										</form>
									</div>
									
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login --> 
</body>
</html>
