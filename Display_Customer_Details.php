<?php

	$server = "localhost";
	$username = "root";	
	$password = "";
	$database = "Customer_DB";

	$conn = mysqli_connect( $server, $username, $password, $database );

	if( $conn )
	{
		$query = "select * from Customer_details";

		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "<body>"; 
			echo "<center>";
			echo "<h3> Customer Details are as follows </h3>";
			echo "<table border='2px'><tr><th>ID</th><th>Name</th><th>Password</th><th>Email</th><th>Gender</th><th>Address</th><th>Country</th></tr>";
			while( $row = mysqli_fetch_array($data) )
			{
				echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Password"]."</td><td>".$row["Email"]."</td><td>".$row["Gender"]."</td><td>".$row["Address"]."</td><td>".$row["Country"]."</td></tr>";	
			}
			echo "</table>";
			echo "</center>";
			echo "</body>"; 
		}
		else
		{
			echo "Could not fetch the data";
		}

	}
	else
	{
		echo "Not Done";
	}

	mysqli_close($conn);
?>