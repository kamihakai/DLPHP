<?php include "config.php"; ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> <?php echo TITRE_SITE;?> </title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 

</head>

<body>

    



    <div class="jumbotron">
    <h1 class="display-4"><?php echo "HOLA MUNDO 2"; ?></h1>
    <?php
      if($_COOKIE["counterIndex"]!=null){
        echo "<p>cookie: ".$_COOKIE["counterIndex"]."</p>";
        $ck=$_COOKIE["counterIndex"]+1;        
        setcookie('counterIndex',$ck);
      }else{
        $ck=0;
      }
      echo "<p class='lead'>Nombre de fois aue tu as visité cette page: ".$ck."</p>";
    ?>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="/jeu.php" role="button">Jouer</a>
    </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>