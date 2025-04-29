<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use App\Router;



// if(isset($_GET['page']) && $_GET['page'] === "1"){
       
//        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
//        $get = $_GET;
//        unset($get['page']);
       
//        $query = http_build_query($get);
//        if(!empty($get)) $uri .= "?" . $query;
       
//        header('location: ' . $uri);
//        http_response_code(301);
//        exit();
        
       
// }

$router = new Router(dirname(__DIR__). "/pages");

$router->get('/', 'home', 'home')
       ->get('/blog', 'blog', 'blog')
       ->match('/contact', 'contact', 'contact')
       ->get('/about', 'about', 'about')
       ->run(); 





