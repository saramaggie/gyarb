<?php

session_start();

$servername = "hem.thg.se";
$username = "ad63932";
$password = "jagecool123";
$dbname = "ad63932";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

if($_SESSION["name3"]=="blue")
{
$sql = "SELECT * FROM blue WHERE station='$_POST[name2]'";
}
if($_SESSION["name3"]=="green")
{
$sql = "SELECT * FROM green WHERE station='$_POST[name2]'";
}
if($_SESSION["name3"]=="red")
{
$sql = "SELECT * FROM red WHERE station='$_POST[name2]'";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
	 echo "<br> Station: ". $row["station"]. "<br>  Direction: ". $row["destination"]. "";
     if($row["exits"]==1){
		 echo "<br><br>  number of exits: ". $row["exits"]. "<br><br> closest exit: " .$row["narmast"]. "";
	 }if($row["exits"]==2){
		 echo "<br><br>  number of exits: ". $row["exits"]. "<br><br> exit 1 towards: ". $row["1 to"]. "<br> exit 1 closest carriage: ". $row["1 close"]. "<br><br> exit 2 towards: ". $row["2 to"]. "<br> exit 2 closest carriage: ". $row["2 close"]. "";
	 }if($row["exits"]==3){
		 echo "<br><br>  number of exits: ". $row["exits"]. "<br><br> exit 1 towards: ". $row["1 to"]. "<br> exit 1 closest carriage: ". $row["1 close"]. "<br><br> exit 2 towards: ". $row["2 to"]. "<br> exit 2 closest carriage: ". $row["2 close"]. "<br><br> exit 3 towards: ". $row["3 to"]. "<br> exit 3 closest carriage: ". $row["3 close"]. "";
	 }if($row["exits"]==4){
		 echo "<br><br>  number of exits: ". $row["exits"]. "<br><br> exit 1 towards: ". $row["1 to"]. "<br> exit 1 closest carriage: ". $row["1 close"]. "<br><br> exit 2 towards: ". $row["2 to"]. "<br> exit 2 closest carriage: ". $row["2 close"]. "<br><br> exit 3 towards: ". $row["3 to"]. "<br> exit 3 closest carriage: ". $row["3 close"]. "<br><br> exit 4 towards: ". $row["4 to"]. "<br> exit 4 closest carriage: ". $row["4 close"]. "";
	 }if($row["exits"]==5){
		 echo "<br><br>  number of exits: ". $row["exits"]. "<br><br> exit 1 towards: ". $row["1 to"]. "<br> exit 1 closest carriage: ". $row["1 close"]. "<br><br> exit 2 towards: ". $row["2 to"]. "<br> exit 2 closest carriage: ". $row["2 close"]. "<br><br> exit 3 towards: ". $row["3 to"]. "<br> exit 3 closest carriage: ". $row["3 close"]. "<br><br> exit 4 towards: ". $row["4 to"]. "<br> exit 4 closest carriage: ". $row["4 close"]. "<br><br> exit 5 towards: ". $row["5 to"]. "<br> exit 5 closest carriage: ". $row["5 close"]. "";
	 }if($row["exits"]==6){
		 echo "<br><br>  number of exits: ". $row["exits"]. "<br><br> exit 1 towards: ". $row["1 to"]. "<br> exit 1 closest carriage: ". $row["1 close"]. "<br><br> exit 2 towards: ". $row["2 to"]. "<br> exit 2 closest carriage: ". $row["2 close"]. "<br><br> exit 3 towards: ". $row["3 to"]. "<br> exit 3 closest carriage: ". $row["3 close"]. "<br><br> exit 4 towards: ". $row["4 to"]. "<br> exit 4 closest carriage: ". $row["4 close"]. "<br><br> exit 5 towards: ". $row["5 to"]. "<br> exit 5 closest carriage: ". $row["5 close"]. "<br><br> exit 6 towards: ". $row["6 to"]. "<br> exit 6 closest carriage: ". $row["6 close"]."";
	 }if($row["exits"]==7){
		 echo "<br><br>  number of exits: ". $row["exits"]. "<br><br> exit 1 towards: ". $row["1 to"]. "<br> exit 1 closest carriage: ". $row["1 close"]. "<br><br> exit 2 towards: ". $row["2 to"]. "<br> exit 2 closest carriage: ". $row["2 close"]. "<br><br> exit 3 towards: ". $row["3 to"]. "<br> exit 3 closest carriage: ". $row["3 close"]. "<br><br> exit 4 towards: ". $row["4 to"]. "<br> exit 4 closest carriage: ". $row["4 close"]. "<br><br> exit 5 towards: ". $row["5 to"]. "<br> exit 5 closest carriage: ". $row["5 close"]. "<br><br> exit 6 towards: ". $row["6 to"]. "<br> exit 6 closest carriage: ". $row["6 close"]. "<br><br> exit 7 towards: ". $row["7 to"]. "<br> exit 7 closest carriage: ". $row["7 close"]."";
	 }
	 }
	 
} else {
     echo "0 results";
}

$conn->close();
?> 