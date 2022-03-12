<!DOCTYPE html>

<html lang="en">

        <head>

                <meta charset="UTF-8">

                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <meta name="description" content="standard HTML template">

                <title>basic OOP</title>

                <meta name="author" content="Matheu">

                <meta name="theme-color" content="#4285f4"/>

                <link rel="stylesheet" href="style/index.css"/>

        </head>

        <body style="background: gray;">

                <pre>

                <?php

                        require_once "01-poo.php";

                        $c1 = new Caneta;

                        $c1->cor="blue";

                        $c1->tip=3.6;

                        $c1->charge=50;

                        $c1->capped=True;

                        $c1->model="factory castle";

                        $c1->uncapped();

                        print_r($c1);

                        $p = $c1->scribble();

                        echo $p;

                        $a = $c1->scribble();

                        echo $a;

                ?>

                </pre>

        </body>

</html>
