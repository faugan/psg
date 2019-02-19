<nav class="navbar navbar-inverse" STYLE="background:green">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
	  <img src='logo.png' width='50px' class="img img-circle" height='50px' style='margin-top:-15px'/></a>
    </div>
    <ul class="nav navbar-nav">
     <!-- <li class="active"><a href="index.php">Home</a></li>-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Base de données
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="sauvegarde.php">Sauvegarde de la base</a></li>
          <li><a href="#">Restaurer la base</a></li>
          
        </ul>
      </li>
      <li><a href="produit.php" style="color:white">Produits</a></li>
      <li><a href="recette.php" style="color:white;">Recettes</a></li>
    </ul>
  </div>
</nav>

<style>
	ul li a{
		color:white;
	}
</style>