<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="header.css" />

  <style>
    body {
      margin: 0 !important;
    }

    nav {
      margin: 0 !important;
    }

    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 90%;
    }
  </style>
</head>

<body>
  <?php
  include('header.php')
  ?>

  <video controls autoplay poster="../assets/poster.png" id="myVideo">
    <source src="Trailers/TENET - NEW TRAILER.mp4" type="video/mp4" />
  </video>
</body>

</html>