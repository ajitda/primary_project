<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/10/17
 * Time: 8:26 PM
 */
namespace App\Database;
use PDO;
use PDOException;
class Database
{
    public $host = "localhost";
    public $db_name = "primary";
    public $db_user = "root";
    public $db_pass = "";
    public $dbh;

    public function __construct()
    {
        try{
//            new PDO("mysql:host='loclhost';dbname='primary'", "root", "");
           $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->db_user, $this->db_pass );
            echo "database Connected successfully";
        }catch (PDOException $e){
            echo $e->getMessage();
        }

    }


}