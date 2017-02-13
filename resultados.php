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

  <!--FIN MENU -->
    <?php
    // REALIZAMOS LA CONEXION
    include 'conexion.php';

    $resultado = new lcs();
    if ($resultado->errorConexion()==false){
      // echo "Funciona";
    }

    ?>

    <table border="1" class="table5">
      <th>EQUIPO LOCAL</th>
      <th>PARTIDAS GANADAS</th>
      <th>EQUIPO VISITANTE</th>
      <th>PARTIDAS GANADAS</th>
      <th><a href="resultados.php?order=fecha">FECHA</a></th>

      <?php
      if(isset($_GET["order"])){
        $resultado1=$resultado->resultado("ORDER BY fecha DESC");
      }else{
        $resultado1=$resultado->resultado("");
      }


      while ($fila1=$resultado1->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila1['equipo_local']."</td>";
        echo "<td>".$fila1['partidas_ganadas_local']."</td>";
        echo "<td>".$fila1['equipo_visitante']."</td>";
        echo "<td>".$fila1['partidas_ganadas_visitante']."</td>";
        echo "<td>".$fila1['fecha']."</td>";
        echo "</tr>";
      }
      echo "</table>";
       ?>
     </body>
   </html>
