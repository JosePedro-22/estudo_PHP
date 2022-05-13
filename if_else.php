<html>
    <head>
        <meta charset="UTF-8" />
        <title>if_else</title> 
    </head>
    <body>
        <?php
        /**
         * ==
         * ===
         * != ou <>
         * !==
         * <
         * >
         * <=
         * >=
         * 
         * AND ou && => e 
         * || => ou 
         * XOR => ou negativo
         * ! => inverte a saida(resultado) 
         * 
         *  () estabelecer precedencia => php ira dar preferencia para os parenteses mais internos 
         *   if(2==2){
         *      echo'Verdadeiro';
         *  }else {
         *      echo 'Falso';
         *  }

         *  if(2==2){
         *      echo'Verdadeiro';
         *  }else {
         *      echo 'Falso';
         *  }
        */
        $possui_cartao_loja = true;
        $usuario_possui_cartao_loja = true;
        $valor_compra = 500;

        $valor_frete = 50;

        $recebeu_desconto = true;

        if($usuario_possui_cartao_loja == true && $valor_compra >= 200 && $possui_cartao_loja == true){
            $valor_frete = 0;
        }else if($usuario_possui_cartao_loja = true || $valor_compra > 100 && $valor_compra <200 && $possui_cartao_loja == true){
            $valor_frete = 25;
        }else{
            $recebeu_desconto =false;
        }
        ?>

            <h1>Detalhes da Compra</h1>
            <br />
            <p>Possui cartao da loja ?
                <?php
                    if($possui_cartao_loja){
                        echo 'SIM';
                    }
                    else{
                        echo 'NAO';
                    }
                ?>
            </p>
            <br/>
            <p>Valor da Compra 
                <?= $valor_compra?>
            </p>
            <br/>
            <p>Valor frete 
                <?= $valor_frete?>
            </p>
            <br/>
    <body>    
</html>