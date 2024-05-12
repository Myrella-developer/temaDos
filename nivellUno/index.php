<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tema Dos PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <header class="header">
                <h2>Tema II - PHP Básico</h>
            </header>
            <section class="section">
                <div class="articles">
                    <div class="box-exercise2">
                        <h3>Ejercicio 1 - Variables</h3>
                        <?php
                            $number  = 10;
                            $doub    = 9.10;
                            $word    = 'palavra';
                            $boolean = true;
                            echo '<table class="content-table">
                                <thead>
                                    <tr>
                                        <th>Variable</th> <th>Tipo</th> <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td>'.'$number'."</td>
                                        <td>".gettype($number)."</td>
                                        <td>$number</td>
                                    </tr> 
                                    <tr>
                                        <td>".'$doub'."</td>
                                        <td>".gettype($doub)."</td>
                                        <td>$doub</td>
                                    </tr> 
                                    <tr> 
                                        <td>".'$word'."</td>
                                        <td>".gettype($word)."</td>
                                        <td>$word</td>
                                    </tr> 
                                    <tr>
                                        <td>".'$boolean'."</td>
                                        <td>".gettype($boolean)."</td>
                                        <td>$boolean</td>
                                    </tr>
                                </tbody>
                            </table>";
                        ?>
                    </div>
                    <div class="box-exercise2">
                        <h3>Ejercicio 1.2 - Constantes</h3>
                        <?php
                            const NAME = "Myrella Almeida";
                            echo '<h1 class="titulo">'.NAME.'</h1><br>';
                        ?>
                    </div>
                    <div class="box-exercise2">
                        <h3>Ejercicio 2 - String</h3>
                        <?php
                            $hello   = "Hello World!";
                            $curso   = "Aquest és el curso de PHP";
                            echo strtoupper($hello)."<br>";
                            echo 'La variable $hello tiene '.strlen($hello)." de longitud"."<br>";
                            echo strrev($hello)."<br>";
                            echo $hello." ".$curso."<br>";
                        ?>
                    </div>
                    <div class="box-exercise2">
                        <h3>Ejercicio 3 - Operadores</h3>
                        <?php
                            $X       = 5;
                            $Y       = 10;
                            $N       = 2.5;
                            $M       = 7.5;

                            echo '<p>Valor de las Varaiables: $X = '.$X.' $Y = '.$Y."</p><br>";
                            echo '<table class="content-table">
                                <thead>
                                    <tr>
                                        <th>Operaccion</th><th>Variables</th><th>Resultado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Suma</td>
                                        <td>'.'$X + $Y'."</td>
                                        <td>".$X+$Y."</td>
                                    </tr> 
                                    <tr>
                                        <td>Resta</td>
                                        <td>".'$X - $Y'."</td>
                                        <td>".$X-$Y."</td>
                                    </tr> 
                                    <tr> 
                                        <td>Multiplicación</td>
                                        <td>".'$X x $Y'."</td>
                                        <td>".$X*$Y."</td>
                                    </tr>  
                                    <tr> 
                                        <td>Modulo</td>
                                        <td>".'$X % $Y'."</td>
                                        <td>".$X%$Y."</td>
                                    </tr> 
                                </tbody>
                            </table>";
                            echo '<p>Valor de las Varaiables: $X = '.$N.' $Y = '.$M."</p><br>";
                            echo '<table class="content-table">
                                <thead>
                                    <tr>
                                        <th>Operaccion</th><th>Variables</th><th>Resultado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> 
                                        <td>Suma</td>
                                        <td>'.'$N + $M'."</td>
                                        <td>".$N+$M."</td>
                                    </tr> 
                                    <tr> 
                                        <td>Resta</td>
                                        <td>".'$N - $M'."</td>
                                        <td>".$N-$M."</td>
                                    </tr> 
                                    <tr> 
                                        <td>Multiplicación</td>
                                        <td>".'$N x $M'."</td>
                                        <td>".$N*$M."</td>
                                    </tr>  
                                    <tr> 
                                        <td>Modulo</td>
                                        <td>".'$N % $M'."</td>
                                        <td>".$N%$M."</td>
                                    </tr> 
                                </tbody>
                            </table>";
                            echo '<table class="content-table">
                                <thead>
                                    <tr>
                                        <th>Variable</th><th>Doble</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> 
                                        <td>$X</td>
                                        <td>'.($X*2).'</td>
                                    </tr>
                                    <tr> 
                                        <td>$Y</td>
                                        <td>'.($Y*2).'</td>
                                    </tr>
                                    <tr> 
                                        <td>$N</td>
                                        <td>'.($N*2).'</td>
                                    </tr> 
                                    <tr>
                                        <td>$M</td>
                                        <td>'.($M*2).'</td>
                                    </tr>
                                </tbody>     
                                <tfoot>
                                    <tr>
                                        <th>Suma total</th>
                                        <td>'.($X+$Y+$N+$M).'</td>
                                    </tr>
                                    <tr>
                                        <th>Producto total</th>
                                        <td>'.($X*$Y*$N*$M).'</td>
                                    </tr>
                                </tfoot>
                            </table>';    
                        ?>
                    </div>
                    <div class="box-exercise2">
                        <h3>Ejercicio 3.b - Calculadora con Funciones</h3>
                        <?php
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
                            echo "<p>La $operator de $num1 y $num2 es igual: $total</p>";
                        ?>
                    </div> 
                    <div class="box-exercise2">
                        <h3>Ejercicio 4 - Función con Bucle For</h3>
                        <?php
                            function imprimirNumeros($number = 10, $contador = 1){
                                echo 'Imprimindo los numeros de '.$contador.' en '.$contador.' --> ';
                                for ($i = 0; $i <= $number; $i+= $contador){
                                    print $i.' ';
                                }
                            }
                            $resultado = imprimirNumeros(35,7);
                           
                        ?>
                    </div>
                    <div class="box-exercise2">
                        <h3>Ejercicio 5 - Función con Condicional</h3>
                        <?php
                            function calculaNotaAlumno($nota) {
                                if($nota >= 60){
                                    print "Alumno obtuve $nota% --> Grado de primera División<br>";
                                } else if($nota >= 45 && $nota <= 59){
                                    print "Alumno obtuve $nota% --> Grado de segunda División<br>";
                                } else if($nota >= 33 && $nota <= 44) {
                                    print "Alumno obtuve $nota% --> Grado de tercera División<br>";
                                }else{
                                    print "Alumno obtuve $nota% --> Reprovado<br>";
                                }
                            }
                            $gradoAlumno = calculaNotaAlumno(80);   
                        ?>
                    </div>
                    <div class="box-exercise2">
                        <h3>Ejercicio 6 - Usando Rand()</h3>
                        <?php
                            function isBitten(){
                                $numAleatorio = rand(0,1);
                            
                                if($numAleatorio == 1){
                                    echo "Soy $numAleatorio  --> ¡Charlie me mordió el dedo!";
                                }else{
                                    echo "Soy $numAleatorio --> ¡Charlie no me mordió!";
                                }
                            }
                            $jugamos = isBitten();
                        ?>        
                    </div>
                </div>
            </section>
            <footer class="footer">
                <p>Myrella Almeida - Curso FullStack PHP - IT ACADEMY</p>
            </footer>
        </div>       
    </body>
</html>