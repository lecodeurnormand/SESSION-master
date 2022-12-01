<?php
namespace App\Controllers;
ini_set('display_errors', 1);
error_reporting(E_ALL);

abstract class Controller{
    
    public function render(string $path, array $data =[])
    {
        extract($data);
        ob_start();
        include dirname(__DIR__).'/Views/'.$path.'.php';
        $content = ob_get_clean();
        include dirname(__DIR__).'/Views/base.php';
    }

}