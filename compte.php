<?php
require 'verification.php';
require 'bdd.php';
$_SESSION['email'] = $email;
 $keepemail = $_COOKIE['vitinha'];


$result = $db->query('SELECT * FROM utilisateur WHERE email = "'.$keepemail.'" ');
$demain = $result->fetchAll();

$nom2 =$_POST['lastname1'];
$prenom2 = $_POST['name1'];
$genre2 = $_POST['selectedoption1'];
$ville2 = $_POST['ville1'];
$email2 = $_POST['email1'];
$mdp2 = $_POST['motdepasse1'];
$date2 = $_POST['date1'];
$hobby2 = $_POST['hobby1'];

if($nom2 != ""){
    $change = $db->query('UPDATE utilisateur SET nom = "'.$nom2.'" WHERE email = "'.$keepemail.'" ');
}p

if($prenom2 != ""){
    $change = $db->query('UPDATE utilisateur SET prenom = "'.$prenom2.'" WHERE email = "'.$keepemail.'" ');
}

if($genre2 == "Homme"){
    $change = $db->query('UPDATE utilisateur SET genre = "Homme" WHERE email = "'.$keepemail.'" ');
}

if($genre2 == "Femme"){
    $change = $db->query('UPDATE utilisateur SET genre = "Femme" WHERE email = "'.$keepemail.'" ');
}

if($genre2 == "Autre"){
    $change = $db->query('UPDATE utilisateur SET genre = "Autre" WHERE email = "'.$keepemail.'" ');
}

if($ville2 != ""){
    $change = $db->query('UPDATE utilisateur SET ville = "'.$ville2.'" WHERE email = "'.$keepemail.'" ');
}

if($email2 != ""){
    $change = $db->query('UPDATE utilisateur SET email = "'.$email2.'" WHERE email = "'.$keepemail.'" ');
}

if($hobby1 == "Sport"){
    $change = $db->query('UPDATE utilisateur SET hobby = "Sport" WHERE email = "'.$keepemail.'" ');
}

if($hobby1 == "Jeux-vidéos"){
    $change = $db->query('UPDATE utilisateur SET hobby = "Jeux-vidéos" WHERE email = "'.$keepemail.'" ');
}

if($hobby1 == "Lecture"){
    $change = $db->query('UPDATE utilisateur SET hobby = "Lecture" WHERE email = "'.$keepemail.'" ');
}

if($hobby1 == "Musique"){
    $change = $db->query('UPDATE utilisateur SET hobby = "Musique" WHERE email = "'.$keepemail.'" ');
}

if($hobby1 == "Voyage"){
    $change = $db->query('UPDATE utilisateur SET hobby = "Voyage" WHERE email = "'.$keepemail.'" ');
}

if($hobby1 == "Cinema"){
    $change = $db->query('UPDATE utilisateur SET hobby = "Cinema" WHERE email = "'.$keepemail.'" ');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    
    html{
        
    }

    body{
        background-color: #F08080;
        color: white;
        font-family: 'Lovers Quarrel';
        background-color:#9a99ff;
        padding-bottom:-150px;
    }

    .formulaire{
        display:block;
        margin-left:500px;
        margin-right:500px;
        padding-top: 45px;
        height: 650px;
        border: 2px solid black;
        font-size: 30px;
        text-align: left;
        background-color:#FF69B4;
        margin-bottom:100px;
        
    
        
    }

    label{
        color: black;

    }

    .image{
        background:  no-repeat url('R.jpg');
        background-size: contain;
        height:800px;
    } 
    .pole{
        color:white;
        font-size: 60px;
        margin-left: 600px;

    }
    .formulaire1{
        height:50px;
        text-align: center;
    }

  
    </style>
</head>


<body>
<header>
    <h1 class="pole">Trouve ta moitié<h1>
    </header> 
    <div class="image">
<form method="POST" class="formulaire" action="">
<h1>Ton profil</h1>
<p>Si tu veux changer des truc c'est ici</p>    

<?php

    foreach($demain as $donnee){
        $nom = $donnee['nom'];
        $prenom = $donnee['prenom'];
        $date = $donnee['date_naissance'];
        $genre = $donnee['genre'];
        $motdepasse = $donnee['motdepasse'];
        $hobby = $donnee['hobby'];
        $emaildef = $donnee['email'];
        $ville = $donnee['ville'];

    }?>
<label><?php echo $nom?></label>
<input type="text" name="lastname1" placeholder="Entre ton nouveau nom"></input><br>
<label><?php echo $prenom?></label>    
<input type="text" name="name1" placeholder="Entre ton prénom"></input><br>
    <input type="date" name="date1"></input><br>
    <label>Change ton genre</label>
    <select name="selectedoption1">
        <option name="Homme" value="Homme">Homme</option>
        <option name="Femme" value="Femme">Femme</option>
        <option name="Autre" value="Autre">Autre</option>
</select><br>
<label><?php echo $ville?></label>    
<input type="text" name="ville1" placeholder="Change ta ville"></input><br>
<label><?php echo $emaildef?></label>    
<input type="text" name="email1" placeholder="Change ton e-mail"></input><br>
    
<input type="password" name="motdepasse1" placeholder="Change ton mot de passe"></input><br>
    <label>Choissisez un hobby:</label>
    <select name="hobby1">
    <option name="Sport" value="Sport">Sport</option>
    <option name="Jeux-vidéos" value="Jeux-vidéos">Jeux-vidéos</option>
    <option name="Lecture" value="Lecture">Lecture</option>
    <option name="Musique" value ="Musique">Musique</option>
    <option name="Voyage" value="Voyage">Voyage</option>
    <option name="Cinéma" value="Cinéma">Cinéma</option>
</select><br>
    <input type="submit" value="Je valide avec validation"></input>
</div>

</form>
<form class = "formulaire1" action="logout.php" method="post">
    <input type="submit" value="Logout">
</form>
<form class = "formulaire1" action="supprimer.php" method="post">
    <input type="submit" value="delete">
</form>


    

</body>
</html>