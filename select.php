 <?php
include'navbar.php';

$sql = "SELECT * FROM result";
$result = mysqli_query($db, $sql);
echo "<link rel=\"stylesheet\" href=\"bar.css\">";

if (mysqli_num_rows($result) > 0) {
echo '<div class="display-or"><h1><center>OVERALL RESULTS</center></h1>';
  echo '
  <div style="overflow-x:auto;">
  <table>
<tr><th rowspan="2">SEAT NUMBER</th>
<th rowspan="2">FIRST NAME</th>
<th rowspan="2">MIDDLE NAME</th>
<th rowspan="2">LAST NAME</th>
<th colspan="6">Applied Mathematics - IV</th>
<th colspan="6">COMPUTER ORGANISATION AND ARCHITECTURE</th>
<th colspan="6">DATABSE MANAGEMENT SYSTEM</th>
<th colspan="6">ANALYSIS OF ALGORITHM</th>
<th colspan="6">THEORETICAL COMPUTER SCIENCE</th>
<th colspan="6">COMPUTER GRAPHICS</th>
<th rowspan="2">STATUS</th>
<th rowspan="2">CGPI</th></tr>
<tr><td>THEORY</td>
<td>INTERNALS</td>
<td>TOTAL</td>
<td>TERMWORK</td>
<td>REMARKS</td>
<td>POINTER</td>
<td>THEORY</td>
<td>INTERNALS</td>
<td>TOTAL</td>
<td>TERMWORK</td>
<td>REMARKS</td>
<td>POINTER</td>
<td>THEORY</td>
<td>INTERNALS</td>
<td>TOTAL</td>
<td>TERMWORK</td>
<td>REMARKS</td>
<td>POINTER</td>
<td>THEORY</td>
<td>INTERNALS</td>
<td>TOTAL</td>
<td>TERMWORK</td>
<td>REMARKS</td>
<td>POINTER</td>
<td>THEORY</td>
<td>INTERNALS</td>
<td>TOTAL</td>
<td>TERMWORK</td>
<td>REMARKS</td>
<td>POINTER</td>
<td>THEORY</td>
<td>INTERNALS</td>
<td>TOTAL</td>
<td>TERMWORK</td>
<td>REMARKS</td>
<td>POINTER</td>
</tr>';

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo
"<tr><td>".$row["SEAT_NUMBER"]." "."</td>".
"<td>".$row["F_NAME"]." "."</td>".
"<td>".$row["M_NAME"]." "."</td>".
"<td>".$row["L_NAME"]." "."</td>".
"<td>".$row["AM_TH"]." "."</td>".
"<td>".$row["AM_IA"]." "."</td>".
"<td>".$row["AM_TH+IA"]." "."</td>".
"<td>".$row["AM_TW"]." "."</td>".
"<td>".$row["AM_REMARK"]." "."</td>".
"<td>".$row["AM_FINAL_GP"]." "."</td>".
"<td>".$row["COA_TH"]." "."</td>".
"<td>".$row["COA_IA"]." "."</td>".
"<td>".$row["COA_TH+IA"]." "."</td>".
"<td>".$row["COA_TW"]." "."</td>".
"<td>".$row["COA_REMARK"]." "."</td>".
"<td>".$row["COA_FINAL_GP"]." "."</td>".
"<td>".$row["DBMS_TH"]." "."</td>".
"<td>".$row["DBMS_IA"]." "."</td>".
"<td>".$row["DBMS_TH+IA"]." "."</td>".
"<td>".$row["DBMS_TW"]." "."</td>".
"<td>".$row["DBMS_REMARK"]." "."</td>".
"<td>".$row["DBMS_FINAL_GP"]." "."</td>".
"<td>".$row["AOA_TH"]." "."</td>".
"<td>".$row["AOA_IA"]." "."</td>".
"<td>".$row["AOA_TH+IA"]." "."</td>".
"<td>".$row["AOA_TW"]." "."</td>".
"<td>".$row["AOA_REMARK"]." "."</td>".
"<td>".$row["AOA_FINAL_GP"]." "."</td>".
"<td>".$row["TCS_TH"]." "."</td>".
"<td>".$row["TCS_IA"]." "."</td>".
"<td>".$row["TCS_TH+IA"]." "."</td>".
"<td>".$row["TCS_TW"]." "."</td>".
"<td>".$row["TCS_REMARK"]." "."</td>".
"<td>".$row["TCS_FINAL_GP"]." "."</td>".
"<td>".$row["CG_TH"]." "."</td>".
"<td>".$row["CG_IA"]." "."</td>".
"<td>".$row["CG_TH+IA"]." "."</td>".
"<td>".$row["CG_TW"]." "."</td>".
"<td>".$row["CG_REMARK"]." "."</td>".
"<td>".$row["CG_FINAL_GP"]." "."</td>".
"<td>".$row["STATUS"]." "."</td>".
"<td>".$row["CGPI"]."</tr>"
;

    }
} else {
    echo "0 results";
}
echo'</table></div></div>
<div class="footer">
Project by:&nbsp;Shubham Asolkar,&nbsp;Priyank Thakur,&nbsp;Shubham Naik&nbsp;</div>
';
mysqli_close($db);
?> 