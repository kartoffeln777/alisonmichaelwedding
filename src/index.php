<!DOCTYPE html>
<?php
$config = parse_ini_file("config.ini");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A website for celebrating Alison and Michael's big day">
    <meta name="author" content="Michael Jones">
    <link rel="icon" href="./favicon.ico">

    <title>Alison & Michael's Wedding</title>

    <link href="./lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="./lib/css/bootstrap-theme.min.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

    <link href="./site.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	</div>
	
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-center">
            <li><a href="#OurStory">Our Story</a></li>
            <li><a href="#OurWedding">Our Wedding</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#Accomodations">Accomodations</a></li>
                <li><a href="#Transport">Transport</a></li>
                <li><a href="#ThingsToSee">Things to See</a></li>
              </ul>
	    </li>
            <li><a href="#RSVP">RSVP</a></li>
	  </ul>
<!--
	  <ul class="nav navbar-nav navbar-right">
	    <li class="btn-default"><a href="#about">About</a></li>
            <button class="btn btn-default" type="submit">RSVP</button>
	  </ul>
-->
	</div><!--/.nav-collapse -->
      </div><!--/.containter -->
    </nav>

    <div class="masthead">
      <img class="header-image" src="./img/after-proposal-harbor.jpg">
      <h1>Alison &amp; Michael's Big Day</h1>
      <p class="subtitle">We are looking forward to having you join us on our big day!</p>
    </div>

    <div class="container">
      <div class="jumbotron section-header">
        <img class="header-image" src="./img/hands.jpg">
	<div id="OurStory" class="jumptarget"><h2>Our Story</h2></div>
      </div>

      <div id="HowWeMet" class="inner jumptarget">
        <h3>How We Met</h3>
        In March of 2013, Alison noticed Michael across the room at a local board game gathering. He wore HotPink™ shorts, long black crew socks and sandals. At some point, Michael invited her to a round of King of Tokyo, to which Alison obliged; she trounced him. This did not deter Michael, who later asked Alison to be his teammate in a game of Ladies &amp; Gentlemen -  a game where the man treats his lady to nice things, and the lady shows the nice things off to her friends. Alison agreed, and was the Gentleman to his Lady. Together, they were the ultimate power couple and issued a resounding defeat to the rest of the table. A special relationship was born.
      </div>

      <div>
        <h3>Our Proposal</h3>
        While holidaying in Italy, Alison &amp; Michael travelled to Venice. After a day at the Basilica, marvelling at the beautiful treasure Venetian pirates had plundered from Byzantium, Michael insisted on taking a side-trip to see a modern art gallery - The <a href="https://www.google.com/maps/@45.4307284,12.335311,17.88z" target="_blank">Punta della Dogana</a>. Unbeknownst to Alison, Michael intended to propose there, as it offered a panoramic view over the Grand Canal and St. Mark's Square. To sustain the ruse, Michael had purchased tickets for entrance to the gallery before their arrival, but unfortunately for him, things had taken a dark, sinister turn since he last visited the art world. The gallery was filled with sculpture and painting that made the innocents weep, the pious unsure, and the the faint of heart fumble. With their hearts and minds forever changed, Michael brought Alison out of the gallery to the waterfront. His nerves high (was it the proposal or the art which afflicted him with nerves? he cannot say), he bent his knee and fumbled in his jacket pocket for a small box. When he looked up at Alison, he could tell that his actions so far had thankfully cleared her mind of the images from earlier. Michael recited a poem he found in a collection of love poetry he had from college - <a href="https://en.wikipedia.org/wiki/Love's_Philosophy" target="_blank">Love's Philosophy by Percy Bysshe Shelley</a>. When he finished, Michael asked Alison to marry him, to which she agreed.
      </div>

      <div id="OurWedding" class="inner jumptarget">
        <div class="small-image-frame">
          <img class="header-image" src="./img/wynden.jpg">
	</div>
	<h3>Our Wedding</h3>
	Alison &amp; Michael will be getting married in Houston, TX, where they have made their home. Dinner will be served after the ceremony. They would be honored if you attended the occasion.
        <br>
        <div class="EX-details">
          <h4>The Gist</h4>
          <b>When:</b> February 19<sup>th</sup>, 2017<br>
          <b>Where:</b> <a href="https://www.facebook.com/The-Wynden-391434937603142/" target="_blank">The Wynden</a>&emsp;
          <a href="https://www.google.com/maps/dir//The+Wynden,+1025+S+Post+Oak+Ln,+Houston,+TX+77056/@29.7571248,-95.4627507,15z/data=!4m15!1m6!3m5!1s0x0:0x4aad67163f2b829c!2sThe+Wynden!8m2!3d29.7571248!4d-95.4627507!4m7!1m0!1m5!1m1!1s0x8640c145dc37164b:0x4aad67163f2b829c!2m2!1d-95.4627507!2d29.7571248" target="_blank"><span class="glyphicon glyphicon-map-marker"></span> Directions</a><br>
          <b>How:</b> <a href="https://www.theknot.com/content/wedding-guest-attire-cheat-sheet" target="_blank">Dressy Casual</a>
          <br>
          <br>
          <div title="Add to Calendar" class="addeventatc">
            Add to Calendar
            <span class="start">02/19/2017 05:00 PM</span>
            <span class="end">02/19/2017 11:00 PM</span>
            <span class="timezone">America/Chicago</span>
            <span class="title">Alison &amp; Michael's Wedding Day</span>
            <span class="description">The big day for your favorite people!</span>
            <span class="location">1025 S Post Oak Ln, Houston, TX 77056</span>
            <span class="organizer">Michael Jones</span>
            <span class="organizer_email">rsvp@alisonmichaelwedding.com</span>
            <span class="all_day_event">false</span>
            <span class="date_format">MM/DD/YYYY</span>
	    <span class="client"><?php echo $config['addeventclient'] ?></span>
	  </div>
          <br>
          <h4>The Deets</h4>
          <b>Who:</b>
          <br>
<!--
	  <div class="row">
            <div class="col-sm-1">test1</div>
            <div class="col-sm-1">test2</div>
          </div>
-->
	  <div class="row">
            <div class="col-sm-8"><b>The Girls</b></div>
            <div class="col-sm-8"><b>The Boys</b></div>
          </div>
          <div class="row">
            <div class="col-sm-8 media">
              <div class="media-left">
                <img class="media-object" src="./img/jenny.jpg" width=64>
              </div>
              <div class="media-body">
                <h5 class="media-heading">Jenny Allen - Matron of Honor</h5>
                Jenny has known Alison since Alison first came to Houston.
              </div>
            </div>
            <div class="col-sm-8 media">
              <div class="media-left">
                <img class="media-object" src="./img/eric_e.jpg" width=64>
              </div>
              <div class="media-body">
                <h5 class="media-heading">Eric Eldridge - Best Man</h5>
                Eric and Michael were classmates from Middle School through College.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="Details" class="jumbotron section-header">
        <img class="header-image" src="./img/boat-bright.jpg">
        <h2>Details</h2>
      </div>

      <div id="Accomodations" class="inner jumptarget">
        <h3>Accomodations</h3>
        Coming soon.
      </div>

      <div id="Transport" class="inner jumptarget">
        <h3>Transportation</h3>
        Coming soon.
      </div>

      <div id="ThingsToSee" class="inner jumptarget">
        <h3>Things to See</h3>
        Coming soon.
      </div>

      <div class="jumbotron section-header">
        <img class="header-image" src="./img/boat-dark.jpg">
        <h2 id="RSVP" class="jumptarget">RSVP</h2>
      </div>

      <div class="inner">
	Please rsvp by sending us a <a href="mailto:rsvp@alisonmichaelwedding.com">message</a>.<br>
        Please be sure to include whether you will be in attendance, the full name of your guest, your mailing address, and - if it isn't the one used to RSVP - what your preferred email address for future contact might be. We hope to see you at our wedding!
      <div>

<!-- Button trigger modal -->
<!--
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#rsvpModal">
        Launch demo modal
      </button>
-->

      <div class="modal multi-step fade" id="rsvpModal" tabindex="-1" aria-labelledby="rsvpModalLabel" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
	    <div class="modal-header">
              <h3 class="modal-title" id="rsvpModalLabel">This is a Demo</h3>
              <h4 class="modal-title step-1" data-step="1">Step 1</h4>
              <h4 class="modal-title step-2" data-step="2">Step 2</h4>
            </div>
            <div class="modal-body step step-1">
              This is step 1.
            </div>
            <div class="modal-body step step-2">
              This is step 2.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent()">Continue</button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->

    <div class="mastfoot">
      <div class="inner">
        <p>Made with love by <a href="https://autorefactorer.com">Michael</a>. Source can be found <a href="https://github.com/PisoMojado/alisonmichaelwedding">here</a>.</p>
      </div>
    </div>

    <script src="./lib/js/multi-step-modal.js"></script>
    <script>
      //A script for animating the anchor links
      $('a[href*=\\#]').on('click', function(event) { 
	event.preventDefault();
        $('html,body').animate({ scrollTop:$(this.hash).offset().top }, 400);
      });
    </script>
    <script>
      sendEvent = function() {
        $('#rsvpModal').trigger('next.m.2');
      };
    </script>
  </body>
</html>
