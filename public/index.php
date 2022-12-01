<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
use App\Autoloader;
use App\Core\Router;
include '/Applications/MAMP/htdocs/SESSION-master/Autoloader.php';
Autoloader::register();
$route = new Router();
$route->routes();

class Dispatcher{
    public function dispatch(){
        $controller = (isset($_GET['controller']))?$_GET['controller']:"Home";
        $controller = $controller."Controller";
        $action = (isset($_GET['action']))?$_GET['action']:"accueil";
        $action = (isset($_GET['action']))?$_GET['action']:"login";
        $action = (isset($_GET['action']))?$_GET['action']:"creation";
        $action = (isset($_GET['action']))?$_GET['action']:"membre";
        $action = (isset($_GET['action']))?$_GET['action']:"update";
        $action = (isset($_GET['action']))?$_GET['action']:"chat";
        $action = (isset($_GET['action']))?$_GET['action']:"delete";
        $action = $action."Action";
        $my_controller = new $controller();
        $my_controller->$action();
    }
}
?>
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
