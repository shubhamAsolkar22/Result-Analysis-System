<?php

include'navbar.php';
echo "<link rel=\"stylesheet\" href=\"bar.css\"><body>";

$sql = "SELECT * FROM result where CGPI <> 0 order by CGPI DESC limit 5";
$result = mysqli_query($db, $sql);
echo '<div class="display"><center><h1>TOPPERS LIST</h1>';
if (mysqli_num_rows($result) > 0) {
echo '
<table border=\"1\">
<tr><th>SEAT NUMBER</th>
<th>FIRST NAME</th>
<th>MIDDLE NAME</th>
<th>LAST NAME</th>
<th>CGPI</th></tr>';

while($row = mysqli_fetch_assoc($result)) {
        echo
"<tr><td>".$row["SEAT_NUMBER"]." "."</td>".
"<td>".$row["F_NAME"]." "."</td>".
"<td>".$row["M_NAME"]." "."</td>".
"<td>".$row["L_NAME"]." "."</td>".
"<td>".$row["CGPI"]."</tr>";
    }
echo'</tr></table>';
	} else {
    echo "0 results";
}
echo'</div><div class="footer">
Project by:&nbsp;Shubham Asolkar,&nbsp;Priyank Thakur,&nbsp;Shubham Naik&nbsp;</div></body>';

mysqli_close($db);
?> 
