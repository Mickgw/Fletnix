<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--CSS files-->
  <link rel="stylesheet" href="overzicht.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="film_overzicht_grid.css" />
  <link rel="stylesheet" href="footer.css" />

  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssnormalize/cssnormalize-min.css" />

  <!--Hamburger menu icon-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!--FONT-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

  <title>Overzicht pagina</title>
</head>

<body>
  <?php
  include('header.php')
  ?>

  <section>
    <div class="Banner">
      <div class="bannerOverlay"></div>
    </div>
    <div class="pakkendeTitel">
      <h2>Film Overzicht</h2>
    </div>
  </section>

  <?php
  include('film_modal.php')
  ?>

  <article>
    <div class="filters">
      <!--Filter 1-->
      <select class="filtersGenre">
        <option value="" disabled selected>Genre</option>
        <option value="Actie">Actie</option>
        <option value="Horror">Horror</option>
        <option value="Drama">Drama</option>
        <option value="Thriller">Thriller</option>
        <option value="Sci-Fi">Sci-Fi</option>
      </select>

      <!--Filter 2-->
      <select class="filtersRegiseur">
        <option value="" disabled selected>Regiseur</option>
        <option value="Quentin_Tarantino">Quentin Tarantino</option>
        <option value="Steven_Spielberg">Steven Spielberg</option>
        <option value="Christopher_Nolan">ChristopherNolan</option>
      </select>

      <!--Filter 3-->
      <select class="filtersJaar">
        <option value="" disabled selected>Publicatie jaar</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
      </select>

      <!--Searchbar-->
      <input type="text" id="searchBar" placeholder="Zoeken">
    </div>


    <?php
    include('film_overzicht_grid.php')
    ?>

  </article>

  <?php
  include('footer.php')
  ?>

</body>

</html>