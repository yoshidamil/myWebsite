<!doctype html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/masonry.pkgd.min.js"></script>

  </head>
  <body>
    <?php require_once('DBAccess.php'); ?>
      
    <header>
      <h1>test</h1>
    </header>

    <nav>
      <ul>
        <li><a href="index4.html">Home</a></li>
        <li><a href="Profile.html">Profile</a></li>
        <li><a href="log.html">Log</a></li>
        <li><a href="works.html">Works</a></li>
      </ul>
    </nav>

    <div class="js-masonry container">
      <section class="item">
        <img class="card-img" src="images/test.jpg" alt="">
        <div class="card-content">
          <h1 class="card-title">Card Title</h1>
          <p class="card-text">Card Text Card TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard Text</p>
          <div class="card-data">
            <p>6 days ago</p>
          </div>
        </div>
      </section>
      <section class="item">
        <img class="card-img" src="images/test.jpg" alt="">
        <div class="card-content">
          <h1 class="card-title">Card Title</h1>
          <p class="card-text">Card Text</p>
          <div class="card-data">
            <p>6 days ago</p>
          </div>
        </div>
      </section>
      <section class="item">
        <img class="card-img" src="images/test.jpg" alt="">
        <div class="card-content">
          <h1 class="card-title">Card Title</h1>
          <p class="card-text">Card TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard Text</p>
          <div class="card-data">
            <p>6 days ago</p>
          </div>
        </div>
      </section>
      <section class="item">
        <img class="card-img" src="images/test.jpg" alt="">
        <div class="card-content">
          <h1 class="card-title">Card Title</h1>
          <p class="card-text">Card TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard Text</p>
          <div class="card-data">
            <p>6 days ago</p>
          </div>
        </div>
      </section>
      <section class="item">
        <img class="card-img" src="images/test.jpg" alt="">
        <div class="card-content">
          <h1 class="card-title">Card Title</h1>
          <p class="card-text">Card Text</p>
          <div class="card-data">
            <p>6 days ago</p>
          </div>
        </div>
      </section>
      <section class="item">
        <img class="card-img" src="images/test.jpg" alt="">
        <div class="card-content">
          <h1 class="card-title">Card Title</h1>
          <p class="card-text">Card Text Card TextCard TextCard TextCard TextCard TextCard TextCard TextCard TextCard Text</p>
          <div class="card-data">
            <p>6 days ago</p>
          </div>
        </div>
      </section>
    </div>

    <?php ControlDB() ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </body>
</html>
