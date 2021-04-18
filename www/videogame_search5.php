<HTML>
<HEAD>
<TITLE>Search Streams By Game</TITLE>
</HEAD>

<BODY bgcolor = wheat>
<H2><CENTER>Display Any Recorded Streams For A Video Game
</CENTER></H2>
<FORM METHOD="post" action="">
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

$genre = "";

?>


<TABLE>
<TR><TH><strong> Select Game Name </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="game">
<input type="submit">
</TD>
</TR>
</TABLE>


<?php

if( isset($_POST['game']) ){
	
	$game_name = $_POST['game'];
	
	/* Execute Query */
	$result = $mysqli->query("Select StreamLink From Stream");
	
	//print result
	if($result){
	
		echo "<H3>Links To Streams For '" . $game_name . "':</H3>";
		echo "<TABLE>";
		echo "<TR>";
	
		while($row=$result->fetch_row())
		{
			echo "<TR>";
			for ($i=0; $i < $result->field_count; $i++)
			{
				echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
			}
			echo "</TR>\n";
		}
		echo "</TABLE><br>";
	}
	
	else{
		echo "<H3>No Available Streams For '" . $game_name . "':</H3>";
	}
}

?>


<?php
$mysqli->close();
?>

</FORM>
<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>