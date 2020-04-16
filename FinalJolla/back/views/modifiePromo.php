<?PHP
session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

          <a class="dropdown-item" href="#">
                    <?PHP
                    echo  $_SESSION["email"];
                    ?>
                </a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="destroy.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="newsletter.html">newsletter</a>
         <a class="dropdown-item" href="supprimeCompte.html">supprimer</a>
         <a class="dropdown-item" href="affichageadmin.php">affichage CompteA</a>
         <a class="dropdown-item" href="affichageclient.php">affichage CompteC</a>

          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="checkout_produit.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Produit</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkoutCategorie.php">
          <i class="fas fa-fw fa-table"></i>
          <span>categorie</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Commande</span></a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="adlivraison_afficher.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Livraison </span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="check_out.php">
          <i class="fas fa-fw fa-table"></i>
          <span>promotion</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="check_out.php">
          <i class="fas fa-fw fa-table"></i>
          <span>événnement</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="check_out.php">Promotion</a>
          </li>
          <li class="breadcrumb-item active">Update</li>
        </ol>

        <!-- Icon Cards-->
        


    <body>
<?PHP
 
include "../core/promoC.php";
  $promoC=new PromoC();
    $result=$promoC->recupererPromo($_GET['id']);
  foreach($result as $row){
    $id=$row['id'];
    $idProd=$row['idProd'];
    $date_debut=$row['date_debut'];
    $date_fin=$row['date_fin'];
    $prix_nouveau=$row['prix_nouveau'];
    $description=$row['description'];
if (isset($_GET['id'])){

?>
<?php
                                    $produit1C=new PromoC();
                                    $listeCat=$produit1C->afficherproduits();
                                    ?>
<form class="was-validated" method="POST">
<table>
<div class="container-fluid">
<hr>
<div class="row">
    <div class="col-md-3">
      <h3 class="text-center text-info">Update Promotion</h3>
            <hr>
<div class="form-group">

<input class="form-control" required pattern="[0-9]{1,12}" placeholder="Enter the Id" type="text" name="id" value="<?PHP echo $id ?>">
</div>

<div class="form-group">

<select  class="dropdown-header" name="idProd">
  <?PHP
    foreach($listeCat as $row){
        ?>
  <option value="<?PHP echo $row['Id']; ?>"><?PHP echo $row['Nom']; ?>
  </option>
  <?PHP } ?>
</select> </div>

<div class="form-group">
<input class="form-control" required placeholder="date_debut"  type="Date" name="date_debut" value="<?PHP echo $date_debut ?>">
</div>

<div class="form-group">
<input class="form-control" required placeholder="date_fin"  type="Date" name="date_fin" value="<?PHP echo $date_fin ?>">
</div>



<div class="form-group">
<input class="form-control" required pattern="[0-9.]{1,12}" placeholder="Enter your new Price" type="number" name="prix_nouveau" value="<?PHP echo $prix_nouveau ?>">
</div>

<div class="form-group">
<input type="text"  class="form-control" required pattern="[0-9a-zA-Z-\.- -]{3,300}" placeholder="Informations About the products" name="description" value="<?PHP echo $description ?>">
</div>


<!--<div class="form-group">
<input  type="file" name="image" value=">
</div>-->

<div class="form-group">
<input  class="btn btn-success btn-block" type="submit" name="modifier" value="Update">
</div>

<div class="form-group">
<input  type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">
</div>
</table>
</div>


</form>

 <?PHP
   }
 
  
 $produit1C=new promoC();
 $listeProduits=$produit1C->afficherproduits();
 $promocc=new promoC();
 $listePromo=$promocc->afficherpromos();
 
   

 


 if (isset($_POST['modifier'])){
   $priiix=$_POST['prix_nouveau'];
   $yID=$_POST['idProd'];
   
     
  
   $sql="SELECT Prix from produit  where id = $yID  ";
   $db = config::getConnexion();
   $idPrix=$db->query($sql);
   
   foreach($idPrix as $nn){
     $prix = $nn['Prix'];
   }
    $tauxx=$promocc->calcultaux($prix,$priiix);
   $Promo=new Promo($_POST['id'],$_POST['idProd'],$_POST['date_debut'],$_POST['date_fin'],$_POST['prix_nouveau'],$_POST['description'],$tauxx);
   

  
   if($priiix<$prix)
   {

if($_POST['date_fin']< $_POST['date_debut'])
{
  echo("<script> alert(\"il faut que la date fin soit superieur a la date debut\")</script>");
  echo("<script> document.Location.replace(\"check_out.php\")</script>");

}else{
   $promoC->modifiePromo($Promo,$_POST['id_ini']);
  // echo $_POST['id_ini'];
   echo ("<script> window.location.replace(\"check_out.php\")</script>");
 
 }

 
 }else{
    
  echo("<script> alert(\"il faut que le nouveau prix soit inferieur au prix ancien\")</script>");
  echo("<script> window.location.replace(\"modifiePromo.php?id=$id\")</script>");

}

}}
 
 ?>
</body>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
