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
            echo "O número escolhido foi $numero <br> <br>";
            $antecessor = $numero - 1; 
            echo "O seu antecessor é $antecessor <br> <br>";
            $sucessor = $numero + 1;
            echo "O seu sucessor é $sucessor <br> <br>";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
</body>
</html>