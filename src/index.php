<!DOCTYPE html>
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

    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./lib/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Story<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#OurWedding">Our Wedding</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
	    </li>
	    <li class=dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details<span class="caret"></span></a>
	      <ul class="dropdown-menu">
                <li><a href="#">A temp</a></li>
              </ul>
            </li>
	  </ul>
<!--
	  <ul class="nav navbar-nav navbar-right">
	    <li class="btn-default"><a href="#about">About</a></li>
            <button class="btn btn-default" type="submit">RSVP</button>
	  </ul>
-->
	</div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="masthead">
      <img class="header-image" src="./img/after-proposal-harbor.jpg">
      <h1>Alison &amp; Michael's Big Day</h1>
      <p class="subtitle">We are looking forward to having you join us on our big day!</p>
    </div>

    <div class="container">
      <div id="OurStory" class="jumbotron section-header">
        <img class="header-image" src="./img/hands.jpg">
	<h2>Our Story</h2>
      </div>

      <div id="HowWeMet" class="inner jumptarget">
        <h3>How We Met</h3>
        In March of 2013, Alison noticed Michael across the room at a local board game gathering. He wore HotPink™ shorts, long black crew socks and sandals. At some point, Michael invited her to a round of King of Tokyo, to which Alison obliged; she trounced him. This did not deter Michael, who later asked Alison to be his teammate in a game of Ladies &amp; Gentlemen -  a game where the man treats his lady to nice things, and the lady shows the nice things off to her friends. Alison agreed, and was the Gentleman to his Lady. Together, they were the ultimate power couple and issued a resounding defeat to the rest of the table. A special relationship was born.
      </div>

<!--
      <div id="WhenWeBegan" class="inner">
        Michael later invited Alison and some other people to an afternoon at his apartment. While leaving, Alison and Michael 
      </div>
-->

      <div>
        <h3>Our Proposal</h3>
        While holidaying in Italy, Alison &amp; Michael travelled to Venice. After a day at the Basilica, marvelling at the beautiful treasure Venetian pirates had plundered from Byzantium, Michael insisted on taking a side-trip to see a modern art gallery - The <a href="https://www.google.com/maps/@45.4307284,12.335311,17.88z">Punta della Dogana</a>. Unbeknownst to Alison, Michael intended to propose there, as it offered a panoramic view over the Grand Canal and St. Mark's Square. To sustain the ruse, Michael had purchased tickets for entrance to the gallery before their arrival, but unfortunately for him, things had taken a dark, sinister turn since he last visited the art world. The gallery was filled with sculpture and painting that made the innocents weep, the pious unsure, and the the faint of heart fumble. With their hearts and minds forever changed, Michael brought Alison out of the gallery to the waterfront. His nerves high (was it the proposal or the art which afflicted him with nerves? he cannot say), he bent his knee and fumbled in his jacket pocket for a small box. When he looked up at Alison, he could tell that his actions so far had thankfully cleared her mind of the images from earlier. Michael recited a poem he found in a collection of love poetry he had from college - <a href="https://en.wikipedia.org/wiki/Love's_Philosophy">Love's Philosophy by Percy Bysshe Shelley</a>. When he finished, Michael asked Alison to marry him, to which she agreed. 
      </div>

      <div id="OurWedding" class="inner jumptarget">
	<h3>Our Wedding</h3>
        <div class="small-image-frame">
          <img class="header-image" src="./img/wynden.jpg">
	</div>
        It all started 3000 Years Ago. It was the middle of the great gear wars on Geartopia, and Gear-head was still trying to figure out who he was in such a tragically beautiful gear world.
      </div>
      
      <div id="Details" class="jumbotron section-header">
        <img class="header-image" src="./img/boat-bright.jpg">
        <h2>Details</h2>
      </div>

      <div class="inner">
        <h3>Sub-section</h3>
        You can get to our wedding by driving in a car to the ceremony. Or, if you're farther than what is a convenient distance for terrestrial vehicles, you can use an alternative, such as an aeroplane or boat.
      </div>

      <div id=RSVP class="jumbotron section-header">
        <img class="header-image" src="./img/boat-dark.jpg">
        <h2>RSVP</h2>
      </div>

      <div class="inner">
        <h3>Sub-section</h3>
        Get ready for a fucking miracle of technology in this section...
      </div>

      <div class="mastfoot">
        <div class="inner">
          <p>Made with love by <a href="https://autorefactorer.com">Michael</a>. Source can be found <a href="https://github.com/PisoMojado/alisonmichaelwedding">here</a>.</p>
        </div>
      </div>
    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
