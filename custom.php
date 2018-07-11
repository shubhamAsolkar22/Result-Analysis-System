<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<link rel=\"stylesheet\" href=\"bar.css\">";
$query =  $_POST["query"];
if(empty($query)){
	echo'<center><h1 style="font-family:calibri">Please enter a query</h1></center>';
}
else{	
$result = mysqli_query($conn, $query);

$all_property = array();  //declare an array for saving property

//showing property
echo '<table style="font-family:calibri;">
        <tr>';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";

mysqli_close($conn);
}
?>