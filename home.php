<?php
    session_start();
    include 'LogIn_SignUp/connect.php';
    if($_SESSION['email']==''){
        header("location: loginSignup.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaJam | Coffee Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/javajam.css">
</head>

<body>
    <div id="wrapper">
        <!-- NAVBAR -->
        <?php
        include "partials/navbar.php";
        ?>
        
        <div id="homehero"></div>
        <main class="mx-6">
            <h2 style="margin-left: 90px;" class="fs-2 mt-5">Follow the Winding Road to JavaJam</h2>
            <p>Escape to the Countryside with JavaJam, Where Locally Roasted Coffee and Homemade Pastries Await. You’ll
                feel right at home at JavaJam!</p>
            <p>Friendly and eclectic &mdash; JavaJam Coffee Bar is the perfect place to take a break, enjoy a refreshing
                beverage, and have a snack or light meal.</p>
            <h3 class="mt-5">JavaJam Coffee Bar features:</h3>
            <ul>
                <li>Specialty Coffee and Tea</li>
                <li>Bagels, Muffins, and Gluten-free Pastries</li>
                <li>Organic Salads</li>
                <li>Music and Poetry Readings</li>
                <li>Open Mic Night</li>
            </ul>
            <div class="h6 fst-italic mt-5">
                Near Wahdat Road<br>
                Lahore, Punjab 54000<br>
                +92 300 1234567<br>
            </div>
        </main>
        
    <?php
    include "partials/footer.php";
    ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>