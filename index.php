<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
</head>
<body>
    <?php
     $nome = "Rafael";
     $saudacao = "Oi";
     $titulo = $saudacao . " Portifólio do " . $nome;
     $subtitulo = "Seja bem-vindo ao meu portfólio!";
     $ano = date("Y");
    ?>
    <h1><?=$titulo; ?></h1>
    <p><?=$subtitulo; ?></p>
    <p><?=$ano; ?></p>
    
</body>
</html>
