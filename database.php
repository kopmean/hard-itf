<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf63.mysql.database.azure.com', 'kopsira@itf63', 'GQFvju56', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$A = $_GET['A'];
$B = $_GET['B'];
$C = $A+$B;


$sql = "INSERT INTO abc (A , B , C) VALUES ('$A', '$B', '$C')";


if (mysqli_query($conn, $sql)) {
    header("location:show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
