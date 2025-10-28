<?php
include 'db.php';

$id = $_GET['id'];
$query = "SELECT * FROM envios WHERE id = $id";
$result = mysqli_query($conn, $query);
$envio = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destinatario = $_POST['destinatario'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE envios SET destinatario = '$destinatario', direccion = '$direccion', descripcion = '$descripcion' WHERE id = $id";
    mysqli_query($conn, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Envío</title>
</head>
<body>
    <h1>Editar Envío</h1>
    <form method="POST">
        <label>Destinatario:</label>
        <input type="text" name="destinatario" value="<?php echo $envio['destinatario']; ?>" required>
        <br>
        <label>Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $envio['direccion']; ?>" required>
        <br>
        <label>Descripción:</label>
        <textarea name="descripcion" required><?php echo $envio['descripcion']; ?></textarea>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>