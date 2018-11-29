<?php
// Clase creada por Derly Pacheco
// https://rafaelrojasblog.wordpress.com/2016/09/21/como-conectarse-a-mysql-desde-php5-php7-usando-poo/
class Database{

  private $host;
  private $user;
  private $password;
  private $database;
  private $conn;

  public function __contruct(){
    require_once "config.php";
    $this->host=HOST;
    $this->user=USER;
    $this->password=PASSWORD;
    $this->database=DATABASE;
  } // termina el contructor

  public function CreateConnection(){
    // Con esto regresamos la conexion de la BD
    $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
    if ($this->cnn->connect_errno) {
      die("Error con la conexion MySQL");
    } else {
      echo "Estamos conectados Huston!";
    }
  }// termina la funcion de conexion

  public function CloseConnection(){
    // con este metodo cerramos la conexion
    $this->conn->close();
  }

} // termina la clase

 ?>
