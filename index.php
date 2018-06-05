<!DOCTYPE html>

<?php
require __DIR__ . '/vendor/autoload.php';

use Rsvp\DataModel\Datastore;

// Form variables
$partySelect = array('', '', '', '');
$sailSelect = array('', '');
$miscText = '';
$deadlineLabel = 'June 30, 2018';

$id = rtrim(ltrim($_SERVER['REQUEST_URI'], '/'), '?');
if ($id) {
  $datastore = new Datastore('wedding-rsvp-201609');
  $rsvp = $datastore->read($id);
} else {
  $rsvp = null;
}

if ($rsvp) {
  $display = '';
  if ($rsvp['party']) {
    $partySelect[$rsvp['party']] = 'selected';
  }
  if (!is_null($rsvp['sail'])) {
    if ($rsvp['sail'] == 'true') {
      $sailSelect[1] = 'selected';
    }
    else {
      $sailSelect[2] = 'selected';
    }
  }
  if ($rsvp['misc']) {
    $miscText = $rsvp['misc'];
  }
  if ($rsvp['deadline']) {
    $deadlineLabel = $rsvp['deadline'];
  }
} else {
  $display = 'd-none';
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Renee & Sean</title>
  <!-- Icon -->
  <link rel="icon" href="https://storage.googleapis.com/rsvp-resources/logo-1.png">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet" type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet" type='text/css'>
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
          <li class="nav-item <?php echo $display ?>">
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
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger <?php echo $display ?>" href="#rsvp">RSVP</a>
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
                  <!-- <p class="text-muted">Outdoor on Kapalua Bay Deck with panoramic ocean views.</p> -->
                  <p class="text-muted">The ceremony will take place at the ocean front deck overlooking the Kapalua Bay. Starting sharp at fifteen past then, please allow ample travel time and arrive the venue before 10:00 AM. Parkings are available outside the venue. Head to the sign-in table and proceed to the outdoor decking area.</p>
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
                  <p class="text-muted">Good time to take pictures, socializing and exploring the deck and the grassy overlook.</p>
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
  <section id="rsvp" class="<?php echo $display ?>">
    <!--class="bg-light"-->
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
          <h3 class="invitation-subheading text-muted">
            You are cordially invited to
          </h3>
          <h1 class="section-heading">Renee & Sean's Wedding</h1>
          <h3 class="invitation-subheading text-muted">Saturday, October 6, 2018 10AM - 6PM</h3>
          <h3 class="invitation-subheading text-muted">
            <a href="https://www.google.com/maps/place/Merriman's+Maui/@20.9984123,-156.6693332,17z/data=!3m1!4b1!4m5!3m4!1s0x7eaad44b62d8196b:0xe2817ef1b6cae084!8m2!3d20.9984073!4d-156.6671445" target="_blank">
              Merriman's Maui, 1 Bay Club Pl, Lahaina, HI
            </a>
          </h3>
          <h3 class="invitation-subheading text-muted">Will you be able to join us? Please R.S.V.P. by <?php echo $deadlineLabel ?>.</h3>
          <div class="form-group col-lg-12">
          <div class="btn-group-lg text-center" role="group">
              <button id="rsvpYesButton" type="button" class="btn btn-secondary">Yes</button>
              <button id="rsvpNoButton" type="button" class="btn btn-secondary">No</button>
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="form-group">
              <div class="form-check d-none">
                <input class="form-control form-check-input" checked="true" type="checkbox" id="weddingInput"></input>
                <input class="form-control" id="rsvpId" value="<?php echo $id ?>"></input>
              </div>
            </div>
            <div class="collapse show" id="rsvpAcceptCollapse">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="invitation-text">How many people in your party (including yourself) will be joining?</label>
                    <select id="partyInput" class="form-control custom-select">
                      <option value="1" <?php echo $partySelect[1]; ?>>One</option>
                      <option value="2" <?php echo $partySelect[2]; ?>>Two</option>
                      <option value="3" <?php echo $partySelect[3]; ?>>Three</option>
                      <option value="4" <?php echo $partySelect[4]; ?>>Four</option>
                    </select>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="invitation-text">Will you & your guest be joining us for the <a href="#timeline">sunset sail?</a></label><br/>
                    <select id="sailInput" class="form-control custom-select">
                      <!-- <option value="" disabled="disabled" selected="selected">Choose an option</option> -->
                      <option value="true" <?php echo $sailSelect[1]; ?>>Yes</option>
                      <option value="false" <?php echo $sailSelect[2]; ?>>No</option>
                    </select>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="invitation-text">Anything we should know about?</label>
                    <textarea class="form-control" id="miscInput" rows="5" placeholder="e.g. allergies, dietary restrictions, accommodation for kids, etc."><?php echo $miscText; ?></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 collapse" id="rsvpRejectCollapse">
              <h3 class="col-lg-12 invitation-subheading text-muted text-center">Thank you for letting us know. Hopefully we can catch up again soon!</h3>
            </div>
            <div class="clearfix"></div>
            <br>
            <br>
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
            <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Saturday, Oct. 6, 2018</h4>
          <p class="text-muted"> The average maximum daytime temperature in Kapalua, Maui in October is warm 27 &deg;C (81 &deg;F) with moderate heat & humidity.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
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
            <br>If you travel within Hawaiian islands, Kapalua Airport (JHM) is located on the west side of the Island of Maui, a short distance from the resort destinations.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Tourism</h4>
          <p class="text-muted"><b>Nearby Hotel Zones:</b> Lahaina, Kaanapali & Kapalua.
            <br><b>Eating & drinking:</b> Loco Moco, Kalua Pork, Poke, Shave Ice, Acai Bowl, Mai Tai and many more!!!
            <br><b>Best Sunrise at Haleakala National Park: </b>
            Make sunrise viewing reservations  <font color=#008080>(required)</font> at <a href="https://www.recreation.gov/tourParkDetail.do?contractCode=NRSO&parkId=147940" target="_blank">recreation.gov</a>, up to <font color=#008080>60 days</font> in advance.
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
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-weixin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="https://storage.googleapis.com/rsvp-resources/jquery.min.js"></script>
  <script src="https://storage.googleapis.com/rsvp-resources/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
</body>
</html>