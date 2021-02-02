<!DOCTYPE HTML>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="include\styles\styles.css" type="text/css">
    <title>Las Hormigas
    </title>
</head>

<body>   
    <?php
        if ($_GET['value'] == "rastro"){
    ?>
    <div class="backgroundRastro">      
    </div>
    <a href="index.php" class="solRastro"></a>
    <iframe class="rastroFrame" width="29.9%" height="44.5%" src="https://www.youtube.com/embed/mfhACvksgvc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php
        }elseif ($_GET['value'] == "pueblo"){
    ?>
    <div class="backgroundPueblo">      
    </div>
    <a href="index.php" class="solPueblo"></a>
    <iframe class="puebloFrame" width="32%" height="36.3%" src="https://www.youtube.com/embed/DCfDOehPEcc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php
        }elseif ($_GET['value'] == "ponte"){
    ?>
    <div class="backgroundPonte">      
    </div>
    <a href="index.php" class="solPonte"></a>
    <iframe class="ponteFrame" width="31.4%" height="35.3%" src="https://www.youtube.com/embed/0_PUMQl4Efo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
    <?php
        }
    ?>
</body>
</html>