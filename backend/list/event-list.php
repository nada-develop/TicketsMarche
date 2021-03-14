<?php
    $conn = mysqli_connect("localhost", "root", "", "ticketsmarchgroupb");

    $q = "SELECT * FROM events";

    $result = mysqli_query($conn, $q);


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Events List</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <h2 class="h2-table">Events List</h2>
        <table margin="0">
            <tr margin="0">
                <td colspan="2">Tools</td>
                <td>Event ID</td>
                <td>Event Name</td>
                <td>Location</td>
                <td>Place</td>
                <td>Category</td>
                <td>Price From</td>
                <td>Price To</td>
                <td>Date From</td>
                <td>Date to</td>
                <td>Image</td>
                <td>Smaller Image</td>
            </tr>
            <?php while($event_info = mysqli_fetch_row($result)){ ?>
            <tr>
                <td><a href="../edit/edit-event.php">Edit</a></td>
                <td><a href="../delete/delete.php">Delete</a></td>

                <?php for ($i=0; $i < sizeof($event_info) - 2 ; $i++) { ?>
                <td margin="-5px"><?php echo $event_info[$i]; ?></td>
                <?php } ?>
                <td margin="-5px"><img src="../../site/images/<?php echo $event_info[9]; ?>" alt="<?php echo $event_info[9]; ?>" width="60px" height="50px"></td>
                <td margin="-5px"><img src="../../site/images/<?php echo $event_info[10]; ?>" alt="<?php echo $event_info[10]; ?>" width="40px" height="40px"></td>

            </tr>
            <?php } ?>
        </table>
        <a class="margin" href="../new/new-event.php"><button class="margin">Add</button></a>
    </body>
</html>
