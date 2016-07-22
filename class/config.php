<?php
class Connect{
    protected $connect;
            function __construct() {
       $server='localhost';
       $sql='root';
       $password='';
       $db='hospital _management';
       $this->connect=  mysqli_connect($server, $sql, $password, $db);
       if($this->connect){
           
       }  else {
           die('Your Database Not Connect!!!');    
       }
    }
}

?>
