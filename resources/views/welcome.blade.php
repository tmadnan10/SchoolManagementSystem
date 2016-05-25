@extends('layouts.app')

@section('content')
<style>
    body{
    text-align: center;
    background: #00ECB9;
  font-family: sans-serif;
  font-weight: 100;
}

h1{
  color: #396;
  font-weight: 100;
  font-size: 40px;
  margin: 40px 0px 20px;
}

#clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
}

#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #00BF96;
    display: inline-block;
}

#clockdiv div > span{
    padding: 15px;
    border-radius: 3px;
    background: #00816A;
    display: inline-block;
}

.smalltext{
    padding-top: 5px;
    font-size: 16px;
}
</style>



<link rel="stylesheet" type="text/css" href="css/app.min.css">
<!--<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--

   <div id="slider">
        <figure>
            <img src="cover.jpg" alt="">
            <img src="bg2.jpg" alt="">
            <img src="bg3.jpg" alt="">
            <img src="bg4.jpg" alt="">
            <img src="bg5.jpg" alt="">
        </figure>
    </div>

-->

<div id="ac-gn-curtain" class="ac-gn-curtain"></div>
<div id="ac-gn-placeholder" class="ac-nav-placeholder"></div>

<script type="text/javascript" src="/ac/globalnav/2.0/en_US/scripts/ac-globalnav.built.js"></script>

        <script src="http://images.apple.com/metrics/ac-analytics/1.1/scripts/ac-analytics.js" type="text/javascript" charset="utf-8"></script>

        

<article class="hero-gallery with-paddlenav evergreen" id="hero-gallery" data-analytics-region="hero">

        


<section id="hero-gallery-item-hero-environment" class="hero-gallery-item hero-gallery-item-hero-environment " data-ac-gallery-item>
        <div class="hero-wrapper">
            <figure class="hero-image hero-image-a">
                <img src="img/1.jpg" alt="">
            </figure>
        </div>
    </div>
</section>
        


<section id="hero-gallery-item-hero-environment" class="hero-gallery-item hero-gallery-item-hero-environment " data-ac-gallery-item>
        <div class="hero-wrapper">
            <figure class="hero-image hero-image-a">
                <img src="img/2.jpg" alt="">
            </figure>
        </div>
    </div>
</section>
        


<section id="hero-gallery-item-hero-environment" class="hero-gallery-item hero-gallery-item-hero-environment " data-ac-gallery-item>
        <div class="hero-wrapper">
            <figure class="hero-image hero-image-a">
                <img src="img/3.jpg" alt="">
            </figure>
        </div>
    </div>
</section>
        



<section id="hero-gallery-item-hero-environment" class="hero-gallery-item hero-gallery-item-hero-environment " data-ac-gallery-item>
        <div class="hero-wrapper">
            <figure class="hero-image hero-image-a">
                <img src="img/5.jpg" alt="">
            </figure>
        </div>
    </div>
</section>


<section id="hero-gallery-item-hero-environment" class="hero-gallery-item hero-gallery-item-hero-environment " data-ac-gallery-item>
        <div class="hero-wrapper">
            <figure class="hero-image hero-image-a">
                <img src="img/6.jpg" alt="">
            </figure>
        </div>
    </div>
</section>



            <nav class="dotnav"><ul></ul></nav>
            <nav class="paddlenav paddlenav-onhover">
                <ul>
                    <li><button data-ac-gallery-previous-trigger="hero-gallery" class="paddlenav-arrow paddlenav-arrow-previous" aria-label="Previous"></button></li>
                    <li><button data-ac-gallery-next-trigger="hero-gallery" class="paddlenav-arrow paddlenav-arrow-next" aria-label="Next"></button></li>
                </ul>
            </nav>
</article>
<!--
    <section id="services" class="emerald">
        <div class="container">
            <div class="row1">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-twitter icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Twitter Page</h3>
                            <p>Find us on Twitter</p>
                             <a target="_blank" href="" title="Interactive Learning System">Interactive Learning System</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-facebook icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Find Us On Facebook</h3>
                            <p>Follow our Facebook Page</p>
                             <a target="_blank" href="" title="Interactive Learning System">Facebook Page</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-google-plus icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Google Plus</h3>
                            <p>Add to your circle</p>
                             <a target="_blank" href="" title="Interactive Learning System">Interactive Learning System</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->

<h2>Brace Yourself</h2>
<h1>PL Is Coming</h1>
<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>

<section id="about-us" class="container">
 <div class="gap"></div>
        <h1 class="center">Meet the Team</h1>
        <p class="lead center">Here are our group members</p>
        <div class="gap"></div>
 <div id="meet-the-team" class="row">
            <div class="col-sm-4">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="img/kms1.jpg" alt="" ></p>
                    <h5>KHALED MAHMUD SHAHRIAR<small class="designation muted">Supervisor</small></h5>
                    <p>Assistant Professor <br> Department of CSE<br>BUET</p>
                    <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    <a class="btn btn-social btn-facebook" href="https://www.facebook.com/mbcse"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="https://twitter.com/Madhusudan039"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="img/tariq1.jpg" alt="" ></p>
                    <h5>Tariq Adnan<small class="designation muted">Group Member</small></h5>
                    <p>Student ID: 1205073 <br> Level#3/Term#1<br>Department of CSE</p>
                    <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    <a class="btn btn-social btn-facebook" href="https://www.facebook.com/tariq.salvatore"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/105315604965076703196"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="https://twitter.com/tmadnan10"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-sm-4">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="img/samiul.jpg" alt="" ></p>
                    <h5>Samiul Anwar<small class="designation muted">Group Member</small></h5>
                    <p>Student ID: 1205091 <br> Level#3/Term#1<br>Department of CSE</p>
                    <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    <a class="btn btn-social btn-facebook" href="https://www.facebook.com/samiul.promise"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/108656284435508359311"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <!--<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="img/mehrab.jpg" alt="" ></p>
                    <h5>HM Mehrab<small class="designation muted">Mentor</small></h5>
                    <p>An acknowledgement for the help in <br>HTML, PHP, Javascript and Ajax<br> Department of CSE, AIUB</p>
                    <a class="btn btn-social btn-facebook" href="https://www.facebook.com/mehrab2603"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/109051760064547287529"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>-->
        </div><!--/#meet-the-team-->
        

        <div class="row1">
            <div class="col-sm-6">
                <h2>What we are</h2>
                <p>We are the students of Department of Computer Science and Engineering in BUET. 
                This web sute is a part of our Database Project. The main intention of this project was to
                be familiar to collaborate with dabase system. Also it was a big scope of being familiar to PHP
                and HTML. As begginers, it was not very very easy for us to complete the project. However, our friend form
                Americal International University of Bangladesh HM Mehrab helped us a lot in learning PHP and HTML 
                for the project. We show our gratitute to him.<br>
                To speak about our project supervisor Madhusudan Basak Sir we need to give our thanks to
                him at the beggining. The project could be completed without his supervision. We are 
                looking forward to do more academic project with him in future........</p>
            </div><!--/.col-sm-6-->
            <div class="col-sm-6">
                <h2>Our Skills</h2>
                <div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;">
                            <span>HTML/CSS</span>
                        </div>
                    </div>
                </div>
                <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                            <span>Bootstap</span>
                        </div>
                </div>

                        <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
                            <span>PHP</span>
                        </div>
                    </div>


                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                            <span>MySQL</span>
                        </div>
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->



    </section>


    <footer class="footer row" role="contentinfo">
      <div class="bs-docs-social">
        <ul class="bs-docs-social-buttons">
          <li class="follow-btn"> 
            <a itemprop="sameAs" rel="nofollow" href="https://www.facebook.com/ils" class="btn btn-primary btn-xs"> 
             <i class="fa fa-facebook"></i> Like ILS </a></li>
          <li class="tweet-btn"> 
            <a itemprop="sameAs" rel="nofollow" href="https://twitter.com/ils" class="btn btn-info btn-xs"> 
              <i class="fa fa-twitter"></i> Follow @ILS </a></li>
          </ul>
        </div>

        <ul class="footer-links text-muted">
          <li><span class="glyphicon glyphicon-globe"></span> School Management System © 2016</li><li>.</li><li>Created by&nbsp;&nbsp;&nbsp;<a href="#" class="label label-info">ILS</a></li>
          <li>.</li>
          <li> <span class="glyphicon glyphicon-list-alt"></span> <a href="#"> Site Privacy policy </a></li>
          <li>.</li><li> <span class="fa fa-facebook"></span> <a class="isTooltip" title="" href="https://www.facebook.com/ils/" data-original-title="send us a message using facebook">Contact us</a></li>
          <li>.</li><li> <i class="fa fa-google-plug"></i> <a itemprop="sameAs" rel="nofollow" href="https://plus.google.com/+ils/posts">Google +</a></li>
        </ul> 
      </footer>
<script>
    function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date('2016/06/08 17:00:00')));
initializeClock('clockdiv', deadline);
</script>
@endsection
