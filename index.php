<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $r = rand(1,100)
    $pí = 3,14;

    // obvod
    $sircuit = 2*$π*$r;

    // obsah
    $area = $π*$r*$r;


    ?>

    <p>Obvod kruhu <?= 2*$r ?> * <?=$r ?> = <?= $sircuit?> </p>
    <p>Obsah kruhu <?= $π ?> * <?= $r?> * <?=$r?> = <?= $area?> </p>

</body>
</html>


    