<html>
    <head>
        <meta charset="UTF-8" />
        <title>APRENDENDO PHP</title>
    </head>
    <body>
        <?php
            function BoasVindas(){
                echo 'Bem-vindp ao curso de PHP';
            }

            function CalculoAreaTerreno($largura, $comprimento){
                $area = $largura*$comprimento;
                return $area;
            }

            echo CalculoAreaTerreno(30,50);
        ?>
        <br />






    </body>
</html>
