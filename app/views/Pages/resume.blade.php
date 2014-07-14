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
        <p><i class="fa fa-github fa-2x"></i> | <i class="fa fa-linkedin fa-2x"></i></p>
      </div><!--/contact -->
    </div> <!-- endWell -->
  </div> <!-- endSideBar -->

  <!------ MainContent ------>

  <div class="col-md-8">
    <div class="row">
      <div class="well">
      <p>I am Full Stack Web Developer from California currently living in Texas, now looking for opportunities as a Web Developer for a great company.  I have a background in Sales and Event management, Now I am looking to advance my career as a web developer. I am really interested in company culture for my next position.  If my next job will allow me to exercise in the morning, meet plenty of interesting people and develop life long skills then I believe we should connect.  In return I can give you or your team an individual who's ready to work hard and do great things for your company. Check out the rest of my resume and see if we can be a good fit. But I already know I am so send me an email and we can connect.</p>
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
        <p>Codeup has been Codeup is a 12 week  bootcamp that turns non-techies into programmers. COming from a non-technical background I am still constantly learning but I a great fundamental ability as both a frnt-end and backend developer.  more importantly I have learned to learn languages quickly and if there's something I don't know then I can teach my self that lesson without much guidance.</p>
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
        <p>In my short time as a developer I have built several sites which ranged from a job for recent college grads and a portflio to promote myself along with a blog.  I have also created a Pop A Shot game from Javascript and JQuery. PLus an address book using PHP and MySQL </p>
      </div>
      <div class="col-md-6">
        <h4><i class="fa fa-plus"></i> Sales</h4>
        <p>Befoe web development I was building my career as an inside sales rep calling customers and partner organizations closing deals and building reputations with partnering companies. I am familiar with a sales cylce and overcoming objection</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h4><i class="fa fa-plus"></i> Event Management</h4>
        <p>My expertise comes from working multple sporting events at an active colege.  I was involved in a lot of the manual labor innvoled of setting a facilty up and breaking down.  Also Had to organize others in Gameday execution on running an active facility with over 15,000 attendees. </p>
      </div>
      <div class="col-md-6">
        <h4><i class="fa fa-plus"></i> Digital Content</h4>
        <p>Outside of my professional life I'm very interested in Digital content and producing online content. I am self taught and educated when it comes to video production. My passion for Digital content is a true hobby. Getting paid would nice but if I never got paid to continue developing my skils I will be happy.</p>
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
      <p>As a freelance Developer I worked on several projects for practicaluses and personal interest.</p>
      <ul>
        <li>Built a Personal Blog using Laravel Framework, MySQL and Styled Using Twitter Bootstrap</li>
        <li>Worked on a 3 member team to build a Website to provide Jobs for middle school and hish schools for students.  Used HTML, CSS, Javascript, Laravel, MySQL, Twitter Bootstrap</li>
        <li>Created a Whack-A-Mole game using HTML, CSS, Javascript, JQuery</li>
      </ul>
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Medtronic - Inside Sales Rep</h4>
      <h5><i class="fa fa-calendar-o"></i> June 2012 - December 2013</h5>
        <p>Inside sales responsible for $100,000+ for medical devices.  Called patients, Medical offices and insurance companies to complete transacitons of medical products to help patients.  Work with outside team member </p>
    </div>
    <div>
      <h4><i class="fa fa-suitcase"></i> Stanford University - Event Manager</h4>
      <h5><i class="fa fa-calendar-o"></i> February 2010 - May 2012</h5>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
     </div><!--/span-->
  </div> <!-- endMainContent -->
</div> <!-- endWholeContent -->
<footer class="row">
  <div class="panel-footer text-center">
    <p>&copy; <?php echo date("Y") ?> All Rights Reserved </p>
  </div>
</footer>
@stop
