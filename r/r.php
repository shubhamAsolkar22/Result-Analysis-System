<?php 
session_start();
// you can change the following details as per your database configuration
$server = 'localhost'; // host for your database
$login = 'root'; // username for database
$password = ''; // paasword for database
$db = 'resultdb'; //database name
$tables = array("table name"); //table name
// establish database connection
$conn = mysql_connect($server, $login, $password, $db) or die(mysql_error());
mysql_select_db($db, $conn) or die(mysql_error($conn));
$filename = "Sample_".date("Y-m-d-h-i-s-A");
header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="'.$filename.'.xml"');
$text ='<?xml version="1.0" encoding="UTF-8"?
&lt;'.$db_name.'&gt;';
foreach($tables as $table){
$result = mysql_query("SELECT * FROM  `$table`");
$text .='
&lt;table_'.$table.'&gt;';
while($row=mysql_fetch_array($result)) {
$text .=  "
&lt;$table&gt;";
foreach($row as $key = &gt; $val){
if (!preg_match('#^d+$#', $key, $match)){
$text .=  "
&lt;$key&gt;$val";
}
}
$text .=  "
";
}
$text .= "
";
}
$text .= "
";
echo $text;
mysql_close($conn);
?&gt;
?>
