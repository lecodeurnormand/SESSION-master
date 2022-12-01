<?php
if(!empty($_SESSION['username'])){
      echo "<span class='bienvenue'> Bienvenue dans votre session ".$_SESSION['username']." !</span>";
    }
?>
