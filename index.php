<?php 
    header("Content-type:text/html;charset=utf-8");
    include  "C:/phpStudy/PHPTutorial/WWW/mailscript/vendor/autoload.php";
    if (empty($argv[1])||empty($argv[2])) {
        echo "输入参数";
        die;
    }
    $c = $argv[1];
    $m = $argv[2];
    
    spl_autoload_register(function ($class_name) {
        require_once "C:/phpStudy/PHPTutorial/WWW/mailscript/controller/{$class_name}.class.php";
    });
    
    // function __autoload($name) {
    //     include "./controller/{$name}.class.php";
    // }
    
    session_start();
    (new $c)->$m();


    