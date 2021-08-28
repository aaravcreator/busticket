<?php
$name = '';

$email = '';
$form_error_message = "<div class='alert alert-danger'>All Fields are required</div>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ok = true;
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


    if ($ok === true) {
        //create new database instance so we can insert data into database
        $newInsertDatabaseInstance = new DatabaseConnection();
        $newInsertDatabaseInstance->insertData($name,$departure_from,$bus_no,$bus_departure,$destination,$total_no,$occupied_seat,$fare,$contact,$datee);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS INFORMATION SYSTEM</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
    <h1 class="text-center"><u>Bus Information Portal</u></h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="name" class="py-2">Bus Name</label>
                <input name="name" type="text" class="form-control my-3" placeholder="Bus Name">
            </div>

               <div class="form-group">
                <label for="name" class="py-2">From</label>
                <input name="departure_from" type="text" class="form-control my-3" placeholder="Departure From">
            </div>


            <div class="form-group">
                <label for="bus_no" class="py-2">Bus No</label>
                <input name="bus_no" type="text" class="form-control my-3" placeholder="Bus Number">
            </div>

             <div class="form-group">
                <label for="bus_departure" class="py-2">Bus Departure Time</label>
                <input name="bus_departure" type="text" class="form-control my-3" placeholder="Bus Departure">
            </div>
            <div class="form-group">
                <label for="destination" class="py-2">Destination</label>
                <input name="destination" type="text" class="form-control my-3" placeholder="Destination">
            </div>

             <div class="form-group">
                <label for="total_no" class="py-2">Total No Of Seat</label>
                <input name="total_no" type="text" class="form-control my-3" placeholder="Total No">
            </div>

             <div class="form-group">
                <label for="occupied_seat" class="py-2">Occupied Seat</label>
                <input name="occupied_seat" type="text" class="form-control my-3" placeholder="Occupied Seat">
            </div>
            <div class="form-group">
                <label for="fare" class="py-2">Bus Fare</label>
                <input name="fare" type="text" class="form-control my-3" placeholder="Fare">
            </div>
              <div class="form-group">
                <label for="contact" class="py-2">Contact</label>
                <input name="contact" type="text" class="form-control my-3" placeholder="Contact">
            </div>
               
                 <div class="form-group">
                <label for="datee" class="py-2">Date</label>
                <input name="datee" type="text" class="form-control my-3" placeholder="Date">
            </div>
             

            <div class="form-group">
                <button class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>

</body>

</html>