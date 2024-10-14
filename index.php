<?php
require_once 'crud.php';

// Instanciar la clase Registro
$crud = new Registro();
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Definir el arreglo de datos personales
            $datosPersonales = [
                'identificacion' => $_POST['identificacion'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'programa' => $_POST['programa'],
                'fechaingreso' => $_POST['fechaingreso'],
                'fechasalida' => $_POST['fechasalida']
            ];

            // Llamar al método para crear un nuevo registro
            $crud->crearNuevoRegistro($datosPersonales);
            header('Location: index.php');
            exit();
        }
        // Cargar la vista del formulario de creación
        include 'vistas/create.php';
        break;

    case 'update':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Definir el arreglo de datos personales
            $datosPersonales = [
                'identificacion' => $_POST['identificacion'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'programa' => $_POST['programa'],
                'fechaingreso' => $_POST['fechaingreso'],
                'fechasalida' => $_POST['fechasalida']
            ];

            // Llamar al método para actualizar el registro
            $crud->actualizarRegistro($datosPersonales);
            header('Location: index.php');
            exit();
        } elseif (isset($_GET['identificacion'])) {
            // Obtener el registro por identificación
            $registro = $crud->obtenerRegistrosPorId($_GET['identificacion']);
            // Cargar la vista del formulario de actualización
            include 'vistas/update.php';
        }
        break;

    case 'delete':
        if (isset($_GET['identificacion'])) {
            $identificacion = $_GET['identificacion'];
            // Llamar al método para eliminar el registro
            $crud->eliminarRegistros($identificacion);
            header('Location: index.php');
            exit();
        }
        break;

    default:
        // Obtener todos los registros para mostrar en la tabla
        $datos = $crud->obtenerTodoslosRegistros();
        // Cargar la vista del listado
        include 'vistas/list.php';
        break;
}
?>
