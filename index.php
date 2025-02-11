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
            "data" => "2024-06-30",
            "descricao" => "Portfolio pessoal desenvolvido em PHP para mostrar meus projetos e experiência profissional.",
        ],
        [
            "title" => "Lista de Tarefas",
            "finalizado" => false,
            "data" => "2024-08-15",
            "descricao" => "Aplicativo de gerenciamento de tarefas com recursos de categorização, priorização e lembretes.",
        ],
        [
            "title" => "Controle de Leitura de",
            "finalizado" => false,
            "data" => "2024-10-01",
            "descricao" => "Sistema para acompanhamento de leituras com registro de livros, progresso e anotações pessoais.",
        ],
        [
            "title" => "API REST",
            "finalizado" => true,
            "data" => "2023-08-15",
            "descricao" => "Desenvolvimento de uma API REST completa com autenticação JWT e documentação Swagger."
        ],
        [
            "title" => "E-commerce",
            "finalizado" => false,
            "data" => "2024-03-20",
            "descricao" => "Plataforma de e-commerce com sistema de pagamentos integrado, carrinho de compras e área administrativa."
        ],
        [
            "title" => "Sistema de Gestão",
            "finalizado" => true,
            "data" => "2023-12-10",
            "descricao" => "Sistema para gestão empresarial com controle de estoque, financeiro e relatórios."
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
    function filterProjectsFinalized($projectList, $finalizado = null)
    {
        if (is_null($finalizado)) {
            return $projectList;
        }
        $filteredProjects = [];
        foreach ($projectList as $projeto) {
            if ($projeto["finalizado"] == $finalizado) {
                $filteredProjects[] = $projeto;
            }
        }
        return $filteredProjects;
    }
    ?>
    <h1><?= $titulo; ?></h1>
    <p><?= $subtitulo; ?></p>
    <p><?= $ano; ?></p>
    <hr />
    <ul>
        <?php foreach (filterProjectsFinalized($projetos, false) as $projeto): ?>
            <div <?php if ((2025 - $ano) > 2): ?>
                style="background-color: burlywood;"
                <?php endif; ?>>


                <h2><?= $projeto["title"]; ?></h2>
                <p><?= $projeto["descricao"]; ?></p>
                <div>
                    <div>Projeto:

                        <?php verifyIfProjectIsFinalized($projeto); ?>

                    </div>
                    <p><?= $projeto["data"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>


</body>

</html>