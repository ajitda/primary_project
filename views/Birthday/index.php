<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/15/17
 * Time: 8:21 PM
 */

include_once ("../../vendor/autoload.php");
use App\Birthday\BirthDay;

$obj = new BirthDay();

$obj->index();
