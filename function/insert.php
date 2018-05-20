

    <?php
    include '../include/connection.php';

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

     

    if ($_POST['submit']) {
         
         

         $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) 
        {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else
        {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) 
        {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["image"]["size"] > 5000000) 
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) 
        {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
             echo "Sorry, your file was not uploaded.";
        }

        else 
        {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $country=$_POST['country'];
                $gender=$_POST['gender'];
                $property_arr=$_POST['property'];
                $property=implode(",",$property_arr);    
                $description=$_POST['description'];
                $image=basename( $_FILES["image"]["name"]);


                $sql = "INSERT INTO players(name,email,country,gender,property,description,image) VALUES ('$name', '$email','$country','$gender','$property','$description','$image')";

                 if (mysqli_query($conn, $sql)) {
                   header('location: ../index.php');
                 } else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                 }
                
                 $conn->close();

                echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
            }
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }






        



         
    }

        ?>


    

