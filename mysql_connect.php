<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";   
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn) {
    echo "connection established successfully";
} else {
    echo "connection failed";
}
$sql = 'SELECT * FROM student;';
$retval= mysqli_query($conn, $sql);
 if (!$retval) {
     die("Could not get the data".mysqli_error($conn));
 }
while ($row = mysqli_fetch_array($retval)){
    echo $row['student_id']."<br>";
    echo $row['student_name']."<br>";
    echo $row['student_address']."<br>";    
}

echo "data fetched successfully";

mysqli_close($conn);
?>