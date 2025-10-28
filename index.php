<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Envíos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gestión de Envíos</h1>
    <a href="create.php">Crear Envío</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destinatario</th>
                <th>Dirección</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            $query = "SELECT * FROM envios";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['destinatario']}</td>
                        <td>{$row['direccion']}</td>
                        <td>{$row['descripcion']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}'>Editar</a>
                            <a href='delete.php?id={$row['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>