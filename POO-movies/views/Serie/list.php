<!DOCTYPE html>
<html>

<head>
    <link href="views/CSS/list.css" rel="stylesheet" type="text/css">
    <title>Liste des séries</title>
</head>

<body>
    <div class="total">
        <h2>Voici la liste des séries disponible :</h2>
        <ul>
            <?php 
        $i = 0;
        foreach ($datas as $data) { ?>
            <li>
                <a href="?page=serie&action=detail&id=<?= $i ?>">
                    <img src="<?= $data['urlAffiche']; ?>" alt="affiche">
                    <br />
                    <?php echo $data['titre'] . " - " . $data['annee'] ?>
                </a>
            </li>
            <?php $i++; }?>
        </ul>
    </div>
</body>

</html>