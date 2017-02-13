<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EQUIPOS</title>
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
  <div class="divgrande1">
    <!--FIN MENU -->

    <?php
    // REALIZAMOS LA CONEXION
    include 'conexion.php';

    $equipos = new lcs();
    if ($equipos->errorConexion()==false){
      // echo "Funciona";
    }
    ?>



    <br>
    <div class="div1">
    <table border="1" class="tabla1">
      <th>GRUPO A</th>
        <?php

    $resultado1=$equipos->equipos('A');

    while ($fila1=$resultado1->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$fila1['nombre']."</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>

    <div class="div2">
    <table border="1" class="tabla2">
      <th>GRUPO B</th>
      <?php

    $resultado2=$equipos->equipos('B');

    while ($fila2=$resultado2->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$fila2['nombre']."</td>";
    }
echo "</table>";
     ?>
     </div>
     </div>

   </body>
 </html>
