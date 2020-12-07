<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--CSS files-->
  <link rel="stylesheet" href="abonnementen.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="footer.css" />



  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssnormalize/cssnormalize-min.css" />

  <!--Hamburger menu icon-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!--FONT-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

  <title>Abonnementen pagina</title>
</head>

<body>
  <?php
  include('header.php')
  ?>

  <article>
    <section class="Abonnement">
      <h2>Fletnix Basic</h2>

      "Wow super geweldig!""
      <br />
      "1 scherm tegelijk"
      <br />
      "Student vriendelijk!"
      <li class="prijs">€9 p/m</li>

      <button class="button Selecteren">Selecteren</button>
    </section>

    <section class="Abonnement2">
      <h2>Fletnix Premium</h2>

      "Wow super-duper geweldig!""
      <br />
      "2 schermen tegelijk"
      <br />
      "Deel nu met je moeder!!"
      <li class="prijs">€12 p/m</li>

      <button class="button Selecteren">Selecteren</button>
    </section>

    <section class="Abonnement3">
      <h2>Fletnix Premium +</h2>

      "Wow omin-super-duper geweldig!""
      <br />
      "Duizenden schermen tegelijk"
      <br />
      "Kind,Student,Jemoeder,Jevader,Jezusje,Jebuurman-vriendelijk!!!!"
      <li class="prijs">€15 p/m</li>

      <button class="button Selecteren">Selecteren</button>
    </section>
  </article>

  <?php
  include('footer.php')
  ?>
  
</body>

</html>