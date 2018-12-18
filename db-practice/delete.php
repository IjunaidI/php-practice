<?php 
 include('db_connect.php');
 $id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM user_info WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: index.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>