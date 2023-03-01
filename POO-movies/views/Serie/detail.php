<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="views/CSS/detail.css" rel="stylesheet" type="text/css">
    <title><?= $data['titre'] ?></title>
</head>

<body>
    <h2>
        Titre de la série : <?= $data['titre']; ?>
    </h2>
    <div class="card">
        <div>
            <img src="<?= $data['urlAffiche'];?>">
        </div>
        <div class="text">
            <p>Date de sortie : <?= $data['annee']; ?></p>
            <p>Synopsis : <?= $data['synopsis']; ?></p>
            <p>
                Nombre de saison : <?= $data['saison']; ?>
            </p>
            <h3>Nombre d'épisode par saison : </h3>
            <ul>
                <?php foreach ($data['episodes'] as $key=>$data) : ?>
                <li>
                    <?php
            echo 'saison ' . $key . ' : ' . $data . ' episodes'; 
            ?>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>

</html>