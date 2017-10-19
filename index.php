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

<body ng-app="myApp" ng-controller="main">
  <style>
    .navbar{
      border-radius: 0px;
    }
    .navbar-nav>li>a {
    color: #333 !important;
  </style>
    <div id="header-636bc237837a4d9b38e27ea5831a8004">
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
        </nav>
    </div>  
    <div class="page-header ">
        <div style="background-size: 100%;background-image: url(./files/images/slide.jpg);background-repeat-x: no-repeat;background-repeat-y: no-repeat; transform: translate3d(0px, 0px, 0px);min-height: 65vh;">  
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="brand">
                            <h1 class="title">Travel Service!</h1>
                          <!-- <h4>IMRON PHUKET SPEEDBOAD TOUR  <b>LTD.</b> ,PART.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="main main-raised">
            <div class="section " style="padding-top: 5px" align="center">  
                <div class="container">
                    <div class="tm-section-header section-margin-top" id="popular">
                        <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <h2 class="tm-section-title">Popular Packages</h2>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>  
                    </div>
                    <div class="row">
                        <div style="width: 100%" align="center">
                            <div class="col-md-4 " ng-repeat="item in tourpopular" >
                                <div class="card card-product card-plain card-rotate" >
                                    <div class="rotating-card-container">
                                        <div class="card-image">
                                            <div class="front">
                                                <img class="img" src="./data/files/upload/icon/{{item.icon}}"  style="height: 280px">
                                                <div class="colored-shadow" style="background-image: url(&quot;files/images/dolce.jpg&quot;); opacity: 1;"></div>
                                            </div>
                                            <div class="back back-background" style="height: 376px; width: 360px; background-image: url(&quot;files/images/page1_img1.jpg&quot;);">
                                                <div class="card-content">
                                                    <div class="footer text-center">
                                                      <a href="view.php#?data={{item.id}}" class="btn  btn-white">
                                                        <i class="material-icons">info</i> Details
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
                                        <p class="card-description" ng-bind="item.description" style="height: 125px;overflow: hidden;">                                          
                                        </p>
                                        <div class="footer">                                            
                                            <div class="" style="display: inline-block;" align="right">
                                                <div type="button" rel="tooltip" title="" class="btn btn-simple " data-original-title="place" style=" margin-top: 0; text-transform: none;margin: 0;font-size: 16px;padding: 0;margin-left: -80px;">
                                                    <i class="material-icons" style="line-height: 2;">place</i>
                                                    <span ng-bind="item.city"></span>
                                                </div>
                                            </div>
                                            <div class="price-container" align="left" style="float: right;">
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
        </div>
    </section> <!-- end-main-raised -->

    <div class="section section-blog" id="area" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">   
                    <h2 class="section-title">Tour</h2>      
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
                        </div>
                        <div class="card-content">
                            <h6 class="category text-rose" ng-bind="item.name"></h6>                      
                            
                        </div>
                        <div class="description-package">
                            <p class="card-description" ng-bind="item.description"></p>
                        </div>
                        <div class="cost-pro">
                            <i class="material-icons" style="display: inline-block; line-height: 0;">place</i>
                            <p class="pro-item" ng-bind="item.province" align="left" ></p>

                            <p style="float: right;display: inline-block;">/ Package</p>
                            <p ng-bind="item.net_price_adult | currency:'':0 " align="right" style="float: right;    color: #FF5722;"></p>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
    <section>
    <div class="pro_list first mt15 clearfix freePackage">
    <h2 class="section-title">Transfer</h2>
    <div class="fr pro_fr">

      <div class="pro_lb list_ad" id="show1">
            <div>
            <div class="col-md-3">
                  <a name="__AD_module_3_60_3948" href="http://www.itrip.com/p21380" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20161123165226-standard-935.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๆณฐๅฝ่ญๆ้…็ๆชๅฎๅผนๅฐๅปไฝ“้ช" src="http://pic2.itrip.com/p/20161123165226-standard-935.jpg?imageView2/5/w/208/h/138/q/100" style="display: block;">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๆณฐๅฝ่ญๆ้…็ๆชๅฎๅผนๅฐๅปไฝ“้ช</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="12" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="136.98">136.98</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </div>
             <div class="col-md-3">
                  <a name="__AD_module_3_60_3949" href="http://www.itrip.com/p15477" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20151013093957-standard-748.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="่ญๆ้…ๆ&nbsp;ผๅ…ฐๅฒๅฟซ่ๅบๆตทไธ€ๆ—ฅๆธธ" src="http://pic2.itrip.com/p/20151013093957-standard-748.jpg?imageView2/5/w/208/h/138/q/100" style="display: block;">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ่ญๆ้…ๆ&nbsp;ผๅ…ฐๅฒๅฟซ่ๅบๆตทไธ€ๆ—ฅๆธธ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="12" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="120.32">120.32</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </div>
             <div class="col-md-3">
                  <a name="__AD_module_3_60_3950" href="http://www.itrip.com/p21718" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20170216155955-standard-584.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="่ญๆ้…Health Land Spaไผ&nbsp;็ปๆณฐๅผๆๆ‘ฉ(120ๅ้’)" src="http://pic2.itrip.com/p/20170216155955-standard-584.jpg?imageView2/5/w/208/h/138/q/100" style="display: block;">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ่ญๆ้…Health Land Spaไผ&nbsp;็ปๆณฐๅผๆๆ‘ฉ(120ๅ้’)</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="14" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="726.55">145.31</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </div>
              <div class="col-md-3">
                  <a name="__AD_module_3_60_3951" href="http://www.itrip.com/p21540" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20170104145753-standard-842.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="่ญๆ้…ๆ—&nbsp;ไบบๅฒไธๅฒ่ฑชๅๆธธ่ไธ€ๆ—ฅๆธธ" src="http://pic2.itrip.com/p/20170104145753-standard-842.jpg?imageView2/5/w/208/h/138/q/100" style="display: block;">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ่ญๆ้…ๆ—&nbsp;ไบบๅฒไธๅฒ่ฑชๅๆธธ่ไธ€ๆ—ฅๆธธ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="12" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="541.5">541.5</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </div>
             <div class="col-md-3">
                  <a name="__AD_module_3_60_3952" href="http://www.itrip.com/p4170" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20170104102921-standard-213.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="่ญๆ้…ๆณฐๆณๆฏ”่ต" src="http://pic2.itrip.com/p/20170104102921-standard-213.jpg?imageView2/5/w/208/h/138/q/100" style="display: block;">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ่ญๆ้…ๆณฐๆณๆฏ”่ต</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="14" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="506.54">101.31</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </div>
              <div class="col-md-3">
                  <a name="__AD_module_3_60_3953" href="http://www.itrip.com/p4187" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20140923155537-standard-79.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="่ญๆ้…่’่ฌๅฆฎไบบๅฆ–็ง€้—จ็ฅจ+่ต&nbsp;้ฅฎ" src="http://pic2.itrip.com/p/20140923155537-standard-79.jpg?imageView2/5/w/208/h/138/q/100" style="display: block;">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ่ญๆ้…่’่ฌๅฆฎไบบๅฆ–็ง€้—จ็ฅจ+่ต&nbsp;้ฅฎ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="12" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="137.2">137.2</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </div>
              </div>
          </div>
        <div class="pro_lb list_ad" style="display:none;" id="show2">
            <ul>
            <li>
                  <a name="__AD_module_3_61_3954" href="http://www.itrip.com/p18519" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20160627150040-standard-925.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๅก็ญๅฒ้ซ็ฉบ่ทณไผ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๅก็ญๅฒ้ซ็ฉบ่ทณไผ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="13" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="284.96">1886.44</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_61_3955" href="http://www.itrip.com/p18339" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20160426181429-standard-69.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ใ€ๅก็ญๅฟ…ไฝ“้ชใ€‘ๅก็ญๅฒไฝ“้ชๆป‘็ฟ”ๆบ้ฉพ้ฉถ๏ผ่ช้ฉพใ€้ช้ฉพ๏ผ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ใ€ๅก็ญๅฟ…ไฝ“้ชใ€‘ๅก็ญๅฒไฝ“้ชๆป‘็ฟ”ๆบ้ฉพ้ฉถ๏ผ่ช้ฉพใ€้ช้ฉพ๏ผ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="13" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="160.5">1062.51</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_61_3956" href="http://www.itrip.com/p18329" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20160426171649-standard-512.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๅก็ญๅฒๅ—้จ่งๅ… ็ฆๆ–ญๅฒ ้ธๅฒ ๅฆๅ…ๆตทๆปฉ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๅก็ญๅฒๅ—้จ่งๅ… ็ฆๆ–ญๅฒ ้ธๅฒ ๅฆๅ…ๆตทๆปฉ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="13" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="29.4">194.63</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_61_3957" href="http://www.itrip.com/p18355" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20160427110553-standard-815.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ใ€้ฃๅจๅก็ญใ€‘Tony Roma's ๅ้คๅฅ—้ค/ ๆ้คๅฅ—้ค" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ใ€้ฃๅจๅก็ญใ€‘Tony Roma's ๅ้คๅฅ—้ค/ ๆ้คๅฅ—้ค</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="13" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="23.52">155.70</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_61_3958" href="http://www.itrip.com/p18410" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20160428170359-standard-317.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="็พๅฝๅก็ญๅฒๆตทๅบ•ๆข็ง็ณปๅ—---็พไบบ้ฑผๅทๆฝๆฐด่" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ็พๅฝๅก็ญๅฒๆตทๅบ•ๆข็ง็ณปๅ—---็พไบบ้ฑผๅทๆฝๆฐด่</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="13" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="74.86">495.57</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_61_3959" href="http://www.itrip.com/p19501" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20160617141954-standard-857.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ใ€้ฃๅจๅก็ญใ€‘็พๅฝๅก็ญๅฒ้็พๅค่ฒ็ณปๅ—---ๆๆกๆ——ๅทๅค•้ณ้ฎ่ฝฎ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ใ€้ฃๅจๅก็ญใ€‘็พๅฝๅก็ญๅฒ้็พๅค่ฒ็ณปๅ—---ๆๆกๆ——ๅทๅค•้ณ้ฎ่ฝฎ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="13" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="64.08">424.21</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              </ul>
          </div>
        <div class="pro_lb list_ad" style="display:none;" id="show3">
            <ul>
            <li>
                  <a name="__AD_module_3_64_3977" href="http://www.itrip.com/p4989" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20140919113036-standard-982.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๆ–ฐๅ&nbsp;ๅกๅค้—ดๅจ็ฉๅญ้—จ็ฅจ๏ผๅซๆธธ่ง่ฝฆ๏ผ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๆ–ฐๅ&nbsp;ๅกๅค้—ดๅจ็ฉๅญ้—จ็ฅจ๏ผๅซๆธธ่ง่ฝฆ๏ผ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="17" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="36.9412">179.16</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_64_3978" href="http://www.itrip.com/p14134" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20151028143447-standard-711.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๆจๅฎๆบๅบT2/T3 Ambassador Transit Lounge ่ฝฌๆบ่ดตๅฎพไผ‘ๆฏๅฎค(5ๅฐๆ—ถ)" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๆจๅฎๆบๅบT2/T3 Ambassador Transit Lounge ่ฝฌๆบ่ดตๅฎพไผ‘ๆฏๅฎค(5ๅฐๆ—ถ)</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="17" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="45.8592">222.42</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_64_3979" href="http://www.itrip.com/p4141" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20150506173301-standard-895.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๆ–ฐๅ&nbsp;ๅกๆ—ถๅ…ไน็ฟผ้—จ็ฅจ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๆ–ฐๅ&nbsp;ๅกๆ—ถๅ…ไน็ฟผ้—จ็ฅจ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="17" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="10.0">48.5</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_64_3980" href="http://www.itrip.com/p4137" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20150506153147-standard-357.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๆ–ฐๅ&nbsp;ๅกๆฐด้้ธญๅญ่นๅ’้ฉไนๆ—…1ๅฐๆ—ถ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๆ–ฐๅ&nbsp;ๅกๆฐด้้ธญๅญ่นๅ’้ฉไนๆ—…1ๅฐๆ—ถ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="17" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="23.7994">115.43</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_64_3981" href="http://www.itrip.com/p14124" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20150715104150-standard-482.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ๆ–ฐๅ&nbsp;ๅกๆฒณๅท็”ๆ€ๅญ้—จ็ฅจ๏ผๅซๆธธ่น๏ผ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ๆ–ฐๅ&nbsp;ๅกๆฒณๅท็”ๆ€ๅญ้—จ็ฅจ๏ผๅซๆธธ่น๏ผ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="17" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="21.32">103.40</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              <li>
                  <a name="__AD_module_3_64_3982" href="http://www.itrip.com/p15049" target="_blank" class="img"> 
                    <img class="lazy1" data-original="http://pic2.itrip.com/p/20150911120349-standard-978.jpg?imageView2/5/w/208/h/138/q/100" width="208" height="138" border="0" alt="ใ€้ๆ้–ๅๆฌพใ€‘ๆ–ฐๅ&nbsp;ๅกๅฃๆทๆฒ้ฑผๅฐพ็ฎๅก”้—จ็ฅจ" src="http://pic.itrip.com/img/loading2.gif">
                    <div class="proinfo oh">
                    <p class="f14 mt10 oh" style="height:42px;">
                      ใ€้ๆ้–ๅๆฌพใ€‘ๆ–ฐๅ&nbsp;ๅกๅฃๆทๆฒ้ฑผๅฐพ็ฎๅก”้—จ็ฅจ</p>
                    <p class="oh mt5">
                      <span class="fr pri price_label">
                        <label class="js_curCode f12">RMB</label>
                        <label class="js_curMonery_exten f16 ml5" data-cid="17" data-exrates="{9=5.26, 10=4.81, 11=3.31, 12=1.0, 13=6.62, 14=0.2, 15=5.0E-4, 17=4.85, 16=1.6, 21=8.79, 20=7.82, 23=0.06, 22=6.78, 25=0.76, 24=0.8, 27=0.98, 26=0.28}" data-price="8.9">43.17</label><label class="f12">&nbsp;่ตท</label>
                      </span>
                      </p>
                  </div>
                  <div class="bor_img"></div>
                  </a>
                </li>
              </ul>
          </div>
        </div>
  </div>
  </section>
</div>

<div class="row">
                      <div class="h-popular-hotel">
               
                <div class="mod-tab clearfix" id="more_tab">
                        <a href="javascript:void(0);" class="current" cityid="58" id="link58">Phuket</a>
                        <a href="javascript:void(0);" class="" cityid="59" id="link59">Bangkok</a>
                        
                        <a align="right" href="//english.ctrip.com/hotels/list?city=58" target="_blank" id="btnMore">More &gt;</a>
                </div>
                <div class="mod-box centered-message" id="popCityLoading" style="display: none;"><i class="icon-loading icon-loading-64-eee"></i></div>
                <div class="h-data-list" id="div_top_sell">        
                 
        <div class="hotel-link col-md-6" >
            <a href="javascript:void(0);" class="hotel-img" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-426611/east-hong-kong/?from_page=home&amp;module=best&amp;link=pic#ctm_ref=ix_ts_img_2', 'txtCheckIn','txtCheckOut', true)"><img src="//dimg04.c-ctrip.com/images/hotel/75000/74613/00a2266ac95f4c3fb18f39a67a6780e7_R_180_180.jpg" alt="East Hong Kong Hong Kong"></a>
            <div class="hotel-info">
                <h3 class="hotel-name">
                    <strong>
                        <a href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-426611/east-hong-kong/?from_page=home&amp;module=best&amp;link=title#ctm_ref=ix_ts_n_2', 'txtCheckIn', 'txtCheckOut', true)">East Hong Kong</a>
                    </strong>
                </h3>
                <div class="hotel-lm">
                    <span class="level">
                        <i class="c-icon icon-star icon-star-4"></i>
                    </span>
                    <span class="location" data-index="2" data-hotel-id="426611" data-hotel-name="East Hong Kong" data-lat="22.2860257786" data-lng="114.2161101848" rel="nofollow" onclick="HomePage.LocationMap.clickShowMap(event);">
                        <i class="h-icon icon-location"></i> North Point and Quarry Bay
                    </span>
                </div>
                <div class="hotel-grade">
                    <div class="c-reviews-box">
                        <a href="javascript:void(0);" class="hotel-review" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-426611/east-hong-kong/?link=review&amp;ctm_ref=ix_ts_rw_2#review', 'txtCheckIn', 'txtCheckOut', true)">
                            <span class="score">4.7</span>/5<span class="rating">Outstanding</span>
                            <span target="_blank" class="review-link" rel="nofollow">
                                (5023 Reviews)
                            </span>
                        </a>
                            <span class="reviews-box"><a href="javascript:void(0);" class="review-link" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-426611/east-hong-kong/?checkin=2017-10-20&amp;checkout=2017-10-21&amp;link=taReview&amp;reviewtype=tripadvisor#review', 'txtCheckIn', 'txtCheckOut', true)">
                                <img src="https://www.tripadvisor.cn/img/cdsi/img2-daodao/ratings/traveler/4.5-21589-4.png" alt="4.5 of 5 stars">(1144 Reviews)</a>
                            </span>
                    </div><div class="pack-bubble self-review" data-type="reviewThemeTag"><i class="h-icon icon-user-s"></i><span class="txt txt-block">"Convenient transport options" "Excellent location" "Nice sea view"</span></div>             
                    
                    <div class="server-box">
                                   <span class="h-tag"><i class="h-icon icon-wifi"></i>Wi-Fi in public areas</span>
                                   <span class="h-tag"><i class="h-icon icon-pool"></i>Swimming Pool</span>
                                   <span class="h-tag"><i class="h-icon icon-gym"></i>Gym</span>
                                   <span class="h-tag"><i class="h-icon icon-bar"></i>Bar</span>
                    </div>
                </div>
                <div class="hotel-tag">
                                    </div>
                <div class="price-box">
                    
                                                <div class="c-price">
                                <dfn class="price-currency">CNY</dfn>
                                <span class="price-num">1,707</span>
                            </div>
                                                            <div class="select-btn">
                        <a class="c-btn btn-key" href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-426611/east-hong-kong/?from_page=home&amp;module=best&amp;link=button#ctm_ref=ix_ts_n_2', 'txtCheckIn', 'txtCheckOut', true)">Select</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hotel-link col-md-6" >
            <a href="javascript:void(0);" class="hotel-img" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-385221/disney-s-hollywood-hotel/?from_page=home&amp;module=best&amp;link=pic#ctm_ref=ix_ts_img_3', 'txtCheckIn','txtCheckOut', true)"><img src="//dimg04.c-ctrip.com/images/200d070000002bjnuC170_R_180_180.jpg" alt="Disney's Hollywood Hotel Hong Kong"></a>
            <div class="hotel-info">
                <h3 class="hotel-name">
                    <strong>
                        <a href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-385221/disney-s-hollywood-hotel/?from_page=home&amp;module=best&amp;link=title#ctm_ref=ix_ts_n_3', 'txtCheckIn', 'txtCheckOut', true)">Disney's Hollywood Hotel</a>
                    </strong>
                </h3>
                <div class="hotel-lm">
                    <span class="level">
                        <i class="c-icon icon-star icon-star-4"></i>
                    </span>
                    <span class="location" data-index="3" data-hotel-id="385221" data-hotel-name="Disney's Hollywood Hotel" data-lat="22.3090660322" data-lng="114.0372571349" rel="nofollow" onclick="HomePage.LocationMap.clickShowMap(event);">
                        <i class="h-icon icon-location"></i> Disneyland Area
                    </span>
                </div>
                <div class="hotel-grade">
                    <div class="c-reviews-box">
                        <a href="javascript:void(0);" class="hotel-review" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-385221/disney-s-hollywood-hotel/?link=review&amp;ctm_ref=ix_ts_rw_3#review', 'txtCheckIn', 'txtCheckOut', true)">
                            <span class="score">4.7</span>/5<span class="rating">Outstanding</span>
                            <span target="_blank" class="review-link" rel="nofollow">
                                (21919 Reviews)
                            </span>
                        </a>
                            <span class="reviews-box"><a href="javascript:void(0);" class="review-link" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-385221/disney-s-hollywood-hotel/?checkin=2017-10-20&amp;checkout=2017-10-21&amp;link=taReview&amp;reviewtype=tripadvisor#review', 'txtCheckIn', 'txtCheckOut', true)">
                                <img src="https://www.tripadvisor.cn/img/cdsi/img2-daodao/ratings/traveler/4.0-21589-4.png" alt="4.0 of 5 stars">(1979 Reviews)</a>
                            </span>
                    </div><div class="pack-bubble self-review" data-type="reviewThemeTag"><i class="h-icon icon-user-s"></i><span class="txt txt-block">"Family-friendly" "Room was good" "Near bus station"</span></div>             
                    
                    <div class="server-box">
                                   <span class="h-tag"><i class="h-icon icon-restaurant"></i>Restaurant</span>
                                   <span class="h-tag"><i class="h-icon icon-park"></i>Parking</span>
                                   <span class="h-tag"><i class="h-icon icon-pool"></i>Swimming Pool</span>
                                   <span class="h-tag"><i class="h-icon icon-bar"></i>Bar</span>
                    </div>
                </div>
                <div class="hotel-tag">
                                    </div>
                <div class="price-box">
                    
                                                <div class="c-price">
                                <dfn class="price-currency">CNY</dfn>
                                <span class="price-num">1,565</span>
                            </div>
                                                            <div class="select-btn">
                        <a class="c-btn btn-key" href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-385221/disney-s-hollywood-hotel/?from_page=home&amp;module=best&amp;link=button#ctm_ref=ix_ts_n_3', 'txtCheckIn', 'txtCheckOut', true)">Select</a>
                    </div>
                </div>
            </div>
        </div>
       <div class="hotel-link col-md-6" >
            <a href="javascript:void(0);" class="hotel-img" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-396354/prince-hotel-marco-polo/?from_page=home&amp;module=best&amp;link=pic#ctm_ref=ix_ts_img_4', 'txtCheckIn','txtCheckOut', true)"><img src="//dimg04.c-ctrip.com/images/fd/hotel/g3/M05/9E/13/CggYGVXrMyKAchhrAAsnL-o-rBQ899_R_180_180.jpg" alt="Prince Hotel Marco Polo Hong Kong"></a>
            <div class="hotel-info">
                <h3 class="hotel-name">
                    <strong>
                        <a href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-396354/prince-hotel-marco-polo/?from_page=home&amp;module=best&amp;link=title#ctm_ref=ix_ts_n_4', 'txtCheckIn', 'txtCheckOut', true)">Prince Hotel Marco Polo</a>
                    </strong>
                </h3>
                <div class="hotel-lm">
                    <span class="level">
                        <i class="c-icon icon-star icon-star-4"></i>
                    </span>
                    <span class="location" data-index="4" data-hotel-id="396354" data-hotel-name="Prince Hotel Marco Polo" data-lat="22.2989984478832" data-lng="114.168307185173" rel="nofollow" onclick="HomePage.LocationMap.clickShowMap(event);">
                        <i class="h-icon icon-location"></i> Tsim Sha Tsui and Kowloon West
                    </span>
                </div>
                <div class="hotel-grade">
                    <div class="c-reviews-box">
                        <a href="javascript:void(0);" class="hotel-review" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-396354/prince-hotel-marco-polo/?link=review&amp;ctm_ref=ix_ts_rw_4#review', 'txtCheckIn', 'txtCheckOut', true)">
                            <span class="score">4.7</span>/5<span class="rating">Outstanding</span>
                            <span target="_blank" class="review-link" rel="nofollow">
                                (9473 Reviews)
                            </span>
                        </a>
                            <span class="reviews-box"><a href="javascript:void(0);" class="review-link" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-396354/prince-hotel-marco-polo/?checkin=2017-10-20&amp;checkout=2017-10-21&amp;link=taReview&amp;reviewtype=tripadvisor#review', 'txtCheckIn', 'txtCheckOut', true)">
                                <img src="https://www.tripadvisor.cn/img/cdsi/img2-daodao/ratings/traveler/4.5-21589-4.png" alt="4.5 of 5 stars">(1207 Reviews)</a>
                            </span>
                    </div><div class="pack-bubble self-review" data-type="reviewThemeTag"><i class="h-icon icon-user-s"></i><span class="txt txt-block">"Excellent location" "Convenient transport options" "Convenient for shopping"</span></div>             
                    
                    <div class="server-box">
                                   <span class="h-tag"><i class="h-icon icon-wifi"></i>Free Wi-Fi in designated areas</span>
                                   <span class="h-tag"><i class="h-icon icon-restaurant"></i>Restaurant</span>
                                   <span class="h-tag"><i class="h-icon icon-pickup"></i>Airport pickup service</span>
                                   <span class="h-tag"><i class="h-icon icon-gym"></i>Gym</span>
                                   <span class="h-tag"><i class="h-icon icon-meeting"></i>Meeting rooms</span>
                    </div>
                </div>
                <div class="hotel-tag">
                         <!--Sales-->
                        <label class="sale-tag" data-tips="jump" data-content="Special rate only available for bookings of minimum 2 rooms, otherwise regular room rate will apply. " data-params="{'options':{'showArrow':false,'type':'jmp_text','template':'$jmp_text','classNames':{'tip': 'tuna_jmpinfo1','boxType':'jmp_content'},'css':{'maxWidth':450},'position':'bottomLeft-topRight','content':{'txt':'Special rate only available for bookings of minimum 2 rooms, otherwise regular room rate will apply. '}}}" data-role="jmp">
                            Sale
                        </label>
                                    </div>
                <div class="price-box">
                    
                                                <div class="c-price">
                                <dfn class="price-currency">CNY</dfn>
                                <span class="price-num">2,805</span>
                            </div>
                                                            <div class="select-btn">
                        <a class="c-btn btn-key" href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-396354/prince-hotel-marco-polo/?from_page=home&amp;module=best&amp;link=button#ctm_ref=ix_ts_n_4', 'txtCheckIn', 'txtCheckOut', true)">Select</a>
                    </div>
                </div>
            </div>
        </div>
       <div class="hotel-link col-md-6" >
            <a href="javascript:void(0);" class="hotel-img" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-396352/gateway-hotel-marco-polo/?from_page=home&amp;module=best&amp;link=pic#ctm_ref=ix_ts_img_5', 'txtCheckIn','txtCheckOut', true)"><img src="//dimg04.c-ctrip.com/images/2n0n0i00000098ltnD13F_R_180_180.jpg" alt="Gateway Hotel Marco Polo Hong Kong"></a>
            <div class="hotel-info">
                <h3 class="hotel-name">
                    <strong>
                        <a href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-396352/gateway-hotel-marco-polo/?from_page=home&amp;module=best&amp;link=title#ctm_ref=ix_ts_n_5', 'txtCheckIn', 'txtCheckOut', true)">Gateway Hotel Marco Polo</a>
                    </strong>
                </h3>
                <div class="hotel-lm">
                    <span class="level">
                        <i class="c-icon icon-star icon-star-4"></i>
                    </span>
                    <span class="location" data-index="5" data-hotel-id="396352" data-hotel-name="Gateway Hotel Marco Polo" data-lat="22.297756" data-lng="114.168542" rel="nofollow" onclick="HomePage.LocationMap.clickShowMap(event);">
                        <i class="h-icon icon-location"></i> Tsim Sha Tsui and Kowloon West
                    </span>
                </div>
                <div class="hotel-grade">
                    <div class="c-reviews-box">
                        <a href="javascript:void(0);" class="hotel-review" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-396352/gateway-hotel-marco-polo/?link=review&amp;ctm_ref=ix_ts_rw_5#review', 'txtCheckIn', 'txtCheckOut', true)">
                            <span class="score">4.7</span>/5<span class="rating">Outstanding</span>
                            <span target="_blank" class="review-link" rel="nofollow">
                                (9697 Reviews)
                            </span>
                        </a>
                            <span class="reviews-box"><a href="javascript:void(0);" class="review-link" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-review-396352/gateway-hotel-marco-polo/?checkin=2017-10-20&amp;checkout=2017-10-21&amp;link=taReview&amp;reviewtype=tripadvisor#review', 'txtCheckIn', 'txtCheckOut', true)">
                                <img src="https://www.tripadvisor.cn/img/cdsi/img2-daodao/ratings/traveler/4.5-21589-4.png" alt="4.5 of 5 stars">(1248 Reviews)</a>
                            </span>
                    </div><div class="pack-bubble self-review" data-type="reviewThemeTag"><i class="h-icon icon-user-s"></i><span class="txt txt-block">"Excellent location" "Convenient for shopping" "Convenient transport options"</span></div>             
                    
                    <div class="server-box">
                                   <span class="h-tag"><i class="h-icon icon-wifi"></i>Free Wi-Fi in designated areas</span>
                                   <span class="h-tag"><i class="h-icon icon-restaurant"></i>Restaurant</span>
                                   <span class="h-tag"><i class="h-icon icon-pickup"></i>Airport pickup service</span>
                                   <span class="h-tag"><i class="h-icon icon-gym"></i>Gym</span>
                                   <span class="h-tag"><i class="h-icon icon-meeting"></i>Meeting rooms</span>
                                   <span class="h-tag"><i class="h-icon icon-bar"></i>Bar</span>
                    </div>
                </div>
                <div class="hotel-tag">
                         <!--Sales-->
                        <label class="sale-tag" data-tips="jump" data-content="Special rate only available for bookings from 2017-8-29 17:31:00 to 2017-11-30 23:59:59. If an extended stay is desired, please also book during the designated time or regular room rate will apply." data-params="{'options':{'showArrow':false,'type':'jmp_text','template':'$jmp_text','classNames':{'tip': 'tuna_jmpinfo1','boxType':'jmp_content'},'css':{'maxWidth':450},'position':'bottomLeft-topRight','content':{'txt':'Special rate only available for bookings from 2017-8-29 17:31:00 to 2017-11-30 23:59:59. If an extended stay is desired, please also book during the designated time or regular room rate will apply.'}}}" data-role="jmp">
                            Sale
                        </label>
                                    </div>
                <div class="price-box">
                    
                            <div class="member-deal member-sign">
                                <a href="javascript:;"><span class="h-icon icon-member"></span>Member Deal</a>
                            </div>
                                                <div class="c-price">
                                <dfn class="price-currency">CNY</dfn>
                                <span class="price-num">2,747</span>
                            </div>
                                                            <div class="select-btn">
                        <a class="c-btn btn-key" href="javascript:void(0);" rel="nofollow" onclick="redirectTo('//english.ctrip.com/hotels/hong-kong-hotel-detail-396352/gateway-hotel-marco-polo/?from_page=home&amp;module=best&amp;link=button#ctm_ref=ix_ts_n_5', 'txtCheckIn', 'txtCheckOut', true)">Select</a>
                    </div>
                </div>
            </div>
        </div>
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
    border-top: 2px solid #fda93b;
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
body,input{
  font-size:12px;line-height:150%;font-family:"Helvetica Neue",Helvetica,"Hiragino Sans GB","Hiragino Sans GB W3","Microsoft YaHei","微软雅黑",Arial,simsun,sans-serif;color:#333
}
  body,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td,hr,button{
  margin:0;padding:0
}
  li{
  list-style:none
}
  img{
  border:0
}
  input[type=text]{
  padding:2px 5px
}
  em{
  font-style:normal
}
  ::-webkit-scrollbar{
  width:12px
}
  ::-webkit-scrollbar-track{
  -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.3);border-radius:10px
}
  ::-webkit-scrollbar-thumb{
  border-radius:10px;background:rgba(0,0,0,0.1);-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.5)
}
  ::-webkit-scrollbar-thumb:window-inactive{
  background:rgba(255,0,0,0.4)
}
  input::-webkit-input-placeholder{
  color:#999!important;font-size:12px
}
  input:-moz-placeholder{
  color:#999!important;font-size:12px
}
  input::-moz-placeholder{
  color:#999!important;font-size:12px
}
  input:-ms-input-placeholder{
  color:#999!important;font-size:12px
}
  @font-face{
  font-family:'iconfont';src:url('//at.alicdn.com/t/font_59742_cso72ft3g9hn0zfr.eot');src:url('//at.alicdn.com/t/font_59742_cso72ft3g9hn0zfr.eot?#iefix') format('embedded-opentype'),url('//at.alicdn.com/t/font_59742_cso72ft3g9hn0zfr.woff') format('woff'),url('//at.alicdn.com/t/font_59742_cso72ft3g9hn0zfr.ttf') format('truetype'),url('//at.alicdn.com/t/font_59742_cso72ft3g9hn0zfr.svg#iconfont') format('svg')
}
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
  .f30{
  font-size:30px;line-height:45px
}
  .f36{
  font-size:36px;line-height:54px
}
  .f42{
  font-size:42px;line-height:63px
}
  .mt2{
  margin-top:2px
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
  .starBox .star1,.starBox .star2,.starBox .star3,.starBox .star4,.starBox .star5,.starBox .star1-5,.starBox .star2-5,.starBox .star3-5,.starBox .star4-5,.starBox .star0,.starWhiteBox .star1,.starWhiteBox .star2,.starWhiteBox .star3,.starWhiteBox .star4,.starWhiteBox .star5,.starWhiteBox .star1-5,.starWhiteBox .star2-5,.starWhiteBox .star3-5,.starWhiteBox .star4-5,.starWhiteBox .star0{
  height:15px;display:inline-block;margin:0;padding:0
}
  .starBox{
  background:url(../img/star.png) 0 0 repeat-x
}
  .starBox .star1,.starBox .star2,.starBox .star3,.starBox .star4,.starBox .star5,.starBox .star1-5,.starBox .star2-5,.starBox .star3-5,.starBox .star4-5,.starBox .star0{
  background:url(../img/star.png) 0 -15px repeat-x
}
  .starWhiteBox{
  background:url(../img/star.png) 0 -30px repeat-x
}
  .starWhiteBox .star1,.starWhiteBox .star2,.starWhiteBox .star3,.starWhiteBox .star4,.starWhiteBox .star5{
  background:url(../img/star.png) 0 -45px repeat-x
}
  .star1{
  width:15px
}
  .star2{
  width:30px
}
  .star3{
  width:45px
}
  .star4{
  width:60px
}
  .star5{
  width:75px
}
  .star0{
  widht:7px
}
  .star1-5{
  width:22px
}
  .star2-5{
  width:37px
}
  .star3-5{
  width:52px
}
  .star4-5{
  width:67px
}
  .starBox_b{
  display:inline-block;width:140px;height:27px;vertical-align:middle;margin-top:-3px;background:url(../img/star_b.png) 0 0 repeat-x
}
  .starBox_b .star_b{
  height:27px;width:28px;display:inline-block;float:left;margin:0;padding:0;cursor:pointer
}
  .starBox_b .cur,.starBox_b .star_ok{
  background:url(../img/star_b.png) 0 -28px repeat-x
}
  .icon_star1{
  height:15px;width:15px;background-position:-38px -223px
}
  .icon_star2{
  height:15px;width:30px;background-position:-38px -223px
}
  .icon_star3{
  height:15px;width:45px;background-position:-38px -223px
}
  .icon_star4{
  height:15px;width:60px;background-position:-38px -223px
}
  .icon_star5{
  height:15px;width:75px;background-position:-38px -223px
}
  .icon_white_star1{
  height:15px;width:15px;background-position:-48px -525px
}
  .icon_white_star2{
  height:15px;width:30px;background-position:-48px -525px
}
  .icon_white_star3{
  height:15px;width:45px;background-position:-48px -525px
}
  .icon_white_star4{
  height:15px;width:60px;background-position:-48px -525px
}
  .icon_white_star5{
  height:15px;width:75px;background-position:-48px -525px
}
  .icon_phone{
  width:25px;height:28px;background-position:0 -252px
}
  .icon_qq{
  width:26px;height:28px;background-position:-25px -252px
}
  .icon_pc{
  width:30px;height:29px;background-position:-51px -251px
}
  .icon_write{
  width:32px;height:31px;background-position:-81px -249px
}
  .icon_blue_case{
  width:30px;height:33px;background-position:-143px -238px
}
  .icon_blue_waring{
  width:33px;height:30px;background-position:0 -280px
}
  .icon_blue_Question{
  width:33px;height:32px;background-position:-33px -280px
}
  .icon_blue_listItem{
  width:32px;height:25px;background-position:-66px -280px
}
  .icon_user{
  width:18px;height:18px;background-position:-129px -271px
}
  .icon_white_listItem_s{
  width:15px;height:15px;background-position:0 0
}
  .icon_blue_listItem_s{
  width:17px;height:12px;background-position:-160px -221px
}
  .icon_white_view{
  width:14px;height:14px;background-position:-129px -291px
}
  .icon_blue_view{
  width:14px;height:14px;background-position:-143px -291px
}
  .icon_blue_history{
  width:18px;height:19px;background-position:-158px -291px
}
  .icon_black_eye{
  width:28px;height:17px;background-position:-65px -312px
}
  .icon_right_talk{
  width:21px;height:19px;background-position:-73px -329px
}
  .icon_right_qq{
  width:20px;height:20px;background-position:-94px -329px
}
  .icon_right_phone{
  width:18px;height:20px;background-position:-117px -329px
}
  .icon_right_feedback{
  width:18px;height:18px;background-position:-135px -312px
}
  .icon_right_code{
  width:18px;height:18px;background-position:-154px -312px
}
  .icon_right_top{
  width:9px;height:8px;background-position:-117px -312px
}
  .icon_rebate{
  width:42px;height:51px;background-position:0 -400px
}
  .icon_visa{
  width:37px;height:39px;background-position:-42px -400px
}
  .icon_bus{
  width:43px;height:39px;background-position:-79px -400px
}
  .icon_blue_phone{
  width:35px;height:36px;background-position:-122px -400px
}
  .icon_tax{
  width:39px;height:39px;background-position:-157px -400px
}
  .icon_weather{
  width:44px;height:38px;background-position:0 -455px
}
  .icon_blue_itrip{
  width:35px;height:38px;background-position:-46px -441px
}
  .icon_white_visa{
  width:53px;height:57px;background-position:-143px -445px
}
  .icon_white_bus{
  width:81px;height:40px;background-position:-48px -484px
}
  .icon_white_phone{
  width:48px;height:50px;background-position:0 -503px
}
  .icon_white_tax{
  width:57px;height:49px;background-position:-139px -503px
}
  .icon_new{
  width:15px;height:15px;background-position:-181px -206px
}
  .icon_black_list{
  width:28px;height:21px;background-position:0 -358px
}
  .icon_black_pen{
  width:28px;height:21px;background-position:-28px -358px
}
  .icon_black_uimg{
  width:28px;height:21px;background-position:-56px -358px
}
  .icon_black_clk{
  width:28px;height:21px;background-position:-84px -358px
}
  .icon_black_quan{
  width:28px;height:21px;background-position:-112px -358px
}
  .icon_black_dollor{
  width:28px;height:21px;background-position:-140px -358px
}
  .icon_black_score{
  width:28px;height:21px;background-position:-168px -358px
}
  .icon_black_star{
  width:28px;height:21px;background-position:-140px -337px
}
  .icon_black_distri{
  width:28px;height:21px;background-position:-81px -441px
}
  .icon_white_list{
  width:28px;height:21px;background-position:0 -379px
}
  .icon_white_pen{
  width:28px;height:21px;background-position:-28px -379px
}
  .icon_white_uimg{
  width:28px;height:21px;background-position:-56px -379px
}
  .icon_white_clk{
  width:28px;height:21px;background-position:-84px -379px
}
  .icon_white_quan{
  width:28px;height:21px;background-position:-112px -379px
}
  .icon_white_dollor{
  width:28px;height:21px;background-position:-140px -379px
}
  .icon_white_score{
  width:28px;height:21px;background-position:-168px -379px
}
  .icon_white_star{
  width:28px;height:21px;background-position:-168px -337px
}
  .icon_orange_star{
  width:18px;height:17px;background-position:-93px -312px
}
  .icon_white_distri{
  width:28px;height:21px;background-position:-109px -441px
}
  .icon_white_home{
  width:20px;height:18px;background-position:-45px -312px
}
  .icon_Passager{
  width:26px;height:22px;background-position:-47px -333px
}
  .itrip_chuo{
  width:79px;height:79px;background:url(../img/uc/itrip_chuo.png) 0 0 no-repeat;position:absolute;display:inline-block
}
  .coupon_lost{
  width:75px;height:76px;background:url(../img/uc/coupon_lost.png) 0 0 no-repeat;position:absolute;display:inline-block
}
  .coupon_used{
  width:75px;height:76px;background:url(../img/uc/coupon_used.png) 0 0 no-repeat;position:absolute;display:inline-block
}
  .qicon{
  background-image:url(../img/quickInS.png);background-repeat:no-repeat;display:inline-block;vertical-align:middle
}
  .qicon_plane{
  width:32px;height:28px;background-position:0 0
}
  .qicon_car{
  width:26px;height:21px;background-position:-32px 0
}
  .qicon_boat{
  width:31px;height:24px;background-position:-58px 0
}
  .qicon_train{
  width:41px;height:31px;background-position:-89px 0
}
  .qicon_bus{
  width:45px;height:27px;background-position:-130px 0
}
  .qicon_ferryboat{
  width:45px;height:23px;background-position:-175px 0
}
  .qicon_walk{
  width:27px;height:26px;background-position:-220px 0
}
  .icon_footer{
  background-image:url(../img/footer1.png);background-repeat:no-repeat;display:inline-block
}
  .icon_footer_Money{
  width:52px;height:52px;background-position:0 0
}
  .icon_footer_Bag{
  width:52px;height:52px;background-position:-52px 0
}
  .icon_footer_Earplug{
  width:52px;height:52px;background-position:-104px 0
}
  .icon_footer_Praise{
  width:52px;height:52px;background-position:-156px 0
}
  .icon_footer_User{
  width:32px;height:32px;background-position:0 -52px
}
  .icon_footer_Inform{
  width:37px;height:37px;background-position:-32px -52px
}
  .icon_footer_List{
  width:26px;height:32px;background-position:-69px -52px
}
  .icon_footer_Service{
  width:32px;height:32px;background-position:-95px -52px
}
  .icon_footer_Phone{
  width:30px;height:38px;background-position:-127px -52px
}
  .icon_footer_net_1{
  width:84px;height:31px;background-position:0 -90px
}
  .icon_footer_net_2{
  width:84px;height:31px;background-position:-84px -90px
}
  .icon_footer_net_3{
  width:84px;height:31px;background-position:0 -121px
}
  .icon_footer_net_4{
  width:84px;height:31px;background-position:-84px -121px
}
  .icon_footer_net_5{
  width:84px;height:31px;background-position:0 -152px
}
  .icon_footer_net_6{
  width:84px;height:31px;background-position:-84px -152px
}
  .footer_logo{
  width:165px;height:63px;background-position:0 -183px
}
  
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
          <div class="contact" id="contact">             
            <ul >
              <li class="">Address: <a>100/16 Moo 5 , Soi 1 Chalernprakiet Rd., T.Rassada Muang Phuket Thailand 83000</a></li>
              <li class="">Phones: <a href="tel:#" style="display: inline-block;">(+66) 096-6409949</a>; <a href="tel:#" style="display: inline-block;">087-2794723</a></li>
              <li class="">E-mail: <a href="mailto:#" style="display: inline-block;"> sele@danatoursasia.com</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
    <footer class="footer footer-black footer-big" >
        <div class="container">
            <div class="socials">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-google-plus"></a>
            </div>
            <div class="copy">Website Template Designed by <a href="" rel="nofollow">ozaman</a></div>
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



