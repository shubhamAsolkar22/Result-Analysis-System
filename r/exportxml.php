<?php
//database configuration
$config['mysql_host'] = "localhost";
$config['mysql_user'] = "root";
$config['mysql_pass'] = "";
$config['db_name']    = "resultdb";
$config['table_name'] = "users";
 
//connect to host
mysql_connect($config['mysql_host'],$config['mysql_user'],$config['mysql_pass']);
//select database
@mysql_select_db($config['db_name']) or die( "Unable to select database");
$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$root_element = $config['table_name']."s"; //fruits
$xml         .= "<$root_element>\n";
//select all items in table
$sql = "SELECT * FROM ".$config['table_name'];
 
$result = mysql_query($sql);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
 
if(mysql_num_rows($result)>0)
{
   while($result_array = mysql_fetch_assoc($result))
   {
      $xml .= "<".$config['table_name'].">\n";
 
      //loop through each key,value pair in row
      foreach($result_array as $key => $value)
      {
         //$key holds the table column name
         $xml .= "<$key>";
 
         //embed the SQL data in a CDATA element to avoid XML entity issues
         $xml .= "$value";
 
         //and close the element
         $xml .= "</$key>\n";
      }
 
      $xml.="</".$config['table_name'].">\n";
   }
}
//close the root element
$xml .= "</$root_element>";
 
//send the xml header to the browser
header ("Content-Type:text/xml");
 
//output the XML data
//echo $xml;
file_put_contents("export.xml", $xml);
echo "<a href='export.xml' target='_blank'>Export database as XML</a>";
?>