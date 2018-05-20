<?php
include '../include/connection.php';
$id = $_GET['id'];
 $sql = "SELECT * FROM Players WHERE id= '$id'";
 $result = $conn->query($sql);
        if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) 
			    {

        
   ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MANAGEMENT SYSTEM</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    

    <style>
    .register
    {
    background-color: #D6CDCC;
    text-align: center;
    }
    </style>
  </head>
  <body>


   <div class="container">
   	<?php
  echo '<form action="../function/update.php?id='. $row["id"] .'" method="Post">'
  ?>
     <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $row["name"]; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row["email"]; ?>">
    </div>

    <div class="form-group">
      <label for="country">Country:</label>
        <select class="form-control" id="country" name="country">
            <option <?php echo ($row['country']=='Nepal')?'selected="selected"':'' ?>>Nepal</option>
            <option <?php echo ($row['country']=='Argentina')?'selected="selected"':'' ?>>Argentina</option>
            <option <?php echo ($row['country']=='France')?'selected="selected"':'' ?>>France</option>
            <option <?php echo ($row['country']=='Italy')?'selected="selected"':'' ?>>Italy</option>
        </select>
    </div>

    <div class="form-group">
      <label for="gender">Gender</label>
        <div class="radio">
            <label class="radio-inline"><input type="radio" name="gender" value="Male" <?php echo ($row['gender']=='Male')?'checked':'' ?>>Male</label>
        
            <label class="radio-inline"><input type="radio" name="gender" value="Female" <?php echo ($row['gender']=='Female')?'checked':'' ?>>Female</label>
       
            <label class="radio-inline"><input type="radio" name="gender" value="Others" <?php echo ($row['gender']=='Others')?'checked':'' ?>>Others</label>
        </div>
    
    </div>
    <?php
      $property_arr=$row['property'];
      $property=explode(",",$property_arr);
    ?>


    <div class="form-group">
      <label for="gender">Property</label>
        <div class="checkbox">

            <label class="checkbox-inline"><input type="checkbox" name="property[]" value="Car" <?php echo(in_array('Car',$property))?'checked':'' ?> >Car</label>
        
            <label class="checkbox-inline"><input type="checkbox" name="property[]" value="Bus" <?php echo(in_array('Bus',$property))?'checked':'' ?> >Bus</label>
       
            <label class="checkbox-inline"><input type="checkbox" name="property[]" value="Bike" <?php echo(in_array('Bike',$property))?'checked':'' ?>>Bike</label>
        </div>
    
    </div>

     <div class="form-group">
      <label for="country">Description</label>
        <select class="form-control" id="description" name="description">
            <option>Playing 11</option>
            <option>Extra</option>
        </select>
    </div>





    <input type="submit" name="update" value="Update" class="btn btn-default">
  </form>
</div>

<?php
	    	}
	    	}
$conn->close();
	?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    
  </body>
</html>

