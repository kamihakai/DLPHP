<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Participer </title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="jumbotron">
    <h1 class="display-4">Informations</h1>
        <?php

        $mail=htmlspecialchars($_POST['mail']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        
        $_SESSION['userMail'] = $mail;
        setcookie('counterIndex',0);

        echo "<p>ton prenom c'est: ".$prenom."</p>";
        echo "<p>ton nom c'est: ".$nom."</p>";
        echo "<p>ton mail c'est: ".$mail."</p>";

        $textAEcrire="Prenom: ".$prenom."\n";
        $textAEcrire.="Nom: ".$nom."\n";
        $textAEcrire.="Mail: ".$mail."\n";

        if(file_exists ( 'participants/'.$mail.'.txt' )){
            echo "<script>alert('le fichier existe deja');</script>";
        }else{
            echo "<script>alert('ton compte a bien été créé');</script>";
            file_put_contents('participants/'.$mail.'.txt', $textAEcrire);            
            echo "<a class='btn btn-primary btn-lg' href='/login.php' role='button'>Jouer</a>";
        }
        ?>

    </div>




 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>