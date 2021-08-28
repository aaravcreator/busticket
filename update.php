<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE RECORD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php

    require 'DatabaseConnection.php';

    // Get the value of id and check if every part of it is a digit
    if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        // Redirect to index.php if id is not set.
        header('Location: index.php');
    }

    $name = $email = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $ok = true;
        $form_error_message = "<div class='container mt-4 alert alert-danger'>❌ Please all form fiels are required</div>";
        if (empty($_POST['name'])) {
            $ok = false;
            echo $form_error_message;
        } else {
            $name = $_POST['name'];
        }

       if (empty($_POST['departure_from'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $departure_from = $_POST['departure_from'];
    }


    if (empty($_POST['bus_no'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $bus_no = $_POST['bus_no'];
    }
   
       
    if (empty($_POST['bus_departure'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $bus_departure = $_POST['bus_departure'];
    }
    
    if (empty($_POST['destination'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $destination = $_POST['destination'];
    }

    if (empty($_POST['total_no'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $total_no = $_POST['total_no'];
    }

    if (empty($_POST['occupied_seat'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $occupied_seat = $_POST['occupied_seat'];
    }

    
    if (empty($_POST['fare'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $fare = $_POST['fare'];
    }

    if (empty($_POST['contact'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $contact = $_POST['contact'];
    }

    if (empty($_POST['datee'])) {
        $ok = false;
        echo $form_error_message;
    } else {
        $datee = $_POST['datee'];
    }
        if ($ok) {
            

            $newUpdateInstance = new DatabaseConnection();
            $newUpdateInstance->updateData($name,$departure_from,$bus_no,$bus_departure,$destination,$total_no,$occupied_seat,$fare,$contact,$datee, $id);

            //return to index page
            header('Location: index.php');

        }
         // else {

         //    $newDatabaseSelect = new DatabaseConnection();
         //    $result = $newDatabaseSelect->selectSingleRecord('registered_users', $id);
            

         //    foreach ($result as $row) {
         //        $name = $row['name'];
         //        $departure_from = $row['departure_from'];
         //        $bus_no = $row['bus_no'];
         //        $bus_departure = $row['bus_departure'];
         //        $destination = $row['destination'];
         //        $total_no = $row['total_no'];
         //        $occupied_seat = $row['occupied_seat'];
         //        $fare = $row['fare'];
         //        $contact = $row['contact'];
         //        $datee = $row['datee'];
                
         //    }
        // }
    }

$newDatabaseSelect = new DatabaseConnection();
$result = $newDatabaseSelect->selectSingleRecord('registered_users', $id);
        

foreach ($result as $row) {
    $name = $row['name'];
    $departure_from = $row['departure_from'];
    $bus_no = $row['bus_no'];
    $bus_departure = $row['bus_departure'];
    $destination = $row['destination'];
    $total_no = $row['total_no'];
    $occupied_seat = $row['occupied_seat'];
    $fare = $row['fare'];
    $contact = $row['contact'];
    $datee = $row['datee'];
    
}

  
    ?>

    <h1 class="text-center pt-4">Update This Record</h1>
    <form action="" method="POST" class="container mt-4">
        <div class="form-group mb-4">
            <label for="name" class="pb-3">Bus Name</label>
            <input type="text" class="form-control" name="name" id="" placeholder="Bus Name" value="<?php echo $name; ?>">
        </div>
        

    <div class="form-group">
                <label for="name" class="py-2">From</label>
                <input name="departure_from" type="text" class="form-control my-3" placeholder="Departure From"  value="<?php echo $departure_from; ?>">  
            </div>


            <div class="form-group">
                <label for="bus_no" class="py-2">Bus No</label>
                <input name="bus_no" type="text" class="form-control my-3" placeholder="Bus Number"  value="<?php echo $bus_no; ?>">  
            </div>

             <div class="form-group">
                <label for="bus_departure" class="py-2">Bus Departure Time</label>
                <input name="bus_departure" type="text" class="form-control my-3" placeholder="Bus Departure" value="<?php echo $bus_departure; ?>" >  
            </div>
            <div class="form-group">
                <label for="destination" class="py-2">Destination</label>
                <input name="destination" type="text" class="form-control my-3" placeholder="Destination" value="<?php echo $destination; ?>" >   
            </div>

             <div class="form-group">
                <label for="total_no" class="py-2">Total No Of Seat</label>
                <input name="total_no" type="text" class="form-control my-3" placeholder="Total No" value="<?php echo $total_no; ?>"> 
            </div>

             <div class="form-group">
                <label for="occupied_seat" class="py-2">Occupied Seat</label>
                <input name="occupied_seat" type="text" class="form-control my-3" placeholder="Occupied Seat" value="<?php echo $occupied_seat; ?>">
            </div>
            <div class="form-group">
                <label for="fare" class="py-2">Bus Fare</label>
                <input name="fare" type="text" class="form-control my-3" placeholder="Fare" value="<?php echo $fare; ?>" >
            </di>
              <div class="form-group">
                <label for="contact" class="py-2">Contact</label>
                <input name="contact" type="text" class="form-control my-3" placeholder="Contact" value="<?php echo $contact; ?>"> 
            </div>
               
                 <div class="form-group">
                <label for="datee" class="py-2">Date</label>
                <input name="datee" type="text" class="form-control my-3" placeholder="Date" value="<?php echo $datee; ?>">  

            </div>

        <div class="form-group">
            <button class="btn btn-success" name="submit">Update</button>
        </div>

</form>
</body>
</html>
