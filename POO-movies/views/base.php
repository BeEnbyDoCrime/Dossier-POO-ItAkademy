<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
    <link href="views/CSS/base.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="FlexIsLife">
      <nav>
        <ul>
          <li><a href="?page=home">Home</a></li>
          <li><a href="?page=film">Films</a></li>
          <li><a href="?page=serie">Séries</a></li>
          <li><a href="?page=realisateur">Réalisateurs</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>

    <?php
    $filepath = 'views/' . $_page . '/' . $_action . '.php';

    if (file_exists($filepath)) {
      include_once 'views/' . $_page . '/' . $_action . '.php';
    } else {
      //redirection page error;
    }
    ?>
  </main>
  <footer>
    <p>C'est moi qui l'a fait</p>
  </footer>
</body>

</html>