<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp3 - Partie2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp3 - Partie2</h1>
            <p>Créer deux variables <b>age</b> et <b>gender</b>. La variable <b>gender</b> peut prendre comme valeur :
            <ul>
                <li>Homme</li>
                <li>Femme</li>
            </ul>    
            En fonction de l'âge et du genre afficher la phrase correspondante :
            <ul>
                <li><b>Vous êtes un homme et vous êtes majeur</b></li>
                <li><b>Vous êtes un homme et vous êtes mineur</b></li>
                <li><b>Vous êtes une femme et vous êtes majeur</b></li>
                <li><b>Vous êtes une femme et vous êtes mineur</b></li>
            </ul>
            Gérer tous les cas.</p>
        </div>
        <div class="container"> 
        <?php
           $age = 18;
           $gender = "Femme";
           if ($gender == "Homme"){
             if($age >= 18){
             echo 'Vous êtes un homme et vous êtes majeur';}
             else { echo 'Vous êtes un homme et vous êtes mineur';}    
           } else {if ($gender == "Femme"){
             if($age >= 18){
             echo 'Vous êtes un femme et vous êtes majeure';}
             else { echo 'Vous êtes un femme et vous êtes mineure';}    
           }
           }
          ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>