	<?php 
	$sql = "SELECT*FROM blad";
	$resultat = $kobling -> query($sql);
	
	echo "<table>";
	echo "<tr>";
		echo "<th>blad_id</th>";
		echo "<th>bladnavn</th>";
	echo "</tr>";
	echo "<ul>";
	
	while($rad= $resultat->fetch_assoc())
	{
		$blad_id = $rad["blad_id"];
		$Navn = $rad["Navn"];
		
		echo "<tr>";
		echo "<td>$blad_id</td>";
		echo "<td>$Navn</td>";
		echo "</tr>";
	
	}
	// Hei prøver ut comments
	#yeye
	
	echo "</ul>";
	echo "</table>";
	?>

	<?php
	
	$sql ="SELECT * FROM blad";
	$resultat = $kobling->query($sql);
	echo "spørringen $sql ga $resultat->num_rows rader";
	
	?>
		
	<?php
	$xd="</br>HALLA";
	echo "</br>Boys si:$xd";
	?>
	
	

	</body>
</html>