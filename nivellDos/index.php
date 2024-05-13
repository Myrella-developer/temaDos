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
                <h2>Tema II - Nivell 2- PHP Básico</h>
            </header>
            <section class="section">
                <div class="articles">
                    <div class="box-exercise2">
                        <h3>Ejercicio 1 if...else...</h3>
                        <?php
                            function llamadaTelefonica($duracionLlamada){
                                $duracionMin = 3;
                                $costoMin = 0.10;
                                $costoMax = 0.5;
                                

                                if($duracionLlamada <= $duracionMin){
                                    $costoTotal = $costoMin;
                                } else{
                                    $costoLlamada = ($duracionLlamada - $duracionMin) * $costoMax;
                                    $costoTotal = $costoMin + $costoLlamada;
                                    }
                                return $costoTotal.'€ por los '.$duracionLlamada.' minutos de llamada Telefónica';
                                
                            }
                        
                           echo 'El costo es: '.$totalPagar = llamadaTelefonica(7); 
                        ?>
                    </div>
                    <div class="box-exercise2">
                        <h3>Ejercicio 2 Tienda de Chuches </h3>
                        <?php
                            function anadirChocolate($cantChocolate){
                               return  $cantChocolate * 1;
                            }
                            $subtotal1 = anadirChocolate(2);

                            function anadirChicle($cantChicle){
                               return $cantChicle * 0.50;
                            }
                            $subtotal2 = anadirChicle(1);

                            function anadirCaramelos($cantCaramelos){
                                return $cantCaramelos * 1.5;
                             }
                            $subtotal3 = anadirCaramelos(1);
                            echo 'Total a pagar: '.$total = $subtotal1+$subtotal2+$subtotal3;
                        ?>
                    </div>
                        
                </div>
            </section>
            <footer class="footer">
                <p>&#169;Myrella Almeida - Curso FullStack PHP - IT ACADEMY</p>
            </footer>
        </div>       
    </body>
</html>