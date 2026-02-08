<?php
$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['mensaje']);
    
    if (empty($name) || empty($email) || empty($mensaje)) {
        $error = "Todos los campos son obligatorios.";
    } else {
        $success = "¡Registro completado con éxito!";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Campos</title>
    <style>
        form { display: flex; flex-direction: column; width: 300px; margin: 20px; }
        input, textarea, button { margin-bottom: 10px; padding: 8px; }
        .error { color: red; font-weight: bold; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Nombre" value="<?php echo $_POST['name'] ?? ''; ?>">
        <input type="email" name="email" placeholder="Email" value="<?php echo $_POST['email'] ?? ''; ?>">
        <textarea name="mensaje" placeholder="Tu mensaje..."><?php echo $_POST['mensaje'] ?? ''; ?></textarea>
        
        <button type="submit">Enviar</button>
    </form>

</body>
</html>