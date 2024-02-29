<?php
// Fibonacci
function Suma($n){
    $num1 = 0;
    $num2 = 1;

    echo $num1 . "<br>"; // Imprimir el primer número en la secuencia

    for ($i = 1; $i < $n; $i++){
        $suma = $num1 + $num2;
        echo $suma . "<br>";

        // Actualizar los valores para la próxima iteración
        $num1 = $num2;
        $num2 = $suma;
    }
}

Suma(10); // Puedes cambiar el argumento para generar una secuencia de Fibonacci de la longitud deseada
?>