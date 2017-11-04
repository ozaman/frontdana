<!DOCTYPE html>
<!-- saved from url=(0070)http://demos.creative-tim.com/material-kit-pro/examples/ecommerce.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./files/images/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>danatoursasia.com</title>
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
    
</head>

<body ng-app="myApp" ng-controller="main" ">
    <!-- style="background: url(./files/images/bg-wrap.jpg) top left repeat-x; -->
  <style>
    .navbar{
      border-radius: 0px;
    }
    .navbar-nav>li>a {
            text-transform: capitalize !important;
    /*color: #333 !important;*/
  </style>

  <nav class="navbar navbar-default  navbar-color-on-scroll navbar-transparent" color-on-scroll="100" id="sectionsNav">
    <!-- navbar-fixed-top -->
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <!-- <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
            <a  href="index.php" class="navbar-brand"> 
                        <img src="./files/images/logo.png" width="50">
                    </a>
          </div>

          <!-- <div class="collapse navbar-collapse">
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
                            </ul>
                           

                        </li>
                    </ul>            
                </div> -->
      </div>
    </nav>
    <div class="page-header header-filter header-small" data-parallax="true" style="background-size: 100%;background-image: url(./files/images/sunset-1.jpg);background-repeat-x: no-repeat;background-repeat-y: no-repeat; transform: translate3d(0px, 0px, 0px);    background-size: 100% 100%;">
        <!-- min-height: 90vh; -->
        <div >  
            <div class="container" style="padding-top: 60px ">
                <div class="row">
                    <div class="col-md-12 col-xs-12 ">
                        <div class="brand">
                            <h1 class="title" style="text-align: center;"><span style="color: #ffd400">D</span>ana Tours and Travel!</h1>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(&quot;files/images/bg0.jpg&quot;); transform: translate3d(0px, 0px, 0px);" id="page-headerpopular">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="brand">
            <h1 class="title">Travel Service!</h1>
            <h4>IMRON PHUKET SPEEDBOAD TOUR  <b>LTD.</b> ,PART.</h4>
          </div>
        </div>
      </div>
    </div>
  </div> -->





    <!-- <div id="header-636bc237837a4d9b38e27ea5831a8004">
        <nav class="navbar navbar-color-on-scroll fixed-top navbar-transparent" color-on-scroll="100" id="sectionsNav" style="    border-top: #008933 solid 4px;">
            <div class="container">        
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
        </nav> -->
    <!-- </div>   -->
   <!--  <div class="page-header ">
        <div style="background-size: 100%;background-image: url(./files/images/slide.jpg);background-repeat-x: no-repeat;background-repeat-y: no-repeat; transform: translate3d(0px, 0px, 0px);min-height: 65vh;">  
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="brand">
                            <h1 class="title">Travel Service!</h1>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section>
        <div class="main main-raised">
            <div class="section " style="padding-top: 5px" align="center">  
                <div class="container">
                    <div class="tm-section-header section-margin-top" id="popular">
                        <!-- <div class="col-lg-4 col-md-3 col-sm-3"><hr></div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
                            <h2 class="tm-section-title">Popular Packages</h2>
                            <div class="separator separator-danger">✻</div>
                        </div>
                       <!--  <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>   -->
                    </div>
                    <div class="row">
                        <div style="width: 100%" align="center">
                            <div class="col-sm-6 col-md-4 " ng-repeat="item in tourpopular" >
                                <div class="card card-product card-plain card-rotate" ng-click="getDetailtour(item.id)">
                                    <div class="rotating-card-container">
                                        <div class="card-image">
                                            <div class="front">
                                                <img class="img" src="./data/files/upload/tour/icon/{{item.icon}}"  style="height: 280px">
                                                <div class="colored-shadow" style="background-image: url(&quot;files/images/dolce.jpg&quot;); opacity: 1;"></div>
                                            </div>
                                            <div class="back back-background" style="height: 376px; width: 360px; background-image: url(&quot;files/images/page1_img1.jpg&quot;);">
                                                <div class="card-content">
                                                    <div class="footer text-center">
                                                      <a href="view.php#?data={{item.id}}" class="btn  btn-white">
                                                        <i class="material-icons">info</i> View
                                                      </a>                                                     
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="" ng-bind="item.name"></a>
                                        </h4>
                                       <!--  <p class="card-description" ng-bind="item.description" style="height: 125px;overflow: hidden;">                                          
                                        </p> -->
                                        <div class="footer">                                            
                                            <div class="" style="display: inline-block;" align="right">
                                                <div type="button" rel="tooltip" title="" class="btn btn-simple " data-original-title="place" style=" margin-top: -7px; text-transform: none; /* margin: -2px; */ font-size: 16px; padding: 0; margin-left: -38px;">
                                                    <i class="material-icons" style="line-height: 2;">place</i>
                                                    <span ng-bind="item.city"></span>
                                                </div>
                                            </div>
                                            <div class="price-container" align="left" style="float: right;">
                                                <span class="price price-old"> <!-- 12,500 --></span>
                                                <span class="price price-new" ng-bind="item.cost_web | currency:'':0 "> </span> / Package
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                </div>                
            </div>
        </div>
    </section> <!-- end-main-raised -->
   

    <div class="section section-blog" id="area" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                
            </div>   
            <div class="row" style=" border-radius: 4px 4px 0 0 ; margin-top: 30px;">

                <div class="col-md-12">
<div style="background: #fff; width: 170px; font-weight: 400; border-radius: 8px 8px 0 0; height: 50px; line-height: 54px; text-align: center;">
                  <div class="section-title" style="font-size: 18px;">Tour</div>
                </div>
                  <div class="" style="
    margin-bottom: 60px;
    border-top: 4px solid #00bcd4;">  
                    <ul class="nav-pills" role="tablist" style="padding-left: 0;">
                        <li class="" id="Phuket"><a href="#pill1" data-toggle="tab" aria-expanded="true" ng-click="getTourforarea('Phuket');show = !show">Phuket</a></li>
                        <li class="" id="Phuket"><a href="#pill2" data-toggle="tab" aria-expanded="true" ng-click="getTourforarea('Bangkok');show = !show">Bangkok</a></li>
                        <li class="" id="Phangnga"><a href="#pill3" data-toggle="tab" aria-expanded="false" ng-click="getTourforarea('Phang nga');show = !show">Phang nga</a></li>
                        <li class="" id="Krabi"><a href="#pill4" data-toggle="tab" aria-expanded="false" ng-click="getTourforarea('Krabi');show = !show">Krabi</a></li>
                        <li class="" id="PhiPhiisland"><a href="#pill5" data-toggle="tab" aria-expanded="false" ng-click="getTourforarea('Phi Phi island');show = !show">Phi Phi island</a></li>
                        <li class="active" id="PhiPhiisland"><a href="#pill6" data-toggle="tab" aria-expanded="false" ng-click="getTourforareaall('All');show = !show">All</a></li>
                        <!-- <li class="" aling="right" id="PhiPhiisland" style="float: right;"><a href="#pill7" data-toggle="tab" aria-expanded="false" ng-click="getTourforarea('Phi Phi island');show = !show">More..</a></li> -->
                       <!--  <li class="" id="All"><a href="#pill3" data-toggle="tab" aria-expanded="false" ng-click="getTourforareaall('All');show = !show">All</a></li> -->
                    </ul> 
                </div>
              </div>
            </div>    
            <div class="row" style="padding: 0 10px; border-radius: 4px; ">

                <div class="col-sm-6 col-md-3" ng-repeat="item in dataTour" id="fade-in-out" >
                    <div class="card card-blog" ng-click="getDetailtour(item.id)">
                        <div class="card-image" >
                            <img src="./data/files/upload/tour/icon/{{item.icon}}" style="height: 180px" >
                        </div>
                        <div class="card-content">
                            <h6 class="category text-rose" ng-bind="item.name"></h6>                      
                            
                        </div>
                        <!-- <div class="description-package">
                            <p class="card-description" ng-bind="item.description"></p>
                        </div> -->
                        <div class="cost-pro">

                           
                            <div >
                            <i class="material-icons" style="display: inline-block; line-height: 0;">place</i>
                            <p class="pro-item" ng-bind="item.city" align="left" ></p>
                        </div>
                         <div style="    text-align: right;"><span ng-bind="item.cost_web | currency:'':0 " style=" color: #FF5722;"></span><span> /person</span></div>

                            
                        </div>
                    </div>
                </div>
            </div> 
 <style >
        .card-product:not(.card-plain) .card-image {
    padding: 15px;
}
.card-image2 {
height: 60%;
    z-index: 1;
    margin-left: 15px;
    margin-right: 15px;
    }
    </style>
          
             <!-- <h2 class="section-title">Transfer</h2> -->
            <div class="row" style=" border-radius: 4px;margin-top: 30px ">
    <section style="    margin-top: -15px;">
    <div class="pro_list first mt15 clearfix freePackage box-transfer">
        <div class="col-md-12">
<div style="background: #fff; width: 170px; font-weight: 400; border-radius: 8px 8px 0 0; height: 50px; line-height: 54px; text-align: center;">
                  <div class="section-title" style="font-size: 18px;">Transfer</div>
                </div>
                  <div class="" style="
    margin-bottom: 60px;
    border-top: 4px solid #ff9800;">  
                    <ul class="nav-transfer" role="tablist" style="padding-left: 0;">
                        <li class="" id="Phuket"><a href="#transfer1" data-toggle="tab" aria-expanded="true" ng-click="getTransferforarea('Phuket');show = !show">Phuket</a></li>
                        <li class="" id="Phuket"><a href="#transfer2" data-toggle="tab" aria-expanded="true" ng-click="getTransferforarea('Bangkok');show = !show">Bangkok</a></li>
                        
                        <li class="active" id="PhiPhiisland"><a href="#transfer6" data-toggle="tab" aria-expanded="false" ng-click="getTransferforareaall();show = !show">All</a></li>
                        <!-- <li class="" aling="right" id="PhiPhiisland" style="float: right;"><a href="#transfer7" data-toggle="tab" aria-expanded="false" ng-click="getTransfermore();show = !show">More..</a></li> -->
                       <!--  <li class="" id="All"><a href="#pill3" data-toggle="tab" aria-expanded="false" ng-click="getTourforareaall('All');show = !show">All</a></li> -->
                    </ul> 
                </div>
              </div>
              
   
   <!--  <div class="mod-tab clearfix" id="more_tab">
                        <a href="javascript:void(0);" class="current-transfer" cityid="58" id="link58">Phuket</a>
                        <a href="javascript:void(0);" class="" cityid="59" id="link59">Bangkok</a>
                        
                        <a align="right" href="//english.ctrip.com/hotels/list?city=58" target="_blank" id="btnMore">More &gt;</a>
                </div> -->
    <div class="fr pro_fr">

      <div class="pro_lb list_ad " id="show1">
            <div class="ection-our-projects">
                
               
            <div ng-repeat="item in dataTransfer">
                <div class="col-sm-6 col-md-3">
                        <div class="card card-product2" ng-click="getDetailtransfer(item.id)">
                            <div class="card-images">
                                <a href="#pablo">
                                    <img class="img rounded" src="./data/files/upload/transfer/icon/{{item.icon}}">
                                </a>
                            </div>
                            <div class="card-body">
                               <!--  <h6 class="category text-danger"  style="text-align: right;"></h6> -->
                                <div class="card-titles">
                                    <a href="#pablo" class="card-link"  ng-bind="item.name"></a>
                                </div>
                                <!-- <div class="card-description">
                                    <span>Pax:</span><span ng-bind="item.person"></span>
                                </div> -->
                                <div class="" style="position: absolute;
    /* height: 10%; */
    /* padding: 18px; */
    bottom: 15px;
    width: 96%;
    right: 2%;
    left: 2%;">
                                    <div style="float: left;"> 
                                        <i class="material-icons" style="display: inline-block; line-height: 0;">place</i><span ng-bind="item.province"></span>
                                    </div>
                                    <div class="price-container" style="text-align: right;">
                                        <span class="price" ng-if="item.province == 'Bangkok'" style="margin-right: 8px;">800</span>
                                        <span class="price"  style="margin-right: 8px;" ng-if="item.province == 'Phuket'">600</span>
                                        <label class="f12" style="font-size: 16px;"> THB</label>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- <div class="col-md-3">
                <div class="card-big-shadow">
                  <div class="coloured-cards card"> 
                    <div>
                    <img class="lazy1" src="./data/files/upload/transfer/icon/{{item.icon}}" style="display: block;">
                </div>
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;" ng-bind="item.name"></p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                       
                        <label class="js_curMonery_exten " ng-bind="item.price  | currency:'':0 "></label>
                        <label class="f12">THB</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </div>
              </div>
                </div> -->
            </div>
        </div>
  </div>
  </section>
</div>


<!-- <div class="row">
    <div style="background: #fff; width: 170px; font-weight: 400; border-radius: 8px 8px 0 0; height: 50px; line-height: 54px; text-align: center;    margin-top: 30px;">
        <div class="section-title" style="font-size: 18px;">Hotel</div>
    </div>
</div> -->
<div class="row" style="margin-bottom: 50px;  border-radius: 4px; ">
    <div class="h-popular-hotel">               
        <div class="col-md-12">
<div style="background: #fff; width: 170px; font-weight: 400; border-radius: 8px 8px 0 0; height: 50px; line-height: 54px; text-align: center;">
                  <div class="section-title" style="font-size: 18px;">Hotels</div>
                </div>
                  <div class="" style="
    margin-bottom: 60px;
    border-top: 4px solid #1171b7;">  
                    <ul class="nav-hotel" role="tablist" style="padding-left: 0;">
                        <li class="" id="Phuket"><a href="#hotel1" data-toggle="tab" aria-expanded="true" ng-click="getHotelforarea('Phuket');show = !show">Phuket</a></li>
                        <li class="" id="Phuket"><a href="#hotel2" data-toggle="tab" aria-expanded="true" ng-click="getHotelforarea('Bangkok');show = !show">Bangkok</a></li>
                        
                        <li class="active" id="PhiPhiisland"><a href="#hotel6" data-toggle="tab" aria-expanded="false" ng-click="getHotelforareaall();show = !show">All</a></li>
                        <!-- <li class="" aling="right" id="PhiPhiisland" style="float: right;"><a href="#hotel7" data-toggle="tab" aria-expanded="false" ng-click="getHotelmore();show = !show">More..</a></li> -->
                       <!--  <li class="" id="All"><a href="#pill3" data-toggle="tab" aria-expanded="false" ng-click="getTourforareaall('All');show = !show">All</a></li> -->
                    </ul> 
                </div>
              </div>
       
        <div class="h-data-list section-our-projects" id="div_top_sell"> 
            <div>
                <div class="row">
                     <div class="col-md-4"  ng-click="getDetailhotel(1)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                 <img src="./data/files/hotel/ho1/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >WYNDHAM GRAND PHUKET KALIM BAY</h4>
                                        <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                    <div class="col-md-4"  ng-click="getDetailhotel(2)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                <img src="./data/files/hotel/ho2/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >VILLA TANTAWAN</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                    <div class="col-md-4"  ng-click="getDetailhotel(3)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                <img src="./data/files/hotel/ho3/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >PHUKET GRACELAND RESORT AND SPA</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-md-6" >
                            <div class="project" ng-click="getDetailhotel(4)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                                 <img src="./data/files/hotel/ho4/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >NOVOTEL PHUKET RESORT</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                   
                    <div class="col-md-6"  ng-click="getDetailhotel(5)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                 <img src="./data/files/hotel/ho5/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >THE PAVILIONS PHUKET</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"  ng-click="getDetailhotel(7)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                 <img src="./data/files/hotel/ho7/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >PUMERIA RESORT PHUKET</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                    <div class="col-md-4"  ng-click="getDetailhotel(8)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                 <img src="./data/files/hotel/ho8/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >SANTHIYA RESORT AND SPA</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                    <div class="col-md-4"  ng-click="getDetailhotel(9)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                 <img src="./data/files/hotel/ho9/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >RAMADA PHUKET DEEVANA</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6"  ng-click="getDetailhotel(10)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                 <img src="./data/files/hotel/ho10/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >SLEEP WITH ME DESIGN HOTEL@PATONG</h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>

                    <div class="col-md-6"  ng-click="getDetailhotel(11)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                <img src="./data/files/hotel/ho11/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >ANGSANA LAGUNA PHUKET </h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"  ng-click="getDetailhotel(13)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                <img src="./data/files/hotel/ho13/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >Holiday Inn Express Phuket Patong Beach Central </h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div><div class="col-md-4"  ng-click="getDetailhotel(14)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 1">
                            <div class="project">
                                <img src="./data/files/hotel/ho14/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >BANYAN TREE PHUKET </h4>
                                         <p >Phuket</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                    <div class="col-md-4"  ng-click="getDetailhotel(12)" ng-if="dataHotelcheck == 0 || dataHotelcheck == 2">
                            <div class="project">
                                <img src="./data/files/hotel/ho12/1.jpg">
                                <a class="over-area" href="#gaia">
                                    <div class="content">
                                        <!-- <label class="label label-info label-fill">App Development</label> -->
                                        <h4 >LEBUA TOWER CLUB BANGKOK </h4>
                                         <p >Bangkok</p>
                                        <div style="text-align: right;"><span ng-bind="item.sale_price  | currency:'':0 " style="color: #f44336;
            font-size: 16px;
            font-weight: 400;"></span></div>
                                    </div>
                                </a>
                            </div>
                            
                    </div>
                </div>
                    

                
        </div>
            <!-- <div class="col-md-6">
                    <div class="project">
                        <img src="http://demos.creative-tim.com/gaia-bootstrap-template-pro/assets/img/project-3.jpg">
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-info label-fill">App Development</label>
                                <h2>Analytics App Android</h2>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project">
                        <img src="http://demos.creative-tim.com/gaia-bootstrap-template-pro/assets/img/project-3.jpg">
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-info label-fill">App Development</label>
                                <h2>Analytics App Android</h2>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project">
                        <img src="http://demos.creative-tim.com/gaia-bootstrap-template-pro/assets/img/project-3.jpg">
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-info label-fill">App Development</label>
                                <h2>Analytics App Android</h2>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div> -->
                

            <!-- <div ng-repeat="item in hotel">
          <div class="col-md-6">
            <div class="hotel-link " >
                <a href="" class="hotel-img" rel="nofollow" ">
                    <img src="//dimg04.c-ctrip.com/images/hotel/75000/74613/00a2266ac95f4c3fb18f39a67a6780e7_R_180_180.jpg" alt="East Hong Kong Hong Kong">
                </a>
                <div class="hotel-info">
                    <h3 class="hotel-name">
                        <strong>
                            <a href="" rel="nofollow" ng-bind="item.hotel_name"></a>
                        </strong>
                    </h3>
                    <div class="hotel-lm">
                        <span class="level">
                            <i class="c-icon icon-star icon-star-4"></i>
                        </span>
                        <span class="location" >aa
                           
                        </span>
                    </div>
                    <div class="hotel-grade">
                        <div class="pack-bubble self-review" >
                            <i class="h-icon icon-user-s"></i>
                              <span class="txt txt-block" ng-bind="item.topic"></span>
                        </div> 
                        <div class="server-box">
                            <span class="h-tag"><i class="h-icon icon-wifi"></i>Wi-Fi in public areas</span>
                            <span class="h-tag"><i class="h-icon icon-pool"></i>Swimming Pool</span>
                            <span class="h-tag"><i class="h-icon icon-gym"></i>Gym</span>
                            <span class="h-tag"><i class="h-icon icon-bar"></i>Bar</span>
                        </div>
                    </div>
                    <div class="hotel-tag"></div>
                    <div class="price-box">                        
                        <div class="c-price">
                            <dfn class="price-currency">THB</dfn>
                            <span class="price-num" ng-bind="item.sale_price">1,707</span>
                        </div>
                        <div class="select-btn">
                            <a class="c-btn btn-key" href="" rel="nofollow" >View</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          </div>
 -->
         

        </div>
      </div>
    </div>

            
         
<style>
/*****************************************************/
/********************NAV TREANSFER********************/
/*****************************************************/

.nav-transfer>li.active>a, .nav-transfer>li.active>a:focus, .nav-transfer>li.active>a:hover {
    background-color: #ff9800;
}
.nav-transfer>li.active>a, .nav-transfer>li.active>a:focus, .nav-transfer>li.active>a:hover {
    background-color: #ff9800;
    color: #FFF;
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
}
.nav-transfer>li>a {
    line-height: 24px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 500;
    min-width: 100px;
    text-align: center;
    color: #555;
    transition: all .3s;
}
.nav-transfer>li>a {
     border-radius: 4px; 
    padding: 14px 20px;
}

.nav-transfer>li> {
    display: inline-block;
}
.nav-transfer>li {
    float: left;
}
.active {
     background: #00bcd4; 
    color: #fff;
}
/*****************************************************/
/************************END**************************/
/*****************************************************/



/*****************************************************/
/***********************NAV HOTEL*********************/
/*****************************************************/

.nav-hotel>li.active>a, .nav-hotel>li.active>a:focus, .nav-hotel>li.active>a:hover {
    background-color: #1171b7;
}
.nav-hotel>li.active>a, .nav-hotel>li.active>a:focus, .nav-hotel>li.active>a:hover {
    background-color: #1171b7;
    color: #FFF;
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
}
.nav-hotel>li>a {
    line-height: 24px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 500;
    min-width: 100px;
    text-align: center;
    color: #555;
    transition: all .3s;
}
.nav-hotel>li>a {
     border-radius: 4px; 
    padding: 14px 20px;
}

.nav-hotel>li> {
    display: inline-block;
}
.nav-hotel>li {
    float: left;
}
.active {
     background: #1171b7; 
    color: #fff;
}
/*****************************************************/
/***********************END***************************/
/*****************************************************/


/*****************************************************/
/********************ANIMATE HOTEL********************/
/*****************************************************/
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

/************************************************/
/*************************END********************/
/************************************************/

.card-big-shadow {
    /*max-width: 320px;*/
    position: relative;
}
.nav-pills>li>a {
    /*border-radius: 4px;*/
    padding: 14px 20px;
}
    .card-big-shadow:before {
    background-image: url(./files/images/shadow.png);
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: 1%;
    content: "";
    display: block;
    left: -13%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}
.coloured-cards .card {
     margin-top: 30px; 
}
.coloured-cards .card {
     margin-top: 30px; 
}
.coloured-cards .card {
     background-color: #fff;
     border-radius: 0px; 
}

</style>

       
       
    <script type="text/javascript">
        var reviewLab = 'Reviews';
    </script>
<i class="ico_loading_white_48"></i>
</ul>
                
            </div>
                        
                    </div>

        </div>
    </div><!-- section -->
    <style>
  .mt15 {
    margin-top: 15px;
}
.pro_list .pro_fl {
    width: 208px;
    background: #fb833f;
    min-height: 478px;
}
.pro_list .pro_fl .pro_icon {
    position: absolute;
    top: 0;
    left: 0;
}
.pro_list .pro_fl .pro_choice {
    position: absolute;
    right: -2px;
    top: 121px;
}
.pro_list .pro_fl .pro_choice li {
    background: #fd9b60;
    border-radius: 5px;
    width: 81px;
    height: 37px;
    line-height: 37px;
    font-size: 16px;
    padding-left: 15px;
    margin-top: 15px;
    cursor: pointer;
    border-radius: 5px;
    border: 1px solid #fdc6a7;
    overflow: hidden;
}
.pro_choice li h3 {
    line-height: 37px;
}
.pro_list .pro_fl .pro_choice li a {
    color: #fff;
}
.pro_list .pro_fl .pro_choice li.cur {
    background: url(../img/index_icon.png) no-repeat;
    background-position: 0 -68px;
    height: 47px;
    border: 0;
    line-height: 47px;
}
.pro_list .pro_fr {
    /*width: 696px;*/
    /*border-top: 2px solid #fda93b;*/
}
.box-transfer .mod-tab {
  border-top: 4px solid #fda93b;
    /*border-top: 4px solid #1171b7;*/
    margin-bottom: 8px;
    height: 38px;
    overflow: hidden;
}
  .nav-tours{  margin-bottom: 25px;
    border-top: 4px solid #00bcd4;
    /* border-top: 4px solid #1171b7; */
    margin-bottom: 8px;
    height: 38px;
    overflow: hidden;
  }
.active{
 /*background: #00bcd4;*/
 color: #fff;
}
.nav-tours li{
  display: inline-block;
    padding: 10px;
}
.mod-tab a.current-transfer, .mod-tab a.current-transfer:hover
.box-transfer .mod-tab a{
  background-color: #fda93b;
}
.list_ad ul {
    overflow: hidden;
}
.pro_list .pro_fr ul li {
    margin: 15px 0 0 24px;
    transition: all .2s ease;
    -webkit-backface-visibility: hidden;
    -webkit-transform-style: preserve-3d;
    height: 224px;
}

.list_ad ul li:first-child {
    margin-left: 0;
}

.list_ad ul li {
    float: left;
    width: 208px;
    margin-left: 24px;
    position: relative;
    overflow: hidden;
}
.pro_list .pro_fr ul li .img {
    height: 138px;
    display: block;
}
.list_ad ul li img {
    transition: all ease .5s;
    display: block;
}
.list_ad ul li .proinfo {
    padding: 0 5px 10px;
}
.mt10 {
    margin-top: 10px;
}

.f14 {
    font-size: 14px;
    line-height: 21px;
}
.mt5 {
    margin-top: 5px;
}
.pri {
    font-size: 16px;
    color: #ea6948;
}
.pro_list .pro_fr ul li .js_curCode {
    font-size: 12px;
}
.f12 {
    font-size: 12px;
    line-height: 18px;
}
.pro_list .pro_fl .pro_moer .link {
    float: left;
    margin-left: -2px;
    width: 70px;
}
@charset "UTF-8";

.iconfont{
  font-family:"iconfont"!important;font-size:18px;font-style:normal;color:#4ea9f2;margin-right:8px;position:relative;top:-1px;margin-left:1px
}
  .fl{
  float:left
}
  .fr{
  /*float:right*/
}
  .tl{
  text-align:left
}
  .tc{
  text-align:center
}
  .tr{
  text-align:right
}
  .pos_r{
  position:relative
}
  .pos_a{
  position:absolute
}
  .clearfix:after{
  content:".";display:block;height:0;clear:both;visibility:hidden
}
  .oh{
  overflow:hidden
}
  .block{
  display:block
}
  .hide,.disabled{
  display:none
}
  .bold{
  font-weight:bold
}
  .normal{
  font-weight:normal
}
  .text_ellipsis{
  overflow:hidden;text-overflow:ellipsis;white-space:nowrap
}
  .ipt{
  border:1px #ccc solid;background:#FFF;border-radius:3px;height:36px;position:relative
}
  .ipt input{
  height:36px;line-height:36px;border:0;padding:0 5px
}
  .ipt .icon_Calendar,.ipt .icon_blue_location{
  position:absolute;right:7px;top:8px
}
  .ipt .icon_timer{
  position:absolute;right:8px;top:11px
}
  .template{
  display:none
}
  .hand{
  cursor:pointer
}
  .center{
  margin:0 auto
}
  .t_2em{
  text-indent:2em
}
  .t_4em{
  text-indent:4em
}
  .t_6em{
  text-indent:6em
}
  .pt{
  cursor:pointer
}
  .ajax-loader{
  position:absolute;left:50%;top:50%
}
  .w925{
  width:925px
}
  .w875{
  width:875px
}
  .w290{
  width:290px
}
  .w750{
  width:750px
}
  .w600{
  width:600px
}
  .w560{
  width:560px
}
  .w420{
  width:420px
}
  .w360{
  width:360px
}
  .w280{
  width:280px
}
  .w260{
  width:260px
}
  .w248{
  width:248px
}
  .w220{
  width:220px
}
  .w200{
  width:200px
}
  .w150{
  width:150px
}
  .w120{
  width:120px
}
  .w110{
  width:110px
}
  .w90{
  width:90px
}
  .w60{
  width:60px
}
  .f-normal{
  font-style:normal
}
  .f-e{
  font-family:verdana
}
  .f8{
  font-size:8px;line-height:15px
}
  .f12{
  font-size:12px;line-height:18px
}
  .f14{
  font-size:14px;line-height:21px
}
  .f16{
  font-size:16px;line-height:24px
}
  .f18{
  font-size:18px;line-height:27px
}
  .f20{
  font-size:20px;line-height:30px
}
  .f24{
  font-size:24px;line-height:36px
}
  .f26{
  font-size:26px;line-height:36px
}
 

 
  .mt3{
  margin-top:3px
}
  .mt5{
  margin-top:5px
}
  .mt10{
  margin-top:10px
}
  .mt12{
  margin-top:12px
}
  .mt15{
  margin-top:15px
}
  .mt20{
  margin-top:20px
}
  .mt25{
  margin-top:25px
}
  .mt30{
  margin-top:30px
}
  .mt35{
  margin-top:35px
}
  .mt50{
  margin-top:50px
}
  .ml5{
  margin-left:5px
}
  .ml10{
  margin-left:10px
}
  .ml15{
  margin-left:15px
}
  .ml20{
  margin-left:20px
}
  .ml25{
  margin-left:25px
}
  .ml30{
  margin-left:30px
}
  .ml40{
  margin-left:40px
}
  .ml45{
  margin-left:45px
}
  .ml50{
  margin-left:50px
}
  .mr2{
  margin-right:2px
}
  .mr3{
  margin-right:3px
}
  .mr5{
  margin-right:5px
}
  .mr10{
  margin-right:10px
}
  .mr15{
  margin-right:15px
}
  .mr20{
  margin-right:20px
}
  .mr25{
  margin-right:25px
}
  .mr30{
  margin-right:30px
}
  .mr40{
  margin-right:40px
}
  .mr50{
  margin-right:50px
}
  .mb5{
  margin-bottom:5px
}
  .mb10{
  margin-bottom:10px
}
  .mb15{
  margin-bottom:15px
}
  .mb20{
  margin-bottom:20px
}
  .mb25{
  margin-bottom:25px
}
  .mb30{
  margin-bottom:30px
}
  .mb50{
  margin-bottom:50px
}
  .pad010{
  padding:0 10px
}
  .pad10{
  padding:10px
}
  .pad20{
  padding:20px
}
  .pad30{
  padding:30px
}
  .pb20{
  padding-bottom:20px
}
  .pb10{
  padding-bottom:10px
}
  .white{
  color:#FFF
}
  .black{
  color:#000
}
  .blue,.siteTop .areaSelect li a.cur{
  color:#4ea9f2
}
  .lightblue{
  color:#1695ff
}
  .orange{
  color:#e86e1d
}
  .grey{
  color:#a8a8a8
}
  .darkgrey{
  color:#757575
}
  .titlegrey{
  color:#666
}
  .red{
  color:red!important
}
  .green{
  color:green
}
  .error{
  color:#d9534f
}
  .success{
  color:#449d44
}
  a{
  text-decoration:none
}
  a.link_yel{
  color:#fcca7d;transition:all .3s ease-in-out
}
  a.link_yel:hover{
  color:#ffb748
}
  a.link_grey{
  color:#a8a8a8;transition:all .3s ease-in-out
}
  a.link_grey:hover{
  color:#666
}
  a.link_blue{
  color:#1b76bd;transition:all .3s ease-in-out
}
  a.link_blue:hover{
  color:#05508a
}
  a.link_lightblue{
  color:#1695ff;transition:all .3s ease-in-out
}
  a.link_lightblue:hover{
  color:#1695ff
}
  a.link_orange{
  color:#f46e00;transition:all .3s ease-in-out
}
  a.link_orange:hover{
  color:#ff973c
}
  .horiz ul{
  overflow:hidden
}
  .horiz ul li{
  float:left
}
  .horiz ul li i.gif{
  height:20px;position:absolute;top:-8px;right:0;z-index:10
}
  .horiz ul li i.gif img{
  border-radius:10px
}
  .list-grey th{
  text-align:left;background:#eee;font-size:14px;border-right:1px #fff solid;padding:5px 10px
}
  .list-grey td{
  text-align:left;border-bottom:1px #EEE solid;padding:10px
}
  .list-grey-normal{
  border-top:1px #c3c3c3 solid;border-left:1px #c3c3c3 solid
}
  .list-grey-normal td{
  border-right:1px #c3c3c3 solid;border-bottom:1px #c3c3c3 solid;padding:15px 20px;line-height:21px
}
  .table-blue{
  border:1px #d8d8d8 solid;background:#FFF;border-radius:5px
}
  .table-blue tr th,.table-blue tr td{
  border-top:1px #d8d8d8 solid;border-left:1px #d8d8d8 solid;padding:10px;text-align:left
}
  .table-blue tr th:first-child,.table-blue tr td:first-child{
  border-left:none
}
  .table-blue tr th.noborder,.table-blue tr td.noborder{
  border-left:none
}
  .table-blue tr th{
  background:#ebf5fe
}
  .table-blue tr:first-child th,.table-blue tr:first-child td{
  border-top:0
}
  .dataList_blue{
  border:1px #a4d7ff solid;border-radius:5px;background:#FFF
}
  .dataList_blue ul{
  overflow:hidden;padding:10px 0;border-top:1px #bdddf6 solid
}
  .dataList_blue ul li{
  float:left;padding:1px 10px;border-left:1px #bdddf6 solid
}
  .dataList_blue ul li:first-child{
  border-left:none
}
  .dataList_blue ul.dataList_blue_head{
  background:#ebf5fc;border-radius:5px 5px 0 0;border-top:0
}
  .dataList_blue ul.dataList_blue_head li{
  color:#389ae6
}
  .dataList_blue ul.dataList_blue_head li i{
  vertical-align:middle
}
  .dataList_order{
  border:1px #dcdddf solid;border-radius:5px;background:#FFF
}
  .dataList_order ul{
  overflow:hidden;border-top:1px #d8d8d8 solid;clear:both
}
  .dataList_order ul.dataList_order_head{
  background:#ebf5fe;border-radius:5px 5px 0 0;border-top:0
}
  .dataList_order ul li{
  float:left;padding:10px 20px;border-left:1px #d8d8d8 solid
}
  .dataList_order ul li:first-child{
  border-left:none
}
  .boxRadiu{
  border:1px #cbcbcb solid;background:#FFF;padding:7px;border-radius:5px
}
  .btn-insur{
  background:#fcb426;color:#2c2c2c;font-size:14px;text-decoration:none;display:block;padding:0 30px;transition:all .3s ease-in-out
}
  .btn-insur:hover{
  background:#ffc34d
}
  .btn-orange{
  background:#f77754;border-radius:3px;color:#FFF;text-decoration:none;display:block;text-align:center;transition:all .3s ease-in-out;margin-right:5px
}
  .btn-orange:hover{
  background:#ff5d34
}
  .btn-dark-orange{
  background:#ef9150;border-radius:5px;color:#FFF;text-decoration:none;display:block;text-align:center;transition:all .3s ease-in-out
}
  .btn-dark-orange:hover{
  background:#f97519
}
  .btn-white{
  background:#FFF;border-radius:5px;color:#a0a0a0;text-decoration:none;display:block;text-align:center;border:1px #a0a0a0 solid
}
  .btn-blue{
  border:1px #2ca0f3 solid;color:#2ca0f3;border-radius:30px;text-decoration:none;display:block;text-align:center;transition:all .3s ease-in-out
}
  .btn-blue:hover{
  border:1px #1081d2 solid;color:#1081d2
}
  .btn-grey{
  background:#b3b3b3;border-radius:5px;color:#FFF;text-decoration:none;display:block;text-align:center
}
  .btn-normal-blue{
  background:#519de9;border-radius:5px;color:#FFF;text-decoration:none;display:block;text-align:center;transition:all .3s ease-in-out
}
  .btn-normal-blue:hover{
  background:#2c83db
}
  .btn_blue{
  background:#008ff8;width:114px;height:35px;line-height:35px;color:#fff;font-size:14px;border-radius:2px;border:0;outline:0
}
  .btn_grey{
  background:#fafafa;width:114px;height:35px;line-height:35px;color:#666;font-size:14px;border-radius:2px;border:1px solid #e7e7e7;outline:0
}
  .icon{
  background-image:url(../img/icon_2016.png);background-repeat:no-repeat;display:inline-block;vertical-align:middle;margin-top:-3px
}
  .icon-delta-right{
  border:solid 4px transparent;display:inline-block;width:0;height:0;border-left-color:#f0970d
}
  .blueItem{
  background-position:-26px -12px;width:14px;height:12px
}
  .icon_shoppingCart{
  width:29px;height:22px;background-position:0 -33px
}
  .icon_pen{
  width:21px;height:21px;background-position:-29px -33px
}
  .icon_grey_pen{
  width:32px;height:32px;background-position:-12px -312px
}
  .icon_medal{
  width:23px;height:34px;background-position:0 -55px
}
  .icon_list{
  width:23px;height:26px;background-position:0 -89px
}
  .icon_blue_list{
  width:29px;height:33px;background-position:-114px -238px
}
  .icon_location{
  width:18px;height:28px;background-position:-23px -82px
}
  .icon_location_s{
  width:11px;height:17px;background-position:-183px -226px
}
  .icon_blue_location{
  width:16px;height:24px;background-position:-22px -228px
}
  .icon_earth{
  width:29px;height:29px;background-position:-44px -82px
}
  .icon_car{
  width:27px;height:21px;background-position:-130px -20px
}
  .icon_food{
  width:15px;height:23px;background-position:-178px -180px
}
  .icon_time{
  width:25px;height:25px;background-position:-156px -19px
}
  .icon_timer{
  width:20px;height:20px;background-position:-180px -41px
}
  .icon_blue_time{
  width:22px;height:22px;background-position:0 -228px
}
  .icon_bag{
  width:33px;height:39px;background-position:-81px -44px
}
  .icon_Tag{
  width:40px;height:33px;background-position:-114px -44px
}
  .icon_Hook{
  width:23px;height:23px;background-position:-156px -44px
}
  .icon_Fork{
  width:23px;height:23px;background-position:-156px -67px
}
  .icon_PointCircle{
  width:22px;height:22px;background-position:-73px -83px
}
  .icon-shield{
  background-position:0 0;width:26px;height:33px
}
  .icon-shield2{
  width:32px;height:41px;background-position:0 -115px
}
  .icon-shield3{
  width:33px;height:36px;background-position:0 -156px
}
  .icon_bill{
  width:31px;height:35px;background-position:-32px -111px
}
  .icon_Praise{
  width:42px;height:41px;background-position:-33px -146px
}
  .icon_blue_pen{
  width:42px;height:42px;background-position:-75px -146px
}
  .icon_Talk{
  width:32px;height:29px;background-position:-63px -111px
}
  .icon_Calendar{
  width:28px;height:20px;background-position:-117px -158px
}
  .icon_Prompt{
  width:15px;height:15px;background-position:-95px -93px
}
  .icon_Inform{
  width:15px;height:15px;background-position:-127px -77px
}
  .icon_Shopcart{
  width:29px;height:24px;background-position:-145px -158px
}
  .icon_white_Shopcart{
  width:29px;height:24px;background-position:-114px -215px
}
  .icon_white_Hook{
  width:49px;height:36px;background-position:0 -192px
}
  .icon_blue_Hook{
  width:21px;height:20px;background-position:-147px -271px
}
  .icon_orange_Hook{
  width:16px;height:16px;background-position:-95px -127px
}
  .icon_Circle{
  width:16px;height:16px;background-position:-95px -111px
}
  .icon_white_Circle{
  width:30px;height:30px;background-position:-98px -280px;line-height:30px;text-align:center;color:#FFF;font-size:16px;font-weight:bold
}
  .icon_white_heart{
  width:12px;height:10px;background-position:-117px -178px
}
  .icon_red_heart{
  width:12px;height:10px;background-position:-93px -212px
}
  .icon_white_2dcode{
  width:11px;height:11px;background-position:-129px -178px
}
  .icon_grey_2dcode{
  width:18px;height:18px;background-position:-182px -117px
}
  .icon_grey_Shopcart{
  width:18px;height:15px;background-position:-75px -192px
}
  .icon_grey_phone{
  width:15px;height:20px;background-position:-93px -192px
}
  .icon_white_s_phone{
  width:7px;height:13px;background-position:-181px -64px
}
  .icon_white_drop{
  width:8px;height:5px;background-position:-105px -83px
}
  .icon_search{
  width:16px;height:18px;background-position:-108px -192px
}
  .icon_grey_search{
  width:16px;height:18px;background-position:-184px 0
}
  .icon_white_Praise{
  width:19px;height:21px;background-position:-143px -192px
}
  .icon_grey_Praise{
  width:19px;height:21px;background-position:-124px -192px
}
  .icon_blue_Praise{
  width:19px;height:21px;background-position:-181px -95px
}
  .icon_Change{
  width:15px;height:16px;background-position:-73px -207px
}
  .icon_blue_Change{
  width:13px;height:12px;background-position:-114px -77px
}
  .icon_close{
  width:10px;height:10px;background-position:-95px -83px;cursor:pointer;transition:all .3s ease-in-out
}
  .icon_close:hover{
  transform:rotate(90deg)
}
  .starBox,.starWhiteBox{
  display:inline-block;width:75px;height:15px;vertical-align:middle;margin-top:-3px
}
 
  
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBliu9xPrAQcibmkptCc3bwlpM1M6MbgAs" async defer></script> -->
      <script type="text/javascript">
    $(document).ready(function () {
        
        $('body').addClass('body-home');
        $('#wrap').addClass('wrap-home');
        $('#contacts').addClass('selected');
        
        function initialize() {
            var myLatlng = new google.maps.LatLng(7.896348,98.295579);
            var mapOptions = {
                zoom: 13,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.SATELLITE 
            }
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Redsea Asia!'
            });
        }
        
        google.maps.event.addDomListener(window, 'load', initialize);
        
    });
</script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&libraries=places" async defer> </script> -->
    

<div class="subscribe-line subscribe-line-image" data-parallax="true" style="background-image: url(&#39;files/images/bg_body.jpg&#39;);" id="footers">
    <div class="container">
      <div class="row">
        <div class="col-md-4 " >
            <!-- col-md-offset-1 -->
          <h2 style="color: #fff">Contact Us</h2>
          <div class="contact" id="contact">             
            <ul >
              <li class="">Address: <a>100/16 Moo 5 , Soi 1 Chalernprakiet Rd., T.Rassada Muang Phuket Thailand 83000</a></li>
              <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 081-0808804</a> 
                <!-- <a href="tel:#" style="display: inline-block;">087-2794723</a> -->
            </li>
              <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> sales@danatoursasia.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-8 ">         
                  <div class="col-sm-12">                    
                        <div class="section">
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
                                            <input type="text" name="name" value="" placeholder="Michael Jordan" class="form-control form-control-plain" ng-model="name" style="color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control form-control-plain" ng-model="email" style="color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="subject" value="" placeholder="Say hi to you" class="form-control form-control-plain" ng-model="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="" placeholder="Say hi to you" class="form-control form-control-plain" ng-model="subject" style="color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="content" class="form-control form-control-plain" placeholder="Here you can write your nice text" rows="8" ng-model="message" style="color: #fff;"></textarea>
                                        </div>
                                        <div>
                                            <div class="col-md-2 col-md-offset-5">
                                                <button type="button" class="btn btn-danger btn-fill" ng-click="sendmailcontact()">
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

                </div>
              <!-- </form> -->
            <!-- </div> -->
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


    <!-- modal -->
    <div class="modal fade" id="contactmodal">
        <div class="modal-dialog">                       
            <div class="modal-content" style="/*background-image: url(files/images/bg_body.jpg); */  border: 1px solid;background-color: rgb(22, 40, 60);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                
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


  <!--   Core JS Files   -->



  <script type="text/javascript">
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
  </script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript"></script>
    <script src="files/js/angular-cookies.min.js" type="text/javascript"></script>
    <script src="files/js/angular-scroll.js" type="text/javascript"></script>
    <script src="files/js/main.js" type="text/javascript"></script>

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
</body> 

<style >
.obj3 {
    width: 132px;
    height: 134px;
    position: absolute;
    top: -60px;
    right: 50px;
    z-index: -8;
}

      
@media (min-width: 992px){

}
@media (min-width: 768px){


}
@media (min-width: 520px){


}
.navbar.navbar-transparent{
    color: #fff;
    margin: auto;
    position: absolute;
    z-index: 5;
    right: 1%;
    left: 1%;
}
.card-plain .card-image img {
    /*border-radius: 0px !important;*/
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
    min-height: 300px;
    cursor: pointer;
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
    color: #fff;
}
.main-raised{
box-shadow: none !important;
    /*margin: -200px 30px 0 !important;*/
}
.main{
    background-color: transparent;
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
     min-height: 410px 
}
.card-product2 {
     margin-top: 0;
     min-height: 340px 
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


<style>
page-inner {
    width: 1180px;
    margin: 0 auto;
}
.clearfix:before, .clearfix:after {
    content: "";
    display: table;
}
.m-box-side {
    float: left;
    width: 32%;
}
.m-box-main {
    float: right;
    width: 66%;
}
.m-popular-city {
    margin-bottom: 12px;
}
.page-inner .mod-tit {
    margin-bottom: 10px;
}
.mod-tit {
       text-align: left;
    font-size: 24px;
    font-weight: normal;
    /*margin-left: 40px;*/
}
.h-popular-list li {
    position: relative;
    float: left;
    width: 186px;
    height: 309px;
    background: #fff;
}
.h-popular-list li a {
    width: 100%;
    height: 100%;
    overflow: hidden;
    zoom: 1;
}
.h-popular-list .city-label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 8px 10px;
    background: #000;
    background: rgba(0,0,0,.6);
    color: #fff;
    line-height: 1.2;
    cursor: pointer;
}
.h-popular-list .city-label .city-name {
    font-size: 18px;
    display: block;
    font-weight: 400;
}
.h-popular-hotel .tit-info {
    position: absolute;
    right: 0;
    color: #666;
    font-size: 14px;
    top: 12px;
}
.h-popular-hotel .mod-tab {
        border-top: 4px solid #1171b7;
    margin-bottom: 8px;
    height: 38px;
    overflow: hidden;
}
.centered-message {
    margin: 40px 20px;
    text-align: center;
    color: #333;
        display: none;
}
h-popular-hotel .mod-tit {
    position: relative;
}

.page-inner .mod-tit {
    margin-bottom: 10px;
}
icon-loading-64-eee {
    width: 64px;
    height: 64px;
    background: url(//pic.english.c-ctrip.com/common_v3/loading-64-eee.gif) no-repeat;
}

.icon-loading {
    display: inline-block;
    font-size: 0;
    vertical-align: middle;
}
.h-data-list {
    padding-bottom: 1px;
    padding-left: 0px;
}
.h-data-list .hotel-link {
    position: relative;
    display: block;
    background-color: #fff;
    /*border: 1px solid #ccc;*/
    margin-bottom: 8px;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
    min-height: 175px;
}
.hotel-img {
    float: left;
    position: relative;
    width: 160px;
    min-height: 160px;
    margin-right: 0;
    padding: 8px 0 8px 8px;
}
.hotel-img img {
    width: 100%;
    height: 160px;
}
.hotel-info {
    margin-left: 180px;
}
.hotel-name {
    font-weight: 400;
    overflow: hidden;
    height: 28px;
    line-height: 36px;
    width: 70%;
    font-size: 16px;
}
.hotel-name strong {
    vertical-align: middle;
    margin-right: 0;
    display: block;
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.hotel-lm {
    margin-top: 2px;
}
.distance strong, .location, .location b {
    display: inline-block;
    vertical-align: middle;
}
.icon-location {
    width: 12px;
    height: 18px;
    background-position: -211px -328px;
}
.hotel-grade {
    margin-top: 10px;
    margin-bottom: 8px;
}
c-reviews-box .hotel-review {
    display: inline-block;
}

.hotel-review {
    font-size: 16px;
    display: block;
    line-height: 1.3;
}
.hotel-review .score {
    font-size: 20px;
    border-radius: 2px;
    background: #1171b7;
    color: #fff;
    padding: 1px 5px;
    font-family: Arial;
    margin-right: 5px;
    font-weight: 700;
}
.hotel-review .rating {
    color: #1171b7;
    font-weight: 700;
    margin-left: 5px;
}
.hotel-review .review-link {
    color: #999;
}

.review-link {
    font-size: 12px;
    color: #999;
}
.hotel-tag {
    position: absolute;
    top: 8px;
    right: 10px;
}
.price-box {
    width: 228px;
}

.price-box, .sold-box {
    position: absolute;
    right: 10px;
    bottom: 9px;
    text-align: right;
}
.c-price {
    font-size: 0;
}

.c-price {
    font-size: 12px;
}
.h-data-list .btn-key {
    height: 32px;
    line-height: 32px;
    padding: 0 18px;
    margin-left: 5px;
}

.btn-key {
    background-color: #ffb000;
    border-color: #e67e22;
}

.c-btn {
    cursor: pointer;
    padding: 0 1em;
    color: #fff;
    font-size: 16px;
    border-radius: 4px;
    vertical-align: middle;
    display: inline-block;
    box-sizing: border-box;
    height: 36px;
    line-height: 36px;
    border: 0 none;
    border-bottom: 2px solid #0c5284;
    background: #1171b7;
    text-align: center;
    white-space: nowrap;
}
.h-popular-list li+li, .h-popular-list li+li+li+li+li {
    width: 388px;
    height: 150px;
    margin: 0 0 9px 9px;
}
.h-popular-list li+li+li, .h-popular-list li+li+li+li {
    width: 165px;
}
.h-popular-list li a, .h-popular-list li img, .m-promo-list li a {
    display: block;
}
ul,ol{
   
    list-style: none;
}
img {
    border: 0 none;
    vertical-align: middle;
}
.m-box-side .mod-tit .tit-icon-box {
    width: 33px;
    height: 33px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
    vertical-align: top;
}

.m-viewed-hotel .tit-icon-box {
    background-color: #1171b7;
}
.m-box-side .tit-icon-box i, .m-index-contact .mod-tit i{
      margin: 10px auto 0;
    display: block;

}
.m-box-side .h-data-list {
    line-height: 1.4;
}

.h-data-list {
    padding-bottom: 1px;
}
.m-box-side .h-data-list li .hotel-link {
    font-size: 12px;
    background: #f7f7f7;
}

/*.h-data-list .hotel-link {
    position: relative;
    display: block;
    background-color: #fff;
    border: 1px solid #ccc;
    margin-bottom: 8px;
}*/
.m-box-side .h-data-list .hotel-img {
    margin-right: 6px;
    width: 80px;
    min-height: 80px;
    padding: 0;
}
.m-box-side .h-data-list .hotel-img img {
    height: 80px;
}

.hotel-img img {
    width: 100%;
    height: 160px;
}
.m-box-side .h-data-list .hotel-info {
    margin-left: 80px;
}

.hotel-info {
    margin-left: 180px;
}
.advantage-list li {
    position: relative;
    padding-left: 45px;
    margin-top: 18px;
}
.advantage-list li .icon-correct {
    position: absolute;
    top: 5px;
    left: 0;
}

.icon-correct {
    width: 32px;
    height: 28px;
    background-position: 0 -248px;
}
.advantage-list li h3 {
    font-size: 18px;
    font-weight: 400;
}
.advantage-list li p {
    font-size: 14px;
    line-height: 1.4;
}
.mod-tab a.current {
    color: #fff;
}

.mod-tab a.current, .mod-tab a.current:hover {
    background-color: #1171b7;
}

.h-popular-hotel .mod-tab a {
    padding: 8px 12px;
    margin-right: 0;
}
.mod-tab a {
    float: left;
    margin-right: 20px;
    padding: 8px 8px;
    font-size: 14px;
    line-height: 1.6;
}
.icon-diam-4, .icon-diam-3-half, .icon-star-4 {
    width: 64px;
}

.icon-star {
    width: 0;
    height: 16px;
    background-position: 0 -367px;
}

.c-icon {
    background-image: url(//pic.english.c-ctrip.com/picaresenglish/ibu/ibucommon/images/common/global-sprite.2ea50db1.png);
    background-repeat: no-repeat;
    background-position: 1024px 1024px;
}
.self-review .txt-block {
    display: inline-block;
    max-width: 412px;
    white-space: nowrap;
    vertical-align: -5px;
}

.self-review .txt {
    margin-right: 16px;
}
.h-data-list .server-box {
    width: 366px;
    overflow: hidden;
    height: 20px;
    margin-top: 8px;
}
.h-data-list .server-box .h-tag {
    color: #666;
    margin-right: 4px;
    display: inline-block;
    font-size: 12px;
}
h-data-list .server-box .h-icon {
    margin-right: 2px;
}

.icon-wifi {
    background-position: -101px -111px;
}
@media only screen and (max-width: 1180px){   
.page-inner {
    padding: 0 10px;
}
.h-popular-list li {
    width: 166px;
}
.h-popular-list li+li, .h-popular-list li+li+li+li+li {
    width: 343px;
}
.hotel-lm .level i {
    /* margin-right: 15px; */
}
}
@media only screen and (max-width: 1024px){
.m-box-side {
    width: 29%;
}
.m-box-main {
    width: 69%;
}
.h-popular-hotel .mod-tab a {
    padding: 8px 10px;
}
.self-review .txt-block {
    max-width: 300px;
}
.h-data-list .server-box {
    width: 290px;
}
}
@media only screen and (max-width: 1200px){

.hd-inner, .page-inner, .mod-inner, .seo-inner, .ft-inner {
    width: 100%;
    box-sizing: border-box;
    padding: 0 20px;
}
}
@media screen and (max-width: 767px){
  .h-popular-hotel{
    padding: 10px;
  }
  .h-data-list{
    padding-left: 0px;
  }
}

.
</style>      

</html>



