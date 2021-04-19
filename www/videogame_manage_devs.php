<HTML>
<HEAD>
<TITLE>Update Database</TITLE>
</HEAD>

<BODY bgcolor = wheat>
<H2><CENTER>Modify The Developer Entity
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


/* Execute Query */
$res = $mysqli->query("Select distinct status from VideoForRent");




$mysqli->close();
?>

<TABLE>
<TR><TH><strong> Select Developer ID </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="id">
</TD>
</TR>
<TR><TH><strong> Developer Name </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="name">
</TD>
</TR>
<TR><TH><strong> Developer Origin </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="genre">
</TD>
</TR>
</TR>
<TR><TH><strong> Select Game ID</strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="price">
</TD>
</TR>
</TABLE>


<P>
<INPUT TYPE="SUBMIT" VALUE="Add Developer" name="add">
<INPUT TYPE="SUBMIT" VALUE="Update Developer" name="update">
<INPUT TYPE="SUBMIT" VALUE="Delete Developer" name="delete">
<INPUT TYPE="RESET"  VALUE="Clear Input">
<P>

</FORM>
<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>