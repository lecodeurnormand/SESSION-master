<?php
namespace App\Controllers;
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

class HomeController extends Controller{

    public function index()
    {
        if(empty($_SESSION['username'])){
            $this->render('login');
        }
       else{
            $this->render('index');
        }
    }
}