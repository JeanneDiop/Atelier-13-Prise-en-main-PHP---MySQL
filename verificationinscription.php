<?php
    //^ : Cela signifie "début de la chaîne
    //permet de specifier une liste de prefixe d'un numero telephne
    //sufixe qui prend des chiffres comprisent entre 0-9
   echo"tyu";
    if(isset($_POST["S_inscrire"])){
        $Nom=$_POST['Nom'];
        $Prenom=$_POST['Prenom'];
        $telephone=$_POST['telephone'];
        $Email=$_POST['email'];
        $Mot_de_passe=$_POST['mot_de_passe'];
        $Dateinsc=date("Y-m-d");
       
    //     //empty si les champs soumisent dans le formulaire sont vides ou nulls
    //     //permet de voir si  les variables contiennent des données avant le traitement
       if(empty($Nom)|| empty($Prenom)||empty($telephone)||empty($Email)||empty($Mot_de_passe)||empty($date)){
           echo"remplissez tous les champs";
        }
        }
        
      if(strlen($Mot_de_passe)<=8){
          echo"mot de passe incorrect ne doit pas depasser 8 caracteres";
        } 
        
        // ca permet de filtrer une chaine de caractere
         if (!FILTER_VAR($Email,FILTER_VALIDATE_EMAIL)) {
            echo "Votre email doit repondre au covention email"."<br>";
         }
        
         $regex='/^(77|76|78|75|70)+[0-9]/';
         if(!(preg_match($regex,$telephone))){
            echo"numero correct";
         }
         if(empty($Nom)|| empty($Prenom)||empty($telephone)||empty($Email)||empty($Mot_de_passe)||empty($date)){
          if(strlen($Mot_de_passe)<=8){
            if (!FILTER_VAR($Email,FILTER_VALIDATE_EMAIL)) {
              if(!(preg_match($regex,$telephone))){

             }
    
           }
          } 
       }
           //c'est pour appeler le fichier php dans le html
    //de linquer la page une seule fois("once")
    if(include_once("connexionbase.php")){
      try{
      //inserer les données recues
      $insert=$mysqlConnection->prepare('INSERT INTO clients(Nom, Prenom, telephone, Email, Mot_de_passe, Dateinsc)
      VALUES(:Nom, :Prenom, :telephone, :Email, :Mot_de_passe, :dateinsc)
      ');
      // ca permet de lier les marqueurs qu'on avait fait dans la requete preparer avec les variables reels
      // ca permet aussi de faire la verification avec le type des variables 
      $insert->bindParam(':Nom',$Nom, PDO::PARAM_STR);
      $insert->bindParam(':Prenom',$Prenom, PDO::PARAM_STR);
      $insert->bindParam(':telephone',$telephone, PDO::PARAM_STR);
      $insert->bindParam(':Email',$Email,  PDO::PARAM_STR);
      $insert->bindParam(':Mot_de_passe',$Mot_de_passe,PDO::PARAM_STR);
      $insert->bindParam(':dateinsc',$Dateinsc, PDO::PARAM_STR);
      $insert->execute();
  
      
      echo " un nouveau insertion a été ajouté dans la table";
              }catch(PDOException $e){
                  echo "Erreur : " . $e->getMessage();
  
  }
  }else{
      echo "les données n'ont pas été envoyées";
  }
        
       
       
   

    ?>