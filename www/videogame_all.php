<HTML>
<HEAD>
<TITLE>All Database Entries</TITLE>
</HEAD>

<BODY bgcolor = wheat>
<H2><CENTER>Display All Records 
</CENTER></H2>
<FORM METHOD="post" action="videostore11.php">
<P>
<CENTER>

<?php

require "videogameconfig.php"; 

/* Connect to MySQL */
$mysqli = new mysqli($host, $user, $password, $dbname, $port);


/* Check connection error*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


/* Execute Query */
$result = $mysqli->query("Select *");


/* Get number of rows */
$num = $res->num_rows;


/* Display each value stored in the database */
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

/* Close your things for reasons */
$res->close();
$mysqli->close();
?>


</FORM><br><br><br>
<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>