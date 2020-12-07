<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssnormalize/cssnormalize-min.css" />

  <!--Hamburger menu icon-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!--CSS files-->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="footer.css" />
  <link rel="stylesheet" href="inloggen.css" />

  <!--FONT-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

  <title>Login pagina</title>
</head>

<body>
  <?php
  include('header.php')
  ?>

  <section class="inlogFormulier">
    <div class="achtergrondImage">
      <div class="achtergrondOverlay"></div>
    </div>
    <div class="inlogVeld">
      <form>
        <h2>Inloggen</h2>

        <!--Gebruikersnaam of email-->
        <input type="text" id="email" name="email" placeholder="Gebruikersnaam of email" /><br />

        <!--Wachtwoord-->
        <input type="text" id="wachtwoord" name="wachtwoord" value="********" /><br />
        <a href="index2.html">
          <input type="button" value="Login" />
        </a>
        <a href="registratie.php">
          <input type="button" value="Registreer" />
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