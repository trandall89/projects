<?php 

//connect to MySQL
$con = mysqli_connect ("localhost","root","sillymonk2","shoutit");


//test connection
if(mysqli_connect_errno ()) {
	echo 'Failed to connect to MySQL: '. mysqli_connect_error();
}
 ?>