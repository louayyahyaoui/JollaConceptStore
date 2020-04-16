<?PHP
session_start();
		?>



<?php 
include "../core/livraisonC.php";


$livraison2C=new LivraisonC();
    $idc=$livraison2C->recupererdernierID();
    $max=$idc->fetch();
    $idrecup=$max["max"];
 
$liv1C=new LivraisonC();
$listecommande=$liv1C->recuperercommande($idrecup);
  $montant=$liv1C->recuperermontant($idrecup)

?>
<!DOCTYPE html>
<html>
<head>
<title>JOLLA CONCEPT STORE | Check_Out </title>
<link rel="icon" href="images/jollalogo.ico">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">jollaconceptstore@gmail.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo3.png"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Decoration</option>     
						<option value="AX">Cosmetic</option>
						<option value="AX">Clothes</option>
						<option value="AX">Food </option>
					</select>
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
                <li><a  class ="twi" href="#"></a></li>
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
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index1.php">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Food <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/woo1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="Honey.html">Honey</a></li>
											<li><a href="Jam.html">Jam</a></li>
											<li><a href="Food.html">Others</a></li>
											
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					
						<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cosmetic <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/woo1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="Savon.html">Soap</a></li>
											<li><a href="Oil.html">Oil</a></li>
											<li><a href="Cream.html">Cream</a></li>
											<li><a href="Shampoo.html">Shampoo</a></li>
											<li><a href="Deodornt.html">Deodornt</a></li>
											<li><a href="Perfum.html">Perfum</a></li>
											<li><a href="OthersCoss.html">Others</a></li>
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>

					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clothes <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Women's wear</a></li>
											<li><a href="men.html">Men's wear</a></li>
											<li><a href="kids.html">Kid's wear</a></li>
											
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item" >
						<a a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Decoration  <span class="caret"> </a>
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
					<li class="dropdown menu__item">
						<a a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accessories  <span class="caret"></a>
								<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
												<li><a href="Jewelry.html">Jewelry </a></li>
											<li><a href="Watches.html">Watches</a></li>
											<li><a href="bags.html">Bags</a></li>
											<li><a href="othersAcc.html">Others</a></li>
											
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>

					<li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								 <?php 
             //include "../entities/panier.php";

            //include "../core/livraisonC.php";
           // session_start();
                  $produit=new LivraisonC;
                  $count=$produit->countpanier($_SESSION["idclient"]);
                  foreach($count as $row)
                    {
                      echo '<div>'.$row["cnt"].'</div>';
                    }
                  ?>
                </div>
							</h3>
						</a>
						
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Check_Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- contact -->
	<br><br>


	
<h3 class="tittle">Facturation</h3>
<div class="checkout">
	<div class="container">

     <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>

					<tr>

				
							






						<th>Details Livraison </th>
						<th>Votre Commande </th>
						
					    
						
					</tr>
				</thead>
					
	
	
	<td>   <div class="map wow fadeInDown animated" data-wow-delay=".5s">
				


<div align="left">

<form method="POST" action="ajouterLivraison.php">  
  
 <br><br>
 
 Voici la date debut de la commande : <div align="center"> <input type="Date" name="DateDebut"   value="<?php echo date("Y-m-d" );?>" id="dated"></div>
  
  <br><br>
   Veuillez entrez la date fin de la commande : <div align="center"><input type="Date" name="DateFin"   id="datef">

  <br><br></div>
  <p>
 	
 	cher(e) client(e) afin d'effectuer votre commande <br><br> veuillez saisir une durée de commande plus ce que deux jours 
     <br><br>
      Nb: la durée de livraison est la date fin -la date debut .
 </p>
<br><br>

<img src="images/check (1).png" width=50" height="50"  align="right"> <p> Qualité Controlée  </p><br><br>
<img src="images/check (2).png" width=50" height="50" align="right"> <p> Satisfait ou Remborsé</p><br><br>
	
<img src="images/check (3).png" width=50" height="50" align="right" > <p>Livraison Simple et Rapide </p><br><br>
	

  

      
<input type="submit" name="submit" class="item_add single-item hvr-outline-out button2" value="Terminer">
  
 
</div>
    </div> 
</form>

<div align="right">
	



</div>




</td>

<!--------------------commande----------------------------------------------------------------------------------------->


	<td> 


<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>

					<tr>
						<th>Produit </th>
						<th>Quantité </th>
						<th>Prix </th>
						

						
						
					</tr>
				</thead>
					<?PHP
foreach($listecommande as $row){
	?>
	<tr>
	
	<td>
	
	<?PHP echo $row['nom']; ?>
	</td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['prix']*$row['quantite'];?></td>
	

	
	</tr>
		<?PHP
}
?>




			</table>
			


		</div>
<br>

  <div class="map wow fadeInDown animated" data-wow-delay=".5s " align="left">
				

	<table class="timetable_sub">
				<thead>

					<tr>
						<th>Total</th>
						<?PHP
foreach($montant as $mm){
  ?>
  
						<th> <?PHP echo $mm['montantCommande'];?></th>

						
						
					</tr>
				</thead>
					
 
	

	
	</tr>
		<?PHP
}
?>




			</table>



 </div> 
 <br><br>
<h3>Methode de Payement </h3>


<form  >  
 <div align="left ">
<input type="checkbox"  value="Payement a la livraison"> Payement a la livraison <br>
<p>
	

cher(e) client(e) afin de valider votre commande veuillez appeler notre service commercial:<br>
 tel: 71 661 996 / 28 11 12 15 durant nos horaires de travail.<br>
Sans votre validation téléphonique la commande ne sera pas traité

</p>
  <br><br>
<input type="checkbox"  value="Carte bancaire"> Carte bancaire   <img src="images/visa.png" width=50" height="50" align="right"> <img src="images/mastercard.png" width=50" height="50" align="right"> <br><br><br><br>
<input type="checkbox"  value="Payement par SobfFlous">Payement par SobfFlous"  <img src="images/payement01.png" width=100" height="50" align="right"><br><br><br><br>
<input type="checkbox"  value=" Bitcoin">  Bitcoin <img src="images/crypto2.png" width=100" height="30" align="right">
</div>
</form>









	</td>
	
	<!------->




























	<!------------>


	
	
	</tr>
	

			</table>
		

		</div>

   </div>




</div>

<br><br><br><br><br>


<br><br>






















<!-- //contact -->

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
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="images/logo3.png" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index1.php">Home</a></li>
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









