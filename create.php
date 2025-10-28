<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destinatario = $_POST['destinatario'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO envios (destinatario, direccion, descripcion) VALUES ('$destinatario', '$direccion', '$descripcion')";
    mysqli_query($conn, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Envío</title>
</head>
<body>
    <h1>Crear Envío</h1>
    <form method="POST">
        <label>Destinatario:</label>
        <input type="text" name="destinatario" required>
        <br>
        <label>Dirección:</label>
        <input type="text" name="direccion" required>
        <br>
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>