<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="views/CSS/list.css" rel="stylesheet" type="text/css">
    <title>Liste des réalisateurs</title>
</head>

<body>

    <ul class="liste">

        <body>
            <div class="total">
                <h2>Voici la liste des réalisateurs disponible :</h2>
                <div class="liste">
                    <ul>
                        <?php 
        $i = 0;
         foreach ($datas as $data) { ?>
                        <li>
                            <a href="?page=realisateur&action=detail&id=<?= $i ?>">
                                <img src="<?= $data['urlPhoto']; ?>" alt="Photo">
                                <br />
                                <?php echo $data['nom'] . " - " . $data['date_naissance'] ?>
                            </a>
                        </li>
                        <?php $i++; }?>
                    </ul>
                </div>
            </div>
        </body>
    </ul>
</body>

</html>