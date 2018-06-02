<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// define variables and set to empty values
/*$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";



 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name=$_POST["name"];
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required"; 
  } else {
    $email=$_POST["email"];  
  }
}
 $query = "insert into `tbl_iassess_contactus_queries` " . "(`name`, `email_id`)"
                    . " values('" . $name . "','" . $email . "')";
 
            print_r($query);
            return $query;
            die(); */

$servername = "127.0.0.1";
$username = "root@localhost";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$firstname = $_POST["name"];
$mobno = $_POST["mobno"];
$email = $_POST["email"];
$date = date('Y-m-d H:i:s');
$query=$_POST["query"];
if (!empty($firstname)&& !empty($mobno) && !empty($email)){
    $stmt = $conn->prepare("INSERT INTO `table_contact_queries` ( `name`, `email_id`, `mobno`, `QueryTime`, `query`) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss",$firstname,$email, $mobno,$date,$query);
// set parameters and execute
$stmt->execute();
print_r($stmt);
$stmt->close();

}
$conn->close();
           
?>
