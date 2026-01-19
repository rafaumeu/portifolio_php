<?php 
namespace App\Controllers;

class IndexController
{
    public function index()
    {
        require base_path("views/index.view.php");
    }
}