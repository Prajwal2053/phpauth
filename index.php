<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MANAGEMENT SYSTEM</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <style>
    	.register
    	{
    		text-align: center;
    		color: white;
    		margin-top: 30px;


    	}
    </style>
  </head>
  <body>


  	<?php
  		include 'include/connection.php';
  	?>

    <div class="container">
    	<div class="row">
    		<div >
    			<a  class="btn btn-lg btn-success register" href="register.php">REGISTER MEMBER</a>
    		</div>
    	</div>
    </div>
    <br>





    <div class="container">
      	<div class="table-responsive">          
	  		<table class="table">
	    		<thead>
	      			<tr>
				        <th>id</th>
				        <th>Name</th>
				        <th>Email</th>
				        <th>Country</th>
				        <th>Gender</th>
				        <th>Property</th>
				        <th>Image</th>
				        <th>Description</th>
				        <th>Actions</th>
	      			</tr>
				</thead>
				<tbody>

				<?php
			    $sql = "SELECT * FROM Players";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) 
			    {
    			?>
				
					<tr id="hide<?php echo $row['id']; ?>">
						<td><?php echo $row["id"]; ?></td>
				        <td><?php echo $row["name"]; ?></td>
				        <td><?php echo $row["email"]; ?></td>
				        <td><?php echo $row["country"]; ?></td>
				        <td><?php echo $row["gender"]; ?></td>
				        <td><?php echo $row["property"]; ?></td>
				        <td><img height="80px;" width="100px;" src="uploads/<?php echo $row["image"]; ?>"></td>
				        <td><?php echo $row["description"]; ?></td>
				        <td>
						    <span>
						    	<?php

						        echo '<a href="function/edit.php?id='. $row["id"] .'" class="btn btn-primary">Edit</a>';

						        ?>
						    </span>
						    <input type="hidden" name="id" id="delete_id" value="<?php echo $row['id']; ?>">
						     

						     	<a href="javascript:void(0)" data-id="<?php echo $row['id']; ?>"  id="delete<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

						    
						</td>
	      			</tr>
	      			<?php
	    		}
	    	?>
	    		</tbody>

	    	
	  		</table>
  		</div>
	</div>
	<?php

	
} else {
    echo "0 results";
}
$conn->close();
	?>


  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.js" type="text/javascript"></script>


    <script>


         document.querySelector('#delete11').onclick=function()
      {

        swal({

    

  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false,
  showLoaderOnConfirm: true,
},
function(isConfirm) {
  if (isConfirm) {
      setTimeout(function () {
    swal({
        title:"",
        text:"Data Deleted Successfully",
        timer:1000});
  }, 2000);
    swal("Deleted!", "Your imaginary file has been deleted.", "success");

        var id = $("#delete").attr('data-id');

                $.ajax({

                 type:'POST',
                 url:'function/delete.php',
                 data: {id:id},
                 success:function(data)
                 {
                     if(data)
                     {
                         $('#hide'+id).hide();

                     }
                     else
                     {
                         alert("cant delete")
                     }
                 }
                });


  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
//     swal({
//   title: "Are u Sure to delete?",
//   text:'',
//   type: "info",
//   html:'<input id="delete11" class="form-control">',
//   showCancelButton: true,
//   closeOnConfirm: false,
//   confirmButtonId:'delete1',
//   showLoaderOnConfirm: true
// }, 
// function () {
//   setTimeout(function () {
//     swal({
//         title:"",
//         text:"Data Deleted Successfully",
//         timer:1000});
//   }, 2000);
// });
};



    // 	$(function()
    // 	{
    // 		$('#delete1').click(function()
    // 		{
    // 			var id = $("#delete_id").val();
    //             alert(id);
    //             console.log(id);

    			
    			
    // 			// $.ajax({

    // 			// 	type:'POST',
    // 			// 	url:'function/delete.php',
    // 			// 	data: {id:id},
    // 			// 	success:function(data)
    // 			// 	{
    // 			// 		if(data)
    // 			// 		{
    // 			// 			$('#hide'+id).hide();
    // 			// 		}
    // 			// 		else
    // 			// 		{
    // 			// 			alert("cant delete")
    // 			// 		}
    // 			// 	}
    // 			// });

				
    // 	});

    // });
    	



    </script>
  </body>
</html>