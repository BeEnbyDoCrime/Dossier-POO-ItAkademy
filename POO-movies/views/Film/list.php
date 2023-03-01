<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link href="views/CSS/list.css" rel="stylesheet" type="text/css">
  <title>Liste des films</title>
</head>

<body>
  <div class="total">
    <h2>Voici la liste des films disponible :</h2>   
    <ul>
        <?php 
        $i = 0;
        foreach ($datas as $data) { ?>
        <li>
          <a href="?page=film&action=detail&id=<?= $i ?>">
            <img src="<?= $data['urlAffiche']; ?>" alt = "affiche">
            <br />
            <?php echo $data['titre'] . " - " . $data['annee'] ?>     
          </a>
        </li>
        <?php $i++; }?>
      </ul>
  </div>
</body>

</html>