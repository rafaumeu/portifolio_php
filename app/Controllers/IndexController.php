<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\Models\Project;

class IndexController
{
    public function index()
    {
        $projetos = Project::all();

        view("index", ["projetos" => $projetos]);
    }
}
