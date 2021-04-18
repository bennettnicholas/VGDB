<HTML>
<HEAD>
<TITLE>Search Game By Genre</TITLE>
</HEAD>

<BODY bgcolor = wheat>
<H2><CENTER>Display Videogames of a Selected Genre
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
<TR><TH><strong> Select Genre </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="genre">
<input type="submit">
</TD>
</TR>
</TABLE>


<?php

if( isset($_POST['genre']) ){
	
	$genre = $_POST['genre'];
	
	/* Execute Query */
	$result = $mysqli->query("Select GameName, CurrentPrice From VideoGame Where Genre = '$genre'");
	
	//print result
	if($result->num_rows > 0){
	
		echo "<H3>Video Games of Genre '" . $genre . "':</H3>";
		echo "<TABLE>";
		echo "<TR>";
		echo "<TD><b>Name</b></TD><TD><b>Price</b></TD>";
	
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
		echo "<H3><br>No Video Games of Genre '" . $genre . "'<br><br></H3>";
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