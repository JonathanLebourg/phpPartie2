<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp4 - Partie2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp4 - Partie2</h1>
            <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
                <br />Créer une variable <b>magnitude</b>. Selon la valeur de <b>magnitude</b>, afficher la phrase correspondante.
                <table border="1">
                 <tr>
                     <th><b>Magnitude</b></th>
                     <th><b>Phrase</b></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Micro-séisme impossible à ressentir.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Séisme capable de tout détruire sur une très vaste zone.</td>
                </tr>
             </table>
             Gérer tous les cas.
             Utiliser autre chose que des <i>if else</i>?</p>
        </div>
        <div class="container"> 
        <?php
           $magnitude = 4;
           switch ($magnitude){
//               echo pour chaque cas par rapport au tableau
               case 1 :
                   echo "Micro-séisme impossible à ressentir.";
               break;
               case 2 :
                   echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
               break;
               case 3 :
                   echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
               break;
               case 4 :
                   echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
               break;
               case 5 :
                   echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
               break;
               case 6 :
                   echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
               break;
               case 7 :
                   echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
               break;
               case 8 :
                   echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
               break;
               case 9 :
                   echo "Séisme capable de tout détruire sur une très vaste zone.";
               break;
//           ne pas oublié le default dans un switch 
               default :
                   echo "la valeur ne rentre pas dans l'échelle de Richter";
           }
           
          ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>