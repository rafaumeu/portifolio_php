<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
</head>

<body>
    <?php
    $name = "Rafael";
    $greeting = "Oi";
    $title = $greeting . " Portifólio do " . $name;
    $subtitle = "Seja bem-vindo ao meu portfólio!";
    $year = date("Y");
    $project = "Meu Portifolio";
    $finished = false;
    $projectDate = "2025-11-02";
    $description = "Este é o meu portfólio, onde você pode ver todos os meus projetos e minhas habilidades.";
    $projects = [
        [
            "title" => "Meu Portifolio",
            "finished" => false,
            "year" => 2024,
            "description" => "Portfolio pessoal desenvolvido em PHP para mostrar meus projetos e experiência profissional.",
        ],
        [
            "title" => "Lista de Tarefas",
            "finished" => false,
            "year" => 2024,
            "description" => "Aplicativo de gerenciamento de tarefas com recursos de categorização, priorização e lembretes.",
        ],
        [
            "title" => "Controle de Leitura de",
            "finished" => false,
            "year" => 2024,
            "description" => "Sistema para acompanhamento de leituras com registro de livros, progresso e anotações pessoais.",
        ],
        [
            "title" => "API REST",
            "finished" => true,
            "year" => 2023,
            "description" => "Desenvolvimento de uma API REST completa com autenticação JWT e documentação Swagger."
        ],
        [
            "title" => "E-commerce",
            "finished" => false,
            "year" => 2024,
            "description" => "Plataforma de e-commerce com sistema de pagamentos integrado, carrinho de compras e área administrativa."
        ],
        [
            "title" => "Sistema de Gestão",
            "finished" => true,
            "year" => 2023,
            "description" => "Sistema para gestão empresarial com controle de estoque, financeiro e relatórios."
        ]
    ];
    $books = [
        [
            "title" => "O Senhor dos Anéis",
            "author" => "J.R.R. Tolkien",
            "year" => 1954,
            "read" => true
        ],
        [
            "title" => "Cem Anos de Solidão",
            "author" => "Gabriel García Márquez",
            "year" => 1967,
            "read" => false
        ],
        [
            "title" => "Dom Quixote",
            "author" => "Miguel de Cervantes",
            "year" => 1605,
            "read" => true
        ],
        [
            "title" => "1984",
            "author" => "George Orwell",
            "year" => 1949,
            "read" => false
        ],
        [
            "title" => "O Pequeno Príncipe",
            "author" => "Antoine de Saint-Exupéry",
            "year" => 1943,
            "read" => true
        ]
    ];
    function verifyIfProjectIsFinalized($project)
    {
        if ($project["finished"]) {
            echo '<span style="color: green;">
                ✅ finalizado
            </span>';
        } else {
            echo '<span style="color: red;">
                ⛔ em andamento
            </span>';
        }
    }

    $projects = array_filter($projects, function ($projects) {
        return $projects["year"] >= 2024 || $projects["year"] === 2023;
    });
    $books = array_filter($books, function ($books) {
        return $books["read"] === true;
    });
    ?>
    <h1><?= $title; ?></h1>
    <p><?= $subtitle; ?></p>
    <p><?= $year; ?></p>
    <hr />
    <ul>
        <?php foreach ($projects as $project): ?>
            <div <?php if ((2025 - $year) > 2): ?>
                style="background-color: burlywood;"
                <?php endif; ?>>


                <h2><?= $project["title"]; ?></h2>
                <p><?= $project["description"]; ?></p>
                <div>
                    <div>Projeto:

                        <?php verifyIfProjectIsFinalized($project); ?>

                    </div>
                    <p><?= $project["year"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>
    <hr />
    <h2>Livros</h2>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= $book["title"]; ?> - <?= $book["author"]; ?> - <?= $book["year"]; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>