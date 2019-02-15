<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
// $_SERVER['REQUEST_METHOD'] contains the request method.
// 	$_POST contain post data from main page.

{
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['Gender'];
$email = $_POST['email'];
$phonecode = $_POST['phonecode'];
$phone = $_POST['phone'];

// our db_connection file:

// $host will be the host where your server is running it is usually localhost.
// $dbUsername will be the username i.e. root 
// $dbpassword will be the password which is the same that you used to access your phpmyadmin.
// $dbname will be the name of your database which we have created 

 	$host = "localhost"; 
 	$dbUsername = "root";
 	$dbpassword = "Server@123";
 	$dbname = "12feb";

 	// create connection
 	// MySQLi is used inside the PHP programming language to give an interface with MySQL databases
 	$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);

    // Check connection
 	if ($conn->connect_error) // check error in connection
 	{
    die("Connection failed: " . $conn->connect_error);// die = to stop
 	} 
 	else 
 	{

    // mysqli_query function is used to execute SQL command.This function takes two parameters and returns TRUE on success or FALSE on failure. 

    $SELECT = mysqli_query($conn, "SELECT * FROM register WHERE email = '".$email."'");
    if(mysqli_num_rows($SELECT) > 0)
    //mysqli_num_rows - is inbuilt function in PHP which is used to return the number of rows present in the result set
    {
  	  echo $email_error = "Sorry... email already taken"; 
  	  // echo use to print statement 
  	}else{
  
 		

 	$sql = 'INSERT INTO register (username, password, gender,email,phonecode,phone)
            VALUES ("'. $username.'", "'.$password.'" , "'.$gender.'" , "'.$email.'" ,  "'.$phonecode.'" , "'.$phone.'")'; 

          if ($conn->query($sql) === TRUE)
 		 {
          echo "New record created successfully" .$username;
         }
        else 
         {
          echo "Error: " . $sql . "<br>" . $conn->error;
         }
 }

 
         
 		
 		$conn->close();
    }
 

}
else
{
echo "error submitting form";
}
?>
          
 		
