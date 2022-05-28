<?php
//Mostrar la tabla de multiplicar del 3, utilizando un do -  while (Hasta el numero 20).
//Se debe mostrar al similar a lo siguiente.
//3 * 1 = 3
//3 * 2 = 6
//3 * 3 = 9

$i = 1;
do {
    $resultado = 1;

    echo '3*' . $i . '= ' . $resultado = 3 * $i . '<br>';
    $i++;
} while ($i <= 20);
