<!DOCTYPE html>
<html lang="en">
<?php
#Words
$dept = "Department of Mathematics";
$faculty = [
    ["https://www.annauniv.edu/Maths/images/faculty/jones%20photo-new.jpg", "Dr. L. Jones Tarcius Doss", "Professor & Head", "044 - 2235 8508 / 8522", "jones@annauniv.edu", "Numerical Analysis, Partial Differential Equations, Scientific Computing, Algorithms", "https://annauniv.irins.org/profile/117921"],
    // [IMG,Name,Desig,Phono,email,Research area,irins]
    ["https://www.annauniv.edu/Maths/images/faculty/jones%20photo-new.jpg", "Dr. L. Jones Tarcius Doss", "Professor & Head", "044 - 2235 8508 / 8522", "jones@annauniv.edu", "Numerical Analysis, Partial Differential Equations, Scientific Computing, Algorithms", "https://annauniv.irins.org/profile/117921"],
    ["https://www.annauniv.edu/Maths/images/faculty/jones%20photo-new.jpg", "Dr. L. Jones Tarcius Doss", "Professor & Head", "044 - 2235 8508 / 8522", "jones@annauniv.edu", "Numerical Analysis, Partial Differential Equations, Scientific Computing, Algorithms", "https://annauniv.irins.org/profile/117921"],

];
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Welcome to <?php echo $dept ?> - Anna University</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="./Images/Labp.svg" rel="icon" style="border-radius: 150;">
    <link href="./Images/Labp.svg" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" style="background-color: blueviolet">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="container">
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="/">Home</a></li>
                        <li><a class="nav-link scrollto" href="hod.php">HOD's Desk</a></li>
                        <li><a class="nav-link scrollto active" href="#product">Faculty</a></li>
                        <li><a class="nav-link scrollto " href="#work">Facilities</a></li>
                        <li><a class="nav-link scrollto " href="">Projects</a></li>
                        <li><a class="nav-link scrollto " href="#blog">Research</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Academics</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Gallery</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </div>
    </header>
    <!-- Faculties -->
    <div class="container">
        <h1 style="text-align: center;">Faculties</h1>
        <div class='row row-cols-4 row-cols-md-4 g-4'>
            <?php
            for ($i = 0; $i < count($faculty); $i++) {
                echo "
                <div class='col'>
                    <div class='card'>
                    <div class='row g-0'>
                        <div class='col-md-4'>
                        <img src='" . $faculty[$i][0] . "' class='card-img-top' alt='...'>
                        </div>
                        <div class='col-md-6'>
                        <div class='card-body'>
                            <p class='card-text'>" . $faculty[$i][1] . "</p>
                            <p class='card-text'>" . $faculty[$i][2] . "</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            ";
            }
            ?>
        </div>
    </div>
</body>

</html>