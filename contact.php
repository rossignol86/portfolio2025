<?php
 
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";
 
// Établir la connexion
 $connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);
 
// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données.";
}
 
 
// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
// Récupération des données du formulaire
    $nom = $_POST['nom'];
    $societe = $_POST['societe'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
   
// Requête d'insertion des données
    $sql = "INSERT INTO contacts (nom, societe, email, telephone, message)
    VALUES ('$nom', '$societe', '$email', '$telephone', '$message')";
 
// Exécution de la requête d'insertion
    mysqli_query($connexion,$sql);
}
 
// Fermer la connexion
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />

    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon aquarium</title>
      
      
  </head>
    
  <body>
      
    <div class="container">
  
        
<!-- partie gauche noir et fixe -->     
      <aside>
            <div>
                <img class="imagefixe" src="images/franck.png" alt="Image description">
            </div>
            <div class="blocinfos">
                <h1 class="nom">Franck Rossignol</h1>
                <div>
                    <p class="textepresentation">Après un parcours professionnelle de plus de 35 ans comme Infographiste, Chef de studio, WebDesigner & Freelance,
                    j'ai décidé de me lancer de nouveaux défis professionnels
                    afin de faire évoluer ma carrière vers un secteur d'activité stimulant
                    et innovant les métiers du web.</p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="tel:+330662939679">
                            06 62 93 96 79
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="mailto:ff.rossignol@yahoo.fr">
                            ff.rossignol@yahoo.fr
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="images/Franck Rossignol Graphiste.pdf" target="_blank" download="CV Franck ROSSIGNOL.pdf">
                            Téléchargez mon CV
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/linkedin.png" alt="linkedin">
                        <a class="textecontact" href="https://www.linkedin.com/in/rossignol-franck-4a755a98/" target="_blank">
                            Linkedin
                        </a>
                    </p>
                </div>
            </div>
      </aside>
        
        
        
<!-- partie droite mobile sauf la navbar -->        
      <main>
          
<!-- barre de navigation -->           
        <nav class="navbar">                    
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="creations.html">Mes créations</a></li>
                    <li><a href="parcours.html">Mon parcours</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
        </nav>
          
                  
<!-- partie centrale mobile -->        
        <div>

            
            <container class="bloccontact">
                <div>
                    <h1 class="contact">
                        <img class="flechevertecontact" src="images/flecheverte1.png" alt="fleche verte">
                        Contact
                    </h1>
                    <span class="dateheure">
                        <?php
                            // Un script PHP simple qui affiche la date et l'heure actuelles
                            echo "<p>Nous sommes le " . date("d/m/Y") . " et il est " . date("H:i:s") . "</p>";
                        ?>
                    </span>

            <!-- Formulaire de renseignement -->
            <form action="contact.php" method="post">
                <label for="nom">Nom :</label>
                <input class="formulaire" type="text" id="nom" name="nom" required><br><br>
                
                <label for="societe">Société :</label>
                <input class="formulaire" type="text" id="societe" name="societe"><br><br>
                
                <label for="telephone">Téléphone :</label>
                <input class="formulaire" type="tel" id="telephone" name="telephone"><br><br>
                
                <label for="email">Email :</label>
                <input class="formulaire" type="email" id="email" name="email" required><br><br>
                
                <label for="message">Message :</label>
                <textarea  class="formulaire" id="message" name="message" required></textarea><br><br>
                
                <input class="boutton" type="submit" value="Envoyer">
            </form>

                    
                </div>
            </container>            
                    
<!-- section footer fond vert -->
                <section class="sectionfooterfondvert">
                    <footer class="stylefooter">
                        <div class="navbarfooter">
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="creations.html">Mes créations</a></li>
                                <li><a href="parcours.html">Mon parcours</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        
                        <div class="coordonnees">
                            <p class="mentions">ff.rossignol@yahoo.fr - 86190 VOUILLE - ©rossignol - 2024 -&nbsp;Webdesign&nbsp;sur&nbsp;FIGMA - HTML & CSS sur Visual Studio Code</p>
                        </div>
                    </footer>

                </section>
            
        </div>
                 
      </main>
        
    </div>
  </body>
</html>
