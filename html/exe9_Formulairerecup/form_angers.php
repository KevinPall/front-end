<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulaire Recup</title>
  <link rel="stylesheet" href="./styles/style_css/style.css">
</head>

<body>
  <content>
  <img src="https://www.alternance-professionnelle.fr/wp-content/uploads/2020/09/LOGO-AFPA-VERT-PNG.png" alt="Logo afpa" title="Logo afpa">
 
  <form action="php/recup.php" method="post">
    <section id="gauche">
    <input type="text" name="nom" placeholder="Nom - Prénom" required /><br />
    <br />
    <input type="email" name="email" placeholder="Courriel" /><br />
    <br />
    <input type="tel" pattern="[0-9]{10}" name="telephone" placeholder="Téléphone" /><br />
    <br />
    <select name="poste">
      <option disabled selected>Vous êtes...</option>
      <option value="directeur">Directeur du Système d'Information</option>
      <option value="dev">Développeur</option>
      <option value="chef">Chef de projet</option>
    </select>
    <br />
    <br /><textarea name="commentaire" rows="10" cols=""  placeholder="Commentaires">
</textarea>
    <br />
    </section>
    <section id="droite">
    <span>Quelle est la meilleure manière de vous contacter ?</span><br />
    <br />
    <input id="telephone" name="optioncontact" type="radio" value="Téléphone" /><label for="Téléphone">Télèphone</label><br />
    <input id="courriel" name="optioncontact" type="radio" value="Courriel" />
    <label for="Courriel">Courriel</label><br />
    <br />
    <span>Jours de la semaine où vous êtes diposnible :</span><br />
    <input name="jourdispo[]" type="checkbox" value="lundi" />Lundi<br />
    <input name="jourdispo[]" type="checkbox" value="mardi" />Mardi<br />
    <input name="jourdispo[]" type="checkbox" value="mercredi" />Mercredi<br />
    <input name="jourdispo[]" type="checkbox" value="jeudi" />Jeudi<br />
    <input name="jourdispo[]" type="checkbox" value="vendredi" />Vendredi<br />
    <br />
    <span>Heure appropriée pour un rendez-vous :<br /></span>
    <br />
    <input name="rdv[]" type="checkbox" value="matin" />Matin<br />
    <input name="rdv[]" type="checkbox" value="après-mdi" />Après-midi<br />
    <br />
    </section>
    <hr>
  
    <button type="submit">Envoyer</button>
  </form>
  </content>
</body>

</html>