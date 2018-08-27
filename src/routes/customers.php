<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app=new \Slim\App;

//Get All Customer in customer tables
$app->get(
           '/api/customers',
            function(Request $req,Response $res)
            {
              $sql="select * from customers";
            
                $db=new db();  //get db object
                $db=$db->connect(); //db connect
                try
                {
                $stmt=$db->query($sql);
                $customers=$stmt->fetchAll(PDO::FETCH_OBJ);
                $db=null;
                echo json_encode($customers);
                }
                catch(PDOException $e)
               {
                 echo 'Check your query :'.$e->getMessage();
               }
              }
        );
//Get Single customer in customers table
$app->get(
  '/api/customer/{id}',
   function(Request $req,Response $res)
   {
     $id=$req->getAttribute('id');
     $sql="select * from customers where id=$id";
       $db=new db();  //get db object
       $db=$db->connect(); //db connect
       try
       {
       $stmt=$db->query($sql);
       $customer=$stmt->fetchAll(PDO::FETCH_OBJ);
       $db=null;
       echo json_encode($customer);
       }
       catch(PDOException $e)
      {
        echo 'Check your query :'.$e->getMessage();
      }
     }
);

//Post add data into customers tables
$app->post(
  '/api/customer/add',
   function(Request $req,Response $res)
   {
     $f_name=$req->getParam('f_name');
     $l_name=$req->getParam('l_name');
     $email=$req->getParam('email');

       $sql="INSERT INTO customers(f_name,l_name,email) values(:f_name,:l_name,:email)";
       $db=new db();  //get db object
       $db=$db->connect(); //db connect
       try
       {
         $stmt=$db->prepare($sql);
         
         $stmt->bindParam(':f_name',  $f_name);
         $stmt->bindParam(':l_name',  $l_name);
         $stmt->bindParam(':email',   $email);
         
         $stmt->execute();
         //$dn=null;
         echo '{"notice"{"text":"Customer added"}';
       }
       catch(PDOException $e)
       {
        echo 'Check your query :'.$e->getMessage();
       }
     }
);

//put use update customer in customer tables
$app->put(
  '/api/customer/update/{id}',
   function(Request $req,Response $res)
   {
     $id=$req->getAttribute('id');
     $f_name=$req->getParam('f_name');
     $l_name=$req->getParam('l_name');
     $email=$req->getParam('email');
     $sql="UPDATE customers SET 
                        f_name  = :f_name,
                        l_name  = :l_name,
                        email   = :email               
                  WHERE id=$id";
       $db=new db();  //get db object
       $db=$db->connect(); //db connect
       try
       {
          $stmt=$db->prepare($sql);
          
          $stmt->bindParam(':f_name',  $f_name);
          $stmt->bindParam(':l_name',  $l_name);
          $stmt->bindParam(':email',   $email);
          
          $stmt->execute();

          $db=null;
          echo '{"notice"{"text":"Customer updated"}';
        }
       catch(PDOException $e)
       {
        echo 'Check your query :'.$e->getMessage();
       }
     }
);


//delete data into table
$app->delete(
  '/api/customer/delete/{id}',
  
   function(Request $req,Response $res)
   {
     $id=$req->getAttribute('id');
       $sql="DELETE FROM customers WHERE id=$id";
       $db=new db();  //get db object
       $db=$db->connect(); //db connect
       try
       {
         $stmt=$db->prepare($sql);
         $stmt->execute();
         echo '{"notice"{"text":"Customer deleted"}';
       }
       catch(PDOException $e)
       {
        echo 'Check your query :'.$e->getMessage();
       }
     }
);

