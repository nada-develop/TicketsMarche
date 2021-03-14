<?php 

$conn = mysqli_connect('localhost', 'root', '', 'ticketsmarchgroupb');
 if(isset($_POST['name'])){
     $name = $_POST['name'];
     $location = $_POST['location'];
     $place = $_POST['place'];
     $category = $_POST['category'];
     $fprice = $_POST['fprice'];
     $tprice = $_POST['tprice'];
     $dfrom = $_POST['fday'] . "-" . $_POST['fmonth'] . "-" . $_POST['fyear'];
     $dto = $_POST['tday'] . "-" . $_POST['tmonth'] . "-" . $_POST['tyear'];
     $folder = "../../site/images/";
     $image = $_FILES['image']['name'];
     $target = $folder.basename($image);
     move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);
     $images = $_FILES['images']['name'];
     $target = "$folder".basename($images);
     move_uploaded_file($_FILES["images"]["tmp_name"], "$folder".$_FILES["images"]["name"]);

     $q = "INSERT INTO events(ename, elocation, eplace, ecategory, pfrom, pto, dfrom, dto, img, imgs) VALUES ('$name', '$location', '$place', '$category',  '$fprice', '$tprice', '$dfrom', '$dto', '$image', '$images')";
     $result = mysqli_query($conn, $q);

     header('Location: ../list/event-list.php');
 };


?> 

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Event</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form action="new-event.php" method="post" enctype="multipart/form-data">
        <h2>New Event</h2>

        <div class="input-field">
            <input type="text" name="name" required autocomplete="off">
            <label for="name">Name...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="location" required autocomplete="off">
            <label for="location">Location...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="place" required autocomplete="off">
            <label for="place">Place...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="category" required autocomplete="off">
            <label for="category">Category...</label>
            <span></span>
        </div>
        
        <div class="input-field price-field">
            <input type="text" name="fprice" required autocomplete="off"> 
            <label for="fprice">Price from...</label>
            <span></span>
        </div>

        <div class="input-field price-field">
            <input type="text" name="tprice" required autocomplete="off">
            <label for="tprice">Price to...</label>
            <span></span>
        </div>

        <div class="fselect">
            <h4>From </h4>
            <div class="input-field select">
                <select name="fyear" id="fyear" class="date" onchange="showHideMonthF()">
                    <option value="0"></option>
                </select>
                <label>Year...</label>
                <span></span>
            </div>

            <div class="input-field select select-month">
                <select name="fmonth" id="fmonth" onchange="showHideDayF()">
                    <option value="0"></option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="Septemper">Septemper</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <label>Month...</label>
                <span></span>
            </div>

            <div class="input-field select select-day">
                <select name="fday" id="fday">
                    <option value="0"></option>
                </select>
                <label>Day...</label>
                <span></span>
            </div>
        </div>    
        
        <div class="sselect">
            <h4>To</h4>
            <div class="input-field select">
                <select name="tyear" id="tyear" class="date" onchange="showHideMonthT()">
                    <option value="0"></option>
                </select>
                <label>Year...</label>
                <span></span>
            </div>

            <div class="input-field select tselect-month">
                <select name="tmonth" id="tmonth" onchange="showHideDayT()">
                    <option value="0"></option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="Septemper">Septemper</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <label>Month...</label>
                <span></span>
            </div>

            <div class="input-field select tselect-day">
                <select name="tday" id="tday">
                    <option value="0"></option>
                </select>
                <label>Day...</label>
                <span></span>
            </div>
        </div>   

        <h4>First Image</h4>
        <div class="input-field upload">
            <input type="file" name="image" class="image">
        </div>

        <h4>Second Image</h4>
        <div class="input-field upload">
            <input type="file" name="images" class="image">
        </div>

        <section class="fix"></section>

        <button type="submit" name="add">Add</button>
        <a href="../list/event-list.php"><button type="button" name="button">Events List</button></a>
        <section class="fix"></section>
    </form>

    <script src="../js/main.js"></script>
</body>

</html>