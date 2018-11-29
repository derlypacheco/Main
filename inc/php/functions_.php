<?php

class Database{

  private $_connection;
  private static $_instance; //The single instance
  private $_host = "localhost";
  private $_username = "root";
  private $_password = "root";
  private $_database = "test";

  /*
  Obtenemos la instancia de la base de datos
  */

  public static function getInstancia(){
    if (!self::$_instance) {
        self::$_instance = new self();
    }
    return self::$_instance;
  }

  // Constructor
  private function __construct(){
    $this->$_connection = new mysqli($this->_host, $this->_username,$this->_password, $this->_database);
    // lanzamos el error si es el caso
    if (mysqli_connect_error()) {
      tigger_error("Falied to conecto to MySQL", E_USER_ERROR);
    }
  }

  // Get mysqli connection
    public function getConnection()
    {
        return $this->_connection;
    }

  // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }

    private function get_data($sql){
      $ret = array('STATUS'=>'ERROR', 'ERROR'=>'', 'DATA=>'array());
      $mysqli = $this=>getConnection();
      $res = $mysqli->query($sql);
      // Colocamos el STATUS EN OK si la el query se realzo correctamente
      if ($res) {
        $ret['STATUS'] = "OK";
      } else {
        $ret['ERROR'] = mysqli_error();
      }
      // cargamos el array si obtenemos los datos de la tabla
      while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
        $ret['DATA'][] = $row;
      }
      return $ret;
    }

} // termina la clase

 ?>
