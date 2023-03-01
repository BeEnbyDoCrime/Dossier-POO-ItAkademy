<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="views/CSS/detail.css" rel="stylesheet" type="text/css">
    <title><?= $data['nom']; ?></title>
</head>

<body>
    <h2>
        Nom du réalisateur : <?= $data['nom']; ?>
    </h2>
    <div class="card">
        <div>
            <img src="<?= $data['urlPhoto'];?>">
        </div>
        <div class="text">
            <p>Date de naissance : <?= $data['date_naissance']; ?></p>
            <p>Biographie : <?= $data['biographie']; ?></p>
            <h3>Autre films de ce réalisateur (liste non exhaustive): </h3>
            <ul>
                <?php foreach ($data['realisation'] as $key=>$data) : ?>
                <li>
                    <?php
            echo  $key . ' : ' . $data ; 
            ?>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>

</html>