<?php include('db_connect.php');?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>


</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<body>

 <?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO user_info (firstname, lastname)
    VALUES ('".$_POST["username"]."','".$_POST["password"]."')";

    $result = mysqli_query($conn,$sql);
}

?>

<form action="" method="post"> 
<label id="first"> First name:</label><br/>
<input type="text" name="username"><br/>

<label id="first">Last name</label><br/>
<input type="text" name="password"><br/>
<button type="submit" name="save" >save</button>

</form>
<?php 
$sql = "SELECT id, firstname, lastname FROM user_info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>delete</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td> ".$row["lastname"]."</td><td><a href='delete.php?id=".$row['id']."'>Delete</a></td><td><a href='view.php?id=".$row['id']."'>View</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
</body>
</html>