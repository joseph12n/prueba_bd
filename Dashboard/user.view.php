<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'sidebar.php'; ?>
    <div class="container">
        <h2>Agregar Usuario</h2>
        <form>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select class="form-control" id="rol">
                    </select>
            </div>
            <div class="form-group">
                <label for="codigo">casa:</label>
                <input type="text" class="form-control" id="codigo">
            </div>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos">
            </div>
            <div class="form-group">
                <label for="nacimiento">fecha de nacimiento:</label>
                <input type="date" class="form-control" id="nacimiento">
            </div>
            <div class="form-group">
                <label for="identificacion">identificacion:</label>
                <input type="number" class="form-control" id="identificacion">
            </div>
            <div class="form-group">
                <label for="correoElectronico">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correoElectronico">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña (opcional):</label>
                <input type="password" class="form-control" id="contrasena">
            </div>
            <div class="form-group">
                <label for="telefono">telefono:</label>
                <input type="number" class="form-control" id="telefono">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="estado">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Usuario</button>
        </form>
    </div>

</body>
</html>
