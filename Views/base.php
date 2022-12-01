<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SESSION-master/public/css/style.css" type="text/css" media="all">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/e2a9598ff7.js" crossorigin="anonymous"></script> 
    <title>Guillaume</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark text-white">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php"><i class="fa-solid fa-alien-8bit"></i><i class="fa-regular fa-alien-8bit"></i>Site Session</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarNavDropdown" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?controller=home&action=index"><i class="fa-solid fa-house"></i> Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" 
          <?php 
          if(isset($_SESSION['id'])){
            echo "
          href='index.php?controller=membre&action=espacemembre&id=".$_SESSION['id']."'>";
          }
          else{echo" href='index.php?controller=membre&action=espacemembre&id='>";}
          ?>    
          <i class="fa-solid fa-id-badge"></i> Espace membre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?controller=membre&action=deconnexion">
            <?php 
          if(empty($_SESSION['username'])){echo "";}else{ echo "<i class='fa-solid fa-right-to-bracket'></i> Déconnexion";};?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php?controller=membre&action=chat">
            <?php 
          if(empty($_SESSION['username'])){echo "";}else{ echo "<i class='fa-solid fa-message'></i> Chat";};?>
          </a>
        </li>
      </ul>
    </div>
    <?php
    if(!empty($_SESSION['avatar'])){
      echo"<img src="."/SESSION-master/membres/avatars/".$_SESSION['avatar']." height='50' class='avatarindex'/>";
    }
    if(!empty($_SESSION['username'])){
      echo "<p>".$_SESSION['username']."</p>";
    }
  ?>
  </div>
</nav>
    <?= $content ?>
    <footer>
</footer>
<script src="/SESSION-master/public/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
