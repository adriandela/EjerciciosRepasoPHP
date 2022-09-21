<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <?php
        $frase = "Ya decidí que esta noche se sale con todas mis motomami";
        echo $frase;
        //uso la funcion strlen la cual me devuelve la longtud de una cadena de texto --> strlen("cadena de texto")
        echo "<br> tamaño: " . strlen($frase) . "<br>";
        //utilizo la funcion str_replace para remplazar un caracter de una cadena de texto por otra --> str_replace("caracter a remplazar, caracter por el que remplazo, cadena de texto que quiero modificar")
        $frase2 = str_replace(" ", "", $frase);
        echo "<br>" . $frase2;
        echo "<br>tamaño: " . strlen($frase2);
        ?>
    </body>
</html>
