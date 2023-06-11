<?php
 
         require 'bdd.php';
        
         session_start();
            if(isset($_POST['submit'])){
            if(!empty($_POST['adresse']) && !empty($_POST['motdepasse'])){
                $email = htmlspecialchars($_POST['adresse']);
                $motdepasse = sha1($_POST['motdepasse']);
                $requete = $db->prepare('SELECT * FROM utilisateur WHERE email = ? AND motdepasse = ?');
                $requete->execute(array($email, $motdepasse));
                setcookie("vitinha", $email, time() + (86400*30));
                if($requete->rowCount() > 0){
                    $_SESSION['email'] = $email;
                    $_SESSION['motdepasse'] = $motdepasse;
                    header ('Location: compte.php');
                    
    
                }
                else{
                    echo "Votre mot de passe ou email est incorrect";
                }
                
            }    
                else{
                    echo "Merde alors";
            }

        }
       
            // if($count == 0 ){
            //     if($motdepasse == $data['motdepasse'])
            //     echo "test";


            // }


            // }
            
            
            // $sql = "SELECT * FROM utilisateur where email = $email";
            // $query = $db->query($sql);
         
            
         
         
         
         





