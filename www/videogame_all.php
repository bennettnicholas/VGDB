<HTML>
<HEAD>
<TITLE>All Database Entries</TITLE>
</HEAD>
<BODY bgcolor = wheat>
<H2><CENTER>Display All Records </CENTER></H2>
<P><CENTER>

<?php

/* load php file with mySQL credentials */
require "videogameconfig.php"; 

/* Connect to MySQL */
$mysqli = new mysqli($host, $user, $password, $dbname, $port);

/* Check connection error*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* Execute Query - result will be the whole DB */
$result = $mysqli->query("Select *");

/* Get number of rows in result */
$num = $result->num_rows;

/* Display the result of the query, if the query succeeded */
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

/* Close mySQL connections */
$res->close();
$mysqli->close();
?>

<br><br><br>
<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>