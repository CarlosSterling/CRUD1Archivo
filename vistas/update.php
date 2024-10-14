<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro</title>
</head>

<body>
    <h1>Actualizar Registro</h1>
    <form action="index.php?action=update" method="post">
        <!-- Se elimina el campo 'id' porque la actualización se hace con base en la identificación -->
        <label for="identificacion">Identificación:</label>
        <input type="text" name="identificacion" value="<?php echo htmlspecialchars($registro['identificacion']); ?>" required readonly><br>
        
        <label for="nombre">Nombre(s):</label>
        <input type="text" name="nombre" value="<?php echo htmlspecialchars($registro['nombre']); ?>" required><br>
        
        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellido" value="<?php echo htmlspecialchars($registro['apellido']); ?>" required><br>
        
        <label for="programa">Programa:</label>
        <input type="text" name="programa" value="<?php echo htmlspecialchars($registro['programa']); ?>" required><br>
        
        <label for="fechaingreso">Fecha de ingreso:</label>
        <input type="date" name="fechaingreso" value="<?php echo htmlspecialchars($registro['fechaingreso']); ?>" required><br>
        
        <label for="fechasalida">Fecha de salida:</label>
        <input type="date" name="fechasalida" value="<?php echo htmlspecialchars($registro['fechasalida']); ?>" required><br>
        
        <button type="submit">Actualizar</button>
    </form>
    <a href="index.php">Volver al listado</a>
</body>

</html>
