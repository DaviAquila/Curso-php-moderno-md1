<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
        <?php 

            $valorusuario = $_GET['valor'] ?? 0;
            $cotacao = 5.27;

            $valorfinal = $valorusuario / $cotacao;

            //Jeito mais fácil 
            // echo "Seus R\$" . number_format($valorusuario, 2, "." , ",") . " equivalem a US\$" . number_format($valorfinal , 2, "." , ",");

            //Jeito certo com Formatação de moedas com internacionalização

            $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $valorusuario, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $valorfinal , "USD");

        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
</body>
</html>