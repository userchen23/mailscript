<?php 
    header("Content-type:text/html;charset=utf-8");
    include  "C:/phpStudy/PHPTutorial/WWW/mailscript/vendor/autoload.php";
    $c = isset($_GET['c']) ? $_GET['c'] : "test";
    $m = isset($_GET['m']) ? $_GET['m'] : "sendMail";
    

    spl_autoload_register(function ($class_name) {
        require_once "C:/phpStudy/PHPTutorial/WWW/mailscript/controller/{$class_name}.class.php";
    });
    
    // function __autoload($name) {
    //     include "./controller/{$name}.class.php";
    // }
    
    session_start();
    (new $c)->$m();


    