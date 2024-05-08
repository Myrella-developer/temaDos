<?php
    $number = 10;
    $doub   = 9.10;
    $word   = 'palavra';
    $boolean    = true;
    define("name","Myrella Almeida");

    echo "<h3>"."Ejercicio 1 - Creando Variables"."</h3>";
    echo 'La variable $number es de tipo: '.gettype($number)." y tiene valor: $number"."<br>"; 
    echo 'La variable $doub es de tipo: '.gettype($doub)." y tiene valor: $doub"."<br>";
    echo 'La variable $word es de tipo: '.gettype($word)." y tiene valor: $word"."<br>";
    echo 'La variable $boolean es de tipo: '.gettype($boolean)." y tiene valor: $boolean"."<br>";
    echo "<h3>"."Ejercicio 2 - Creando una Constante"."</h3>";
    echo "<h1>".name."</h1>";
?>