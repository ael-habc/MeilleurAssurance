<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./style.css" rel="stylesheet" type="text/css" media="all" />

  <title>meilleur Sante Senior</title>
</head>

<body>
  <div class="main">
    <img src="./Assests/logo.png" alt="logo" id="logo" />
    <h1>
      Comparez gratuitement les Meilleures
      <span>Mutuelles Santé Sénior </span>en 2 clics.
    </h1>
    <p class="para">Accompagnement et suivi <span> personnalisé</span>.</p>
    <form id="form" enctype="multipart/form-data" method="post" action="run.php">
      <div>
        <input type="text" name="prenom" class="prenom" id="prenom" placeholder="Prenom *" oninput="validation()" />
        <input type="text" name="nom" class="nom" id="nom" placeholder="Nom *" oninput="validation()" />
        <input type="text" name="telephone" class="telephone" id="telephone" placeholder="Téléphone *"
          oninput="validation()" />
        <input type="text" name="codePostal" class="codePostal" id="codePostal" placeholder="Code Postal *"
          oninput="validation()" maxlength="5" />

        <input type="email" name="email" class="email" id="email" placeholder="Email *" oninput="validation()" />
        <input type="number" name="date" class="date" id="date" placeholder="Année de naissance *"
          oninput="validation()" min="1000" />
      </div>
      <p class="message" id="message">
        J'accepte que le comparateur StrictAssur me communique différents
        devis de Mutuelle Santé par email et par téléphone conformément au
        <a target="_blank"
          href="https://strictassur.com/mutuelle-sante-senior/index.php/conditions-generales-dutilisation/">
          CGU</a>
        et
        <a target="_blank"
          href="https://strictassur.com/mutuelle-sante-senior/index.php/protection-de-donnees-personnelles/">
          Mentions Légales</a>
        .
      </p>
      <label class="switch">
        <input type="checkbox" checked onchange="validation()" id="check" />
        <span class="slider round"></span>
      </label>
      <button type="submit">Obtenir mes devis</button>
    </form>
    <!-- <img src="./Assests/SeniorCoupleTalkingOnline-removebg-preview.png" class="banner" alt="banner"> -->
  </div>
  <script src="./script.js"></script>
</body>

</html>