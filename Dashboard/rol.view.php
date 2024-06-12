<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Rol</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'sidebar.php'; ?>

    <div class="container">
        <h2>Agregar Rol</h2>
        <form>
            <div class="form-group">
                <label for="nombreRol">Nombre del Rol:</label>
                <input type="text" class="form-control" id="nombreRol">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Rol</button>
        </form>
    </div>
</body>
</html>
