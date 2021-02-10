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
        if ($_GET['value'] == "rastroFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundSong1">      
    </div>
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
    <?php include 'include/img/03_Assets/02_Canciones/Cancion01/song1.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    <a href="index.php" class="solRastro"></a>
    <a href="lyrics.php?value=rastroFrame" class="rastroColor"></a>
    <!-- SE VUELVE ABRIR PARA CREAR EL ELSEIF DEL IF PRIMERO QUE ABRIMOS Y COMPARAR QUE CANCION ES LA QUE PONEMOS -->
    <?php
        }elseif ($_GET['value'] == "puebloFrame"){
    ?>
    <!-- SE CIERRA PARA CONTINUAR CON EL SIGUIENTE HTML -->
    <div class="backgroundSong2">      
    </div>
    <?php include 'include/img/03_Assets/02_Canciones/Cancion02/song2.html'; ?>
    <a href="index.php" class="solPueblo"></a>
    <a href="lyrics.php?value=puebloFrame" class="puebloColor"></a>
    
    <?php
        }elseif ($_GET['value'] == "bellasFrame"){
    ?>
    <div class="backgroundSong3">      
    </div>
    <?php include 'include/img/03_Assets/02_Canciones/Cancion03/song3.html'; ?>
    <a href="index.php" class="solBellas"></a>
    <a href="lyrics.php?value=bellasFrame" class="bellasColor"></a>

    <?php
        }elseif ($_GET['value'] == "rooneyFrame"){
    ?>
    <div class="backgroundSong4">      
    </div>
    <?php include 'include/img/03_Assets/02_Canciones/Cancion04/song4.html'; ?>
    <a href="index.php" class="solRooney"></a>
    <a href="lyrics.php?value=rooneyFrame" class="rooneyColor"></a>


    <?php
        }elseif ($_GET['value'] == "paisajeFrame"){
    ?>
    <div class="backgroundSong5">      
    </div>
    <?php include 'include/img/03_Assets/02_Canciones/Cancion05/song5.html'; ?>
    <a href="index.php" class="solPaisajes"></a>
    <a href="lyrics.php?value=paisajesFrame" class="paisajesColorAux"></a>


    <?php
        }elseif ($_GET['value'] == "federicoFrame"){
    ?>
    <div class="backgroundSong6">      
    </div>
    <?php include 'include/img/03_Assets/02_Canciones/Cancion06/song6.html'; ?>
    <a href="index.php" class="solFederico"></a>
    <a href="lyrics.php?value=federicoFrame" class="federicoColor"></a>


    <?php
        }elseif ($_GET['value'] == "ponteFrame"){
    ?>
    <div class="backgroundSong7">      
    </div>
    <?php include 'include/img/03_Assets/02_Canciones/Cancion07/song7.html'; ?>
    <a href="index.php" class="solPonte"></a>
    <a href="lyrics.php?value=ponteFrame" class="ponteColor"></a>


    <?php
        }elseif ($_GET['value'] == "feriaFrame"){
    ?>
    <div class="backgroundSong8">      
    </div>
    <?php include 'include/img/03_Assets/02_Canciones/Cancion08/song8.html'; ?>
    <a href="index.php" class="solFeria"></a>
    <a href="lyrics.php?value=feriaFrame" class="feriaColor"></a>
    <?php
        }
    ?>
</body>
</html>