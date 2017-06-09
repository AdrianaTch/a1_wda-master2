<?php
/**
 * Created by PhpStorm.
 * User: tobyling
 * Date: 8/06/2017
 * Time: 5:58 PM
 */

// Loads all classes
    function __autoload($class){
        require_once( $class.".php");
    }

//Tests if test_file can read Test class
    $testObj = new Test();
    $testObj ->testGreeting();
// Loads all classes

function __autoload($class){
    require_once( $class.".php");
}

//Tests if test_file can read Test class
$testObj = new Test();
$testObj ->testGreeting();