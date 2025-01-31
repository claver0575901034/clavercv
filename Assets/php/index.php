<?php

include("connexion.php");

    echo"<!DOCTYPE html>";
    echo"<html lang='en'>";
    echo"<head>";
    echo" <meta charset='UTF-8'>";
    echo   '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo'<link rel="stylesheet" href="../css/php.css">';
    echo "<title>Liste des Etudiants</title>";
    
    echo"</head>";
    echo"<body>";
    echo '<table border="1" id="EtudiantTable">';
    echo"<div>Liste des étudiants en Master 1 Informatique à L'UAO</div>";
    echo"  <thead>";
    echo " <tr>
                <th>IdEtudiant</th>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E_mail</th>
                <th>Tel</th>
                <th>Date de naissance</th>
            </tr>";
    echo  "  </thead>";

    echo " <tbody>";            
            

           
             
              // Requete pour recupération de données


              $req="SELECT * FROM etudiants";
              // Exécution de la requete
              $resultat=$connexion ->query($req);
              // boucle


              

               while($row=$resultat->fetch(PDO::FETCH_ASSOC)){
                        
                 echo "<tr>" ;
                 echo "  <td>".$row['IdEtudiant']. " </td>" ;
                 echo "  <td>".$row['Matricule']. " </td>" ;
                 echo "  <td>".$row['Nom']. " </td>" ;
                 echo "  <td>".$row['Prenom']. " </td>" ;
                 echo "  <td>".$row['Email']. " </td>"; 
                 echo "  <td>".$row['Tel']. " </td>" ;
                 echo "  <td>".$row['Date de Naissance']." </td>";
                 echo "</tr>";
            

               
               }
              
           
            echo "  </tbody>";
            echo"</table>";

            echo  ' <button onclick="toggleTable()">Afficher les personnes</button>';
            echo '<script src="../js/php.js"></script>';
            echo"</body>";
            echo"</html>";
            
            
 ?>