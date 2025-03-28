<?php

include('php/connexion.php');

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

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Franck Rossignol 2025</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/contact.css">

    <link rel="icon" href="favicon.ico">
</head>
<body>
    <div class="container">
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
                <container class="bloccreations">
                    <div>
                        <h1 class="titrecreations">
                            <img class="flechevertecreations" src="images/flecheverte1.png" alt="fleche verte">
                            Contactez-moi !
                        </h1>
                    </div>
                </container>
                <container class="bloccreations2">
                    <div class="containercreations">
                        <div class="card">
                            <div class="containerimage">
                                <img class="image" src="images/email.jpg" alt="Publicité facebook">
                            </div>
                            <div>
                                <p class="description">N'hésitez pas à me contacter pour toute question ou demande. Je suis à votre disposition pour vous aider
                                et répondre à vos besoins. Je serai ravis de discuter de votre projet et de voir comment nous pouvons collaborer.
                                Contactez-moi dès aujourd'hui et faisons avancer vos idées ensemble !</p>
                            </div>
                            <section>
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
                                    <span>
                                    <input class="boutton1" onclick="return confirm('Le message a été envoyé, je prendrai contact avec vous dans les prochains jours')"
                                    type="submit" value="Envoyer">
                                    </span>
                                </form>
                            </section>
                        </div>
                    </div>
                </container>
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
