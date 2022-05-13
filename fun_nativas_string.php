<html>
    <head>
        <meta charset="UTF-8" />
        <title>APRENDENDO PHP</title>
    </head>
    <body>
        <?php
            $texto = 'Oi, tudo blz! estou aprendendo PHP';


            echo strtolower($texto);
            echo '<br/>';
            echo strtoupper($texto);
            echo '<br/>';
            echo ucfirst($texto);
            echo '<br/>';
            echo strlen($texto);
            echo '<br/>';
            echo str_replace('php','javascript',$texto);
            echo '<br/>';
            echo substr($texto,1,10);
            echo '<br/>';
        ?>




    </body>
</html>
