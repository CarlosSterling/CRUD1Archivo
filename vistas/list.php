<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Registros</title>
</head>
<body>
    <h1>Listado de Registros</h1>
    <a href="index.php?action=create">Crear nuevo registro</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Identificación</th>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Programa</th>
                <th>Fecha de ingreso</th>
                <th>Fecha de salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato): ?>
                <tr>
                    <td><?php echo htmlspecialchars($dato['id']); ?></td>
                    <td><?php echo htmlspecialchars($dato['identificacion']); ?></td>
                    <td><?php echo htmlspecialchars($dato['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($dato['apellido']); ?></td>
                    <td><?php echo htmlspecialchars($dato['programa']); ?></td>
                    <td><?php echo htmlspecialchars($dato['fechaingreso']); ?></td>
                    <td><?php echo htmlspecialchars($dato['fechasalida']); ?></td>
                    <td>
                        <a href="index.php?action=update&identificacion=<?php echo $dato['identificacion']; ?>">Editar</a>
                        <a href="index.php?action=delete&identificacion=<?php echo $dato['identificacion']; ?>" onclick="return confirm('¿Está seguro de eliminar este registro?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
