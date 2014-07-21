@extends('layouts.master')

@section('topscript')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

@stop

@section('content')
<!-- WholeContent -->
<div class="row">

  <!------ SideBar ------>

  <div class="col-md-4">
    <div class="well">
      <div>
          <img src="img/headshot_casual.png" class="img-responsive">
      </div>
      <div class="bio">
        <h2>Jonathan Robinson</h2>
        <p>Web Developer | Digital Content Creator</p>
      </div><!--/bio -->
      <div class="contact">
        <p><i class="fa fa-map-marker"></i> San Antonio, TX</p>
        <p><i class="fa fa-phone"></i><a href="tel:4082193418"> (408) 219-3418</a></p>
        <p><i class="fa fa-globe"></i><a href="http://www.jonbrobinson.com"> www.jonbrobinson.com</a></p>
        <p><i class="fa fa-envelope"></i><a href="mailto:jonbrobinson@gmail.com"> jonbrobinson@gmail.com</a></p>
        <p><a href="http://www.github.com/jonbrobinson" style="color: black"><i class="fa fa-github fa-2x"></i></a> | <a href="https://www.linkedin.com/in/jonathanbrobinson" style="color: black"><i class="fa fa-linkedin fa-2x"></i></a></p>
      </div><!--/contact -->
    </div> <!-- endWell -->
  </div> <!-- endSideBar -->

  <!------ MainContent ------>

  <div class="col-md-8">
    <div class="row">
      <div class="well">
      <p>I am a Full Stack Web Developer looking for employment opportunities as a web developer.  My previous employment background includes positions in sales, event management, and community service coordination. I can contribute individually or within a team organizational matrix.</p>
      </div> <!-- endWell -->
    </div> <!-- endRow -->

    <!---------- Education ---------->
    <div class="header">
      <h2>Education.</h2>
      <hr />
    </div>
    <div>
      <div>
        <h4><i class="fa fa-graduation-cap"></i> Codeup - Web Development, <em>San Antonio, TX</em></h4>
        <p>Completed a 12 week bootcamp to develop skills in the following programming languages. HTML, CSS, Javascript, JQuery, PHP, Laravel, Twitter Bootstrap. I have a great fundamental ability as both a front-end and backend developer.  More importantly the ability to learn languages quickly and if there's something I don't know then I can teach my self that lesson without much guidance.</p>
      </div><!--endRow-->
      <div>
        <h4><i class="fa fa-graduation-cap"></i> Hampton University - BS Marketing, <em>Hampton, VA</em></h4>
        <p>At Hampton, I graduated with honors with a degree in Marketing. I also was a two-sport Athlete who competed on the  Men's Track and Field and Basketball teams.</p>
      </div><!--endRow-->
    </div>

    <!---------- Certification ---------->
    <div class="header">
    <h2>Certifications & Training.</h2>
    <hr />
    </div>
    <div class="row">
      <div class="well" id="cert">
        <h4><i class="fa fa-laptop"></i> Full Stack Developer - LAMP (Linux, Apache, MySql, PHP) Stack</h4>
        <p>I have learned several languages</p>
        <ul>
          <li>PHP/Laravel</li>
          <li>Javascript/JQuery</li>
          <li>HTML</li>
          <li>CSS</li>
          <li>MySQL</li>
          <li>Twitter Bootstrap</li>
        </ul>

      </div><!--/span-->
    </div><!--/row-->

    <!---------- Work Experience ---------->
    <div class="header">
    <h2>Work Experience.</h2>
    <hr />
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Freelance Web Developer</h4>
      <h5><i class="fa fa-calendar-o"></i> May 2014</h5>
      <p>I completed several projects for work application and personal development</p>
      <ul>
        <li>Built a Personal Blog using Laravel Framework, MySQL and Styled Using Twitter Bootstrap</li>
        <li>Worked on a 3 member team to build a Website to provide Jobs for middle school and high school students.  Used HTML, CSS, Javascript, Laravel, MySQL, Twitter Bootstrap</li>
        <li>Created a Pop-A-Shot game using HTML, CSS, Javascript, JQuery</li>
      </ul>
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Medtronic - Inside Sales Rep</h4>
      <h5><i class="fa fa-calendar-o"></i> July 2012 - December 2013</h5>
        <p>Inside Sales Rep responsible for closing sales on our Medical Equipment for Diabete patients. I worked closely with our external field rep to support client oppotunities. Position also involved verbal and wriiten communication with medical offices for processing new sales. I also had to talk with medical offices and facilities to gather paperwork to process patients medical devices.</p>
        <ul>
          <li>Responsible for $100,000+ in revenue per month for insulin pump sales</li>
          <li>Achieved sales goal Months w/Over 100% New Patients Conversion Rate</li>
          <li>Achieved individual sales goals established by management</li>
        </ul>
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Stanford University - Event Manager</h4>
      <h5><i class="fa fa-calendar-o"></i> February 2010 - May 2012</h5>
      <p>Position as an event manager responsible for coordinating all gameday activities for all major sporting events.  My tasks included  setting up of sporting venues and preperation to operate for maximum capacity attendees.  I was responsible for resolving gameday issues as they arose. Other responsibilities included special assigments working with the NCAA organization for championship hosted events at Stanford.</p>
      <ul>
        <li>Executes the game day management and operations of Stanford University athletic venue’s for 36 Varsity sports: from baseball- volleyball. Task included: facility set-up, visiting team accomodations, and aftergame clean up.</li>
        <li>Manager of 12 member team to manage and support game day operations for 50,000 capacity football Stadium on Varsity Game days (Ave 40,000 spectators)</li>
        <li>Selected by Golf department to Set-Up and monitor course during NCAA Hosted tornaments</li>
        <li>Selected to supervise a team of 15 employees during the baseball season</li>
        <li>Worked directly with Senior Athletic Director of Championships to coordinate operations for NCAA Sponsored Events</li>
      </ul>
     </div><!--/span-->
  </div> <!-- endMainContent -->
</div> <!-- endWholeContent -->
<footer class="row">
  <div class="panel-footer text-center">
    <p>&copy; <?php echo date("Y") ?> All Rights Reserved </p>
  </div>
</footer>
@stop
