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

    <a class="navbar-brand mr-1" href="indexB.php">Jolla Concept Store </a>

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
        <a class="nav-link" href="indexB.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>JOLLA</span>
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
      <li class="nav-item">
        <a class="nav-link" href="check_out.php">
          <i class="fas fa-fw fa-table"></i>
          <span>promotion</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="checkout_events1.php">
          <i class="fas fa-fw fa-table"></i>
          <span>événnement</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="checkout_events1.php">événnement</a>
          </li>
          <li class="breadcrumb-item active">Modifier</li>
        </ol>

        <!-- Icon Cards-->



                
            <?PHP
include "../core/eventsC.php";

if (isset($_GET['id'])){
    $eventsC1=new EventsC();
    $result=$eventsC1->recupererEvents($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $name=$row['name'];
        $address=$row['address'];
        $phone=$row['phone'];
        $informations=$row['informations'];
        $DateDebut=$row['DateDebut'];
        $DateFin=$row['DateFin'];
        $photo=$row['photo'];
        

?>



<form class="was-validated" method="POST">
<table>
<div class="container-fluid">
<hr>
<div class="row">
        <div class="col-md-20">
            <h3 class="text-center text-info">Update Events</h3>
            <hr>
<div class="form-group">

<input class="form-control" required pattern="[0-9]{1,12}" placeholder="Enter the Id" type="text" name="id" value="<?PHP echo $id ?>">
</div>

<div class="form-group">
<input class="form-control" required pattern="[0-9a-zA-Z,/.]{3,12}" placeholder="Enter Name Of the Event" type="text" name="name" value="<?PHP echo $name ?>">
</div>

<div class="form-group">
<input class="form-control" required pattern="[0-9a-zA-Z,/.@]{6,30}" placeholder="Enter your address" type="text" name="address" value="<?PHP echo $address ?>">
</div>

<div class="form-group">
<input class="form-control" required pattern="[0-9]{6,12}" placeholder="Enter your phone " type="tel" name="phone" value="<?PHP echo $phone ?>">
</div>

<div class="form-group">
<input type="text"  class="form-control" required pattern="[0-9a-zA-Z,/.]{3,12}" placeholder="Informations About the Events" name="informations" value="<?PHP echo $informations ?>">
</div>

<div class="form-group">
<input class="form-control" required placeholder="DateDebut" type="Date" name="DateDebut" value="<?PHP echo $DateDebut ?>">
</div>

<div class="form-group">
<input class="form-control" required placeholder="DateFin" type="Date" name="DateFin" value="<?PHP echo $DateFin ?>">
</div>

<div class="form-group">
<input type="file" name="photo" class="custom-file">
</div>

<div class="form-group">
<input  class="btn btn-success btn-block" type="submit" name="modifier" value="Update">
</div>

<div class="form-group">
<input  type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">
</div>

</table>

</div>
</div>
</form>
<?PHP
    }}
if (isset($_POST['modifier'])){
    $events=new Events($_POST['id'],$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['informations'],$_POST['DateDebut'],$_POST['DateFin'],$_POST['photo']);
    $eventsC1->modifierEvents($events,$_POST['id_ini']);
    echo $_POST['id_ini'];
    echo ("<script> window.location.replace(\"checkout_events1.php\")</script>");
}
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
