<?php

require 'bdd.php';

 $nom =$_POST['lastname'];
        $prenom = $_POST['name'];
        $genre = $_POST['selectedoption'];
        $ville = $_POST['ville'];
        $email = $_POST['email'];
        $mdp = $_POST['motdepasse'];
        $date = $_POST['date'];
        $hobby = $_POST['hobby'];

        if(isset($nom) && isset($prenom) && isset($date) && isset($genre) && isset($ville) && isset($email) && isset($mdp) && isset($hobby) ){  
            $query = $db->query("INSERT INTO utilisateur (nom, prenom, date_naissance, genre, ville, email, motdepasse, hobbies)
                                VALUES('$nom', '$prenom', '$date' , '$genre', '$ville', '$email', sha1('$mdp'), '$hobby') ");
                    
           
        }


  
        

        // $commande_sql = "INSERT INTO utilisateur (nom, prenom, date_naissance, genre, ville, email, motdepasse, hobbies)
        //                          VALUES('$nom', '$prenom', '$date' , '$genre', '$ville', '$email','$mdp', '$hobby') ";
        // $requete_sql = $db->prepare($commande_sql);
        // $requete_sql->execute();
        // $result = $requete_sql->fetchAll();

        // if(isset($nom) && isset($prenom) && isset($date) && isset($genre) && isset($ville) && isset($email) && isset($mdp) && isset($hobby) ){  
        //     $query = $db->prepare("INSERT INTO utilisateur (nom, prenom, date_naissance, genre, ville, email, motdepasse, hobbies)
        //                         VALUES('$nom', '$prenom', '$date' , '$genre', '$ville', '$email','$mdp', '$hobby') ");
        //     $query->execute();
        // }
        
        
class Utilisateur{
        public $connexion;
        public $nom;
        public $prenom;
        public $genre;
        public $ville;
        public $email;
        public $mdp;
        public $date;
        public $hobby;

        public function __construct($nom,$prenom,$genre,$ville,$email,$mdp,$date,$hobby){
            $this->connexion= $connexion;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->genre =$genre ;
            $this->ville =$ville;
            $this->email=$email ;
            $this->mdp = $mdp;
            $this->date= $date ;
            $this->hobby= $hobby ;
        }

        public function getNom(){
            return $this->nom;
        }
        public function getpreNom(){
            return $this->prenom;
        }
        public function getgenre(){
            return $this->genre;
        }
        public function getville(){
            return $this->ville;
        }
        public function getemail(){
            return $this->email;
        }
        public function getmdp(){
            return $this->mdp;
        }
        public function getdate(){
            return $this->date;
        }
        public function gethobby(){
            return $this->hobby;
        }

      

        

        // public function setnom(){
        //     $this->nom=$_POST['lastname'];
        // }

        // public function setprenom(){
        //     $this->prenom=$_POST['name'];
        // }
        // public function setgenre(){
        //     $this->genre=$_POST['genre'];
        // }
        // public function setville(){
        //     $this->ville=$_POST['ville'];
        // }
        // public function setemail(){
        //     $this->email=$_POST['email'];
        // }
        // public function setmdp(){
        //     $this->mdp=$_POST['mdp'];
        // }
        // public function setdate(){
        //     $this->date=$_POST['date'];
        // }
        // public function sethobby(){
        //     $this->hobby=$_POST['hobby'];
        // }




      
    }
    
    $info = new Utilisateur($nom,$prenom,$genre,$ville,$email,$mdp,$date,$hobby);
   $nom1 = $info->getNom();
$prenom1 = $info->getpreNom();
 $genre1 = $info->getgenre();
 $ville1 = $info->getville();
 echo $email1 = $info->getemail();
 $mdp1 = $info->getmdp();
 $date1 = $info->getdate();
 $hobby1= $info->gethobby();

 $nouveaunom = $_POST['nouveaunom'];
 $nouveauprenom = $_POST['nouveauprenom'];
 $nouvelledate = $_POST['nouvelledate'];
 $nouvelleville = $_POST['nouvelleville'];
 $nouvelemail = $_POST['nouvelemail'];
 $nouveaumotdepasse = $_POST['nouveaumotdepasse'];
 $nouveauhobby = $_POST['nouveauhobby'];

    if(isset($nouveaunom)){
        $requete = "UPDATE utilisateur SET nom = '$nouveaunom' WHERE email = $email1'";
        $query = $db->query($requete);
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<form method="POST" class="formulaire" action="user.php">
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
    <input type="submit" value="Je valide avec validation"></input>
</div>
</form>
</html!-->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<form method="POST" class="formulaire" action="user.php">
<h1>Voici ton profil</h1>
<label><?php echo "Nom: $nom1"?></label> 
<input type="text" name="nouveaunom" placeholder="Entre ton nouveau nom"></input><br>
<label><?php echo "Prénom: $prenom1"?></label>
<input type="text" name="nouveauprenom" placeholder="Entre ton nouveau prénom"></input><br>
<label><?php echo "Tu es né le $date1"?></label>    
<input type="date" name="nouvelledate"></input><br>
<label><?php echo "Tu habites à $ville1"?></label>    
<input type="text" name="nouvelleville" placeholder="Entre ta ville"></input><br>
<label><?php echo "Ton adresse e-mail est : $email1"?></label>    
<input type="text" name="nouvelemail" placeholder="Entre ton nouvel e-mail"></input><br>
<label>Tu veux changer ton mot de passe?</label>    
<input type="password" name="nouveaumotdepasse" placeholder="Entre ton nouveau mot de passe"></input><br>
    
<label><?php echo "Hobby : $hobby1 veux changer d'hobby?"?></label>
    <select name="nouvelhobby">
    <option name="Sport">Sport</option>
    <option name="Jeux-vidéos">Jeux-vidéos</option>
    <option name="Lecture">Lecture</option>
    <option name="Musique">Musique</option>
    <option name="Voyage">Voyage</option>
    <option name="Cinéma">Cinéma</option>
</select><br>
    <input type="submit" value="Je valide avec validation"></input>
</div>
</form>
</html>   


