<?php
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $role = $_REQUEST['role'];
    $file = $_FILES['file'];
    $path = $_SERVER['DOCUMENT_ROOT'] . '/php_example/images/' . $file['name'];

    echo $path;
    
    echo "<p>Nombre: $name</p>";
    echo "<p>Edad: $age</p>";
    echo "<p>Sexo: $gender</p>";
    echo "<p>Roles: </p>";
    
    echo "<ul>";
    foreach($role as $rol){
        echo "<li>Rol: $rol</li>";
    }
    echo "</ul>";  
    
    var_dump($file);  
    move_uploaded_file($file['tmp_name'], $path);
?>