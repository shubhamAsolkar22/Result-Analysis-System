<?php
include('session.php');
echo '
<link rel="stylesheet" href="css_files/navbar.css">

<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="select.php">Results</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn" >Calculate</a>
		<div class="dropdown-content">
			<a href="topper_list.php" >Toppers</a>
			<a href="kt_students.php">Failures</a>			
			<a href="range_general.html" >Students in range of CGPI</a>
	  </div>	
  </li>
  <li><a href="insert.html">Query</li>
   <li style="float:right;">
			<a href="logout.php" >Logout</a>
	  </div>	
  </li>
</ul>
'
?>
