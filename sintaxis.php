<?php
    //Variables y tipos de datos
    $nombre = "Maxi Marquez";
    $edad = 20;
    $sueldo = 120.10;
    $estudia = true;

    //Fuga o escape de comillas
    echo "Me suelen decir \"Maxi\" pero mi nombre completo es Maximiliano";

    //Operadores unarios
    echo -$edad;

    //Operador incremento y decremento
    $edad++;
    $edad--;
    //Esto es != de
    ++$edad;
    --$edad;
    //Porque primero puede ocurrir el incremento/decremento antes de otra operación, o viceversa

    //Operadores de asignación combinada -> EJ: "$num += $edad"; es lo mismo que "$num = $num + $edad";
    echo $num = 0;
    $num += $edad;
    $num -= $edad;
    $num /= $edad;
    $num *= $edad;
    $num %= $edad;

    //Operadores lógicos
    var_dump($edad == $sueldo || $edad != $sueldo && $edad <> $sueldo || $edad === $sueldo); // <- var_dump() retorna información sobre una variable

    //Constantes
    define('NUM_PI', 3.14);
    define('NUM_EULER', 2.7182);
    define('COMPONENTS', ['CPU, RAM, Motherboard']); // <- También se pueden tener constantes de arrays

    //Constantes predefinidas (algunas)
    echo PHP_VERSION;
    echo PHP_URL_HOST;
    echo __DIR__;

    //If Else (condicional)
    if (defined('NUM_PI')){ // <- con el método defined() podemos comprobar si una constante ha sido definida anteriormente
        echo "Ya se ha definido";
    }
    else {
        echo "No se ha definido";
    }

    //Operadores ternarios -> simplificación del IF
    $a = 10;
    $b = 20;
    $res = $a > $b ? 'mayor' : ($a < $b ? 'menor' : 'igual');
    echo $res;

    //Switch (condicional)
    $num_switch = 1;
    switch ($num_switch) {
        case 1:
            echo "Es 1";
            break;
        case 2:
            echo "Es 2";
            break;
        default:
            echo "No es ninguno";
            break;
    }

    //Match
    $num_match = 1;
    echo match($num_match){
        1 => "Es el numero 1",
        2 => "Es el numero 2",
        3 => "Es el numero 3",
        default => "Valor no permitido"
    };

    //While (bucle indeterminado)
    $num_while = 0;
    while($num_while <= 10){
        echo $num_while;
        $num_while++;
    }

    //Do While (bucle indeterminado)
    $num_dowhile = 0;
    do {
        $num_dowhile++;
    } while ($num_dowhile <= 10);

    //For (bucle determinado)
    for ($i = 0; $i <= 10; $i++){
        echo $i;

        if ($i == 4){
            continue; // <- Salta al final de la estructura del bucle
        }

        if ($i == 9){
            break; // <- Finaliza el bucle
        }
    }
    
    //Arrays
    $numeros_array = [1,2,3,4,5];

    foreach ($numeros_array as $key => $numero_array){ // <- $key es donde se almacena el índice
        echo $numero_array + $key;
    }

    //Funciones (predefinidas)
    time();
    sqrt(9);
    rand(0,100);
    pi();

    //Funciones (propias)
    function calc_factorial(int $num){
        $res = 1;
        for($i = 1; $i <= $num; $i++){
            $res = $res * $i;
            echo "<br><br>Factorial de $num ($i): $res"; // <- Esta función no retorna un valor
        }
        //return $res; <- Esto sí retornaría un valor
    } // <- La función, al no retornar un valor devuelve VOID, y si lo retorna, depende del tipo de dato que retorne

    calc_factorial(6);

    //Ámbito de variables
    $a = 5; // <-- Tiene un ámbito GLOBAL

    function calc(){
        //$a; <- En este caso, la función no sabe que $a existe de forma GLOBAL, ya que debe existir dentro de su ámbito ==> EN JS ESTO ES EL "SCOPE"
        $a = 10;
        return $a;
    }
    echo calc(); // <- Devuelve que $a es 10, porque en su ámbito así lo definimos
    echo $a; // <- Devuelve que $a es 5, porque en el ámbito GLOBAL es así

    //NOTA: diferenciar entre paso de parámetros por VALOR y por REFERENCIA -> Por valor se toma una copia de la variable pero no se modifica su valor original
    //Por referencia -> se modifica la variable original

    //Argumentos fijos y variables
    function valoracion($nombre, $rating = 0){ //$rating = 0 <- Es una forma de definir un parámetro como opcional, dandole un valor POR DEFECTO o DEFAULT si no se pasa un argumento
        echo "<br><br>$nombre tiene un rating de $rating";
    }
    valoracion("Showmatch", 5);

    //Spread operator u operador de propagación
    function concatenar(...$palabras){ // ... <- Indica que la cantidad de argumentos recibidos será variable, y se almacenará en la variable que le sigue a "..." -> se almacena en un ARRAY
        foreach ($palabras as $key => $palabra) {
            echo "<br><br>$palabra $key"; // <- En el output de esto se visualiza perfectamente que es un array
        }
    }
    concatenar('hola', 'soy', 'maxi');

    //Funciones con TIPADO DEFINIDO
    //declare(strict_types = 1); <- Con esto definimos que no pueda pasarse un tipo de dato distinto al pedido

    function sumar_enteros(int $num1, int $num2) : int{ // <- Delante del nombre de la variable se define el tipo de dato -> por eso PHP puede ser de tipado GRADUAL
        return ($num1 + $num2) / 2; // <- Retornaría un error, ya que el resultado es un numero FLOTANTE o DECIMAL,
        //y como hemos definido que esperamos que la función devuelva un entero, no permitimos que se trunque el dato a un flotante
    }
    $res = sumar_enteros(3, 5.8); // <- Trunca el valor, tratando de transformar el argumento al tipo de dato especificado en el parámetro (int)
    echo $res;

    //Métodos de cadena (STRING)
    $cadena = "Texto";
    $cadena2 = "texto";

    echo $cadena[0]; // <- Lo mismo que .charAt() de Java
    echo mb_strlen($cadena); // <- Lo mismo que .length() en Java
    echo strpos($cadena, 'T'); // <- Lo mismo que .indexOf() en Java
    echo strrpos($cadena, 't'); // <- Lo mismo que .lastIndexOf() en Java
    echo str_contains($cadena, "ex"); // <- Lo mismo que .contains() en Java -> RETORNA BOOLEANO
    echo str_starts_with($cadena, "Tex"); // <- Verifica si la cadena comienza con el segundo argumento
    echo str_ends_with($cadena, "to"); // <- Verifica si la cadena termina con el segundo argumento
    echo strcmp($cadena, $cadena2); // <- Compara dos cadenas... ==> strcasecmp() es lo mismo pero ignora el case sensitive
    //$cadena == $cadena2 -> return 0;
    //$cadena > $cadena2 -> return numero POSITIVO segun la distancia en la cantidad de caracteres de diferencia entre la PRIMERA en comparación de la SEGUNDA
    //$cadena < $cadena2 -> return numero NEGATIVO segun la distancia en la cantidad de caracteres de diferencia entre la SEGUNDA en comparación de la PRIMERA
    echo substr($cadena, 3, 4); // <- Lo mismo que .substring() en Java ==> crea un String aparte, los dos últimos parámetros definen desde qué caracter hasta qué otro se creará una subcadena
    //Además, podemos poner valores negativos tales como ($cadena, -3, 4);... Esto haría que se comience a extraer de derecha a izquierda (por defecto es left to right)
    echo str_replace("xto", "rminó", $cadena); // <- Reemplaza el argumento del primer parámetro por el segundo, el tercero es la cadena en la cual se realiza la operación
    echo str_repeat($cadena, 3); // <- Repite la cadena el número de veces indicado en el segundo argumento
    echo strtolower($cadena); // <- Transforma a lowercase
    echo strtoupper($cadena); // <- Transforma a uppercase
    echo ucfirst($cadena); // <- Transforma SOLO LA PRIMER LETRA a uppercase
    echo ucwords($cadena); // <- Transforma LA PRIMER LETRA de CADA PALABRA a uppercase
    echo lcfirst($cadena); // <- Transforma SOLO LA PRIMER LETRA a lowercase

    //Arrays unidimensionales -> VECTORES
    $arrayunidimensional = [10, "hola", 1.2, true]; // <- Se pueden almacenar distintos tipos de datos en un array (HORRIBLE)
    $arrayunidimensional[] = 17;
    echo $arrayunidimensional[4];

    //Arrays asociativos
    $asociativo = [
        'nombre' => "Maxi",
        'email' => "marquezmaxi122@gmail.com"
    ];
    echo $asociativo['nombre'];

    //Arrays bidimensionales -> MATRICES
    $matriz = [
        [1, 2, 3], // <- Cada fila es la dimensión 1, los elementos de adentro son la dimensión 2
        [4, 5, 6], // <- Cada fila es la dimensión 1, los elementos de adentro son la dimensión 2
        [7, 8, 9]  // <- Cada fila es la dimensión 1, los elementos de adentro son la dimensión 2
    ]; // <- Matriz de 3x3

    //Arrays multidimensionales asociativos
    $data = [
        [
            'nombre' => "Juan Perez",
            'email' => "juanperez12@gmail.com",
            'dni' => '45123755',
            'direccion' => [
                'pais' => 'Argentina',
                'provincia' => 'Buenos Aires',
                'ciudad' => 'Tapalque'
            ]
        ],

        [
            'nombre' => "Maria Rodriguez",
            'email' => "rodriguezmaria91@gmail.com",
            'dni' => '38998127'
        ],

        [
            'nombre' => "Alejandro Arévalo",
            'email' => "arevaloale44@gmail.com",
            'dni' => '34877946'
        ]
    ];

    foreach ($data as $item) {
        echo $item['nombre'];
        echo $item['email'];
        echo $item['dni'];
        if (array_key_exists('direccion', $item)){ // <- Verifica si la key o el índice existe
            foreach ($item['direccion'] as $key => $direccion_details){
                echo $direccion_details;
            }
        }
        else{
            echo "Dirección no especificada.";
        }
    }

    //Las siguientes anotaciones se harán en "sintaxis2.php", ya que este archivo está quedando muy spaguetti
?>