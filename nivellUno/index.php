<?php
    $number  = 10;
    $doub    = 9.10;
    $word    = 'palavra';
    $boolean = true;
    define("name","Myrella Almeida");
    $hello   = "Hello World!";
    $curso   = "Aquest és el curso de PHP";
    $X       = 5;
    $Y       = 10;
    $N       = 2.5;
    $M       = 7.5;

    echo '<h3> Ejercicio 1 - Create Variables </h3>';
    echo 'La variable $number es de tipo: '.gettype($number)." y tiene valor: $number"."<br>"; 
    echo 'La variable $doub es de tipo: '.gettype($doub)." y tiene valor: $doub"."<br>";
    echo 'La variable $word es de tipo: '.gettype($word)." y tiene valor: $word"."<br>";
    echo 'La variable $boolean es de tipo: '.gettype($boolean)." y tiene valor: $boolean"."<br>";
    echo "<h3>"."Ejercicio 1.2 - Create Constants"."</h3>";
    echo "<h1>".name."</h1>"."<br>";
    echo "<h3>"."Ejercicio 2 -  Modify String"."</h3>";
    echo strtoupper($hello)."<br>";
    echo 'La variable $hello tiene '.strlen($hello)." de longitud"."<br>";
    echo strrev($hello)."<br>";
    echo $hello." ".$curso."<br>";
    echo "<h3>"."Ejercicio 3 -  Operators PHP"."</h3>";
    echo 'La variable $X tiene valor: '.$X.' y La variable $Y tiene valor: '.$Y."<br>";
    echo 'La suma de $X + $Y es igual a: '.$X+$Y."<br>";
    echo 'La resta de $X - $Y es igual a: '.$X-$Y."<br>";
    echo 'El producto de $X * $Y es igual a: '.$X*$Y."<br>";
    echo 'El modulo de $X por $Y es igual a: '.$X%$Y."<br>";
    echo 'La variable $N tiene valor: '.$N.' y La variable $M tiene valor: '.$M."<br>";
    echo 'La suma de $N + $M es igual a: '.$N+$M."<br>";
    echo 'La resta de $N - $M es igual a: '.$N-$M."<br>";
    echo 'El producto de $N * $M es igual a: '.$N*$M."<br>";
    echo 'El modulo de $N por $M es igual a: '.$N%$M."<br>";
    
    

?>