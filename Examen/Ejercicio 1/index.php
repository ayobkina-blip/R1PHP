<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body{
            margin:20px;
        }
        form{
            display:flex;
            flex-direction:column;
        }
        form div{
            margin: 20px;
        }
        label,input{
            padding:10px;
            border-radius:2px;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 1</h1>

    <form action="script.php" method="post">
        <div>
            <label for="name">Nombre:</label><input type="text" name="name">
        </div>
        <div>
            <label for="last_name">Apellidos:</label><input type="text" name="last_name">
        </div>
        <div>
            <label for="dni">DNI:</label><input type="text" name="dni">
        </div>
        <div>
            <label for="email">Email:</label><input type="text" name="email">
        </div>
        <div>
            <label for="phone">Telefono:</label><input type="text" name="phone">
        </div>
        <div><button type="submit">Enviar</button></div>
    </form>

</body>
</html>