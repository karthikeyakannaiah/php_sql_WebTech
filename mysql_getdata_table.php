<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                font-size: large;
                border: 2px solid black;
            }
            tr, th, td {
                border: 2px solid black;
                padding: 5px;
            }
        </style>
    </head>
    <body>
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
    ?>
        <h1>Get the data from database</h1>
        <table>
            <tr>
                <th>STUDENT USN</th>
                <th>STUDENT NAME</th>
                <th>STUDENT ADDRESS</th>
            </tr>
        <?php
        $sql = 'SELECT * FROM student;';
        $retval= mysqli_query($conn, $sql);
        if (!$retval) {
            die("Could not get the data".mysqli_error($conn));
        }
        while ($row = mysqli_fetch_array($retval)){
        ?>
            <tr>
                <td><?php echo $row['student_id']."<br>";?></td>
                <td><?php echo $row['student_name']."<br>";?></td>
                <td><?php echo $row['student_address']."<br>";?></td>  
            </tr>
        <?php
        }
        echo "data fetched successfully";

        mysqli_close($conn);
        ?>
        </table>

    </body>
</html>
