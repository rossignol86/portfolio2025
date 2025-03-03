<?php

// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

$message_envoye = false;

// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sécurisation des données
    $nom = mysqli_real_escape_string($connexion, $_POST['nom']);
    $societe = mysqli_real_escape_string($connexion, $_POST['societe']);
    $email = mysqli_real_escape_string($connexion, $_POST['email']);
    $telephone = mysqli_real_escape_string($connexion, $_POST['telephone']);
    $message = mysqli_real_escape_string($connexion, $_POST['message']);

    // Requête d'insertion des données
    $sql = "INSERT INTO contacts (nom, societe, email, telephone, message)
            VALUES ('$nom', '$societe', '$email', '$telephone', '$message')";

    // Exécution de la requête
    if (mysqli_query($connexion, $sql)) {
        $message_envoye = true;
    }
}

// Fermer la connexion
mysqli_close($connexion);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Franck Rossignol</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/contact.css">
    
    <!-- <style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            text-align: center;
            z-index: 1000;
        }

        .popup button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .popup button:hover {
            background-color: #45a049;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style> -->

    <script>
        function afficherPopup() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('popup').style.display = 'block';
        }

        function fermerPopup() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
            window.location.href = "contact.php"; // Redirection pour éviter double soumission
        }

        // Vérifie si un message a été envoyé et affiche la popup
        <?php if ($message_envoye): ?>
            window.onload = function() {
                afficherPopup();
            };
        <?php endif; ?>
    </script>
</head>
<body>

    <!-- Overlay + Popup -->
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <p>✅ Contact envoyé avec succès !</p>
        <button onclick="fermerPopup()">OK</button>
    </div>

    <div class="container">
  
        <aside>
            <div>
                <img class="imagefixe" src="images/franck.png" alt="Image description">
            </div>
            <div class="blocinfos">
                <h1 class="nom">Franck Rossignol</h1>
                <p class="textepresentation">Après un parcours professionnel de plus de 35 ans comme Infographiste, Chef de studio, WebDesigner & Freelance, j'ai décidé de me lancer dans les métiers du web.</p>
                <p class="textecontact">
                    <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                    <a class="textecontact" href="tel:+330662939679">06 62 93 96 79</a>
                </p>
                <p class="textecontact">
                    <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                    <a class="textecontact" href="mailto:ff.rossignol@yahoo.fr">ff.rossignol@yahoo.fr</a>
                </p>
            </div>
        </aside>
        
        <main>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="creations.html">Créations</a></li>
                    <li><a href="parcours.html">Parcours</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <div>
                <h1>Contactez-moi !</h1>
                <p class="description">N'hésitez pas à me contacter pour toute question ou demande. Je serai ravi de discuter de votre projet.</p>

                <section>
                    <!-- Formulaire de contact -->
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
                        <textarea class="formulaire" id="message" name="message" required></textarea><br><br>
                        
                        <input class="boutton1" type="submit" value="Envoyer">
                    </form>
                </section>
            </div>

            <footer class="stylefooter">
                <ul class="navbarfooter">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="creations.html">Mes créations</a></li>
                    <li><a href="parcours.html">Mon parcours</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <p class="mentions">ff.rossignol@yahoo.fr - 86190 VOUILLÉ - ©rossignol - 2024</p>
            </footer>
        </main>
    </div>

</body>
</html>
