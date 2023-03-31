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
        <h1>Conversor de moedas v2.0</h1>
    </header>
    <main>
        <?php 

            $valorusuario = $_GET['valor'] ?? 0;

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
~
            //Cotação vinda da API do banco central do Brasil 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

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