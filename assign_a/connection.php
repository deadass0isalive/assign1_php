<?php /* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no 
password) */ 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'debian-sys-maint');
define('DB_PASSWORD', 'Rmmt7taOKG6YUb10'); 
define('DB_NAME', 'mydb');
 
/* Attempt to connect to MySQL database */ $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){ die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
