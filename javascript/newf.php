<?php
$hn="localhost";
$un="root";
$password="";
$con=mysql_conect($hn,$un,$password);
if(!$con)
{die('could not connect:'.mysql_error());}
$dbName="test";
$db=mysql_select_db($dbName,$con)
