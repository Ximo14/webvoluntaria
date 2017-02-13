<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CLASIFICACION</title>
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
  <div class="divgrande2">
    <!--FIN MENU -->
    <?php
    // REALIZAMOS LA CONEXION
    include 'conexion.php';

    $clasificacion = new lcs();
    if ($clasificacion->errorConexion()==false){
      // echo "Funciona";
    }
    ?>
    <div class="div3">
    <h3>GRUPO A </h3>
    <table border="1" class="tabla3">
      <th>POSICION</th>
      <th>EQUIPO</th>
      <th>VICTORIAS</th>
      <th>DERROTAS</th>
        <?php

    $resultado1=$clasificacion->clasificacion_a();

    while ($fila1=$resultado1->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$fila1['posicion']."</td>";
      echo "<td>".$fila1['equipo']."</td>";
      echo "<td>".$fila1['victorias']."</td>";
      echo "<td>".$fila1['derrotas']."</td>";
      echo "</tr>";
    }
    ?>

  </table>
  </div>
    <div class="div4">

    <h3 class="grupob">GRUPO B </h3>
    <table border="1" class="tabla4">
      <th>POSICION</th>
      <th>EQUIPO</th>
      <th>VICTORIAS</th>
      <th>DERROTAS</th>

      <?php

    $resultado2=$clasificacion->clasificacion_b();

    while ($fila2=$resultado2->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$fila2['posicion']."</td>";
      echo "<td>".$fila2['equipo']."</td>";
      echo "<td>".$fila2['victorias']."</td>";
      echo "<td>".$fila2['derrotas']."</td>";
      echo "</tr>";

    }
    echo "</table>";
    ?>
  </div>
</div>
  </body>
</html>
