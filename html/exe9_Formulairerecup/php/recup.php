<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données</title>
    <link rel="stylesheet" href="./styles/style_css/styled.css">
</head>
<body>


Votre nom est : <strong><?php print $_POST["nom"];?></strong><br>
Votre email est : <strong><?php print $_POST["email"];?></strong><br>
Votre numéro de téléphone est : <strong><?php print $_POST["telephone"];?></strong><br>
Votre poste est : <strong><?php print $_POST["poste"];?></strong><br>
Vos commentaire : <strong><?php print $_POST["commentaire"];?></strong><br>
Vous souhaitez être contacté : <strong><?php print $_POST["optioncontact"];?></strong><br>
<?php
if (isset($_POST['jourdispo'])) {
    print "Jours de dispo : " ."<br>";
    print "<ul>";
    foreach ($_POST['jourdispo'] as $jourdispo) {
        print "<li><strong>" . $jourdispo ."</strong></li>" ."<br>";
    }
    print "</ul>";
}

if (isset($_POST['rdv'])) {
    print "Preference pour un rdv : " ."<br>";
    print "<ul>";
    foreach ($_POST['rdv'] as $jourdispo) {
        print "<li><strong>" . $jourdispo ."</strong></li>" ."<br>";
    }
    print "</ul>";
}

?>
</p> 
</body>
</html>





