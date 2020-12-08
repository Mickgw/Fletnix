<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssnormalize/cssnormalize-min.css" />

  <!--Hamburger menu icon-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!--CSS files-->
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/header.css" />
  <link rel="stylesheet" href="CSS/footer.css" />


  <!--FONT-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

  <title>Home pagina</title>
</head>

<body>
  <?php
  include('header.php')
  ?>

  <article>
    <div class="achtergrondImage">
      <div class="achtergrondOverlay"></div>
    </div>
    <div class="pakkendeTitel">
      <h2>Honderden films, series en documentaires</h2>
    </div>
    <div class="info">
      <div class="mediaRow1">
        <div class="column1">
          <a href="abonnementen.php">
            <div class="afbeeldingSection1"></div>
          </a>
        </div>
        <div class="column2">               
          <div class="infoTekstSection1">
            <h2>Aanbod</h2>
            <p>
              Bekijk hier ons aanbod van verschillende abonnementen. Onze abonnementen
              variëren van Fletnix Basic, Fletnix Premium tot Fletnix Premium +
            </p>
          </div>
        </div>
      </div>
      <div class="mediaRow2">
        <div class="column1">
          <a href="overzicht.php">
            <div class="afbeeldingSection2"></div>
          </a>
        </div>
        <div class="column2">
          <div class="infoTekstSection2">
            <h2>Film overzicht</h2>
            <p>
              Ontdek hier ons brede aanbod aan films, documantaires en series. Voor ieder een keuze!
            </p>
          </div>
        </div>
      </div>
  </article>

  <?php
  include('footer.php')
  ?>
</body>

</html>