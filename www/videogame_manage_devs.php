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


/* Adding a Dev */
if(isset($_POST['add'])){
	$dev_id = $_POST['devID'];
	$name = $_POST['name'];
	$origin = $_POST['origin'];
	$game_id = $_POST['gameID'];
	
	if($dev_id == ''){
		echo "Please provide a Developer ID";
	}
	
	else{
		$insert = "Insert Into Developer(DeveloperID, DeveloperName, DeveloperOrigin, GameID) Values('$dev_id', '$name', '$origin', '$game_id')";
		$result = $mysqli->query($insert);
		if($result)
			echo "---------Developer Added-----------";
	}
}

/* Updating a Dev */
if(isset($_POST['update'])){
	$dev_id = $_POST['devID'];
	$name = $_POST['name'];
	$origin = $_POST['origin'];
	$game_id = $_POST['gameID'];
	
	if($dev_id == ''){
		echo "Please provide a Developer ID";
	}
	
	else{
		/*make sure the id exists*/
		$res = $mysqli->query("Select * From Developer as d Where d.DeveloperID = $dev_id");
		if($res->num_rows == 0){
			echo "Developer ID NOT in use - please provide a different ID or Add this game";
		}
		
		else{
			$update = "Update Developer Set DeveloperName = '$name', DeveloperOrigin = '$origin' Where Developer.DeveloperID = '$dev_id'";
			$result = $mysqli->query($update);
			if($result)
				echo "---------Developer Updated-----------";
		}
	}
}


/* Deleting a Dev */
if(isset($_POST['delete'])){
	$dev_id = $_POST['devID'];
	$name = $_POST['name'];
	$origin = $_POST['origin'];
	$game_id = $_POST['gameID'];
	
	if($dev_id == ''){
		echo "Please provide a Developer ID";
	}
	
	else{
		/*make sure the id exists*/
		$res = $mysqli->query("Select * From Developer as d Where d.DeveloperID = $dev_id");
		if($res->num_rows == 0){
			echo "Game ID NOT in use - please provide a different ID or Add this game";
		}
		
		else{
			$delete = "Delete From Developer Where Developer.DeveloperID = '$dev_id'";
			$result = $mysqli->query($delete);
			if($result)
				echo "---------Developer Deleted-----------";
		}
	}
}



$mysqli->close();
?>

<FORM METHOD="post" action="">
<TABLE>
<TR><TH><strong> Select Developer ID </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="devID">
</TD>
</TR>
<TR><TH><strong> Developer Name </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="name">
</TD>
</TR>
<TR><TH><strong> Developer Origin </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="origin">
</TD>
</TR>
</TR>
<TR><TH><strong> Select Game ID</strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="gameID">
</TD>
</TR>
</TABLE>
</FORM>


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