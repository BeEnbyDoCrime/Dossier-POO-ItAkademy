<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="views/CSS/detail.css" rel="stylesheet" type="text/css">
    <title><?= $data['titre']; ?></title>
</head>

<body>
    <h2> Titre du film : <?= $data['titre']; ?> </h2>
    <div class="card">
        <div>
            <img src="<?= $data['urlAffiche']; ?>" alt="affiche">
        </div>
        <div class="text">
            <p>
                Année de sortie :
                <?= $data['annee']; ?>
            </p>
            <p>
                Synopsis : <?= $data['synopsis']; ?>
            </p>
            <p>
                Genre : <?= $data['genre']; ?>
            </p>
            <p>
                Réalisateur : <?= $real['nom']; ?>
            </p>
        </div>
    </div>
</body>

</html>