<?php
/**
 * XIMO GIL LCS CONEXION
 */
class lcs
{
  // Atributos para realizar la conexion
  private $conexion;
  private $error=false;


  function __construct()
  {
    $this->conexion = new mysqli("localhost","root","","lcs_europa");
    if ($this->conexion->connect_errno) {
      $this->error=true;
    }
}
    public function errorConexion()
    {
      return $this->error;
    }

    // CONSULTAS

    // CONSULTA INDEX
    public function ultimosResultados()
    {
      return $this->conexion->query("SELECT equipo_local,partidas_ganadas_local,equipo_visitante,partidas_ganadas_visitante FROM resultados ORDER BY fecha DESC LIMIT 5 ");
    }

    // CONSULTA EQUIPOS
    public function equipos($grupo)
    {
      return $this->conexion->query("SELECT nombre FROM equipos WHERE grupo='".$grupo."'");
    }

    // CONSULTA CLASIFICACION
    public function clasificacion_a()
    {
      return $this->conexion->query("SELECT posicion,equipo,victorias,derrotas FROM clasificacion_a");
    }
    // CONSULTA CLASIFICACION
      public function clasificacion_b()
    {
      return $this->conexion->query("SELECT posicion,equipo,victorias,derrotas FROM clasificacion_b");
    }
    // CONSULTA RESULTADO
    public function resultado($order)
  {
    return $this->conexion->query("SELECT equipo_local,equipo_visitante,partidas_ganadas_local,partidas_ganadas_visitante,fecha FROM resultados ".$order);
  }

  }

 ?>
