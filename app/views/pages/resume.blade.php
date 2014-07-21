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
        <h4><i class="fa fa-graduation-cap"></i> Codeup - Web Development</h4>
        <p>Codeup is a 12 week  bootcamp that turns non-techies into programmers. Coming from a non-technical background I am still constantly learning but I a great fundamental ability as both a frnt-end and backend developer.  More importantly I have learned to learn languages quickly and if there's something I don't know then I can teach my self that lesson without much guidance.</p>
      </div><!--endRow-->
      <div>
        <h4><i class="fa fa-graduation-cap"></i> Hampton University - BS Marketing</h4>
        <p>At Hampton I graduated with honors and was a two-sport Athlete who competed in Men's Track and Field and Men's Basketball. Learned a ot of great lessons as an anthlete such as Teamwork, Leadership and Hardwork.</p>
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

    <!---------- Expertise ---------->
    <div class="header">
    <h2>Expertise.</h2>
    <hr />
    </div>
    <div class="row">
      <div class="col-md-6">
        <h4><i class="fa fa-plus"></i> Web Development</h4>
        <p>I am still constantly learning but I have a great fundamental ability as both a front-end and back-end developer.  I like to deconstruct my problems when I come across them and thats really the best way I learn.  What sets me apart from others is that I have learned several languages quickly and if there's something I don't know then I can teach myself that lesson without much guidance.</p>
      </div>
      <div class="col-md-6">
        <h4><i class="fa fa-plus"></i> Sales</h4>
        <p>Before web development I was building my career as a sales rep. My job was to contact potential clients, assess their needs and provide the appropiate medical equipment. My position helped me develop written and verbal communication skills, critical thinking, and decision making abilities. These were necessary skills to help the company meet its monthy and annual sales goals.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h4><i class="fa fa-plus"></i> Event Management</h4>
        <p>My expertise comes from managing and coordinating various sporting events at Stanford University. As a team supervisor my tasks included gameday preparations for all sporting events; including facility set-up, visiting team accomodations, and aftergame clean up.  These efforts were required for events ranging from 1,000 - 50,000+ attendees.</p>
      </div>
      <div class="col-md-6">
        <h4><i class="fa fa-plus"></i> Digital Content</h4>
        <p>Outside of my professional life I'm very interested in producting digital content and online content.  This is truly a self taught hobby.  My experience comes from projects I find interesting.  I have done projects that have involved photography, film and creative writing.</p>
      </div>
    </div> <!-- endRow -->

    <!---------- Work Experience ---------->
    <div class="header">
    <h2>Work Experience.</h2>
    <hr />
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Freelance Web Developer</h4>
      <h5><i class="fa fa-calendar-o"></i> May 2014</h5>
      <p>As a freelance Developer I worked on several projects for practical uses and personal interest.</p>
      <ul>
        <li>Built a Personal Blog using Laravel Framework, MySQL and Styled Using Twitter Bootstrap</li>
        <li>Worked on a 3 member team to build a Website to provide Jobs for middle school and hish schools for students.  Used HTML, CSS, Javascript, Laravel, MySQL, Twitter Bootstrap</li>
        <li>Created a Pop-A-Shot game using HTML, CSS, Javascript, JQuery</li>
      </ul>
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Medtronic - Inside Sales Rep</h4>
      <h5><i class="fa fa-calendar-o"></i> July 2012 - December 2013</h5>
        <p>As a DTA I was responsible for closing sales on our Medical Equipment for Diabetes patient. I worked closely with with an outside counter part to help generate leads and bring new customers to my sales pipeline. I also had to talk with medical offices and facilities to gather paperwork to process patients medical devices.</p>
        <ul>
          <li>Responsible for $100,000+ in revenue per month for insulin pump sales</li>
          <li>Multiple Months w/Over 100% New Patients Conversion Rate</li>
          <li>Top 20% of overall sales performance </li>
        </ul>
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Stanford University - Event Manager</h4>
      <h5><i class="fa fa-calendar-o"></i> February 2010 - May 2012</h5>
      <p>I worked as a facilities manager on game days for most sports on campus. I had to make sure Facilities were prepared and ready to operate at maximum capacity and solve problems when typical large venue events where going on. I also worked several NCAA Championship Hosted events which involved collaborating with the NCAA to execute championship operations.</p>
      <ul>
        <li>Executes the game day management and operations of Stanford University athletic venue’s for 36 Varsity sports: from baseball- volleyball</li>
        <li>Director of 12 member team to manage and execute game day operations for 50,000 capacity football Stadium on Varsity Game days (Ave 40,000 spectators)</li>
        <li>Work Directly with Senior Athletic Director of Championships to coordinate operations for NCAA Sponsored Events</li>
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
