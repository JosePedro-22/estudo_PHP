<html>
    <head>
        <meta charset="UTF-8" />
        <title>echo_print_file</title> 
    </head>
    <body>
        <?php

        /*
            echo > print
            '' > ""
            > (+ rapido)
        */
            //variaveis
            $nome = 'José Pedro';
            $Idade = 29;
            $peso = 82.5;

            $fumante_sn = true;

            //variaveis mudanca
            $Idade = 30;
            $Idade = '35';


            //concatenacao 
            echo'meu nome é '. $nome . ' e sou estgiario na seati';

            echo '<br/>';

            echo "eu  $nome estou de boa";
        ?>

        <h1> Ficha cadastral </h1>
        <br/>
        <p>Nome : <?= $nome?></p>
        <p>Idade : <?= $Idade?></p>
        <p>Peso : <?= $peso?></p>
        <p>Fumante : <?= $fumante_sn?></p>



    <body>    
</html>