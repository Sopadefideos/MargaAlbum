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
<div id="aviso">
    <h2>Pon el movil en modo horizontal</h2>
</div>

<div id="contenido">
        <!-- BUCLE IF CREADO Y ANIDADO EN HTML CON PHP PARA ELEGIR LA CANCION QUE QUEREMOS MOSTRAR -->
    <!-- EMPIEZA AQUI -->
    <?php
        if ($_GET['value'] == "rastroFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundLyric1">      
    </div>
    
    <div class="rostroLyricPos1">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include 'include/img/03_Assets/02_Canciones/Cancion01/lyric1.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    
    <a href="index.php" class="solRastro"></a>
    <a href="song.php?value=rastroFrame" class="imgLyricsRostro"></a>
    <!-- SE VUELVE ABRIR PARA CREAR EL ELSEIF DEL IF PRIMERO QUE ABRIMOS Y COMPARAR QUE CANCION ES LA QUE PONEMOS -->
    <?php
        }elseif ($_GET['value'] == "puebloFrame"){
    ?>
    <!-- SE CIERRA PARA CONTINUAR CON EL SIGUIENTE HTML -->
    <div class="backgroundLyric2">      
    </div>

    <div class="puebloLyricPos2">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include 'include/img/03_Assets/02_Canciones/Cancion02/lyric2.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    <a href="index.php" class="solPueblo"></a>
    <a href="song.php?value=puebloFrame" class="imgLyricsPueblo"></a>
    
    <?php
        }elseif ($_GET['value'] == "bellasFrame"){
    ?>
    <div class="backgroundLyric3">      
    </div>
    <div class="bellasLyricPos2">
        <?php include 'include/img/03_Assets/02_Canciones/Cancion03/lyric3.html'; ?>
    </div>
    <a href="index.php" class="solBellas"></a>
    <a href="song.php?value=bellasFrame" class="imgLyricsBellas"></a>


    <?php
        }elseif ($_GET['value'] == "rooneyFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundLyric4">      
    </div>
    
    <div class="rooneyLyricPos1">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include 'include/img/03_Assets/02_Canciones/Cancion04/lyric4.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    
    <a href="index.php" class="solRooney"></a>
    <a href="song.php?value=rooneyFrame" class="imgLyricsRooney"></a>

    <?php
        }elseif ($_GET['value'] == "paisajesFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundLyric5">      
    </div>
    
    <div class="paisajesLyricPos5">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include 'include/img/03_Assets/02_Canciones/Cancion05/lyric5.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    
    <a href="index.php" class="solPaisajes"></a>
    <a href="song.php?value=paisajeFrame" class="imgLyricsPaisajes"></a>

    <?php
        }elseif ($_GET['value'] == "federicoFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundLyric6">      
    </div>
    
    <div class="federicoLyricPos6">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include 'include/img/03_Assets/02_Canciones/Cancion06/lyric6.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    
    <a href="index.php" class="solFederico"></a>
    <a href="song.php?value=federicoFrame" class="imgLyricsFederico"></a>

    <?php
        }elseif ($_GET['value'] == "ponteFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundLyric7">      
    </div>
    
    <div class="ponteLyricPos7">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include 'include/img/03_Assets/02_Canciones/Cancion07/lyric7.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    
    <a href="index.php" class="solPonte"></a>
    <a href="song.php?value=ponteFrame" class="imgLyricsPonte"></a>

    <?php
        }elseif ($_GET['value'] == "feriaFrame"){
    ?>
    <!-- SE CIERRA PARA INCLUIR HTML -->
    <div class="backgroundLyric8">      
    </div>
    
    <div class="feriaLyricPos8">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <?php include 'include/img/03_Assets/02_Canciones/Cancion08/lyric8.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
    
    <a href="index.php" class="solFeria"></a>
    <a href="song.php?value=feriaFrame" class="imgLyricsFeria"></a>
    <?php
        }
    ?>
</div>




    
</body>
</html>