<?php 
 include('db_connect.php');
 $sql = "SELECT id, firstname, lastname FROM user_info";
 $result = mysqli_query($conn, $sql);
 $id = $_GET['id']; 
 if (mysqli_num_rows($result) > 0) {
     // output data of each row
    
     echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>delete</th></tr>";
     while($row = mysqli_fetch_assoc($result)) {
        if ($id == $row["id"] ){
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td> ".$row["lastname"]."</td><td><a href='delete.php?id=".$row['id']."'>Delete</a></td><td><a href='view.php?id=".$row['id']."'>View</a></td></tr>";
     }
    }
     echo "</table>";
 } else {
     echo "0 results";
 }

?>