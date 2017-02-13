<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LCS EUROPEA</title>
    <link rel="stylesheet" href="menu.css">
    <!-- XIMO GIL -->

  </head>
  <body>
    <!-- MENU -->
    <a href="index.php"><img src="logo3.png" alt=""></a>
  <ul>
      <li><a class="active" href="index.php">Inicio</a></li>
      <li><a href="equipos.php">Equipos</a></li>
      <li><a href="clasificacion.php">Clasificacion</a></li>
      <li><a href="resultados.php">Resultados</a></li>
  </ul>
    <!--FIN MENU -->

    <?php
    // REALIZAMOS LA CONEXION
    include 'conexion.php';

    $lastresults = new lcs();
    if ($lastresults->errorConexion()==false){
      // echo "Funciona";
    }
    ?>

    <table border="1">
      <th>EQUIPO LOCAL</th>
      <th>PARTIDAS GANADAS</th>
      <th>EQUIPO VISITANTE</th>
      <th>PARTIDAS GANADAS</th>

      <h3>ULTIMOS RESULTADOS</h3>
    <?php

      $resultado=$lastresults->ultimosResultados();

      while ($fila=$resultado->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$fila['equipo_local']."</td>";
        echo "<td>".$fila['partidas_ganadas_local']."</td>";
        echo "<td>".$fila['equipo_visitante']."</td>";
        echo "<td>".$fila['partidas_ganadas_visitante']."</td>";
      }


     ?>







    </table>




  </body>
</html>
