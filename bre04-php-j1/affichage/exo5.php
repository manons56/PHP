<?php
    $grades = [
        "french" => [12, 9, 13],
        "english" => [18, 12, 11],
        "maths" => [15, 11, 13]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>
            Liste des notes
        </h1>
        <ul>
            <?php foreach($grades as $subject => $results) { ?>
                <li>
                    <?= $subject ?>
                    <ul>
                        <?php foreach($results as $grade) { ?>
                            <li>
                                <?= $grade ?>
                            </li>
                        <?php } ?>
                    <ul>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>