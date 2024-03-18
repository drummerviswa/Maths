<!DOCTYPE html>
<html lang="en">
<?php
#Words
$dept = "Department of Mathematics";
$faculty = [
    ["https://www.annauniv.edu/Maths/images/faculty/jones%20photo-new.jpg", "Dr. L. Jones Tarcius Doss", "Professor & Head", "044 - 2235 8508 / 8522", "jones@annauniv.edu", "Numerical Analysis, Partial Differential Equations, Scientific Computing, Algorithms", "https://annauniv.irins.org/profile/117921"],
    // [IMG,Name,Desig,Phono,email,Research area,irins]
    ["https://www.annauniv.edu/Maths/images/faculty/Arivudainambi.jpg", "Dr. D. Arivudainambi", "Professor", "044 - 2235 8520", "arivu@annauniv.edu", "Computer Networks, Queueing Thoery, Stochastic Processes and its Applications, Operations Research", "https://annauniv.irins.org/profile/117932"],

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                </nav>
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
                            <div class='col-md-5 flex'>
                            <div class='d-inline-flex'>
                            <img src='" . $faculty[$i][0] . "' class='card-img' alt=" . $faculty[$i][1] . " >
                            </div>
                            <a target='_blank' href=".$faculty[$i][6]." class='btn btn-primary'>For More Info</a>
                                </div>
                                <div class='col-md-7 d-inline-flex'>
                                <div class='card-body'>
                                <p class='card-text fs-5 fs-md-6'>" . $faculty[$i][1] . "</p>
                                <p class='card-text'>" . $faculty[$i][2] . "</p>
                                <p class='card-text'>" . $faculty[$i][3] . "</p>
                                <p class='card-text'>" . $faculty[$i][4] . "</p>
                                <p style=font-size:0.8rem>" . $faculty[$i][5] . "</p>
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
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>