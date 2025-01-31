<?php

               // connexion vers le BD
               
              try{
                 $connexion= new  PDO("mysql:host = 127.0.0.1:5500; dbname=bdetudiants" , "root" ,"");
                 echo" Connexion réussie";
              }catch(PDOException $e){
                echo"Echec de connexion à la base de donnée";
              }

?>