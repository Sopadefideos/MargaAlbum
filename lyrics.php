<!DOCTYPE HTML>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="include\styles\styles.css" type="text/css">
    <title>Las Hormigas
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
        if ($_GET['value'] == "rastroFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundSong1">      
    </div>
    
    <div class="rostroLyricPos1">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include ( 'include/img/03_Assets/02_Canciones/Cancion01/lyric1.html '); ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    
    <a href="index.php" class="solRastro"></a>
    <a href="song.php?value=rastroFrame" class="imgLyricsRostro"></a>
    <!-- SE VUELVE ABRIR PARA CREAR EL ELSEIF DEL IF PRIMERO QUE ABRIMOS Y COMPARAR QUE CANCION ES LA QUE PONEMOS -->
    <?php
        }elseif ($_GET['value'] == "puebloFrame"){
    ?>
    <!-- SE CIERRA PARA CONTINUAR CON EL SIGUIENTE HTML -->
    <div class="backgroundSong2">      
    </div>

    <div class="puebloLyricPos2">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include ( 'include/img/03_Assets/02_Canciones/Cancion02/lyric2.html '); ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    <a href="index.php" class="solPueblo"></a>
    <a href="song.php?value=puebloFrame" class="puebloColor"></a>
    <?php
        }elseif ($_GET['value'] == "bellasFrame"){
    ?>
    <div class="backgroundSong3">      
    </div>
    <a href="index.php" class="solBellas"></a>
    <a href="song.php?value=bellasFrame" class="bellasColor"></a>
    <?php
        }
    ?>
</body>
</html>