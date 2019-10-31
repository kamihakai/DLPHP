<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Compte </title>
  <meta name="Participants" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>

    <div class="jumbotron">
    <h1 class="display-4">Compte</h1>
        <?php

        if( $_SESSION['userMail']){
          echo "session creee : ".$_SESSION['userMail'];

          $dir    = './participants';
          $files1 = scandir($dir);
          echo "<p>Liste de participants:</p>";
          foreach ($files1 as $key => $value) {
            echo "<span>{$key} : {$value}</span><br>";
          }
         


        }else{
          //echo "Pas de session creee";
          echo "<script>alert('Pas de session creee');</script>";
          header("Refresh:0; url=login.php");
        }
              
        ?>

    </div>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>