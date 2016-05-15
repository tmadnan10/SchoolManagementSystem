@extends('layouts.teacher')
@section('content')
<script type="text/javascript" src="../../bootstrap-colorpicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../bootstrap-colorpicker.min.css">
<link rel="stylesheet" type="text/css" href="../../app.css">

<link rel="stylesheet" type="text/css" href="../../css/app.min.css">
<link rel="stylesheet" type="text/css" href="../../css/temp.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//www.google-analytics.com/ga.js"></script>
<style type="text/css"></style> <!--[if lt IE 9]> <script type="text/javascript" src="/min-js?f=js/lib/html5shiv.min.js,js/lib/respond.min.js"></script> <![endif]-->
<style type="text/css">.header-color{background: #ff3b31;}</style>
<script type="text/javascript" src="../../new/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../../new/smoothscroll.js"></script>
<script type="text/javascript" src="../../new/marker.js"></script>

<link rel="stylesheet" type="text/css" href="../../new/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="../../new/animate.css">
<link rel="stylesheet" type="text/css" href="../../new/responsive.css">
<link rel="stylesheet" type="text/css" href="../../new/slick.css">
<link rel="stylesheet" type="text/css" href="../../new/style.css">
<link rel="stylesheet" type="text/css" href="../../new/linea-font.css">

<!--


<link rel="stylesheet" type="text/css" href="../../new/bootstrap.min.css">




-->


<style>
	.ft-cards .ft-item {
  padding: 50px 40px;
  border: 1px solid #f8f8f8;
  background: #fff;
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.ft-cards .ft-item:hover {
  -webkit-transform: translateY(-10px);
      -ms-transform: translateY(-10px);
          transform: translateY(-10px);
  box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
}

.ft-cards .ft-item span {
  font-size: 64px;
  color: #111;
}

.ft-cards .ft-item h4, .ft-cards .ft-item .ft-tabs .tabs-list li a .tab-group .tab-heading, .ft-tabs .tabs-list li a .tab-group .ft-cards .ft-item .tab-heading, .ft-cards .ft-item .testimonials-3col .t-item blockquote footer cite, .testimonials-3col .t-item blockquote footer .ft-cards .ft-item cite, .ft-cards .ft-item .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite, .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .ft-cards .ft-item cite, .ft-cards .ft-item .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite, .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .ft-cards .ft-item cite, .ft-cards .ft-item .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite, .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .ft-cards .ft-item cite, .ft-cards .ft-item .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite, .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .ft-cards .ft-item cite, .ft-cards .ft-item .team-3col .t-item .t-info .t-role, .team-3col .t-item .t-info .ft-cards .ft-item .t-role, .ft-cards .ft-item .team-4col .t-item .t-info .t-role, .team-4col .t-item .t-info .ft-cards .ft-item .t-role, .ft-cards .ft-item .freelancer-about .t-item .t-info .t-role, .freelancer-about .t-item .t-info .ft-cards .ft-item .t-role, .ft-cards .ft-item .t-join .t-info .t-role, .t-join .t-info .ft-cards .ft-item .t-role, .ft-cards .ft-item .login-2 .bg-overlay .form-wrapper .form-content .cards-header, .login-2 .bg-overlay .form-wrapper .form-content .ft-cards .ft-item .cards-header, .ft-cards .ft-item .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead, .login-2 .bg-overlay .form-wrapper .social-signup .social-card .ft-cards .ft-item .sc-lead {
  margin-top: 40px;
  margin-bottom: 30px;
}

.ft-cards .ft-item p {
  padding: 0;
  margin: 0;
}

.ft-cards .ft-item a {
  padding-top: 50px;
  display: block;
  text-align: right;
  color: #999;
}

.ft-cards .ft-item a:hover {
  color: #111;
}

.ft-cards .ft-item a:focus {
  text-decoration: none;
}

.ft-cards .ft-item a span {
  display: inline-block;
  font-size: 25px;
  vertical-align: top;
  color: inherit;
}

/* ---- 9.2 Feature - Cards 2 ---- */
.ft-cards-2 .ft-card-item {
  margin-bottom: 50px;
  height: 254px;
  background: #fff;
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.ft-cards-2 .ft-card-item:hover {
  -webkit-transform: translateY(-10px);
      -ms-transform: translateY(-10px);
          transform: translateY(-10px);
  box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
}

.ft-cards-2 .ft-card-item img {
  display: inline-block;
  max-width: 240px;
  float: left;
}

.ft-cards-2 .ft-card-item .ft-content {
  display: inline-block;
  padding: 50px 40px;
  width: 56%;
}

.ft-cards-2 .ft-card-item .ft-content h5, .ft-cards-2 .ft-card-item .ft-content .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-cards-2 .ft-card-item .ft-content .ft-heading, .ft-cards-2 .ft-card-item .ft-content .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-cards-2 .ft-card-item .ft-content .tab-info, .ft-cards-2 .ft-card-item .ft-content .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-cards-2 .ft-card-item .ft-content .widget-comm-title, .ft-cards-2 .ft-card-item .ft-content .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .ft-cards-2 .ft-card-item .ft-content .title-timer {
  margin: 0;
  padding-bottom: 20px;
}

.ft-cards-2 .ft-card-item .ft-content p {
  margin: 0;
  color: #999;
}

.ft-cards-2 .ft-card-item .ft-content .link-btn {
  display: inline-block;
  margin-top: 30px;
  float: right;
  color: #777;
  -webkit-transform: translateX(30px);
      -ms-transform: translateX(30px);
          transform: translateX(30px);
  -webkit-transition: -webkit-transform 0.4s;
          transition: transform 0.4s;
}

.ft-cards-2 .ft-card-item .ft-content .link-btn span {
  display: inline-block;
  font-size: 23px;
  vertical-align: top;
  -webkit-transform: translateX(-30px);
      -ms-transform: translateX(-30px);
          transform: translateX(-30px);
  opacity: 0;
  -webkit-transition: all 0.4s;
          transition: all 0.4s;
}

.ft-cards-2 .ft-card-item .ft-content .link-btn:hover {
  color: #111;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}

.ft-cards-2 .ft-card-item .ft-content .link-btn:hover span {
  opacity: 1;
  -webkit-transform: translateX(5px);
      -ms-transform: translateX(5px);
          transform: translateX(5px);
}

.ft-cards-2 .ft-card-item .ft-content .link-btn:focus {
  text-decoration: none;
}

/* ---- 9.3 Feature - Steps Numbers ---- */
.ft-steps-numbers .ft-item {
  display: block;
  position: relative;
}

.ft-steps-numbers .ft-item .ft-nbr {
  display: inline-block;
  position: absolute;
  top: 7px;
  left: 0;
  color: rgba(204, 204, 204, 0.4);
  font-family: "Open Sans", "Montserrat", "Helvetica Neue", Helvetica, sans-serif;
  font-weight: lighter;
  font-size: 165px;
}

.ft-steps-numbers .ft-item h4, .ft-steps-numbers .ft-item .ft-tabs .tabs-list li a .tab-group .tab-heading, .ft-tabs .tabs-list li a .tab-group .ft-steps-numbers .ft-item .tab-heading, .ft-steps-numbers .ft-item .testimonials-3col .t-item blockquote footer cite, .testimonials-3col .t-item blockquote footer .ft-steps-numbers .ft-item cite, .ft-steps-numbers .ft-item .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite, .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .ft-steps-numbers .ft-item cite, .ft-steps-numbers .ft-item .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite, .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .ft-steps-numbers .ft-item cite, .ft-steps-numbers .ft-item .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite, .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .ft-steps-numbers .ft-item cite, .ft-steps-numbers .ft-item .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite, .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .ft-steps-numbers .ft-item cite, .ft-steps-numbers .ft-item .team-3col .t-item .t-info .t-role, .team-3col .t-item .t-info .ft-steps-numbers .ft-item .t-role, .ft-steps-numbers .ft-item .team-4col .t-item .t-info .t-role, .team-4col .t-item .t-info .ft-steps-numbers .ft-item .t-role, .ft-steps-numbers .ft-item .freelancer-about .t-item .t-info .t-role, .freelancer-about .t-item .t-info .ft-steps-numbers .ft-item .t-role, .ft-steps-numbers .ft-item .t-join .t-info .t-role, .t-join .t-info .ft-steps-numbers .ft-item .t-role, .ft-steps-numbers .ft-item .login-2 .bg-overlay .form-wrapper .form-content .cards-header, .login-2 .bg-overlay .form-wrapper .form-content .ft-steps-numbers .ft-item .cards-header, .ft-steps-numbers .ft-item .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead, .login-2 .bg-overlay .form-wrapper .social-signup .social-card .ft-steps-numbers .ft-item .sc-lead {
  margin: 0;
  padding-bottom: 20px;
  padding-left: 85px;
}

.ft-steps-numbers .ft-item p {
  margin: 0;
  padding-left: 85px;
}

/* ---- 9.4 Feature - Centered ---- */
.ft-centered .ft-item, .ft-x .ft-item, .ft-y .ft-item {
  text-align: center;
}

.ft-centered .ft-item h5, .ft-x .ft-item h5, .ft-y .ft-item h5, .ft-centered .ft-item .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-centered .ft-item .ft-heading, .ft-x .ft-item .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-x .ft-item .ft-heading, .ft-y .ft-item .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-y .ft-item .ft-heading, .ft-centered .ft-item .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-centered .ft-item .tab-info, .ft-x .ft-item .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-x .ft-item .tab-info, .ft-y .ft-item .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-y .ft-item .tab-info, .ft-centered .ft-item .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-centered .ft-item .widget-comm-title, .ft-x .ft-item .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-x .ft-item .widget-comm-title, .ft-y .ft-item .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-y .ft-item .widget-comm-title, .ft-centered .ft-item .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .ft-centered .ft-item .title-timer, .ft-x .ft-item .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .ft-x .ft-item .title-timer, .ft-y .ft-item .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .ft-y .ft-item .title-timer {
  margin-top: 30px;
  margin-bottom: 20px;
}

.ft-centered .ft-item span, .ft-x .ft-item span, .ft-y .ft-item span {
  padding: 0;
  width: 110px;
  height: 110px;
  font-size: 45px;
  line-height: 109px;
}

.ft-centered .ft-material:hover span,
.ft-x .ft-material:hover span,
.ft-y .ft-material:hover span, .ft-centered .ft-material:hover i, .ft-x .ft-material:hover i, .ft-y .ft-material:hover i {
  -webkit-transform: translateY(-10px);
      -ms-transform: translateY(-10px);
          transform: translateY(-10px);
  box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
}

.ft-centered .ft-material span,
.ft-x .ft-material span,
.ft-y .ft-material span, .ft-centered .ft-material i, .ft-x .ft-material i, .ft-y .ft-material i {
  display: inline-block;
  border: 1px solid #f8f8f8;
  border-radius: 100px;
  background: #fff;
  color: #777;
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.ft-centered .ft-diagonal span,
.ft-x .ft-diagonal span,
.ft-y .ft-diagonal span, .ft-centered .ft-diagonal i, .ft-x .ft-diagonal i, .ft-y .ft-diagonal i {
  display: inline-block;
  color: #111;
  background: url(../images/pat-diagonal.png) 100% repeat;
  border-radius: 100px;
}

.ft-centered .ft-circle-frame:hover span,
.ft-x .ft-circle-frame:hover span,
.ft-y .ft-circle-frame:hover span, .ft-centered .ft-square-frame:hover span, .ft-x .ft-square-frame:hover span, .ft-y .ft-square-frame:hover span, .ft-centered .ft-circle-frame-dark:hover span, .ft-x .ft-circle-frame-dark:hover span, .ft-y .ft-circle-frame-dark:hover span, .ft-centered .ft-square-frame-dark:hover span, .ft-x .ft-square-frame-dark:hover span, .ft-y .ft-square-frame-dark:hover span, .ft-centered .ft-circle-frame:hover i, .ft-x .ft-circle-frame:hover i, .ft-y .ft-circle-frame:hover i, .ft-centered .ft-square-frame:hover i, .ft-x .ft-square-frame:hover i, .ft-y .ft-square-frame:hover i, .ft-centered .ft-circle-frame-dark:hover i, .ft-x .ft-circle-frame-dark:hover i, .ft-y .ft-circle-frame-dark:hover i, .ft-centered .ft-square-frame-dark:hover i, .ft-x .ft-square-frame-dark:hover i, .ft-y .ft-square-frame-dark:hover i {
  border-color: #ececec;
  box-shadow: 0 0 0 0 #ececec;
}

.ft-centered .ft-circle-frame span,
.ft-x .ft-circle-frame span,
.ft-y .ft-circle-frame span, .ft-centered .ft-square-frame span, .ft-x .ft-square-frame span, .ft-y .ft-square-frame span, .ft-centered .ft-circle-frame-dark span, .ft-x .ft-circle-frame-dark span, .ft-y .ft-circle-frame-dark span, .ft-centered .ft-square-frame-dark span, .ft-x .ft-square-frame-dark span, .ft-y .ft-square-frame-dark span, .ft-centered .ft-circle-frame i, .ft-x .ft-circle-frame i, .ft-y .ft-circle-frame i, .ft-centered .ft-square-frame i, .ft-x .ft-square-frame i, .ft-y .ft-square-frame i, .ft-centered .ft-circle-frame-dark i, .ft-x .ft-circle-frame-dark i, .ft-y .ft-circle-frame-dark i, .ft-centered .ft-square-frame-dark i, .ft-x .ft-square-frame-dark i, .ft-y .ft-square-frame-dark i {
  display: inline-block;
  color: #111;
  background: #ececec;
  border: 5px solid white;
  box-shadow: 0 0 0 1px #ececec;
  border-radius: 100px;
  line-height: 102px;
  -webkit-transition: all 0.5s;
          transition: all 0.5s;
}

.ft-centered .ft-square-frame span,
.ft-x .ft-square-frame span,
.ft-y .ft-square-frame span, .ft-centered .ft-square-frame i, .ft-x .ft-square-frame i, .ft-y .ft-square-frame i {
  width: 100px;
  height: 100px;
  border-radius: 0;
  font-size: 45px;
  text-align: center;
  line-height: 90px;
}

.ft-centered .ft-dark-spin:hover span,
.ft-x .ft-dark-spin:hover span,
.ft-y .ft-dark-spin:hover span, .ft-centered .ft-dark-spin:hover i, .ft-x .ft-dark-spin:hover i, .ft-y .ft-dark-spin:hover i {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
  border: 1px solid #cccccc;
  background: #fff;
  color: #111;
}

.ft-centered .ft-dark-spin span,
.ft-x .ft-dark-spin span,
.ft-y .ft-dark-spin span, .ft-centered .ft-dark-spin i, .ft-x .ft-dark-spin i, .ft-y .ft-dark-spin i {
  display: inline-block;
  color: #f8f8f8;
  border: 1px solid rgba(17, 17, 17, 0);
  background: #111;
  border-radius: 100px;
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.ft-centered .ft-circle-frame-dark:hover span,
.ft-x .ft-circle-frame-dark:hover span,
.ft-y .ft-circle-frame-dark:hover span, .ft-centered .ft-square-frame-dark:hover span, .ft-x .ft-square-frame-dark:hover span, .ft-y .ft-square-frame-dark:hover span, .ft-centered .ft-circle-frame-dark:hover i, .ft-x .ft-circle-frame-dark:hover i, .ft-y .ft-circle-frame-dark:hover i, .ft-centered .ft-square-frame-dark:hover i, .ft-x .ft-square-frame-dark:hover i, .ft-y .ft-square-frame-dark:hover i {
  border-color: #111111;
}

.ft-centered .ft-circle-frame-dark span,
.ft-x .ft-circle-frame-dark span,
.ft-y .ft-circle-frame-dark span, .ft-centered .ft-square-frame-dark span, .ft-x .ft-square-frame-dark span, .ft-y .ft-square-frame-dark span, .ft-centered .ft-circle-frame-dark i, .ft-x .ft-circle-frame-dark i, .ft-y .ft-circle-frame-dark i, .ft-centered .ft-square-frame-dark i, .ft-x .ft-square-frame-dark i, .ft-y .ft-square-frame-dark i {
  color: #f8f8f8;
  background: #111;
  border: 5px solid white;
  box-shadow: 0 0 0 1px #111;
}

.ft-centered .ft-square-frame-dark span,
.ft-x .ft-square-frame-dark span,
.ft-y .ft-square-frame-dark span, .ft-centered .ft-square-frame-dark i, .ft-x .ft-square-frame-dark i, .ft-y .ft-square-frame-dark i {
  width: 100px;
  height: 100px;
  border-radius: 0;
  font-size: 45px;
  text-align: center;
  line-height: 90px;
}

.ft-centered .ft-small-card, .ft-x .ft-small-card, .ft-y .ft-small-card {
  padding: 50px 30px;
  background: #f8f8f8;
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.ft-centered .ft-small-card:hover, .ft-x .ft-small-card:hover, .ft-y .ft-small-card:hover {
  -webkit-transform: translateY(-10px);
      -ms-transform: translateY(-10px);
          transform: translateY(-10px);
  box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
}

.ft-centered .ft-small-card:hover span,
.ft-x .ft-small-card:hover span,
.ft-y .ft-small-card:hover span, .ft-centered .ft-small-card:hover i, .ft-x .ft-small-card:hover i, .ft-y .ft-small-card:hover i {
  color: #111;
}

.ft-centered .ft-small-card span,
.ft-x .ft-small-card span,
.ft-y .ft-small-card span, .ft-centered .ft-small-card i, .ft-x .ft-small-card i, .ft-y .ft-small-card i {
  display: block;
  margin-top: 30px;
  padding-bottom: 30px;
  width: auto;
  height: auto;
  line-height: 0;
  font-size: 64px;
  color: #777;
  -webkit-transition: color 0.7s;
          transition: color 0.7s;
}

.ft-centered .ft-circle-overlay:hover span,
.ft-x .ft-circle-overlay:hover span,
.ft-y .ft-circle-overlay:hover span, .ft-centered .ft-square-overlay:hover span, .ft-x .ft-square-overlay:hover span, .ft-y .ft-square-overlay:hover span, .ft-centered .ft-circle-overlay:hover i, .ft-x .ft-circle-overlay:hover i, .ft-y .ft-circle-overlay:hover i, .ft-centered .ft-square-overlay:hover i, .ft-x .ft-square-overlay:hover i, .ft-y .ft-square-overlay:hover i {
  background: #f4f4f4;
}

.ft-centered .ft-circle-overlay span,
.ft-x .ft-circle-overlay span,
.ft-y .ft-circle-overlay span, .ft-centered .ft-square-overlay span, .ft-x .ft-square-overlay span, .ft-y .ft-square-overlay span, .ft-centered .ft-circle-overlay i, .ft-x .ft-circle-overlay i, .ft-y .ft-circle-overlay i, .ft-centered .ft-square-overlay i, .ft-x .ft-square-overlay i, .ft-y .ft-square-overlay i {
  display: inline-block;
  color: #111;
  border-radius: 100px;
  background: #ececec;
  border: 10px solid #f4f4f4;
  line-height: 90px;
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.ft-centered .ft-square-overlay span,
.ft-x .ft-square-overlay span,
.ft-y .ft-square-overlay span, .ft-centered .ft-square-overlay i, .ft-x .ft-square-overlay i, .ft-y .ft-square-overlay i {
  border-radius: 0;
}

.ft-centered .ft-basic span,
.ft-x .ft-basic span,
.ft-y .ft-basic span, .ft-centered .ft-basic i, .ft-x .ft-basic i, .ft-y .ft-basic i {
  font-size: 60px;
  line-height: 60px;
}

/* ---- 9.5 Feature - Horizontal Aligned ---- */
.ft-x .ft-item, .ft-y .ft-item {
  text-align: left;
}

.ft-x .ft-item h5, .ft-y .ft-item h5, .ft-x .ft-item .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-x .ft-item .ft-heading, .ft-y .ft-item .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-y .ft-item .ft-heading, .ft-x .ft-item .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-x .ft-item .tab-info, .ft-y .ft-item .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-y .ft-item .tab-info, .ft-x .ft-item .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-x .ft-item .widget-comm-title, .ft-y .ft-item .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-y .ft-item .widget-comm-title, .ft-x .ft-item .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .ft-x .ft-item .title-timer, .ft-y .ft-item .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .ft-y .ft-item .title-timer {
  margin-top: 30px;
  margin-bottom: 20px;
}

.ft-x .ft-item span,
.ft-y .ft-item span,
.ft-x .ft-item i, .ft-y .ft-item i {
  display: inline-block;
  margin: 25px 35px 50px 0;
  padding: 28px 26px;
  width: 85px;
  height: 85px;
  float: left;
  font-size: 28px;
  line-height: 28px;
  text-align: center;
  vertical-align: top;
}

.ft-x .ft-material span,
.ft-y .ft-material span,
.ft-x .ft-material i, .ft-y .ft-material i {
  color: #111;
}

.ft-x .ft-circle-frame span,
.ft-y .ft-circle-frame span,
.ft-x .ft-square-frame span, .ft-y .ft-square-frame span, .ft-x .ft-circle-frame-dark span, .ft-y .ft-circle-frame-dark span, .ft-x .ft-square-frame-dark span, .ft-y .ft-square-frame-dark span, .ft-x .ft-circle-frame i, .ft-y .ft-circle-frame i, .ft-x .ft-square-frame i, .ft-y .ft-square-frame i, .ft-x .ft-circle-frame-dark i, .ft-y .ft-circle-frame-dark i, .ft-x .ft-square-frame-dark i, .ft-y .ft-square-frame-dark i {
  padding: 24px 25px;
}

.ft-x .ft-square-frame span,
.ft-y .ft-square-frame span,
.ft-x .ft-square-frame i,
.ft-y .ft-square-frame i,
.ft-x .ft-square-frame-dark span,
.ft-y .ft-square-frame-dark span,
.ft-x .ft-square-frame-dark i, .ft-y .ft-square-frame-dark i {
  width: 80px;
  height: 80px;
  padding: 21px 23px;
}

.ft-x .ft-circle-overlay span,
.ft-y .ft-circle-overlay span,
.ft-x .ft-square-overlay span, .ft-y .ft-square-overlay span, .ft-x .ft-circle-overlay i, .ft-y .ft-circle-overlay i, .ft-x .ft-square-overlay i, .ft-y .ft-square-overlay i {
  padding: 20px;
  border: 10px solid #f4f4f4;
}

.ft-x .ft-basic span,
.ft-y .ft-basic span,
.ft-x .ft-basic i, .ft-y .ft-basic i {
  padding: 0;
  font-size: 64px;
  line-height: 64px;
}

.ft-x .right-align .ft-content, .ft-y .right-align .ft-content {
  display: inline-block;
  width: 62%;
  text-align: right;
}

.ft-x .right-align .ft-icon, .ft-y .right-align .ft-icon {
  float: right;
  display: inline-block;
  margin-left: 20px;
  width: 30%;
}

/* ---- 9.6 Feature - Vertical Aligned ---- */
.ft-y .ft-item span,
.ft-y .ft-item i {
  display: inline-block;
  margin: 0;
  float: none;
}

.ft-y .right-align {
  text-align: right;
}

/* ---- 9.7 Feature - Boxed Hover List ---- */
.ft-boxed-hover ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.ft-boxed-hover ul li {
  display: inline-block;
  position: relative;
  width: 25%;
  float: left;
  margin-top: -1px;
  margin-left: -1px;
  padding: 50px;
  border: 1px solid #ddd;
  background: #fff;
  text-align: center;
  -webkit-transition: border-color 0.3s;
          transition: border-color 0.3s;
}

.ft-boxed-hover ul li:hover {
  border-color: #111;
}

.ft-boxed-hover ul li:hover .hover-content {
  opacity: 1;
}

.ft-boxed-hover ul li .ft-icon {
  font-size: 56px;
  color: #777;
}

.ft-boxed-hover ul li .h-alt {
  color: #999;
}

.ft-boxed-hover ul li .hover-content {
  display: block;
  position: absolute;
  padding: 30px;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #111;
  opacity: 0;
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.ft-boxed-hover ul li .hover-content .ft-icon {
  position: absolute;
  display: block;
  top: 50px;
  left: 0;
  right: 0;
  font-size: 120px;
  color: rgba(217, 217, 217, 0.15);
  z-index: 1;
}

.ft-boxed-hover ul li .hover-content .ft-heading {
  display: block;
  margin: 0;
  padding-bottom: 15px;
  color: #ececec;
}

.ft-boxed-hover ul li .hover-content p {
  margin: 0;
  color: #999;
}

.ft-boxed-hover ul li .hover-content a {
  display: inline-block;
  position: relative;
  margin-top: 20px;
  color: #999;
  z-index: 10 !important;
}

.ft-boxed-hover ul li .hover-content a:hover {
  color: #ececec;
}

.ft-boxed-hover ul li .hover-content a:focus {
  outline: none;
}

/* ---- 9.8 Feature - Tabs ---- */
.ft-tabs .tabs-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.ft-tabs .tabs-list li {
  border-top: 1px solid #ececec;
  border-bottom: 1px solid #ececec;
}

.ft-tabs .tabs-list li:nth-child(2),
.ft-tabs .tabs-list li:nth-child(3) {
  margin-top: -1px;
}

.ft-tabs .tabs-list li a {
  display: block;
  padding: 50px;
  border-left: 10px solid rgba(17, 17, 17, 0);
}

.ft-tabs .tabs-list li a:hover {
  background: #f8f8f8;
}

.ft-tabs .tabs-list li a:focus {
  text-decoration: none;
}

.ft-tabs .tabs-list li a .tab-icon {
  display: inline-block;
  padding-right: 20px;
  font-size: 50px;
  color: #111;
}

.ft-tabs .tabs-list li a .tab-group {
  text-align: left;
  float: right;
}

.ft-tabs .tabs-list li a .tab-group .tab-heading {
  display: block;
  color: #111;
}

.ft-tabs .tabs-list li a .tab-group .tab-info {
  font-family: "Open Sans", "Montserrat", "Helvetica Neue", Helvetica, sans-serif;
  letter-spacing: 2px;
  color: #999;
}

.ft-tabs .tabs-list .active a {
  border-left: 10px solid #111111;
  background: #f4f4f4;
}

.ft-tabs .tab-content {
  height: 475px;
  background: #f4f4f4;
}

.ft-tabs .tab-content .tab-content-text {
  padding-top: 110px;
  padding-left: 80px;
}

.ft-tabs .tab-content .tab-content-text h4, .ft-tabs .tab-content .tab-content-text .tabs-list li a .tab-group .tab-heading, .ft-tabs .tabs-list li a .tab-group .tab-content .tab-content-text .tab-heading, .ft-tabs .tab-content .tab-content-text .testimonials-3col .t-item blockquote footer cite, .testimonials-3col .t-item blockquote footer .ft-tabs .tab-content .tab-content-text cite, .ft-tabs .tab-content .tab-content-text .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite, .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .ft-tabs .tab-content .tab-content-text cite, .ft-tabs .tab-content .tab-content-text .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite, .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .ft-tabs .tab-content .tab-content-text cite, .ft-tabs .tab-content .tab-content-text .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite, .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .ft-tabs .tab-content .tab-content-text cite, .ft-tabs .tab-content .tab-content-text .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite, .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .ft-tabs .tab-content .tab-content-text cite, .ft-tabs .tab-content .tab-content-text .team-3col .t-item .t-info .t-role, .team-3col .t-item .t-info .ft-tabs .tab-content .tab-content-text .t-role, .ft-tabs .tab-content .tab-content-text .team-4col .t-item .t-info .t-role, .team-4col .t-item .t-info .ft-tabs .tab-content .tab-content-text .t-role, .ft-tabs .tab-content .tab-content-text .freelancer-about .t-item .t-info .t-role, .freelancer-about .t-item .t-info .ft-tabs .tab-content .tab-content-text .t-role, .ft-tabs .tab-content .tab-content-text .t-join .t-info .t-role, .t-join .t-info .ft-tabs .tab-content .tab-content-text .t-role, .ft-tabs .tab-content .tab-content-text .login-2 .bg-overlay .form-wrapper .form-content .cards-header, .login-2 .bg-overlay .form-wrapper .form-content .ft-tabs .tab-content .tab-content-text .cards-header, .ft-tabs .tab-content .tab-content-text .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead, .login-2 .bg-overlay .form-wrapper .social-signup .social-card .ft-tabs .tab-content .tab-content-text .sc-lead {
  margin: 0;
  padding-bottom: 25px;
}

.ft-tabs .tab-content .tab-content-text p {
  margin: 0;
}

.ft-tabs .tab-content .tab-content-text button {
  margin-top: 45px;
}

.ft-tabs .tab-content .tab-content-image {
  padding-top: 110px;
}

/* ---- 9.9 Lists ---- */
.list-check, .list-square-check, .list-circle-check, .list-square-check-full, .list-circle-check-full {
  list-style: none;
}

.list-check li, .list-square-check li, .list-circle-check li, .list-square-check-full li, .list-circle-check-full li {
  margin-bottom: 30px;
}

.list-check li:before, .list-square-check li:before, .list-circle-check li:before, .list-square-check-full li:before, .list-circle-check-full li:before {
  content: "\e01b";
  position: absolute;
  left: 0;
  font-family: "linea-icon-font";
  font-size: 40px;
  color: #111;
}

.list-square-check li, .list-circle-check li {
  margin-left: 20px;
  margin-bottom: 40px;
}

.list-square-check li:before, .list-circle-check li:before {
  content: "\e081";
  font-size: 50px;
}

.list-circle-check li:before {
  content: "\e01c";
}

.list-square-check-full li, .list-circle-check-full li {
  margin-left: 20px;
  padding-top: 1px;
}

.list-square-check-full li:before, .list-circle-check-full li:before {
  display: inline-block;
  padding-top: 12px;
  width: 50px;
  height: 50px;
  background: #ececec;
  font-size: 35px;
  text-align: center;
}

.list-circle-check-full li:before {
  border-radius: 100px;
}

.list-basic {
  list-style: none;
}

.list-basic li {
  margin-bottom: 30px;
}

/* ---- 9.10 Feature Layout 50/50 ---- */
.ft-layout-50 .ft-item .ft-content-wrapper {
  padding: 75px 15% 75px 100px;
  height: 450px;
  background: #f4f4f4;
}

.ft-layout-50 .ft-item .ft-content-wrapper h4,
.ft-layout-50 .ft-item .ft-content-wrapper .ft-tabs .tabs-list li a .tab-group .tab-heading,
.ft-tabs .tabs-list li a .tab-group .ft-layout-50 .ft-item .ft-content-wrapper .tab-heading, .ft-layout-50 .ft-item .ft-content-wrapper .testimonials-3col .t-item blockquote footer cite,
.testimonials-3col .t-item blockquote footer .ft-layout-50 .ft-item .ft-content-wrapper cite, .ft-layout-50 .ft-item .ft-content-wrapper .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .ft-layout-50 .ft-item .ft-content-wrapper cite, .ft-layout-50 .ft-item .ft-content-wrapper .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .ft-layout-50 .ft-item .ft-content-wrapper cite, .ft-layout-50 .ft-item .ft-content-wrapper .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .ft-layout-50 .ft-item .ft-content-wrapper cite, .ft-layout-50 .ft-item .ft-content-wrapper .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .ft-layout-50 .ft-item .ft-content-wrapper cite, .ft-layout-50 .ft-item .ft-content-wrapper .team-3col .t-item .t-info .t-role,
.team-3col .t-item .t-info .ft-layout-50 .ft-item .ft-content-wrapper .t-role, .ft-layout-50 .ft-item .ft-content-wrapper .team-4col .t-item .t-info .t-role,
.team-4col .t-item .t-info .ft-layout-50 .ft-item .ft-content-wrapper .t-role, .ft-layout-50 .ft-item .ft-content-wrapper .freelancer-about .t-item .t-info .t-role,
.freelancer-about .t-item .t-info .ft-layout-50 .ft-item .ft-content-wrapper .t-role, .ft-layout-50 .ft-item .ft-content-wrapper .t-join .t-info .t-role,
.t-join .t-info .ft-layout-50 .ft-item .ft-content-wrapper .t-role, .ft-layout-50 .ft-item .ft-content-wrapper .login-2 .bg-overlay .form-wrapper .form-content .cards-header,
.login-2 .bg-overlay .form-wrapper .form-content .ft-layout-50 .ft-item .ft-content-wrapper .cards-header, .ft-layout-50 .ft-item .ft-content-wrapper .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .ft-layout-50 .ft-item .ft-content-wrapper .sc-lead, .ft-layout-50 .ft-item .ft-content-wrapper h5,
.ft-layout-50 .ft-item .ft-content-wrapper .ft-boxed-hover ul li .hover-content .ft-heading,
.ft-boxed-hover ul li .hover-content .ft-layout-50 .ft-item .ft-content-wrapper .ft-heading, .ft-layout-50 .ft-item .ft-content-wrapper .ft-tabs .tabs-list li a .tab-group .tab-info,
.ft-tabs .tabs-list li a .tab-group .ft-layout-50 .ft-item .ft-content-wrapper .tab-info, .ft-layout-50 .ft-item .ft-content-wrapper .sidebar .comments-widget .widget-item span .widget-comm-title,
.sidebar .comments-widget .widget-item span .ft-layout-50 .ft-item .ft-content-wrapper .widget-comm-title, .ft-layout-50 .ft-item .ft-content-wrapper .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .ft-layout-50 .ft-item .ft-content-wrapper .title-timer, .ft-layout-50 .ft-item .ft-content-wrapper h6, .ft-layout-50 .ft-item .ft-content-wrapper .progress-group .progress-title, .progress-group .ft-layout-50 .ft-item .ft-content-wrapper .progress-title,
.ft-layout-50 .ft-item .ft-content-wrapper .progress-group .progress-value, .progress-group .ft-layout-50 .ft-item .ft-content-wrapper .progress-value, .ft-layout-50 .ft-item .ft-content-wrapper .accordions-1 .panel .panel-heading .panel-title, .accordions-1 .panel .panel-heading .ft-layout-50 .ft-item .ft-content-wrapper .panel-title, .ft-layout-50 .ft-item .ft-content-wrapper .footer-social-links ul li, .footer-social-links ul .ft-layout-50 .ft-item .ft-content-wrapper li, .ft-layout-50 .ft-item .ft-content-wrapper .footer-contact .contact-info .show-info-link, .footer-contact .contact-info .ft-layout-50 .ft-item .ft-content-wrapper .show-info-link, .ft-layout-50 .ft-item .ft-content-wrapper .footer-contact .contact-info address ul li .adr-heading, .footer-contact .contact-info address ul li .ft-layout-50 .ft-item .ft-content-wrapper .adr-heading, .ft-layout-50 .ft-item .ft-content-wrapper .footer-contact .contact-info address .show-map, .footer-contact .contact-info address .ft-layout-50 .ft-item .ft-content-wrapper .show-map, .ft-layout-50 .ft-item .ft-content-wrapper .footer-litle address ul li .adr-group .adr-heading, .footer-litle address ul li .adr-group .ft-layout-50 .ft-item .ft-content-wrapper .adr-heading, .ft-layout-50 .ft-cards .ft-item .ft-content-wrapper a, .ft-cards .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .ft-cards-2 .ft-card-item .ft-content .link-btn, .ft-cards-2 .ft-card-item .ft-content .ft-layout-50 .ft-item .ft-content-wrapper .link-btn, .ft-layout-50 .ft-item .ft-content-wrapper .ft-boxed-hover ul li .hover-content a, .ft-boxed-hover ul li .hover-content .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .circles-counters .circle-item .circle-text, .circles-counters .circle-item .ft-layout-50 .ft-item .ft-content-wrapper .circle-text, .ft-layout-50 .ft-item .ft-content-wrapper .circles-counters-dark-bg .circle-item .circle-text, .circles-counters-dark-bg .circle-item .ft-layout-50 .ft-item .ft-content-wrapper .circle-text, .ft-layout-50 .ft-item .ft-content-wrapper .number-counters .count-wrapper .count-item .count-text, .number-counters .count-wrapper .count-item .ft-layout-50 .ft-item .ft-content-wrapper .count-text, .ft-layout-50 .ft-item .ft-content-wrapper .number-counters-dark-bg .count-wrapper .count-item .count-text, .number-counters-dark-bg .count-wrapper .count-item .ft-layout-50 .ft-item .ft-content-wrapper .count-text, .ft-layout-50 .ft-item .ft-content-wrapper .project-nav nav .nav-btns li a, .project-nav nav .nav-btns li .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .pricing-tables .p-table .desc, .pricing-tables .p-table .ft-layout-50 .ft-item .ft-content-wrapper .desc, .ft-layout-50 .ft-item .ft-content-wrapper .blog-post-nav .prev-btn, .blog-post-nav .ft-layout-50 .ft-item .ft-content-wrapper .prev-btn,
.ft-layout-50 .ft-item .ft-content-wrapper .blog-post-nav .next-btn, .blog-post-nav .ft-layout-50 .ft-item .ft-content-wrapper .next-btn, .ft-layout-50 .ft-item .ft-content-wrapper .sidebar .tags-widget .tag-list li a, .sidebar .tags-widget .tag-list li .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .ft-layout-50 .ft-item .ft-content-wrapper span, .ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .ft-layout-50 .ft-item .ft-content-wrapper a,
.ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .ft-layout-50 .ft-item .ft-content-wrapper p, .ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a, .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .landing-hero .heading-wrapper .cta-btn, .landing-hero .heading-wrapper .ft-layout-50 .ft-item .ft-content-wrapper .cta-btn {
  margin: 0;
}

.ft-layout-50 .ft-item .ft-content-wrapper h6, .ft-layout-50 .ft-item .ft-content-wrapper .progress-group .progress-title, .progress-group .ft-layout-50 .ft-item .ft-content-wrapper .progress-title,
.ft-layout-50 .ft-item .ft-content-wrapper .progress-group .progress-value, .progress-group .ft-layout-50 .ft-item .ft-content-wrapper .progress-value, .ft-layout-50 .ft-item .ft-content-wrapper .accordions-1 .panel .panel-heading .panel-title, .accordions-1 .panel .panel-heading .ft-layout-50 .ft-item .ft-content-wrapper .panel-title, .ft-layout-50 .ft-item .ft-content-wrapper .footer-social-links ul li, .footer-social-links ul .ft-layout-50 .ft-item .ft-content-wrapper li, .ft-layout-50 .ft-item .ft-content-wrapper .footer-contact .contact-info .show-info-link, .footer-contact .contact-info .ft-layout-50 .ft-item .ft-content-wrapper .show-info-link, .ft-layout-50 .ft-item .ft-content-wrapper .footer-contact .contact-info address ul li .adr-heading, .footer-contact .contact-info address ul li .ft-layout-50 .ft-item .ft-content-wrapper .adr-heading, .ft-layout-50 .ft-item .ft-content-wrapper .footer-contact .contact-info address .show-map, .footer-contact .contact-info address .ft-layout-50 .ft-item .ft-content-wrapper .show-map, .ft-layout-50 .ft-item .ft-content-wrapper .footer-litle address ul li .adr-group .adr-heading, .footer-litle address ul li .adr-group .ft-layout-50 .ft-item .ft-content-wrapper .adr-heading, .ft-layout-50 .ft-cards .ft-item .ft-content-wrapper a, .ft-cards .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .ft-cards-2 .ft-card-item .ft-content .link-btn, .ft-cards-2 .ft-card-item .ft-content .ft-layout-50 .ft-item .ft-content-wrapper .link-btn, .ft-layout-50 .ft-item .ft-content-wrapper .ft-boxed-hover ul li .hover-content a, .ft-boxed-hover ul li .hover-content .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .circles-counters .circle-item .circle-text, .circles-counters .circle-item .ft-layout-50 .ft-item .ft-content-wrapper .circle-text, .ft-layout-50 .ft-item .ft-content-wrapper .circles-counters-dark-bg .circle-item .circle-text, .circles-counters-dark-bg .circle-item .ft-layout-50 .ft-item .ft-content-wrapper .circle-text, .ft-layout-50 .ft-item .ft-content-wrapper .number-counters .count-wrapper .count-item .count-text, .number-counters .count-wrapper .count-item .ft-layout-50 .ft-item .ft-content-wrapper .count-text, .ft-layout-50 .ft-item .ft-content-wrapper .number-counters-dark-bg .count-wrapper .count-item .count-text, .number-counters-dark-bg .count-wrapper .count-item .ft-layout-50 .ft-item .ft-content-wrapper .count-text, .ft-layout-50 .ft-item .ft-content-wrapper .project-nav nav .nav-btns li a, .project-nav nav .nav-btns li .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .pricing-tables .p-table .desc, .pricing-tables .p-table .ft-layout-50 .ft-item .ft-content-wrapper .desc, .ft-layout-50 .ft-item .ft-content-wrapper .blog-post-nav .prev-btn, .blog-post-nav .ft-layout-50 .ft-item .ft-content-wrapper .prev-btn,
.ft-layout-50 .ft-item .ft-content-wrapper .blog-post-nav .next-btn, .blog-post-nav .ft-layout-50 .ft-item .ft-content-wrapper .next-btn, .ft-layout-50 .ft-item .ft-content-wrapper .sidebar .tags-widget .tag-list li a, .sidebar .tags-widget .tag-list li .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .ft-layout-50 .ft-item .ft-content-wrapper span, .ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .ft-layout-50 .ft-item .ft-content-wrapper a,
.ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .ft-layout-50 .ft-item .ft-content-wrapper p, .ft-layout-50 .ft-item .ft-content-wrapper .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a, .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .ft-layout-50 .ft-item .ft-content-wrapper a, .ft-layout-50 .ft-item .ft-content-wrapper .landing-hero .heading-wrapper .cta-btn, .landing-hero .heading-wrapper .ft-layout-50 .ft-item .ft-content-wrapper .cta-btn {
  margin-top: 15px;
  margin-bottom: 50px;
  color: #999;
}

.ft-layout-50 .ft-item .ft-content-wrapper p {
  margin-bottom: 45px;
}

.ft-layout-50 .ft-item .ft-img-wrapper {
  position: relative;
  padding: 0;
  height: 450px;
  overflow: hidden;
}

.ft-layout-50 .ft-item .ft-img-wrapper img {
  width: 100%;
  max-width: 100%;
  height: auto;
}

.ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  background: rgba(17, 17, 17, 0.6);
}

.ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn {
  display: block;
  position: relative;
  top: 44%;
  -webkit-transform: translateY(-44%);
      -ms-transform: translateY(-44%);
          transform: translateY(-44%);
  text-align: center;
  color: #ececec;
}

.ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn h5, .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .ft-heading, .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .tab-info, .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .widget-comm-title, .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .ft-layout-50 .ft-item .ft-img-wrapper .ft-video-wrapper .play-btn .title-timer {
  color: inherit;
}

/* ---- 9.11 Feature Hover Box ---- */
.ft-hover-item .ft-item {
  position: relative;
  height: 440px;
  -webkit-transition: all 0.4s;
          transition: all 0.4s;
}

.ft-hover-item .ft-item .content-wrapper {
  position: absolute;
  left: 100px;
  right: 100px;
  bottom: 0;
  -webkit-transition: all 0.4s;
          transition: all 0.4s;
}

.ft-hover-item .ft-item .content-wrapper h3,
.ft-hover-item .ft-item .content-wrapper .page-title .subheading,
.page-title .ft-hover-item .ft-item .content-wrapper .subheading, .ft-hover-item .ft-item .content-wrapper h4,
.ft-hover-item .ft-item .content-wrapper .ft-tabs .tabs-list li a .tab-group .tab-heading,
.ft-tabs .tabs-list li a .tab-group .ft-hover-item .ft-item .content-wrapper .tab-heading, .ft-hover-item .ft-item .content-wrapper .testimonials-3col .t-item blockquote footer cite,
.testimonials-3col .t-item blockquote footer .ft-hover-item .ft-item .content-wrapper cite, .ft-hover-item .ft-item .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite,
.testimonials-3col .t-item .wrapper-404 .ft-hover-item .ft-item .content-wrapper .info-wrapper .info-404 footer cite, .ft-hover-item .ft-item .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite,
.wrapper-404 .ft-hover-item .ft-item .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite, .ft-hover-item .ft-item .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite,
.testimonials-3col .t-item .bg-maintenance .ft-hover-item .ft-item .content-wrapper .content-inner p footer cite, .ft-hover-item .ft-item .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite,
.bg-maintenance .ft-hover-item .ft-item .content-wrapper .content-inner .testimonials-3col .t-item p footer cite, .ft-hover-item .ft-item .content-wrapper .team-3col .t-item .t-info .t-role,
.team-3col .t-item .t-info .ft-hover-item .ft-item .content-wrapper .t-role, .ft-hover-item .ft-item .content-wrapper .team-4col .t-item .t-info .t-role,
.team-4col .t-item .t-info .ft-hover-item .ft-item .content-wrapper .t-role, .ft-hover-item .ft-item .content-wrapper .freelancer-about .t-item .t-info .t-role,
.freelancer-about .t-item .t-info .ft-hover-item .ft-item .content-wrapper .t-role, .ft-hover-item .ft-item .content-wrapper .t-join .t-info .t-role,
.t-join .t-info .ft-hover-item .ft-item .content-wrapper .t-role, .ft-hover-item .ft-item .content-wrapper .login-2 .bg-overlay .form-wrapper .form-content .cards-header,
.login-2 .bg-overlay .form-wrapper .form-content .ft-hover-item .ft-item .content-wrapper .cards-header, .ft-hover-item .ft-item .content-wrapper .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .ft-hover-item .ft-item .content-wrapper .sc-lead, .ft-hover-item .ft-item .content-wrapper h5, .ft-hover-item .ft-item .content-wrapper .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .ft-hover-item .ft-item .content-wrapper .ft-heading, .ft-hover-item .ft-item .content-wrapper .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .ft-hover-item .ft-item .content-wrapper .tab-info, .ft-hover-item .ft-item .content-wrapper .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .ft-hover-item .ft-item .content-wrapper .widget-comm-title, .ft-hover-item .ft-item .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .ft-hover-item .ft-item .content-wrapper .content-inner .cs-timer .item .title-timer {
  margin: 0;
  padding-bottom: 20px;
  color: #ececec;
}

.ft-hover-item .ft-item .content-wrapper p {
  margin: 0;
  padding-bottom: 45px;
  color: #ececec;
}

.ft-hover-item .ft-item .content-wrapper .ft-button {
  opacity: 0;
}

.ft-hover-item .ft-item:hover {
  background-size: 103%;
}

.ft-hover-item .ft-item:hover .bg-overlay {
  background: rgba(17, 17, 17, 0.8);
}

.ft-hover-item .ft-item:hover .content-wrapper {
  bottom: 100px;
}

.ft-hover-item .ft-item:hover .content-wrapper .ft-button {
  opacity: 1;
}

.ft-hover-item .ft-1, .ft-hover-item .ft-2 {
  background: #ccc url(../../assets/images/landing-ft-4.jpg);
  background-size: 100%;
  background-position: 50%;
  -webkit-transition: background-size 0.3s;
          transition: background-size 0.3s;
}

.ft-hover-item .ft-1 .bg-overlay, .ft-hover-item .ft-2 .bg-overlay {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(17, 17, 17, 0.55);
  -webkit-transition: background 0.4s;
          transition: background 0.4s;
}

.ft-hover-item .ft-2 {
  background: url(../../assets/images/bridge-2.jpg);
  background-size: 100%;
  background-position: 50%;
}

.ft-hover-item .ft-2 .bg-overlay {
  background: rgba(17, 17, 17, 0.4);
}

/* ---- 9.12 Video Background ---- */
.play-btn {
  display: inline-block;
  padding-top: 50px;
}

.play-btn .play-icon {
  display: inline-block;
  font-size: 64px;
  vertical-align: middle;
  -webkit-transform: translateX(65px);
      -ms-transform: translateX(65px);
          transform: translateX(65px);
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}

.play-btn h5, .play-btn .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .play-btn .ft-heading, .play-btn .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .play-btn .tab-info, .play-btn .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .play-btn .widget-comm-title, .play-btn .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .play-btn .title-timer {
  display: inline-block;
  padding-left: 20px;
  vertical-align: middle;
  opacity: 0;
  -webkit-transition: opacity 0.4s;
          transition: opacity 0.4s;
}

.play-btn:hover .play-icon {
  font-size: 40px;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}

.play-btn:hover h5, .play-btn:hover .ft-boxed-hover ul li .hover-content .ft-heading, .ft-boxed-hover ul li .hover-content .play-btn:hover .ft-heading, .play-btn:hover .ft-tabs .tabs-list li a .tab-group .tab-info, .ft-tabs .tabs-list li a .tab-group .play-btn:hover .tab-info, .play-btn:hover .sidebar .comments-widget .widget-item span .widget-comm-title, .sidebar .comments-widget .widget-item span .play-btn:hover .widget-comm-title, .play-btn:hover .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer, .comingsoon .content-wrapper .content-inner .cs-timer .item .play-btn:hover .title-timer {
  opacity: 1;
}

.play-btn:focus {
  outline: none;
}

.video-bg-section {
  height: 365px;
  background: #ccc url(../images/hero/edge.jpg);
  background-position: 50%;
  background-size: cover;
}

.video-bg-section .video-sec-content {
  background: rgba(17, 17, 17, 0.5);
  padding-top: 100px;
  width: 100%;
  height: 100%;
  text-align: center;
}

.video-bg-section .video-sec-content h3,
.video-bg-section .video-sec-content .page-title .subheading,
.page-title .video-bg-section .video-sec-content .subheading, .video-bg-section .video-sec-content h5,
.video-bg-section .video-sec-content .ft-boxed-hover ul li .hover-content .ft-heading,
.ft-boxed-hover ul li .hover-content .video-bg-section .video-sec-content .ft-heading, .video-bg-section .video-sec-content .ft-tabs .tabs-list li a .tab-group .tab-info,
.ft-tabs .tabs-list li a .tab-group .video-bg-section .video-sec-content .tab-info, .video-bg-section .video-sec-content .sidebar .comments-widget .widget-item span .widget-comm-title,
.sidebar .comments-widget .widget-item span .video-bg-section .video-sec-content .widget-comm-title, .video-bg-section .video-sec-content .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .video-bg-section .video-sec-content .title-timer, .video-bg-section .video-sec-content span {
  color: #ececec;
}

.video-bg-section .video-sec-content .cta-lead {
  letter-spacing: 8px;
}

/* ---- 9.13 Feature Big Images + Text ---- */
.ft-big-img-left {
  position: relative;
}

.ft-big-img-left .ft-img-container {
  margin-bottom: -50px;
}

.ft-big-img-left .ft-img-container .ft-img {
  position: relative;
  top: -60px;
  left: -55%;
}

.ft-big-img-left .ft-content {
  position: relative;
  top: 125px;
}

.ft-big-img-left .ft-content h3, .ft-big-img-left .ft-content .page-title .subheading, .page-title .ft-big-img-left .ft-content .subheading {
  margin: 0;
  padding-bottom: 30px;
}

.ft-big-img-left .ft-content .h-alt {
  margin: 0;
  padding-bottom: 45px;
  color: #999;
}

.ft-big-img-left .ft-content .btn, .ft-big-img-left .ft-content .btn-ghost, .ft-big-img-left .ft-content .btn-ghost-light, .ft-big-img-left .ft-content .btn-text, .ft-big-img-left .ft-content .btn-text-light, .ft-big-img-left .ft-content .btn-light {
  margin-top: 30px;
}

.ft-big-img-right {
  position: relative;
}

.ft-big-img-right .ft-img-container {
  padding-top: 100px;
  padding-bottom: 100px;
  overflow: hidden;
}

.ft-big-img-right .ft-img-container .ft-img {
  position: relative;
  right: -35%;
}

.ft-big-img-right .ft-content {
  position: relative;
  top: 225px;
}

.ft-big-img-right .ft-content h3, .ft-big-img-right .ft-content .page-title .subheading, .page-title .ft-big-img-right .ft-content .subheading {
  margin: 0;
  padding-bottom: 30px;
}

.ft-big-img-right .ft-content .h-alt {
  margin: 0;
  padding-bottom: 45px;
  color: #999;
}

.ft-big-img-right .ft-content .btn, .ft-big-img-right .ft-content .btn-ghost, .ft-big-img-right .ft-content .btn-ghost-light, .ft-big-img-right .ft-content .btn-text, .ft-big-img-right .ft-content .btn-text-light, .ft-big-img-right .ft-content .btn-light {
  margin-top: 30px;
}

/* ---- 9.14 Features ---- */
.ft-img-left .ft-content {
  position: relative;
  top: 35px;
}

.ft-img-left .ft-content h3, .ft-img-left .ft-content .page-title .subheading, .page-title .ft-img-left .ft-content .subheading {
  margin: 0;
  padding-bottom: 30px;
}

.ft-img-left .ft-content .h-alt {
  margin: 0;
  padding-bottom: 45px;
  color: #999;
}

.ft-img-left .ft-content .btn, .ft-img-left .ft-content .btn-ghost, .ft-img-left .ft-content .btn-ghost-light, .ft-img-left .ft-content .btn-text, .ft-img-left .ft-content .btn-text-light, .ft-img-left .ft-content .btn-light {
  margin-top: 30px;
}

/* ---- 9.15 Feature - Utiliy Classes ---- */
.ft-icon-white {
  color: #ececec;
}

.ft-icon-gray {
  color: #999;
}

.ft-icon-dark {
  color: #111;
}
hr {
  margin-top: 0;
  margin-bottom: 0;
  border-color: #ccc;
}

.no-gap {
  padding-left: 0;
  padding-right: 0;
}

.no-gap-left {
  padding-left: 0;
}

.no-gap-right {
  padding-right: 0;
}

.center-block {
  margin: 0 auto;
  display: block !important;
}

.no-style-link {
  color: inherit;
}

.no-style-link:focus,
.no-style-link:visited {
  text-decoration: none;
  color: inherit;
}

.no-style-link:hover {
  color: #919191;
}

.clear {
  clear: both;
}

/* ---- Backgrounds ---- */
.dark-bg {
  background: #111;
}

.dark-bg h1,
.dark-bg .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .dark-bg .nbr-timer, .dark-bg h2,
.dark-bg h3,
.dark-bg .page-title .subheading,
.page-title .dark-bg .subheading, .dark-bg h4,
.dark-bg .ft-tabs .tabs-list li a .tab-group .tab-heading,
.ft-tabs .tabs-list li a .tab-group .dark-bg .tab-heading, .dark-bg .testimonials-3col .t-item blockquote footer cite,
.testimonials-3col .t-item blockquote footer .dark-bg cite, .dark-bg .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .dark-bg cite, .dark-bg .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .dark-bg cite, .dark-bg .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .dark-bg cite, .dark-bg .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .dark-bg cite, .dark-bg .team-3col .t-item .t-info .t-role,
.team-3col .t-item .t-info .dark-bg .t-role, .dark-bg .team-4col .t-item .t-info .t-role,
.team-4col .t-item .t-info .dark-bg .t-role, .dark-bg .freelancer-about .t-item .t-info .t-role,
.freelancer-about .t-item .t-info .dark-bg .t-role, .dark-bg .t-join .t-info .t-role,
.t-join .t-info .dark-bg .t-role, .dark-bg .login-2 .bg-overlay .form-wrapper .form-content .cards-header,
.login-2 .bg-overlay .form-wrapper .form-content .dark-bg .cards-header, .dark-bg .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .dark-bg .sc-lead, .dark-bg h5,
.dark-bg .ft-boxed-hover ul li .hover-content .ft-heading,
.ft-boxed-hover ul li .hover-content .dark-bg .ft-heading, .dark-bg .ft-tabs .tabs-list li a .tab-group .tab-info,
.ft-tabs .tabs-list li a .tab-group .dark-bg .tab-info, .dark-bg .sidebar .comments-widget .widget-item span .widget-comm-title,
.sidebar .comments-widget .widget-item span .dark-bg .widget-comm-title, .dark-bg .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .dark-bg .title-timer, .dark-bg h6, .dark-bg .progress-group .progress-title, .progress-group .dark-bg .progress-title,
.dark-bg .progress-group .progress-value, .progress-group .dark-bg .progress-value, .dark-bg .accordions-1 .panel .panel-heading .panel-title, .accordions-1 .panel .panel-heading .dark-bg .panel-title, .dark-bg .footer-social-links ul li, .footer-social-links ul .dark-bg li, .dark-bg .footer-contact .contact-info .show-info-link, .footer-contact .contact-info .dark-bg .show-info-link, .dark-bg .footer-contact .contact-info address ul li .adr-heading, .footer-contact .contact-info address ul li .dark-bg .adr-heading, .dark-bg .footer-contact .contact-info address .show-map, .footer-contact .contact-info address .dark-bg .show-map, .dark-bg .footer-litle address ul li .adr-group .adr-heading, .footer-litle address ul li .adr-group .dark-bg .adr-heading, .dark-bg .ft-cards .ft-item a, .ft-cards .ft-item .dark-bg a, .dark-bg .ft-cards-2 .ft-card-item .ft-content .link-btn, .ft-cards-2 .ft-card-item .ft-content .dark-bg .link-btn, .dark-bg .ft-boxed-hover ul li .hover-content a, .ft-boxed-hover ul li .hover-content .dark-bg a, .dark-bg .circles-counters .circle-item .circle-text, .circles-counters .circle-item .dark-bg .circle-text, .dark-bg .circles-counters-dark-bg .circle-item .circle-text, .circles-counters-dark-bg .circle-item .dark-bg .circle-text, .dark-bg .number-counters .count-wrapper .count-item .count-text, .number-counters .count-wrapper .count-item .dark-bg .count-text, .dark-bg .number-counters-dark-bg .count-wrapper .count-item .count-text, .number-counters-dark-bg .count-wrapper .count-item .dark-bg .count-text, .dark-bg .project-nav nav .nav-btns li a, .project-nav nav .nav-btns li .dark-bg a, .dark-bg .pricing-tables .p-table .desc, .pricing-tables .p-table .dark-bg .desc, .dark-bg .blog-post-nav .prev-btn, .blog-post-nav .dark-bg .prev-btn,
.dark-bg .blog-post-nav .next-btn, .blog-post-nav .dark-bg .next-btn, .dark-bg .sidebar .tags-widget .tag-list li a, .sidebar .tags-widget .tag-list li .dark-bg a, .dark-bg .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .dark-bg span, .dark-bg .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .dark-bg a,
.dark-bg .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p, .contact-1 .contact-wrapper .contact-info-wrapper address .address-group .dark-bg p, .dark-bg .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a, .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .dark-bg a, .dark-bg .landing-hero .heading-wrapper .cta-btn, .landing-hero .heading-wrapper .dark-bg .cta-btn {
  color: #ececec;
}

.dark-bg .subheading {
  color: #777 !important;
  font-weight: 400;
}

.gray-bg {
  background: #f8f8f8;
  margin-top: -10px
}

.bg-white {
  background: #fff;
}

/* ---- White Space ---- */
.ws-s {
  padding-bottom: 50px;
}

.ws-m {
  padding-bottom: 100px;
}

.ws-l {
  padding-bottom: 160px;
}

.mb-30 {
  margin-bottom: 30px;
}

.mb-50 {
  margin-bottom: 50px;
}

.mb-75 {
  margin-bottom: 75px;
}

.mb-100 {
  margin-bottom: 100px;
}

.section {
  padding-top: 80px;
  padding-bottom: 100px;
}

.section-heading h1,
.section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .nbr-timer, .section-heading h2,
.section-heading h3,
.section-heading .page-title .subheading,
.page-title .section-heading .subheading, .section-heading h4,
.section-heading .ft-tabs .tabs-list li a .tab-group .tab-heading,
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-heading, .section-heading .testimonials-3col .t-item blockquote footer cite,
.testimonials-3col .t-item blockquote footer .section-heading cite, .section-heading .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .section-heading cite, .section-heading .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .section-heading cite, .section-heading .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .section-heading cite, .section-heading .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .section-heading cite, .section-heading .team-3col .t-item .t-info .t-role,
.team-3col .t-item .t-info .section-heading .t-role, .section-heading .team-4col .t-item .t-info .t-role,
.team-4col .t-item .t-info .section-heading .t-role, .section-heading .freelancer-about .t-item .t-info .t-role,
.freelancer-about .t-item .t-info .section-heading .t-role, .section-heading .t-join .t-info .t-role,
.t-join .t-info .section-heading .t-role, .section-heading .login-2 .bg-overlay .form-wrapper .form-content .cards-header,
.login-2 .bg-overlay .form-wrapper .form-content .section-heading .cards-header, .section-heading .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .section-heading .sc-lead, .section-heading h5,
.section-heading .ft-boxed-hover ul li .hover-content .ft-heading,
.ft-boxed-hover ul li .hover-content .section-heading .ft-heading, .section-heading .ft-tabs .tabs-list li a .tab-group .tab-info,
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-info, .section-heading .sidebar .comments-widget .widget-item span .widget-comm-title,
.sidebar .comments-widget .widget-item span .section-heading .widget-comm-title, .section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .title-timer, .section-heading h6,
.section-heading .progress-group .progress-title,
.progress-group .section-heading .progress-title,
.section-heading .progress-group .progress-value,
.progress-group .section-heading .progress-value, .section-heading .accordions-1 .panel .panel-heading .panel-title,
.accordions-1 .panel .panel-heading .section-heading .panel-title, .section-heading .footer-social-links ul li,
.footer-social-links ul .section-heading li, .section-heading .footer-contact .contact-info .show-info-link,
.footer-contact .contact-info .section-heading .show-info-link, .section-heading .footer-contact .contact-info address ul li .adr-heading,
.footer-contact .contact-info address ul li .section-heading .adr-heading, .section-heading .footer-contact .contact-info address .show-map,
.footer-contact .contact-info address .section-heading .show-map, .section-heading .footer-litle address ul li .adr-group .adr-heading,
.footer-litle address ul li .adr-group .section-heading .adr-heading, .section-heading .ft-cards .ft-item a,
.ft-cards .ft-item .section-heading a, .section-heading .ft-cards-2 .ft-card-item .ft-content .link-btn,
.ft-cards-2 .ft-card-item .ft-content .section-heading .link-btn, .section-heading .ft-boxed-hover ul li .hover-content a,
.ft-boxed-hover ul li .hover-content .section-heading a, .section-heading .circles-counters .circle-item .circle-text,
.circles-counters .circle-item .section-heading .circle-text, .section-heading .circles-counters-dark-bg .circle-item .circle-text,
.circles-counters-dark-bg .circle-item .section-heading .circle-text, .section-heading .number-counters .count-wrapper .count-item .count-text,
.number-counters .count-wrapper .count-item .section-heading .count-text, .section-heading .number-counters-dark-bg .count-wrapper .count-item .count-text,
.number-counters-dark-bg .count-wrapper .count-item .section-heading .count-text, .section-heading .project-nav nav .nav-btns li a,
.project-nav nav .nav-btns li .section-heading a, .section-heading .pricing-tables .p-table .desc,
.pricing-tables .p-table .section-heading .desc, .section-heading .blog-post-nav .prev-btn,
.blog-post-nav .section-heading .prev-btn,
.section-heading .blog-post-nav .next-btn,
.blog-post-nav .section-heading .next-btn, .section-heading .sidebar .tags-widget .tag-list li a,
.sidebar .tags-widget .tag-list li .section-heading a, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading span, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading a,
.section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading p, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .section-heading a, .section-heading .landing-hero .heading-wrapper .cta-btn,
.landing-hero .heading-wrapper .section-heading .cta-btn, .section-heading p,
.section-heading span {
  margin: 0;
}

.section-heading h1:first-child,
.section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .nbr-timer:first-child, .section-heading h2:first-child,
.section-heading h3:first-child,
.section-heading .page-title .subheading:first-child,
.page-title .section-heading .subheading:first-child, .section-heading h4:first-child,
.section-heading .ft-tabs .tabs-list li a .tab-group .tab-heading:first-child,
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-heading:first-child, .section-heading .testimonials-3col .t-item blockquote footer cite:first-child,
.testimonials-3col .t-item blockquote footer .section-heading cite:first-child, .section-heading .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:first-child,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .section-heading cite:first-child, .section-heading .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:first-child,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .section-heading cite:first-child, .section-heading .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:first-child,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .section-heading cite:first-child, .section-heading .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:first-child,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .section-heading cite:first-child, .section-heading .team-3col .t-item .t-info .t-role:first-child,
.team-3col .t-item .t-info .section-heading .t-role:first-child, .section-heading .team-4col .t-item .t-info .t-role:first-child,
.team-4col .t-item .t-info .section-heading .t-role:first-child, .section-heading .freelancer-about .t-item .t-info .t-role:first-child,
.freelancer-about .t-item .t-info .section-heading .t-role:first-child, .section-heading .t-join .t-info .t-role:first-child,
.t-join .t-info .section-heading .t-role:first-child, .section-heading .login-2 .bg-overlay .form-wrapper .form-content .cards-header:first-child,
.login-2 .bg-overlay .form-wrapper .form-content .section-heading .cards-header:first-child, .section-heading .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:first-child,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .section-heading .sc-lead:first-child, .section-heading h5:first-child,
.section-heading .ft-boxed-hover ul li .hover-content .ft-heading:first-child,
.ft-boxed-hover ul li .hover-content .section-heading .ft-heading:first-child, .section-heading .ft-tabs .tabs-list li a .tab-group .tab-info:first-child,
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-info:first-child, .section-heading .sidebar .comments-widget .widget-item span .widget-comm-title:first-child,
.sidebar .comments-widget .widget-item span .section-heading .widget-comm-title:first-child, .section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .title-timer:first-child, .section-heading h6:first-child,
.section-heading .progress-group .progress-title:first-child,
.progress-group .section-heading .progress-title:first-child,
.section-heading .progress-group .progress-value:first-child,
.progress-group .section-heading .progress-value:first-child, .section-heading .accordions-1 .panel .panel-heading .panel-title:first-child,
.accordions-1 .panel .panel-heading .section-heading .panel-title:first-child, .section-heading .footer-social-links ul li:first-child,
.footer-social-links ul .section-heading li:first-child, .section-heading .footer-contact .contact-info .show-info-link:first-child,
.footer-contact .contact-info .section-heading .show-info-link:first-child, .section-heading .footer-contact .contact-info address ul li .adr-heading:first-child,
.footer-contact .contact-info address ul li .section-heading .adr-heading:first-child, .section-heading .footer-contact .contact-info address .show-map:first-child,
.footer-contact .contact-info address .section-heading .show-map:first-child, .section-heading .footer-litle address ul li .adr-group .adr-heading:first-child,
.footer-litle address ul li .adr-group .section-heading .adr-heading:first-child, .section-heading .ft-cards .ft-item a:first-child,
.ft-cards .ft-item .section-heading a:first-child, .section-heading .ft-cards-2 .ft-card-item .ft-content .link-btn:first-child,
.ft-cards-2 .ft-card-item .ft-content .section-heading .link-btn:first-child, .section-heading .ft-boxed-hover ul li .hover-content a:first-child,
.ft-boxed-hover ul li .hover-content .section-heading a:first-child, .section-heading .circles-counters .circle-item .circle-text:first-child,
.circles-counters .circle-item .section-heading .circle-text:first-child, .section-heading .circles-counters-dark-bg .circle-item .circle-text:first-child,
.circles-counters-dark-bg .circle-item .section-heading .circle-text:first-child, .section-heading .number-counters .count-wrapper .count-item .count-text:first-child,
.number-counters .count-wrapper .count-item .section-heading .count-text:first-child, .section-heading .number-counters-dark-bg .count-wrapper .count-item .count-text:first-child,
.number-counters-dark-bg .count-wrapper .count-item .section-heading .count-text:first-child, .section-heading .project-nav nav .nav-btns li a:first-child,
.project-nav nav .nav-btns li .section-heading a:first-child, .section-heading .pricing-tables .p-table .desc:first-child,
.pricing-tables .p-table .section-heading .desc:first-child, .section-heading .blog-post-nav .prev-btn:first-child,
.blog-post-nav .section-heading .prev-btn:first-child,
.section-heading .blog-post-nav .next-btn:first-child,
.blog-post-nav .section-heading .next-btn:first-child, .section-heading .sidebar .tags-widget .tag-list li a:first-child,
.sidebar .tags-widget .tag-list li .section-heading a:first-child, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading span:first-child, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading a:first-child,
.section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading p:first-child, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .section-heading a:first-child, .section-heading .landing-hero .heading-wrapper .cta-btn:first-child,
.landing-hero .heading-wrapper .section-heading .cta-btn:first-child, .section-heading p:first-child,
.section-heading span:first-child {
  margin-top: 160px;
}

.section-heading h1:nth-child(2),
.section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:nth-child(2),
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .nbr-timer:nth-child(2), .section-heading h2:nth-child(2),
.section-heading h3:nth-child(2),
.section-heading .page-title .subheading:nth-child(2),
.page-title .section-heading .subheading:nth-child(2), .section-heading h4:nth-child(2),
.section-heading .ft-tabs .tabs-list li a .tab-group .tab-heading:nth-child(2),
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-heading:nth-child(2), .section-heading .testimonials-3col .t-item blockquote footer cite:nth-child(2),
.testimonials-3col .t-item blockquote footer .section-heading cite:nth-child(2), .section-heading .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:nth-child(2),
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .section-heading cite:nth-child(2), .section-heading .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:nth-child(2),
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .section-heading cite:nth-child(2), .section-heading .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:nth-child(2),
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .section-heading cite:nth-child(2), .section-heading .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:nth-child(2),
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .section-heading cite:nth-child(2), .section-heading .team-3col .t-item .t-info .t-role:nth-child(2),
.team-3col .t-item .t-info .section-heading .t-role:nth-child(2), .section-heading .team-4col .t-item .t-info .t-role:nth-child(2),
.team-4col .t-item .t-info .section-heading .t-role:nth-child(2), .section-heading .freelancer-about .t-item .t-info .t-role:nth-child(2),
.freelancer-about .t-item .t-info .section-heading .t-role:nth-child(2), .section-heading .t-join .t-info .t-role:nth-child(2),
.t-join .t-info .section-heading .t-role:nth-child(2), .section-heading .login-2 .bg-overlay .form-wrapper .form-content .cards-header:nth-child(2),
.login-2 .bg-overlay .form-wrapper .form-content .section-heading .cards-header:nth-child(2), .section-heading .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:nth-child(2),
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .section-heading .sc-lead:nth-child(2), .section-heading h5:nth-child(2),
.section-heading .ft-boxed-hover ul li .hover-content .ft-heading:nth-child(2),
.ft-boxed-hover ul li .hover-content .section-heading .ft-heading:nth-child(2), .section-heading .ft-tabs .tabs-list li a .tab-group .tab-info:nth-child(2),
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-info:nth-child(2), .section-heading .sidebar .comments-widget .widget-item span .widget-comm-title:nth-child(2),
.sidebar .comments-widget .widget-item span .section-heading .widget-comm-title:nth-child(2), .section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:nth-child(2),
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .title-timer:nth-child(2), .section-heading h6:nth-child(2),
.section-heading .progress-group .progress-title:nth-child(2),
.progress-group .section-heading .progress-title:nth-child(2),
.section-heading .progress-group .progress-value:nth-child(2),
.progress-group .section-heading .progress-value:nth-child(2), .section-heading .accordions-1 .panel .panel-heading .panel-title:nth-child(2),
.accordions-1 .panel .panel-heading .section-heading .panel-title:nth-child(2), .section-heading .footer-social-links ul li:nth-child(2),
.footer-social-links ul .section-heading li:nth-child(2), .section-heading .footer-contact .contact-info .show-info-link:nth-child(2),
.footer-contact .contact-info .section-heading .show-info-link:nth-child(2), .section-heading .footer-contact .contact-info address ul li .adr-heading:nth-child(2),
.footer-contact .contact-info address ul li .section-heading .adr-heading:nth-child(2), .section-heading .footer-contact .contact-info address .show-map:nth-child(2),
.footer-contact .contact-info address .section-heading .show-map:nth-child(2), .section-heading .footer-litle address ul li .adr-group .adr-heading:nth-child(2),
.footer-litle address ul li .adr-group .section-heading .adr-heading:nth-child(2), .section-heading .ft-cards .ft-item a:nth-child(2),
.ft-cards .ft-item .section-heading a:nth-child(2), .section-heading .ft-cards-2 .ft-card-item .ft-content .link-btn:nth-child(2),
.ft-cards-2 .ft-card-item .ft-content .section-heading .link-btn:nth-child(2), .section-heading .ft-boxed-hover ul li .hover-content a:nth-child(2),
.ft-boxed-hover ul li .hover-content .section-heading a:nth-child(2), .section-heading .circles-counters .circle-item .circle-text:nth-child(2),
.circles-counters .circle-item .section-heading .circle-text:nth-child(2), .section-heading .circles-counters-dark-bg .circle-item .circle-text:nth-child(2),
.circles-counters-dark-bg .circle-item .section-heading .circle-text:nth-child(2), .section-heading .number-counters .count-wrapper .count-item .count-text:nth-child(2),
.number-counters .count-wrapper .count-item .section-heading .count-text:nth-child(2), .section-heading .number-counters-dark-bg .count-wrapper .count-item .count-text:nth-child(2),
.number-counters-dark-bg .count-wrapper .count-item .section-heading .count-text:nth-child(2), .section-heading .project-nav nav .nav-btns li a:nth-child(2),
.project-nav nav .nav-btns li .section-heading a:nth-child(2), .section-heading .pricing-tables .p-table .desc:nth-child(2),
.pricing-tables .p-table .section-heading .desc:nth-child(2), .section-heading .blog-post-nav .prev-btn:nth-child(2),
.blog-post-nav .section-heading .prev-btn:nth-child(2),
.section-heading .blog-post-nav .next-btn:nth-child(2),
.blog-post-nav .section-heading .next-btn:nth-child(2), .section-heading .sidebar .tags-widget .tag-list li a:nth-child(2),
.sidebar .tags-widget .tag-list li .section-heading a:nth-child(2), .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading span:nth-child(2), .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading a:nth-child(2),
.section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading p:nth-child(2), .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .section-heading a:nth-child(2), .section-heading .landing-hero .heading-wrapper .cta-btn:nth-child(2),
.landing-hero .heading-wrapper .section-heading .cta-btn:nth-child(2), .section-heading p:nth-child(2),
.section-heading span:nth-child(2) {
  margin-top: 30px;
}

.section-heading h1:last-child,
.section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:last-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .nbr-timer:last-child, .section-heading h2:last-child,
.section-heading h3:last-child,
.section-heading .page-title .subheading:last-child,
.page-title .section-heading .subheading:last-child, .section-heading h4:last-child,
.section-heading .ft-tabs .tabs-list li a .tab-group .tab-heading:last-child,
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-heading:last-child, .section-heading .testimonials-3col .t-item blockquote footer cite:last-child,
.testimonials-3col .t-item blockquote footer .section-heading cite:last-child, .section-heading .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:last-child,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .section-heading cite:last-child, .section-heading .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:last-child,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .section-heading cite:last-child, .section-heading .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:last-child,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .section-heading cite:last-child, .section-heading .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:last-child,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .section-heading cite:last-child, .section-heading .team-3col .t-item .t-info .t-role:last-child,
.team-3col .t-item .t-info .section-heading .t-role:last-child, .section-heading .team-4col .t-item .t-info .t-role:last-child,
.team-4col .t-item .t-info .section-heading .t-role:last-child, .section-heading .freelancer-about .t-item .t-info .t-role:last-child,
.freelancer-about .t-item .t-info .section-heading .t-role:last-child, .section-heading .t-join .t-info .t-role:last-child,
.t-join .t-info .section-heading .t-role:last-child, .section-heading .login-2 .bg-overlay .form-wrapper .form-content .cards-header:last-child,
.login-2 .bg-overlay .form-wrapper .form-content .section-heading .cards-header:last-child, .section-heading .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:last-child,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .section-heading .sc-lead:last-child, .section-heading h5:last-child,
.section-heading .ft-boxed-hover ul li .hover-content .ft-heading:last-child,
.ft-boxed-hover ul li .hover-content .section-heading .ft-heading:last-child, .section-heading .ft-tabs .tabs-list li a .tab-group .tab-info:last-child,
.ft-tabs .tabs-list li a .tab-group .section-heading .tab-info:last-child, .section-heading .sidebar .comments-widget .widget-item span .widget-comm-title:last-child,
.sidebar .comments-widget .widget-item span .section-heading .widget-comm-title:last-child, .section-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:last-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .section-heading .title-timer:last-child, .section-heading h6:last-child,
.section-heading .progress-group .progress-title:last-child,
.progress-group .section-heading .progress-title:last-child,
.section-heading .progress-group .progress-value:last-child,
.progress-group .section-heading .progress-value:last-child, .section-heading .accordions-1 .panel .panel-heading .panel-title:last-child,
.accordions-1 .panel .panel-heading .section-heading .panel-title:last-child, .section-heading .footer-social-links ul li:last-child,
.footer-social-links ul .section-heading li:last-child, .section-heading .footer-contact .contact-info .show-info-link:last-child,
.footer-contact .contact-info .section-heading .show-info-link:last-child, .section-heading .footer-contact .contact-info address ul li .adr-heading:last-child,
.footer-contact .contact-info address ul li .section-heading .adr-heading:last-child, .section-heading .footer-contact .contact-info address .show-map:last-child,
.footer-contact .contact-info address .section-heading .show-map:last-child, .section-heading .footer-litle address ul li .adr-group .adr-heading:last-child,
.footer-litle address ul li .adr-group .section-heading .adr-heading:last-child, .section-heading .ft-cards .ft-item a:last-child,
.ft-cards .ft-item .section-heading a:last-child, .section-heading .ft-cards-2 .ft-card-item .ft-content .link-btn:last-child,
.ft-cards-2 .ft-card-item .ft-content .section-heading .link-btn:last-child, .section-heading .ft-boxed-hover ul li .hover-content a:last-child,
.ft-boxed-hover ul li .hover-content .section-heading a:last-child, .section-heading .circles-counters .circle-item .circle-text:last-child,
.circles-counters .circle-item .section-heading .circle-text:last-child, .section-heading .circles-counters-dark-bg .circle-item .circle-text:last-child,
.circles-counters-dark-bg .circle-item .section-heading .circle-text:last-child, .section-heading .number-counters .count-wrapper .count-item .count-text:last-child,
.number-counters .count-wrapper .count-item .section-heading .count-text:last-child, .section-heading .number-counters-dark-bg .count-wrapper .count-item .count-text:last-child,
.number-counters-dark-bg .count-wrapper .count-item .section-heading .count-text:last-child, .section-heading .project-nav nav .nav-btns li a:last-child,
.project-nav nav .nav-btns li .section-heading a:last-child, .section-heading .pricing-tables .p-table .desc:last-child,
.pricing-tables .p-table .section-heading .desc:last-child, .section-heading .blog-post-nav .prev-btn:last-child,
.blog-post-nav .section-heading .prev-btn:last-child,
.section-heading .blog-post-nav .next-btn:last-child,
.blog-post-nav .section-heading .next-btn:last-child, .section-heading .sidebar .tags-widget .tag-list li a:last-child,
.sidebar .tags-widget .tag-list li .section-heading a:last-child, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading span:last-child, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading a:last-child,
.section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .section-heading p:last-child, .section-heading .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .section-heading a:last-child, .section-heading .landing-hero .heading-wrapper .cta-btn:last-child,
.landing-hero .heading-wrapper .section-heading .cta-btn:last-child, .section-heading p:last-child,
.section-heading span:last-child {
  margin-bottom: 100px;
}
.sec-heading {
  margin-bottom: 80px;
  text-align: center;
}

.sec-heading .subheading {
  display: block;
  text-transform: uppercase;
  font-family: "Open Sans", "Montserrat", "Helvetica Neue", Helvetica, sans-serif;
  font-weight: 300;
  color: #999;
  letter-spacing: 2.5px;
}

.sec-heading h1:first-child,
.sec-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading .nbr-timer:first-child, .sec-heading h2:first-child,
.sec-heading h3:first-child,
.sec-heading .page-title .subheading:first-child,
.page-title .sec-heading .subheading:first-child, .sec-heading h4:first-child,
.sec-heading .ft-tabs .tabs-list li a .tab-group .tab-heading:first-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading .tab-heading:first-child, .sec-heading .testimonials-3col .t-item blockquote footer cite:first-child,
.testimonials-3col .t-item blockquote footer .sec-heading cite:first-child, .sec-heading .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:first-child,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .sec-heading cite:first-child, .sec-heading .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:first-child,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .sec-heading cite:first-child, .sec-heading .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:first-child,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .sec-heading cite:first-child, .sec-heading .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:first-child,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .sec-heading cite:first-child, .sec-heading .team-3col .t-item .t-info .t-role:first-child,
.team-3col .t-item .t-info .sec-heading .t-role:first-child, .sec-heading .team-4col .t-item .t-info .t-role:first-child,
.team-4col .t-item .t-info .sec-heading .t-role:first-child, .sec-heading .freelancer-about .t-item .t-info .t-role:first-child,
.freelancer-about .t-item .t-info .sec-heading .t-role:first-child, .sec-heading .t-join .t-info .t-role:first-child,
.t-join .t-info .sec-heading .t-role:first-child, .sec-heading .login-2 .bg-overlay .form-wrapper .form-content .cards-header:first-child,
.login-2 .bg-overlay .form-wrapper .form-content .sec-heading .cards-header:first-child, .sec-heading .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:first-child,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .sec-heading .sc-lead:first-child, .sec-heading h5:first-child,
.sec-heading .ft-boxed-hover ul li .hover-content .ft-heading:first-child,
.ft-boxed-hover ul li .hover-content .sec-heading .ft-heading:first-child, .sec-heading .ft-tabs .tabs-list li a .tab-group .tab-info:first-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading .tab-info:first-child, .sec-heading .sidebar .comments-widget .widget-item span .widget-comm-title:first-child,
.sidebar .comments-widget .widget-item span .sec-heading .widget-comm-title:first-child, .sec-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading .title-timer:first-child, .sec-heading h6:first-child,
.sec-heading .progress-group .progress-title:first-child,
.progress-group .sec-heading .progress-title:first-child,
.sec-heading .progress-group .progress-value:first-child,
.progress-group .sec-heading .progress-value:first-child, .sec-heading .accordions-1 .panel .panel-heading .panel-title:first-child,
.accordions-1 .panel .panel-heading .sec-heading .panel-title:first-child, .sec-heading .footer-social-links ul li:first-child,
.footer-social-links ul .sec-heading li:first-child, .sec-heading .footer-contact .contact-info .show-info-link:first-child,
.footer-contact .contact-info .sec-heading .show-info-link:first-child, .sec-heading .footer-contact .contact-info address ul li .adr-heading:first-child,
.footer-contact .contact-info address ul li .sec-heading .adr-heading:first-child, .sec-heading .footer-contact .contact-info address .show-map:first-child,
.footer-contact .contact-info address .sec-heading .show-map:first-child, .sec-heading .footer-litle address ul li .adr-group .adr-heading:first-child,
.footer-litle address ul li .adr-group .sec-heading .adr-heading:first-child, .sec-heading .ft-cards .ft-item a:first-child,
.ft-cards .ft-item .sec-heading a:first-child, .sec-heading .ft-cards-2 .ft-card-item .ft-content .link-btn:first-child,
.ft-cards-2 .ft-card-item .ft-content .sec-heading .link-btn:first-child, .sec-heading .ft-boxed-hover ul li .hover-content a:first-child,
.ft-boxed-hover ul li .hover-content .sec-heading a:first-child, .sec-heading .circles-counters .circle-item .circle-text:first-child,
.circles-counters .circle-item .sec-heading .circle-text:first-child, .sec-heading .circles-counters-dark-bg .circle-item .circle-text:first-child,
.circles-counters-dark-bg .circle-item .sec-heading .circle-text:first-child, .sec-heading .number-counters .count-wrapper .count-item .count-text:first-child,
.number-counters .count-wrapper .count-item .sec-heading .count-text:first-child, .sec-heading .number-counters-dark-bg .count-wrapper .count-item .count-text:first-child,
.number-counters-dark-bg .count-wrapper .count-item .sec-heading .count-text:first-child, .sec-heading .project-nav nav .nav-btns li a:first-child,
.project-nav nav .nav-btns li .sec-heading a:first-child, .sec-heading .pricing-tables .p-table .desc:first-child,
.pricing-tables .p-table .sec-heading .desc:first-child, .sec-heading .blog-post-nav .prev-btn:first-child,
.blog-post-nav .sec-heading .prev-btn:first-child,
.sec-heading .blog-post-nav .next-btn:first-child,
.blog-post-nav .sec-heading .next-btn:first-child, .sec-heading .sidebar .tags-widget .tag-list li a:first-child,
.sidebar .tags-widget .tag-list li .sec-heading a:first-child, .sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading span:first-child, .sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading a:first-child,
.sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading p:first-child, .sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .sec-heading a:first-child, .sec-heading .landing-hero .heading-wrapper .cta-btn:first-child,
.landing-hero .heading-wrapper .sec-heading .cta-btn:first-child, .sec-heading p:first-child,
.sec-heading span:first-child {
  margin: 0;
}

.sec-heading h1:last-child,
.sec-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:last-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading .nbr-timer:last-child, .sec-heading h2:last-child,
.sec-heading h3:last-child,
.sec-heading .page-title .subheading:last-child,
.page-title .sec-heading .subheading:last-child, .sec-heading h4:last-child,
.sec-heading .ft-tabs .tabs-list li a .tab-group .tab-heading:last-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading .tab-heading:last-child, .sec-heading .testimonials-3col .t-item blockquote footer cite:last-child,
.testimonials-3col .t-item blockquote footer .sec-heading cite:last-child, .sec-heading .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:last-child,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .sec-heading cite:last-child, .sec-heading .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:last-child,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .sec-heading cite:last-child, .sec-heading .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:last-child,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .sec-heading cite:last-child, .sec-heading .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:last-child,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .sec-heading cite:last-child, .sec-heading .team-3col .t-item .t-info .t-role:last-child,
.team-3col .t-item .t-info .sec-heading .t-role:last-child, .sec-heading .team-4col .t-item .t-info .t-role:last-child,
.team-4col .t-item .t-info .sec-heading .t-role:last-child, .sec-heading .freelancer-about .t-item .t-info .t-role:last-child,
.freelancer-about .t-item .t-info .sec-heading .t-role:last-child, .sec-heading .t-join .t-info .t-role:last-child,
.t-join .t-info .sec-heading .t-role:last-child, .sec-heading .login-2 .bg-overlay .form-wrapper .form-content .cards-header:last-child,
.login-2 .bg-overlay .form-wrapper .form-content .sec-heading .cards-header:last-child, .sec-heading .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:last-child,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .sec-heading .sc-lead:last-child, .sec-heading h5:last-child,
.sec-heading .ft-boxed-hover ul li .hover-content .ft-heading:last-child,
.ft-boxed-hover ul li .hover-content .sec-heading .ft-heading:last-child, .sec-heading .ft-tabs .tabs-list li a .tab-group .tab-info:last-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading .tab-info:last-child, .sec-heading .sidebar .comments-widget .widget-item span .widget-comm-title:last-child,
.sidebar .comments-widget .widget-item span .sec-heading .widget-comm-title:last-child, .sec-heading .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:last-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading .title-timer:last-child, .sec-heading h6:last-child,
.sec-heading .progress-group .progress-title:last-child,
.progress-group .sec-heading .progress-title:last-child,
.sec-heading .progress-group .progress-value:last-child,
.progress-group .sec-heading .progress-value:last-child, .sec-heading .accordions-1 .panel .panel-heading .panel-title:last-child,
.accordions-1 .panel .panel-heading .sec-heading .panel-title:last-child, .sec-heading .footer-social-links ul li:last-child,
.footer-social-links ul .sec-heading li:last-child, .sec-heading .footer-contact .contact-info .show-info-link:last-child,
.footer-contact .contact-info .sec-heading .show-info-link:last-child, .sec-heading .footer-contact .contact-info address ul li .adr-heading:last-child,
.footer-contact .contact-info address ul li .sec-heading .adr-heading:last-child, .sec-heading .footer-contact .contact-info address .show-map:last-child,
.footer-contact .contact-info address .sec-heading .show-map:last-child, .sec-heading .footer-litle address ul li .adr-group .adr-heading:last-child,
.footer-litle address ul li .adr-group .sec-heading .adr-heading:last-child, .sec-heading .ft-cards .ft-item a:last-child,
.ft-cards .ft-item .sec-heading a:last-child, .sec-heading .ft-cards-2 .ft-card-item .ft-content .link-btn:last-child,
.ft-cards-2 .ft-card-item .ft-content .sec-heading .link-btn:last-child, .sec-heading .ft-boxed-hover ul li .hover-content a:last-child,
.ft-boxed-hover ul li .hover-content .sec-heading a:last-child, .sec-heading .circles-counters .circle-item .circle-text:last-child,
.circles-counters .circle-item .sec-heading .circle-text:last-child, .sec-heading .circles-counters-dark-bg .circle-item .circle-text:last-child,
.circles-counters-dark-bg .circle-item .sec-heading .circle-text:last-child, .sec-heading .number-counters .count-wrapper .count-item .count-text:last-child,
.number-counters .count-wrapper .count-item .sec-heading .count-text:last-child, .sec-heading .number-counters-dark-bg .count-wrapper .count-item .count-text:last-child,
.number-counters-dark-bg .count-wrapper .count-item .sec-heading .count-text:last-child, .sec-heading .project-nav nav .nav-btns li a:last-child,
.project-nav nav .nav-btns li .sec-heading a:last-child, .sec-heading .pricing-tables .p-table .desc:last-child,
.pricing-tables .p-table .sec-heading .desc:last-child, .sec-heading .blog-post-nav .prev-btn:last-child,
.blog-post-nav .sec-heading .prev-btn:last-child,
.sec-heading .blog-post-nav .next-btn:last-child,
.blog-post-nav .sec-heading .next-btn:last-child, .sec-heading .sidebar .tags-widget .tag-list li a:last-child,
.sidebar .tags-widget .tag-list li .sec-heading a:last-child, .sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading span:last-child, .sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading a:last-child,
.sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading p:last-child, .sec-heading .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .sec-heading a:last-child, .sec-heading .landing-hero .heading-wrapper .cta-btn:last-child,
.landing-hero .heading-wrapper .sec-heading .cta-btn:last-child, .sec-heading p:last-child,
.sec-heading span:last-child {
  margin-top: 25px;
}

.sec-heading-2 {
  text-align: center;
}

.sec-heading-2 h1,
.sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .nbr-timer, .sec-heading-2 h2,
.sec-heading-2 h3,
.sec-heading-2 .page-title .subheading,
.page-title .sec-heading-2 .subheading, .sec-heading-2 h4,
.sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-heading,
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-heading, .sec-heading-2 .testimonials-3col .t-item blockquote footer cite,
.testimonials-3col .t-item blockquote footer .sec-heading-2 cite, .sec-heading-2 .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .sec-heading-2 cite, .sec-heading-2 .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .sec-heading-2 cite, .sec-heading-2 .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .sec-heading-2 cite, .sec-heading-2 .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .sec-heading-2 cite, .sec-heading-2 .team-3col .t-item .t-info .t-role,
.team-3col .t-item .t-info .sec-heading-2 .t-role, .sec-heading-2 .team-4col .t-item .t-info .t-role,
.team-4col .t-item .t-info .sec-heading-2 .t-role, .sec-heading-2 .freelancer-about .t-item .t-info .t-role,
.freelancer-about .t-item .t-info .sec-heading-2 .t-role, .sec-heading-2 .t-join .t-info .t-role,
.t-join .t-info .sec-heading-2 .t-role, .sec-heading-2 .login-2 .bg-overlay .form-wrapper .form-content .cards-header,
.login-2 .bg-overlay .form-wrapper .form-content .sec-heading-2 .cards-header, .sec-heading-2 .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .sec-heading-2 .sc-lead, .sec-heading-2 h5,
.sec-heading-2 .ft-boxed-hover ul li .hover-content .ft-heading,
.ft-boxed-hover ul li .hover-content .sec-heading-2 .ft-heading, .sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-info,
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-info, .sec-heading-2 .sidebar .comments-widget .widget-item span .widget-comm-title,
.sidebar .comments-widget .widget-item span .sec-heading-2 .widget-comm-title, .sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .title-timer, .sec-heading-2 h6,
.sec-heading-2 .progress-group .progress-title,
.progress-group .sec-heading-2 .progress-title,
.sec-heading-2 .progress-group .progress-value,
.progress-group .sec-heading-2 .progress-value, .sec-heading-2 .accordions-1 .panel .panel-heading .panel-title,
.accordions-1 .panel .panel-heading .sec-heading-2 .panel-title, .sec-heading-2 .footer-social-links ul li,
.footer-social-links ul .sec-heading-2 li, .sec-heading-2 .footer-contact .contact-info .show-info-link,
.footer-contact .contact-info .sec-heading-2 .show-info-link, .sec-heading-2 .footer-contact .contact-info address ul li .adr-heading,
.footer-contact .contact-info address ul li .sec-heading-2 .adr-heading, .sec-heading-2 .footer-contact .contact-info address .show-map,
.footer-contact .contact-info address .sec-heading-2 .show-map, .sec-heading-2 .footer-litle address ul li .adr-group .adr-heading,
.footer-litle address ul li .adr-group .sec-heading-2 .adr-heading, .sec-heading-2 .ft-cards .ft-item a,
.ft-cards .ft-item .sec-heading-2 a, .sec-heading-2 .ft-cards-2 .ft-card-item .ft-content .link-btn,
.ft-cards-2 .ft-card-item .ft-content .sec-heading-2 .link-btn, .sec-heading-2 .ft-boxed-hover ul li .hover-content a,
.ft-boxed-hover ul li .hover-content .sec-heading-2 a, .sec-heading-2 .circles-counters .circle-item .circle-text,
.circles-counters .circle-item .sec-heading-2 .circle-text, .sec-heading-2 .circles-counters-dark-bg .circle-item .circle-text,
.circles-counters-dark-bg .circle-item .sec-heading-2 .circle-text, .sec-heading-2 .number-counters .count-wrapper .count-item .count-text,
.number-counters .count-wrapper .count-item .sec-heading-2 .count-text, .sec-heading-2 .number-counters-dark-bg .count-wrapper .count-item .count-text,
.number-counters-dark-bg .count-wrapper .count-item .sec-heading-2 .count-text, .sec-heading-2 .project-nav nav .nav-btns li a,
.project-nav nav .nav-btns li .sec-heading-2 a, .sec-heading-2 .pricing-tables .p-table .desc,
.pricing-tables .p-table .sec-heading-2 .desc, .sec-heading-2 .blog-post-nav .prev-btn,
.blog-post-nav .sec-heading-2 .prev-btn,
.sec-heading-2 .blog-post-nav .next-btn,
.blog-post-nav .sec-heading-2 .next-btn, .sec-heading-2 .sidebar .tags-widget .tag-list li a,
.sidebar .tags-widget .tag-list li .sec-heading-2 a, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 span, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 a,
.sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 p, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .sec-heading-2 a, .sec-heading-2 .landing-hero .heading-wrapper .cta-btn,
.landing-hero .heading-wrapper .sec-heading-2 .cta-btn, .sec-heading-2 p,
.sec-heading-2 span {
  margin: 0;
}

.sec-heading-2 h1:first-child,
.sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .nbr-timer:first-child, .sec-heading-2 h2:first-child,
.sec-heading-2 h3:first-child,
.sec-heading-2 .page-title .subheading:first-child,
.page-title .sec-heading-2 .subheading:first-child, .sec-heading-2 h4:first-child,
.sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-heading:first-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-heading:first-child, .sec-heading-2 .testimonials-3col .t-item blockquote footer cite:first-child,
.testimonials-3col .t-item blockquote footer .sec-heading-2 cite:first-child, .sec-heading-2 .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:first-child,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .sec-heading-2 cite:first-child, .sec-heading-2 .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:first-child,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .sec-heading-2 cite:first-child, .sec-heading-2 .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:first-child,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .sec-heading-2 cite:first-child, .sec-heading-2 .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:first-child,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .sec-heading-2 cite:first-child, .sec-heading-2 .team-3col .t-item .t-info .t-role:first-child,
.team-3col .t-item .t-info .sec-heading-2 .t-role:first-child, .sec-heading-2 .team-4col .t-item .t-info .t-role:first-child,
.team-4col .t-item .t-info .sec-heading-2 .t-role:first-child, .sec-heading-2 .freelancer-about .t-item .t-info .t-role:first-child,
.freelancer-about .t-item .t-info .sec-heading-2 .t-role:first-child, .sec-heading-2 .t-join .t-info .t-role:first-child,
.t-join .t-info .sec-heading-2 .t-role:first-child, .sec-heading-2 .login-2 .bg-overlay .form-wrapper .form-content .cards-header:first-child,
.login-2 .bg-overlay .form-wrapper .form-content .sec-heading-2 .cards-header:first-child, .sec-heading-2 .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:first-child,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .sec-heading-2 .sc-lead:first-child, .sec-heading-2 h5:first-child,
.sec-heading-2 .ft-boxed-hover ul li .hover-content .ft-heading:first-child,
.ft-boxed-hover ul li .hover-content .sec-heading-2 .ft-heading:first-child, .sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-info:first-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-info:first-child, .sec-heading-2 .sidebar .comments-widget .widget-item span .widget-comm-title:first-child,
.sidebar .comments-widget .widget-item span .sec-heading-2 .widget-comm-title:first-child, .sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .title-timer:first-child, .sec-heading-2 h6:first-child,
.sec-heading-2 .progress-group .progress-title:first-child,
.progress-group .sec-heading-2 .progress-title:first-child,
.sec-heading-2 .progress-group .progress-value:first-child,
.progress-group .sec-heading-2 .progress-value:first-child, .sec-heading-2 .accordions-1 .panel .panel-heading .panel-title:first-child,
.accordions-1 .panel .panel-heading .sec-heading-2 .panel-title:first-child, .sec-heading-2 .footer-social-links ul li:first-child,
.footer-social-links ul .sec-heading-2 li:first-child, .sec-heading-2 .footer-contact .contact-info .show-info-link:first-child,
.footer-contact .contact-info .sec-heading-2 .show-info-link:first-child, .sec-heading-2 .footer-contact .contact-info address ul li .adr-heading:first-child,
.footer-contact .contact-info address ul li .sec-heading-2 .adr-heading:first-child, .sec-heading-2 .footer-contact .contact-info address .show-map:first-child,
.footer-contact .contact-info address .sec-heading-2 .show-map:first-child, .sec-heading-2 .footer-litle address ul li .adr-group .adr-heading:first-child,
.footer-litle address ul li .adr-group .sec-heading-2 .adr-heading:first-child, .sec-heading-2 .ft-cards .ft-item a:first-child,
.ft-cards .ft-item .sec-heading-2 a:first-child, .sec-heading-2 .ft-cards-2 .ft-card-item .ft-content .link-btn:first-child,
.ft-cards-2 .ft-card-item .ft-content .sec-heading-2 .link-btn:first-child, .sec-heading-2 .ft-boxed-hover ul li .hover-content a:first-child,
.ft-boxed-hover ul li .hover-content .sec-heading-2 a:first-child, .sec-heading-2 .circles-counters .circle-item .circle-text:first-child,
.circles-counters .circle-item .sec-heading-2 .circle-text:first-child, .sec-heading-2 .circles-counters-dark-bg .circle-item .circle-text:first-child,
.circles-counters-dark-bg .circle-item .sec-heading-2 .circle-text:first-child, .sec-heading-2 .number-counters .count-wrapper .count-item .count-text:first-child,
.number-counters .count-wrapper .count-item .sec-heading-2 .count-text:first-child, .sec-heading-2 .number-counters-dark-bg .count-wrapper .count-item .count-text:first-child,
.number-counters-dark-bg .count-wrapper .count-item .sec-heading-2 .count-text:first-child, .sec-heading-2 .project-nav nav .nav-btns li a:first-child,
.project-nav nav .nav-btns li .sec-heading-2 a:first-child, .sec-heading-2 .pricing-tables .p-table .desc:first-child,
.pricing-tables .p-table .sec-heading-2 .desc:first-child, .sec-heading-2 .blog-post-nav .prev-btn:first-child,
.blog-post-nav .sec-heading-2 .prev-btn:first-child,
.sec-heading-2 .blog-post-nav .next-btn:first-child,
.blog-post-nav .sec-heading-2 .next-btn:first-child, .sec-heading-2 .sidebar .tags-widget .tag-list li a:first-child,
.sidebar .tags-widget .tag-list li .sec-heading-2 a:first-child, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 span:first-child, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 a:first-child,
.sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 p:first-child, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .sec-heading-2 a:first-child, .sec-heading-2 .landing-hero .heading-wrapper .cta-btn:first-child,
.landing-hero .heading-wrapper .sec-heading-2 .cta-btn:first-child, .sec-heading-2 p:first-child,
.sec-heading-2 span:first-child {
  margin-top: 160px;
  padding-bottom: 50px;
}

.sec-heading-2 h1:nth-child(2),
.sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:nth-child(2),
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .nbr-timer:nth-child(2), .sec-heading-2 h2:nth-child(2),
.sec-heading-2 h3:nth-child(2),
.sec-heading-2 .page-title .subheading:nth-child(2),
.page-title .sec-heading-2 .subheading:nth-child(2), .sec-heading-2 h4:nth-child(2),
.sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-heading:nth-child(2),
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-heading:nth-child(2), .sec-heading-2 .testimonials-3col .t-item blockquote footer cite:nth-child(2),
.testimonials-3col .t-item blockquote footer .sec-heading-2 cite:nth-child(2), .sec-heading-2 .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:nth-child(2),
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .sec-heading-2 cite:nth-child(2), .sec-heading-2 .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:nth-child(2),
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .sec-heading-2 cite:nth-child(2), .sec-heading-2 .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:nth-child(2),
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .sec-heading-2 cite:nth-child(2), .sec-heading-2 .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:nth-child(2),
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .sec-heading-2 cite:nth-child(2), .sec-heading-2 .team-3col .t-item .t-info .t-role:nth-child(2),
.team-3col .t-item .t-info .sec-heading-2 .t-role:nth-child(2), .sec-heading-2 .team-4col .t-item .t-info .t-role:nth-child(2),
.team-4col .t-item .t-info .sec-heading-2 .t-role:nth-child(2), .sec-heading-2 .freelancer-about .t-item .t-info .t-role:nth-child(2),
.freelancer-about .t-item .t-info .sec-heading-2 .t-role:nth-child(2), .sec-heading-2 .t-join .t-info .t-role:nth-child(2),
.t-join .t-info .sec-heading-2 .t-role:nth-child(2), .sec-heading-2 .login-2 .bg-overlay .form-wrapper .form-content .cards-header:nth-child(2),
.login-2 .bg-overlay .form-wrapper .form-content .sec-heading-2 .cards-header:nth-child(2), .sec-heading-2 .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:nth-child(2),
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .sec-heading-2 .sc-lead:nth-child(2), .sec-heading-2 h5:nth-child(2),
.sec-heading-2 .ft-boxed-hover ul li .hover-content .ft-heading:nth-child(2),
.ft-boxed-hover ul li .hover-content .sec-heading-2 .ft-heading:nth-child(2), .sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-info:nth-child(2),
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-info:nth-child(2), .sec-heading-2 .sidebar .comments-widget .widget-item span .widget-comm-title:nth-child(2),
.sidebar .comments-widget .widget-item span .sec-heading-2 .widget-comm-title:nth-child(2), .sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:nth-child(2),
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .title-timer:nth-child(2), .sec-heading-2 h6:nth-child(2),
.sec-heading-2 .progress-group .progress-title:nth-child(2),
.progress-group .sec-heading-2 .progress-title:nth-child(2),
.sec-heading-2 .progress-group .progress-value:nth-child(2),
.progress-group .sec-heading-2 .progress-value:nth-child(2), .sec-heading-2 .accordions-1 .panel .panel-heading .panel-title:nth-child(2),
.accordions-1 .panel .panel-heading .sec-heading-2 .panel-title:nth-child(2), .sec-heading-2 .footer-social-links ul li:nth-child(2),
.footer-social-links ul .sec-heading-2 li:nth-child(2), .sec-heading-2 .footer-contact .contact-info .show-info-link:nth-child(2),
.footer-contact .contact-info .sec-heading-2 .show-info-link:nth-child(2), .sec-heading-2 .footer-contact .contact-info address ul li .adr-heading:nth-child(2),
.footer-contact .contact-info address ul li .sec-heading-2 .adr-heading:nth-child(2), .sec-heading-2 .footer-contact .contact-info address .show-map:nth-child(2),
.footer-contact .contact-info address .sec-heading-2 .show-map:nth-child(2), .sec-heading-2 .footer-litle address ul li .adr-group .adr-heading:nth-child(2),
.footer-litle address ul li .adr-group .sec-heading-2 .adr-heading:nth-child(2), .sec-heading-2 .ft-cards .ft-item a:nth-child(2),
.ft-cards .ft-item .sec-heading-2 a:nth-child(2), .sec-heading-2 .ft-cards-2 .ft-card-item .ft-content .link-btn:nth-child(2),
.ft-cards-2 .ft-card-item .ft-content .sec-heading-2 .link-btn:nth-child(2), .sec-heading-2 .ft-boxed-hover ul li .hover-content a:nth-child(2),
.ft-boxed-hover ul li .hover-content .sec-heading-2 a:nth-child(2), .sec-heading-2 .circles-counters .circle-item .circle-text:nth-child(2),
.circles-counters .circle-item .sec-heading-2 .circle-text:nth-child(2), .sec-heading-2 .circles-counters-dark-bg .circle-item .circle-text:nth-child(2),
.circles-counters-dark-bg .circle-item .sec-heading-2 .circle-text:nth-child(2), .sec-heading-2 .number-counters .count-wrapper .count-item .count-text:nth-child(2),
.number-counters .count-wrapper .count-item .sec-heading-2 .count-text:nth-child(2), .sec-heading-2 .number-counters-dark-bg .count-wrapper .count-item .count-text:nth-child(2),
.number-counters-dark-bg .count-wrapper .count-item .sec-heading-2 .count-text:nth-child(2), .sec-heading-2 .project-nav nav .nav-btns li a:nth-child(2),
.project-nav nav .nav-btns li .sec-heading-2 a:nth-child(2), .sec-heading-2 .pricing-tables .p-table .desc:nth-child(2),
.pricing-tables .p-table .sec-heading-2 .desc:nth-child(2), .sec-heading-2 .blog-post-nav .prev-btn:nth-child(2),
.blog-post-nav .sec-heading-2 .prev-btn:nth-child(2),
.sec-heading-2 .blog-post-nav .next-btn:nth-child(2),
.blog-post-nav .sec-heading-2 .next-btn:nth-child(2), .sec-heading-2 .sidebar .tags-widget .tag-list li a:nth-child(2),
.sidebar .tags-widget .tag-list li .sec-heading-2 a:nth-child(2), .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 span:nth-child(2), .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 a:nth-child(2),
.sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 p:nth-child(2), .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:nth-child(2),
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .sec-heading-2 a:nth-child(2), .sec-heading-2 .landing-hero .heading-wrapper .cta-btn:nth-child(2),
.landing-hero .heading-wrapper .sec-heading-2 .cta-btn:nth-child(2), .sec-heading-2 p:nth-child(2),
.sec-heading-2 span:nth-child(2) {
  margin-top: 30px;
}

.sec-heading-2 h1:last-child,
.sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:last-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .nbr-timer:last-child, .sec-heading-2 h2:last-child,
.sec-heading-2 h3:last-child,
.sec-heading-2 .page-title .subheading:last-child,
.page-title .sec-heading-2 .subheading:last-child, .sec-heading-2 h4:last-child,
.sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-heading:last-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-heading:last-child, .sec-heading-2 .testimonials-3col .t-item blockquote footer cite:last-child,
.testimonials-3col .t-item blockquote footer .sec-heading-2 cite:last-child, .sec-heading-2 .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:last-child,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .sec-heading-2 cite:last-child, .sec-heading-2 .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:last-child,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .sec-heading-2 cite:last-child, .sec-heading-2 .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:last-child,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .sec-heading-2 cite:last-child, .sec-heading-2 .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:last-child,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .sec-heading-2 cite:last-child, .sec-heading-2 .team-3col .t-item .t-info .t-role:last-child,
.team-3col .t-item .t-info .sec-heading-2 .t-role:last-child, .sec-heading-2 .team-4col .t-item .t-info .t-role:last-child,
.team-4col .t-item .t-info .sec-heading-2 .t-role:last-child, .sec-heading-2 .freelancer-about .t-item .t-info .t-role:last-child,
.freelancer-about .t-item .t-info .sec-heading-2 .t-role:last-child, .sec-heading-2 .t-join .t-info .t-role:last-child,
.t-join .t-info .sec-heading-2 .t-role:last-child, .sec-heading-2 .login-2 .bg-overlay .form-wrapper .form-content .cards-header:last-child,
.login-2 .bg-overlay .form-wrapper .form-content .sec-heading-2 .cards-header:last-child, .sec-heading-2 .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:last-child,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .sec-heading-2 .sc-lead:last-child, .sec-heading-2 h5:last-child,
.sec-heading-2 .ft-boxed-hover ul li .hover-content .ft-heading:last-child,
.ft-boxed-hover ul li .hover-content .sec-heading-2 .ft-heading:last-child, .sec-heading-2 .ft-tabs .tabs-list li a .tab-group .tab-info:last-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading-2 .tab-info:last-child, .sec-heading-2 .sidebar .comments-widget .widget-item span .widget-comm-title:last-child,
.sidebar .comments-widget .widget-item span .sec-heading-2 .widget-comm-title:last-child, .sec-heading-2 .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:last-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-2 .title-timer:last-child, .sec-heading-2 h6:last-child,
.sec-heading-2 .progress-group .progress-title:last-child,
.progress-group .sec-heading-2 .progress-title:last-child,
.sec-heading-2 .progress-group .progress-value:last-child,
.progress-group .sec-heading-2 .progress-value:last-child, .sec-heading-2 .accordions-1 .panel .panel-heading .panel-title:last-child,
.accordions-1 .panel .panel-heading .sec-heading-2 .panel-title:last-child, .sec-heading-2 .footer-social-links ul li:last-child,
.footer-social-links ul .sec-heading-2 li:last-child, .sec-heading-2 .footer-contact .contact-info .show-info-link:last-child,
.footer-contact .contact-info .sec-heading-2 .show-info-link:last-child, .sec-heading-2 .footer-contact .contact-info address ul li .adr-heading:last-child,
.footer-contact .contact-info address ul li .sec-heading-2 .adr-heading:last-child, .sec-heading-2 .footer-contact .contact-info address .show-map:last-child,
.footer-contact .contact-info address .sec-heading-2 .show-map:last-child, .sec-heading-2 .footer-litle address ul li .adr-group .adr-heading:last-child,
.footer-litle address ul li .adr-group .sec-heading-2 .adr-heading:last-child, .sec-heading-2 .ft-cards .ft-item a:last-child,
.ft-cards .ft-item .sec-heading-2 a:last-child, .sec-heading-2 .ft-cards-2 .ft-card-item .ft-content .link-btn:last-child,
.ft-cards-2 .ft-card-item .ft-content .sec-heading-2 .link-btn:last-child, .sec-heading-2 .ft-boxed-hover ul li .hover-content a:last-child,
.ft-boxed-hover ul li .hover-content .sec-heading-2 a:last-child, .sec-heading-2 .circles-counters .circle-item .circle-text:last-child,
.circles-counters .circle-item .sec-heading-2 .circle-text:last-child, .sec-heading-2 .circles-counters-dark-bg .circle-item .circle-text:last-child,
.circles-counters-dark-bg .circle-item .sec-heading-2 .circle-text:last-child, .sec-heading-2 .number-counters .count-wrapper .count-item .count-text:last-child,
.number-counters .count-wrapper .count-item .sec-heading-2 .count-text:last-child, .sec-heading-2 .number-counters-dark-bg .count-wrapper .count-item .count-text:last-child,
.number-counters-dark-bg .count-wrapper .count-item .sec-heading-2 .count-text:last-child, .sec-heading-2 .project-nav nav .nav-btns li a:last-child,
.project-nav nav .nav-btns li .sec-heading-2 a:last-child, .sec-heading-2 .pricing-tables .p-table .desc:last-child,
.pricing-tables .p-table .sec-heading-2 .desc:last-child, .sec-heading-2 .blog-post-nav .prev-btn:last-child,
.blog-post-nav .sec-heading-2 .prev-btn:last-child,
.sec-heading-2 .blog-post-nav .next-btn:last-child,
.blog-post-nav .sec-heading-2 .next-btn:last-child, .sec-heading-2 .sidebar .tags-widget .tag-list li a:last-child,
.sidebar .tags-widget .tag-list li .sec-heading-2 a:last-child, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 span:last-child, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 a:last-child,
.sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-2 p:last-child, .sec-heading-2 .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:last-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .sec-heading-2 a:last-child, .sec-heading-2 .landing-hero .heading-wrapper .cta-btn:last-child,
.landing-hero .heading-wrapper .sec-heading-2 .cta-btn:last-child, .sec-heading-2 p:last-child,
.sec-heading-2 span:last-child {
  margin-bottom: 100px;
}

.sec-heading-2 .subheading {
  font-size: 1.3em;
  color: #999;
}

.sec-heading-top-m h1:first-child,
.sec-heading-top-m .comingsoon .content-wrapper .content-inner .cs-timer .item .nbr-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-top-m .nbr-timer:first-child, .sec-heading-top-m h2:first-child,
.sec-heading-top-m h3:first-child,
.sec-heading-top-m .page-title .subheading:first-child,
.page-title .sec-heading-top-m .subheading:first-child, .sec-heading-top-m h4:first-child,
.sec-heading-top-m .ft-tabs .tabs-list li a .tab-group .tab-heading:first-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading-top-m .tab-heading:first-child, .sec-heading-top-m .testimonials-3col .t-item blockquote footer cite:first-child,
.testimonials-3col .t-item blockquote footer .sec-heading-top-m cite:first-child, .sec-heading-top-m .testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer cite:first-child,
.testimonials-3col .t-item .wrapper-404 .content-wrapper .info-wrapper .info-404 footer .sec-heading-top-m cite:first-child, .sec-heading-top-m .wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer cite:first-child,
.wrapper-404 .content-wrapper .info-wrapper .testimonials-3col .t-item .info-404 footer .sec-heading-top-m cite:first-child, .sec-heading-top-m .testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer cite:first-child,
.testimonials-3col .t-item .bg-maintenance .content-wrapper .content-inner p footer .sec-heading-top-m cite:first-child, .sec-heading-top-m .bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer cite:first-child,
.bg-maintenance .content-wrapper .content-inner .testimonials-3col .t-item p footer .sec-heading-top-m cite:first-child, .sec-heading-top-m .team-3col .t-item .t-info .t-role:first-child,
.team-3col .t-item .t-info .sec-heading-top-m .t-role:first-child, .sec-heading-top-m .team-4col .t-item .t-info .t-role:first-child,
.team-4col .t-item .t-info .sec-heading-top-m .t-role:first-child, .sec-heading-top-m .freelancer-about .t-item .t-info .t-role:first-child,
.freelancer-about .t-item .t-info .sec-heading-top-m .t-role:first-child, .sec-heading-top-m .t-join .t-info .t-role:first-child,
.t-join .t-info .sec-heading-top-m .t-role:first-child, .sec-heading-top-m .login-2 .bg-overlay .form-wrapper .form-content .cards-header:first-child,
.login-2 .bg-overlay .form-wrapper .form-content .sec-heading-top-m .cards-header:first-child, .sec-heading-top-m .login-2 .bg-overlay .form-wrapper .social-signup .social-card .sc-lead:first-child,
.login-2 .bg-overlay .form-wrapper .social-signup .social-card .sec-heading-top-m .sc-lead:first-child, .sec-heading-top-m h5:first-child,
.sec-heading-top-m .ft-boxed-hover ul li .hover-content .ft-heading:first-child,
.ft-boxed-hover ul li .hover-content .sec-heading-top-m .ft-heading:first-child, .sec-heading-top-m .ft-tabs .tabs-list li a .tab-group .tab-info:first-child,
.ft-tabs .tabs-list li a .tab-group .sec-heading-top-m .tab-info:first-child, .sec-heading-top-m .sidebar .comments-widget .widget-item span .widget-comm-title:first-child,
.sidebar .comments-widget .widget-item span .sec-heading-top-m .widget-comm-title:first-child, .sec-heading-top-m .comingsoon .content-wrapper .content-inner .cs-timer .item .title-timer:first-child,
.comingsoon .content-wrapper .content-inner .cs-timer .item .sec-heading-top-m .title-timer:first-child, .sec-heading-top-m h6:first-child,
.sec-heading-top-m .progress-group .progress-title:first-child,
.progress-group .sec-heading-top-m .progress-title:first-child,
.sec-heading-top-m .progress-group .progress-value:first-child,
.progress-group .sec-heading-top-m .progress-value:first-child, .sec-heading-top-m .accordions-1 .panel .panel-heading .panel-title:first-child,
.accordions-1 .panel .panel-heading .sec-heading-top-m .panel-title:first-child, .sec-heading-top-m .footer-social-links ul li:first-child,
.footer-social-links ul .sec-heading-top-m li:first-child, .sec-heading-top-m .footer-contact .contact-info .show-info-link:first-child,
.footer-contact .contact-info .sec-heading-top-m .show-info-link:first-child, .sec-heading-top-m .footer-contact .contact-info address ul li .adr-heading:first-child,
.footer-contact .contact-info address ul li .sec-heading-top-m .adr-heading:first-child, .sec-heading-top-m .footer-contact .contact-info address .show-map:first-child,
.footer-contact .contact-info address .sec-heading-top-m .show-map:first-child, .sec-heading-top-m .footer-litle address ul li .adr-group .adr-heading:first-child,
.footer-litle address ul li .adr-group .sec-heading-top-m .adr-heading:first-child, .sec-heading-top-m .ft-cards .ft-item a:first-child,
.ft-cards .ft-item .sec-heading-top-m a:first-child, .sec-heading-top-m .ft-cards-2 .ft-card-item .ft-content .link-btn:first-child,
.ft-cards-2 .ft-card-item .ft-content .sec-heading-top-m .link-btn:first-child, .sec-heading-top-m .ft-boxed-hover ul li .hover-content a:first-child,
.ft-boxed-hover ul li .hover-content .sec-heading-top-m a:first-child, .sec-heading-top-m .circles-counters .circle-item .circle-text:first-child,
.circles-counters .circle-item .sec-heading-top-m .circle-text:first-child, .sec-heading-top-m .circles-counters-dark-bg .circle-item .circle-text:first-child,
.circles-counters-dark-bg .circle-item .sec-heading-top-m .circle-text:first-child, .sec-heading-top-m .number-counters .count-wrapper .count-item .count-text:first-child,
.number-counters .count-wrapper .count-item .sec-heading-top-m .count-text:first-child, .sec-heading-top-m .number-counters-dark-bg .count-wrapper .count-item .count-text:first-child,
.number-counters-dark-bg .count-wrapper .count-item .sec-heading-top-m .count-text:first-child, .sec-heading-top-m .project-nav nav .nav-btns li a:first-child,
.project-nav nav .nav-btns li .sec-heading-top-m a:first-child, .sec-heading-top-m .pricing-tables .p-table .desc:first-child,
.pricing-tables .p-table .sec-heading-top-m .desc:first-child, .sec-heading-top-m .blog-post-nav .prev-btn:first-child,
.blog-post-nav .sec-heading-top-m .prev-btn:first-child,
.sec-heading-top-m .blog-post-nav .next-btn:first-child,
.blog-post-nav .sec-heading-top-m .next-btn:first-child, .sec-heading-top-m .sidebar .tags-widget .tag-list li a:first-child,
.sidebar .tags-widget .tag-list li .sec-heading-top-m a:first-child, .sec-heading-top-m .contact-1 .contact-wrapper .contact-info-wrapper address .address-group span:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-top-m span:first-child, .sec-heading-top-m .contact-1 .contact-wrapper .contact-info-wrapper address .address-group a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-top-m a:first-child,
.sec-heading-top-m .contact-1 .contact-wrapper .contact-info-wrapper address .address-group p:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .address-group .sec-heading-top-m p:first-child, .sec-heading-top-m .contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link a:first-child,
.contact-1 .contact-wrapper .contact-info-wrapper address .show-map-link .sec-heading-top-m a:first-child, .sec-heading-top-m .landing-hero .heading-wrapper .cta-btn:first-child,
.landing-hero .heading-wrapper .sec-heading-top-m .cta-btn:first-child, .sec-heading-top-m p:first-child,
.sec-heading-top-m span:first-child {
  margin-top: 100px;
}

</style>

<div class="gray-bg">
          <section id="services" class="container ft-cards">
            <div class="row section">

              <header class="sec-heading">
                <h2>What You Can Do</h2>
                <span class="subheading"></span>
              </header>
              
              <!-- Item 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation: fadeInUp 1s; -webkit-animation: fadeInUp 1s;">
                  <span class="linea-basic-pencil-ruler"></span>
                  <h4>Add New Class Test</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Explore <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation: fadeInUp 1s 0.3s; -webkit-animation: fadeInUp 1s 0.3s;">
                  <span class="linea-basic-cards-diamonds"></span>
                  <h4>Change An Upcoming One</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Explore <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" style="visibility: visible; animation: fadeInUp 1s 0.6s; -webkit-animation: fadeInUp 1s 0.6s;">
                  <span class="linea-basic-star"></span>
                  <h4>Class Test Marks</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
                  <a href="#">Explore <span class="linea-arrows-slim-right"></span></a>
                </div>
              </div>

            </div><!-- / .row -->
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
        </div>


@endsection
