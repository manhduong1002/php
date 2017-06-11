<?php
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'success');
define('USERNAME_API', 'manhduong1994');
define('PASSWORD_API', 'anhyeuem#khanhpham#!@#$');

class DAO {
    function __construct(){
        $connection = @mysql_connect(SERVER, USERNAME, PASSWORD) or die('Connection error -> ' . mysql_error());
        mysql_select_db(DATABASE, $connection) or die('Database error -> ' . mysql_error());
		mysql_query("SET NAMES 'UTF8'");
    }
}
?>