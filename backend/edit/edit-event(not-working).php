<?php 
$conn = mysqli_connect('localhost', 'root', '', 'ticketsmarchgroupb');


if(isset($_POST['name'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $place = $_POST['place'];
    $category = $_POST['category'];
    $fprice = $_POST['fprice'];
    $tprice = $_POST['tprice'];
    $fdate = $_POST['fdate'];
    $tdate = $_POST['tdate'];

    $qs = "INSERT INTO events(ename, elocation, eplace, ecategory, pfrom, pto, dfrom, dto) VALUES ('$name', '$location', '$place', '$category',  '$fprice', '$tprice', '$fdate', '$tdate')";

    $results = mysqli_query($conn, $q);

    header('Location: ../list/event-list.php');

}else{
    
$q = "SELECT * FROM events";

$result = mysqli_query($conn, $q);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Events</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form action="edit-event.php" method="post" class="edit-form">
        <h2>Edit Events</h2>
        <table>
            <tr>
                <td>Event ID</td>
                <td>Event Name</td>
                <td>Location</td>
                <td>Place</td>
                <td>Category</td>
                <td>Price From</td>
                <td>Price To</td>
                <td>Date From</td>
                <td>Date to</td>
            </tr>
            <?php while($event_info = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $event_info["id"] ?></td>
                <td><input type="text" name="name" value="<?php echo $event_info["ename"] ?>"></td>
                <td><input type="text" name="location" value="<?php echo $event_info["elocation"] ?>"></td>
                <td><input type="text" name="place" value="<?php echo $event_info["eplace"] ?>"></td>
                <td><input type="text" name="category" value="<?php echo $event_info["ecategory"] ?>"></td>
                <td><input type="text" name="fprice" value="<?php echo $event_info["pfrom"] ?>"></td>
                <td><input type="text" name="tprice" value="<?php echo $event_info["pto"] ?>"></td>
                <td><input type="text" name="fdate" value="<?php echo $event_info["dfrom"] ?>"></td>
                <td><input type="text" name="tdate" value="<?php echo $event_info["dto"] ?>"></td>
            </tr>
            <?php } ?>
        </table>
        <button type="submit">Save</button>
    </form>

</body>

</html>