<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="icon" href="favicon1.jpeg" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Food Surfers</title>
    <!--
    

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <!-- <img src="assets/images/ashirwad_logo.png" align="klassy cafe html template"> -->
                            <p style="margin-top: 36px; font-size: 18px; color: tomato;">Food Surfers</p>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="index.php">About</a></li>
                            <li class="scroll-to-section"><a href="search.php">Search Canteen</a></li>
                            <li class="scroll-to-section"><a href="mapping.php">Data Mapping</a></li>
                            <li class="scroll-to-section"><a href="index.php">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <style>
    body{
        padding:100px;
    }
    </style>
    
<?php
    include('db_con.php');
    // // Database credentials
     
    // $hostname = 'localhost';
    // $username = 'Rahul';
    // $password = 'Rahul123';
    // $database = 'u484908010_FoodSurfers';
    
    // // Create a new mysqli connection
    // $conn = new mysqli($hostname, $username, $password, $database);
    
    // // Check the connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    
    // Get the search query from the form submission
    $searchQuery = $_GET['search_query'];
    
    // Prepare the SQL query
    $sql = "SELECT * FROM canteen_data WHERE address LIKE '%$searchQuery%'";
    
    // Execute the query
    $result = $conn->query($sql);
    
    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Output the data for each row
        while ($row = $result->fetch_assoc()) {
            //echo "ID: " . $row['id'] . "<br>";
            echo "Name: " . $row['name'] . "<br>";
            echo "Address: " . $row['address'] . "<br>";
            echo "City: " . $row['city'] . "<br>";
            echo "Rating: " . $row['rating'] . "<br>";
            echo "Review: " . $row['review'] . "<br>";
            // Output other relevant data fields
            echo "<hr>";
        }
    } else {
        echo "No results found.";
    }
    
    // Close the connection
    $conn->close();
    ?>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container" style="width:100%;">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <!-- <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a> -->
                        <p style="margin-top: 18px; font-size: 23px; color: white;">Code Surfers</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© 2023 Copyright Code Surfers

                            <br>Design: Rahul Shinde</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>
</body>

</html>
