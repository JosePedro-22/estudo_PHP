<html>
    <head>
        <meta charset="UTF-8" />
        <title>APRENDENDO PHP</title>
    </head>
    <body>

        <?php
        $valor = 10;
        $valor2 = (float) $valor;
        /**
         * float
         * string
         * int ou integer
         * double
         * boolean ou bool
         */
        echo $valor . ' ' .gettype($valor);
        echo '<br/>';
        echo $valor2 .' '. gettype($valor2); 
        ?>



    </body>
</html>
