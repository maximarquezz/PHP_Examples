<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="server/form.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre:
            <input type="text" id="name" name="name">
        </label>
        <br>

        <label for="age">Edad:
            <input type="number" id="age" name="age">
        </label>
        <br>

        <label for="gender">Sexo:
            <input type="radio" id="gender" name="gender" value="Masculino">Masculino
            <input type="radio" id="gender" name="gender" value="Femenino">Femenino
        </label>
        <br>

        <label for="role">Roles:
            <input type="checkbox" name="role[]" id="role" value="Administrador">Administrador
            <input type="checkbox" name="role[]" id="role" value="Usuario">Usuario
            <input type="checkbox" name="role[]" id="role" value="Espectador">Espectador
        </label>

        <label for="file">Archivo:
            <input type="file" name="file" id="file"  accept="image/*">
        </label>

        <hr>
        <input type="submit" value="Enviar">
    </form>

    <style>
        input{margin: 5px;}
    </style>

</body>
</html>