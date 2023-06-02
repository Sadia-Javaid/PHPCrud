<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM crud 
WHERE id = $id";
$result = $conn->query($sql);
if ($result) {
   header ("Location: dashboard.php?msg=Record deleted successfuly");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>