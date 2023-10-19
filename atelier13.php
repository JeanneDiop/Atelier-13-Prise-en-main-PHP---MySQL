<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire E-Taxibokko une plateforme de convoiturage</title>
    <link rel="stylesheet" href="atelier13.css">
</head>
<body>
  
<form action="verificationconnexion.php" method="POST" class="conteneur_class">
            <div class="bloc1">
  
                <h2>Inscription</h2>
            <br><br>
            <p>Votre chauffeur en un clic!</p>
            
            <div class="R1">
                <input type="text" value="Continuer avec facebook">
            </div>
            
            <div class="R2">
                <p>---------------------------------ou-------------------------------</p>
            </div>
            
            <div class="R3">
                <label for="email">EMAIL</label><br>
                <input type="email" name="email" placeholder="veuillez saisir votre Email" >
            </div>
            
            <div class="R4">
                <label for="mot de passe">MOT DE PASSE</label><br>
                <input type="password"name="mot_de_passe" placeholder=" veuillez votre mot de passe" >
            </div>
            
            <div class="R5">
                <p>Jai dejà un compte</p>
                <input type="submit" value="Se Connecter ➡" name="Se_Connecter">
            </div>
            </div>


</form>

<form method="post" action="verificationinscription.php">
            <div class="containBloc2">
            <div class="V1">
                 <h3>Bienvenue</h3>
                 
                 <p>Finalisez votre inscription en renseignant les informations <br> manquantes</p>
            </div>
            <div class="V2">
                <div class="prenom">
                <label for="prenom">PRENOM</label><br>
                <input type="text" name="Prenom"  placeholder="prénom" required>
                </div>
                <div class="V3">
                <label for="nom">NOM</label><br>
                <input type="text" name="Nom"  placeholder="Nom" required>
                </div>
                
            </div>
            <div class="V4">
                <label>TELEPHONE</label><br>
                <div class="V4PAYS">
                    <div class="V41">
                        <img src="drapeau-senegal.jpg" width="15px"> +221
                    </div>
                <input type="number" name="telephone"  placeholder="téléphone" required>
                </div>
                
                </div>
                <div class="V5">
                    <label for="email">EMAIL</label><br>
                    <input type="email" name="email"  placeholder="email" required>
                </div>
                 <div class="V6">
                    <label for="mot de passe">MOT DE PASSE</label><br>
                    <input type="passeword" name="mot_de_passe"   required>
                    </div>
                    <div class="V7">
                 <p>Ajouter un code promo</p>
            </div>
            <div class="V8">
                <input type="submit" value="S'inscrire ➡" name="S_inscrire">
            </div>
            </div>
            
            </div>
        </div>
    </form>
    
</body>
</html>