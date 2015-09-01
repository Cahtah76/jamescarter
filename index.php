<!DOCTYPE html>
<html ng-app='jamescarter'>
<head>
  <meta charset='utf-8'>
  <title>James Carter</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'>

  <!---Scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!---FONT-->
  <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>

  <!---CSS-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">James Carter</a>
      </div>
      <div class="collapse navbar-collapse pull-right" id="myNavbar">
        <ul class="nav navbar-nav">
          <li data-toggle="collapse" data-target="#myNavbar"><a href="#">Home</a></li>
          <li data-toggle="collapse" data-target="#myNavbar"><a href="#about-container">About Me</a></li>
          <li data-toggle="collapse" data-target="#myNavbar"><a href="#portfolio-container">Portfolio</a></li>
          <li data-toggle="collapse" data-target="#myNavbar"><a href="#resume-container">Resume</a></li>
          <li data-toggle="collapse" data-target="#myNavbar"><a href="#contact-container">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="header-container">
      <div class="header">
        <h1>James (Bobby) Carter</h1>
        <h2>Web Developer</h2>
        <h3>Personal Contact Information</h3>
        <h4>Email: jamesrcarter76@gmail.com</h4>
        <h4>Phone: (801) 641-3559</h4>
        <div class="contact-icons">
          <span>
            <a class="fa fa-github" href="https://github.com/Cahtah76" target="_blank"></a>
            <a class="fa fa-linkedin" href="https://www.linkedin.com/profile/view?id=AAIAABKcjHgBWwYJO8WuFovPWDzi8zEOw95KwRs&trk=nav_responsive_tab_profile" target="_blank"></a>
        </div>
      </div>   
  </div>
  <div id="about-container">
    <div class="about">
      <h1>ABOUT ME</h1>
    </br>
      <p1>Hey so not that these thing aren't already awkward enough, i'll just go about it like you're looking at my tinder profile and I am really hoping you will swipe right. Well I am 6'4, yeah I know a giant please hold the how is the weather up there jokes.  I love my family and friends. I work really hard and hopefully that is the reason you are here.  I am a web developer and a business professional.  I love sports and coach little league football at Brighton. If you are thinking about me designing your website and you are wondering why you should pick me over anyone else let me try to sway you.  I have always said if someone gives me just an opportunity to show them I can do it, whatever it may be at the time, I won't waste that opportunity I will prove it to you every single day.  I am known as the grinder wherever I go.  I may not be the best or the brightest but I am the hardest working and that makes up for anything I may be lacking.  I actually created this whole site you are on in one night.  Not to say I am amazingly fast,  thats not the case, I just work hard at everything I do. well I hope that sways you if not call me up lets have a chat. Thanks for getting to know me.</p1>
    </div>
  </div>
  <div id="portfolio-container">
    <div class="portfolio">
      <h1>PORTFOLIO</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="item">
              <img src="images/yessio1.png">
            </div>
          </div>
          <div class="item">
            <img src="images/yessio5.png">
          </div>
          <div class="item">
            <img src="images/yessio2.png">
          </div>
          <div class="item">
            <img src="images/yessio3.png">
          </div>
          <div class="item">
            <img src="images/yessio4.png">
          </div>
          <div class="item">
            <img src="images/yessio6.png">
          </div>
          <div class="item">
            <img src="images/yessio7.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="resume-container">
    <div class="resume">
      <h1>RESUME</h1>
        <p>jamesrcarter76@gmail.com | (801)641-3559 </p>

      <h3>Skills</h3>
      <p1></p1>
      <h3>Projects</h3>
      <p1></p1>
      <h3>Experience</h3>
      <h3>Education</h3>
      <h3>Volunteer Experience</h3>
    </div>
  </div>
  <div id="contact-container">
    <div class="contact">
      <h1>CONTACT ME</h1>
        <form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
        </div>
    </div>
    <div class="form-group">
        <div class="">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>
    </div>
  </div>
</body>
</html>



