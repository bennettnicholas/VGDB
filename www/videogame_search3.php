<HTML>
<HEAD>
<TITLE>Search Game By Reviews</TITLE>
</HEAD>

<BODY bgcolor = wheat>
<H2><CENTER>Display Videogames That Have Received One or More 4+ Star Reviews
</CENTER></H2>
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
$result = $mysqli->query("Select GameName, CurrentPrice From VideoGame as v JOIN Review as r ON r.GameID = v.GameID Where r.Rating > 4");
	
//print result
if($result){
	
	echo "<H3>Highly Rated Video Games:</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>Name</b></TD><TD><b>Price&nbsp&nbsp&nbsp&nbsp</b></TD><TD><b>Average Rating</b></TD>";
	
	while($row=$result->fetch_row())
	{
		echo "<TR>";
		for ($i=0; $i < $result->field_count; $i++)
		{
			echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
		}
		echo "<TD> 4 &nbsp&nbsp&nbsp&nbsp </TD>";
		echo "</TR>\n";
	}
	echo "</TABLE><br>";
}
	
else{
	echo "<H3><br>No Highly Rated Games <br><br></H3>";
}


?>


<?php
$mysqli->close();
?>

<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>