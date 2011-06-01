<?php
class DataBase {

//private static $dsn = "mysql:host=10.223.18.85;dbname=polls";
//private static $username = "polls";
//private static $passwd = "polls";

private static $dsn = "mysql:host=173.201.88.132;dbname=mcadmin123afk";
private static $username = "mcadmin123afk";
private static $passwd = "CDqdb082088495";

private static $instance = NULL;

private function __construct() {}

/**
*
* Invoke this method before invoking getInstance to configure the db parameters.
* When invoked after the getInstance call this function has no effect.
* @param unknown_type $_dns
* @param unknown_type $_user
* @param unknown_type $_pwd
*/
public static function configureInstance($_dns,$_user,$_pwd)
{
if(!self::$instance)
{
self::$dsn = $_dns;
self::$username = $_user;
self::$passwd = $_pwd;
}
}

public static function getInstance() {
if(!self::$instance)
{
self::$instance = new PDO(self::$dsn, self::$username, self::$passwd);
self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
return self::$instance;
}
}
?>
