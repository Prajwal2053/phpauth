<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MANAGEMENT SYSTEM</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

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
  <form action="function/insert.php" method="Post" enctype="multipart/form-data">
     <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="country">Country:</label>
        <select class="form-control" id="country" name="country">
            <option>Nepal</option>
            <option>Argentina</option>
            <option>France</option>
            <option>Italy</option>
        </select>
    </div>

    <div class="form-group">
      <label for="gender">Gender</label>
        <div class="radio">
            <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
        
            <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
       
            <label class="radio-inline"><input type="radio" name="gender" value="Others">Others</label>
        </div>
    
    </div>


    <div class="form-group">
      <label for="gender">Property</label>
        <div class="checkbox">
            <label class="checkbox-inline"><input type="checkbox" name="property[]" value="Car">Car</label>
        
            <label class="checkbox-inline"><input type="checkbox" name="property[]" value="Bus">Bus</label>
       
            <label class="checkbox-inline"><input type="checkbox" name="property[]" value="Bike">Bike</label>
        </div>
    
    </div>

     <div class="form-group">
      <label for="country">Description</label>
        <select class="form-control" id="description" name="description">
            <option>Playing 11</option>
            <option>Extra</option>
        </select>
    </div>


    <div class="form-control">
      <div class="form-group">
        <input type="file" name="image" id="image">
        <label for="image">Select Image</label>
      </div>
    </div>





    <input type="submit" name="submit" class="btn btn-default">
  </form>
</div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
