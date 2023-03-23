
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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            $numero2 = $_GET["numero2"];
            echo "Gerando um número aleatório entre $numero e $numero2 <br> <br>";
            $numeroaleatorio = rand($numero, $numero2);
            //random_int() gera números aleatórios criptograficamente seguros
            echo "O valor gerado foi $numeroaleatorio"; 
        ?>
        <button onclick="javascript:document.location.reload()"> &#x1F504; Gerar outro</button>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
</body>
</html>