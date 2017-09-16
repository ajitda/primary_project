<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/10/17
 * Time: 8:25 PM
 */
namespace App\Birthday;
use App\Database\Database as DB;
class BirthDay extends DB
{
    public function __construct()
    {
        //new DB;
        DB::__construct();

    }

    public function index(){
        echo "I am from Birthday Class";
    }
}