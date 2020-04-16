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
     
        
        <a class="dropdown-item" href="newsletter.html">newsletter</a>
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

      <div class="container-fluid margin-right">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">JOLLA</a>
          </li>
          <li class="breadcrumb-item active">Pays</li>
        </ol>






        <div class="page-head">
	<div class="container  ">
		

		<div class="row">
		<div class="col-md-4">
			<h3 class="text-center text-info">Add Town</h3>
            <hr>
<form class="was-validated" action="ajouterpays.php" method="POST" enctype="multipart/form-data" >
<div class="form-group">
<input type="text" name="Id" class="form-control" required pattern="[0-9]{1,12}" placeholder="Enter the Id" >
</div>

<div class="form-group">
<input type="text" name="Nom" class="form-control" required pattern="[0-9a-zA-Z- \.,]{3,12}" placeholder="Entre the name of the town ">
</div>

                



                

            
                        

<div class="form-group">
<input type="file" name="Image" class="custom-file">
</div>
                
				<div class="form-group">
 
<input type="submit" name="add" class="btn btn-success btn-block" value="Add">

</div>
</form>
</div>



	</div>
</div>
<!-- //banner -->
<!-- contact -->
<br><br><br><br>

<?PHP
include "../core/paysC.php";
$pays1C=new PaysC();
$listePays=$pays1C->afficherpays();


//var_dump($listeEmployes->fetchAll());
?>



<div class="col-md-12">
         
<table align="right" class="table table-hover">
			<thead>
			  <tr>
				<th  style="width: 10%">ID</th>
				<th>Name</th>
				
				 <th>Image</th>
         <th>supprimer</th>
         <th>update</th>
				 </tr>
                
                </thead>
                    <?PHP
                   foreach($listePays as $row){
                    $id=$row['id'];
	                ?>
	
               <tbody>
               <tr>
                  <td><?PHP echo $row['Id_Tele']; ?></td>
                    <td><?PHP echo $row['Nom']; ?></td> 
                    
                  
									<td><img width="80" src="images/<?php echo $row['Image'] ?>" alt="<?php echo $row['Image'] ?>"></td>
                  <td  style="width: 10%" class="width="70% ><form method="POST" action="supprimerpays.php">
                  <input type="submit" name="supprimer" value="supprimer"  class="btn btn-danger btn-block" >
                  <input type="hidden" value="<?PHP echo $id; ?>" name="id">
                  </form>
                  </td>
                  <td style="width: 10%"><a class="btn btn-success btn-block" href="modifierPays.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>

	
                 


				</tr>
			</thead>

     </div>           
                        
                         
                  
                  

	               
                  <?php
}
?>
	                
                 
                  

                  

 
              </table>
<br><br><br><br><br><br><br><br><br>

       

























        
               
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
