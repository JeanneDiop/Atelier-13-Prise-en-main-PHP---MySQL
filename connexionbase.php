<?php
//est une structure de gestion d'erreurs en PHP
try {
    //Cette ligne de code crée une nouvelle instance de la classe PDO, qui est utilisée pour interagir avec une base de données MySQL
    // PDO c'est un objet qui nous permet de se connecter à la base de donnée
    $mysqlConnection = new PDO(
        //Cela spécifie les détails de la connexion à la base de données
        'mysql:host=localhost;dbname=e-taxibokko;charset=utf8',
        'root',
        ''
    
    );
    //Cette ligne configure le mode de gestion des erreurs pour la connexion PDO. 
    //Plus précisément, cela indique à PDO de lancer des exceptions lorsqu'il y a des erreurs
    $mysqlConnection->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connexion marche";
} catch (\Throwable $th) { //Cela permet de gérer l'erreur
   echo "Erreur : ".$th->getMessage();//afficher les messages d'erreur 
   
}
?>