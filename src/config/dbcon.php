<?php
  class db{
           private $dbhost='localhost';
           private $dbuser='root';
           private $dbpass='';
           private $dbname='testapi';
           public function connect()
           {
               $mysql_conn_string="mysql:host=$this->dbhost;dbname=$this->dbname";
               try{
                    $dbConnection=new PDO($mysql_conn_string,$this->dbuser,$this->dbpass);
                    $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);               
                    return $dbConnection;  
                }
                  catch(PDOException $e)
                  {
                      echo 'Connection faild: '.$e->getMessage();
                  }
           }

          }


?>