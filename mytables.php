<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//SQL statement to read data

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    $i = 1;
    while($row = $result->fetch_assoc()) {
        echo '
             <tr>
              <th scope="row">'.$i++.'</th>
              <td>'.$row['fullname'].'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['website'].'</td>
              <td>'.$row['comment'].'</td>
              <td>'.$row['gender'].'</td>
              <td><div class="btn-group"><a class="btn btn-primary btn-sm">Edit</a>&nbsp;<a class="btn btn-danger btn-sm">Delete</a></div></td
            </tr>
            
         ';
    }
}
else {
    echo "0 results";
}
?>