<!DOCTYPE html>
<!-- saved from url=(0070)http://demos.creative-tim.com/material-kit-pro/examples/ecommerce.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./files/images/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>view</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

  
  
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
    <link href="files/css/bootstrap.min.css" rel="stylesheet">
    <link href="files/css/material-kit.min.css?v=1.1.0" rel="stylesheet">
    <link href="files/css/vertical-nav.css" rel="stylesheet">
    <link href="files/css/material-dashboard.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="icon" href="backend/images/logo22.png" type="image/x-icon">
  <!-- CSS Files -->  
  

  <!-- CSS Files -->

<!--  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
 <script src="files/js/angular-cookies.min.js"></script>
<script src="files/js/angular-scroll.js"></script> -->
 

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript"></script>
<script src="files/js/ui-bootstrap-tpls-2.5.0.min.js" type="text/javascript"></script>

<script src="files/js/angular-cookies.min.js" type="text/javascript"></script>
<script src="files/js/angular-scroll.js" type="text/javascript"></script>


   <!--  <script src="files/js/jquery-3.1.0.min.js"></script>  -->
  <script src="files/js/jquery.min.js" type="text/javascript"></script>
  <script src="files/js/bootstrap.min.js" type="text/javascript"></script>
<!-- <script src="files/js/ui-bootstrap-tpls-2.3.2.min.js" type="text/javascript"></script> -->
  <script src="files/js/view.js" type="text/javascript"></script> 
  <script src="files/js/material.min.js" type="text/javascript"></script>
<script src="files/js/material-dashboard.js"></script>
  <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
  <script src="files/js/moment.min.js" type="text/javascript"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
  <script src="files/js/nouislider.min.js" type="text/javascript"></script>

  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
  <script src="files/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
  <script src="files/js/bootstrap-selectpicker.js" type="text/javascript"></script>

  <!--  Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
  <script src="files/js/bootstrap-tagsinput.js" type="text/javascript"></script>

  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
  <script src="files/js/jasny-bootstrap.min.js" type="text/javascript"></script>

  <!--    Plugin For Google Maps   -->
  

  <!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
  <script src="files/js/atv-img-animation.js" type="text/javascript"></script>

  <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
  <script src="files/js/material-kit.min.js" type="text/javascript"></script>



    
</head>

<body class="ecommerce-page" ng-app="myApp" ng-controller="view">
  <style>
    .navbar{
      border-radius: 0px;
    }
    .navbar-nav>li>a {
            text-transform: capitalize !important;
    /*color: #333 !important;*/
  }
  .navbar.navbar-transparent{
    color: #fff;
    margin: auto;
    position: absolute;
    z-index: 5;
    right: 1%;
    left: 1%;
}
  </style>

  <nav class="navbar navbar-default  navbar-color-on-scroll navbar-transparent" color-on-scroll="100" id="sectionsNav">
    <!-- navbar-fixed-top -->
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  href="index.php" class="navbar-brand"> 
                        <img src="./files/images/logo.png" width="50">
                    </a>
          </div>

          <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">                    
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                   
                                <p> Help<span class="caret"></span></p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/bootstrap-themes">
                                        All Categories
                                    </a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/admin-dashboard">
                                        Admin &amp; Dashboards
                                    </a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/ui-kit">
                                        UI Kits
                                    </a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/free">
                                        Free Themes
                                    </a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/premium">
                                        Premium Themes
                                    </a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/angular-dashboard">
                                        Angular Dashboards
                                    </a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/landing-page">
                                        Landing Pages
                                    </a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/e-commerce">
                                        E-commerce
                                    </a>
                                </li>
                               
                            </ul>
                           

                        </li>
                    </ul>            
                </div>
      </div>
    </nav>

  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(&quot;./data/files/upload/tour/icon/{{tours.icon}}&quot;); background-repeat-x: no-repeat;background-repeat-y: no-repeat; transform: translate3d(0px, 0px, 0px);    background-size: 100% 100%;" id="page-headerpopular">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center " >
        <!-- col-md-offset-2 -->
          <div class="brand">
            <h2  style="margin-top: -40px;margin-bottom: 0;color: #f44336;font-size: 20px;" ><span ng-bind="tours.sale_price_adult | currency:'':0" style="font-weight: 500;"></span><span style="color: #fff"><span style="color: #f44336">฿</span> / Package</span></h2>
            <h1 class="title"><div ng-bind="tours.name" align="center" style="     margin-top: -25px;font-size: 20px; font-weight: 500;"></div></h1>
            <!-- <h4>IMRON PHUKET SPEEDBOAD TOUR  <b>LTD.</b> ,PART.</h4> -->
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="container-fluid" style="background-image: url(files/images/bg-wrap.jpg);">                    
                    <div class="row" >
                        
                           <div style="width:100%;text-align: center; "><!-- <img src="backend/images/icon/{{tours.icon}} " width="250" height="250" align="Center" style="border-radius: 50% "> -->
                           
                           </div>

                    
                       
                    </div>
                    <div class="row">
                       <!--  <div class="col-md-6">
                         


                            <div style="height: 305px">
                          <div  uib-carousel active="active" interval="myInterval" no-wrap="noWrapSlides">
                            <div uib-slide ng-repeat="slide in slides " index="slide.id">
                              <img ng-src="backend/images/gallery/{{slide.gallery}}" style="margin:auto;">
                              <div class="carousel-caption">
                                <h4>{{slide.id}}</h4>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        </div> -->
                        
                        <div class="col-md-6">
                            <div class="card card-plain">
                                <div class="card-content">
                                    <ul class="timeline timeline-simple">
                                    <!--  timeline-simple -->
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge danger">
                                              <i class="material-icons">receipt</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-danger">Detail</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p ng-bind="tours.detail">
                                                      
                                                    </p>
                                                      
                                                      </div>
                                                <div style="color: #f44336; margin-top: 50px;">
                                                   <h4 al ng-bind="tours.class" style="display: inline-block;"></h4>
                                                   <h4 style="display: inline-block;float: right;" >8 person</h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="timeline-inverted">
                                            <div class="timeline-badge success">
                                                <i class="material-icons">alarm</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-success">Program </span>
                                                </div>
                                                <div class="timeline-body" >
                                                <div id="repeatprogram">
                                                  
                                                </div>
                                                   <!--  <p >07:40 am :Transfer from your hotel by air-conditioned vehicle to departure port.<br/>

                                            09:00 am :Transfer by speedboat to “Khai Nok Island”
                                            <br/>

                                            09:20 am :Arrive at Paradise Island called “Khai Nok Island” where you will enjoy

                                            swimming ,beach relaxing, snorkeling around this teeming island before being

                                            taken for an exploration of emerald waters

                                            11:30 am :Start to “Khai Nui Island” by speedboat for snorkeling.<br/>

                                            00:00 pm :Enjoy lunch buffet at Nonthasak restaurant.<br/>

                                            01:00 pm :Relax on beach and swimming.<br/>

                                            02:00 pm :Departure back to Sirey port.</p> -->
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="timeline-inverted">
                                        <!-- class="timeline-badge" -->
                                            <div class="timeline-badge info">
                                                <i class="material-icons">description</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-info">condition</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <div id="repeatconditions"></div>
                                                   
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge warning">
                                                <i class="material-icons">perm_phone_msg</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-warning">Contacts</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <div class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 87-2794723</a>; <a href="tel:#" style="display: inline-block;">087-2794723</a></div>
              <div class="">E-mail: <a href="mailto:#" style="display: inline-block;"> imronspeedboattour@gmail.com</a></div>
            
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div style="     margin-top: 70px;
    background: rgba(255, 255, 255, 0.36);
    padding: 50px 40px;
    border-radius: 8px;
    margin-bottom: 20px;" ng-if="datagallery != 0">
                            <div ng-repeat="x in datagallery" align="center" style=" width: 100%; border-radius: 8px;margin-bottom: 10px ">
                               <img src="backend/images/gallery/{{x.gallery}}" style="border-radius: 6px ;margin-bottom: 50px" width="500">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
               .nav .navbar-nav .navbar-right{
                background: #fff;
               }
               .timeline.timeline-simple {
    margin-bottom: 0;
    padding-bottom:  0;
}
                 /*   .label.label-danger {
                            padding: 6px 60px;
               }
    font-size: 20px;
                      }
                      .label.label-success {
                            padding: 6px 60px;
    font-size: 20px;
                      }
                      .label.label-info {
                              padding: 6px 60px;
    font-size: 20px;
                      }
                      .label.label-warning {
                              padding: 6px 60px;
    font-size: 20px;
                      }*/
                      .timeline-body p{
                        font-size: 16px;
                      }
                      .page-header.header-small {
    height: 27vh;
    min-height: 35vh;
}
.navbar.navbar-transparent {
    background-color: transparent;
    box-shadow: none;
    color: #fff;
    border-bottom: 0;
}
.info {
    max-width: 360px;
    margin: 0 auto;
     padding: 0;
}
.time{}


                                            
                          
                </style>
                <div class="row">
                  <div class="col-md-6">
                     <div style="height: 305px">
    <div uib-carousel active="active" interval="myInterval" no-wrap="noWrapSlides">
      <div uib-slide ng-repeat="slide in slides " active="slide.active">
        <!-- track by slide.id" index="slide.id" -->
        <img ng-src="{{slide.image}}" style="margin:auto;">
        <div class="carousel-caption">
          <h4>Slide {{slide.id}}</h4>
          <p>{{slide.text}}</p>
        </div>
      </div>
    </div>
  </div>
    <style>
      #slides_control > div{
  height: 200px;
}

#slides_control {
  position:absolute;
  width: 400px;
  left:50%;
  top:20px;
 margin-left:-200px;
}
    </style>
                  </div>
                </div>
          <div class="subscribe-line subscribe-line-image" data-parallax="true" style="background-image: url(&#39;files/images/bg_body.jpg&#39;);" id="footers">
    <div class="container">
      <div class="row">
        <div class="col-md-4 " >
            <!-- col-md-offset-1 -->
          <h5 style="color: #fff">Contacts</h5>
          <div class="contact" id="contact">             
            <ul >
              <li class="">Address: <a>100/16 Moo 5 , Soi 1 Chalernprakiet Rd., T.Rassada Muang Phuket Thailand 83000</a></li>
              <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 096-6409949</a>; <a href="tel:#" style="display: inline-block;">087-2794723</a></li>
              <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> sele@danatoursasia.com</a></li>
            </ul>
          </div>

        </div>
        <div class="col-md-8 ">
          <!-- <div class="text-center"> -->
            <!-- <h3 class="title">Subscribe to our Newsletter</h3> -->
            <!-- <p class="description">
              Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
            </p> -->
          <!-- </div> -->

          <!-- <div class="card card-raised card-form-horizontal"> -->
            <!-- <div class="card-content"> -->
              <!-- <form id="contactsform" name="contactsform" method="post" action="http://www.danatoursasia.com/sendmail/sendmail.php" onsubmit="return validate_form(this);"> -->
                <!-- <div class="row"> -->
                  <div class="col-sm-12">
                    
                        <div class="section">
                    <div class="title-area">
                        <h5 class="subtitle text-gray">Glad to Talk With You</h5>
                        <h2 style="color: #fff">Contact Us</h2>
                        <div style="width: 100%;text-align: center;"><div class="separator separator-danger">✻</div></div>
                        <!-- <p class="description">In this area you can write some interesting description about the projects that your team created. Don't forget to add some awesome images under this description, like the beautiful ones that we added.</p> -->
                    </div>

                <div class="social-buttons">
                    <button class="btn btn-social btn-simple"><i class="fa fa-facebook-square"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-instagram"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-google"></i></button>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="contact-form">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Your Full Name</label>
                                            <input type="text" name="name" value="" placeholder="Michael Jordan" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="" placeholder="Say hi to you" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="content" class="form-control form-control-plain" placeholder="Here you can write your nice text" rows="8"></textarea>
                                        </div>
                                        <div>
                                            <div class="col-md-2 col-md-offset-5">
                                                <button type="button" class="btn btn-danger btn-fill">
                                                    Contact Us
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <style>
                .section-gray {
  background-color: #EEEEEE;
  padding: 70px 0;
}

.section-white {
  background-color: #FFFFFF;
}

.section {
  position: relative;
}
.section-contact-form .title-area {
    margin-bottom: 15px;
}

.section .title-area {
  max-width: 760px;
  /*margin: 0 auto 70px;*/
  display: block;
  padding: 0 15px;
  text-align: center;
}
.section .title-area .description {
  font-size: 16px;
  color: #777777;
}
.section [class*="col-"] .title-area {
  padding: 0;
}
.section .text-area {
  padding: 4.375em 0;
  position: relative;
  z-index: 3;
  display: block;
}
.section .text-area .description,
.section .text-area .description p {
  font-size: 16px;
  color: #777777;
}
.section .parallax,
.section .static-image {
  width: 100%;
  height: 100vh;
  overflow: hidden;
  display: block;
  position: relative;
}
.section .parallax > img,
.section .parallax .filter > img,
.section .static-image > img,
.section .static-image .filter > img {
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  position: relative;
  z-index: 1;
}
.section .parallax-small {
  height: 65vh;
}
.section .responsive-background {
  position: relative;
  background-color: #c5a47e;
  padding: 0;
  z-index: 1;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  height: 80vh;
}
.section .nav > li {
  display: inline-block;
}

.section-contact-form {
  padding-top: 110px;
}
.section-contact-form .title-area {
  margin-bottom: 15px;
}
.social-buttons {
  margin-top: -20px;
  /*border-top: 1px solid #DDDDDD;*/
  text-align: center;
}
.section-contact-form .social-buttons {
  padding: 20px 0 40px;
  margin-top: 0;
  border: none;
}

.gradient-image {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 2;
}
.gradient-image:after {
  position: absolute;
  z-index: 3;
  top: 0;
  left: 0;
  width: 100%;
  height: 300px;
  content: '';
  background: -moz-linear-gradient(top, white 0%, rgba(255, 255, 255, 0.95) 22%, rgba(255, 255, 255, 0.9) 30%, rgba(255, 255, 255, 0.7) 65%, rgba(255, 255, 255, 0) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(22%, rgba(255, 255, 255, 0.95)), color-stop(30%, rgba(255, 255, 255, 0.9)), color-stop(65%, rgba(255, 255, 255, 0.7)), color-stop(100%, rgba(255, 255, 255, 0)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, white 0%, rgba(255, 255, 255, 0.95) 22%, rgba(255, 255, 255, 0.9) 30%, rgba(255, 255, 255, 0.7) 65%, rgba(255, 255, 255, 0) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, white 0%, rgba(255, 255, 255, 0.95) 22%, rgba(255, 255, 255, 0.9) 30%, rgba(255, 255, 255, 0.7) 65%, rgba(255, 255, 255, 0) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, white 0%, rgba(255, 255, 255, 0.95) 22%, rgba(255, 255, 255, 0.9) 30%, rgba(255, 255, 255, 0.7) 65%, rgba(255, 255, 255, 0) 100%);
  /* IE10+ */
  background: linear-gradient(to bottom, white 0%, rgba(255, 255, 255, 0.95) 22%, rgba(255, 255, 255, 0.9) 30%, rgba(255, 255, 255, 0.7) 65%, rgba(255, 255, 255, 0) 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 );
  /* IE6-9 */
}

.section-our-team .text-area {
  padding-bottom: 0;
}

.filter {
  position: relative;
  height: 100%;
  color: #FFFFFF;
}
.filter:before {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: block;
  z-index: 3;
  content: "";
  opacity: .7;
  background: #333;
}
.filter .title-area .description {
  color: #FFFFFF;
}
.filter .separator {
  color: #FFFFFF;
}
.filter .separator:before, .filter .separator:after {
  border-color: #FFFFFF;
}
.filter.filter-color-black:before {
  background: #333;
}
.filter.filter-color-gold:before {
  background: #bd986c;
}
.filter.filter-color-green:before {
  background: #55bea4;
}
.filter.filter-color-blue:before {
  background: #008b9c;
}
.filter.filter-color-purple:before {
  background: #50236F;
}
.filter.filter-color-red:before {
  background: #de6168;
}
            </style>
<!-- <div id="map">
                    </div> -->
                   <!--  <div class="input-group">
                      <span class="input-group-addon">
                        <i class="material-icons">mail</i>
                      </span>
                      <div class="form-group"><input type="email" value="" placeholder="Your Email..." class="form-control"><span class="material-input"></span><span class="material-input"></span></div>
                      <div>
                            <div>
                                <label>Name:*</label>
                                <div class="form-group"><input  type="text" name="fullname" value="" class="form-control" /></div>
                            </div>
                            <div>
                               <span class="input-group-addon">
                        <i class="material-icons">mail</i>
                      </span>
                                <div class="form-group"><input type="text" name="emailaddress" value="" class="form-control"/></div>
                            </div>
                            <div>
                                <label>Phone Number:*</label>
                                <input type="text" name="phonenumber" value="" class="form-control" />
                            </div>
                        </div>
                        
                        <div class="last">
                            <div>
                                <label>Message:*</label>
                                <textarea rows="" cols="" name="message" class="form-control"></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LcN3f8SAAAAAEJNJXa-07z0TUbReUWBgPp39nQq"></div>
                            <p>
                                <input type="submit" name="submit" value="Send Now" class="submit" />
                            </p>
                        </div>
                    </div> -->
                  <!-- </div> -->
                 <!--  <div class="col-sm-4">
                    <button type="submit" name="submit" value="Send Now" class="btn btn-rose btn-block">Send</button>
                  </div> -->
                </div>
              <!-- </form> -->
            <!-- </div> -->
          </div>

        </div>
        

        
      </div>
    </div>
  
    <footer class="footer footer-black footer-big"  style="padding: 15px;">
        <div class="container">
            <div class="socials">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-google-plus"></a>
            </div>
            <div class="copy">Website Template Designed by <a href="" rel="nofollow">ozaman</a></div>
        </div>
    </footer>
   <div class="modal fade" id="contactmodal">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="/*background-image: url(files/images/bg_body.jpg); */  border: 1px solid;
    background-color: rgb(22, 40, 60);">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <!-- <h4 class="modal-title" >Contact</h4> -->
                            </div>
                            <div class="modal-body">
                                <div style="padding: 20px;padding-top: 20px">
                                    <h5 style="color: #fff;font-size: 20px;">Contacts</h5>
                                    <div class="contact">             
                                      <ul style="    padding-left: 0;">
              <li class="">Address: <a>116/3 Moo. 2 Maikhao, Phuket, 83110</a></li>
              <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 87-2794723</a>; <a href="tel:#" style="display: inline-block;">087-2794723</a></li>
              <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> imronspeedboattour@gmail.com</a></li>
            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletePackage(data)">Remove</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                            </div>
                        </div>
                    </div>
                </div>
  <style >
  .modal-content:after{
        background-color: rgba(0,0,0,.66);
  }
  .contact ul li {
    list-style: none;
  }
        .contact>ul>li{
          color: #fff;
        }
        .contact>ul>li>a{
          color: #f9b707;
            padding: 6px;
            display: inline-block;
        }
        .copy{
          font-size: 10px;
            float: left;
            color: #fff;
            line-height: 4;
        }
        .socials{
          float: right;
        }
        .socials a {
          color: #fff;
        }
        .socials a {
    background: url(../images/time_bg2.png) 0 center repeat-x;
    float: left;
    display: block;
    font-size: 20px;
    width: 40px;
    height: 37px;
    color: #e5e5e5;
    text-align: center;
    line-height: 37px;
    border-radius: 7px;
}
      </style>

<!-- <nav id="cd-vertical-nav">
  <ul>
    <li>
      <a href="#page-headerpopular" data-number="1" class="is-selected">
        <span class="cd-dot"></span>
        <span class="cd-label">top</span>
      </a>
    </li>
    <li>
      <a href="#popular" data-number="2" class="">
        <span class="cd-dot"></span>
        <span class="cd-label">Package popular</span>
      </a>
    </li>
    <li>
      <a href="#area" data-number="3" class="">
        <span class="cd-dot"></span>
        <span class="cd-label">Package for area</span>
      </a>
    </li>
    <li>
      <a href="#footers" data-number="4" class="">
        <span class="cd-dot"></span>
        <span class="cd-label">Footers</span>
      </a>
    </li>
    
    
  </ul>
</nav> -->


  <!--   Core JS Files   -->



  <!-- <script type="text/javascript">
    $(document).ready(function(){

      var slider2 = document.getElementById('sliderRefine');

      noUiSlider.create(slider2, {
        start: [42, 880],
        connect: true,
        range: {
           'min': [30],
           'max': [900]
        }
      });

      var limitFieldMin = document.getElementById('price-left');
      var limitFieldMax = document.getElementById('price-right');

      slider2.noUiSlider.on('update', function( values, handle ){
        if (handle){
          limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);
        } else {
          limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);
        }
      });
    });
  </script> -->

</body></html>


