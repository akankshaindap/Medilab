

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab</title>
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
   <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
  <style type="text/css">
     .table-responsive {
    max-height:500px;
    </style>



    

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#medicines">Medicines</a></li>
                <li class=""><a href="#offline">Offline Stores</a></li>
                <li class=""><a href="#online">Online Stores</a></li>
                <li class=""><a href="#doctor-team">Doctors</a></li>
                <li class=""><a href="#contact">Contact Us</a></li>
                <li class=""><a href="#footer">About Us</a></li>
               
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Search Medicine!!</h1>
           
              <a href="search.php" class="btn btn-appoint bt-lg">--Search--</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#medicines"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->


  <!--service-->
  <section id="medicines" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Medicines</h2>
        <br>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
            
                <?php
                $user = 'root';
                $password = '';
                $db = 'medilab';
                $host = 'localhost';
                $link = mysqli_connect( $host,$user, $password,$db);

                if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                  }
                 
                 $sql = "SELECT * FROM medilab.medicine ORDER BY m_name ASC"; 
                if ($res = mysqli_query($link, $sql)) { 
                    if (mysqli_num_rows($res) > 0) { 

                        echo "<div class='container'>";
                        echo "<div class='table-responsive'>";
                        echo "<table class='table table-hover '>";
                        echo "<thead>" ;
                        echo "<tr style='background-color:#1c4a5a;color:white'>"; 
                        echo "<th>Name</th>"; 
                        echo "<th>Brand</th>"; 
                        echo "<th>Disease</th>"; 
                        echo "<th>Effectiveness</th>"; 
                        echo "<th>Weight</th>"; 
                        echo "<th>Price(₹)</th>"; 
                        echo "</tr>";
                        echo "</thead>"; 
                        while ($row = mysqli_fetch_array($res)) {
                          echo "<tbody>"; 
                            echo "<tr>"; 
                            echo "<td>".$row['m_name']."</td>"; 
                            echo "<td>".$row['m_brand']."</td>"; 
                            echo "<td>".$row['m_disease']."</td>"; 
                            echo "<td>".$row['m_effect']."</td>"; 
                            echo "<td>".$row['m_weight']." gm</td>"; 
                            echo "<td>".$row['m_price']." ₹/-</td>"; 
                            echo "</tr>"; 
                            echo "</tbody>" ; 
                        } 
                        echo "</table>"; 
                        echo "</div>";
                        echo "</div>";
                    } 
                    else { 
                        echo "No matching records are found."; 
                    } 
                } 
                else { 
                    echo "ERROR: Could not able to execute $sql. "
                                                .mysqli_error($link); 
                } 
                mysqli_close($link);

                ?>
  

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
 
  <!--cta-->
  <!--about-->
  <section id="offline" class="section-padding">
    <div class="container">
      <div class="row">
        
          <div class="section-title">
            <h2 class="head-title lg-line">Offline Store </h2>
            <hr class="botm-line">
            <?php
            $user = 'root';
                $password = '';
                $db = 'medilab';
                $host = 'localhost';
                $link = mysqli_connect( $host,$user, $password,$db);

                if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                  }
                 
                 $sql2 = "SELECT * FROM medilab.offline ORDER BY o_name ASC"; 
                if ($res2 = mysqli_query($link, $sql2)) { 
                    if (mysqli_num_rows($res2) > 0) { 
                        echo "<div class='container'>";
                         echo "<div class='table-responsive'>";
                        echo "<table class='table table-hover'>";
                        echo "<thead>" ;
                        echo "<tr style='background-color:#1c4a5a;color:white'>"; 
                        echo "<th>Name</th>"; 
                        echo "<th>Address</th>"; 
                        echo "<th>City</th>"; 
                        echo "<th>Pincode</th>"; 
                        echo "<th>Email</th>"; 
                        echo "<th>Contact No</th>"; 
                        echo "</tr>";
                        echo "</thead>"; 
                        while ($row2 = mysqli_fetch_array($res2)) {
                          echo "<tbody>"; 
                            echo "<tr>"; 
                            echo "<td>".$row2['o_name']."</td>"; 
                            echo "<td>".$row2['o_address']."</td>"; 
                            echo "<td>".$row2['o_city']."</td>"; 
                            echo "<td>".$row2['o_pincode']."</td>"; 
                            echo "<td>".$row2['o_email']." </td>"; 
                            echo "<td>".$row2['o_contact']."</td>"; 
                            echo "</tr>"; 
                            echo "</tbody>" ; 
                        } 
                        echo "</table>"; 
                        echo "</div>";
                        echo "</div>"; 
                    } 
                    else { 
                        echo "No matching records are found."; 
                    } 
                } 
                else { 
                    echo "ERROR: Could not able to execute $sql. "
                                                .mysqli_error($link); 
                } 
                mysqli_close($link);

                ?>

           
          </div>
        
      </div>
    </div>
  </section>

  <section id="online" class="section-padding">
    <div class="container">
      <div class="row">
        
          <div class="section-title">
            <h2 class="head-title lg-line">Online Store </h2>
            <hr class="botm-line">
          <?php
            $user = 'root';
                $password = '';
                $db = 'medilab';
                $host = 'localhost';
                $link = mysqli_connect( $host,$user, $password,$db);

                if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                  }
                 
                 $sql3 = "SELECT * FROM medilab.online ORDER BY on_name ASC"; 
                if ($res3 = mysqli_query($link, $sql3)) { 
                    if (mysqli_num_rows($res2) > 0) { 
                        echo "<div class='container'>";
                        echo "<div class='table-wrapper-scroll-y my-custom-scrollbar'>";
                         echo "<div class='table-responsive'>";
                        echo "<table class='table table-hover'>";
                        echo "<thead>" ;
                        echo "<tr style='background-color:#1c4a5a;color:white'>"; 
                        echo "<th>Name</th>"; 
                        echo "<th>Website</th>"; 
                        echo "</tr>";
                        echo "</thead>"; 
                        while ($row3 = mysqli_fetch_array($res3)) {
                          echo "<tbody>"; 
                            echo "<tr>"; 
                            echo "<td>".$row3['on_name']."</td>"; 
                            echo '<td><a href="'.$row3['on_link'].'">'.$row3['on_website'].'</a></td>';
             
                            echo "</tr>"; 
                            echo "</tbody>" ; 
                        } 
                        echo "</table>";
                        echo "</div>";
                        echo "</div>"; 
                        echo "</div>"; 
                    } 
                    else { 
                        echo "No matching records are found."; 
                    } 
                } 
                else { 
                    echo "ERROR: Could not able to execute $sql. "
                                                .mysqli_error($link); 
                } 
                mysqli_close($link);

                ?>
           
          </div>
        
      </div>
    </div>
  </section>
  <!--/ about-->

  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Doctors!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jessica Wally</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Iai Donas</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Amanda Denyl</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jason Davis</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--/ testimonial-->
  <!--cta 2-->
  /*<section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
         Good customer service is all about bringing customers back. And about sending them away happy – happy enough to pass positive feedback about your business along to others, who may then try the product or service you offer for themselves and in their turn become repeat customers.
          <p class="text-right text-primary"><i>— Medilab Healthcare</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-3x"></i>PRP Polytechnic<br>Navghar Road,<br> Bhayander, Mumbai 353298</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-3x"></i>info@medilab.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-3x"></i>+91 8080220553 <br>+91 9167334477 <br>+91 8779006620 <br>+91 9766273991</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
            <div class="space"></div>
            
            <div id="errormessage"></div>
            <form action="insert.php" method="POST" name ="Contact" id="myFormId" role="form" class="contactForm" >
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" id="click" class="btn btn-form" >Send Message</button>
              </div>
             

              
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
            	 <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
              <p><br><br><br>Designed and Created by : <br>- Saniya Shaikh <br>- Akanksha Indap <br>- Harsh sanghani  <br>- Parth Patil<br>- Manisha Chauhan </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.php"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              
            </div>
            <div class="info-sec">
              <ul class="social-icon">
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
         
            <div class="credits">
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
 
  <script src="contactform/contactform.js"></script>

</body>

</html>
