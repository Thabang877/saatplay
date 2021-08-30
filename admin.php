<?php

$con = mysqli_connect("localhost", "root", "", "myproject");
 
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM users";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id </th>";
                echo "<th>Name </th>";
                echo "<th>Surname </th>";
                echo "<th>Email </th>";
                echo "<th>Password </th>";
                echo "<th>Uploaded Image/File </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['pwd'] . "</td>";
                echo "<td>" . $row['upload'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
mysqli_close($con);
?>

<html>
    <head>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:powderblue;">
<h2>Review Submissions</h2>

<form method="POST" >
    
    <button type="submit" class="btn" style="background-color:green; cursor: pointer;">Approve</button>
    <button type="submit" class="btn" style="background-color:red;cursor: pointer;">Reject</button>

</form>
</body>
</html>

