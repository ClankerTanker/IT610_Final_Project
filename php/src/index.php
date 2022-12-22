<?php
	
	$conn = new mysqli("db", "user", "password","video_games");
	if(! $conn){
		die("Unable to connect to database!".mysql_error());
	}

	
	
	$sql_query = "SELECT * FROM video_games";
	$sql_run = mysqli_query($conn, $sql_query);
	
	echo "Several Favorite Titles Across The Years!";
	echo "<br>";

	echo "<table border ='1'>
	<tr>
	<th>Title</th>
	<th>Genre</th>
	<th>Release Date</th>
	<th>Release Price</th>
	<th>Metacritic Score</th>
	</tr>";
	
	
	while($row = mysqli_fetch_array($sql_run)){
		
		echo "<tr>";
		echo "<td>". $row['title']. "</td>";
		echo "<td>". $row["genre"]. "</td>";
		echo "<td>". $row["release_date"]. "</td>";
		echo "<td>". $row["release_price"]. "</td>";
		echo "<td>". $row["metacritic_score"]. "</td>";
		echo "</tr>";
		

	}

	
	echo "</table>";		

	?>