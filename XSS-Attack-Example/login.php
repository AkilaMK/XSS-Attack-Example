<?php
$Host= '127.0.0.1';
$Dbname= 'xssexample';
$User= 'root';
$Password= '';
$Schema = 'test';

$Conection_string="host=$Host port=90 dbname=$Dbname user=$User password=$Password";

/* Connect with database asking for a new connection*/
//$Connect=pg_connect($Conection_string,$PGSQL_CONNECT_FORCE_NEW);
$Connnect = mysql_connect("127.0.0.1",$User,$Password);

/* Error checking the connection string */
if (!$Connnect) {
 echo "Database Connection Failure";
 exit;
} else {
    echo "Database Connection success";
}

$query="SELECT user_name,password from $Dbname.$Schema where user_name='".$_POST['user_name']."';";

$result=mysql_query($query);
$row=mysql_fetch_array($result);

$user_pass = md5($_POST['pass_word']);
$user_name = $row['user_name'];

if(strcmp($user_pass,$row['password'])!=0) {
 echo "Login failed";
}
else {
 # Start the session
 session_start();
 $_SESSION['USER_NAME'] = $user_name;
 echo "<head> <meta http-equiv=\"Refresh\" content=\"0;url=home.php\" > </head>";
}

?>