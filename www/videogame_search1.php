<HTML>
<HEAD>
<TITLE>Search Game By Genre</TITLE>
</HEAD>

<BODY bgcolor = wheat>
<H2><CENTER>Display Videosgames of a Selected Genre
</CENTER></H2>
<FORM METHOD="post" action="execute_query.php">
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
$res = $mysqli->query("Select GameName from VideoGame Where VideoGame.Genre == Genre");


?>

<TABLE>
<TR><TH><strong> Select Genre </strong></TH></TR>
<TR><TD valign = top>
<SELECT size=<?php echo $num;?> id=status name=status>
<?php

/* Get number of rows */
$num = $res->num_rows;


/* Display each distinct STATUS value stored in the database */
for ($i = 0; $i < $num; $i++)
{
	$row=$res->fetch_row();
	if (strcmp($row[0], "Hidden") != 0)
	{
   		echo "<option> $row[0] </option>";
	}

}
$res->close();
$mysqli->close();
?>

</SELECT></TD>
</TR>
</TABLE>


<P>
<INPUT TYPE="SUBMIT" VALUE="Execute SQL statement...">
<INPUT TYPE="RESET"  VALUE="Clear...">
<P>

</FORM>
<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>