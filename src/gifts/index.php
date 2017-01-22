<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A website for celebrating Alison and Michael's big day">
    <meta name="author" content="Michael Jones">
    <link rel="icon" href="../favicon.ico">

    <title>Gifts</title>

    <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lib/css/bootstrap-theme.min.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>

    <link href="../site.css" rel="stylesheet">
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
            <li><a href="../#OurStory">Our Story</a></li>
            <li><a href="../#OurWedding">Our Wedding</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../#Accomodations">Accomodations</a></li>
                <li><a href="../#Transport">Transport</a></li>
                <li><a href="../#ThingsToSee">Things to See</a></li>
              </ul>
            </li>
            <li><a href="../#RSVP">RSVP</a></li>
            <li><a href="./">Gifts</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.containter -->
    </nav>

    <div class="masthead">
      <img class="header-image" src="../img/double-happiness.png">
      <h1>Gifts</h1>
    </div>

    <div class="container">
      <div id="content" class="inner jumptarget">
          <!--<h3>How We Met</h3>-->
	If you would like to give us a gift, we have a few suggested ways for you to do so. This is of course optional. We are grateful for everyone who will be in attendance, and for everyone who can not come but will be there in our thoughts and hearts; we're happy just to have your kind wishes.
       <br>
       If you do wish to give us something, we have a request that you not give us something tangible. We are currently in the process of house-hunting, and our 10 sq. ft. apartment cannot contain more stuff without exploding. We'd appreciate it if instead we got help towards some of our goals for starting our lives together.
      </div>

      <div id="redEnvelope" class="inner jumptarget">
        <h3>Red Envelope</h3>
	<a href="https://en.wikipedia.org/wiki/Red_envelope" target="_blank">Red envelopes (紅包)</a> are a traditional gift in Chinese culture, and are the standard gift received in Taiwanese weddings. Typically, they are presented on the day of the wedding to a member of the wedding party stationed at the entrance, before the ceremony. Red envelopes often come printed with decorative art, and you can find some nice ones at <a href="http://www.partycity.com/product/best+wishes+chinese+new+year+red+envelopes+8ct.do" target="_blank">Party City</a> or on <a href="https://www.amazon.com/Chinese-Red-Envelopes-pack-designs/dp/B004IMHWCK" target="_blank">Amazon</a>. If you'd like to participate, just bring it with you to our wedding, or mail it to us before hand if you cannot attend.
      </div>

      <div id="honeymoon" class="inner jumptarget">
        <h3>Honeymoon</h3>
	If you'd like to contribute to our honeymoon, we have a <a href="../" target="_blank">site for that</a>. You can choose what you want the donation to go towards, and when we're going we'll be sure to take pictures and share them with you once we're back to show our thanks.
      </div>

      <div id="home" class="inner jumptarget">
        <h3>Our Home</h3>
        If you'd like to contribute to our home, perhaps for an appliance or a small contribution to the home itself, we have a <a href="../" target="_blank">place for you to do so</a>. Please make the memo out to what you're contributing to. Later, we will be sure to share a picture with you once we have moved in, and the dust has settled.
      </div>
    </div>

    <div class="mastfoot">
      <div class="container">
        <div class="inner">
          <p>Made with love by <a href="https://autorefactorer.com" target="_blank">Michael</a>. Source can be found <a href="https://github.com/PisoMojado/alisonmichaelwedding" target="_blank">here</a>.</p>
        </div>
      </div>
    </div>

    <script src="./lib/js/multi-step-modal.js"></script>
    <script>
      transitionRSVP = function(step) {
        $('#rsvpModal').trigger('next.m.'.concat(step));
      };
    </script>
  </body>
</html>
