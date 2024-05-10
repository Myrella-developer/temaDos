
<?php
    $number  = 10;
    $doub    = 9.10;
    $word    = 'palavra';
    $boolean = true;
    const NAME = "Myrella Almeida";
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
    echo "<h1>".NAME."</h1>"."<br>";
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
    echo 'El doble de las variable: $X es: '.($X*2)."<br>";
    echo 'El doble de las variable: $Y es: '.($Y*2)."<br>";
    echo 'El doble de las variable: $M es: '.($M*2)."<br>";
    echo 'El doble de las variable: $N es: '.($N*2)."<br>";
    echo "La suma de todas las variables es: ".($X+$Y+$M+$N)."<br>";
    echo "El producto de todas las variables es: ".($X*$Y*$M*$N)."<br>";
    echo "<h3>Calculadora con Funciones</h3>";
    function calculator ($n1, $n2, $operator) {

        switch($operator){
            case 'suma':
                return $n1 + $n2;
                break;
            case 'resta':
                return $n1 - $n2;
                break;
            case 'multiplicacion':
                return $n1 * $n2;
                break;
            case 'division':
                return $n1 / $n2;
                break;
        }

    }
    //ingresse dos valores:
    $num1 = 20;
    $num2 = 10;
    // ¿Que opracion deseas realizar?(suma, resta, multiplicacion, division)
    $operator = 'division';
    $total = calculator($num1,$num2,$operator);
    echo "La $operator de $num1 y $num2 es igual: $total";
   
    

   
?>   

