<!DOCTYPE html>

<?php
#Words
$dept = "Department of Mathematics";
$labincharge = "Mrs. T. Tamizhvani";
$desc = "The Department of Mathematics has a well infrastructure lab facility to promote student skills in both academic and
    research aspects. The laboratory is split into two parts: Main and Annexure. Both labs have internet facilities, and
    there is a reliable power backup system in place to handle interruptions in power. We have 50 digital kits to provide a
    hands-on experience related to circuit designs/digital electronics to our students. Our lab was equipped with more
    than 100 highly configured desktops, a fully air-conditioned, LCD Projector, and a Screen. To have practical
    knowledge and hands-on training, we provide the software facilities for all curriculum-related subjects such as
    Networking, Operating Systems, Software Testing, R programming, Graphics, etc.,The main propose of these
    laboratories is to provide the required facilities for Postgraduate students for their laboratory courses and also for
    the Research Scholars and Faculty members to carry over the computational tasks related to their research works.";


#Table Data
$ICT_head = ["Hall no: ", "Seating capacity"];
$ICT = [[1, 90], [2, 90], [4, 30], [5, 60], [6, 50], [48, 30]];


$syst = [["Acer Veriton M4660G", "16GB", "2TB", "Ubuntu"], ["Dell optiplex3020", "6GB", "500GB", "Windows 7"]];
$ser=["Number of Servers: 2 with an additional 2 systemOther Facilities:","UPS with 26 Batteries
Network Switch Rack"];
$sel =["Srinivasa Ramanujan Seminar HallSeating Capacity:110","Number of Books available: More than 3500 books related to Mathematics and Computer Science"];

#Images
$bgimage = "./Images/formula-bg.png";
?>
<html lang="en">

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
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: rgba(0, 0, 0,0.0);position:absolute">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html"><?php #Logo 
                                                  ?></a></h1> -->
      <div class="container">
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="/">Home</a></li>
            <li><a class="nav-link scrollto" href="hod.php">HOD's Desk</a></li>
            <li><a class="nav-link scrollto" href="faculties.php">Faculty</a></li>
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
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(Images/depImg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container animate__animated animate__heartBeat">
          <p class="display-6 color-d">Welcome to </p>
          <h1 class="hero-title mb-4"><?php echo $dept ?></h1>
          <p class="display-6 color-d">Anna University</p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section style="background-image: url(<?php echo $bgimage ?>); " class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p><?php echo $desc; ?></p>
            <div style="border-radius: 20px;max-height:max-content" class="box-shadow-full">
              <div class="row">
                <div class="col-md-5">
                  <div class="row">
                    <h2 class="title-left">
                      Academics Lab
                    </h2>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <div class="card">
                          <img src="./Images/Labp.svg" class="card-img-top" alt="..." style="max-height: 300px;">
                          <div class="card-body">
                            <p class="card-title">Lab Incharge</p>
                            <p class="card-text"><?php echo $labincharge ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5" style="margin-top: 45px;">
                      <h6 style="font-size: 0.8rem;">LAB 1: MAIN + EXTENSION</h6>
                      <h6 style="font-size: 0.8rem;">No.of Systems: 65+35</h6>
                      <h6 style="font-size: 0.8rem;">No.of Digital kits: 50</h6>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About the Department of Mathematics
                      </h5>
                    </div>
                    <div class="row">
                      <div class=" col-md-6">
                        <table class="px-2 table table-bordered">
                          <thead class="table-dark">
                            <tr>
                              <?php
                              for ($i = 0; $i < count($ICT_head); $i++) {
                                echo "<th scope='col'>" . $ICT_head[$i] . "</th>";
                              }
                              ?>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            for ($i = 0; $i < count($ICT); $i++) {
                              echo "<tr>" . "<th scope='row'>" . $ICT[$i][0] . "</th>" . "<td>" . $ICT[$i][1] . "</td>" . "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <h6>No. of smartroom classes: 6</h6>
                        <h6>Total seating capacity: 340</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="container col-5">
            <div class="title-box-2">
              <h5 class="title-left">Laboratories</h5>
            </div>
            <div class="row">
              <?php
              for ($i = 0, $j = 1; $i < count($syst); $i++) {
                $j = $i + 1;
                echo "
            <div class='card mb-3 ' style='max-width: 500px;'>
          <div class='row g-0'>
          <div class='col-md-5'>
              <img src=" . "Images/system" . $j . ".png" . " class='img-fluid rounded-start' style='margin-top:45px' alt='...'>
            </div>
            <div class='col-md-7'>
            <div class='card-body'>
            <h5 class='card-title'>System specifications</h5>
            <p class='card-text'>Main Lab: 65
            <li>Model: " . $syst[$i][0] . "</li>
            <li>Ram: " . $syst[$i][1] . "</li>
            <li>HDD: " . $syst[$i][2] . "</li>
            <li>OS: " . $syst[$i][3] . "</li>
            </p>
            </div>
            </div>
            </div>
            </div>";
              }
              ?>
            </div>
          </div>
          <div class="container col-5">
            <div class="title-box-2">
              <h5 class="title-left">Servers and Storage</h5>
            </div>
            <div class="row">
              <?php
              for ($i = 0; $i < count($syst); $i++) {
                $j = $i + 1;
                echo "
            <div class='card mb-3 ' style='max-width: 500px;'>
            <div class='row g-0'>
            <div class='col-md-5'>
            <img src=" . "Images/server" . $j . ".png" . " class='img-fluid rounded-start' style='margin-top:45px' alt='...'>
            </div>
            <div class='col-md-7'>
            <div class='card-body'>
            <h5 class='card-title'>System specifications</h5>
            <p class='card-text'>Main Lab: 65
                  <li>Model: " . $syst[$i][0] . "</li>
                  <li>Ram: " . $syst[$i][1] . "</li>
                  <li>HDD: " . $syst[$i][2] . "</li>
                  <li>OS: " . $syst[$i][3] . "</li>
                  </p>
                  </div>
                  </div>
                  </div>
                  </div>";
              }
              ?>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="container col-5">
            <div class="title-box-2">
              <h5 class="title-left">Seminar Halls and Library</h5>
            </div>
            <div>
              <?php
              for ($i = 0, $j = 1; $i < count($syst); $i++) {
                $j = $i + 1;
                echo "
            <div class='card mb-3 row'>
          <div class='row g-0'>
          <div class='col-md-5'>
              <img src=" . "Images/seminar" . $j . ".png" . " class='img-fluid rounded-start' alt='...'>
            </div>
            <div class='col-md-7'>
            <div class='card-body'>
            <p class='card-text'>" . $sel[$i] . "</p>
            </div>
            </div>
            </div>
            </div>";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <section id="product" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Courses Offered
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->
</body>

</html>