<?php
session_start() ;
include "../core/livreurC.php";
$livreur1C=new LivreurC();
$listenotif=$livreur1C->affichernotif();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Liv</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Jolla Concept Store </a>

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
          <span class="badge badge-danger">
            <?php
            $count=$livreur1C->countnotification();
                  foreach($count as $row)
                    {
                      echo '<div>'.$row["cnt"].'</div>';
                    }
          ?>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <?PHP
 foreach($listenotif as $not){
  ?>
    
  
  
     <?PHP  echo $not['Description'];  ?> 
 <center>
<form method="POST" action="supprimernotif.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $not['Id_Not']; ?>" name="id">

  </form>
  </center> 
<br>

 
  
  
  
 
   
  <?PHP
}
?>  
          
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
          <a class="dropdown-item" href="#">  <?PHP
                    echo  $_SESSION["email"];
                    ?></a>
          <a class="dropdown-item" href="../../front/views/index.php">Visit Front</a>
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
     
        <a class="dropdown-item" href="newsletter.html">newsletter</a>
        <a class="dropdown-item" href="affichagenews.php"> afficher newsletter</a>
         <a class="dropdown-item" href="affichageadmin.php">affichage CompteA</a>
         <a class="dropdown-item" href="affichageclient.php">affichage CompteC</a>

          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Product</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
       
     
        
        <a class="dropdown-item" href="checkout_produit.php">Product Management</a>
         <a class="dropdown-item" href="pdfjolla.php">Pdf recapitulation</a>
        

        
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkoutCategorie.php">
          <i class="fas fa-fw fa-table"></i>
          <span>categorie</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Commande</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="StatistiqueC1.php">
          <i class="fas fa-fw fa-table"></i>
          <span>StatistiqueC </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="statp.php">
          <i class="fas fa-fw fa-table"></i>
          <span>StatistiqueP </span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="adlivraison_afficher.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Livraison </span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Pays.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Pays </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="check_out.php">
          <i class="fas fa-fw fa-table"></i>
          <span>promotion</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout_events1.php">
          <i class="fas fa-fw fa-table"></i>
          <span>event</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="afficherreclamation.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reclamation</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">JOLLA</a>
          </li>
          <li class="breadcrumb-item active">Récupérée par</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Récupérée par </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Cin</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Nom Entreprise</th>
                    <th>Telephone</th>
                    <th>Gouvernerat</th>
                    <th>E-mail</th>
                    <th>Pays</th>
                    <th>Code Postal</th>
                  </tr>
                </thead>
                
            
                <tfoot>
                  <tr>
                   <th>Cin</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Nom Entreprise</th>
                    <th>Telephone</th>
                    <th>Gouvernerat</th>
                    <th>E-mail</th>
                    <th>Pays</th>
                    <th>Code Postal</th>
                  </tr>
                </tfoot>
                  <?PHP
              
              if (isset($_GET['ID'])){
             $livreur1C=new LivreurC();
            $listeLivreurs=$livreur1C->afficherLivreurs($_GET['ID']);

//var_dump($listeEmployes->fetchAll());
                  ?>


                <?PHP
                foreach($listeLivreurs as $row){
                      ?>
  
                  
               <tbody>
                  <tr>
                    <td><?PHP echo $row['Cin']; ?></td>
                    <td><?PHP echo $row['Nom']; ?></td> 
                    <td><?PHP echo $row['Prenom']; ?></td>
                    <td><?PHP echo $row['Adresse']; ?></td>
                  <td><?PHP echo $row['Ville']; ?></td>
                  <td><?PHP echo $row['NomEntreprise']; ?></td>
                  <td><?PHP echo $row['Telephone']; ?></td>
                  <td><?PHP echo $row['Gouvernerat']; ?></td>
                  <td><?PHP echo $row['Email']; ?></td>
                  <td><?PHP echo $row['Pays']; ?></td>
                  <td><?PHP echo $row['CodePostal']; ?></td>
                  </tr>
                  <br><br>
                  </tbody>
             
              <?php
           }}
              ?>
              
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Leap Up</span>
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
