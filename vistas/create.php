<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Registro</title>
</head>
<body>
    <h1>Crear Nuevo Registro</h1>
    <form action="index.php?action=create" method="post">
        <label for="identificacion">Identificación:</label>
        <input type="number" name="identificacion" id="identificacion" required><br>

        <label for="nombre">Nombre(s):</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="apellido">Apellido(s):</label>
        <input type="text" name="apellido" id="apellido" required><br>

        <label for="programa">Programa:</label>
        <input type="text" name="programa" id="programa" required><br>

        <label for="fechaingreso">Fecha de Ingreso:</label>
        <input type="date" name="fechaingreso" id="fechaingreso" required><br>

        <label for="fechasalida">Fecha de salida:</label>
        <input type="date" name="fechasalida" id="fechasalida"><br>

        <button type="submit">Crear</button>
    </form>
    <a href="index.php">Volver al listado</a>
</body>
</html>
