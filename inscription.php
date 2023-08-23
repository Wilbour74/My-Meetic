<?php 
    


$nom =$_POST['lastname'];
$prenom = $_POST['name'];
$genre = $_POST['selectedoption'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$mdp = $_POST['motdepasse'];
$date = $_POST['date'];
$hobby = $_POST['hobby'];



require 'bdd.php';


    if(isset($_POST['manger'])){
        if(isset($nom) && isset($prenom) && isset($date) && isset($genre) && isset($ville) && isset($email) && isset($mdp) && isset($hobby) ){  
            $query = $db->query("INSERT INTO utilisateur (nom, prenom, date_naissance, genre, ville, email, motdepasse, hobbies)
                                VALUES('$nom', '$prenom', '$date' , '$genre', '$ville', '$email', sha1('$mdp'), '$hobby') ");
                                header("location: transition.html");
                    
           
        }
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

    form{
        display:block;
        margin-left:500px;
        margin-right:500px;
        padding-top: 45px;
        height: 650px;
        border: 2px solid black;
        font-size: 30px;
        text-align: center;
        background-color:#FF69B4;
        margin-bottom:100px;
        
    
        
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

  
    </style>
</head>


<body>
<header>
    <h1 class="pole">Trouve ta moitié<h1>
    </header> 
    <div class="image">
<form method="POST" class="formulaire" action="">
<h1>Inscription</h1>
<p>Remplis le formulaire</p>    
<input type="text" name="lastname" placeholder="Entre ton nom"></input><br>
    <input type="text" name="name" placeholder="Entre ton prénom"></input><br>
    <input type="date" name="date"></input><br>
    <label>Choissisez un genre:</label>
    <select name="selectedoption">
        <option name="Homme">Homme</option>
        <option name="Femme">Femme</option>
        <option name="Autre">Autre</option>
</select><br>
    <input type="text" name="ville" placeholder="Entre ta ville"></input><br>
    <input type="text" name="email" placeholder="Entre ton e-mail"></input><br>
    <input type="password" name="motdepasse" placeholder="Entre ton mot de passe"></input><br>
    <label>Choissisez un hobby:</label>
    <select name="hobby">
    <option name="Sport">Sport</option>
    <option name="Jeux-vidéos">Jeux-vidéos</option>
    <option name="Lecture">Lecture</option>
    <option name="Musique">Musique</option>
    <option name="Voyage">Voyage</option>
    <option name="Cinéma">Cinéma</option>
</select><br>
<input type="submit" name="manger"></input>
    
</div>
</form>


    

</body>
</html>
