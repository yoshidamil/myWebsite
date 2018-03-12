<!doctype html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/masonry.pkgd.min.js"></script>

    <?php include 'wp-load.php'; ?>
  </head>
  <body>
    <?php require_once('DBAccess.php'); ?>

    <header>
      <h1>test</h1>
    </header>

    <!-- <nav> testtest test test
      <ul>
        <li><a href="index4.html">Home</a></li>
        <li><a href="Profile.html">Profile</a></li>
        <li><a href="log.html">Log</a></li>
        <li><a href="works.html">Works</a></li>
      </ul>
    </nav> -->

    <div class="js-masonry container">
      <?php OutPutArticle(); ?>
    </div>

    <?php // ControlDB() ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </body>
</html>
