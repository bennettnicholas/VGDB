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
$res = $mysqli->query("Select *");


/* Get number of rows */
$num = $res->num_rows;


/* Display each value stored in the database */
for ($i = 0; $i < $num; $i++)
{
	$row=$res->fetch_row();
	if (strcmp($row[0], "Hidden") != 0)
	{
   		echo "<option> $row[0] </option>";
	}

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