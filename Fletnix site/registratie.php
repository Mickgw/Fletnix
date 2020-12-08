<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssnormalize/cssnormalize-min.css" />

  <!--Hamburger menu icon-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!--CSS files-->
  <link rel="stylesheet" href="CSS/header.css" />
  <link rel="stylesheet" href="CSS/footer.css" />
  <link rel="stylesheet" href="CSS/registratie.css" />

  <!--FONT-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

  <title>Login pagina</title>
</head>

<body>
  <?php
  include('header.php')
  ?>



  <section class="registratieFormulier">
    <div class="achtergrondImage">
      <div class="achtergrondOverlay"></div>
    </div>
    <div class="registratieVeld">
      <form>
        <h2>Registratie</h2>

        <!--Gebruikersnaam of email-->
        <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" /><br />

        <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam" /><br />

        <input type="text" id="email" name="email" placeholder="Email" /><br />

        <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam" /><br />

        <!--Wachtwoord-->
        <input type="text" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" /><br />

        <input type="text" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord herhalen" /><br />

        <select class="soortAbonnement">
          <option value="" disabled selected>Abonnement</option>
          <option value="Quentin_Tarantino">Fletnix Basic</option>
          <option value="Steven_Spielberg">Fletnix Premium</option>
          <option value="Christopher_Nolan">Fletnix Premium +</option>
        </select><br />

        <a href="registratie.html">
          <input type="button" value="Account aanmaken" />
        </a>
      </form>
    </div>
    </div>
  </section>

  <?php
  include('footer.php')
  ?>
  
</body>

</html>