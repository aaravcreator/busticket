<html>
<body>
<?php
// require 'DatabaseConnection.php';

$newSelectInstance = new DatabaseConnection();
$results = $newSelectInstance->selectData('registered_users');

?>
<table class="table container mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Bus Name</th>
            <th scope="col">Bus No</th>
            <th scope="col">From</th>
            <th scope="col">Departure Time</th>
             <th scope="col">Destination </th>
            <th scope="col">Total Seat</th>
            <th scope="col">Empty Seat</th>
            <th scope="col">Fare</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <?php
    foreach ($results as $row) {
        printf(
            "<tbody>
            <tr>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
            <td>
                    <button class='btn btn-primary'><a href='update.php?id=%d' class='text-white text-decoration-none'>Edit</a></button> 
                    <button class='btn btn-danger'><a href='index.php?id=%d' class='text-white text-decoration-none'>Delete</a></button>
                </td>
            </tr>
        </tbody>",
            htmlspecialchars($row["id"], ENT_QUOTES),
            htmlspecialchars($row["name"], ENT_QUOTES),
            htmlspecialchars($row["bus_no"], ENT_QUOTES),
            htmlspecialchars($row["departure_from"], ENT_QUOTES),
            htmlspecialchars($row["bus_departure"], ENT_QUOTES),
            htmlspecialchars($row["destination"], ENT_QUOTES),
            htmlspecialchars($row["total_no"], ENT_QUOTES),
            htmlspecialchars($row["occupied_seat"], ENT_QUOTES),
            htmlspecialchars($row["fare"], ENT_QUOTES),
            htmlspecialchars($row["contact"], ENT_QUOTES),
            htmlspecialchars($row["datee"], ENT_QUOTES),
            htmlspecialchars($row["id"], ENT_QUOTES),
            htmlspecialchars($row["id"], ENT_QUOTES),
             htmlspecialchars($row["id"], ENT_QUOTES),


           
        );
    }
    ?>
</table>
</body>
</html>