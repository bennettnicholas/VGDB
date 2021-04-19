<HTML>
<HEAD>
<TITLE>Update Database</TITLE>
</HEAD>

<BODY bgcolor = wheat>
<H2><CENTER>Modify The VideoGame Entity
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

/* Adding a Game */
if(isset($_POST['add'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$genre = $_POST['genre'];
	$price = $_POST['price'];
	
	if($id == ''){
		echo "Please provide a game ID";
	}
	
	else{
		
		/*make sure the id does not already exist*/
		$res = $mysqli->query("Select * From VideoGame as v Where v.GameID = $id");
		if($res->num_rows != 0){
			echo "Game ID in use - please provide a different ID or Update this game";
		}
		
		/*OK - now we can safely add a game*/
		else{
			$insert = "Insert Into VideoGame(GameID, GameName, Genre, CurrentPrice) Values('$id', '$name', '$genre', '$price')";
			$result = $mysqli->query($insert);
			if($result)
				echo "---------Game Added-----------";
		}
	}
}

/* Updating a Game */
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$genre = $_POST['genre'];
	$price = $_POST['price'];
	
	if($id == ''){
		echo "Please provide a game ID";
	}
	
	else{
		/*make sure the id exists*/
		$res = $mysqli->query("Select * From VideoGame as v Where v.GameID = $id");
		if($res->num_rows == 0){
			echo "Game ID NOT in use - please provide a different ID or Add this game";
		}
		
		else{
			$update = "Update VideoGame Set GameName = '$name', Genre = '$genre', CurrentPrice = '$price' Where VideoGame.GameID = '$id'";
			$result = $mysqli->query($update);
			if($result)
				echo "---------Game Updated-----------";
		}
	}
}


/* Deleting a Game */
if(isset($_POST['delete'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$genre = $_POST['genre'];
	$price = $_POST['price'];
	
	if($id == ''){
		echo "Please provide a game ID";
	}
	
	else{
		/*make sure the id exists*/
		$res = $mysqli->query("Select * From VideoGame as v Where v.GameID = $id");
		if($res->num_rows == 0){
			echo "Game ID NOT in use - please provide a different ID or Add this game";
		}
		
		else{
			$delete = "Delete From VideoGame Where VideoGame.GameID = '$id'";
			$result = $mysqli->query($delete);
			if($result)
				echo "---------Game Deleted-----------";
		}
	}
}


$mysqli->close();
?>

<FORM METHOD="post" action="">
<TABLE>
<TR><TH><strong> Select Game ID </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="id">
</TD>
</TR>
<TR><TH><strong> Select Game Name </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="name">
</TD>
</TR>
<TR><TH><strong> Select Genre </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="genre">
</TD>
</TR>
</TR>
<TR><TH><strong> Select Current Price </strong></TH></TR>
<TR><TD valign = top>
<input type="text" name="price">
</TD>
</TR>
</TABLE>
</FORM>


<P>
<INPUT TYPE="SUBMIT" VALUE="Add Game" name="add">
<INPUT TYPE="SUBMIT" VALUE="Update Game" name="update">
<INPUT TYPE="SUBMIT" VALUE="Delete Game" name="delete">
<INPUT TYPE="RESET"  VALUE="Clear Input">
<P>

</FORM>
<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>