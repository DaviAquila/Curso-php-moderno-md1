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
            $valorusuario = $_GET['valor'];
            $cotacao = 5.27;

            $valorfinal = $valorusuario / $cotacao;

            echo ("Seus R$ $valorusuario equivalem a US$") . number_format($valorfinal,2,",",".");

        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
</body>
</html>