<!DOCTYPE html>
<!-- saved from url=(0070)http://demos.creative-tim.com/material-kit-pro/examples/ecommerce.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>IMRON PHUKET SPEEDBOAT</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

  
  
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
    <link href="files/css/bootstrap.min.css" rel="stylesheet">
    <link href="files/css/material-kit.min.css?v=1.1.0" rel="stylesheet">
    <link href="files/css/vertical-nav.css" rel="stylesheet">
    <link href="files/css/material-dashboard.css" rel="stylesheet">

  <!-- CSS Files -->

<!--  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
 <script src="files/js/angular-cookies.min.js"></script>
<script src="files/js/angular-scroll.js"></script> -->
 

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript"></script>
<script src="files/js/angular-cookies.min.js" type="text/javascript"></script>
<script src="files/js/angular-scroll.js" type="text/javascript"></script>


   <!--  <script src="files/js/jquery-3.1.0.min.js"></script>  -->
  <script src="files/js/jquery.min.js" type="text/javascript"></script>
  <script src="files/js/bootstrap.min.js" type="text/javascript"></script>
<script src="files/js/ui-bootstrap-tpls-2.3.2.min.js" type="text/javascript"></script>
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
  <nav class="navbar navbar-default navbar-fixed-top navbar-color-on-scroll navbar-transparent" color-on-scroll="100" id="sectionsNav">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  href="index.php" class="navbar-brand"  href="">IMRON <span style="color: #ff9800; font-weight: 600;">TOURS</span></a>
          </div>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            
            <li>
            <a href="index.php">
              <i class="material-icons">home</i>Home
            </a>
          </li>

          

          <li class="dropdown" data-toggle="modal" data-target="#contactmodal">
            <a href="">
              <i class="material-icons">contacts</i> Contact
              <!-- <b class="caret"></b> -->
            </a>
          </li>

          
            </ul>
          </div>
      </div>
    </nav>

  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(&quot;backend/images/icon/{{tours.icon}}&quot;); transform: translate3d(0px, 0px, 0px);" id="page-headerpopular">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center " >
        <!-- col-md-offset-2 -->
          <div class="brand">
            <h2  style="margin-top: -40px;margin-bottom: 0;color: #f44336;font-size: 20px;" ><span ng-bind="tours.cost | currency:'':0"></span><span style="color: #fff"><span style="color: #f44336">฿</span> / Package</span></h2>
            <h1 class="title"><div ng-bind="tours.name_en" align="center" style="     margin-top: -25px;font-size: 20px; font-weight: 500;"></div></h1>
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
                                        <li class="timeline-badge">
                                            <div class="timeline-badge danger">
                                                <i class="material-icons">card_travel</i>
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

                                        <li class="timeline-badge">
                                            <div class="timeline-badge success">
                                                <i class="material-icons">extension</i>
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
                                        
                                        <li class="timeline-badge">
                                        <!-- class="timeline-badge" -->
                                            <div class="timeline-badge info">
                                                <i class="material-icons">fingerprint</i>
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
                                        <li class="timeline-badge">
                                            <div class="timeline-badge warning">
                                                <i class="material-icons">flight_land</i>
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
                        <div style=" margin-top: 64px;" ng-if="datagallery != 0">
                            <div ng-repeat="x in datagallery" align="center" style=" width: 100%; border-radius: 8px;margin-bottom: 10px ">
                               <img src="backend/images/gallery/{{x.gallery}}" style="border-radius: 6px " width="400">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
               .nav .navbar-nav .navbar-right{
                background: #fff;
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
                <div class="subscribe-line subscribe-line-image" data-parallax="true" style="background-image: url(&#39;files/images/bg_body.jpg&#39;);" id="footers">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="text-center">
            <h3 class="title">Subscribe to our Newsletter</h3>
            <p class="description">
              Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
            </p>
          </div>

          <div class="card card-raised card-form-horizontal">
            <div class="card-content">
              <form method="">
                <div class="row">
                  <div class="col-sm-8">

                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="material-icons">mail</i>
                      </span>
                      <div class="form-group is-empty"><input type="email" value="" placeholder="Your Email..." class="form-control"><span class="material-input"></span><span class="material-input"></span></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <button type="button" class="btn btn-rose btn-block">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
        <div class="col-md-4 col-md-offset-1" >
          <h5 style="color: #fff">Contacts</h5>
          <div class="contact">             
            <ul >
              <li class="">Address: <a>116/3 Moo. 2 Maikhao, Phuket, 83110</a></li>
              <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 87-2794723</a>; <a href="tel:#" style="display: inline-block;">087-2794723</a></li>
              <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> imronspeedboattour@gmail.com</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
   <div class="modal fade" id="contactmodal">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="background-image: url(files/images/bg_body.jpg);    background-color: rgba(0,0,0,.66);">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <!-- <h4 class="modal-title" >Contact</h4> -->
                            </div>
                            <div class="modal-body">
                                <div>
                                    <h5 style="color: #fff;font-size: 20px;">Contacts</h5>
                                    <div class="contact">             
                                      <ul >
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
        }
        .socials{
          float: right;
        }
        .socials a {
          color: #fff;
        }
      </style>
<footer class="footer footer-black footer-big" >
  <div class="container">
    

      
      

      
    <div class="socials">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google-plus"></a>
    </div>
    <div class="copy"> Website Template Designed by <a href="" rel="nofollow">ozaman</a>
    </div>
    </div>
</footer>
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


