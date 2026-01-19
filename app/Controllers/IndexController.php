<?php

declare(strict_types = 1);

namespace App\Controllers;

use Core\Database;

class IndexController
{
    public function index()
    {
        $config   = require base_path('config/config.php');
        $db       = new Database($config['database']);
        $projetos = $db->query("select * from projects")->fetchAll();

        require base_path("views/index.view.php");
    }
}
