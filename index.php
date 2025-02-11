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
    $projeto = "Meu Portifolio";
    $finalizado = false;
    $dataDoProjeto = "2025-11-02";
    $descricao = "Este é o meu portfólio, onde você pode ver todos os meus projetos e minhas habilidades.";
    $projetos = [
        [
            "title" => "Meu Portifolio",
            "finalizado" => false,
            "data" => "2025-11-02",
            "descricao" => "Este é o meu portfólio, onde você pode ver todos os meus projetos e minhas habilidades.",
        ],
        [
            "title" => "Lista de Tarefas",
            "finalizado" => false,
            "data" => "2025-11-02",
            "descricao" => "Este é o meu portfólio, onde você pode ver todos os meus projetos e minhas habilidades.",
        ],
        [
            "title" => "Controle de Leitura de",
            "finalizado" => false,
            "data" => "2025-11-02",
            "descricao" => "Este é o meu portfólio, onde você pode ver todos os meus projetos e minhas habilidades.",
        ]
    ];
    function verifyIfProjectIsFinalized($projeto)
    {
        if ($projeto["finalizado"]) {
            echo '<span style="color: green;">
                ✅ finalizado
            </span>';
        } else {
            echo '<span style="color: red;">
                ⛔ em andamento
            </span>';
        }
    }
    ?>
    <h1><?= $titulo; ?></h1>
    <p><?= $subtitulo; ?></p>
    <p><?= $ano; ?></p>
    <hr />
    <ul>
        <?php foreach ($projetos as $projeto): ?>
            <div <?php if ((2025 - $ano) > 2): ?>
                style="background-color: burlywood;"
                <?php endif; ?>>


                <h2><?= $projeto["title"]; ?></h2>
                <p><?= $projeto["descricao"]; ?></p>
                <div>
                    <p><?= $projeto["finalizado"]; ?></p>
                    <div>Projeto:

                        <?php verifyIfProjectIsFinalized($projeto); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>


</body>

</html>