<HTML>
<HEAD>
<TITLE>All Database Entries</TITLE>
</HEAD>
<BODY bgcolor = wheat>
<H2><CENTER>The VideoGame Database </CENTER></H2>
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

/* Execute Queries - result will be the whole DB */
$result = $mysqli->query("Select * From VideoGame");
$consumers = $mysqli->query("Select * From Consumer");
$developers = $mysqli->query("Select * From Developer");
$publishers = $mysqli->query("Select * From Publisher");
$streams = $mysqli->query("Select * From Stream");
$reviews = $mysqli->query("Select * From Review");
$mods = $mysqli->query("Select * From Mod");


/* Video Games */
if($result){
	
	echo "<H3>Video Games :</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>ID</b></TD><TD><b>Name</b></TD><TD><b>Genre</b></TD><TD><b>Price</b></TD>";
	
   while($row=$result->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $result->field_count; $i++)
      {
         echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
      }
      echo "</TR>\n";
   }
   
	echo "</TABLE>";
}

else{
	echo "<H3>Video Games :</H3>";
	echo "No applicable results\n\n";
}


/* Developers */

if($developers){
	
	echo "<H3>Developers :</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>Developer ID&nbsp&nbsp</b></TD><TD><b>Name</b></TD><TD><b>Origin/Location</b></TD><TD><b>Game ID</b></TD>";
	
   while($row=$developers->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $developers->field_count; $i++)
      {
         echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
      }
      echo "</TR>\n";
   }
   
	echo "</TABLE>";
}

else{
	echo "<H3>Developers :</H3>";
	echo "No applicable results\n\n";
}

/* Publishers */

if($publishers){
	
	echo "<H3>Publishers :</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>Publisher ID&nbsp&nbsp</b></TD><TD><b>Name</b></TD><TD><b>Origin/Location</b></TD><TD><b>Game ID</b></TD>";
	
   while($row=$publishers->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $publishers->field_count; $i++)
      {
         echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
      }
      echo "</TR>\n";
   }
   
	echo "</TABLE>";
}

else{
	echo "<H3>Publishers :</H3>";
	echo "No applicable results\n\n";
}

/* Consumers */

if($consumers){
	
	echo "<H3>Consumers :</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>Consumer ID&nbsp&nbsp</b></TD><TD><b>Name</b></TD><TD><b>Game ID</b></TD>";
	
   while($row=$consumers->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $consumers->field_count; $i++)
      {
         echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
      }
      echo "</TR>\n";
   }
   
	echo "</TABLE>";
}

else{
	echo "<H3>Consumers :</H3>";
	echo "No applicable results\n\n";
}

/* Reviews */

if($reviews){
	
	echo "<H3>Reviews :</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>Review ID &nbsp&nbsp</b></TD><TD><b>Rating</b></TD><TD><b>Consumer ID&nbsp&nbsp</b></TD><TD><b>Game ID</b></TD>";
	
   while($row=$reviews->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $reviews->field_count; $i++)
      {
         echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
      }
      echo "</TR>\n";
   }
   
	echo "</TABLE>";
}

else{
	echo "<H3>Reviews :</H3>";
	echo "No applicable results\n\n";
}

/* Mods */

if($mods){
	
	echo "<H3>Mods :</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>Mod ID &nbsp&nbsp</b></TD><TD><b>Mod Details</b></TD><TD><b>Consumer ID&nbsp&nbsp</b></TD><TD><b>Game ID</b></TD>";
	
   while($row=$mods->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $mods->field_count; $i++)
      {
         echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
      }
      echo "</TR>\n";
   }
   
	echo "</TABLE>";
}

else{
	echo "<H3>Mods :</H3>";
	echo "No applicable results\n\n";
}

/* Streams */

if($streams){
	
	echo "<H3>Streams :</H3>";
	echo "<TABLE>";
	echo "<TR>";
	echo "<TD><b>Stream ID &nbsp&nbsp</b></TD><TD><b>Link</b></TD><TD><b>Consumer ID&nbsp&nbsp</b></TD><TD><b>Game ID</b></TD>";
	
   while($row=$streams->fetch_row())
   {
      echo "<TR>";
      for ($i=0; $i < $streams->field_count; $i++)
      {
         echo "<TD> $row[$i] &nbsp&nbsp&nbsp&nbsp </TD>";
      }
      echo "</TR>\n";
   }
   
	echo "</TABLE>";
}

else{
	echo "<H3>Streams :</H3>";
	echo "No applicable results\n\n";
}

/* Close mySQL connections */
//$result->close();
$mysqli->close();
?>

<br><br><br>
<a href = videogame.html>Return to Main Web Page</a>
</CENTER>
</BODY>
<HTML>