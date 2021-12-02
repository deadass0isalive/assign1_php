<?php      

    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];   
      
        $sql = "insert into login (username, password) value ('$username', '$password')";   
          
	if(mysqli_query($con,$sql))
	{
		echo "Registerd Successfully";
	}
	else
	{
		echo mysqli_error($conn);
	}

   
?>  

<p> <a href="index.html">Go back to login page</a>.</p>
