<?php
// Include database connection
include('actions/formcon.php');

if (isset($_POST['submit'])) {
    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO booking (fullname, address, phoneNumber, unit, checkIn) VALUES (?, ?, ?, ?, ?)");
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("sssss", $fullname, $address, $phoneNumber, $unit, $checkIn);
        
        // Assign sanitized POST values
        $fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES, 'UTF-8');
        $address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');
        $phoneNumber = htmlspecialchars($_POST['phoneNumber'], ENT_QUOTES, 'UTF-8');
        $unit = htmlspecialchars($_POST['unit'], ENT_QUOTES, 'UTF-8');
        $checkIn = htmlspecialchars($_POST['checkIn'], ENT_QUOTES, 'UTF-8');
        
        // Execute the query
        if ($stmt->execute()) {
            header("Location: payment.php");
            exit;
        } else {
            echo "Error inserting data: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Booking Form </title>
        <link rel="icon" type="image/png" href="images/top.png">
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
	</head>
    <style>
        body {
            display: flex; /* Enable flexbox */
        justify-content: center; /* Center horizontal   ly */
        align-items: center; /* Center vertically */
        height: 100vh; /* Full viewport height */
        margin: 0; /* Remove default margin */
        background-color: #dfdfdf;
           
        }
        .container {
            /* Centering the container */
            max-width: 800px; /* Maximum width for the container */
            padding: 200px; /* Adding padding for inner space */
            background-color: #ffffff; /* White background for the panel */
            border-radius: 15px; /* Rounded corners */
           
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
          
             
        }
       
        h2 {
            text-align: center; /* Centering the heading */
            margin-bottom: 600px; 
            margin-left: 50px;
            font-weight: 100;/* Space below the heading */
            position: absolute;
            font-weight: bold;
        }
        #unitDetails {
           text-align: center; /* Centering items */
            margin-top: 100px; /* Space below unit details */
        }
        #unitPhoto {
            max-width: 100%; /* Responsive image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 4px; /* Rounded corners for the image */
        }
        .form-group {
            margin-bottom: 15px; /* Space between form fields */
        }
        .btn {
            margin-top: 10px; /* Space above buttons */
        }
    </style>
    <body>

                    <h2> Booking Form </h2>
                </div>
                <div class="well col-md-4">
                    <form method="POST" enctype="multipart/form-data" class="" id="myForm" action="unit_booking.php">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname" required="required" />
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" required="required" />
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="text" class="form-control" name="phoneNumber" required="required" />
                        </div>

                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text" class="form-control" name="unit" required="required" />
                        </div>  

                        <div class="form-group">
                            <label>Check in</label>
                            <input type="date" class="form-control" name="checkIn" required="required" />
                        </div>
                        <br />
                        <div class="form-group">
                            <button class="btn btn-info form-control"  id="myButton" name="submit"><i class="glyphicon glyphicon-save" type="submit" ></i> Submit</button>
                        </div>
                    </form>
                </div>

        








       <!--<script>

        //document.getElementById("myButton").addEventListener("click", function() {
         //   Swal.fire({
         //       title: 'Thank You!',
          //      text: "Your details has been successfully submitted.Thanks!",
          //      icon: 'success',
           //     showCancelButton: false,
           //     confirmButtonColor: '#74b72e',
               
          //      confirmButtonText: 'OK'
          //  })
          //  });
     
 

            // Function to get query parameters by name
           // function getQueryParam(name) {
          //      const urlParams = new URLSearchParams(window.location.search);
         //       return urlParams.get(name);
          //  }

            // Get the room_id, unit_name, and unit_photo parameters from the URL
        //    const roomId = getQueryParam('room_id');
          //  const unitName = getQueryParam('unit_name');
         //   const unitPhoto = getQueryParam('unit_photo');

         //   // Display the unit name and photo
         //   if (unitName && unitPhoto) {
         //       document.getElementById('unitName').textContent = "Selected Unit: " + unitName;
         //       document.getElementById('unitPhoto').src = unitPhoto;
         //   } else {
         //       document.getElementById('unitDetails').textContent = "No unit selected.";
         //   }
        </script>
    </body>
</html>