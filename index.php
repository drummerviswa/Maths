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
$ser = ["Number of Servers: 2 with an additional 2 systemOther Facilities:", "UPS with 26 Batteries
Network Switch Rack"];
$sel = ["Srinivasa Ramanujan Seminar Hall Seating Capacity:110", "Number of Books available: More than 3500 books related to Mathematics and Computer Science"];

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
  <link href="./Images/Labp.svg" rel="icon" style="border-radius: 150;">
  <link href="./Images/Labp.svg" rel="apple-touch-icon">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top" style="background-color: rgba(0, 0, 0,0.0);position:absolute">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="container">
        <nav id="navbar" class="navbar">
          <div></div>
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
          <div></div>
        </nav>
      </div>
    </div>
  </header>
  <div id="hero" class="hero route bg-image" style="background-image: url(Images/depImg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container animate__animated animate__heartBeat">
          <p class="display-6 color-d">Welcome to </p>
          <h1 class="hero-title mb-4"><?php echo $dept ?></h1>
          <p class="display-6 color-d">Anna University</p>
        </div>
      </div>
    </div>
  </div>

  <main id="main">
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
    </section>

    <section id="product" class="services-mf pt-5 route" > 
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Courses Offered
              </h3>
              <div class="row justify-content-center">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling1" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Msc Integrated (5years) CS/IT</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <p></p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Msc Integrated (5years)</h5>
                      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling1" aria-controls="offcanvasScrolling">More Info</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                      <h3 class="offcanvas-title" id="offcanvasScrollingLabel">Msc Mathematics</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <p></p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Msc Mathematics (2years)</h5>
                      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">More Info</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>