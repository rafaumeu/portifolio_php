<?php

declare(strict_types = 1);

require __DIR__ . '/vendor/autoload.php';
use Core\Database;

$config = require base_path('config/config.php');
$db     = new Database($config['database']);

$db->query("create table projects (
  id integer primary key autoincrement,
  title text not null,
  description text,
  image text,
  stack text,
  year integer,
  finished integer
)");

$projetos = [

    [
        "titulo"     => "Meu Portfolio",
        "finalizado" => false,
        "ano"        => 2021,
        "descricao"  => "Meu primeiro Portfolio. Escrito em PHP e HTML.",
        "stack"      => ["PHP", "HTML", "CSS", "JS"],
        "img"        => 'img/portfolio.png',
    ],
    [
        "titulo"     => "Lista de Tarefas",
        "finalizado" => true,
        "ano"        => 2022,
        "descricao"  => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack"      => ["PHP", "HTML", "CSS", "JS"],
        "img"        => '',
    ],
    [
        "titulo"     => "Controle de Leitura de Vídeos",
        "finalizado" => true,
        "ano"        => 2024,
        "descricao"  => "Lista de Livros. Escrito em PHP e HTML.",
        "stack"      => ["PHP", "HTML", "CSS", "JS"],
        "img"        => '',
    ],
    [
        "titulo"     => "Mais um Projeto",
        "finalizado" => false,
        "ano"        => 2025,
        "descricao"  => "Projeto secreto em andamento. Escrito em PHP e HTML.",
        "stack"      => ["PHP", "HTML", "CSS", "JS"],
        "img"        => '',
    ],
];

foreach ($projetos as $projeto) {
    $db->query("insert into projects (title, description, image, stack, year, finished) values (?, ?, ?, ?, ?, ?)", [
        $projeto['titulo'],
        $projeto['descricao'],
        $projeto['img'],
        implode(',', $projeto['stack']),
        $projeto['ano'],
        $projeto['finalizado'],
    ]);
}
echo "Projetos migrados com sucesso! 🚀";
