<?php
/**
 * Created by PhpStorm.
 * User: Jens Mollen
 * Date: 5/23/2016
 * Time: 12:47 PM
 */
class Db
{
    private static $conn;
    public static function getInstance(){
        if( is_null( self::$conn ) ){
            self::$conn = new PDO('mysql:host=localhost;dbname=diw', "root", "");
        }
        return self::$conn;
    }
}
?>