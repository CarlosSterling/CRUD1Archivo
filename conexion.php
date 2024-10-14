<?php
class Conexion
{
    public $conect;

    public function __construct()
    {
        try {
            $this->conect = new PDO("mysql:host=localhost;dbname=CRUD103", "root", "");
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }

    // Método para obtener la conexión
    public function obtenerConexion()
    {
        return $this->conect;
    }
}
