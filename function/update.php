 <?php
    include '../include/connection.php';


    if ($_POST['update']) {
         $name=$_POST['name'];
         $email=$_POST['email'];
         $country=$_POST['country'];
         $gender=$_POST['gender'];
         $property_arr=$_POST['property'];
         $property=implode(",",$property_arr);    
         $description=$_POST['description'];

         $id = $_GET['id'];

         $sql = "UPDATE players SET name='$name', email='$email',country='$country',gender='$gender',property='$property',description='$description' WHERE id=$id";

         if (mysqli_query($conn, $sql)) {
           header('location: ../index.php');
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
        
         $conn->close();
    }

    ?>
