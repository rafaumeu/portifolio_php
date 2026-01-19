<?php

declare(strict_types = 1);

namespace App\Models;

use Core\App;
use Core\Database;

class Project
{
    public $id;

    public $title;

    public $description;

    public $finished;

    public $year;

    public $image;

    public $stack;

    public static function all()
    {
        $db = App::resolve(Database::class);

        return $db->query("select * from projects")->fetchAll();
    }
}
