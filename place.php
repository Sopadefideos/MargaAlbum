<!DOCTYPE HTML>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="include\styles\styles.css" type="text/css">
    <title>Lo Más bien
    </title>
</head>

<!-- 
    Esta pagina la he hecho con php y con este lenguaje compruebo mediante metodo GET (por url)
    las variable que quiera mostrar y asi puedo elegir lo que necesitemos.

    El metodo get pasa valores por la url de esta forma:
        lashormigas.com/song.php?value=rastro -> ?value=rastroFrame -> value(variable) | 'rastroFrame'(contenido)
    De este modo es como funciona el if-elseif comprobando la varibale $_GET['value'] y decidiendo
    segun su contenido que mostrarnos y que incluir de nuestro ficheros .html

    Si tienes alguna duda Callme bby
-->

<body style="background-color: #bdccd4;">
    <!-- BUCLE IF CREADO Y ANIDADO EN HTML CON PHP PARA ELEGIR LA CANCION QUE QUEREMOS MOSTRAR -->
    <!-- EMPIEZA AQUI -->
    <?php
        if ($_GET['value'] == "elrio"){
    ?>

    <div class="backgroundMap1">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "elbosquesur"){
    ?>
    
    <div class="backgroundMap1">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "casamiguel"){
    ?>
    <div class="backgroundMap2">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "lafuente"){
    ?>
    
    <div class="backgroundMap6">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "lasmontanias"){
    ?>
    <div class="backgroundMap8">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "elbosquenorte"){
    ?>
    
    <div class="backgroundMap1">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "laiglesia"){
    ?>
    <div class="backgroundMap7">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "facultadartes"){
    ?>
    
    <div class="backgroundMap4">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "casanico"){
    ?>
    <div class="backgroundMap3">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }elseif ($_GET['value'] == "carreteraoscura"){
    ?>
    <div class="backgroundMap5">      
    </div>
    <a href="map.php" class="solMap2"></a>
    <?php
        }
    ?>
</body>
</html>