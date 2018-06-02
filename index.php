<!DOCTYPE html>

<?php
require __DIR__ . '/vendor/autoload.php';

use Rsvp\DataModel\Datastore;

//$id = ltrim($_SERVER['REQUEST_URI'], '/');
$datastore = new Datastore('wedding-rsvp-201609');
$rsvp = $datastore->read('NtIwsF38lkCz/8IPDYW/vw==');

?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Renee & Sean</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">R&S Wedding</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#timeline">Timeline</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#rsvp">RSVP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#details">Info</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">Renee & Sean</div>
          <div class="intro-lead-in">Maui, Hawaii | 2018.10.6 &nbsp;&nbsp;
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#rsvp">RSVP</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Timeline -->
    <section id="timeline">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Wedding Timeline</h2>
              <h3 class="section-subheading text-muted">Saturday, Oct. 6, 2018, 10AM - 6PM</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <ul class="timeline">
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="https://storage.googleapis.com/rsvp-resources/Ceremony.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>10:00 - 10:45 AM</h4>
                      <h4 class="subheading">Ceremony</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">Outdoor on Kapalua Bay Deck with panoramic ocean views.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="https://storage.googleapis.com/rsvp-resources/DroneView.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>10:45 AM - 12:00 PM</h4>
                      <h4 class="subheading">Cocktail Hour</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">This is a good time taking some pictures, socializing and exploring the deck and the grassy overlook.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="https://storage.googleapis.com/rsvp-resources/Reception.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>12:00 - 2:00 PM</h4>
                      <h4 class="subheading">Reception</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">Please join our lunch reception.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="https://storage.googleapis.com/rsvp-resources/Sunset-sailing1.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>3:30 - 6:00 PM</h4>
                      <h4 class="subheading">Sunset Sail</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">Departure at Lahaina Harbor. Bring your camera in a zip lock bag and sunscreen. All guests names will be collected for boarding.</p>
                    </div>
                  </div>
                </li>
                <li class = "timeline-inverted">
                  <div class="timeline-image">
                    <h4>Thanks 
                    <br>for
                    <br>joining us
                    </h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>


    <!-- RSVP -->
    <section id="rsvp" > <!--class="bg-light"-->
        <style>
            #rsvp {
              background-color: #FDFBF7;
              height: 100%;
              width: 100%;
            }        
        </style>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Hello, <?php echo $rsvp['invitees']; ?>!</h2>
            <h3 class="section-subheading text-muted">We would like to invite you to our wedding
            <br> When: Sat, Oct. 6, 2018
            <br> Where: Merriman's Maui, Hawaii</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="guests" type="text" placeholder="# of guests *" required="required" data-validation-required-message="How many guests will you bring (not include yourself/yourselves)?">
                    <p class="help-block text-danger"></p>
                  </div>
                <!--<div class="form-group">
                    <label for = "sail">Will you & your guest join us for sunset sail? *</label>
                    <select id="sail" name="sail" required>
                        <option value="" disabled="disabled" selected="selected">Choose an option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>-->

                <div class="form-group">
                  <div class="dropdown">
                    <label for = "sail">Will you & your guest join us for sunset sail? *</label>
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default">Yes</button>
                      <button type="button" class="btn btn-default">No</button>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="dropdown">
                    <label for = "sail">Party Size</label>
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Dropdown
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li>1</li>
                      <li>2</li>
                      <li>3</li>
                      <li>4</li>
                    </ul>
                  </div>
                </div>

              </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message (e.g., food restrictions and allergies, etc.) " ></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
                </div>
             
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Details -->
    <section id="details">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Wedding Information</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-map fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Merriman's Maui (Kapalua)</h4>
            <h4 class="service-heading"><a href="https://www.google.com/maps/place/Merriman's+Maui/@20.9984123,-156.6693332,17z/data=!3m1!4b1!4m5!3m4!1s0x7eaad44b62d8196b:0xe2817ef1b6cae084!8m2!3d20.9984073!4d-156.6671445" target="_blank">1 Bay Club Pl, Lahaina, HI</a> </h4>
            <p class="text-muted">There are a few parking spots in front of the restaurant. The restaurant also has a larger parking lot. When you turn onto Bay Club Pl, the parking lot is on your right hand side. </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Saturday, Oct. 6, 2018</h4>
            <p class="text-muted"> The average maximum daytime temperature in Kapalua, Maui in October is warm 27 &deg;C (81 &deg;F) with moderate heat & humidity.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-black-tie fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Dress Code</h4>
            <p class="text-muted">Our <font color=#008080>style</font> is going to be <font color=#008080>Hawaiian (casual comfort)</font>! Just relax, enjoy the sunshine and beautiful ocean views! The ceremony will be <font color=#008080>outdoors</font> and reception will be <font color=#008080>indoor</font>.</p>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-plane fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Kahului Airport (OGG)</h4>
              <p class="text-muted">Kahului Airport (OGG) is the primary airport on the island of Maui.
                <br>If you travel within Hawaiian islands, Kapalua Airport (JHM) is located on the west side of the Island of Maui, a short distance from the resort destinations.</p>
            </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Tourism</h4>
            <p class="text-muted"><b>Nearby Hotel Zones:</b> Lahaina, Kaanapali & Kapalua.
              <br><b>Eating & drinking:</b> Loco Moco, Kalua Pork, Poke, Shave Ice, Acai Bowl, Mai Tai and many more!!!
              <br><b>Best Sunrise at Haleakala National Park: </b>
              Make sunrise viewing reservations  <font color=#008080>(required)</font> at <a href="https://www.recreation.gov/tourParkDetail.do?contractCode=NRSO&parkId=147940" target="_blank">recreation.gov</a>, up to <font color=#008080>60 days</font> in advance.
              <br><b>Snorkeling spots:</b>
              Molokini, Black Rock, Turtle Town, Ulua Beach...
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-gift fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Gift Registry</h4>
            <p class="text-muted">Your presence is present enough. Our families and friends travel so far, thus we will not have a gift registry.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; R&S Wedding 2018</span>
            <img class="img-fluid" src="https://storage.googleapis.com/rsvp-resources/logo-1.png" alt="" width="45" height="45" >
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-weixin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>