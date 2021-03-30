<!DOCTYPE HTML>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="include/styles/styles.css" type="text/css">
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

<!-- BOSQUES y RIO -->

    <?php
        if ($_GET['value'] == "elrio" OR $_GET['value'] == "elbosquesur" OR $_GET['value'] == "elbosquenorte"){
    ?>

    <div class="backgroundMap1">      
    </div>
    <a href="map.php" class="solMap"></a>

    <div class="positionBosquesYRio1">
    <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
        <p style="
        background-color: #bdccd4;
        color: #0026F5;
        float: right;
        font-size: 1.3020833333333333vw;
        margin-bottom: 0.06510416666666667vw;
        font-weight: bold;
        font-family: 'Helvetica';
        margin-top: -2%;
        width: 30%;
        padding-left: 2%;
        ">El fenómeno</p>
        <?php include 'include/img/03_Assets/03_Mapa/Textos/bosquesyrio1.html'; ?>
    <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>

    <div class="positionBosquesYRio2">
        <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <p style="
            background-color: #bdccd4;
            color: #0026F5;
            float: left;
            font-size: 1.3020833333333333vw;
            margin-bottom: 1px;
            margin-left: 50px;
            font-weight: bold;
            font-family: 'Helvetica';
            margin-top: -2%;
            width: 22%;
            padding-left: 1.5%;
            ">El druida</p>
            <?php include 'include/img/03_Assets/03_Mapa/Textos/bosquesyrio2.html'; ?>
        <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>

    <div class="positionBosquesYRio3">
        <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <?php include 'include/img/03_Assets/03_Mapa/Textos/bosquesyrio3.html'; ?>
        <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>

<!-- LAS MONTAÑAS -->

    <?php
        }elseif ($_GET['value'] == "lasmontanias"){
    ?>
    <div class="backgroundMap8">      
    </div>
    <a href="map.php" class="solMap"></a>
    
    <div class="positionMontanias1">
        <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <?php include 'include/img/03_Assets/03_Mapa/Textos/montana1.html'; ?>
        <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
        </div>

    
        <div class="positionMontanias2">
            <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <p style="
            background-color: #bdccd4;
            color: #FF0000;
            float: right;
            font-size: 1.3020833333333333vw;
            margin-bottom: 0.06510416666666667vw;
            font-weight: bold;
            font-family: 'Helvetica';
            margin-top: -1%;
            width: 22%;
            padding-left: 2%;
            margin-right: 55%;
            ">La mansión en la montaña</p>
                <?php include 'include/img/03_Assets/03_Mapa/Textos/montana2.html'; ?>
            <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
            </div>

        <div class="positionMontanias3">
            <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <a href="song.php?value=rastroFrame" class="rastroColorPlace"></a>
            <p style="
            background-color: #bdccd4;
            color: #FF0000;
            float: left;
            font-size: 1.3020833333333333vw;
            margin-bottom: 0.06510416666666667vw;
            font-weight: bold;
            font-family: 'Helvetica';
            margin-top: -2%;
            width: 23%;
            padding-left: 2%;
            margin-left: 13%;
            ">Piscineros</p>
                <?php include 'include/img/03_Assets/03_Mapa/Textos/montana3.html'; ?>
            <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
            </div>

<!-- IGLESIA -->


    <?php
        }elseif ($_GET['value'] == "laiglesia"){
    ?>
    <div class="backgroundMap7">      
    </div>
    <a href="map.php" class="solMap"></a>

    <?php include 'include/img/03_Assets/03_Mapa/Textos/iglesia1.html'; ?>

    <div class="positionIglesia2">
            <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <p style="
            background-color: #bdccd4;
            color: #FF0000;
            float: right;
            font-size: 1.3020833333333333vw;
            margin-bottom: 0.06510416666666667vw;
            font-weight: bold;
            font-family: 'Helvetica';
            margin-top: -1%;
            width: 22%;
            padding-left: 2%;
            margin-right: 55%;
            ">El druida</p>
                <?php include 'include/img/03_Assets/03_Mapa/Textos/iglesia2.html'; ?>
            <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
            </div>

        <div class="positionIglesia3">
            <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <a href="song.php?value=rastroFrame" class="rastroColorPlace"></a>
            <p style="
            background-color: #bdccd4;
            color: #FF0000;
            float: left;
            font-size: 1.3020833333333333vw;
            margin-bottom: 0.06510416666666667vw;
            font-weight: bold;
            font-family: 'Helvetica';
            margin-top: -2%;
            width: 23%;
            padding-left: 2%;
            margin-left: 13%;
            ">Piscineros</p>
                <?php include 'include/img/03_Assets/03_Mapa/Textos/iglesia3.html'; ?>
            <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
            </div>

<!-- FACULTAD DE BELLAS ARTES -->


    <?php
        }elseif ($_GET['value'] == "facultadartes"){
    ?>
    
    <div class="backgroundMap4">      
    </div>
    <a href="map.php" class="solMap"></a>

    <div class="positionFacultad1">
        <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <?php include 'include/img/03_Assets/03_Mapa/Textos/facultad1.html'; ?>
        <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
    </div>
        

<!-- CASA MIGUEL -->

<!-- CASA MIGUEL -->

    <?php
        }elseif ($_GET['value'] == "casamiguel"){
    ?>
          <div class="backgroundMap2">
          </div>
          <a href="map.php" class="solMap"></a>

          <div class="positionCasaMiguel1">
              <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
              <p style="
              background-color: #bdccd4;
              color: #3D8AF4;
              float: right;
              font-size: 1.3020833333333333vw;
              margin-bottom: 0.06510416666666667vw;
              font-weight: bold;
              font-family: 'Helvetica';
              margin-top: -1%;
              width: 22%;
              padding-left: 2%;
              margin-right: 55%;
              ">Las conductoras siamesas</p>
                  <?php include 'include/img/03_Assets/03_Mapa/Textos/casamiguel1.html'; ?>
              <!-- SE CIERRA LA SENTENCIA DEL INCLUDE -->
              </div>

          <div class="positionCasaMiguel2">
              <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
              <a href="song.php?value=ponteFrame" class="ponteColorPlace"></a>
              <p style="
              background-color: #bdccd4;
              color: #3D8AF4;
              float: left;
              font-size: 1.3020833333333333vw;
              margin-bottom: 0.06510416666666667vw;
              font-weight: bold;
              font-family: 'Helvetica';
              margin-top: -2%;
              width: 23%;
              padding-left: 2%;
              margin-left: 13%;
              ">Ojitos tristes</p>
                  <?php include 'include/img/03_Assets/03_Mapa/Textos/casamiguel2.html'; ?>
              <!-- SE CIERRA LA SENTENCIA DEL INCLUDE -->
              </div>




<!-- LA FUENTE -->

<!-- LA FUENTE -->

    <?php
        }elseif ($_GET['value'] == "lafuente"){
    ?>

          <div class="backgroundMap6">
          </div>
          <a href="map.php" class="solMap"></a>

          <div class="positionFuente1">
              <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
                  <?php include 'include/img/03_Assets/03_Mapa/Textos/lafuente1.html'; ?>
              <!-- SE CIERRA LA SENTENCIA DEL INCLUDE -->
              </div>


              <div class="positionFuente2">
                  <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
                  <p style="
                  background-color: #bdccd4;
                  color: #83C55B;
                  float: right;
                  font-size: 1.3020833333333333vw;
                  margin-bottom: 0.06510416666666667vw;
                  font-weight: bold;
                  font-family: 'Helvetica';
                  margin-top: -1%;
                  width: 22%;
                  padding-left: 2%;
                  margin-right: 55%;
                  ">La leyenda de la princesa</p>
                      <?php include 'include/img/03_Assets/03_Mapa/Textos/lafuente2.html'; ?>
                  <!-- SE CIERRA LA SENTENCIA DEL INCLUDE -->
                  </div>

              <div class="positionFuente3">
                  <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
                  <a href="song.php?value=federicoFrame" class="federicoColorPlace"></a>
                  <p style="
                  background-color: #bdccd4;
                  color: #83C55B;
                  float: left;
                  font-size: 1.3020833333333333vw;
                  margin-bottom: 0.06510416666666667vw;
                  font-weight: bold;
                  font-family: 'Helvetica';
                  margin-top: -2%;
                  width: 23%;
                  padding-left: 2%;
                  margin-left: 13%;
                  ">Objetos mágicos</p>
                      <?php include 'include/img/03_Assets/03_Mapa/Textos/lafuente3.html'; ?>
                  <!-- SE CIERRA LA SENTENCIA DEL INCLUDE -->
                  </div>






<!-- CASA NICO -->

    <?php
        }elseif ($_GET['value'] == "casanico"){
    ?>
    <div class="backgroundMap3">      
    </div>
    <a href="map.php" class="solMap"></a>

    <div class="positionI">
            <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <p style="
            background-color: #bdccd4;
            color: #913443;
            float: right;
            font-size: 1.3020833333333333vw;
            margin-bottom: 0.06510416666666667vw;
            font-weight: bold;
            font-family: 'Helvetica';
            margin-top: -1%;
            width: 22%;
            padding-left: 2%;
            margin-right: 55%;
            ">La habitación</p>
                <?php include 'include/img/03_Assets/03_Mapa/Textos/casanico2.html'; ?>
            <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
            </div>

        <div class="positionIglesia3">
            <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <a href="song.php?value=rastroFrame" class="rastroColorPlace"></a>
            <p style="
            background-color: #bdccd4;
            color: #FFFD54;
            float: left;
            font-size: 1.3020833333333333vw;
            margin-bottom: 0.06510416666666667vw;
            font-weight: bold;
            font-family: 'Helvetica';
            margin-top: -2%;
            width: 23%;
            padding-left: 2%;
            margin-left: 13%;
            ">El salón</p>
                <?php include 'include/img/03_Assets/03_Mapa/Textos/casanico1.html'; ?>
            <!-- SE CIERRA LA SENTENCIA DEL INCLUDE --> 
            </div>

    <!-- CARRETERA OSCURA -->
     <!-- CARRETERA OSCURA -->
    <?php
        }elseif ($_GET['value'] == "carreteraoscura"){
    ?>
    <div class="backgroundMap5">
    </div>
    <a href="map.php" class="solMap"></a>

    <div class="positionCarretera11">
        <!-- SE VUELVE ABRIR PARA INCLUIR EL FICHERO DEL TEXTO Y EL FRAME DE LA CANCION EN CUESTION -->
            <?php include 'include/img/03_Assets/03_Mapa/Textos/carretera1.html'; ?>
        <!-- SE CIERRA LA SENTENCIA DEL INCLUDE -->
    </div>

    <?php
        }
    ?>
    </div>


    
</body>
</html>