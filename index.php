<!DOCTYPE html>
<!-- saved from url=(0070)http://demos.creative-tim.com/material-kit-pro/examples/ecommerce.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>DANA TOURS ASIA</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

  
  
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
    <link rel="icon" href="backend/images/logo22.png" type="image/x-icon">
  <!-- CSS Files -->

  
    <link href="files/css/bootstrap.min.css" rel="stylesheet">
    <link href="files/css/material-kit.min.css?v=1.1.0" rel="stylesheet">
    <link href="files/css/vertical-nav.css" rel="stylesheet">
    <!-- <link href="files/css/material-dashboard.css" rel="stylesheet"> -->

<!--  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
 <script src="files/js/angular-cookies.min.js"></script>
<script src="files/js/angular-scroll.js"></script> -->
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript"></script>
<script src="files/js/angular-cookies.min.js" type="text/javascript"></script>
<script src="files/js/angular-scroll.js" type="text/javascript"></script>
 <script src="files/js/main.js" type="text/javascript"></script>
<!-- <script src="files/js/main.js" type="text/javascript"></script>  -->
   <!--  <script src="files/js/jquery-3.1.0.min.js"></script>  -->
  <script src="files/js/jquery.min.js" type="text/javascript"></script>
  <script src="files/js/bootstrap.min.js" type="text/javascript"></script>
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

<body ng-app="myApp" ng-controller="main">
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
            <a  href="index.php" class="navbar-brand"> <img src="./files/images/logo.png" width="50"></a>
          </div>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            
            <!-- <li>
            <a href="">
              <i class="material-icons">apps</i> Components
            </a>
          </li> -->

          <style>
          .uxh-tray-menu {
    background-color: #fff;
    position: inherit;
    display: table-cell;
    margin: 0;
    min-height: 42px;
    padding: 0;
    vertical-align: bottom;
    zoom: 1;
    opacity: 1;
    width: 1px;
}
          .uxh-tray-dropdown {
    position: absolute;
    top: calc(100% + 1px);
    left: 0;
    right: 0;
    padding: 40px 20px;
    -webkit-box-shadow: 4px 4px 0 0 rgba(0,0,0,.1);
    box-shadow: 4px 4px 0 0 rgba(0,0,0,.1);
    background-color: #e8e8e8;
    font-size: 14px;
    z-index: 1029;
    overflow: auto;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transition: all .3s cubic-bezier(.65,-.01,.26,1);
    transition: all .3s cubic-bezier(.65,-.01,.26,1);
    -webkit-transform-origin: top;
    transform-origin: top;
    display: block;
    height: auto;
}
.uxh-open .uxh-tray-dropdown {
    /* -webkit-transform: scaleY(1); */
    transform: scaleY(1);
}
.open .tray-content {
    opacity: 1;
    -webkit-transition-delay: .25s;
    transition-delay: .25s;
}
.open .tray-content {
    opacity: 1;
    -webkit-transition-delay: .25s;
    transition-delay: .25s;
}
.uxh-tray-toggle:after {
    display: inline;
    margin-left: .35714rem;
    font-family: uxfont;
    font-size: 8px;
    line-height: 1;
    content: '\E443';
    border: 0;
    vertical-align: middle;
    width: 0;
    height: 0;
}
.uxh-utility-bar .uxh-close:before {
    content: '\D7';
}
 .uxh-close {
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
    -webkit-appearance: none;
    width: 1em;
    font-size: 24px;
    opacity: 1;
    font-weight: 900;
}
.uxh-divider:before {
    content: '';
    width: 1px;
    background-color: #999;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    /* display: none; */
    height: 220px;
}
          </style>

          <li class="dropdown" ng-click="contact()">
            
              <!-- <i class="material-icons">contacts</i>  -->
              <!-- <b class="caret"></b> -->
              <span><div><span class="uxh-basic-phone-text uxh-hidden-sm-down">Contact</span></div></span>
              
            
            </div>
          </li>

          
            </ul>
            
          </div>
      </div>
      <div class="open">
              <div class="uxh-tray-dropdown">
              <div class="uxh-tray-content">
              <button class="uxh-close"></button>
              <!-- <div class="uxh-container">
              <div class="uxh-row">
              <div class="uxh-col-lg-4 uxh-col-md-6 uxh-content-wrap">
              <div class="uxh-row"><div class="uxh-col-sm-12">
              <h3 class="uxh-font-primary-bold"><span>โทรหาเรา</span></h3>
              </div></div>
              <ul class="uxh-alt-contact-list uxh-list-unstyled">
              <li><span>สนับสนุน 24/7 อังกฤษ</span>
                <a class="uxh-headline-primary uxh-contact-link" data-eid="uxp.hyd.shared.utility_bar.support_phone.02_105_6194.click" href="tel:021056194">02-105-6194</a>
                </li>
                <li>
                  <span>สนับสนุน 24/7 อังกฤษ</span>
                  <a class="uxh-headline-primary uxh-contact-link" data-eid="uxp.hyd.shared.utility_bar.support_phone.060_002_4085.click" href="tel:0600024085">060-002-4085</a>
                  </li>
                    </ul>
                    <div class="uxh-contact-link-info"><span>ไดเรกทอรีสากล</span>
                    </div>
                    <a href="https://th.godaddy.com/contact-us.aspx" class="uxh-headline-primary uxh-contact-link" data-eid="uxp.hyd.sales_header.utility_bar.support_phone.global_directory.link.click" data-tcc-ignore="true"><span>หมายเลขโทรศัพท์และชั่วโมงทำงาน</span></a></div>
                    <div class="uxh-col-lg-4 uxh-col-md-6 uxh-content-wrap uxh-divider">
                      <div id="gdchat-container"></div>
                    </div>
                    <div class="uxh-col-md-4 uxh-help-mobile uxh-hidden-md-up">
                      <div class="uxh-row"><div class="uxh-col-sm-12">
                        <h3 class="uxh-font-primary-bold"><span>ศูนย์ช่วยเหลือ</span></h3>
                      </div>
                    </div>
                    <p><span>สำรวจแหล่งข้อมูลความช่วยเหลือออนไลน์ของเรา</span></p>
                    <div>
                      <a href="https://th.godaddy.com/help" class="uxh-btn uxh-btn-default" data-eid="uxp.hyd.sales_header.utility_bar.support_phone.help_center.help_center_link.link.click" data-tcc-ignore="true"><span>วิธีใช้</span>
                      </a>
                    </div>
                  </div>
                </div>-->
                    <!-- <div class="subscribe-line subscribe-line-image" data-parallax="true" style="background-color: #e8e8e8;" id="footers"> -->
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-6 ">
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

        </div> -->
        <div class="col-md-4 col-md-offset-1" >
          
          <h5 style="color: #fff">Contacts</h5>
          <div class="contact" id="contact">             
            <ul >
              <li class="">Address: <a>116/3 Moo. 2 Maikhao, Phuket, 83110</a></li>
              <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 87-2794723</a>; <a href="tel:#" style="display: inline-block;">087-2794723</a></li>
              <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> imronspeedboattour@gmail.com</a></li>
            </ul>
          </div>
          <div class="uxh-divider">
                      <div id="gdchat-container"></div>
                    </div>

        </div>
      </div>
    </div>
  <!-- </div> -->
                  </div></div> 
                    </div>
    </nav>

  <div class="page-header header-filter header-small" data-parallax="true"  id="page-headerpopular">
  <div style="background-image: url(./files/images/slide.jpg); transform: translate3d(0px, 0px, 0px);min-height: 65vh;">  
  <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="brand">
            <h1 class="title">Travel Service!</h1>
            <!-- <h4>IMRON PHUKET SPEEDBOAD TOUR  <b>LTD.</b> ,PART.</h4> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="main main-raised">
    <div class="section " style="padding-top: 5px" align="center">
  
        <div class="container">
            <div class="tm-section-header section-margin-top" id="popular">
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Popular Packages</h2></div>
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>  
            </div>
            <div class="row "  >
                <div style="width: 100%" align="center">
                <div class="col-md-4 " ng-repeat="item in tourpopular">
                    <div class="card card-product card-plain card-rotate">
                        <div class="rotating-card-container">
                            <div class="card-image">
                                <div class="front">
                                    <img class="img" src="./data/files/upload/icon/{{item.icon}}"  style="height: 280px">
                                    <div class="colored-shadow" style="background-image: url(&quot;files/images/dolce.jpg&quot;); opacity: 1;"></div>
                                </div>
                                <div class="back back-background" style="height: 376px; width: 360px; background-image: url(&quot;files/images/page1_img1.jpg&quot;);">
                                    <div class="card-content">
                                        <!-- <h5 class="card-title">
                                        Quick Actions...
                                        </h5> -->
                                        <div class="footer text-center">
                                          <a href="view.php#?data={{item.id}}" class="btn  btn-white">
                                            <i class="material-icons">info</i> Details
                                          </a>
                                          
                                        </div>
                                        <hr>
                                     <!--  <p class="card-description">  You can share this product with your friends... </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="" ng-bind="item.name"></a>
                            </h4>
                            <p class="card-description" ng-bind="item.description" style="height: 125px;overflow: hidden;"></p>
                            <div class="footer">
                                
                                <div class="" style="display: inline-block;" align="right">
                                    <div type="button" rel="tooltip" title="" class="btn btn-simple " data-original-title="place" style=" margin-top: 0; text-transform: none;margin: 0;font-size: 16px;padding: 0;margin-left: -80px;
">
                                      <i class="material-icons" style="line-height: 2;">place</i> <span ng-bind="item.city"></span>
                                    </div>
                                </div>
                                <div class="price-container" align="left" style="    float: right;">
                                    <span class="price price-old"> <!-- 12,500 --></span>
                                    <span class="price price-new" ng-bind="item.net_price_adult | currency:'':0 "> </span> / Package
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> 
            </div>
        </div>
        
    </div>
</div> <!-- end-main-raised -->

<div class="section section-blog" id="area" >
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <h2 class="section-title">Area</h2>      
        <ul class="nav nav-pills nav-pills-icons" role="tablist" style="margin-bottom: 25px;">
            <li class="active" id="Phuket"><a href="#pill1" data-toggle="tab" aria-expanded="true" ng-click="getTourforarea('Phuket');show = !show">Phuket</a></li>
            <li class="" id="Phangnga"><a href="#pill2" data-toggle="tab" aria-expanded="false" ng-click="getTourforarea('Phang nga');show = !show">Phang nga</a></li>
            <li class="" id="Krabi"><a href="#pill3" data-toggle="tab" aria-expanded="false" ng-click="getTourforarea('Krabi');show = !show">Krabi</a></li>
            <li class="" id="PhiPhiisland"><a href="#pill3" data-toggle="tab" aria-expanded="false" ng-click="getTourforarea('Phi Phi island');show = !show">Phi Phi island</a></li>
            <li class="" id="All"><a href="#pill3" data-toggle="tab" aria-expanded="false" ng-click="getTourforareaall('All');show = !show">All</a></li>
        </ul> 
        </div>
        </div>    
        <div class="row">
            <div class="col-md-3" ng-repeat="item in dataTour" id="fade-in-out" >
                <div class="card card-blog" >
                    <div class="card-image" ng-click="viewpackageforid(item.id)">
                        <img src="./data/files/upload/icon/{{item.icon}}" style="height: 180px" >
                       <!--  <div class="colored-shadow" style="background-image: url(&quot;files/images/color1.jpg&quot;); opacity: 1;"></div> -->
                        <!-- <div class="ripple-container"></div>
                        <div class="colored-shadow" style="background-image: url(&quot;files/images/1.png&quot;); opacity: 1;"></div> -->
                    </div>
                    <div class="card-content">
                        <h6 class="category text-rose" ng-bind="item.name"></h6>                      
                        
                    </div>
                    <div class="description-package">
                      <p class="card-description" ng-bind="item.description"></p>
                    </div>
                    <div class="cost-pro">
                      <i class="material-icons" style="    display: inline-block;
    line-height: 0;">place</i>
                      <p class="pro-item" ng-bind="item.province" align="left" ></p>

                      <p style="float: right;display: inline-block;">/ Package</p>
                      <p ng-bind="item.net_price_adult | currency:'':0 " align="right" style="float: right;    color: #FF5722;"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 " style="float: right;
    text-align: right;">
            <button rel="tooltip" class="btn btn-rose btn-round " data-original-title="" title="">Load more...</button>
        </div> -->
    </div>
</div><!-- section -->




  
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
                                      <ul  style="    padding-left: 0;">
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
  .navbar.navbar-transparent{
    color: #fff;
  }
  .section{
    padding: 0;
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
      
.cost-pro{
  position: absolute;
    padding: 0 15px;
    bottom: 10px;
    width: 100%;
}
.cost-pro p {
  display: inline-block;
}
.card-blog, .card-testimonial .card-description+.card-title, .card-testimonial .icon {
    margin-top: 30px;
    min-height: 435px;
}
.card .card-content {
    padding: 10px 25px;
}
.description-package{
    padding: 0 25px;
}
.tm-section-header {
    margin-bottom: 10px;
    overflow: hidden;
}
.tm-section-title {
    margin: 0;
    text-align: center;
    text-transform: uppercase;
    font-size: 27px;
    font-weight: 300;
}
.section-margin-top {
    margin-top: 10px;
}
.section-margin-top div h2{
      color: #f3aa29;
}
.card .footer .stats .material-icons {
    position: relative;
    top: -4px; 
    font-size: 18px;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    background-color: #00bcd4;
}
#fade-in-out {
  transition: 1s linear all;  
  opacity: 1;
}

#fade-in-out.ng-hide {
  opacity: 0;
}
.card-product {
     margin-top: 0; 
}
.contact ul li {
    list-style: none;
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
<footer class="footer footer-black footer-big" >
  <div class="container">
    

      
      

      
    <div class="socials">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google-plus"></a>
    </div>
    <div class="copy">Website Template Designed by <a href="" rel="nofollow">ozaman</a>
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
      <a href="#contact" data-number="4" class="">
        <span class="cd-dot"></span>
        <span class="cd-label">Contact</span>
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



