<?php
require_once 'conexion.php';

class Registro
{
    private $conexionDB;

    public function __construct()
    {
        $this->conexionDB = new Conexion();
    }

    // Crear un nuevo registro
    public function crearNuevoRegistro($datosPersonales)
    {
        try {
            $sql = ("INSERT INTO datosAprendiz (identificacion, nombre, apellido, programa, fechaingreso, fechasalida) 
                    VALUES (:identificacion, :nombre, :apellido, :programa, :fechaingreso, :fechasalida)");
            $stmt = $this->conexionDB->conect->prepare($sql);
            $stmt->bindParam(':identificacion', $datosPersonales['identificacion'], PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $datosPersonales['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $datosPersonales['apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':programa', $datosPersonales['programa'], PDO::PARAM_STR);
            $stmt->bindParam(':fechaingreso', $datosPersonales['fechaingreso'], PDO::PARAM_STR);
            $stmt->bindParam(':fechasalida', $datosPersonales['fechasalida'], PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al crear el registro: " . $e->getMessage();
        }
    }

    // Obtener todos los registros
    public function obtenerTodoslosRegistros()
    {
        try {
            $sql = ("SELECT * FROM datosAprendiz");
            $stmt = $this->conexionDB->conect->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener los datos: " . $e->getMessage();
            return [];
        }
    }

    // Obtener todos los registros por ID
    public function obtenerRegistrosPorId($identificacion)
    {
        try {
            $sql = "SELECT * FROM datosAprendiz WHERE identificacion = :identificacion";
            $stmt = $this->conexionDB->conect->prepare($sql);
            $stmt->bindParam(':identificacion', $identificacion, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener el registro: " . $e->getMessage();
            return null;
        }
    }

    // Actualizar un registro
    public function actualizarRegistro($datosPersonales)
    {
        try {
            $sql = ("UPDATE datosAprendiz SET nombre = :nombre, apellido = :apellido, programa = :programa, 
                    fechaingreso = :fechaingreso, fechasalida = :fechasalida 
                    WHERE identificacion = :identificacion");
            $stmt = $this->conexionDB->conect->prepare($sql);
            $stmt->bindParam(':identificacion', $datosPersonales['identificacion'], PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $datosPersonales['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $datosPersonales['apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':programa', $datosPersonales['programa'], PDO::PARAM_STR);
            $stmt->bindParam(':fechaingreso', $datosPersonales['fechaingreso'], PDO::PARAM_STR);
            $stmt->bindParam(':fechasalida', $datosPersonales['fechasalida'], PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al actualizar el registro: " . $e->getMessage();
        }
    }

    // Eliminar un registro
    public function eliminarRegistros($identificacion)
    {
        try {
            $sql = ("DELETE FROM datosAprendiz WHERE identificacion = :identificacion");
            $stmt = $this->conexionDB->conect->prepare($sql);
            $stmt->bindParam(':identificacion', $identificacion, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al eliminar el registro: " . $e->getMessage();
        }
    }
}
