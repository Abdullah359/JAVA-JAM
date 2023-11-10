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
    <?php
        include "partials/navbar.php";
    ?>

        <img src="images/mugs.jpg" alt="Mugs of coffee on shelves" height="300px" width="400px" align="right">
        <main>
            <h2 class="mt-5">Variety at JavaJam</h2>
            <p>
                Indulge in our locally roasted free-trade coffee and enjoy the aroma, the smooth taste, the caffeine!
                Join our Mug Club and get a 10% discount on each cup of coffee you purchase &mdash; ask the barista for
                details.
            </p>
            <dl>
                <strong class="fst-italic" >
                    <u><dt>Just Java</dt></u> 
                </strong>
                <dd><small>Regular house blend, decaffeinated coffee, or flavor of the day</small>
                <br><em>Endless Cup</em> <mark>$3.50</mark></dd>
                <strong class="fst-italic" >
                    <u><dt>Café au lait</dt></u>
                </strong>
                <dd><small>House blended coffee infused into a smooth, steamed milk.</small><br><em>Single</em> <mark>$4.00</mark> <em>Double</em> <mark>$5.00</mark></dd>
                <strong class="fst-italic">
                    <u><dt>Iced Cappuccino</dt></u>
                </strong>
                <dd><small>Sweetened espresso blended with icy-cold milk and served in a chilled glass.</small><br><em>Single</em> <mark>$5.00</mark> <em>Double</em>
                <mark>$6.50</mark></dd>
                <strong class="fst-italic">
                    <u><dt>Frappuccino</dt></u>
                </strong>
                <dd><small>Blended ice coffee with whipped cream.</small><br><em>Single</em> <mark>$5.69</mark> <em>Double</em> <mark>$6.50</mark></dd>
                <strong class="fst-italic">
                    <u><dt>Tea</dt></u>
                </strong>
                <dd><small>Assorted variety of tea flavors.</small><br><em>Single</em> <mark>$2.80</mark> <em>Double</em> <mark>$3.58</mark></dd>
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