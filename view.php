<?php
include 'include/connection.php';

 $sql = "SELECT * FROM PLAYERS";
        if (mysqli_query($conn, $sql)) {
           echo "DATA successfully displayed";
        } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
?>