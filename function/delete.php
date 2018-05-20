<?php
include '../include/connection.php';
$id = $_POST['id'];
$sql = "SELECT image FROM Players WHERE id= '$id'";
$result = $conn->query($sql);
				if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) 
			    { $unlink = $row["image"];
					unlink( "../uploads/$unlink" );
			    }
			}

 $sql = "DELETE FROM Players WHERE id= '$id'";
        if (mysqli_query($conn, $sql)) {
           echo "Data deleted successfully";
        } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
   ?>