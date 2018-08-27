<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require '../vendor/autoload.php';

//connection 
require '../src/config/dbcon.php';




$app=new \Slim\App;
$app->get(
         '/hello/{name}',
         function(Request $req,Response $res,array $arr)
         {
           $name=$arr['name'];
           $res->getBody()->write("Hello,$name");
           return $res;    
         });



//Customer routes
require '../src/routes/customers.php';

$app->run();         





