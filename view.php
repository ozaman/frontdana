<!DOCTYPE html>
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
    <!-- <link href="files/css/material-dashboard.css" rel="stylesheet"> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  
    <link rel="icon" href="backend/images/logo22.png" type="image/x-icon">
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
        <nav class="navbar" color-on-scroll="100" id="sectionsNav" style="background: rgba(76, 175, 80, 0.85);
    color: #fff;">
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
                    <a  href="http://danatoursasia.com" class="navbar-brand" style="padding: 0"> 
                        <img src="./files/images/logo.png" width="50">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">                    
                        <li>
                            <a href="index.php" >
                                <i class="material-icons">home</i>
                                <span> HOME</span>

                            </a>
                            <!-- <ul class="dropdown-menu">
                                <li>
                                    <a href="/bootstrap-themes">All Categories</a>
                                </li>
                                <li>
                                    <a href="/bootstrap-themes/admin-dashboard">Admin &amp; Dashboards</a>
                                </li> 
                            </ul> -->
                        </li>
                    </ul>            
                </div>
            </div>
        </nav>

       <!--  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(&quot;./data/files/upload/tour/icon/{{tours.icon}}&quot;); background-repeat-x: no-repeat;background-repeat-y: no-repeat; transform: translate3d(0px, 0px, 0px);" id="page-headerpopular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center " >
                
                        <div class="brand">
                            <h2  style="margin-top: -40px;margin-bottom: 0;color: #f44336;font-size: 20px;" ><span ng-bind="tours.cost_web | currency:'':0" style="font-weight: 500;"></span><span style="color: #fff"><span style="color: #f44336">฿</span> / Person</span></h2>
                            <h1 class="title"><div ng-bind="tours.name" align="center" style="     margin-top: -25px;font-size: 20px; font-weight: 500;"></div></h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> --> 


       <div class="container">
                <div class="row">
                    <div class="col-md-9 ">
                       <div class="brand">
                            <!-- <h2  style="margin-top: -40px;margin-bottom: 0;color: #f44336;font-size: 20px;" ><span ng-bind="tours.cost_web | currency:'':0" style="font-weight: 500;"></span><span style="color: #fff"><span style="color: #f44336">฿</span> / Person</span></h2> -->
                            <h1 class="title"><div ng-bind="tours.name" align="center" style="color: #333;
    border-radius: 8px;
    /* border: 8px solid #fff; */
    /* margin-bottom: 57px; */
    /* background: #4caf50; */
    /* border-top: 1px dashed #4caf50; */
    /* border-bottom: 1px dashed #4caf50; */
    font-size: 20px;
    font-weight: 500;"></div></h1>
                           
                        </div>
                        <div style="   background: rgba(255, 255, 255, 0.36);  padding: 15px 3px;    border-radius: 8px; margin-bottom: 20px;" >
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="{{$index}}" class="active" ng-repeat="slide in datagallery " ng-class="{active: $index == 0}""></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item col-md-12" ng-repeat="slide in datagallery " ng-class="{active: $index == 0}">
                                  <img ng-src="./data/files/upload/tour/gallery/{{slide.gallery}}" alt="Los Angeles" style="width:100%;">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>                           
                                <i class="material-icons">keyboard_arrow_left</i>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <i class="material-icons">keyboard_arrow_right</i>
                            </a>
                        </div>
                    </div>


                    <div class="row">        
                        <div class="col-md-12">
                            <div class="product_nav">
                                <div class="">
                                    <ul>
                                        <li class="cur">
                                            <span >Overview detail</span>
                                          
                                        </li>
                                      <!-- <li class="cur">
                                            <span >Free</span>
                                           
                                      <li class="cur">
                                            <span>Introduction</span>
                                            
                                      </li> -->
                                      
                                    </ul>
                                    <!-- <div class="btn_orange" style="display:none">
                                        <span ng-if="flagcheck == 1">Book Now</span>
                                        <span ng-if="flagcheck == 2">จอง</span>
                                        <span ng-if="flagcheck == 3">現在預訂</span></div> -->
                                </div>
                            </div>
                           
                        
                    </div>
                      <div class="col-md-12">
                            <div class="card-plain">
                                <div class="">
                                    <div class="timeline-heading" >
                                                    <div class="" style=" width: 130px;
    margin-top: 30px;
    margin-bottom: 20px;
    color: #333;
    text-align: left;
    font-weight: 400;
    font-size: 16px;
    /* background-color: #f44336; */
    border-radius: 4px;
    padding: 5px 0;
    text-transform: uppercase;">Package</div>
                                                </div>
                                                <div class="timeline-body">
                                                    <div ng-bind="tours.name" ></div>
                                                    <div><span  style="color: #f44336;" ><span ng-bind="tours.cost_web | currency:'':0" style="font-weight: 500;"></span><span style="color: #333"><span style="color: #f44336">฿</span> / Person</span></span></div>
                                                      
                                                </div>
                                    

                                            
                                                <div class="timeline-heading" >
                                                    <div class="" style=" width: 130px;
    margin-top: 30px;
    margin-bottom: 20px;
    color: #333;
    text-align: left;
    font-weight: 400;
    font-size: 16px;
    /* background-color: #f44336; */
    border-radius: 4px;
    padding: 5px 0;
    text-transform: uppercase;">Detail</div>
                                                </div>
                                                <div class="timeline-body">
                                                    <p ng-bind="tours.detail">
                                                      
                                                    </p>
                                                      
                                                </div>
                                                <!-- <div style="color: #f44336; margin-top: 50px;">
                                                   <h4 al ng-bind="tours.class" style="display: inline-block;"></h4>
                                                   <h4 style="display: inline-block;float: right;" >8 person</h4>
                                                </div> -->
                                           
                                       

                                            
                                            <div class="timeline-panel">
                                                <div class="timeline-heading" >
                                                    <div class="" style="width: 130px;
    margin-top:85px;
    margin-bottom: 20px;
    color: #333;
    text-align: left;
    font-weight: 400;
    font-size: 16px;
    /* background-color: #f44336; */
    border-radius: 4px;
    padding: 5px 0;
    text-transform: uppercase;">Program </div>
                                                </div>
                                                <div class="timeline-body" >
                                                <div id="repeatprogram">
                                                  
                                                </div>
                                                </div>
                                            </div>
                                       
                                      
                                            <div class="timeline-panel">
                                                <div class="timeline-heading" >
                                                    <div class=""  style="width: 130px;
    margin-top: 85px;
    margin-bottom: 20px;
    color: #333;
    text-align: left;
    font-weight: 400;
    font-size: 16px;
    /* background-color: #f44336; */
    border-radius: 4px;
    padding: 5px 0;
    text-transform: uppercase;">condition</div>
                                                </div>
                                                <div class="timeline-body">
                                                    <div id="repeatconditions"></div>
                                                   
                                                    
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
               
                    <!-- <div style="margin-top: 95px"> -->
                        
                    <div class="col-md-3" style="margin-top: 20px;
    border-radius: 8px;
    border: 1px solid #4caf50;margin-bottom: 30px;">
                        <h3 class="title"><div align="center" style="margin-bottom: 15px;margin-top: 15px;     font-size: 16px; font-weight: 500;">Recommend</div></h3>
                        <div class="col-sm-12 col-md-12" ng-repeat="item in dataTour" id="fade-in-out" >
                    <div class="card card-blog" >
                        <div class="card-image" ng-click="viewpackageforid(item.id)">
                            <img src="./data/files/upload/tour/icon/{{item.icon}}" style="height: 180px" >
                        </div>
                        <div class="card-content">
                            <h6 class="category text-rose" ng-bind="item.name"></h6>                      
                            
                        </div>
                        <!-- <div class="description-package">
                            <p class="card-description" ng-bind="item.description"></p>
                        </div> -->
                        <div class="cost-pro">

                           
                        <div>
                            <i class="material-icons" style="display: inline-block; line-height: 0;">place</i>
                            <p class="pro-item" ng-bind="item.city" align="left" ></p>
                        </div>
                         <div style="    text-align: right;"><span ng-bind="item.cost_web | currency:'':0 " style=" color: #FF5722;"></span><span> /person</span></div>

                            
                        </div>
                    </div>
                </div>
                <style >
                    .cost-pro p {
    display: inline-block;
}
.card-blog, .card-testimonial .card-description+.card-title, .card-testimonial .icon {
    margin-top: 30px;
    min-height: 300px;
    cursor: pointer;
}
.card .card-content {
    padding: 10px 25px;
}
.description-package{
    padding: 0 25px;
}
.cost-pro {
    position: absolute;
    padding: 0 15px;
    bottom: 10px;
    width: 100%;
}
                </style>
                    </div>
                <!-- </div> -->
                </div>
            </div>
       

         <!-- <div class="container-fluid" > 
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-plain">
                        <div class="card-content">
                            <ul class="timeline timeline-simple">
                                   
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger">
                                        <i class="material-icons">receipt</i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="label label-danger">Detail</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p ng-bind="tours.detail"></p>
                                                      
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
                                            <div id="repeatprogram"></div>
                                                  
                                        </div>
                                    </div>
                                </li>
                                        
                                <li class="timeline-inverted">
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
                                            <div class="">Phones: 
                                                <a href="tel:#" style="display: inline-block;">(+66) 096-6409949</a><a href="tel:#" style="display: inline-block;">087-2794723</a>
                                            </div>
                                            <div class="">E-mail: 
                                              <a href="mailto:#" style="display: inline-block;"> sele@danatoursasia.com</a>
                                            </div>            
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> -->
                
        <div class="subscribe-line subscribe-line-image" data-parallax="true" style="background-image: url(&#39;files/images/bg_body.jpg&#39;);" id="footers">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 " >
                    <!-- col-md-offset-1 -->
                        <h2 style="color: #fff">Contact Us</h2>
                        <div class="contact" id="contact">             
                            <ul >
                                <li class="">Address: <a>100/16 Moo 5 , Soi 1 Chalernprakiet Rd., T.Rassada Muang Phuket Thailand 83000</a></li>
                                <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 096-6409949</a></li>
                                <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> sele@danatoursasia.com</a></li>
                            </ul>
                        </div>
                    </div>
                  <div class="col-md-8 ">
                      <div class="col-sm-12">                    
                          <div class="">
                              <div class="title-area">
                                  <h5 class="subtitle text-gray" align="center">Glad to Talk With You</h5>
                                  <!-- <h2 style="color: #fff">Contact Us</h2> -->
                                  <div style="width: 100%;text-align: center;"><div class="separator separator-danger">✻</div></div>
                              </div>

                              <div class="social-buttons">
                                  <button class="btn btn-social btn-simple"><a href="https://www.facebook.com/DanaToursandTravel/?ref=br_rs"> <i class="fa fa-facebook-square"></i></a></button>
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
                      </div>             
                  </div>
              </div>
          </div>
        </div>
  
        <footer class="footer footer-black footer-big"  style="padding: 15px;">
            <div class="container">
                <div class="socials">
                  <a href="https://www.facebook.com/DanaToursandTravel/?ref=br_rs" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-google-plus"></a>
                </div>
                <div class="copy">Website Template Designed by <a href="" rel="nofollow">Dana Tours Asia</a></div>
            </div>
        </footer>

    <!-- MODAL -->

        <div class="modal fade" id="contactmodal">
            <div class="modal-dialog">
                <div class="modal-content" style="border: 1px solid; background-color: rgb(22, 40, 60);">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 20px;padding-top: 20px">
                            <h5 style="color: #fff;font-size: 20px;">Contacts</h5>
                            <div class="contact">             
                                <ul style="    padding-left: 0;">
                                    <li class="">Address: <a>100/16 Moo 5 , Soi 1 Chalernprakiet Rd., T.Rassada Muang Phuket Thailand 83000</a></li>
                                    <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 096-6409949</a>; <a href="tel:#" style="display: inline-block;">087-2794723</a></li>
                                    <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> sales@danatoursasia.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
  <style >
  .separator-danger {
    color: #e78b90;
}

.separator {
    color: #c5a47e;
    margin: 0 auto 20px;
    max-width: 240px;
    text-align: center;
    position: relative;
}
.separator-danger:before, .separator-danger:after {
    border-color: #e78b90;
}

.separator:before {
    float: left;
}

.separator:before, .separator:after {
    display: block;
    width: 40%;
    content: " ";
    margin-top: 10px;
    border: 1px solid #c5a47e;
}
.separator:after {
    float: right;
}

.separator:before, .separator:after {
    display: block;
    width: 40%;
    content: " ";
    margin-top: 10px;
    border: 1px solid #c5a47e;
}
  .navbar, .navbar.navbar-default{
    box-shadow: none !important;
  }
  .product_nav {
        border-radius: 8px;
    border: 8px solid #fff;
    background: #fff;
    width: 100%;
    font-weight: 400;
    /*border-top: 1px solid #55caf5;*/
    /*border-bottom: 1px solid #55caf5;*/
    /* box-shadow: 0 2px 2px #eee; */
    color: #000;
    /* height: 70px; */
    padding: 7px 0;
    float: left;
}
  .product_nav ul li{
    /*float: left; */
    /* width: 135px; */
    /* border-right: 1px solid #e7e7e7; */
    text-align: center;
    height: 20px;
    padding: 0 21px;
    line-height: 29px;
    font-size: 16px;
    cursor: pointer;
    /* margin-top: 15px; */
}
li{
    list-style: none;
}
.product_nav ul li:first-child{
    padding-left:0px; 

}
.nav .navbar-nav .navbar-right{
    background: #fff;
}
.timeline.timeline-simple {
    margin-bottom: 0;
    padding-bottom:  0;
}
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
.navbar{
    border-radius: 0px;
}
.navbar-nav>li>a {
    text-transform: capitalize !important;
    
}
.navbar.navbar-transparent{
    color: #fff;
    margin: auto;
    position: absolute;
    z-index: 5;
    right: 1%;
    left: 1%;
}
 
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




.card {
    background: #fff;
    box-shadow: 0 32px 44px -24px rgba(0, 0, 0, 0.23), 0 20px 25px 0px rgba(0, 0, 0, 0.12), 0 15px 10px -10px rgba(0, 0, 0, 0.2);
    border-radius: 6px;
    margin-bottom: 30px;
    -webkit-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
    -moz-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
    -o-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
    -ms-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
    transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
}
.card:not(.card-plain):not(.card-price):hover {
  -webkit-transform: scale(1.03);
  -moz-transform: scale(1.03);
  -o-transform: scale(1.03);
  -ms-transform: scale(1.03);
  transform: scale(1.03);
  box-shadow: 0 26px 50px -10px rgba(0, 0, 0, 0.38), 0 10px 20px 0px rgba(0, 0, 0, 0.2), 0 15px 10px -10px rgba(0, 0, 0, 0.2);
}
.section-our-projects .project {
    margin-bottom: 30px;
}

.project {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.project .over-area {
    display: inline-block;
    text-align: center;
    position: absolute;
    z-index: 3;
    padding: 10% 8%;
    top: 0;
    left: 0;
    content: "";
    width: 100%;
    height: 100%;
    color: white;
    opacity: 0;
    background: rgba(0, 0, 0, 0.55);
    -webkit-transition: background 0.5s, opacity 0.5s 0.5s;
    -moz-transition: background 0.5s, opacity 0.5s 0.5s;
    -o-transition: background 0.5s, opacity 0.5s 0.5s;
    -ms-transition: background 0.5s, opacity 0.5s 0.5s;
    transition: background 0.5s, opacity 0.5s 0.5s;
}
.project .over-area:hover {
  opacity: 1;
  -webkit-transition: background 0.25s, opacity 0.25s 0s;
  -moz-transition: background 0.25s, opacity 0.25s 0s;
  -o-transition: background 0.25s, opacity 0.25s 0s;
  -ms-transition: background 0.25s, opacity 0.25s 0s;
  transition: background 0.25s, opacity 0.25s 0s;
  transition-delay: 0;
  -webkit-transition-delay: 0;
}
.project .over-area:hover .content {
  opacity: 1;
  opacity: 0.2s;
  filter: alpha(opacity=20s);
}
.project .over-area:hover h3 {
  opacity: 1;
  -moz-transition: opacity 0.3s, -moz-transform 0.3s;
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
}
.project .over-area:hover p {
  opacity: 1;
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
}
.project .over-area:hover .btn {
  opacity: 1;
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
}
.project .over-area:hover .btn {
  opacity: 1;
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
}
.project .over-area.no-opacity {
  background-color: #333333;
}


.project .over-area.over-area-sm {
  padding: 20px 30px;
}
.project .over-area.over-area-sm .content {
  text-align: center;
}
.project .over-area.over-area-sm .content h4 {
  font-size: 1.75em;
}
.project .over-area.over-area-sm .content p {
  font-size: 1em;
}
.project .over-area.color-black {
  background: rgba(52, 52, 52, 0.7);
}
.project .over-area.color-green {
  background: rgba(39, 94, 76, 0.55);
}
.project .over-area.color-gold {
  background: rgba(197, 164, 126, 0.55);
}
.project .over-area.color-blue {
  background: rgba(61, 146, 207, 0.55);
}
.project .over-area.color-purple {
  background: rgba(89, 57, 111, 0.55);
}
.project .over-area.gradient-1 {
  background: -moz-linear-gradient(-45deg, rgba(151, 78, 32, 0.4) 0%, rgba(244, 218, 138, 0.4) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(151, 78, 32, 0.4)), color-stop(100%, rgba(244, 218, 138, 0.4)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(-45deg, rgba(151, 78, 32, 0.4) 0%, rgba(244, 218, 138, 0.4) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(-45deg, rgba(151, 78, 32, 0.4) 0%, rgba(244, 218, 138, 0.4) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(-45deg, rgba(151, 78, 32, 0.4) 0%, rgba(244, 218, 138, 0.4) 100%);
  /* IE10+ */
  background: linear-gradient(135deg, rgba(151, 78, 32, 0.4) 0%, rgba(244, 218, 138, 0.4) 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66954d20', endColorstr='#66f4d887',GradientType=1 );
  /* IE6-9 fallback on horizontal gradient */
}
.project .over-area.gradient-2 {
  background: -moz-linear-gradient(-45deg, rgba(216, 44, 73, 0.4) 0%, rgba(217, 99, 131, 0.4) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(216, 44, 73, 0.4)), color-stop(100%, rgba(217, 99, 131, 0.4)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(-45deg, rgba(216, 44, 73, 0.4) 0%, rgba(217, 99, 131, 0.4) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(-45deg, rgba(216, 44, 73, 0.4) 0%, rgba(217, 99, 131, 0.4) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(-45deg, rgba(216, 44, 73, 0.4) 0%, rgba(217, 99, 131, 0.4) 100%);
  /* IE10+ */
  background: linear-gradient(135deg, rgba(216, 44, 73, 0.4) 0%, rgba(217, 99, 131, 0.4) 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66d82c49', endColorstr='#66d96383',GradientType=1 );
  /* IE6-9 fallback on horizontal gradient */
}
.project .over-area.gradient-3 {
  background: -moz-linear-gradient(-45deg, rgba(223, 212, 139, 0.4) 0%, rgba(236, 101, 101, 0.4) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(223, 212, 139, 0.4)), color-stop(100%, rgba(236, 101, 101, 0.4)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(-45deg, rgba(223, 212, 139, 0.4) 0%, rgba(236, 101, 101, 0.4) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(-45deg, rgba(223, 212, 139, 0.4) 0%, rgba(236, 101, 101, 0.4) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(-45deg, rgba(223, 212, 139, 0.4) 0%, rgba(236, 101, 101, 0.4) 100%);
  /* IE10+ */
  background: linear-gradient(135deg, rgba(223, 212, 139, 0.4) 0%, rgba(236, 101, 101, 0.4) 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66dfd48b', endColorstr='#66ec6565',GradientType=1 );
  /* IE6-9 fallback on horizontal gradient */
}
.project .over-area.gradient-4 {
  background: -moz-linear-gradient(-45deg, rgba(174, 97, 167, 0.4) 0%, rgba(210, 121, 135, 0.4) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(174, 97, 167, 0.4)), color-stop(100%, rgba(210, 121, 135, 0.4)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(-45deg, rgba(174, 97, 167, 0.4) 0%, rgba(210, 121, 135, 0.4) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(-45deg, rgba(174, 97, 167, 0.4) 0%, rgba(210, 121, 135, 0.4) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(-45deg, rgba(174, 97, 167, 0.4) 0%, rgba(210, 121, 135, 0.4) 100%);
  /* IE10+ */
  background: linear-gradient(135deg, rgba(174, 97, 167, 0.4) 0%, rgba(210, 121, 135, 0.4) 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66ae61a8', endColorstr='#66d27987',GradientType=1 );
  /* IE6-9 fallback on horizontal gradient */
}
.project .over-area.gradient-5 {
  background: #6c3aad;
  /* Old browsers */
  background: -moz-linear-gradient(-45deg, rgba(107, 57, 172, 0.4) 0%, rgba(200, 254, 206, 0.4) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(107, 57, 172, 0.4)), color-stop(100%, rgba(200, 254, 206, 0.4)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(-45deg, rgba(107, 57, 172, 0.4) 0%, rgba(200, 254, 206, 0.4) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(-45deg, rgba(107, 57, 172, 0.4) 0%, rgba(200, 254, 206, 0.4) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(-45deg, rgba(107, 57, 172, 0.4) 0%, rgba(200, 254, 206, 0.4) 100%);
  /* IE10+ */
  background: linear-gradient(135deg, rgba(107, 57, 172, 0.4) 0%, rgba(200, 254, 206, 0.4) 100%);
  /* W3C */
}
.project .content {
  position: relative;
  opacity: 0;
  text-align: center;
  vertical-align: middle;
  display: inline-block;
  width: 100%;
  min-height: 165px;
  word-break: break;
  opacity: 0.5s;
  filter: alpha(opacity=50s);
  -webkit-perspective: 300px;
  -moz-perspective: 300px;
  -o-perspective: 300px;
  -ms-perspective: 300px;
  perspective: 300px;
}
.project h3 {
  opacity: 0;
  font-weight: 600;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
  -moz-transition: opacity 0.2s, -moz-transform 0.2s;
  -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
  transition: opacity 0.2s, transform 0.2s;
}
.project p {
  font-size: 1em;
  color: #FFFFFF;
  opacity: 0;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
  -moz-transition: background-color 0.5s, opacity 0.5s 0.15s, -moz-transform 0.5s 0.15s;
  -webkit-transition: background-color 0.5s, opacity 0.5s 0.15s, -webkit-transform 0.5s 0.15s;
  transition: background-color 0.5s, opacity 0.5s 0.15s, transform 0.5s 0.15s;
}
.project .btn {
  opacity: 0;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
  -moz-transition: background-color 0.3s, opacity 0.3s 0.3s, -moz-transform 0.3s 0.3s;
  -webkit-transition: background-color 0.3s, opacity 0.3s 0.3s, -webkit-transform 0.3s 0.3s;
  transition: background-color 0.3s, opacity 0.3s 0.3s, transform 0.3s 0.3s;
  color: #fff;
  border-color: #fff;
}
</style>
</body>

</html>


