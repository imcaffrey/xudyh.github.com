<?php$con = mysql_connect("localhost","root","usbw");if (!$con)  {  die('Could not connect: ' . mysql_error());  }mysql_select_db("my_db", $con);if (isset($_GET["set"])) {	mysql_query("INSERT INTO item (name) VALUES ('".$_GET["set"]."')");}if (isset($_GET["get"])) {$result = mysql_query("SELECT * FROM item WHERE name='".$_GET["get"]."'");$find=0;while($row = mysql_fetch_array($result))  {	$find=1;  } if ($find==1) echo "yes"; else echo "no"; }mysql_close($con);?>