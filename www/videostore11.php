<HTML>
<HEAD>
<TITLE>
Video Status
</TITLE>
</HEAD>
<BODY bgcolor = wheat >
<H2>Test PHP-MySQL</H2>
<HR height=8>
<P>

<?php

require "videoconfig.php"; 

$status = $_POST['status'];

echo "<H2>Videos $status</H2>";

/* Connect to MySQL */
$mysqli = new mysqli($host, $user, $password, $dbname, $port);


/* Check connection error*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


/* Access the VIDEOFORRENT table */
$result = $mysqli->query("Select videoNo, title, category from VideoForRent JOIN Video ON Video.CatalogID = VideoForRent.CatalogID where status = '$status'");

?>

<TABLE Border="1">
<TR>

<?php
/* Fetch and display the attribute names */

while ($field=$result->fetch_field())
{
   echo "<TH>";
   echo "$field->name";
   echo "</TH>";
}
echo "</TR>";

/* Fetch and displays each row of $result */ 
if($result)
   while($row=$result->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result->field_count; $i++)
      {
         echo "<TD> $row[$i] </TD>";
      }
      echo "</TR>\n";
   }

$result->close();
$mysqli->close();
?>

</TABLE>
<BR>
<BR>
<a href = videostore.html>Return to Main Web Page</a>
</BODY>
</HTML>