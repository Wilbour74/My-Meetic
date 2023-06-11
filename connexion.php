<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h1 class="pole">Trouve ta moitié<h1>
    <style type="text/css">
    .pole{
        color:white;
        font-size: 60px;
        margin-left: 600px;

    }

    body{
        background-color: #F08080;
        color: white;
        font-family: 'Lovers Quarrel';
        background-color:#9a99ff;
        padding-bottom:-150px;
    }

    .image{
        background:  no-repeat url('R.jpg');
        background-size: contain;
        height:800px;
    }
    form{
        background-color :#FF69B4;
        margin-left:500px;
        margin-right:500px;
        text-align: center;
        height: 700px;
        border: 2px solid black;
    }
    </style>
    <div class="image">
        <form method="POST" action="verification.php">
        <h1>Connexion</h1>
        <p>"Aimer quelqu'un ce n'est pas imaginer sa vie avec cette personne. C'est être incapable d'imaginer sa vie sans elle. Et, si tu n'étais pas là, mon futur n'existerait pas !"</p>
        <fieldset>
        <input type="text" name="adresse" placeholder="Entre ton adresse e-mail" ><br>
        <input type="password" name="motdepasse" placeholder="Entre ton mot de passe"><br>
        <input type="submit" name="submit" value="Je me connecte">
        
        
</fieldset>
        </form>
    </div>
    </header>     
</body>
</html>