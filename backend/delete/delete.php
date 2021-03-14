<?php
    $connect = mysqli_connect("localhost", "root", "", "ticketsmarchgroupb");

    if(isset($_POST['id'])){
    $id = $_POST['id'];

    $queryCode = "DELETE FROM events WHERE id = '$id'";

    mysqli_query($connect, $queryCode);

    header("Location: ../list/event-list.php");}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Event</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form action="delete.php" method="post" enctype="multipart/form-data">
        <h2>Delete Event</h2>

        <div class="input-field">
            <input type="text" name="id" required autocomplete="off">
            <label for="name">ID...</label>
            <span></span>
        </div>

        <button type="submit" name="delete">Delete</button>
        <a href="../list/event-list.php"><button type="button" name="button">Events List</button></a>
        <section class="fix"></section>
    </form>

    
    <script src="../js/main.js"></script>
</body>

</html>