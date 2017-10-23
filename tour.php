<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activitys</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/tour.css">
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/menu-res.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/main-jquery.js" type="text/javascript"></script>
    <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script src="js/tour-Jquery.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main-script.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.4.5/angular-route.js"></script>
    <script src="https://code.angularjs.org/1.4.8/angular-cookies.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.8/angular-filter.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
    <script src="js/tour.js" type="text/javascript"></script>
    <!--<script src="//code.angularjs.org/1.3.0-beta.7/angular.js"></script>-->
</head>
<body ng-app="myApp" ng-controller="myCtrl as pri" ng-init="initemhotelselect()">
    <div class="contain-fluid">
        <header id="menu-web">        
            <nav class="navbar navbar-default">              
                <div class="navbar-header">
                    <div>
                        <button type="button" class="navbar-toggle " id="focus" ng-click="clickresMenu()">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                      <a class="navbar-brand" ng-click="gohome()">Go Holiday</a>
                    </div>
                    <div class="cart-menu" ng-click="cartBook()" id="none-menu">
                        <img src="icon/cart27.png" id="cartitem" >
                        <span class="cast-num">{{cart.length + carttransfer.length}}</span>
                    </div>
                    
                </div>
                <div class=" nav navbar-nav dropdown" id="navb-left">                      
                    <p class="dropdown-toggle" data-toggle="dropdown" ng-if="flagcheck == 1" >Browse <span class="caret"></span></p>
                    <p class="dropdown-toggle" data-toggle="dropdown" ng-if="flagcheck == 2" >เรียกดู <span class="caret"></span></p>
                    <p class="dropdown-toggle" data-toggle="dropdown" ng-if="flagcheck == 3" >瀏覽 <span class="caret"></span></p>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">                          
                        <li  ng-click="transfer()">
                            <span ng-if="flagcheck == 1" >Transports</span>
                            <span ng-if="flagcheck == 2" >การขนส่ง</span>
                            <span ng-if="flagcheck == 3" >傳輸</span>
                        </li>
                        <li  ng-click="gotour()">
                            <span ng-if="flagcheck == 1">Activities </span>
                            <span ng-if="flagcheck == 2">กิจกรรม/ทัวร์ </span>
                            <span ng-if="flagcheck == 3">活動 </span>
                        </li>
                        <li  ng-click="gohotel()">
                            <span ng-if="flagcheck == 1">Hotels</span>
                            <span ng-if="flagcheck == 2">โรงแรม</span>
                            <span ng-if="flagcheck == 3">酒店</span>
                        </li>
                        <li  ng-click="shopping()" >
                            <span ng-if="flagcheck == 1">Shopping</span>
                            <span ng-if="flagcheck == 2">ช้อปปิ้ง</span>
                            <span ng-if="flagcheck == 3">購物</span>
                        </li> 
                        <li  ng-click="restaurant()" >
                            <span ng-if="flagcheck == 1">Restaurant</span>
                            <span ng-if="flagcheck == 2">ร้านอาหาร</span>
                            <span ng-if="flagcheck == 3">餐廳</span>
                        </li>    
                    </ul>
                </div>
                <div id="navbar2" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="" >
                            <div class="cart-menu" ng-click="cartBook()" >
                                <img src="icon/cart27.png" id="cartitem" >
                                <span class="cast-num">{{cart.length + carttransfer.length}}</span>
                            </div>
                        </li>
                        <li id="login-sucess">
                            <a  ng-if="loginstatus" data-toggle="modal" data-target="#loginmodal" >
                                <span ng-if="flagcheck == 1">Login</span>
                                <span ng-if="flagcheck == 2">เข้าสู่ระบบ</span>
                                <span ng-if="flagcheck == 3">登錄</span>
                            </a>
                            <div ng-if="!loginstatus"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" id="li-seting-profile">
                                <img data-toggle="modal" data-target="" ng-src="{{'/uploads/profile/' + Profile}}" width="35" height="35" id="imgprofile" title="{{loginname}}">
                             
                            </div>                            
                            <ul ng-if="!loginstatus" class="dropdown-menu" id="profile-data-hover"  aria-labelledby="dropdownMenu1" style="">
                                <i></i>
                                <div class="masthead-picker-body">
                                    <div class="masthead-picker-photo-wrapper">                                     
                                        <img data-toggle="modal" data-target="#uploadprofile"  ng-src="{{'/uploads/profile/' + Profile}}" height="64" width="64" aria-hidden="true" alt="" data-ytimg="1"> 
                                    </div>
                                    <div class="masthead-picker-info">
                                        <div class="masthead-picker-name" dir="ltr">{{userEmail}}</div>
                                    </div>
                                </div>
                                <div class="masthead-picker-footer">
                                    <button class="btn btn-default btn-xs pull-left" ng-click="profile()">
                                        <span ng-if="flagcheck == 1">Profile</span>
                                        <span ng-if="flagcheck == 2">ประวัติส่วนตัว</span>
                                        <span ng-if="flagcheck == 3">輪廓</span>
                                    </button>
                                    <button ng-click="logout()" class="btn btn-default btn-xs pull-right">
                                        <span ng-if="flagcheck == 1">Logout</span>
                                        <span ng-if="flagcheck == 2">ออกจากระบบ</span>
                                        <span ng-if="flagcheck == 3">登出</span>
                                    </button>
                                </div>
                            </ul>
                        </li>
                        <li ng-if="loginstatus">
                            <a  href="/register" ng-if="flagcheck == 1">Sign Up</a>
                            <a  href="/register" ng-if="flagcheck == 2">สมัครสมาชิก</a>
                            <a  href="/register" ng-if="flagcheck == 3">註冊</a>
                        </li>
                    </ul>
                </div>                
            </nav>
        </header>  
  
        <nav class="menu" tabindex="0" ng-mouseleave="remove_submenu()" id="menu">          
            <div class="smartphone-menu-trigger"> </div>            

            <div class="avatar">
                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" />
                <h2>John D.</h2>
            </div>
            <ul>
                <li tabindex="0" ng-click="transfer()">Transports </li>
                <li tabindex="0" ng-click="gotour()">Activities </li>
                <li tabindex="0" ng-click="gohotel()">Hotels</li>
                <li tabindex="0" ng-click="shopping()" >Shopping</li> 
                <li tabindex="0" ng-click="restaurant()" >Restaurant</li>
                <li tabindex="0" class="icon-settings"><span>Settings</span></li>
            </ul>
        </nav>
    <section>
      <div class="row">
             <div class="col-md-1" style="padding: 0;width: 5%;" id= "myScrollspy">  
                <ul class="box-btn-select-submenu-tour"  style="background:#fFF !important">
                  
                  <li class="i-tour" id="menu-s" ng-click="getdaytour()" title="Day tour"><img class="" src="icon/island3.png" style="width:25px;margin-top:-5px;"></li>
                  <li class="i-hotel" id="menu-s" ng-click="getdaytour()" title="Spa"><img class="" src="icon/relaxing-spa3.png" style="width:25px;margin-top:-5px;"></li> 
                  <li class="i-boat" id="menu-s" ng-click="getdaytour()" title="Boat"><img class="" src="icon/yacht3.png" style="width:25px;margin-top:-5px;"></li>
                  <li class="i-wedding" id="menu-s" ng-click="getdaytour()" title="Wedding"><img class="" src="icon/newlyweds3.png" style="width:25px;margin-top:-5px;"></li> 
                  <li class="i-eating" id="menu-s" ng-click="getdaytour()" title="Diving"><img class="" src="icon/snorkel3.png" style="width:25px;margin-top:-5px;"></li>  
                  <li class="i-golf" id="menu-s" ng-click="getdaytour()" title="Golf"><img class="" src="icon/golf.png" style="width:25px;margin-top:-5px;"></li> 
                  <li class="i-packages" id="menu-s" ng-click="getdaytour()" title="Package"><img class="" src="icon/list3.png" style="width:25px;margin-top:-5px;"></li>
                  <li class="i-show" id="menu-s" title="Show"><img class="" src="icon/show.png" style="width:25px;margin-top:-5px;"></li>    
                </ul>
                </div>
             
      </div>
    </section>
    <section>
      <div class="col-lg-12" style="padding:0">
              <div class="filter_box">
              <div id="owl-demo" class="owl-carousel owl-theme">
 
                    <div class="item"><img src="images/img1.png" alt="The Last of us"></div>                    
                    <div class="item"><img src="images/img3.png" alt="Mirror Edge"></div>
                   
                  </div>
            </div>


    </div>
      
    </section>
    <section>
      <div class="container" style="padding:0">        
          
                <div class="col-lg-12" id="tourall" style="padding:0;">
                    <div class="row" >
                       <div class="col-lg-12">
                            <ul class="box-btn-select-menu-tour"  >
                                <li class="select-tour-item-city" id="tour{{city.name}}" ng-repeat="city in finalprovince track by $index " ng-click="selectcitytour(city);activesectiontour(finalprovince,city.name)">{{city.name}}</li>

                            </ul>
                            <div class="section-toue-all" ng-click="sectiontourall()"><span>more...</span></div>
                        </div>
                   
                    
                        <div class="col-lg-12" style="padding:0">
                            <div class="col-lg-2" id="section-info" style="padding:0;">
                                <div class="box-all-item-tour-section-alltour"><span>TOUR</span></div>
                                
                            </div>
                            <div class="col-lg-10" >
                                <div class="box-section-tour" id="tour-select">
                                    <div class="box-load-T" ng-style="alltour">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div>  
                                    <div class="col-lg-3" ng-repeat="xx in tour" style="padding:5px">
                                        <div class="product-item-sec-tour " ng-click="select_item($index,xx)">
                                          <div class="item-thumbnail-sec-tour" >
                                            <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg" >
                                          </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                          <p class="item-info-sec-tour">
                                            <span class="price-sec-tour">

                                            <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                           
                                          </p>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                      </div>
              </div>


              <div class="col-lg-12" id="spaall" style="padding:0;">
                <div class="row">
                    <div class="col-lg-12">
                    <!--<p class="zone-taxt-item">SPA</p>-->
                        <ul class="box-btn-select-menu-spa" >
                          <li class="select-spa-item-city" id="spa{{city.name}}" ng-repeat="city in finalprovincespa track by $index " ng-click="selectcityspa(city);activesectionspa(finalprovincespa,city.name)">{{city.name}}</li>
                        </ul>
                        <div class="section-toue-all" ng-click="sectionspaall()"><span>more...</span></div>
                        
                    </div>
              
             
                <div class="col-lg-12" style="padding:0">
                      <div class="col-lg-2" id="section-info" style="padding:0;">
                          <div class="box-all-item-tour-section-allspa"><span>SPA</span></div>
                          
                      </div>
                        <div class="col-lg-10" >                      
                          <div class="box-section-tour" id="tour-select"> 
                                <div class="box-load-T" ng-style="allspa">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div> 
                                      <div class="col-lg-3" ng-repeat="xx in itemspa" style="padding:5px">
                                         <div class="product-item-sec-tour " ng-click="select_item($index,xx)">
                                            <div class="item-thumbnail-sec-tour" >
                                              <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg" >
                                            </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                            <p class="item-info-sec-tour">

                                              <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                                 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                </div>                             
                              </div>
                            </div>
              </div>
     
      
          <div class="col-lg-12" id="boatall" style="padding:0;">
              <div class="row">
                <div class="col-lg-12">
                      <ul class="box-btn-select-menu-boat" >
                        <li class="select-boat-item-city" id="boat{{city.name}}" ng-repeat="city in finalprovinceboat track by $index | unique:'id'" ng-click="selectcityboat(city);activesectionboat(finalprovinceboat,city.name)">{{city.name}}</li>
                      </ul>
                      <div class="section-toue-all" ng-click="sectionboatall()"><span>more...</span></div>
                </div>
              
                <div class="col-lg-12" style="padding:0">
                      <div class="col-lg-2" id="section-info" style="padding:0;">
                          <div class="box-all-item-tour-section-allboat"><span>BOAT</span></div>
                          
                      </div>
                      <div class="col-lg-10" >
                      
                          <div class="box-section-tour" id="tour-select">             
                                <div class="box-load-T" ng-style="allboat">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div> 
                                      <div class="col-lg-3" ng-repeat="xx in itemboat" style="padding:5px">
                                         <div class="product-item-sec-tour " ng-click="select_item($index,xx)">
                                            <div class="item-thumbnail-sec-tour" >
                                              <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg">
                                            </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                             
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                            <p class="item-info-sec-tour">

                                              <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                                 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                </div>                             
                              </div>
                            </div>
          </div>
      
          <div class="col-lg-12" id="weddingall" style="padding:0;">
              <div class="row">
                <div class="col-lg-12">
                      <ul class="box-btn-select-menu-wedding" >
                        <li class="select-wedding-item-city" id="wedding{{city.name}}" ng-repeat="city in finalprovincewedding track by $index | unique:'id'" ng-click="selectcitywedding(city);activesectionwedding(finalprovincewedding,city.name)">{{city.name}}</li>
                        </ul>
                        <div class="section-toue-all" ng-click="sectionweddingall()"><span>more...</span></div>
                </div>              
                <div class="col-md-12" style="padding:0">                 
                      <div class="col-lg-2" id="section-info" style="padding:0;">
                          <div class="box-all-item-tour-section-allwedding"><span>WEDDING</span></div>
                          

                      </div>
                      <div class="col-lg-10" >
                       
                          <div class="box-section-tour" id="tour-select">             
                                <div class="box-load-T" ng-style="allwedding">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div>
                                      <div class="col-lg-3" ng-repeat="xx in itemwedding" style="padding:5px">
                                         <div class="product-item-sec-tour " ng-click="select_item($index,xx)">
                                            <div class="item-thumbnail-sec-tour" >
                                              <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg">
                                            </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                             
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                            <p class="item-info-sec-tour">

                                              <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                                 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                </div>                             
                              </div>
                            </div>
          </div>
     
          <div class="col-lg-12" id="divingall" style="padding:0;">
              <div class="row">
                <div class="col-lg-12">
                      <ul class="box-btn-select-menu-diving" >
                        <li class="select-diving-item-city" id="diving{{city.name}}" ng-repeat="city in finalprovincediving track by $index | unique:'id'" ng-click="selectcitydiving(city);activesectiondiving(finalprovincediving,city.name)">{{city.name}}</li>
                        </ul>
                        <div class="section-toue-all" ng-click="sectiondivingall()"><span>more...</span></div>
                </div>
                <div class="col-lg-12" style="padding:0">
                  
                      <div class="col-lg-2" id="section-info" style="padding:0;">
                          <div class="box-all-item-tour-section-alldiving"><span>DIVING</span></div>
                           
                      </div>
                      <div class="col-lg-10" >
                      
                          <div class="box-section-tour" id="tour-select">             
                                <div class="box-load-T" ng-style="alldiving">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div> 
                                      <div class="col-lg-3" ng-repeat="xx in itemdiving" style="padding:5px">
                                         <div class="product-item-sec-tour " ng-click="select_item($index,xx)">
                                            <div class="item-thumbnail-sec-tour" >
                                              <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg">
                                            </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                             
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                            <p class="item-info-sec-tour">

                                              <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                                 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                </div>                             
                              </div>
                            </div>
          </div>
                      

          <div class="col-lg-12" id="golfall" style="padding:0">
              <div class="row">
                <div class="col-lg-12">
                        <ul class="box-btn-select-menu-golf" >
                          <li class="select-golf-item-city" id="golf{{city.name}}" ng-repeat="city in finalprovincegolf track by $index | unique:'id'" ng-click="selectcitygolf(city);activesectiongolf(finalprovincegolf,city.name)">{{city.name}}</li>
                        </ul>
                        <div class="section-toue-all" ng-click="sectiongolfall()"><span>more...</span></div>
                        
                </div>
                <div class="col-lg-12" style="padding:0">
                      <div class="col-lg-2" id="section-info" style="padding:0">
                          <div class="box-all-item-tour-section-allgolf"><span>GOLF</span></div>
                           
                      </div>
                      <div class="col-lg-10" >                       
                          <div class="box-section-tour" id="tour-select">
                                <div class="box-load-T" ng-style="allgolf">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div>  
                                      <div class="col-lg-3" ng-repeat="xx in itemgolf" style="padding:5px">
                                         <div class="product-item-sec-tour" ng-click="select_item($index,xx)">
                                            <div class="item-thumbnail-sec-tour" >
                                              <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg">
                                            </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                             
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                            <p class="item-info-sec-tour">

                                              <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                                 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                </div>                             
                              </div>
                            </div>
          </div>
                      

      
          <div class="col-lg-12" id="packageall" style="padding:0;">
              <div class="row">
                <div class="col-lg-12">
                    <ul class="box-btn-select-menu-package" >
                      <li class="select-package-item-city" id="package{{city.name}}" ng-repeat="city in finalprovincepackage track by $index | unique:'id'" ng-click="selectcitypackage(city);activesectionpackage(finalprovincepackage,city.name)">{{city.name}}</li> </ul>
                      <div class="section-toue-all" ng-click="sectionpackageall()"><span>more...</span></div>
                </div>
             
                <div class="col-lg-12" style="padding:0">
                      <div class="col-lg-2" id="section-info" style="padding:0;">
                          <div class="box-all-item-tour-section-allpackage"><span>PACKAGE</span></div>
                           
                      </div>
                      <div class="col-lg-10" >                      
                          <div class="box-section-tour" id="tour-select">             
                                <div class="box-load-T" ng-style="allpackage">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div> 
                                      <div class="col-lg-3" ng-repeat="xx in itempackage" style="padding:5px">
                                         <div class="product-item-sec-tour " ng-click="select_item($index,xx)">
                                            <div class="item-thumbnail-sec-tour" >
                                              <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg">
                                            </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                            
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                            <p class="item-info-sec-tour">

                                              <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                                 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                </div>                             
                              </div>
                            </div>
          </div>
          <div class="col-lg-12" id="packageshow" style="padding:0;">
              <div class="row">
                <div class="col-lg-12">
                    <ul class="box-btn-select-menu-show" >
                      <li class="select-show-item-city" id="show{{city.name}}" ng-repeat="city in finalprovinceshow track by $index | unique:'id'" ng-click="selectcityshow(city);activesectionshow(finalprovinceshow,city.name)">{{city.name}}</li> </ul>
                      <div class="section-toue-all" ng-click="sectionshowall()"><span>more...</span></div>
                </div>
             
                <div class="col-lg-12" style="padding:0">
                      <div class="col-lg-2" id="section-info" style="padding:0;">
                          <div class="box-all-item-tour-section-allshow"><span>SHOW</span></div>
                           
                      </div>
                      <div class="col-lg-10" >                      
                          <div class="box-section-tour" id="tour-select">             
                                <div class="box-load-T" ng-style="allshow">
                                        <div id="inTurnFadingTextGPro">
                                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">L</div>
                                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">o</div>
                                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">a</div>
                                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">d</div>
                                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">i</div>
                                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">n</div>
                                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">g</div>
                                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                                        </div>
                                    </div> 
                                      <div class="col-lg-3" ng-repeat="xx in itemshow" style="padding:5px">
                                         <div class="product-item-sec-tour " ng-click="select_item($index,xx)">
                                            <div class="item-thumbnail-sec-tour" >
                                              <img ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i3.jpg">
                                            </div>
                                            <p class="item-name-sec-tour">
                                                <span ng-if="flagcheck == 1">{{xx.topic_en}}</span>
                                                <span ng-if="flagcheck == 2">{{xx.topic_th}}</span>
                                                <span ng-if="flagcheck == 3">{{xx.topic_cn}}</span>
                                            </p>
                                             
                                            <span class="company">
                                                <Span id="textcompany">Company :</Span>
                                                <span id="vacompany">{{xx.company}}</span>
                                            </span>
                                            <p id="type-tour">
                                                    <span class="item-type-sec-tour">{{xx.type}}</span>
                                            </p>
                                            <p class="item-info-sec-tour">

                                              <span class="price_info-sec-tour">
                                                <span style="display: block;"><img src="icon/adult2.png"  id="imgadult">฿{{xx.cost_a_agent_all | currency:"":0}}</span>
                                                <span ng-if="xx.cost_b_agent_all != 0"><img src="icon/boy2.png"  id="imgboy">฿{{xx.cost_b_agent_all | currency:"":0}}</span>
                                                
                                            </span>
                                                 
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                </div>                             
                              </div>
                            </div>
          </div>
                      
      <div id="loginmodal" class="modal fade" role="dialog">
        <div class="modal-dialog" id="login-modal"> 
            <button class="close" ng-click="close($event)" data-dismiss="modal" onclick="reset()">×</button>
                <h2 class="box-heading">
                    Login to your account!
                </h2>
                <div class="modal-body">
                  <div class="box-left box-col fx"> 
                    <h4>Login with social accounts</h4>
                    <div facebook-signup="" action-type="signin" signin-box-class-name="js-signin-box" redirecturl="authfacebook" >
                        <a ng-click="authenticate('facebook')" class="social-btn facebook-btn js-facebook-btn shadowed-btn fxac">
                            <i class="icon-facebook social-icon fa fa-facebook"></i>
                            <span class="btn-text">
                                
                                    Login with Facebook
                                
                            </span>
                            <span class="ajax-loader-tiny hidden"></span>
                        </a>
                    </div>

                    <div google-plus-signup="" action-type="signin" signin-box-class-name="js-signin-box" client-id="700206021005-fntgseouuq3ah1jtko8ejh2vckk8sbn6.apps.googleusercontent.com">
                        <a href="" class="social-btn google-btn shadowed-btn fxac">
                            <i class="icon-google-plus social-icon fa fa-google-plus"></i>
                            <span class="btn-text">
                                
                                    Login with Google+
                                
                            </span>
                            <span class="ajax-loader-tiny hidden"></span>
                        </a>
                        <form id="google-plus-login-form" method="post" action="/join/social-complete/google-plus/?display_type=popup&amp;locale=en_US&amp;response_type=json&amp;next=https%3A%2F%2Fwww.udemy.com%2F&amp;xref=" class="ng-pristine ng-valid">
                            <input type="hidden" name="access_token" value="">
                            <input type="hidden" name="code" value="">
                        </form>
                    </div>
                    <p id="message" style="color: red;"></p>
                    <div class="box-load">
                        <div id="inTurnFadingTextG">
                            <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">P</div>
                            <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">r</div>
                            <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">o</div>
                            <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">c</div>
                            <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">e</div>
                            <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">s</div>
                            <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">s</div>
                            <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">.</div>
                            <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">.</div>
                        </div>
                    </div>

            </div> 
            <div class="box-separator"></div>
            <div class="box-right box-col fx">
                <div class="usertracker-command" data-usertracker-type="seen-login-popup">
                </div>
                <h4>Login with your email</h4>
                
                  <form method="post"> 
                        <div class="manage-fields-wrapper">
                            <div id="tooltip-reference-email" class="tooltip-reference ">
                                <input class="emailinput form-control" data-purpose="email" id="id_email" mailcheck="" maxlength="64" minlength="6" name="email" placeholder="E-mail" required="True" type="email" ng-model="username"  required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')">
                            </div>
                            <div id="tooltip-reference-password" class="tooltip-reference ">
                                <input class=" form-control" data-purpose="password" id="id_password" maxlength="64" minlength="3" name="password" placeholder="Password" required="True" type="password" ng-model="password" required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')"> 
                            </div>
                        </div>
                            <div class="form-actions">
                                <div class="submit-row">
                                    <input type="submit" name="submit" value="Login" class="btn btn-primary btn btn-success" id="submit-id-submit" data-purpose="do-login" ng-click="login()"> 
                                        <span>or </span>
                                        <a href="" class="cancel-link">Forgot Password</a>
                                    </div>
                            </div>
                    </form>
            </div>
                    
                </div>
                <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a  href="/register">create an account</a>
                            ?</span>
                        </div>
                        
                </div>    
           
        </div>
    </div>
   
      </div>
      </div>
  </section> 
  
   

  <footer>    
            <div class="container">
                <div class="row">
                    <div class="social">
                        <ul class="fxw mt10 hidden-xs">
                            <li>
                                <div class="btn-group dropup lang-dropdown">
                                    <div class="dropdown-toggle fxac " data-toggle="dropdown">
                                          <i class="icon-globe fa fa-globe mr5"></i>
                                           {{flag}}
                                          <i class="icon-caret-up fa fa-caret-up user-caret ml5"></i>
                                    </div>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li ng-click="language(1)"><img src="/images/en.png" width="22" height="22"/><a href="" class="locale-link" update-locale="" locale="en_US" value="en" >English</a></li>
                                            <li ng-click="language(2)"><img src="/images/th.png" width="25" height="25"/><a href="" class="locale-link" update-locale="" locale="th_TH" value="th" >Thai</a></li>
                                            <li ng-click="language(3)"><img src="/images/cn.png" width="22" height="22"/><a href="" class="locale-link" update-locale="" locale="zh_CN" value="cn" >中文(简体)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="gray-text copyright" ng-if="flagcheck == 1">  Copyright © 2016 Go holiday, Inc.</span>
                                <span class="gray-text copyright" ng-if="flagcheck == 2">  ลิขสิทธิ์ © 2016 Go holiday, Inc.</span>
                                <span class="gray-text copyright" ng-if="flagcheck == 3">  版權 © 2016 Go holiday, Inc.</span>
                            </li>
                            <li>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 1" >Terms</span>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 2">ข้อตกลงและเงื่อนไข</a>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 3">條款</span>
                            </li>
                            <li>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 1">Customer Service</a>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 2">บริการลูกค้า</a>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 3">客户服务</a>
                            </li>
                            <li>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 1">System Support</a>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 2">ติดต่อ Admin</a>
                                <a href="/terms/" class="gray-text" ng-if="flagcheck == 3">系统支持</a>
                            </li>
                        </ul>
                        <div class="footer-right">
                             <span id="time" my-current-time="format"></span>
                            <ul>
                                <li class="li-icon-font">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="li-icon-font">
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li class="li-icon-font">
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="li-icon-font">
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                      
                    </div>
                </div>
            </div>
        </footer>
        </div>
<div class="modal fade" id="uploadprofile" role="dialog">
        <div class="modal-dialog">
                        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Profile</h4>
                </div>
                <form method="post" action="/addProfile" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="cat" value="Gallery" />
                        <input type="hidden" value="{{token}}" name="token"/>
                        <input type="hidden" name="id" value="{{id}}" />
                        <div class="form-group form-inline">
                            <input class="img-tourpackage" type="file" name="pic" id="img-tourpackage" required/>
                        </div>
                    </div>
                    <div class="modal-footer">                                    
                       <button type="submit"  class="btn btn-success btn-xs" >Save</button>
                       <div type="button" class="btn btn-default btn-xs" data-dismiss="modal" onclick="reset()">Close</div>
                    </div>
                </form>
           </div>
        </div>
    </div>
 
</div>

    <script>
  $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay : true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});
</script>
<script>
    var app = angular.module('myApp', ['ngCookies','ngRoute','angular.filter']);
    app.controller('myCtrl', function($scope, $location, $http, $cookies, $window,$injector,$filter, $interval) {
        angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'none');
        $scope.anmateprocess = { 'display':'none'};
        var host = 2;
        var ip = "";
        if (host == 1) {
            ip = "http://gh-travel.com";
        }
        else{
            ip = "http://localhost:8080"
        }
     
        $scope.cart = [];    
        $scope.tour= new Array();    
        $scope.province = new Array();
        $scope.tourprovince = new Array();
        $scope.provinceselect =new Array();
        $scope.dateon = new Array();
        $scope.cart = new Array();
        if (typeof localStorage["item"] !== "undefined" && localStorage["item"] !== "undefined") {
            $scope.cart = JSON.parse(localStorage["item"]);
            console.log($scope.cart);
        }
        $scope.carttransfer = [];
            if (typeof localStorage["itemtransfer"] !== "undefined" && localStorage["itemtransfer"] !== "undefined") {
                $scope.carttransfer = JSON.parse(localStorage["itemtransfer"]);
                console.log($scope.carttransfer);
          

        }
        $scope.view = [];
        if (typeof localStorage["view"] !== "undefined" && localStorage["view"] !== "undefined") {
            $scope.view = JSON.parse(localStorage["view"]);
            console.log($scope.view);
            if ($scope.view.length > 3) {
              $scope.view.splice($scope.view.indexOf($scope.view[0]),1);
              localStorage.setItem('view',JSON.stringify($scope.view));
            }
            console.log($scope.view);
        }
        loadpage();
        function loadpage(){
            if($cookies.get('login'))
            {
                $scope.loginstatus = false;
                $scope.token = $cookies.get('login');
                $http({
                    method:'post',
                    url: "/getuserbyid",
                    data: $.param({id: $cookies.get('login')}),
                    headers : {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    if (res[0].resource == "") {
                      $scope.Profile= "profile.png";
                    }
                    else{
                      $scope.Profile = res[0].resource;
                    }
                    $scope.userEmail = res[0].email;
                    $scope.loginname = res[0].fname+" "+res[0].lname;
                });
            }
            else
            {
                $scope.loginstatus = true;
            }
        }
        $scope.profile = function(){
            location.href="profile";

        }
        $scope.login = function(){
            angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'block');
            if($scope.username!=undefined&&$scope.password!=undefined)
            {
                $http({
                    method:'post',
                    url: "/login",
                    data: $.param({username: $scope.username,password: $scope.password}),
                    headers : {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'none');
                    if(res.status==0)
                    {
                      $cookies.put('login', res.username);
                      $window.location.reload();
                    }
                    else if(res.status==1)
                    {
                      angular.element(document.querySelector('#message')).html('Username is Invalid').css('color', 'red');
                    }
                    else if(res.status==2)
                    {
                      angular.element(document.querySelector('#message')).html('Password is Invalid').css('color', 'red');
                    }
                })
            }
        }
        $scope.logout = function(){
          $cookies.remove("login");
          $window.location.reload();
        }

        //======================province=========================//
        $http({
            method : 'post',
            url : "/api/Getprovince",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(res){
            if(res.status == "ok"){
                for(var i = 0 ; i < res.data.length; i++)
                {
                    $scope.province.push(res.data[i]);
                }
                    
            }
                    
        });
        var lengthpro;
        $scope.page = function(){
          location.href="page2";
        }     
        $scope.transfer = function(){
          location.href="Transports";

        }
        $scope.gohotel = function() {
          location.href="hotels";
        }
        $scope.gotour = function() {
          location.href="tour";
        }
        $scope.gohome = function() {
          location.href= ip;
        }
        $scope.restaurant = function(){
          location.href="restaurant";
        }
        $scope.shopping = function(){
          location.href="shopping";
        }
        $scope.sectiontourall = function(){
          $window.open('all-tour');
        }
        $scope.sectionspaall = function(){
          $window.open('all-spa');
        }
        $scope.sectionboatall = function(){
          $window.open('all-boat');
        }
        $scope.sectionweddingall = function(){
          $window.open('all-wedding');
        }
        $scope.sectiondivingall = function(){
          $window.open('all-diving');
        }
        $scope.sectiongolfall = function(){
          $window.open('all-golf');
        } 
        $scope.sectionpackageall = function(){
            $window.open('all-package');
        }
        $scope.sectionshowall = function(){
            $window.open('all-show');
        }    
        $scope.select_item = function(x,item){
          $cookies.remove("dateon");
          $scope.dateon = new Array();
        $scope.dateon.push(item.open_Sun)
        $scope.dateon.push(item.open_Mon)
        $scope.dateon.push(item.open_Thu)
        $scope.dateon.push(item.open_Wed)
        $scope.dateon.push(item.open_Tue)
        $scope.dateon.push(item.open_Fri)
        $scope.dateon.push(item.open_Sat)
        console.log($scope.dateon) 
        $cookies.put("dateon", $scope.dateon);
        angular.element(document.querySelector('#dateon')).triggerHandler('dateon');
            $scope.view.push(item);
            localStorage.setItem('view',JSON.stringify($scope.view)); 
            //angular.element(document.querySelector('#get-select-value')).triggerHandler('click',$scope.tour);
            $window.open('view-item#?data=' + JSON.stringify(item.id));
        }
          


        //=============================tour=============================//
        $scope.finalprovince = new Array();
        $scope.finalprovincespa = new Array();
        $scope.finalprovinceboat = new Array();
        $scope.finalprovincewedding = new Array();
        $scope.finalprovincediving = new Array();
        $scope.finalprovincegolf = new Array();
        $scope.finalprovincepackage = new Array();
        $scope.finalprovinceshow = new Array();
        
        $scope.f1= new Array();
        $scope.f2= new Array();
        $scope.f3= new Array();
        $scope.f4= new Array();
        $scope.f5= new Array();
        $scope.f6= new Array();
        $scope.f7= new Array();
         $scope.f8= new Array();

        $http({
            method : 'post',
            url : "/api/Getproduct_onfront",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(res){
            if(res.status == "ok"){            
                angular.forEach(res.data, function(data){                 
                    console.log(data.province);                      
                    $scope.tour.push(data);
                    $scope.f1.push(data.province);
                    $scope.alltour = { 'display':'none'};
                      
                });
                console.log($scope.f1)
                x = $scope.f1;
                console.log(x);
                var y = new Array();
                var first = 0;
                var count = 0;
                for(var i = 0 ; i < x.length; i++)
                {
                    count = 0;              
                    if(first==0)
                    {
                        y.push(x[i]);
                        first++;
                    }
                    for(var j = 0 ; j < y.length ; j++)
                    {                    
                        if(y[j]!=x[i])
                        {
                            count++;
                            if(count==y.length)
                                {
                                    y.push(x[i]);
                                }
                        }
                    }              
                }
                console.log(y);
                for (var i = 0; i < y.length; i++) {
                    angular.forEach($scope.province, function(data){                 
                        if (data.id == y[i]) 
                        {
                           $scope.finalprovince.push(data);
                        }
                    });
                }
                    console.log($scope.finalprovince); 
            }
        });
        $scope.selectcitytour = function(city){
          $scope.alltour = { 'display':'block'};
            $scope.tour = new Array();
            $http({
                method : 'post',
                url : "/api/Getproduct_onfront",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
              }).success(function(res){
                  if(res.status == "ok"){
                      console.log(city);
                      for (var i = 0; i < res.data.length; i++) {                        
                        if (res.data[i].province == city.id) {                           
                            $scope.tour.push(res.data[i]);
                            $scope.alltour = { 'display':'none'};
                        }
                      }
                  }
            });

        }

        //========================spa===================================//
        $scope.itemspa = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_spa",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
              if(res.status == "ok"){            
                  angular.forEach(res.data, function(data){ 
                      {
                          $scope.itemspa.push(data);
                          $scope.f2.push(data.province);
                          $scope.allspa = { 'display':'none'};
                      }
                  });
                  console.log($scope.f2)
                  x = $scope.f2;
                  console.log(x);
                  var y = new Array();
                  var first = 0;
                  var count = 0;
                  for(var i = 0 ; i < x.length; i++)
                  {
                      count = 0;              
                      if(first==0)
                      {
                          y.push(x[i]);
                          first++;
                      }
                      for(var j = 0 ; j < y.length ; j++)
                      {                    
                          if(y[j]!=x[i])
                          {
                              count++;
                              if(count==y.length)
                              {
                                  y.push(x[i]);
                              }
                          }
                      }              
                  }
                  console.log(y);
                  for (var i = 0; i < y.length; i++) {
                      angular.forEach($scope.province, function(data){                 
                          if (data.id == y[i]) 
                          {
                              $scope.finalprovincespa.push(data);
                          }
                      });
                  }
                    console.log($scope.finalprovincespa); 
              }
          });
          $scope.selectcityspa = function(city){
            $scope.allspa = { 'display':'block'};
            $scope.itemspa = new Array();
            $http({
                method : 'post',
                url : "/api/Getselectdata_type_spa",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
              }).success(function(res){
                  if(res.status == "ok"){
                      console.log(city);
                      for (var i = 0; i < res.data.length; i++) {
                          console.log(city.id)
                          console.log(res.data[i].province)
                          if (res.data[i].province == city.id ) {
                              console.log(res.data[i]);
                              $scope.itemspa.push(res.data[i]);
                              $scope.allspa = { 'display':'none'};
                          }
                      }
                  }
            });

        }
        //====================BOAT==============================//
        $scope.itemboat = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_boat",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
                angular.forEach(res.data, function(data){                 
                console.log(data.province);
                {
                  $scope.itemboat.push(data);
                   $scope.f3.push(data.province);
                   $scope.allboat = { 'display':'none'};
                }
            });
            console.log($scope.f3)
            x = $scope.f3;
            console.log(x);
            var y = new Array();
            var first = 0;
            var count = 0;
            for(var i = 0 ; i < x.length; i++)
             {
              count = 0;              
              if(first==0)
                  {
                    y.push(x[i]);
                    first++;
                  }
                  for(var j = 0 ; j < y.length ; j++)
                  {                    
                    if(y[j]!=x[i])
                    {
                      count++;
                      if(count==y.length)
                      {
                        y.push(x[i]);
                      }
                    }
                  }              
            }
            console.log(y);
            for (var i = 0; i < y.length; i++) {
                
            
            angular.forEach($scope.province, function(data){                 
                if (data.id == y[i]) 
                {
                   $scope.finalprovinceboat.push(data);
                }
            });
           }
          console.log($scope.finalprovinceboat); 
      }
      });
    $scope.selectcityboat = function(city){
      $scope.allboat= { 'display':'block'};
        $scope.itemboat = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_boat",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(city);
              for (var i = 0; i < res.data.length; i++) {
                console.log(city.id)
                console.log(res.data[i].province)
                if (res.data[i].province == city.id ) {
                    console.log(res.data[i]);
                    $scope.itemboat.push(res.data[i]);
                    $scope.allboat = { 'display':'none'};
                }
              }
            }
        });

    }
          
        //=====================WEDDING===========================//
        $scope.itemwedding = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_wedding",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              angular.forEach(res.data, function(data){                 
                console.log(data.province);
                {
                  $scope.itemwedding.push(data);
                   $scope.f4.push(data.province);
                   $scope.allwedding = { 'display':'none'};
                }
            });
            console.log($scope.f4)
            x = $scope.f4;
            console.log(x);
            var y = new Array();
            var first = 0;
            var count = 0;
            for(var i = 0 ; i < x.length; i++)
             {
              count = 0;              
              if(first==0)
                  {
                    y.push(x[i]);
                    first++;
                  }
                  for(var j = 0 ; j < y.length ; j++)
                  {                    
                    if(y[j]!=x[i])
                    {
                      count++;
                      if(count==y.length)
                      {
                        y.push(x[i]);
                      }
                    }
                  }              
            }
            console.log(y);
            for (var i = 0; i < y.length; i++) {
                
            
            angular.forEach($scope.province, function(data){                 
                if (data.id == y[i]) 
                {
                   $scope.finalprovincewedding.push(data);
                }
            });
           }
          console.log($scope.finalprovincewedding); 
      }
    });
  $scope.selectcitywedding = function(city){
      $scope.allwedding = { 'display':'block'};
        $scope.itemwedding = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_wedding",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(city);
              for (var i = 0; i < res.data.length; i++) {
                console.log(city.id)
                console.log(res.data[i].province)
                if (res.data[i].province == city.id ) {
                    console.log(res.data[i]);
                    $scope.itemwedding.push(res.data[i]);
                    $scope.allwedding = { 'display':'none'};
                }
              }
            }
        });

    }
          
          //=====================DIVING==========================//
          $scope.itemdiving = new Array();
          $http({
              method : 'post',
              url : "/api/Getselectdata_type_diving",
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
              if(res.status == "ok"){
                angular.forEach(res.data, function(data){                 
                console.log(data.province);
                {
                  $scope.itemdiving.push(data);
                   $scope.f5.push(data.province);
                   $scope.alldiving = { 'display':'none'};
                }
            });
            console.log($scope.f5)
            x = $scope.f5;
            console.log(x);
            var y = new Array();
            var first = 0;
            var count = 0;
            for(var i = 0 ; i < x.length; i++)
             {
              count = 0;              
              if(first==0)
                  {
                    y.push(x[i]);
                    first++;
                  }
                  for(var j = 0 ; j < y.length ; j++)
                  {                    
                    if(y[j]!=x[i])
                    {
                      count++;
                      if(count==y.length)
                      {
                        y.push(x[i]);
                      }
                    }
                  }              
            }
            console.log(y);
            for (var i = 0; i < y.length; i++) {
              angular.forEach($scope.province, function(data){                 
                  if (data.id == y[i]) 
                  {
                     $scope.finalprovincediving.push(data);
                  }
              });
            }
          console.log($scope.finalprovincediving); 
      }
    });

  $scope.selectcitydiving = function(city){
        $scope.alldiving = { 'display':'block'};
        $scope.itemdiving = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_diving",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(city);
              for (var i = 0; i < res.data.length; i++) {
                console.log(city.id)
                console.log(res.data[i].province)
                if (res.data[i].province == city.id ) {
                    console.log(res.data[i]);
                    $scope.itemdiving.push(res.data[i]);
                    $scope.alldiving = { 'display':'none'};
                }
              }
            }
        });

    }
           
            //====================GOLF============================//
            $scope.itemgolf = new Array();
            $http({
                method : 'post',
                url : "/api/Getselectdata_type_goft",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
              }).success(function(res){
                if(res.status == "ok"){
                    angular.forEach(res.data, function(data){                 
                console.log(data.province);
                {
                  $scope.itemgolf.push(data);
                   $scope.f6.push(data.province);
                   $scope.allgolf = { 'display':'none'};
                }
            });
            console.log($scope.f6)
            x = $scope.f6;
            console.log(x);
            var y = new Array();
            var first = 0;
            var count = 0;
            for(var i = 0 ; i < x.length; i++)
             {
              count = 0;              
              if(first==0)
                  {
                    y.push(x[i]);
                    first++;
                  }
                  for(var j = 0 ; j < y.length ; j++)
                  {                    
                    if(y[j]!=x[i])
                    {
                      count++;
                      if(count==y.length)
                      {
                        y.push(x[i]);
                      }
                    }
                  }              
            }
            console.log(y);
            for (var i = 0; i < y.length; i++) {
                
            
            angular.forEach($scope.province, function(data){                 
                if (data.id == y[i]) 
                {
                   $scope.finalprovincegolf.push(data);
                }
            });
           }
          console.log($scope.finalprovincegolf); 
      }
    });

  $scope.selectcitygolf = function(city){
    $scope.allgolf = { 'display':'block'};
        $scope.itemgolf = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_goft",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(city);
              for (var i = 0; i < res.data.length; i++) {
                console.log(city.id)
                console.log(res.data[i].province)
                if (res.data[i].province == city.id ) {
                    console.log(res.data[i]);
                    $scope.itemgolf.push(res.data[i]);
                    $scope.allgolf = { 'display':'none'};
                }
              }
            }
        });

    }
              
              //==================PACKAGE=========================//
              $scope.itempackage = new Array();
              $http({
                  method : 'post',
                  url : "/api/Getselectdata_type_package",
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                  if(res.status == "ok"){
                    angular.forEach(res.data, function(data){                 
                console.log(data.province);
                {
                  $scope.itempackage.push(data);
                   $scope.f7.push(data.province);
                   $scope.allpackage = { 'display':'none'};
                }
            });
            console.log($scope.f7)
            x = $scope.f7;
            console.log(x);
            var y = new Array();
            var first = 0;
            var count = 0;
            for(var i = 0 ; i < x.length; i++)
             {
              count = 0;              
              if(first==0)
                  {
                    y.push(x[i]);
                    first++;
                  }
                  for(var j = 0 ; j < y.length ; j++)
                  {                    
                    if(y[j]!=x[i])
                    {
                      count++;
                      if(count==y.length)
                      {
                        y.push(x[i]);
                      }
                    }
                  }              
            }
            console.log(y);
            for (var i = 0; i < y.length; i++) {
                
            
            angular.forEach($scope.province, function(data){                 
                if (data.id == y[i]) 
                {
                   $scope.finalprovincepackage.push(data);
                }
            });
           }
          console.log($scope.finalprovincepackage); 
      }
    });

    $scope.selectcitypackage = function(city){
      $scope.allpackage = { 'display':'block'};
        $scope.itempackage = new Array();
        $http({
            method : 'post',
            url : "/api/Getselectdata_type_package",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(city);
              for (var i = 0; i < res.data.length; i++) {
                console.log(city.id)
                console.log(res.data[i].province)
                if (res.data[i].province == city.id ) {
                    console.log(res.data[i]);
                    $scope.itempackage.push(res.data[i]);
                    $scope.allpackage = { 'display':'none'};
                }
              }
            }
        });

    }
       
      //========================END===================================//
      //==================Show=========================//
              $scope.itemshow = new Array();
              $http({
                  method : 'post',
                  url : "/api/Getproduct_type_show",
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                  if(res.status == "ok"){
                    angular.forEach(res.data, function(data){                 
                console.log(data.province);
                {
                  $scope.itemshow.push(data);
                   $scope.f8.push(data.province);
                   $scope.allshow = { 'display':'none'};
                }
            });
            console.log($scope.f8)
            x = $scope.f8;
            console.log(x);
            var y = new Array();
            var first = 0;
            var count = 0;
            for(var i = 0 ; i < x.length; i++)
             {
              count = 0;              
              if(first==0)
                  {
                    y.push(x[i]);
                    first++;
                  }
                  for(var j = 0 ; j < y.length ; j++)
                  {                    
                    if(y[j]!=x[i])
                    {
                      count++;
                      if(count==y.length)
                      {
                        y.push(x[i]);
                      }
                    }
                  }              
            }
            console.log(y);
            for (var i = 0; i < y.length; i++) {
                
            
            angular.forEach($scope.province, function(data){                 
                if (data.id == y[i]) 
                {
                   $scope.finalprovinceshow.push(data);
                }
            });
           }
          console.log($scope.finalprovinceshow); 
      }
    });

    $scope.selectcityshow = function(city){
      $scope.allshow = { 'display':'block'};
        $scope.itemshow = new Array();
        $http({
            method : 'post',
            url : "/api/Getproduct_type_show",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(city);
              for (var i = 0; i < res.data.length; i++) {
                console.log(city.id)
                console.log(res.data[i].province)
                if (res.data[i].province == city.id ) {
                    console.log(res.data[i]);
                    $scope.itemshow.push(res.data[i]);
                    $scope.allshow = { 'display':'none'};
                }
              }
            }
        });

    }
       
      //========================END===================================//

      
      
      
      
      $scope.cartBook = function(){
        location.href="cart";

      }
    $scope.activesectiontour = function(province,provincename){
    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
        angular.element(document.getElementById("tour"+province[i].name)).css('background-color','#0dabf9');
         angular.element(document.getElementById("tour"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("tour"+province[i].name)).css('cursor','default');


      }
      else{        
        angular.element(document.getElementById("tour"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("tour"+province[i].name)).css('color','#333');
      }
    }
  }
     $scope.activesectionspa = function(province,provincename){
    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
        angular.element(document.getElementById("spa"+province[i].name)).css('background-color','#f44336');
         angular.element(document.getElementById("spa"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("spa"+province[i].name)).css('cursor','default');


      }
      else{        
        angular.element(document.getElementById("spa"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("spa"+province[i].name)).css('color','#333');
      }
    }
  }
  
  $scope.activesectionboat = function(province,provincename){
    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
        angular.element(document.getElementById("boat"+province[i].name)).css('background-color','#9c27b0');
         angular.element(document.getElementById("boat"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("boat"+province[i].name)).css('cursor','default');


      }
      else{        
        angular.element(document.getElementById("boat"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("boat"+province[i].name)).css('color','#333');
      }
    }
  }
  $scope.activesectionwedding = function(province,provincename){    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
       
        angular.element(document.getElementById("wedding"+province[i].name)).css('background-color','#e2336e');
         angular.element(document.getElementById("wedding"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("wedding"+province[i].name)).css('cursor','default');


      }
      else{        
        angular.element(document.getElementById("wedding"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("wedding"+province[i].name)).css('color','#333');
      }
    }
  }
  $scope.activesectiondiving = function(province,provincename){
    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
       
        angular.element(document.getElementById("diving"+province[i].name)).css('background-color','#4caf50');
         angular.element(document.getElementById("diving"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("diving"+province[i].name)).css('cursor','default');


      }
      else{        
        angular.element(document.getElementById("diving"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("diving"+province[i].name)).css('color','#333');
      }
    }
  }
  $scope.activesectiongolf = function(province,provincename){
    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
       
        angular.element(document.getElementById("golf"+province[i].name)).css('background-color','#cddc39');
         angular.element(document.getElementById("golf"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("golf"+province[i].name)).css('cursor','default');

      }
      else{        
        angular.element(document.getElementById("golf"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("golf"+province[i].name)).css('color','#333');
      }
    }
  }
  $scope.activesectionpackage = function(province,provincename){
    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
       
        angular.element(document.getElementById("package"+province[i].name)).css('background-color','#ff5722');
         angular.element(document.getElementById("package"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("package"+province[i].name)).css('cursor','default');


      }
      else{        
        angular.element(document.getElementById("package"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("package"+province[i].name)).css('color','#333');
      }
    }
  }
  $scope.activesectionshow = function(province,provincename){
    
    console.log(province);
    console.log(provincename)
    for (var i = 0; i < province.length; i++) {
      if (province[i].name == provincename) {
       
        angular.element(document.getElementById("show"+province[i].name)).css('background-color','rgb(85, 202, 245)');
         angular.element(document.getElementById("show"+province[i].name)).css('color','#fff');
         //angular.element(document.getElementById("package"+province[i].name)).css('cursor','default');


      }
      else{        
        angular.element(document.getElementById("show"+province[i].name)).css('background-color','#fff');
        angular.element(document.getElementById("show"+province[i].name)).css('color','#333');
      }
    }
  }

  var language = $cookies.get('language');
      if(language==undefined){
          $cookies.put("language", 1);
          $scope.flag = 'English';
          $scope.flagcheck = 1;
      }
      else if(language==1){
          $scope.flag = 'English';
          $scope.flagcheck = 1;
      }
      else if(language==2){
          $scope.flag = 'Thai';
          $scope.flagcheck = 2;
      }
      else if(language==3){
          $scope.flag = '中文(简体)';
          $scope.flagcheck = 3;
      }
      $scope.language = function(x){
            
            $scope.body = { 'display':'none'};
            $scope.anmateprocess = { 'display':'block'};
            var interval;
            interval =  $interval(function() {

            if(x==1){          
                $cookies.remove("language");
                $cookies.put("language", 1);
                $scope.flag = 'English';
                $scope.flagcheck = 1;
            }
            else if(x==2){
              
                $cookies.remove("language");
                $cookies.put("language", 2);
                $scope.flag = 'Thai';
                $scope.flagcheck = 2;
              //event_change_month("th");
            }
            else if(x==3){
              
                $cookies.remove("language");
                $cookies.put("language", 3);
                $scope.flag = '中文(简体)';
                $scope.flagcheck = 3;
            }
            //$scope.body = { 'display':'block'};
            //$scope.anmateprocess = { 'display':'none'};
            $interval.cancel(interval);
        },1000 );
    }
      
      


});

      
  app.directive('errSrc', function() {
  return {
    link: function(scope, element, attrs) {
      element.bind('error', function() {
        if (attrs.src != attrs.errSrc) {
          attrs.$set('src', attrs.errSrc);
        }
      });
    }
  }
});

</script>
</body>
</html>
