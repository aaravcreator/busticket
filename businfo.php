<!DOCTYPE html>
<html>
<head>
	    



<link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS INFORMATION SYSTEM</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Bus Information</title>


	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost:3000/bsewa.php">HOMEPAGE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost:3000/login.php">ADMIN LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:3000/businfo.php">BUS INFORMATION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:3000/passenger.php">PASSENGER DETAILS</a>
        </li>
        
        </li>
      </ul>
    </div>
  </div>
</nav>





<br>
<div class="container my-4>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<h3 style="border:4px dotted blue" >BSewa(BusSewa)</h3>

	</div>
</nav>
       <div class="container my-4>
      <div class="row">
      	  <form class="form-control" action="businfo.php" method="post">

      	  	<div class="form-group">
      	  		<label class="col-lg-2 control-label"> From </label>

      	  		<div class="col-lg-4">
      	  			
                     <input type="text" class="form-control"  name="departure_from" placeholder="">
                  </div>
                     
            </div>

            <div class="form-group">
            	<label class="col-lg-2 control-label" > To  </label>

            	<div class="col-lg-4" >
            		<input type="text" name="destination" id="from" class="form-control"  >
            	</div>	

            </div>


             <div class="form-group">
            	<label class="col-lg-2 control-label" > Date  </label>

            	<div class="col-lg-4" >
            		<input type="text" name="datee" id="to" class="form-control"  >
            	</div>	

            </div>

          <div class="form-group">
            	<label class="col-lg-2 control-label" ></label>

            	<div class="col-lg-4" >
            		<input type="submit" name="submit" value="Search"  class="btn btn-primary"  >
            	</div>	

            </div>

        </form>

      </div>

     <div class="table container mt-4">
     	<table>
     		
           <thead>
           	
              <tr>
              	    
              	    <th scope="col">***BUS NAME*****   </th>
              	    <th scope="col">***BUS NO***   </th>
              	    <th scope="col">**FROM****    </th>
              	    <th scope="col">DESTINATION***** </th>
              	    <th scope="col">DEPARTURE TIME***    </th>
               
                    <th scope="col">TOTAL SEAT*** </th>
                    <th scope="col">EMPTY SEAT** </th>
                    <th scope="col">FARE*** </th>
                    <th scope="col">CONTACT*** </th>
                    <th scope="col">DATE***</th>
                    <th scope="col">***Action</th>
                    

               </tr>

          <?php

     		include("db.php");
     		if(isset($_POST['submit'])){
     			$departure_from = $_POST['departure_from'];
     			$destination = $_POST['destination'];
     			$datee =$_POST['datee'];

                if($departure_from !="" || $destination !="" || $datee !="") {


                $sql ="SELECT * FROM registered_users WHERE departure_from='$departure_from' AND destination = '$destination' AND datee = '$datee' "; 
                      
                         $data =$conn->query($sql);
                         if($data->num_rows > 0 ){

                         	while($row = $data->fetch_assoc()){

                         		$name = $row['name'];
                         		
                         		$bus_no = $row['bus_no'];
                         		$departure_from = $row['departure_from'];
                         		$destination = $row['destination'];
                         		$bus_departure = $row['bus_departure'];
                         		$total_no = $row['total_no'];
                         		$occupied_seat = $row['occupied_seat'];
                         		$fare = $row['fare'];
                         		$contact = $row['contact'];
                         		$datee = $row['datee'];
                         		
                        ?>

                        <tr>
                             <td><?php echo $name;?></td>
                             <td><?php echo $bus_no;?></td>
                             <td><?php echo $departure_from;?></td>
                             <td><?php echo $destination;?></td>
                             <td><?php echo $bus_departure;?></td>
                             <td><?php echo $total_no;?></td>
                             <td><?php echo $occupied_seat;?></td>
                             <td><?php echo $fare;?></td>
                             <td><?php echo $contact;?></td>
                             <td><?php echo $datee;?></td>

                        </tr>
                        <?php

                         	}
                         }


                       else{
                       	?>
                           <tr>
                                <td> No Bus at this time!</td>
                            </tr>    

                        <?php
                       }
                   }



     		}

            ?>

     	</tbody>


     </div>
</div>

</body>
</html> 