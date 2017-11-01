<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >View Product</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="css/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="css/menu-res.css">
    <link rel="stylesheet" type="text/css" href="css/detail.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/default.date.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="js/view-item.js" type="text/javascript" ></script>
    <script src="https://code.angularjs.org/1.4.5/angular-route.js"></script>
    <script src="https://code.angularjs.org/1.4.8/angular-cookies.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular-sanitize.js"></script>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <!--  <script src="/assets/editor/v2x0/application-4856922c0fa82feadc452fb3dcc72ba5.js"></script>-->
    <script src="js/jquery-cookie.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
   
  <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.modal.min.js" type="text/javascript"></script>
    <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script src="js/picker.js" type="text/javascript"></script>
    <script src="js/picker.date.js" type="text/javascript"></script>
     <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar.js'></script>
    <script src='js/fullcalendar.min.js'></script>
    <script src="js/calendar.js" type="text/javascript" ></script>
     <script src="js/moment.js" type="text/javascript" ></script>
    <script src="js/main-script.js" type="text/javascript"></script>
    <script src="js/page3_jquery.js" type="text/javascript" ></script>
    <link href="css/angular-datepicker.css" rel="stylesheet" type="text/css" />
    <script src="js/angular-datepicker.js"></script>
     <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.11.0.min.js"></script>
     
     <!--<script src="js/gcal.js" type="text/javascript" ></script>-->
     
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    
    <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
    
</head>

<body ng-app="myApp" ng-controller="myCtrl" ng-init="getItem()">
    <div id="fountainTextG3-form2" ng-style="anmateprocess2" >
        <div id="fountainTextG4">
            <div id="inTurnFadingTextG_1" class="inTurnFadingTextGbook">L</div>
            <div id="inTurnFadingTextG_2" class="inTurnFadingTextGbook">o</div>
            <div id="inTurnFadingTextG_3" class="inTurnFadingTextGbook">a</div>
            <div id="inTurnFadingTextG_4" class="inTurnFadingTextGbook">d</div>
            <div id="inTurnFadingTextG_5" class="inTurnFadingTextGbook">i</div>
            <div id="inTurnFadingTextG_6" class="inTurnFadingTextGbook">n</div>
            <div id="inTurnFadingTextG_7" class="inTurnFadingTextGbook">g</div>
            <div id="inTurnFadingTextG_8" class="inTurnFadingTextGbook">.</div>
            <div id="inTurnFadingTextG_9" class="inTurnFadingTextGbook">.</div>
            <div id="inTurnFadingTextG_9" class="inTurnFadingTextGbook">.</div>
        </div>
    </div> 
    <div id="fountainTextG3-form" ng-style="anmateprocess">
        <div id="fountainTextG4">
            <div id="inTurnFadingTextG_1" class="inTurnFadingTextGbook">P</div>
            <div id="inTurnFadingTextG_2" class="inTurnFadingTextGbook">r</div>
            <div id="inTurnFadingTextG_3" class="inTurnFadingTextGbook">o</div>
            <div id="inTurnFadingTextG_4" class="inTurnFadingTextGbook">c</div>
            <div id="inTurnFadingTextG_5" class="inTurnFadingTextGbook">e</div>
            <div id="inTurnFadingTextG_6" class="inTurnFadingTextGbook">s</div>
            <div id="inTurnFadingTextG_7" class="inTurnFadingTextGbook">s</div>
            <div id="inTurnFadingTextG_8" class="inTurnFadingTextGbook">.</div>
            <div id="inTurnFadingTextG_9" class="inTurnFadingTextGbook">.</div>
        </div>
    </div> 
    <div class="contain-fluid" ng-style="body" id="body">
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
            <img  ng-src="{{'/uploads/profile/' + Profile}}" />
                <h4>{{loginname}}</h4>
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
        <div class="channel-head" style="">
            <div class="container" >
                <channel-breadcrumb parent-channel="currentChannel.parentChannel" channel-title="currentChannel.title" ng-style="">
                    <div class="bread mt20">
                        <a href="#" id="color-icon"><i ng-click="gohome()" class="fa fa-home" title="Home"></i></a>
                        <span ng-if="flagcheck == 1">/ View Product</span>
                        <span ng-if="flagcheck == 2">/ ดูสินค้า</span>
                        <span ng-if="flagcheck == 3">/ 查看產品</span>
                    </div>
                </channel-breadcrumb> 
                    <h1 class="fs30 ellipsis">
                        <span ng-if="flagcheck == 1">View Product</span>
                        <span ng-if="flagcheck == 2">ดูสินค้า</span>
                        <span ng-if="flagcheck == 3">查看產品</span>
                    </h1> 
                    <ul></ul> 
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="padding:0">
            <div class="row">
                <div class="col-md-8 "  >
                    <div class="htl_info">       
                        <h1 class="name" >
                            <span ng-if="flagcheck == 1">{{topic_en}}</span>
                            <span ng-if="flagcheck == 2">{{topic_th}}</span>
                            <span ng-if="flagcheck == 3">{{topic_cn}}</span>
                        </h1>                    
                          <div class="icon_list"></div>                           
                    </div>
                  	<div class=" box-details">
                    		<div id="detail-sec01" >
          			            <div class="box" id="gallery-select-value">
          			                <div id="slider" class="flexslider">
          			                 	  <ul class="slides1">
            				                    <li >
            				                      	<div class="big-photo" ng-repeat="x in gallery">
            				                         	<img style="border: solid 1px #ccc;" ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/' + x.post_date+'.jpg'}}">

            				                      	</div>

            				                    </li>
          			                  	</ul>
          			                </div>

          			                <div class="thumbnail-photo">
          			                  <!-- <a class="btn-left"></a> -->
              			                <div id="carousel" class="flexslider">
              			                   	<ul class="slides2">
              			                      	<li >
              				                          <div class="list-thumbnail" ng-repeat="x in gallery" ng-mouseover="img_click($index)">
              				                              <img style="border: solid 1px #ccc;" ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/' + x.post_date+'.jpg'}}">
              				                        </div>
              			                      	</li>

              			                    </ul>
              			                </div>
          			                <!-- <a class="btn-right"></a>-->
          			                </div>
          			            </div>
          			        </div>
        			            <!--<div class="follow"></div>-->
        	          </div>
                    <div class="col-lg-12 " id="select-view-item-mobile" >
                        <div class="box-show-select-view" ng-show="view.length != 0">
                            <div class="item-res col-lg-4"  ng-repeat="a in view track by $index">
                                <div class="product-item-view " ng-click="select_item_view(a ,tour)">
                                    <div class="item-thumbnail-view" >
                                          <img class="img-tiem-view" ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + a.image_crop +'.jpg'}}" err-src="images/cadillac.png">
                                    </div>
                                    <p class="item-name-view">
                                        <span ng-if="flagcheck == 1">{{a.topic_en}}</span>
                                        <span ng-if="flagcheck == 2">{{a.topic_th}}</span>
                                        <span ng-if="flagcheck == 3">{{a.topic_cn}}</span>
                                    </p>
                                    <p class="item-type-view">{{a.type}}</p>
                                    <p class="item-info-view">
                                        <span class="price-view">Price&nbsp;<span style="color: #FF9800;"><span class="price_info-view">฿</span>{{a.cost_a_agent_all | currency:"":0}}</span >
                                        </span>    
                                    </p>

                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-item-show2">
                  		  <div class="box-detail-right">
                          <!--<div id="calendar"></div>-->
        	                  <!--<div class="topic_en"> {{topic_en}}</div>-->
                              
          		                  <div class="pricecostselect">
            			             <p id="infoperson" >
                                        <span ng-if="flagcheck == 1">Adult:</span>
                                            <span ng-if="flagcheck == 2">ผู้ใหญ่:</span>
                                            <span ng-if="flagcheck == 3">成人:</span>
                                            <span class="price_infocost">฿{{sumprice_adult | currency:"":0}} </span>
                                    </p>
            			            <p id="infoperson">
                                        <span ng-if="flagcheck == 1">Child :</span>
                                        <span ng-if="flagcheck == 2">เด็ก :</span>
                                        <span ng-if="flagcheck == 3">儿童 :</span>
                                        <span class="price_infocost">฿{{sumprice_child | currency:"":0}}
                                        </span>
                                    </p>   
          		                  </div>
                                <hr>
                                <div class="col-lg-12"> 
                                    <div id="atime">
                                        <p >
                                            <span ng-if="flagcheck == 1">Around time : </span>
                                            <span ng-if="flagcheck == 2">ช่วงเวลา : </span>
                                            <span ng-if="flagcheck == 3">大約時間 : </span>
                                        </p>
                                        <div class="show-time"> 
                                            
                                                
                                                  <span class="all-time" id="u0" ng-click="timeselect(havetime[0])" ng-show="havetime[0] != undefined">{{havetime[0].show_h}}:{{havetime[0].show_m}}</span>
                                                  <span class="all-time" id="u1" ng-click="timeselect(havetime[1])" ng-show="havetime[1] != undefined">{{havetime[1].show_h}}:{{havetime[1].show_m}}</span>
                                                  <span class="all-time" id="u2" ng-click="timeselect(havetime[2])" ng-show="havetime[2] != undefined">{{havetime[2].show_h}}:{{havetime[2].show_m}}</span>
                                                  <span class="all-time" id="u3" ng-click="timeselect(havetime[3])" ng-show="havetime[3] != undefined">{{havetime[3].show_h}}:{{havetime[3].show_m}}</span>
                                                  <span class="all-time" id="u4" ng-click="timeselect(havetime[4])" ng-show="havetime[4] != undefined">{{havetime[4].show_h}}:{{havetime[4].show_m}}</span>
                                                  <span class="all-time" id="u5" ng-click="timeselect(havetime[5])" ng-show="havetime[5] != undefined">{{havetime[5].show_h}}:{{havetime[5].show_m}}</span>
                                               
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12"> 
                                    <div class="text-time">
                                        <span ng-if="flagcheck == 1">Time:</span>
                                        <span ng-if="flagcheck == 2">เวลา:</span>
                                        <span ng-if="flagcheck == 3">時間:</span>
                                    <span class="keyword-box-content" ng-model="textfinal">{{textfinal}}</span>
                                        <div class="sumprice" ng-show="sumprice_adult_child != 0">
                                            <span ng-if="flagcheck == 1">Total : </span>
                                            <span ng-if="flagcheck == 2">ราคารวม : </span>
                                            <span ng-if="flagcheck == 3">总 : </span>
                                            &nbsp;&nbsp;฿{{sumprice_adult_child | currency:"":0}} </div>
                                    </div>
                                </div>
        		                  <div class="col-lg-12">
              						    <div class="form-date">
              							   <div class="form-title" >
                                                <span ng-if="flagcheck == 1">date :</span>
                                                <span ng-if="flagcheck == 2">วันที่ :</span>
                                                <span ng-if="flagcheck == 3">日期 :</span>
                                            </div>

                							     <input class="form-control booking-input" type="text" id="booking-date" required><i class="fa fa-calendar" id="calen" aria-hidden="true"></i>
                							 
                                            <div id="dateon" ></div>
              						    </div>
              						    <div class="form-person">
              						        <div id="person-transfer">
                                                <span ng-if="flagcheck == 1">Adult(s):</span>
                                                <span ng-if="flagcheck == 2">ผู้ใหญ่(s):</span>
                                                <span ng-if="flagcheck == 3">成人(s):</span>
                                                <span style="padding:9%"></span>
                                                <span ng-if="flagcheck == 1">Child(s):</span>
                                                <span ng-if="flagcheck == 2">เด็ก(s):</span>
                                                <span ng-if="flagcheck == 3">兒童(s):</span>
                                            </div>
                                            
                                                 <select class="form-control " ng-change="adultSelect(personadult)" id="numperson" ng-model="personadult" data-ng-options="i  for i in adult">
                                                        <option value="">0</option>
                                                </select>            
                                              <span style="padding-left: 3%;">/</span>
                  							
                  							   <select class="form-control" ng-change="childSelect(personchild)" id="numperson2" ng-model="personchild" data-ng-options="i  for i in child">
                                                    <option value="">0</option>
                                                </select>
                  						</div>
                                    </div>
                               
                                    <div class="col-lg-12">
                          				<div class="btn_submit ">
                                            <div class="btn-book" ng-click="addCart()">
                                                <span ng-if="flagcheck == 1">Book Now</span>
                                                <span ng-if="flagcheck == 2">จอง</span>
                                                <span ng-if="flagcheck == 3">現在預訂</span>
                                            </div>
                                            <div class="btn-costs" ng-click="addCart()">
                                                <span ng-if="flagcheck == 1">Add to Shopping Cart</span>
                                                <span ng-if="flagcheck == 2">เพิ่มในรถเข็น</span>
                                                <span ng-if="flagcheck == 3">加入購物車</span>
                                            </div>

                                        </div> 
                                    </div>
                                   
        	              </div>
                    </div>
        	      </div>
            </div>
        </div>
    </section>    
    <div class="row">        
        <div class="col-md-12">
            <div class="product_nav">
                <div class="container">
                  	<ul>
                        <li class="cur">
                            <span ng-if="flagcheck == 1">Overview</span>
                            <span ng-if="flagcheck == 2">รายละเอียด</span>
                            <span ng-if="flagcheck == 3">概觀</span>
                        </li>
                      <li class="cur">
                            <span ng-if="flagcheck == 1">Free</span>
                            <span ng-if="flagcheck == 2">ฟรี</span>
                            <span ng-if="flagcheck == 3">自由</span></li>
                      <li class="cur">
                            <span ng-if="flagcheck == 1">Introduction</span>
                            <span ng-if="flagcheck == 2">แนะนำ</span>
                            <span ng-if="flagcheck == 3">遊戲簡介</span>
                      </li>
                      
                    </ul>
                  	<div class="btn_orange" style="display:none">
                        <span ng-if="flagcheck == 1">Book Now</span>
                        <span ng-if="flagcheck == 2">จอง</span>
                        <span ng-if="flagcheck == 3">現在預訂</span></div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="row">
        <div class="col-md-8">
            <div id="calendar" ui-calendar="uiConfig.calendar" ng-model="eventSources" calendar="myCalendar"></div>
        </div>
        <div class="col-md-4">
            <div ng-show="SelectedEvent" class="alert alert-success" style="margin-top:50px">
                <h2 style="margin-top:0px"> Selected Event:</h2>
                <h3 style="color:#A9A50E">{{SelectedEvent.title}}</h3>
                <p>{{SelectedEvent.description}}</p>
            </div>
        </div>
    </div>-->
    <section>
      <div class="container" style="padding:0">
        <div class="col-md-7">
            <div class=" box-detailss">
                <span ng-if="flagcheck == 1" class="detail" ng-bind-html="returnhtml(detail_en)"></span>
                <span ng-if="flagcheck == 2" class="detail" ng-bind-html="returnhtml(detail_th)"></span>
                <span ng-if="flagcheck == 3" class="detail" ng-bind-html="returnhtml(detail_cn)"></span>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="box-item-show">
                <div class="col-lg-12" ng-repeat="item in front" id="item-font-section-transfer">
                    <div class="product-item-front " ng-click="select_item(item ,tour)">
                        <div class="item-thumbnail-front" >
                            <img class="img-tiem-front" ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + item.image_crop +'.jpg'}}">
                            <div class="item-type-front">{{item.type}}</div>
                        </div>
                        <p class="item-name-front">
                            <span ng-if="flagcheck == 1">{{item.topic_en}}</span>
                            <span ng-if="flagcheck == 2">{{item.topic_th}}</span>
                            <span ng-if="flagcheck == 3">{{item.topic_cn}}</span>
                        </p>
                        <div class="product_r">
                            <span class="base_price"></span>
                                <span class="sala"><span class="pay_later">THB</span>{{item.cost_a_agent_all | currency:"":0}}</span>                              
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
        <div class="modal fade" id="uploadprofile" role="dialog">
            <div class="modal-dialog">
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
</body>
<style>
  .htl_info {
    position: relative;
    z-index: 1;
    float: left;
    width: 100%;
    padding: 27px 0;
    /* background: #eee; */
}
.name {
    text-align: center;
    display: inline-block;
    width: 100%;
    vertical-align: middle;
    margin: 0;
    font: bold 17px/26px "microsoft yahei",simsun;
    color: #00BCD4;
}
#dateon{
    display: none;
}
#person-transfer {
    /* margin-left: 16%; */
    /* margin-right: -42px; */
    display: block;
    font-size: 13px;
    margin-top: 5px;
}
#numperson {
    border: 1px solid #9E9E9E !important;
    padding: 0 5px !important;
    width: 43%;
    /* margin-left: 13%; */
    margin-top: 11px;
    display: inline-block;
}
#numperson2 {
    border: 1px solid #9E9E9E !important;
    padding: 0 5px !important;
    width: 43%;
    float: right;
    /* margin-left: 13%; */
    margin-top: 11px;
    display: inline-block;
}
.booking-input {
    width: 85%;
    border: 1px solid #9E9E9E !important;
    height: 34px;
    padding-left: 5px;
    float: left;
    /* background: url(../img/icon-calendar.png) no-repeat #fff; */
    background-position: 92% 5px;
    border: none;
    box-shadow: none;
    border-radius: 3px;
    margin-top: 10px;
    font-size: 15px;
    color: #616161;
    cursor: pointer !important;
}
.form-date {
    width: 60%;
    /* height: 90px; */
    float: left;
    /* margin-left: 10px; */
}
</style>
<style >
    html, body{
    font-family: microsoft yahei;
   
     /*-webkit-touch-callout: none; /* iOS Safari */
    /* -webkit-user-select: none;   /* Chrome/Safari/Opera */
    /* -khtml-user-select: none;    /* Konqueror */
    /*-moz-user-select: none;      /* Firefox */
    /* -ms-user-select: none;       /* IE/Edge */
     /*user-select: none;*/
     overflow-x: hidden;
    width: 100%;
    /*background: #efefef !important;*/
}
#item-repeat{
  padding: 0 5px;
}
.company{
    display: block;
    /* line-height: 1.3; */
    font-weight: 300;
    font-size: 12px;
    /* min-height: 33px; */
    padding: 0;
    margin: 10px 10px 5px;
    color: #333;
    /* padding-left: 5%; */
    /* padding-right: 4px; */
}
#vacompany{
  font-weight: 500;

}
#textcompany{
  color: #9a9a9a;
  margin-right: 5px;
}
#imgadult{
  width: 15px;
  
}
#imgboy{
  width: 15px;
  margin-right: 5px;
}
.close{
  margin-left: 10% !important;
}
.btn-success{
    color: #fff !important;
    background-color: #55caf5 !important;
    border-color: #55caf5 !important;
}
.navbar-default {
    border-top: 4px solid #55caf5 !important;
}
.box-load-Tranfer{
  margin-left: 40%;
}
.box-load-Tmain{
  margin-left: 40%;
  margin-top: 40px;
}
#login-sucess{
  cursor: pointer;
}
.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
#time{
      display: none !important;
      width: 79%;
    display: block;
    margin-left: 7.8%;
    padding: 12px;
    margin-bottom: 14px;
    font-weight: 600;
    font-family: cursive;
    color: #fff;
    font-size: 15px;
    /* position: absolute; */
    border-radius: 7px;
    background: #17aa1c;
    z-index: 1000000;
}
.box-load{
  margin-top: 70px;
  margin-left: 50px;
}
#inTurnFadingTextG{
  width:420px;
  margin:auto;
}

.inTurnFadingTextG{
  color:rgba(14,184,20,0.49);
  font-family:Arial;
  font-size:44px;
  text-decoration:none;
  font-weight:normal;
  font-style:normal;
  float:left;
  animation-name:bounce_inTurnFadingTextG;
    -o-animation-name:bounce_inTurnFadingTextG;
    -ms-animation-name:bounce_inTurnFadingTextG;
    -webkit-animation-name:bounce_inTurnFadingTextG;
    -moz-animation-name:bounce_inTurnFadingTextG;
  animation-duration:2.37s;
    -o-animation-duration:2.37s;
    -ms-animation-duration:2.37s;
    -webkit-animation-duration:2.37s;
    -moz-animation-duration:2.37s;
  animation-iteration-count:infinite;
    -o-animation-iteration-count:infinite;
    -ms-animation-iteration-count:infinite;
    -webkit-animation-iteration-count:infinite;
    -moz-animation-iteration-count:infinite;
  animation-direction:normal;
    -o-animation-direction:normal;
    -ms-animation-direction:normal;
    -webkit-animation-direction:normal;
    -moz-animation-direction:normal;
}

#inTurnFadingTextG_1{
  animation-delay:0.85s;
    -o-animation-delay:0.85s;
    -ms-animation-delay:0.85s;
    -webkit-animation-delay:0.85s;
    -moz-animation-delay:0.85s;
}
#inTurnFadingTextG_2{
  animation-delay:1.01s;
    -o-animation-delay:1.01s;
    -ms-animation-delay:1.01s;
    -webkit-animation-delay:1.01s;
    -moz-animation-delay:1.01s;
}
#inTurnFadingTextG_3{
  animation-delay:1.18s;
    -o-animation-delay:1.18s;
    -ms-animation-delay:1.18s;
    -webkit-animation-delay:1.18s;
    -moz-animation-delay:1.18s;
}
#inTurnFadingTextG_4{
  animation-delay:1.35s;
    -o-animation-delay:1.35s;
    -ms-animation-delay:1.35s;
    -webkit-animation-delay:1.35s;
    -moz-animation-delay:1.35s;
}
#inTurnFadingTextG_5{
  animation-delay:1.52s;
    -o-animation-delay:1.52s;
    -ms-animation-delay:1.52s;
    -webkit-animation-delay:1.52s;
    -moz-animation-delay:1.52s;
}
#inTurnFadingTextG_6{
  animation-delay:1.69s;
    -o-animation-delay:1.69s;
    -ms-animation-delay:1.69s;
    -webkit-animation-delay:1.69s;
    -moz-animation-delay:1.69s;
}
#inTurnFadingTextG_7{
  animation-delay:1.86s;
    -o-animation-delay:1.86s;
    -ms-animation-delay:1.86s;
    -webkit-animation-delay:1.86s;
    -moz-animation-delay:1.86s;
}
#inTurnFadingTextG_8{
  animation-delay:2.69s;
    -o-animation-delay:2.69s;
    -ms-animation-delay:2.69s;
    -webkit-animation-delay:2.69s;
    -moz-animation-delay:2.69s;
}
#inTurnFadingTextG_9{
  animation-delay:2.86s;
    -o-animation-delay:2.86s;
    -ms-animation-delay:2.86s;
    -webkit-animation-delay:2.86s;
    -moz-animation-delay:2.86s;
}


#fountainTextG3-form{
       
        
        display: none;
         position: fixed;
    background: rgba(0, 0, 0, 0.4);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    
    -webkit-backface-visibility: hidden;
        background: #fff;
}
#fountainTextG4{
      display: block;
      position: absolute;
      margin-top: 280px;
      margin-left: 35%;
}
}#fountainTextG_1{
      animation-delay:0.75s;
        -o-animation-delay:0.75s;
        -ms-animation-delay:0.75s;
        -webkit-animation-delay:0.75s;
        -moz-animation-delay:0.75s;
    }
    #fountainTextG_2{
      animation-delay:0.9s;
        -o-animation-delay:0.9s;
        -ms-animation-delay:0.9s;
        -webkit-animation-delay:0.9s;
        -moz-animation-delay:0.9s;
    }
    #fountainTextG_3{
      animation-delay:1.05s;
        -o-animation-delay:1.05s;
        -ms-animation-delay:1.05s;
        -webkit-animation-delay:1.05s;
        -moz-animation-delay:1.05s;
    }
    #fountainTextG_4{
      animation-delay:1.2s;
        -o-animation-delay:1.2s;
        -ms-animation-delay:1.2s;
        -webkit-animation-delay:1.2s;
        -moz-animation-delay:1.2s;
    }
    #fountainTextG_5{
      animation-delay:1.35s;
        -o-animation-delay:1.35s;
        -ms-animation-delay:1.35s;
        -webkit-animation-delay:1.35s;
        -moz-animation-delay:1.35s;
    }
    #fountainTextG_6{
      animation-delay:1.5s;
        -o-animation-delay:1.5s;
        -ms-animation-delay:1.5s;
        -webkit-animation-delay:1.5s;
        -moz-animation-delay:1.5s;
    }
    #fountainTextG_7{
      animation-delay:1.64s;
        -o-animation-delay:1.64s;
        -ms-animation-delay:1.64s;
        -webkit-animation-delay:1.64s;
        -moz-animation-delay:1.64s;
    }
    #fountainTextG_8{
      animation-delay:1.75s;
        -o-animation-delay:1.75s;
        -ms-animation-delay:1.75s;
        -webkit-animation-delay:1.75s;
        -moz-animation-delay:1.75s;
    }
    #fountainTextG_9{
      animation-delay:1.93s;
        -o-animation-delay:1.93s;
        -ms-animation-delay:1.93s;
        -webkit-animation-delay:1.93s;
        -moz-animation-delay:1.93s;
    }
    #fountainTextG_10{
      animation-delay:2.07s;
        -o-animation-delay:2.07s;
        -ms-animation-delay:2.07s;
        -webkit-animation-delay:2.07s;
        -moz-animation-delay:2.07s;
    }
    #fountainTextG_11{
      animation-delay:2.15s;
        -o-animation-delay:2.15s;
        -ms-animation-delay:2.15s;
        -webkit-animation-delay:2.15s;
        -moz-animation-delay:2.15s;
    }
    #fountainTextG_12{
      animation-delay:2.24s;
        -o-animation-delay:2.24s;
        -ms-animation-delay:2.24s;
        -webkit-animation-delay:2.24s;
        -moz-animation-delay:2.24s;
    }
    #fountainTextG_13{
      animation-delay:2.30s;
        -o-animation-delay:2.30s;
        -ms-animation-delay:2.30s;
        -webkit-animation-delay:2.30s;
        -moz-animation-delay:2.30s;
    }
    #fountainTextG_14{
      animation-delay:2.36s;
        -o-animation-delay:2.36s;
        -ms-animation-delay:2.36s;
        -webkit-animation-delay:2.36s;
        -moz-animation-delay:2.36s;
    }
    #fountainTextG_15{
      animation-delay:2.40s;
        -o-animation-delay:2.40s;
        -ms-animation-delay:2.40s;
        -webkit-animation-delay:2.40s;
        -moz-animation-delay:2.40s;
    }
    #fountainTextG_16{
      animation-delay:2.45s;
        -o-animation-delay:2.45s;
        -ms-animation-delay:2.45s;
        -webkit-animation-delay:2.45s;
        -moz-animation-delay:2.45s;
    }
    #fountainTextG_17{
      animation-delay:2.51s;
        -o-animation-delay:2.51s;
        -ms-animation-delay:2.51s;
        -webkit-animation-delay:2.51s;
        -moz-animation-delay:2.51s;
    }
    #fountainTextG_18{
      animation-delay:2.55s;
        -o-animation-delay:2.55s;
        -ms-animation-delay:2.55s;
        -webkit-animation-delay:2.55s;
        -moz-animation-delay:2.55s;
    }
    #fountainTextG_19{
      animation-delay:2.60s;
        -o-animation-delay:2.60s;
        -ms-animation-delay:2.60s;
        -webkit-animation-delay:2.60s;
        -moz-animation-delay:2.60s;
    }
    #fountainTextG_20{
      animation-delay:2.64s;
        -o-animation-delay:2.64s;
        -ms-animation-delay:2.64s;
        -webkit-animation-delay:2.64s;
        -moz-animation-delay:2.64s;
    }
    .inTurnFadingTextGbook {
        color: rgba(14,184,20,0.49);
        font-family: Arial;
        font-size: 65px;
        text-decoration: none;
        font-weight: normal;
        font-style: normal;
        float: left;
        animation-name: bounce_inTurnFadingTextG;
        -o-animation-name: bounce_inTurnFadingTextG;
        -ms-animation-name: bounce_inTurnFadingTextG;
        -webkit-animation-name: bounce_inTurnFadingTextG;
        -moz-animation-name: bounce_inTurnFadingTextG;
        animation-duration: 2.37s;
        -o-animation-duration: 2.37s;
        -ms-animation-duration: 2.37s;
        -webkit-animation-duration: 2.37s;
        -moz-animation-duration: 2.37s;
        animation-iteration-count: infinite;
        -o-animation-iteration-count: infinite;
        -ms-animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
        -moz-animation-iteration-count: infinite;
        animation-direction: normal;
        -o-animation-direction: normal;
        -ms-animation-direction: normal;
        -webkit-animation-direction: normal;
        -moz-animation-direction: normal;
    }



@keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-o-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-ms-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-webkit-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-moz-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}
.box-left h4 {
  display: none;
}
.box-profile-login-user{
    display: block;
        width: 209px;
    height: 94px;
    /* border: solid 1px #ddd; */
    position: absolute;
    z-index: 1;
    margin-left: -26.8%;
    margin-top: 12px;
    background: #FFF;
    padding-top: 20px;
    padding-left: 30px;
    padding-right: 73px;
    padding-bottom: 78px !important;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}
.dropdown-menu li:hover{
  color: #FFF;
  background-color: #55caf5;
}
.navbar-default {
    
    border-top: 4px solid #55caf5;
   }
.navbar-nav .dropdown-menu li{
      padding: 8px 30px !important;
}
li..box-profile-login-user{
  padding: 0 !important;
}
.li-seting-profile li{
  border-left: none !important;

}

#li-seting-profile{

    border: none !important;
    padding: 8px;
}
.price-wrap {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    /* display: flex; */
    /* -webkit-flex-direction: row; */
    -moz-flex-direction: row;
    -ms-flex-direction: row;
    -o-flex-direction: row;
    /* flex-direction: row; */
    /* -webkit-box-align: center; */
    /* -webkit-align-items: center; */
    -ms-flex-align: center;
    align-items: center;
    padding-left: 10px;
    float: right;
    margin-right: 17px;
  }
.li-seting-profile li :hover{
   /* background-color: #ddd; */
}

#profile-data-hover {
    /* margin-left: 80%; */
    color: #000;
    font-size: 13px;
    min-width: 270px;
    
    padding: 0;
    width: auto;
}
a {
    
    cursor: pointer;
    text-decoration: none !important;
}
.thumb .vertical-align {
    height: 100%;
}
.masthead-picker-body {
    margin: 15px;
    white-space: nowrap;
}
.masthead-picker-footer {
    background: #f5f5f5;
    border-top: 1px solid rgba(0,0,0,0.1);
    padding: 10px 15px;
    overflow: hidden;
}
.masthead-picker-photo-wrapper{
  display: inline-block;
}
.masthead-picker-photo-wrapper img {
    border-radius: 50%;
    cursor: pointer;
    
}
.masthead-picker-info {
    display: inline-block;
    margin-left: 3%;
    margin-top: 5px;
    vertical-align: top;
}
.masthead-picker-name {
    font-weight: 500;
    margin-bottom: 1px;
}
.masthead-picker-footer .masthead-picker-button {
    float: left;
    height: 28px;
}
.masthead-picker-footer .masthead-picker-button:last-child {
    float: right;
}

.dropdown-menu i{
    position: absolute;
    left: 84%;
    margin-left: -6px;
    top: -9px;
    width: 0;
    height: 0;
    overflow: hidden;
    /* line-height: 0; */
    font-size: 0;
    vertical-align: middle;
    border-bottom: 8px solid #9E9E9E;
    border-top: 0 none;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
}
.locale-link{
  color: #333;
}
.lang-dropdown {
    margin-top: -4px;
    margin-right: 25px;
}
.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle;
}
#transfer{
  /*margin-left: 2.5%;
    width: 97.4%;*/
    margin-top: 50px;
}
/*.activetransfer{
  background: #0dabf9;
  border: 1px solid #0dabf9;
  color: #fff;
}*/
footer{
    background: #333;
    padding: 30px 0;
    margin-top: 150px;
    bottom: 0;
    height: 152px;
    border-bottom: 3px solid #55caf5;
    font-size: 13px;
}
footer .social{
  /*text-align: center;*/
}
footer .social ul{
  padding: 0;
  margin:0;
  line-height: 3;
  display: inline-block;
}
.dropdown-menu li{
  width: 100%;
}
footer .social li{
  
  display: inline-block;
  padding: 0 10px;
  color: #999;
}
footer .social li a{
  color: #8f9999;
}
.dropdown-menu ul :hover{
  background-color: #FFF !important;
}
footer .social .footer-right li img{
  display: inline-block;
  width: 35px;
}
footer .social .dropdown-menu li img{
  
  margin-right: 10px;
}
footer .social p{
  margin: 0;
  padding: 0;
  color: #fff;
  letter-spacing: 1px;
  margin-top: 20px;
}
.footer-right{
  float: right;
}
.btn-group .dropdown-menu{
  background-color: none !important;
}
.dropdown-menu {
    position: absolute;
    top: 99% ;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 0 !important;
    margin: 2px 0 0;
    list-style: none;
    font-size: 15px;
    text-align: left;
    background-color: #fff;
    border: none !important;
    /*border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,0.15);*/
    border-radius: 0px !important;
    /*-webkit-box-shadow: 0 6px 12px rgba(0,0,0,0.175);
    box-shadow: 0 6px 12px rgba(0,0,0,0.175);*/
    background-clip: padding-box;
}
.btn-group .dropdown-menu:before {
        content: '';
    width: 8px;
    height: 8px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    background: #fff;
    bottom: -4px;
    left: 10px;
    /*box-shadow: -1px -1px rgba(0,0,0,0.15);*/
    z-index: -1;
    margin-top: -4px;
}
.modal-body .box-separator{
  background: #d3d3d3;
  width: 1px;
}
.modal-body .social-btn .social-icon{

    padding: 8px 0 6px 5px;
    /* margin-top: 4px; */
    display: inline-block;
    font-size: 19px;
    /* border-right: 1px solid rgba(0,0,0,0.2); */
    /* margin-right: 10px; */
    width: 50px;
    text-align: center;
    font-weight: 600;
}
#loginmodal #login-modal {
  margin: 30px auto;
    border: 1px solid #ccc;
    background: #EDEFF1;
    padding: 20px;
    color: #355368;
    width: 680px;
    border-radius: 5px;
}

.modal-body .facebook-btn {
    background: #2b85c3;
    display: none;
}
.modal-body .social-btn {
    padding: 0 20px 0 0;
}

.modal-body .google-btn {
    background: #d03a3c;
}
.modal-body .social-btn {
    padding: 0 20px 0 0;
}
.modal-body .shadowed-btn {
    margin-top: 10px;
    color: #fff;
    border-radius: 5px;
    font-weight: bold;
    font-size: 12px;
    padding: 1px 10px;
}

.fxac {
    /* width: 100%; */
    /* display: -webkit-box; */
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    /* display: flex; */
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}


 .modal-footer {
    border-top: 1px solid #d3d3d3;
    margin-top: 20px;
    box-shadow: 0 1px #fff inset;
    padding-top: 16px;
    text-align: center !important;
}


.modal-body h4 {
    font-size: 16px;
    color: #355368;
    margin: 0;
    margin-bottom: 25px;
}



.box-left{
    width: 49%;
    float: left;
    display: inline-block;

   
}
.box-right{
    width: 50%;
    float: right;
    display: inline-block;
   
}
.modal-body .box-separator{
    background: #e5e5e5;
    width: 1px;
    text-align: center;
    display: inline-block;
    height: 245px;
}
#loginmodal .modal-body{
  overflow: hidden;
  padding: 0;
}
.modal-body .box-col{
  padding: 20px 20px 10px;
}
.google-btn{
  display: none;
}



.btn-primary {
    color: #ffffff;
    background-color: #17aa1c;
    border-color: transparent;
}

.btn-primary:hover {
    color: #ffffff;
    background-color: #159d1a;
    border-color: rgba(0,0,0,0);
}
.btn-success:hover {
    color: #fff;
    background-color: #42943f;
    border-color: #367b34;
}



.modal-body .form-actions .submit-row>input {
    width: 100%;
    
    font-weight: bold;
    font-size: 16px;
}
.modal-body input[type=email]{

    border-radius: 5px;
    padding: 5px 10px 5px 40px;
    height: auto;
    outline: 0;
    font-size: 16px;
    color: #355368;
}
.modal-body input[type=password]{

    border-radius: 5px !important;
    padding: 5px 10px 5px 40px;
    height: auto;
    outline: 0;
    font-size: 16px;
    color: #355368;
}
.modal-body .manage-fields-wrapper{
  margin-top: 25px;
}

.modal-body .submit-row {
    text-align: center;
}

.modal-body .cancel-link {
    display: inline-block;
    margin-top: 10px;
}




 input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
.modal-body #tooltip-reference-password{
  margin-top: 15px;
  margin-bottom: 30px;
}
.modal-body #tooltip-reference-email{
  margin-top: 15px;
}
.cast-num {
    position: absolute;
    width: 18px;
    font-size: 10px;
    height: 18px;
    color: #fff !important;
    text-align: center;
    top: 5px;
    /* border: 1px solid; */
    border-radius: 55%;
    background: #55caf5;
    margin-left: -8px;
    line-height: 19px;
    /* float: left; */
}
.cart-menu {
      padding: 10px 0;
    width: 70px;
    /* position: absolute; */
    /* float: right; */
    margin-left: 21%; 
    cursor: pointer;
    /* margin-top: -33px; */
}
header>div{
  height: 56px !important;
}

#login-modal .box-heading {
    text-align: center;
    margin: 0;
    color: #355368;
    font-size: 24px;
    border-bottom: 1px solid #d3d3d3;
    padding: 10px 0;
}


/*************/


main {
  position: relative;
  height: 100vh;
}
main .helper {
  background: rgba(0, 0, 0, 0.2);
  color: #ffea92;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%, -50%, 0);
  padding: 1.2em 2em;
  text-align: center;
  border-radius: 20px;
  font-size: 2em;
  font-weight: bold;
}
/*main .helper span {
  color: rgba(0, 0, 0, 0.2);
  font-size: 0.4em;
  display: block;
}*/

.dropdown-toggle p{
  margin-bottom: 0px;
    margin-top: 3px;
}

.channel-head {
  background: #55caf5;
    color: #fff;
    height: 137px;
    background-size: contain !important;
}
.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
.ellipsis {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.bread{
  margin-top: 20px;
}
#color-icon{
  color: #fff;
}



.select-menu-s-city-transfertype li:hover {
    background: #FFF;
    border: 1px solid #55caf5;
    color: #333;
}
.select-menu-s-city-transfertype {
    padding: 0;
    margin: auto;
    display: inline-block;
}
.select-menu-s-city-transfertype li{
      margin-left: 16px;
    /* width: 78px; */
     border: 1px solid #FFF;
    text-align: center;
    display: inline-block;
    line-height: 20px;
    /* margin-right: 15px; */
    font-size: 13px;
    padding: 0px 5px;
    border-radius: 3px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
    
    
    margin-bottom: 10px;
    /* margin-bottom: 18px; */
    /* min-height: 478px; */
}
.header-transfer{
  height: 70px;
    line-height: 3;
    margin-bottom: 0;
    background: #55caf5;
    padding: 5px 36px;
    font-size: 20px;
    color: #fff;
}
.header-hotel{
    height: 70px;
    line-height: 5;
    margin-bottom: 0;
    background: #55caf5;
    padding: 5px 36px;
    color: #fff;
    line-height: 5;
}
/*.cityname0{
  background: #0dabf9;
  border: 1px solid #0dabf9;
  color: #fff;
}*/
#item-select-view{

  width: 23.6%;
}
.facebook{
  background-repeat: no-repeat;
        width: 40px;
    height: 40px;
    background-size: 40px;
    display: inline-block;
  background-image: url("../icon/facebook.png"); 
}
.googleplus{
   background-repeat: no-repeat;
        width: 40px;
    height: 40px;
    background-size: 40px;
    display: inline-block;
  background-image: url("../icon/google-plus.png"); 
}
.twitter{
  background-repeat: no-repeat;
        width: 40px;
    height: 40px;
    background-size: 40px;
    display: inline-block;
  background-image: url("../icon/twitter.png"); 
}
.border{
    width: 5px;
    height: 5px;
}
.reset img{
    margin-top: -14px;
    width: 100px;

}
.header{
  width: 100%;
  height: 40px;
  border-bottom: solid 1px #E6E6E6;
  background-color:#31708f;





}

.base-nav {
    border-bottom: 10px solid #0dabf9;
    position: absolute;
    /* background: #0dabf9; */
    width: 98%;
    margin-left: 1%;
    /* margin-left: 12.5%; */
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
}
.nav-head{
    position: relative;
    z-index: 26;
    width: 100%;
    /*max-width: 1263px;*/
    /* height: 165px; */
    /* margin: 0 auto; */
}
.dropdown-menu>li{
  cursor: pointer;
}
.navbar{
  /* border-bottom: 1px solid #0dabf9; */

}
.navbar-default{
  margin-bottom: 0 !important;
}
.navbar-brand{
    font-family: cursive;
    color: #55caf5 !important;
    font-weight: 600;
    letter-spacing: 0.1px;
    cursor: pointer;
    font-size: 25px !important;
    padding: 17px 20px !important;
}

.navbar-nav{
     /* margin-top: 27px !important;*/
    /* line-height: 6; */
    /*margin-left: 20px !important;*/
}
.navbar-nav li{
  padding: 3px 18px !important;
}
.navbar-right{
  width: auto !important;
}

.navbar{
  border-radius: 0px !important;
}
.nav-bar{
  position: relative;
    z-index: 25;
    /* min-width: 980px !important; */
    max-width: 1180px;
    margin: 0 auto;
    padding: 0;
    line-height: 40px;
    font-size: 15px;
    margin-left: 15%;
    background-color: #2577e3;
  }
  .nav-bar li{
    position: relative;
    /* background: rgb(49, 112, 143); */
    display: inline-block;
    height: 39px;
    /*border-radius: 3px;*/
    /* color: #fff; */
    font-weight: 500;
    float: left;
    padding: 0 4px;
    text-align: center;
    cursor: pointer;
    margin-top: 60px;
  }
  .nav-bar li:hover{
    /*background-color: #209eff;*/
    /*border: solid 2px #0a56bb ;*/
    /*color: #FFF; */
    text-decoration:none;
    /*border-radius: 3px;*/
    cursor: pointer;
  }
  .navbar-default .navbar-toggle {
    border-color: #ddd;
    margin-top: 20px !important;
}
#tour {
    /* width: 100%;
    margin-left: 0%; */
   margin-top: 50px !important;
}
#hotel{
  margin-top: 50px !important;
}
  #active-home {
        /* background: #0dabf9; */
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    color: #0dabf9;
}
#product-promote{
    margin-top: 30px;
}
.box-item-promote{
    /* padding-top: 30px; */
    background: #fff;
    padding:0;
    padding-top: 15px;
  }
.channel-courses-list {
    margin-right: 10px;
    margin-bottom: 20px;
    padding-left: 0;
    display: inline-block;
}

.channel-courses-list .course-box {
    width: 216px;
}
.course-box.small {
    width: 227px;
}


.course-box.small:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  /*-webkit-transform: scale(1.2);
    -moz-transform:  scale(1.2);
    -o-transform:  scale(1.2);
    -ms-transform:  scale(1.2);
    z-index: 100000;
    background-color: #fff;
    top:20px;*/
    background-color: #fff;


}
.box-second-row :hover{
  text-decoration: none !important;
}
.course-box .title :hover{
   text-decoration: none !important;
}
/* The fast way */
.course-box.small {
    cursor: pointer;
      height: 345px;
    text-decoration: none !important;
    background: #FFF;
    box-shadow: 1px 2px 2px 1px rgba(0,0,0,0.15);
}
/*.course-box.small:first-child{
    margin-right: 10px;
}*/
/* Pre-render the bigger shadow, but hide it */
.course-box.small::after {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  opacity: 0;
  transition: opacity 0.3s ease-in-out:
}

/* Transition to showing the bigger shadow on hover */
.course-box.small:hover::after {
  opacity: 1;
}
.course-box {
    display: inline-block;
    position: relative;
    vertical-align: top;
    white-space: normal;
    width: 270px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.15);
    text-align: left;
}

.course-box .add-to-wishlist {
    position: absolute;
    display: inline-block;
    right: 8px;
    top: 10px;
    border: none;
    margin: 0;
    z-index: 2;
}
.course-box .course-thumb>img {
    width: 100%;
    opacity: 1;
}
.course-box .title  {
    display: block;
    line-height: 1.3;
    font-weight: bold;
    font-size: 13px;
    min-height: 33px;
    padding: 0;
    margin: 10px 10px 5px;
        color: #333;
}
.course-box .dib  {
    display: block;
    line-height: 1.3;
    font-weight: 300 !important;
    font-size: 13px;
    min-height: 33px;
    padding: 0;
    margin: 10px 10px 5px;
        color: #333;
}
.course-box .price {
    font-size: 15px;
    font-weight: bold;
}
.pr{
  padding-left: 10px;
}

.s-rating.static {
    margin-left: -2px;
    margin-right: 2px;
}
.s-rating {
    position: relative;
    white-space: nowrap;
    display: inline-block;
}
/*.course-box .price {
    float: left;
    font-size: 15px;
    font-weight: bold;
}*/
.course-box .lec-info {
    z-index: 1;
    color: #fff;
    font-weight: 600;
    font-size: 13px;
    opacity: 0;
    background: none;
    position: absolute;
    left: 0;
    text-align: left;
    margin-left: 10px;
    z-index: 2;
    -webkit-text-stroke: .4px #fff;
    text-stroke: .4px #fff;
    top: 70px;
}
.discover-courses-list li{
  display: inline-block;
}
.ban-info{
  margin-top: 53px;
      background: #ebefc2;
    position: relative;
    height: 622px;
    width: 100%;
    
    
}
.navbar-nav li{
      /*border-right: 1px solid;
      border-left: 1px solid;*/
      border-left: 1px solid rgba(191,191,191,0.45);
      

}
#navb-left .dropdown-toggle{
    border-left: 1px solid rgba(191,191,191,0.45);
    border-right: 1px solid rgba(191,191,191,0.45);
    padding: 18px 18px;
    cursor: pointer;
    margin-bottom: 0
}

/*.navbar-nav div{
    padding: 3px 18px !important;
  }  */
  .nav-bar li.actives{
    background-color: #fff;
    border: solid 2px #0a56bb ;
    color: #333;
    text-decoration:none;
  }
  .nav-bar >li.bar-5{
    padding: 0 20px;
  }
  .nav-bar >li.bar-6{
    padding: 0 20px;
  }

  .nav-bar >li.bar-login{
    position: inline-block;
    margin-left: 9%;
  }
  .box-btn-select-menu-s li.active{
        /* background-color: #46aaff; */
    /* border: solid 2px #0a56bb; */
        /* background-color: #46aaff; */
    /* border: solid 2px #0a56bb; */
    color: #ffffff !important;
    background: #55caf5;
    text-decoration: none;
  }

  .icon-language {
   position: relative;
    display: block;
    z-index: 1000;
    width: 2.5%;
    height: 4%;
    right: -6.5%;
    top: 68px;
}
.dropdown-content {
   display: none;
    position: relative;
    z-index: 1000;
    /* left: 1483px; */
    float: right;
    top: 15px;
    /* background-color: #f9f9f9; */
    width: 70px;
    /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
}
.dropdown-content li {
    color: black;
    /*padding: 28px;*/
    text-decoration: none;
    display: block;
    
}
.dropdown-content li img {
    color: black;
    /* padding: 28px; */
    text-decoration: none;
    display: block;
    width: 100%;
}
.icon-container {
    position: relative;
    display: block;
    z-index: 500;
    /* left: 1539px; */
    float: right;
    top: 61px;
    height: 38px;
    width: 42px;
    border-radius: 90px 0 0 90px;
    -moz-border-radius: 90px 0 0 90px;
    -webkit-border-radius: 90px 0 0 90px;
    background: rgba(0,0,0,.0001);
}
/*.icon-language-link1{
    
    display: block;
    
    margin-top: -17px;
    margin-left: 10px;
}
.icon-language-link2{
   
    display: block;
   
    margin-top: -18px;
    margin-left: 10px;
}
.icon-language-link3{
    
    display: block;
   
    margin-top: -18px;
    margin-left: 10px;
}*/
#product-promotion{
  /*margin-left: 2.4%;*/
}



  .box-all-item-tour{
    text-align: center;
    float: right;
    margin-right: 6px;
    width: 100%;
    /* line-height: 4; */
    border-radius: 9px;
    height: 630px;
    color: #fff;
    background: #ebefc2;
  }
  .box-all-item-tour span{
    color: #080808;
    margin-top: 55px;
    position: absolute;
    margin-left: -22px;
  }
  .box-all-item-hotel{
    text-align: center;
    float: right;
    margin-right: 6px;
    width: 100%;
    /* line-height: 4; */
    border-radius: 9px;
    height: 700px;
    color: #fff;
    background: #ebefc2;
  }
  .box-all-item-hotel span{
    color: #080808;
    margin-top: 55px;
    position: absolute;
    margin-left: -22px;
  }
  
  .bar:first-child{
    margin-left: 8px;
  }
 .box-section-transfer{
        width: 100%;
    margin-left: 0px !important;
    /* height: auto !important; */
    /* border: solid 1px #ddd; */
    padding: 4px 0;
    height: 700px;
    overflow: hidden;
    background: #fff;
  }
  

.wrapper{
  width: 70%;
  margin: 0 15%;
  color: #333;
  border-bottom: solid 1px #E6E6E6;
  height: 600px;
}

.download-apps {
  right: 0;
    width: 454px;
    margin-top: -39px;
    margin-left: 71.5%;
}



#logo{
    display: inline-block;
    position: absolute;
    margin-top: 18px;
    margin-left: 15px;
    color: #1DB19F;

}
.cart-box{

  position: absolute;
  width: 50px;
  height: 50px;
  background: #333;

}
.clear span a{
  text-decoration: initial;
  color: #FFF;
}


#isearch{
  position: absolute;
  border-radius: 4px;
  /* margin-left: 180px; */
  border: solid 2px rgba(16, 173, 154, 0.86);
  height: 28px;
  width: 394px;
  float: left;
  padding: 14px;
  margin-top: 40px;
  z-index: 1;
  margin-left: -1018px;
}
#isearch i {
  padding: 0 5px;
}
 .bt-icon{
   position: absolute;
   color: #fff;
   padding: 8px 15px;
   width: 50px;
   height: 20px;
   background-color: rgba(16, 173, 154, 0.86);
   border-bottom-right-radius: 4px;
   border-top-right-radius: 4px;
   margin-left: -675px;
   position: relative;
   height: 28px;
   top: 42px;
   z-index: 1;
 }
 .books{
    width: 80px;
    height: 80px;
    border-radius: 50px;
    background-color: #333;
    position: absolute;
    color: #fff;
    text-align: center;
    z-index: 1;
 }
 #box-item{
    display: none;
    width: 544px;
    height: 320px;
    background-color: #fff;
    position: absolute;
    margin-top: 32px;
    z-index: 1;
    /* margin-top: 5px; */
    margin-left: 35px;
 }
 .img-slider{
  width: 100%;
    height: 245px;
    background: url(../images/Travel-banner.jpg);
    background-size: cover;
    text-align: center;
    background-repeat: no-repeat;
    line-height: 37px;
}
.img-slider img{
    width: 100%;
    height: 100%;
    background: #ddd;
    /*margin-top: 5px;*/

    position: relative;

}
.img-tiem{
  width: 100px;
 /* height: 100px; */
}
.box-detail{
    /* border: solid 1px #ccc; */
    height: 615px;
    /* border-top: solid 2px #fb833f; */
    /* border-top-left-radius: 70px; */
    margin-top: 11px;
    /* background-color: #f5f5f5; */
    /* overflow: hidden; */
    /* max-width: 1155px; */
    /* overflow-y: scroll; */


}
.box-hotel{
    border-top-left-radius: 70px; */
    height: 425px;
    border-radius: 4px;
    margin-top: 50px;
    background-color: #f5f5f5;
    overflow: hidden;
    margin-left: 130px;
    margin-top: 30px;
    /* width: 100%; */
    overflow: hidden;
}
.s-menu{
    width: 80px;
    height: 273px;
    position: relative;
    background-color: rgba(37, 227, 155, 0.43);
    top: 45px;
  }
.menu-n{
  /* border: solid 2px #ddd; */
    width: 100%;
    float: left;
    z-index: 1;
    height: 800px;
}
.menu-s{
  border-bottom: solid 1px #333 !important;
  background: #333 !important;

}
.img-head{
  width: 100%;
    height: 100px;
    background: #ddd;
}
.size-img{
  height: 100px;
  width: 100%;
}
.box-h{
  background: #000;
    top: 80px;
    border-radius: 3px;
    font-size: 11px;
    padding: 5px 10px;
    height: 25px;
    color: #fff;
    position: absolute;

}
.w3-content{
  width: 100%;
  height: 400px;
}

.login{
    position: relative;
    margin-top: 0;
    background-color: #fd7b2b;
    width: 145px;
    color: #FFF;
    width: 180px;
    display: inline-block;
    height: 39px;
    padding: 7px 33px;
    float: right;
    margin-right: 56px;
    margin-top: 80px;

}
.login i {
  margin-right: 10px;
}


/*-------------------product------------------------*/
.product-item {
    position: relative;
    width: 100%;
    height: 82px;
    float: left;
    overflow: hidden;
    transition: all .2s linear;
    padding: 10px 2px;
    margin-bottom: 20px;
    margin: 0;
    border-bottom: 1px solid #e5e5e5;
    top: 25px;
    cursor: pointer;
    border-top: solid 1px #eee;

}



/* Transition to a bigger shadow on hover */
.product-item:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  /*-webkit-transform: scale(1.2);
    -moz-transform:  scale(1.2);
    -o-transform:  scale(1.2);
    -ms-transform:  scale(1.2);
    z-index: 100000;
    background-color: #fff;
    top:20px;*/
    background-color: #fff;


}

/* The fast way */
.product-item {
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
}
.product-item:first-child{
    margin-bottom: 10px;
}
/* Pre-render the bigger shadow, but hide it */
.product-item::after {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  opacity: 0;
  transition: opacity 0.3s ease-in-out:
}

/* Transition to showing the bigger shadow on hover */
.product-item:hover::after {
  opacity: 1;
}
.item-thumbnail {
    position: relative;
    display: inline-block;
    float: left;
    width: 80px;
    height: 60px;
    margin-bottom: 3px;
    overflow: hidden;
    background-color: #ddd;
    cursor: pointer;
}
.item-thumbnail img{
    width: 100%;
    height: 100%;
    border-radius: 6px;
}
.item-select-view{
    width: 100%;
    height: 490px;
    border: solid 1px #ccc;
    margin-top: 7px;
    background: #00BCD4;
}
.item-name {
    height: 16px;
    line-height: 16px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 0 5px;
}
.item-info {
    position: relative;
    height: 35px;
    text-align: right;
    padding: 0 5px;
}
.price {
  position: relative;
  font-weight: bold;
  list-style: none;
  color: #000;
}
.item-type {
      display: block;
    float: left;
    margin-top: 20px;
    margin-left: 10px;
}
.pro-duct{
    margin-left: 0;
    margin-top: 15px;
    /* background: #333; */
    height: 425px;
    float: right;
    padding: 22px 34px;
    width: 985px;
}
.btn-front{
    text-align: center;
    position: relative;
    border-radius: 2px;
    padding: 10px 0;
    color: #fff;
    background-color: rgba(29, 177, 159, 0.86);
    border: solid 2px rgba(29, 177, 159, 0.86);
    width: 148px;
    display: inline-block;
    font-weight: 500;
    font-size: 15px;
}
.btn-front:hover{
    background-color: #fff;
    border: solid 2px #080808;
    color: #333;

}
.btn-enable{
    text-align: center;
    position: relative;
    border-radius: 2px;
    padding: 10px 0;
    color: #fff;
    background-color: rgba(29, 177, 159, 0.86);
    border: solid 2px rgba(29, 177, 159, 0.86);
    width: 148px;
    display: inline-block;
    font-weight: 500;
    font-size: 15px;

}
.btn-enable:hover{
    background-color: #fff;
    border: solid 2px #080808;
    color: #333;

}
.btn-promotion{
    text-align: center;
    position: relative;
    border-radius: 2px;
    padding: 10px 0;
    color: #fff;
    background-color: rgba(29, 177, 159, 0.86);
    border: solid 2px rgba(29, 177, 159, 0.86);
    width: 148px;
    display: inline-block;
    font-weight: 500;
    font-size: 15px;

}
.btn-promotion:hover{
    background-color: #fff;
    border: solid 2px #080808;
    color: #333;

}
.btn-top{
    text-align: center;
    position: relative;
    border-radius: 2px;
    padding: 10px 0;
    color: #fff;
    background-color: rgba(29, 177, 159, 0.86);
    border: solid 2px rgba(29, 177, 159, 0.86);
    width: 148px;
    display: inline-block;
    font-weight: 500;
    font-size: 15px;

}
.btn-top:hover{
    background-color: #fff;
    border: solid 2px #080808;
    color: #333;

}
.box-item-i{
  max-width: 100%;
      padding: 5px;
      /*background: #333;*/
      height: 500px;
      display: inline-block;
}
.box-item-ii{
  width: 30%;
      background: #333;
      height: 800px;
      display: inline-block;
}
.box-item-iii{
  width: 30%;
      background: #333;
      height: 800px;
      display: inline-block;
}
.box-btn-select{
    /* float: left; */
    /* width: 90px !important; */
    /* background-color: #5eb2f9; */
    /* zoom: 1; */
    z-index: 1000;
    margin-top: 300px;
    position: absolute;
    margin-bottom: 0;
    margin-left: 31px;
    padding-left: 0;

}

#rootmenu{
    border: solid 1px #337ab7;
    height: 40px;
    position: relative;
    text-align: center;
    margin-left: 50px;
    margin-top: -3px;
    margin-bottom: 4px;
    display: none;

}
.tbflach{
    /*margin-top: 20px;*/
       margin-left: 5px;
}
.inner-tabs-nav li{
    height: 30px;
    float: left;
    display: inline-block;
    line-height: 20px;
    margin-right: 15px;
    padding: 6px 10px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
}
.inner-tabs-nav li:first-child{
    margin-left: 10px;

}
.inner-tabs-nav>li:hover {
    background: #fb833f;
    color: #fff;
    border-radius: 3px;
    text-decoration: none;
    padding: 6px 10px;
}
.box-inner-tabs-nav{
    display: block;
    position: relative;
    height: 31px;
    margin-top: 15px;
}

.inner-tabs-nav li.active{
    background: #fb833f;
    color: #fff;
    border-radius: 3px;
    background: #fb833f;
    /*border-left: solid 2px #fb833f;
    border-bottom: solid 2px #fb833f;
    border-right: solid 2px #fb833f;
    color: #333;*/
    border-radius: 3px;
}


.box-btn-select li{
        /* width: 50px; */
    /* float: left; */
    text-align: center;
    /* display: inline-block; */
    line-height: 20px;
    /* margin-right: 15px; */
    padding: 10px 0;
    /* list-style: none; */
    text-decoration: none;
    cursor: pointer;
    border-bottom: solid 1px #eee;
    /* color: #fff !important; */
    /* margin-bottom: 18px; */
    /* background: #ddd; */
}
.box-btn-select li:first-child{
  /*  margin-left: -41px; */

}
.box-btn-select>li:hover {
    /*border-left: 6px solid transparent;
    border-right: 6px solid transparent;*/
    /*border-bottom: 6px solid #fb833f;*/
    color: #FFF;
    background: #999;
   
    text-decoration: #3cbbac;

}
.box-btn-select>li#hotel {
    /* border-bottom: 6px solid #fb833f; */
    color: #FFF;
    background: #999;
    border-radius: 3px;
    text-decoration: #3cbbac;
}

.box-btn-select li.rel {
  color: #FFF;
  background: #999;
  border-radius: 3px;
  text-decoration: #3cbbac;
}
.pro_list .pro_fl {
    width: 208px;
    background: #fb833f;
    min-height: 478px;
}
.pro_fl {
    width: 170px;
    /*border-top-left-radius: 80px;*/
    background: #fb833f;

    min-height: 560px;
}
.box-btn-select-menu-s{
  padding: 0;
  margin: auto;
  background: #FFF;
}
.box-btn-select-menu-s li{
    /* width: 85px; */
    text-align: center;
    display: inline-block;
    line-height: 20px;
    /* margin-right: 15px; */
    padding: 2px 15px;
    border-radius: 3px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
    border-bottom: solid 1px #eee;
    color: #333 !important;
    /* margin-bottom: 18px; */
    /* background: #ddd; */
}
.box-btn-select-menu-s li:hover{
    color: #fff !important;
    background-color: #55caf5;
}

.box-btn-select-menu-s-hotel li:hover {
    color: #fff !important;
    background-color: #fb833f;
}
.box-btn-select-menu-s-hotel li.active {
    background-color: #fb833f;
    /* border: solid 2px #0a56bb; */
    color: #fff !important;
    text-decoration: none;
}
.box-btn-select-menu-s-hotel li {
    /* width: 56px; */
    text-align: center;
    display: inline-block;
    line-height: 20px;
    /* margin-right: 15px; */
    padding: 5px 19px;
    border-radius: 3px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
    border-bottom: solid 1px #eee;
    color: #333 !important;
    /* margin-bottom: 18px; */
    /* background: #ddd; */
}
.box-btn-select-menu-s-hotel{
  padding: 0;
  margin: auto;
}



.box-btn-select-menu-s-transfer li:hover {
    color: #fff !important;
    background-color: #fb833f;
}
.box-btn-select-menu-s-transfer li.active {
    background-color: #02946d;
    /* border: solid 2px #0a56bb; */
    color: #fff !important;
    text-decoration: none;
}
.box-btn-select-menu-s-transfer li {
    /* width: 56px; */
    text-align: center;
    display: inline-block;
    line-height: 20px;
    /* margin-right: 15px; */
    padding: 5px 19px;
    border-radius: 3px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
    border-bottom: solid 1px #eee;
    color: #333 !important;
    /* margin-bottom: 18px; */
    /* background: #ddd; */
}
.box-btn-select-menu-s-transfer{
  padding: 0;
  margin: auto;
}


.select-menu-s-city{
  padding: 0;
    margin: auto;
    display: inline-block;
  }
.select-menu-s-city li{
      margin-left: 16px;
    /* width: 78px; */
    text-align: center;
    display: inline-block;
    line-height: 20px;
    /* margin-right: 15px; */
    font-size: 13px;
    padding: 0px 5px;
    border-radius: 3px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
    border: 1px solid #fff;
   
    margin-bottom: 10px;
    /* margin-bottom: 18px; */
    /* min-height: 478px; */
}
.select-menu-s-city li:hover{
    color: #333 !important;
    /*background-color: #fff;*/
    border: 1px solid #55caf5;
}
.select-menu-s-city-transfer{
  padding: 0;
    margin: auto;
    display: inline-block;
  }
.select-menu-s-city-transfer li{
      margin-left: 16px;
    /* width: 78px; */
    text-align: center;
    display: inline-block;
    line-height: 20px;
    /* margin-right: 15px; */
    font-size: 13px;
    padding: 0px 5px;
    border-radius: 3px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
    border: 1px solid #fff;
   
    margin-bottom: 10px;
    /* margin-bottom: 18px; */
    /* min-height: 478px; */
}
.select-menu-s-city-transfer li:hover{
       /* color: #333 !important; */
    /* background-color: #fff; */
    border: 1px solid #55caf5;
}

.select-menu-s-city-hotel{
  padding: 0;
    margin: auto;
    display: inline-block;
  }
.select-menu-s-city-hotel li{
      margin-left: 16px;
    /* width: 78px; */
    text-align: center;
    display: inline-block;
    line-height: 20px;
    /* margin-right: 15px; */
    font-size: 13px;
    padding: 0px 5px;
    border-radius: 3px;
    list-style: none;
    text-decoration: none;
    cursor: pointer;
    
    color: #333 !important;
    margin-bottom: 10px;
    /* margin-bottom: 18px; */
    /* min-height: 478px; */
}
.box-btn-select li>#i-hotel>a{
  background: #ccc;

}
.box-btn-select>li.hotelss{
  color: #fff;
    background-color: #337ab7;
}
.select-menu-s-city-hotel li:hover{
    color: #fff !important;
    background-color: #55caf5;
}
.select-menu-s-city-hotel li.cityactive{
         background-color: #55caf5; 
    /* border: solid 2px #0a56bb; */
    color: #fff !important;
    text-decoration: none;
  }

  


.select-menu-s-city-transfer{
  padding: 0;
    margin: auto;
    display: inline-block;
  }


.oh {
    overflow: hidden;
}
.pos_r {
    position: relative;
}
.fl {
    float: left;
}
.pro_list .pro_fl .pro_choice {
    position: absolute;
    right: -2px;
    top: 121px;
}
.pro_choice {
    position: absolute;
    right: -2px;
    top: 121px;
}
.pro_choice li h3 {
    line-height: 37px;
}
li{
    list-style: none;
}


.mySlides {
  width: 100%;
  height: 100%;
}

/*----amimate------*/

.cssload-container{
  margin-top: -193px;
    margin-left:720px;
    position: absolute;
}
#cssload-container{

}

.cssload-whirlpool,
.cssload-whirlpool::before,
.cssload-whirlpool::after {
    position: absolute;
    top: 50%;
    left: 50%;
    border: 2px solid rgb(204,204,204);
    border-left-color: rgba(26,168,204,0.98);
    border-radius: 1748px;
        -o-border-radius: 1748px;
        -ms-border-radius: 1748px;
        -webkit-border-radius: 1748px;
        -moz-border-radius: 1748px;
}

.cssload-whirlpool {
    margin: -44px 0 0 -44px;
    height: 88px;
    width: 88px;
    animation: cssload-rotate 2500ms linear infinite;
        -o-animation: cssload-rotate 2500ms linear infinite;
        -ms-animation: cssload-rotate 2500ms linear infinite;
        -webkit-animation: cssload-rotate 2500ms linear infinite;
        -moz-animation: cssload-rotate 2500ms linear infinite;
}

.cssload-whirlpool::before {
    content: "";
    margin: -40px 0 0 -40px;
    height: 77px;
    width: 77px;
    animation: cssload-rotate 2500ms linear infinite;
        -o-animation: cssload-rotate 2500ms linear infinite;
        -ms-animation: cssload-rotate 2500ms linear infinite;
        -webkit-animation: cssload-rotate 2500ms linear infinite;
        -moz-animation: cssload-rotate 2500ms linear infinite;
}

.cssload-whirlpool::after {
    content: "";
    margin: -51px 0 0 -51px;
    height: 98px;
    width: 98px;
    animation: cssload-rotate 5000ms linear infinite;
        -o-animation: cssload-rotate 5000ms linear infinite;
        -ms-animation: cssload-rotate 5000ms linear infinite;
        -webkit-animation: cssload-rotate 5000ms linear infinite;
        -moz-animation: cssload-rotate 5000ms linear infinite;
}



@keyframes cssload-rotate {
    100% {
        transform: rotate(360deg);
    }
}

@-o-keyframes cssload-rotate {
    100% {
        -o-transform: rotate(360deg);
    }
}

@-ms-keyframes cssload-rotate {
    100% {
        -ms-transform: rotate(360deg);
    }
}

@-webkit-keyframes cssload-rotate {
    100% {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes cssload-rotate {
    100% {
        -moz-transform: rotate(360deg);
    }
}
/*---*/
.product-item2 {
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  transition: box-shadow 0.3s ease-in-out:
}

/* Transition to a bigger shadow on hover */
.product-item2:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  /*-webkit-transform: scale(1.2);
    -moz-transform:  scale(1.2);
    -o-transform:  scale(1.2);
    -ms-transform:  scale(1.2);
    z-index: 100000;
    background-color: #fff;
    top:20px;*/
    background-color: #fff;


}

/*-----*/
.boat-box{
  margin-left: 130px;
  margin-top: 5px;
  /* width: 100%; */
  overflow: hidden;
}
.spa-box{
  width: 100%;
   /* margin-left: 6px; */
    /* margin-top: 30px; */
    /* width: 100%; */
    overflow: hidden;
}
.box-section-spa{
    /*border: solid 1px #ddd;*/
    padding: 4px 0;   
    width: 100%;
    height:655px;
    overflow: hidden;
    background: #fff;
}
.box-section-hotel{
    /* border: solid 1px #ddd; */
    padding: 4px 0;
    width: 100%;
    height: 670px;
    overflow: hidden;
    background: #fff;
}

.menu-type{
  position: relative;
  
}
.spa-item{
      /* background: #aaa; */
    /* width: 100%; */
    /* height: 440px; */
    /* padding: 0 10px; */
    padding-bottom: 50px;
    /* overflow: hidden; */
    border-bottom: 1px solid #e5e5e5 !important;
}
.text-head-spa{
      margin-top: 24px;
    font-size: 21px;
    /* width: 100%; */
    color: #3983e5;
    /* border-bottom: 2px solid #3983e5; */
    text-align: left;
    /* position: absolute; */
    padding: 0px 11px;
    display: inline-block;
    /*font: 17px/26px "Microsoft YaHei", "SimHei", SimSun, Tahoma, Verdana, Arial, sans-serif;*/
    padding-bottom: 7px;
    cursor: pointer;
  }
.product-item-sec-2{
    position: relative;
    width: 100%;
    height: 295px;
    float: left;
    overflow: hidden;
    transition: all .2s linear;
    margin-bottom: 20px;
    margin: 0;
    /* border-bottom: 1px solid #e5e5e5; */
    /* top: 25px; */
    margin-bottom: 22px;
    cursor: pointer;
    box-shadow: 0px 1px 2px 1px rgba(0,0,0,0.15);

}
.product-item-sec-2:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  /*-webkit-transform: scale(1.2);
    -moz-transform:  scale(1.2);
    -o-transform:  scale(1.2);
    -ms-transform:  scale(1.2);
    z-index: 100000;
    background-color: #fff;
    top:20px;*/
    background-color: #fff;


}
/* The fast way */

.product-item-sec-2::after {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  opacity: 0;
  transition: opacity 0.3s ease-in-out:
}

/* Transition to showing the bigger shadow on hover */
.product-item-sec-2:hover::after {
  opacity: 1;
}

.product-item-sec-hotel{
    position: relative;
    width: 100%;
    height: 290px;
    float: left;
    overflow: hidden;
    transition: all .2s linear;
    margin-bottom: 20px;
    margin: 0;
    /* border-bottom: 1px solid #e5e5e5; */
    /* top: 25px; */
    margin-bottom: 22px;
    
    box-shadow: 0px 1px 2px 1px rgba(0,0,0,0.15);

}
.product-item-sec-hotel:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  /*-webkit-transform: scale(1.2);
    -moz-transform:  scale(1.2);
    -o-transform:  scale(1.2);
    -ms-transform:  scale(1.2);
    z-index: 100000;
    background-color: #fff;
    top:20px;*/
    background-color: #fff;


}
/* The fast way */

.product-item-sec-hotel::after {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  opacity: 0;
  transition: opacity 0.3s ease-in-out:
}

/* Transition to showing the bigger shadow on hover */
.product-item-sec-hotel:hover::after {
  opacity: 1;
}

.product-item-sec-hotel img {
    width: 100%;
    ./* height: 125px; */
}



.item-thumbnail-sec-2{
  position: relative;
    display: inline-block;
    float: left;
    width: 100%;
    height: 125px;
    margin-bottom: 5px;
    overflow: hidden;
    background-color: #ddd;
    cursor: pointer;
}
.item-name-sec-2{
    /*height: 16px; */
    /* line-height: 16px; */
    /* text-align: left; */
    /* white-space: nowrap; */
    /* overflow: hidden; */
    /* text-overflow: ellipsis; */
    display: block;
    line-height: 1.3;
    font-weight: bold;
    font-size: 13px;
    min-height: 33px;
    padding: 0;
    margin: 10px 10px 5px;
    color: #333;
    padding: 0 5px;
}
.item-info-sec-2{
  position: relative;
    height: 35px;
    text-align: right;
    padding: 0 5px;
}
.price-sec-2{
  position: absolute;
    /* float: left; */
    margin: 0;
    top: 220px;
    font-weight: 600;
    margin-left: 63%;
    /* margin-right: 10px; */
    /* margin-top: 28px; */
    color: #000;
}
.price-sec-hotel{
  position: absolute;
    /* float: left; */
    margin: 0;
    top: 260px;
    font-weight: 600;
    margin-left: 40%;
    /* margin-right: 10px; */
    /* margin-top: 28px; */
    color: #000;
}
.link_map{
   margin-top: -25px;
    margin-left: 6%;
  }
  .searchresult_htladdress{
    /* margin-top: 20px; */
    padding: 0 15px;
  }
  .link_map:hover{
    text-decoration: none;
  }
.price_info-sec-2{
  color: #000;
  position: relative;
  height: 35px;
  text-align: right;
  padding: 0 2px;
}
.item-type-sec-2{
    /* position: relative; */
    /* height: 35px; */
    top: 190px;
    margin-left: 7px;
    /* float: left; */
    margin: 0;
    /* text-align: right; */
    /* padding: 2px 5px; */
    display: block;
    /* line-height: 1.3; */
    font-weight: 300 !important;
    font-size: 13px;
    /* min-height: 33px; */
    padding: 0 13px;
    /* margin: 10px 14px 5px; */
    color: #9E9E9E;
}
.item-type-transfer {
    position: relative;
    height: 35px;
    /* top: 20px; */
    float: left;
    text-align: right;
    /* padding: 2px 5px; */
}
.box-type-transfer{
    position: absolute;
    /* position: relative; */
    /* height: 64px; */
    /* margin-left: 11%; */
    /* margin-top: -23px; */
    /* width: 163px; */
    /* border-radius: 50%; */
    /* top: 20px; */
    /* float: left; */
    /* line-height: 5; */
    /* z-index: 100000000; */
    /* text-align: center; */
    /* padding: 2px 5px; */
    color: #9E9E9E;
    margin-left: 7%;
    font-size: 13px;
    /* background: rgba(0,0,0,.5); */
}
.box-type-transfer p{
  position: relative;
  display: inline-block;
}
.box-in-spa{
  width: 100%;

}
.product-item-sec-2 img{
  width: 100%;
   
}
.pro_list .pro_fr {
    width: 696px;
    border-top: 2px solid #fda93b;
}
.list_ad ul li img{
    width: 200px;
    height: 150px;
}

.buy_car{
    cursor: pointer;
}
.fr{
    position: relative;
    float: right;
    margin-right: 69px;
    margin-top: -60px;
    padding: 0 19px;
    color: #999;
    z-index: 1000;
}
.site_top{
    width: 100%;
    /* border-top: 4px solid #8a6d3b; */
     box-shadow: 0 5px 5px #e5e5e5; 
    height: 110px;
    /*margin-bottom: 20px;*/
    background: #FFF;
}
.top_info span{

    height: 30px;
    display: inline-block;
    padding: 0;
    vertical-align: middle;
    line-height: 30px;
    float: left;
    /* margin-left: 10px; */
    margin-right: 5px;
    color: #999;
    cursor: pointer;


}

.style{
  position: absolute;
    margin-top: -24px;
    cursor: pointer;
}
#log_en{
  position: relative;
    margin-left: 56px;
}
.coming-soon{
      font-size: 70px;
    height: 100vh;
    color: #337ab7;
    font-weight: 600;
    position: relative;
    /* margin-top: 118px; */
    /* margin-left: 100px; */
    text-align: center;
}

/*-----hotel-----*/
.product-item-hotel {
  position: relative;
  width: 395px;
  height: 160px;
  float: left;
  overflow: hidden;
  transition: all .2s linear;
  margin-bottom: 23px;
  margin: 0;
  border-bottom: 1px solid #e5e5e5;
  margin-bottom: 15px;
  margin-right: 10px !important;
  /* top: 25px;*/
  }
.product-item-hetel {
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  cursor: pointer;
}

.product-item-hotel:first-child{
    margin-right: 10px;
}
/* Pre-render the bigger shadow, but hide it */
.product-item-hotel::after {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  opacity: 0;
  transition: opacity 0.3s ease-in-out:
}

/* Transition to showing the bigger shadow on hover */
.product-item-hotel:hover::after {
  opacity: 1;
}
.item-thumbnail-hotel{
  position: relative;
    display: inline-block;
    float: left;
    width: 195px;
    height: 160px;
    margin-bottom: 3px;
    overflow: hidden;
    background-color: #ddd;
    cursor: pointer;
}
.item-thumbnail-hotel img{
  width: 193px;
  height: 160px !important;

}

.item-name-hotel{
  height: 16px;
  line-height: 16px;
  text-align: center;
  /* white-space: nowrap; */
  /* overflow: hidden; */
  /* text-overflow: ellipsis; */
  padding: 0 5px;
}
.item-info-hotel{
  position: relative;
    height: 35px;
    margin-top: 100px;
    text-align: right;
    padding: 0 5px;
    margin-right: 7px;
}
.price-hotel{
  position: relative;
  float: right;
  color: #fb833f;
}
.price_info-hotel{
  position: relative;
    height: 35px;
    text-align: right;
    padding: 0 5px;
}
.item-type-hotel{
  position: relative;
    height: 35px;
    /* top: 20px; */
    float: left;
    text-align: right;
    /* padding: 2px 5px; */
}

.product-item-hotel img{
  width: 100%;
    height: 100%;
}
.product-item-hotel:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  /*-webkit-transform: scale(1.2);
    -moz-transform:  scale(1.2);
    -o-transform:  scale(1.2);
    -ms-transform:  scale(1.2);
    z-index: 100000;
    background-color: #fff;
    top:20px;*/
    background-color: #fff;


}
.text-head-spa i {
  position: absolute;
  left: 2%;
  /* margin-left: -604px; */
  bottom: 12px;
  width: 0;
  height: 0;
  float: left;
  overflow: hidden;
  line-height: 0;
  font-size: 0;
  vertical-align: middle;
  border-bottom: 6px solid #3983e5;
  border-top: 0 none;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  _color: #ff3fff;
  _filter: chroma(color=#ff3fff);
}
.more-item{
  position: relative;
    float: right;
    display: inline-block;
    margin-right: 21px;
    cursor: pointer;
    padding: 0 5px;
    font-size: 13px;
    color: #333;
    
}
.more-item-transfer {
    position: relative;
    float: right;
    display: inline-block;
    margin-right: 21px;
    cursor: pointer;
    margin-right: 33px;
    padding: 0 5px;
    font-size: 13px;
    color: #333;
}
.more-item:hover{
  border: 1px solid #46aaff; 
  border-radius: 3px;
}
.spa0{
  background-color: rgb(27, 222, 30) !important;
}
.box-head-section-tour{
    height: 70px;
    line-height: 3;
    margin-bottom: 0;
    background: #55caf5;
    padding: 5px 36px;
    color: #fff;
    margin-bottom: 5px;
}
#cen-box{
  /*border: dashed 1px #aaa; */

}


.form-group label{
  width: 65px;

}
.login-form {
  width: 100%;
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    font-weight: 300;
    letter-spacing: 1px;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   font-weight: 300;
   letter-spacing: 1px;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   font-weight: 300;
   letter-spacing: 1px;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   font-weight: 300;
   letter-spacing: 1px;
}
#loginmodal input[type=text]{
  border-radius: 0;
}
#loginmodal input[type=password]{
  border-radius: 0;
}
#loginmodal input[type=text]:focus{
  border-color: #71ba51 !important;
  box-shadow: none;
}
#loginmodal input[type=password]:focus{
  border-color: #71ba51 !important;
  box-shadow: none;
}
#loginmodal .modal-dialog{
  /*width: 400px ;*/
}
.login-form label{
  font-size: 1em;
  font-weight: 300;
  letter-spacing: 1px;
}
#loginmodal button{
  background: #55caf5;
  border: none;
  color: #fff;
  border-radius: 5px;
  font-weight: 300;
  letter-spacing: 1px;
  padding: 5px 15px;
  float: right;
}
.logined p{
      margin-top: -42px;
    margin-left: 12%;
    text-align: center;
    position: absolute;
    /* display: inline-block; */
    /* float: right; */
    /* margin-top: 20px; */
    font-size: 1em;
    font-weight: 300;
    letter-spacing: 1px;
    /* border: 1px solid #ddd; */
}


header .button2 a {
    display: inline-block;
    /* float: right; */
    padding: 2px 15px;
    font-weight: 300;
    letter-spacing: 1px;
    border: 1px solid #00bcd4;
    border-radius: 5px;
    /* margin-top: 20px; */
    /* margin-left: 15px; */
    background: #FFF;
    color: #000;
        text-decoration: none;
}
header .button1 a {
    display: inline-block;
    float: left;
    margin-left: 15%;
    margin-right: 8px;
    padding: 2px 16px;
    font-weight: 300;
    letter-spacing: 1px;
    border: 1px solid #00bcd4;
    border-radius: 5px;
    /* margin-top: 20px; */
    /* margin-left: 15px; */
    background: #00bcd4;
    color: #fff;
    text-decoration: none;
}
header .button3 a {
        display: inline-block;
    /* float: left; */
    margin-left: 15%;
    margin-right: 8px;
    padding: 2px 16px;
    font-weight: 300;
    letter-spacing: 1px;
    border: 1px solid #00bcd4;
    border-radius: 5px;
    /* margin-top: 20px; */
    /* margin-left: 15px; */
    background: #00bcd4;
    color: #fff;
    text-decoration: none;
}
.head h1{
  margin-bottom: 25px;
}


#owl-demo .item img{
    display: block;
    width: 100%;
    height: 250px;
}
.owl-pagination{
  width: 200px !important;
    position: absolute !important;
    margin-left: 80%;
    margin-top: -50px !important;

}
.owl-theme .owl-controls .owl-page span{
      background: #ffffff !important;
    border: 1px solid #ccc !important;
}
#none-menu-responsive{
  display: none;
}

#length-tour{
      color: #000;
      font-size: 12px;
}
.logined p img{
      width: 30px;
    margin-left: 36%;
    margin-right: 0px;
    display: block;
    text-align: center;
}
.logined p a{
  text-decoration: none;
    font-size: 12px;
}
#cartitem{
  width: 30px;
  height: 30px;
  border: 0;
}
  @media(min-width:768px){
    
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : portrait) {
  #none-menu{
  
}
#none-menu-responsive{
  display: block;
} 
#cart-m{
  cursor: pointer !important;
}
.cart-menu {
    float: right;
    margin-top: -48px ;
    
}
.cast-num{
  margin-top: 10px;
}
  #section-info {
      display: none;
  }
  #item-select-view{
    /*display: none;*/
  }
  .item-select-view{
    display: none;
  }
  .nav-bar{
    display: none;
  }
  .box-btn-select{
    display: none;
  }
  
 
  #product-promotion {
    width: 100%;
    margin-left: 0%;
}
.box-in-spa {
    width: 100%;
   
}

/*.box-section-spa{
  height: auto !important;
}*/


#cart-menu-res{
  margin-top: -51px;
    margin-left: 290px;
    /* position: absolute; */
}
.box-type-transfer{
  margin-left: 95px !important;
}
.product-item-sec-2 .product-item-sec-2 img {
    width: 100%;
    height: 125px;
}
.regis{
  width: 100%;
}


#box-login{
    position: absolute !important;
    border: 1px solid #4CAF50 !important;
    padding: 14px !important;
    /* margin-left: 3%; */
    width: 100% !important;
    margin-top: -265px !important;
}
#navbar{
  margin-top: 50px !important;
}
.box-item-i{
  padding: 0 10px;
}
.box-section-transfer{
  border: none !important;
}

#owl-demo .item img{
  height: 150px !important;
}
#loginmodal .modal-dialog{
  width: auto !important;
}
.menu-web{
  display: none;
}
#navb-left{
  display: none;
}



.box-haed-res-mobile{
  width: 100%;
    margin-top: -56px;
    height: 50px;
    border-bottom: solid 1px #ddd;
    position: relative;
}

 body {
    padding-left: 0;
  }
  
  .navbar-toggle{
    position: relative;

    float: left;
    margin-left: 4%;
    margin-top: 0;
    margin-bottom: 17px;
    border-radius: 9px;
    border-color: #55caf5 !important;
    background-color: #fff !important;
  }


}
@media only screen 
and (min-device-width : 375px) 
and (max-device-width : 667px) 
and (orientation : portrait) {
.regis{
  width: 100% !important;
}
#item-repeat{
  padding: 0;
}
#none-menu{
  
}
#none-menu-responsive{
  display: block;
}
.box-item-promote{
  padding:0 15px; 
} 
.cart-menu {
    float: right!important;
    margin-top: -48px !important;
}
.cast-num{
  margin-top: 10px !important;
}
#box-login{
    position: absolute !important;
    border: 1px solid #4CAF50 !important;
    padding: 14px !important;
    /* margin-left: 3%; */
    width: 100% !important;
    margin-top: -265px !important;
}
#navbar{
  margin-top: 50px !important;
}
.box-item-i{
  padding: 0 10px !important;
}
.box-section-transfer{
  border: none !important;
}

#loginmodal .modal-dialog{
  width: auto !important;
}
.navbar-default .navbar-toggle{
  float: left !important;
    margin-left: 5% !important;
}
.navbar-brand{
  margin-left: 6% !important;
    margin-top: 10px !important;
    position: relative;
    float: left;
    
    
    border-radius: 9px;
    border-color: #55caf5 !important;
    background-color: #fff !important;
}
.course-box.small {
    height: 400px;
    width: 100%;
}
.channel-courses-list{
  margin-right: 0px !important ;
  width: 100%;
}




}

@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px) and (orientation : portrait) {

  
}

/* CSS Document */
*{
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
html{
    max-width:100%;

}
.ui-state-disabled span{
    border-radius: 50%;
    background: #9E9E9E;
    width: 35%;
    margin-left: 32.5%;
}
.boder{
    cursor: pointer;
    border: 1px solid #bdbdbd !important;
}
.boder:hover{
    background: #ddd !important;
}
/*.ui-state-default{
        border-radius: 50%;
    
    background: #ddd !important;
}
.ui-datepicker td{
    border-radius: 50% !important
}*/
.allotment{
    text-align: center;
    padding-bottom: 7px !important;
}
.allotment span{
    border-radius: 50%;
    background: #00BCD4;
    margin-left: 32.5%;
    width: 35%;
    color: #fff;
}
/*.ui-datepicker-today{
    
    background: #ddd !important;
}*/
#fountainTextG3-form2 {
    display: none;
    position: fixed;
    background: rgba(0, 0, 0, 0.4);
    top: 0;
    right: 0;
    bottom: 0;
    left: 2%;
    -webkit-backface-visibility: hidden;
    background: #FAFAFA;
}
#fountainTextG4{
      display: block;
      position: absolute;
      margin-top: 280px;
      margin-left: 35%;
}
}#fountainTextG_1{
      animation-delay:0.75s;
        -o-animation-delay:0.75s;
        -ms-animation-delay:0.75s;
        -webkit-animation-delay:0.75s;
        -moz-animation-delay:0.75s;
    }
    #fountainTextG_2{
      animation-delay:0.9s;
        -o-animation-delay:0.9s;
        -ms-animation-delay:0.9s;
        -webkit-animation-delay:0.9s;
        -moz-animation-delay:0.9s;
    }
    #fountainTextG_3{
      animation-delay:1.05s;
        -o-animation-delay:1.05s;
        -ms-animation-delay:1.05s;
        -webkit-animation-delay:1.05s;
        -moz-animation-delay:1.05s;
    }
    #fountainTextG_4{
      animation-delay:1.2s;
        -o-animation-delay:1.2s;
        -ms-animation-delay:1.2s;
        -webkit-animation-delay:1.2s;
        -moz-animation-delay:1.2s;
    }
    #fountainTextG_5{
      animation-delay:1.35s;
        -o-animation-delay:1.35s;
        -ms-animation-delay:1.35s;
        -webkit-animation-delay:1.35s;
        -moz-animation-delay:1.35s;
    }
    #fountainTextG_6{
      animation-delay:1.5s;
        -o-animation-delay:1.5s;
        -ms-animation-delay:1.5s;
        -webkit-animation-delay:1.5s;
        -moz-animation-delay:1.5s;
    }
    #fountainTextG_7{
      animation-delay:1.64s;
        -o-animation-delay:1.64s;
        -ms-animation-delay:1.64s;
        -webkit-animation-delay:1.64s;
        -moz-animation-delay:1.64s;
    }
    #fountainTextG_8{
      animation-delay:1.75s;
        -o-animation-delay:1.75s;
        -ms-animation-delay:1.75s;
        -webkit-animation-delay:1.75s;
        -moz-animation-delay:1.75s;
    }
    #fountainTextG_9{
      animation-delay:1.93s;
        -o-animation-delay:1.93s;
        -ms-animation-delay:1.93s;
        -webkit-animation-delay:1.93s;
        -moz-animation-delay:1.93s;
    }
    #fountainTextG_10{
      animation-delay:2.07s;
        -o-animation-delay:2.07s;
        -ms-animation-delay:2.07s;
        -webkit-animation-delay:2.07s;
        -moz-animation-delay:2.07s;
    }
    #fountainTextG_11{
      animation-delay:2.15s;
        -o-animation-delay:2.15s;
        -ms-animation-delay:2.15s;
        -webkit-animation-delay:2.15s;
        -moz-animation-delay:2.15s;
    }
    #fountainTextG_12{
      animation-delay:2.24s;
        -o-animation-delay:2.24s;
        -ms-animation-delay:2.24s;
        -webkit-animation-delay:2.24s;
        -moz-animation-delay:2.24s;
    }
    #fountainTextG_13{
      animation-delay:2.30s;
        -o-animation-delay:2.30s;
        -ms-animation-delay:2.30s;
        -webkit-animation-delay:2.30s;
        -moz-animation-delay:2.30s;
    }
    #fountainTextG_14{
      animation-delay:2.36s;
        -o-animation-delay:2.36s;
        -ms-animation-delay:2.36s;
        -webkit-animation-delay:2.36s;
        -moz-animation-delay:2.36s;
    }
    #fountainTextG_15{
      animation-delay:2.40s;
        -o-animation-delay:2.40s;
        -ms-animation-delay:2.40s;
        -webkit-animation-delay:2.40s;
        -moz-animation-delay:2.40s;
    }
    #fountainTextG_16{
      animation-delay:2.45s;
        -o-animation-delay:2.45s;
        -ms-animation-delay:2.45s;
        -webkit-animation-delay:2.45s;
        -moz-animation-delay:2.45s;
    }
    #fountainTextG_17{
      animation-delay:2.51s;
        -o-animation-delay:2.51s;
        -ms-animation-delay:2.51s;
        -webkit-animation-delay:2.51s;
        -moz-animation-delay:2.51s;
    }
    #fountainTextG_18{
      animation-delay:2.55s;
        -o-animation-delay:2.55s;
        -ms-animation-delay:2.55s;
        -webkit-animation-delay:2.55s;
        -moz-animation-delay:2.55s;
    }
    #fountainTextG_19{
      animation-delay:2.60s;
        -o-animation-delay:2.60s;
        -ms-animation-delay:2.60s;
        -webkit-animation-delay:2.60s;
        -moz-animation-delay:2.60s;
    }
    #fountainTextG_20{
      animation-delay:2.64s;
        -o-animation-delay:2.64s;
        -ms-animation-delay:2.64s;
        -webkit-animation-delay:2.64s;
        -moz-animation-delay:2.64s;
    }
    .inTurnFadingTextGbook {
        color: rgba(14,184,20,0.49);
        font-family: Arial;
        font-size: 65px;
        text-decoration: none;
        font-weight: normal;
        font-style: normal;
        float: left;
        animation-name: bounce_inTurnFadingTextG;
        -o-animation-name: bounce_inTurnFadingTextG;
        -ms-animation-name: bounce_inTurnFadingTextG;
        -webkit-animation-name: bounce_inTurnFadingTextG;
        -moz-animation-name: bounce_inTurnFadingTextG;
        animation-duration: 2.37s;
        -o-animation-duration: 2.37s;
        -ms-animation-duration: 2.37s;
        -webkit-animation-duration: 2.37s;
        -moz-animation-duration: 2.37s;
        animation-iteration-count: infinite;
        -o-animation-iteration-count: infinite;
        -ms-animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
        -moz-animation-iteration-count: infinite;
        animation-direction: normal;
        -o-animation-direction: normal;
        -ms-animation-direction: normal;
        -webkit-animation-direction: normal;
        -moz-animation-direction: normal;
    }



@keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-o-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-ms-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-webkit-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}

@-moz-keyframes bounce_inTurnFadingTextG{
  0%{
    color:rgb(31,135,15);
  }

  100%{
    color:rgb(255,255,255);
  }
}
#ui-datepicker-div{
   width: 50%;
    top: 0 !important;
    /*bottom: 0 !important;*/
    left: 0 !important;
    right: 0 !important;
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
     margin: 0 auto;
}
a.ui-state-default{
    height: 22px;
    margin-left: 5%;
    font-size: 17px;
    font-weight: 600 !important;
    margin-bottom: 10px;
    position: absolute;
    background: none !important;
    border: none !important;
}
span.ui-state-default{
    height: 80px;
}
.ui-widget.ui-widget-content {
       padding: 5px !important;
    border: 1px solid #9E9E9E !important;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active{
    /*border: 1px solid #F5F5F5 !important;*/
    
    font-weight: normal;
    color: #454545 ;
}
.ui-datepicker-calendar tr th{
    background: rgba(19, 142, 250, 0.08);
    border-bottom: 1px solid rgba(0,0,0,0.02);
}
.ui-datepicker .ui-datepicker-header {
   
    background: #55caf5 !important;
    color: #fff !important;
}
.ui-datepicker td span, .ui-datepicker td a{
    text-align: center !important;
}
.datenew{
    font-size: 17px;
    font-weight: 600; 
}
.allot{
    margin-top: 23px;
    color: #ff9800;
}
#calendar {
    max-width: 900px;
    margin: 0 auto;
}
 -webkit-scrollbar {
    width: 12px;
}

-webkit-scrollbar-thumb {
    border-radius: 10px;
    background: rgba(0,0,0,0.1);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
.price_infocost{
    color: #333;
    font-weight: 600;
}
#infoperson{
    color: #337ab7;
    font-weight: 500;
    display: inline-block;
    padding-right: 5px;
}
#infoperson2{
    color: #337ab7;
    font-weight: 500;
    display: inline-block;
    padding-right: 5px;
}
/*@media (min-width: 568px) {
  .container {
    width: 550px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;

  }
}
@media (min-width: 1200px) {
  .container {
    /*width: 1170px;*
  }

}*/

#detail-sec01{
    /*border: solid 2px rgba(204, 204, 204, 0.44); */
    width: 700px;
    height: 520px;
    position: relative;
    z-index: 1;
    /* background: rgba(0,0,0,0.12); */
    float: left;
    overflow: hidden;
    /*margin-top: 26px;*/
}
.box-detailss{
  position: relative;
  border-right: solid 1px #ccc;
  padding: 25px 40px;
  height: auto;
  width: 100%;
  /* margin-left: 65px; */
  margin-top: 0px;
  display: inline-block;
  /*background-color: #f5f5f5;*/
}
/* ----------------------SLIDE-------------------------- */
#slider {
    width:100%;
    height: 90%;
    float:left;
    clear:both;
    margin: 0 !important;
}
#slider {
    margin: 0 !important;
}

#slider ul {
    width: 63841000px;
    height: 300px;
    position: absolute;
    margin-left: -40px;
    /* margin-top: -25px; */
    float: left;
    display: inline-block;
    list-style-type: none;
}
.big-photo{
    /*background:url(../img/photo/iStock_000063646293_XXXLarge.jpg) no-repeat center;*/
    background-size:cover;
    background-position: center;
    background-repeat: no-repeat;
    display: inline-block;
}
.big-photo img{
    width: 700px;
    border-radius: 3px;
    height: 380px;
    /* margin-top: 28px; */
    position: relative;
    display: inline-block;

}
.thumbnail-photo{
    width: 100%;
    height: 10.5%;
    float: left;
    clear: both;
    overflow: hidden;
    margin-top: -2px;
    margin-left: -2px;
}
.thumbnail-photo a{
    margin-top: 392px;

}

#carousel {

    margin: 0 !important;

}
#carousel ul {
    width: 2000px;
    height: 106px;
    position: absolute;
    float: left;
    display: inline-block;
    list-style-type: none;
    list-style-type: none;
    /* padding: 0; */
    margin-left: -37px;
    margin-top: 390px;
}

/*#carousel ul{
    width:100%;
    height:100%;
    margin: 0;
    padding: 0;
}*/

#carousel{
    /* width: 896px; */
/* height: 101px; */
/* position: relative; */
margin-left: -40px;
margin-top: -1px;
float: left;
display: inline-block;
list-style-type: none;
background-color: #ccc;
}

#carousel {

    margin: 0 !important;

}

/*#carousel ul{
    width:100%;
    height:100%;
    margin: 0;
    padding: 0;
}*/

#carousel{
    /* width: 896px; */
/* height: 101px; */
/* position: relative; */
margin-left: -40px;
margin-top: -1px;
float: left;
display: inline-block;
list-style-type: none;
background-color: #ccc;
}

.list-thumbnail{
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: inline-block;
    list-style-type: none;

    overflow: hidden;

}
.list-thumbnail img{
  width: 166px;
  height: 95px !important;
  border-radius: 3px;
  height: 75px;
  position: relative;
  display: inline-block;
  margin: 0px 4px;
  list-style-type: none;
}
.box-details {
        position: relative;
    /* border: solid 1px #ccc; */
    /* padding: 25px 40px; */
    height: auto;
    width: 100%;
    margin-left: 5%; 
    /* margin-top: 0px; */
    /* display: inline-block; */
    /* padding: 0 5px; */
}

.btn-left{
    width: 6.6%;
    height: 75px;
    float: left;
    background: url(../resource/icon/btn-left.png) no-repeat center rgb(51, 116, 183);
    position: absolute;
    z-index: 1;
    margin-top: 196px;
}
.btn-left:hover{
    background:url(../resource/icon/btn-left.png) no-repeat center rgb(29, 177, 159);
}
.btn-right{
    width: 6.1%;
    height: 75px;
    float: right;
    background: url(../resource/icon/btn-right.png) no-repeat center rgb(51, 116, 183);
    position: absolute;
    z-index: 1;
    margin-left: 543px;
    margin-top: 190px;
}
.btn-right:hover{
    background:url(../resource/icon/btn-right.png) no-repeat center rgb(29, 177, 159);
}
.box-detail-right{
    position: relative;
    /* margin: 0; */
    float: right;
    width: 100%;

    /* border-top: 3px solid #30b8a7; */
    position: relative;


}
.detail_dominance {
    float: right;
    width: 36%;
    zoom: 1;
    line-height: 2;
    position: relative;
    border: 1px dashed #45c3da;
    padding: 20px 15px 15px 15px;
    margin-bottom: 50px;
    display: block;
}
.detail_dominance dt {
    color: #fff;
    background: #45c3da;
    width: 70px;
    text-align: center;
    height: 20px;
    line-height: 20px;
    position: absolute;
    left: 15px;
    top: -10px;
    font-size: 12px;
}

.product_nav {
    background: #fff;
    width: 100%;
    border-top: 1px solid #55caf5;
    border-bottom: 1px solid #55caf5;
    /* box-shadow: 0 2px 2px #eee; */
    color: #000;
    /* height: 70px; */
    padding: 7px 0;
    float: left;
}
.cur{
        line-height: 1.8;
}
.fl {
    float: left;
}
 /*.product_nav ul li.cur, .product_nav ul li:hover {
    color: #1295fe;
}*/
.product_nav ul li{
    float: left;
    /* width: 135px; */
    border-right: 1px solid #e7e7e7;
    text-align: center;
    height: 20px;
    padding: 0 21px;
    line-height: 20px;
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
.clearfix:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
 .order_btn .btn_orange {
    height: 45px;
    line-height: 45px;
    width: 150px;
    padding: 0;
    float: right;
}

.topic_en{
    position: relative;
    margin-top: 27px;
    font-size: 24px;
    font-weight: 600;
    text-align: center;
    color: #337ab7;
    margin-bottom: 25px;
}
.pricecostselect {
    font-weight: 500;
    margin-left: 56%;
    color: #333;
    /* margin-right: 110px; */
    /* border: 1px dashed #ddd; */
    display: inline-block;
    padding: 30px 26px;
    border-radius: 3px;
    /* float: left; */
    font-weight: 500;
    /* float: right; */
     margin-top: 38px; 
    
}
.btn-book {
    width: 35%;
    float: left;
    margin: 0 auto;
    text-align: center;
    border-radius: 3px;
    color: #fff;
    box-shadow: 0px 2px 0px #00BCD4;
    background-image: -webkit-linear-gradient(91deg, #e58c00 0%, #3a8aa7 100%);
    background-image: linear-gradient(-1deg, #00BCD4 0%, #55caf5 100%);
    border: 1px solid #00BCD4;
    cursor: pointer;
        text-align: center;
    /* height: 35px; */
    position: relative;
    /* margin-left: 83.5%; */
    border-radius: 4px;
    font-weight: 500;
    cursor: pointer;
    float: left;
    font-size: 15px;
    padding: 6px 21px;
}
.btn-book:hover {
    
        background-image: linear-gradient(-1deg, #4DD0E1 0%, #55caf5 100%);
    border: 1px solid #4FC3F7;
    /* box-shadow: 0px 2px 0px #4FC3F7; */
    
}
.btn_orange {
        margin: 0 auto;
    text-align: center;
    border-radius: 3px;
    color: #fff;
    box-shadow: 0px 2px 0px #00BCD4;
    background-image: -webkit-linear-gradient(91deg, #e58c00 0%, #3a8aa7 100%);
    background-image: linear-gradient(-1deg, #00BCD4 0%, #55caf5 100%);
    border: 1px solid #00BCD4;
    cursor: pointer;
    float: right;
    font-size: 17px;
    margin-top: -11px;
    padding: 1px 21px;
    margin-right: 6px;
}
.btn_orange:hover{
    background-image: linear-gradient(-1deg, #4DD0E1 0%, #55caf5 100%);
    border: 1px solid #4FC3F7;
    box-shadow: 0px 2px 0px #4FC3F7;
}
.detail{

    margin-left: 20px;
    position: relative;
    padding: 26px 10px;
}
.btn-costs{
    width: 60%;
    float: right !important;
    border: 1px solid #39c5ea;
    background: #fff;
    border-radius: 3px;
    padding: 6px 13px;
    color: #05bdd6;
    font-size: 15px;
    text-align: center;
    outline: 0;
    cursor: pointer;
   

}
.btn-costs:hover{
    border: 1px solid #000;
    color: #000;
    background: #FFF;

}
.btn-submit{
    width: 100%;
    height: 52px;
}


/*-----------  SEC 02 BOOKING -----------*/
.sec-02-booking{
    width:100%;
    height:300px;
    float:left;
    clear:both;
    margin-top:50px;
    border-top:dashed 1px rgba(78,30,189,0.23);
}

.booking-title{
    text-transform: uppercase;
    font-size: 23px;
    font-weight: 100;
    width: 100%;
    clear: both;
    padding-top: 20px;
    margin-left: 10px;
}

.booking-form{
    width: 100%;
    height: 130px;
    float: left;
    margin-top: 10px;
    clear: both;
    border-radius: 3px;
}
.booking-btn{
    width: 100%;
    height: 65px;
    float: left;
    margin-top: 205px;
    clear: both;
    text-align: center;
    margin-left: 70px;
    position: absolute;
}
.btn-booking{
    width:285px;
    height:65px;
    margin:0 auto;
    background:#f1a100;
    border: none;
    border-radius:32.5px;
    box-shadow:0px 2px 0px #f38c00;
    background: -webkit-linear-gradient(#ebaf00, #f1a100); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#ebaf00, #f1a100); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#ebaf00, #f1a100); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#ebaf00, #f1a100); /* Standard syntax (must be last) */
    margin-top: -24px;
    /*position: absolute;*/
    /*margin-left: -303px;*/

}
#btn-search{
    width:285px;
    height:65px;
    margin:0 auto;
    background:#f1a100;
    border: none;
    border-radius:32.5px;
    box-shadow:0px 2px 0px #f38c00;
    background: -webkit-linear-gradient(#ebaf00, #f1a100); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#ebaf00, #f1a100); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#ebaf00, #f1a100); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#ebaf00, #f1a100); /* Standard syntax (must be last) */
    margin-top: -24px;
    position: absolute;
    margin-left: -255px;

}
.box-pickup-show{
    padding-top: 9px;
    font-size: 20px;
    width: 451px;
    position: relative;
    height: 60px;
    border: 2px solid #f38c00;
    border-radius: 3px;
    padding-left: 20px;
    margin-bottom: 32px;
    /* color: #7645EC; */
    /* background-color: #ebaf00; */

}
.booking-form-center {
    width: 100%;
    height: 175px;
    /* margin-left: 3%; */
    /* margin-right: 2.5%; */
    /* margin-top: 20px; */
    /* float: left; */
}


.form-person {
    width: 40%;
    /* margin-left: -32px; */
    height: 31px;
    float: right;
    /* margin-right: 10px; */
}
.form-title{
    width:100%;
    height:20px;
    margin-top: 5px;
    float:left;
    clear:both;
    color: #424242;
    font-size:14px;
}
.form-input{
    width:100%;
    height:60px;
    float:left;
    clear:both;
}
.booking-input{
    /*width: 150px;*/
    height: 34px;
    padding-left: 5px;
    float: left;
    /* background: url(../img/icon-calendar.png) no-repeat #fff; */
    background-position: 92% 5px;
    border: none;
    box-shadow: none;
    border-radius: 3px;
    margin-top: 10px;
    font-size: 15px;
    color: #30b8a7;
    cursor: pointer !important;

}
.booking-select{
    width: 71px;
    height: 34px;
    padding: 10px;
    background: #fff;
    background-position: 95% 5px;
    outline: none;
    display: inline-block;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    cursor: pointer;
    float: left;
    border: none;
    box-shadow: none;
    border-radius: 3px;
    margin-top: 10px;
        font-size: 15px;
    text-align: center;
    color: #30b8a7;

}
/*Arm Editing*/
.booking-select-long{
    width: 476px;
    height:50px;
    padding:10px;
    padding-right:3px;
    background:url(../img/icon-select.png) no-repeat #fff;
    background-position:98% 10px;
    border: 2px solid #7640f4;
    color: #7640f4;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
    float:left;
    box-shadow:none;
    border-radius:3px;
    margin-top:10px;
    font-size:20px;
    text-align:center;
}
.booking-select-long-disabled{
    border: 2px solid grey ;
    color: grey ;
    background-color:#DDD ;
    cursor:not-allowed ;
    background:none;
}
.btn-booking-inner{
    width: 200px;
    height: 35px;
    margin-left: 42.5px;
    float: left;
    margin-top: 5px;
}
.btn-booking-inner-text{
    width: 152px;
    height: 35px;
    float: left;
    border-right: solid 1px rgba(82, 57, 23, 0.3);
    font-size: 24px;
    color: #fff;
    font-weight: bold;
    text-align: left;
    text-shadow: 0px 2px 0px rgba(218, 113, 0, 0.6);
}
.btn-booking-inner-icon{
    width: 47px;
    height: 35px;
    float: right;
}
.btn-booking-fa-icon{
    float: right;
    margin: 0px;
    padding: 0px;
    font-size: 30px;
    color: rgba(40, 29, 14, 0.8);
}
.btn-search-text{
    margin: 0px;
    padding: 0px;
    margin-top: 2px;
    float: left;
}

.textadult {
    /*margin-left: -13px;*/
}
.text-adult {
    padding-top: 8px;
}
.circle-plus {
    margin-top: -31px;
    margin-left: 36px;
    height: 34px;
    width: 26px;
    border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    -webkit-border-radius: 0 3px 3px 0;
    background: #ffc41f;
}
.circle-minus {
    margin-top: -34px;
    margin-left: -11px;
    height: 34px;
    width: 24px;
    border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    -webkit-border-radius: 3px 0 0 3px;
    background: #ffc41f;
}
.text-minus {
    padding-top: 3px;
    font-size: 140%;
}
.circle-pluschild {
    margin-top: -31px;
    margin-left: 38px;
    height: 34px;
    width: 23px;
    border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    -webkit-border-radius: 0 3px 3px 0;
    background: #ffc41f;
}
.circle-minuschild {
        margin-top: -34px;
    margin-left: -11px;
    height: 34px;
    width: 26px;
    border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    -webkit-border-radius: 3px 0 0 3px;
    background: #ffc41f;
}

.btn_submit {
    /* float: right; */
    margin-top: 120px;
    /* margin-bottom: 9px; */
    padding: 0px !important;
}
.follow{
    border-radius: 3px;
    height: 136px;
    border: 1px solid #ddd;
    margin-top: 520px;
    width: 100%;
    margin-bottom: 26px;

}
.shopCartList ul.cart_head li {
    font-size: 14px;
    height: 70px;
    min-height: 70px;
    line-height: 70px;
    margin: 0;
    border-left: 1px #FFF solid;
        display: inline-block;
}
.shopCartList ul {
    border-bottom: 1px #ededed solid;
    overflow: hidden;
}

.detail-price{
    /* border: 1px #cbcbcb solid; */
    background: #FFF;
    float: right;
    width: 100%;
    border-radius: 3px;
    /* height: 600px; */
    margin-top: 50px;

}
.p-text{
    color: red;
}
.select-discount p{
    font-size: 25px;

}


.box-btn{
    width: 100%;
    float: right;
    margin-right: -56px;
}

.bung{
    width: 20px;
    height: 79px;
    position: absolute;
    background-color: #fff;
    z-index: 1;
    margin-top: 417px;
    margin-left: 567px;
    overflow: hidden;
}
.submit-booking h3 {
    display: inline-block;
    margin-top: 20px;
}

.booking_head_text {
    font-weight: 300;
}
.submit-booking {
    display: inline-block;
    float: right;
    margin-top: -14px;
    margin-right: 10px;
}
#calen {
        position: absolute;
    font-size: 20px;
    top: 41px;
    margin-left: -16%;
    /* float: right; */
    /* right: 26px; */
    pointer-events: none;
    color: #9E9E9E;
}
.sumprice {
        /* position: absolute; */
    /* margin-top: 138px; */
    /* position: relative; */
    /* color: #fb833f; */
    /* width: 50%; */
    /* height: 40px; */
    text-align: center;
    font-size: 18px;
    color: #fb833f;
    font-weight: 600;
    /* border: 1px dashed #45c3da; */
    padding: 1px 0;
    float: right;
    display: inline-block;
    /* border-radius: 3px; */
}
#atime{
    /*margin-top: 180px;*/
}
.pro_detail_box{
    position: absolute;
    border: 1px solid #dedede;
    padding: 10px 20px 0 20px;
    border-radius: 3px;
        width: 98%;

}

.pro_detail_box_right{
    position: absolute;
    border: 1px solid #dedede;
    padding: 10px 20px 0 20px;
    border-radius: 3px;

}
.form-person:first-child{
    margin-right: 10px;

}
.imcc{
    width: 100px;
   
    border-radius: 15px;
}
#detail-info{
    top: 50px;
    width:60%;
    height:900px;
    position:relative;
    z-index:1;
  border: 1px solid #ccc;
}
.sec-01-form{
    border: 1px solid #ccc;
    border-radius: 3px;

}
.lsalesid{
    display: inline-block;
}
.Contactor input {
    width: 205px;
    border: 1px solid #959595;
    border-radius: 5px;
}

.count_title {
    border: 1px solid #e6e6e6;
    padding: 28px 0 10px;
    border-top-width: 4px;
}

.orderBox2 {
    border: 1px #ddd solid;
    background: #FFF;
    border-top-width: 4px;
    width: 90%;
    padding: 40px 20px 25px 25px;
    border-radius: 4px;
    position: relative;
    margin-top: 75px;
    margin-left: 50px;
}

.count_title i.f16 {
    position: absolute;

    top: 10px;
    /* left: -6px; */
    width: 172px;
    height: 42px;
    line-height: 34px;
    z-index: 1;
}


.Contactor input, .OtherInfo input, .Passager textarea, .Contactor textarea, .OtherInfo textarea {
    font-family: verdana,microsoft yahei;
        width: 230px;
    padding: 5px 10px;
    border: 1px solid #959595;
    border-radius: 5px;
}
.border {
  float: left;
    border-left: 1px solid #e7e7e7;
    margin-left: 52%;
    height: 151px;
    position: relative;
    top: -155px;
}







.btn-pay{
    /*position: absolute; */
    background: #ffc41f;
    color: #fff;
    font-weight: 500;
    display: inline-block;
    padding: 7px 54px;
    border-radius: 3px;
    font-weight: 600;
    font-size: 15px;
        cursor: pointer;
    /* margin-left: 168px; */
    /* margin-top: 470px; */
}

.select-name{
    /* border: solid 1px #999;*/
    position: absolute;
    margin-left: 200px;
    margin-top: 25px;
    /* width: 500px; */
    color: #30b8a7;
    padding: 17px 10px;
    /* height: 32px; */
    width: 593px;
    background-color: #fff;
    border-radius: 3px;
    z-index: 2000;
}
.select-word{
  color: #ffaf79;
    font-size: 29px;
    /* font: inherit; */
    text-align: center;
    line-height: 35px;
    margin-bottom: 2px;

}
.text-tourname{
  color: #333;
    position: absolute;
    z-index: 4101;
    margin-left: 716px;
    margin-top: 83px;
}
.typess{
  color: #333;
  display: inline-block;
}




            #overlay {
                position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:#000;
                opacity:0.5;
                filter:alpha(opacity=50);
            }

            #modal {
                position:absolute;
                background:url(tint20.png) 0 0 repeat;
                background:rgba(0,0,0,0.2);
                border-radius:14px;
                padding:8px;
            }

            #content {
                border-radius:8px;
                background:#fff;
                padding:20px;
            }

            #close {
                position:absolute;
                background:url(../icon/close.png) 0 0 no-repeat;
                width:24px;
                height:27px;
                display:block;
                text-indent:-9999px;
                top:-7px;
                right:-7px;
            }
            #time-select{
              width: 90px;
              display: inline-block;
              margin-left: 70px;
              position: relative;
              margin-top: 368px;
            }

  .text-time {
    margin-bottom: 30px;
        /* margin-left: 55%; */
    margin-top: 36px;
    border-top: 1px solid #FFF;
    border-bottom: 1px solid #FFF;
    width: 100%;
    padding: 7px 2px;
    /* height: 200px; */
    
}

.show-time {
    display: inline-block;
    width: 90%;
    margin-left: 10%;
    position: relative;
}



.all-time {
    margin-right: 2px !important;
    cursor: pointer;
    /* margin-top: 68px; */
    height: 24px;
    margin: 0;
    display: inline-block;
    background: #55caf5;
    width: 69px;
    padding: 4px 15px;
    color: #fff;
    border-radius: 3px;
    margin-bottom: 4px;
}

.keyword-box-content {
    /* position: absolute; */
    /* margin-top: 244px; */
    margin-left: 15px;
}
.box-item-show{
  display: inline-block;
  
    width: 100%;
    /*height: 500px;*/
    
    float: right;
    padding: 0px;
    margin-top: 10px;
}
#item-font-section-transfer{
   padding: 0;
}
.item-thumbnail-front{
        position: relative;
    display: inline-block;
    float: left;
    width: 200px;
    height: 130px;
    padding: 1%;
    margin-bottom: 3px;
    margin-left: 2%;
    margin-top: 2%;
    overflow: hidden;
    background-color: #ddd;
    cursor: pointer;
    border-radius: 5px;
}
.item-thumbnail-front img {
    width: 100%;
    height: 100%;
    border-radius: 2px;
}
.item-name-front {
  height: 16px;
  text-align: center !important;
  margin-top: 10px;
  line-height: 16px;
  text-align: left;
  /* white-space: nowrap; */
  /* overflow: hidden; */
  /* text-overflow: ellipsis; */
  padding: 0 5px;
}
.item-info-front {
  position: relative;
    height: 35px;
    width: 145px;
    text-align: center;
    padding-left: 0;
    float: right;
    margin-top: 37px;
    margin-right: -6px;
}
.price-front {
    position: relative;

    color: #0bb308;
}

.product_r {
    position: absolute;
    margin-left: 67% ;
    width: 123px;
    margin-top: 55px;
    overflow: hidden;
    border: solid 2px #03A9F4;
    border-radius: 60px;
    color: #fff;
    height: 35px;
    font-weight: 600;
    line-height: 2.4;
  }
  .product_r .base_price {
    color: #f60;
    display: block;
    margin-bottom: 0;
    line-height: 1.2;
}
.pay_later{
    position: relative; 
    width: 45px;
    height: 44px;
    color: #fff;
    float: right;
    padding: 0 5px;
    /* z-index: 100000000; */
    background-color: #03A9F4;
}
.sala{
    /*display: block; */
    color: #03A9F4;
    /* font-size: 20px; */
    font-weight: 600;
    /* margin-top: 30px; */
    padding: 0 19px;
    /* margin-bottom: 20px; */
}

.box-item-show2 {
    margin-top: 80px;
    display: inline-block;
    width: 100%;
    padding: 0;
    height: 625px;
    background: #E0F7FA;
    /* border: solid 1px #e5e5e5; */
    margin-bottom: 30px;
    /* float: right; */
}
.form-control {
    cursor: pointer;
    margin-top: 5px;
    border: 1px solid #9E9E9E !important;
    background-color: #fff !important;
}
.product-item-front:first-child {
    margin-bottom: 10px;
}
.product-item-front {
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
}
.product-item-front {
    position: relative;
    width: 100%;
    height: 150px;
    float: left;
    overflow: hidden;
    transition: all .2s linear;
    margin-bottom: 20px;
    margin: 0;
    border-bottom: 1px solid #e5e5e5;
    top: 7px;
    cursor: pointer;
}
.item-thumbnail-front{
    position: relative;
    display: inline-block;
    float: left;
    width: 230px;
    height: 140px;
    margin-bottom: 3px;
    overflow: hidden;
    background-color: #ddd;
    cursor: pointer;
}
.item-thumbnail-front img {
    width: 100%;
    height: 100%;
    border-radius: 2px;
}
.item-name-front {
  height: 16px;
  text-align: center !important;
  margin-top: 10px;
  line-height: 16px;
  text-align: left;
  /* white-space: nowrap; */
  /* overflow: hidden; */
  /* text-overflow: ellipsis; */
  padding: 0 5px;
}
.item-info-front {
  position: relative;
    height: 35px;
    width: 145px;
    text-align: center;
    padding-left: 0;
    float: right;
    margin-top: 37px;
    margin-right: -6px;
}
.price-front {
    position: relative;

    color: #0bb308;
}
.item-type-front {
    position: absolute !important;
    display: block;
    font-size: 12px;
    padding: 1px 10px;
    /* float: right; */
    width: 80px;
    background: rgba(0,0,0,.5);
    color: #FFF;
    margin-top: -20px;
    margin-right: px;
    z-index: 1;
}
.add-cart-front{
  border: 1px solid #31708f;
  background: #31708f;
  border-radius: 3px;
  padding: 1px 33px;
  color: #f5f5f5;
  font-size: 15px;
  text-align: center;
  outline: 0;
  cursor: pointer;
  float: right;
  margin-right: -128px;
  margin-top: 77px;
}
#around-time{
    /*margin-left:100px;margin-top: -26px;*/
}
.box-show-select-view{
  /*border: 1px solid #ddd; */
    height: 110px;
    width: 100%;
    margin-bottom: 20px; 
    margin-right: 0px;
    overflow: hidden;
    /* margin-top: 30px; */
}
.item-res{
  width: 33.3%;
    display: inline-block;
    padding: 0 5px !important;
    
}
.product-item-view {
    padding: 2px 2px;
    height: 93px;
    border: 1px solid #00BCD4;
    margin-top: 9px;
    background: #fdffeb;
    border-radius: 4px;
    box-shadow: 0px 7px 6px rgba(0,0,0,0.15);
    cursor: pointer;
}
.img-tiem-view{
  width: 60px;
}
.item-name-view{
    height: 16px;
    text-align: center !important;
    margin-top: 10px;
    line-height: 16px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 0 5px;
    /* width: 96%; */
    /* position: absolute; */
    margin-left: 34%;
    margin-top: -38px;
}
.item-thumbnail-view{
      margin-left: 2px;
    /* margin-right: 4px; */
    width: 30%;
    height: 45%;
    /*border: 1px solid #ddd;*/
    border-radius: 3px;
    margin-top: 8px;
}
.item-type-view{
  margin-top: 27px;
    font-size: 12px;
    margin-left: 3%;
    background: rgba(0, 188, 212, 0.38);
    width: 50px;
    height: 16px;
    border-radius: 3px;
    margin-bottom: 0px;

}
.item-info-view{
  font-size: 12px;
    /* margin-top: 13px; */
    margin-left: 54%;
}

.form-control {
    width: 100%;
}

/*-------------------- iphone 6 plus >---------------*/
@media only screen 
and (min-device-width : 414px) 
and (max-device-width : 736px) 
and (orientation : portrait) { 
#slider ul {
    height: 210px ;
}
    .big-photo img {
    width: 360px ;
    height: 200px ;
}
}


/*-------------------- iphone 6---------------*/
@media only screen 
and (min-device-width : 375px) 
and (max-device-width : 667px) 
and (orientation : portrait) { 
.box-item-show2 {
    margin-top: 20px;
    margin-bottom: 0px;
}

.thumbnail-photo{
    display: none !important;
}
#slider ul{
    height: 210px !important;
}
#detail-sec01 {
    
    width: 350px !important;
    height: 235px !important;
}
.big-photo img {
    width: 350px !important;
    height: 200px !important;
}
.list-thumbnail img {
    width: 83px !important;
    height: 58px !important;
    margin: 0px 3px !important;
}
#carousel ul {
    margin-top: 235px !important;
    margin-left: -42px !important;
}



.keyword-box-content{
    margin-top:15px !important;
}


.btn-book{
    padding: 6px 0;
    width: 100% !important;
    padding-right:0px !important; 
    margin-bottom: 30px !important;
}
.btn_orange{
    display: none !important;
}
.box-detailss{
    padding: 25px 20px !important;
}
.item-thumbnail-front {
    width: 125px !important;
    height: 90px !important;
}
.product_r{
    margin-left: 62% !important;
    height: 30px !important;
    line-height: 2 !important;

}

.btn_submit {
    /* float: right; */
    margin-top: 100px !important;
}
.btn-costs{
    width: 100% !important;
}
.product-item-view{
    height: 118px !important;
}
.item-name-view {
    font-size: 12px !important;
    margin-left: 2% !important;
    margin-top: 0px !important;
    white-space: normal !important;
}
.img-tiem-view {
    width: 95px !important;
    margin-top: -7px !important;
}
.item-type-view {
    position: absolute !important;
    margin-top: -78px !important;
    color: #fff !important;
    font-size: 11px !important;
   
    background: rgba(25, 22, 22, 0.61);
}
.item-info-view {
    position: absolute !important;
    font-size: 12px !important;
    /* margin-top: 13px; */
    margin-left: 2% !important;
}
.box-detail-right {
    background: rgba(179, 229, 252, 0.37);
    height: 600px;
}

}
/*-------------------- iphone 5---------------*/
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 568px) 
and (orientation : portrait) { 
.box-item-show {
   /* padding: 0 10px; */
}
.box-details{
    padding: 0;
    margin-left: 13px;
}
#slider ul{
    height: 210px;
}
.thumbnail-photo{
    display: none;
}
#detail-sec01 {
    
    width: 294px;
    height: 215px;
}

.big-photo img {
    width: 294px;   
    height: 180px;
}

#carousel ul {
    margin-top: 215px;
    margin-left: -42px;
}

.list-thumbnail img {
    width: 69px;
    height: 45px ;
    margin: 0px 3px;
}


.keyword-box-content{
    margin-top:15px ;
}

.pricecostselect{
    
}

.btn_orange{
    display: none !important;
}
.box-detailss{
    padding: 25px 20px;
}
.item-thumbnail-front {
    width: 125px ;
    height: 90px ;
}
.product_r{
    
    margin-left: 56%;
    height: 30px;
    line-height: 2;
    width: 100px;
}
.pay_later{
    margin-left: 53%;
    position: absolute;
    width: 64px;
       

}
.sala{
   position: absolute;
       margin-left: -10%;
}
.form-person {
    /* width: 95px; */
    margin-left: -16px;
    height: 31px;
    float: left;
    /* margin-right: -16px; */
}
.btn-book {
    margin-top: 20px;
width: 100% ;
    padding-right: 0px ;
    margin-bottom: 15px ;

}
.btn-costs{
    width: 100%;
}
.box-show-select-view{
    height: 137px;
    margin-bottom: 0px;
}
.product-item-view{
    height: 118px;
}
.item-name-view {
    font-size: 12px;
    margin-left: 2%;
    margin-top: 0px;
    white-space: normal;
}
.img-tiem-view {
    width: 77px;
    margin-top: -7px;
}
.item-type-view {
    position: absolute;
    margin-top: -78px;
    color: #fff;
    font-size: 11px;
   
    background: rgba(25, 22, 22, 0.61);
}
.item-info-view {
    position: absolute;
    font-size: 11px;
    /* margin-top: 13px; */
    margin-left: 2%;
}
}
/*-------------------- galaxy s5>---------------*/
@media only screen 
and (min-device-width : 360px) 
and (max-device-width : 640px) 
and (orientation : portrait) { 
    .box-item-show {
    /* padding: 0 10px; */
}
.thumbnail-photo{
    display: none;
}
#detail-sec01 {
    
    width: 335px ;
    height: 235px ;
}
.big-photo img {
    width: 335px ;
    height: 200px ;
}
.list-thumbnail img {
    width: 79px ;
    height: 55px ;
    margin: 0px 3px ;
}
#carousel ul {
    margin-top: 235px ;
    margin-left: -42px ;
}
.btn_orange{
    display: none !important;
}
.box-detailss{
    padding: 25px 20px;
}
.img-tiem-view {
    width: 90px;
    margin-top: -7px;
}




}




.menu {
  
  background: #ffffff;
    height: 100vh;
    width: 240px;
    position: fixed;
    top:66;
    left: -12px;
    z-index: 5;
    outline: none;
    border: solid 1px#ddd;
}
.menu .avatar {
    background: rgb(85, 202, 245);
    padding: 2em 0.5em;
    text-align: center;
}
.menu .avatar img {
  width: 60px;
  border-radius: 50%;
  overflow: hidden;
  border: 4px solid #ffea92;
  box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.2);
}
.menu .avatar h2 {
  font-weight: normal;
  margin-bottom: 0;
}
.menu ul {
  list-style: none;
  padding: 0.5em 0;
  margin: 0;
}
.menu ul li {
  padding: 0.5em 1em 0.5em 3em;
  font-size: 0.95em;
  font-weight: regular;
  background-repeat: no-repeat;
  background-position: left 15px center;
  background-size: auto 20px;
  transition: all 0.15s linear;
  cursor: pointer;
}
.menu ul li.icon-dashboard {
  background-image: url("http://www.entypo.com/images//gauge.svg");
}
.menu ul li.icon-customers {
  background-image: url("http://www.entypo.com/images//briefcase.svg");
}
.menu ul li.icon-users {
  background-image: url("http://www.entypo.com/images//users.svg");
}
.menu ul li.icon-settings {
  background-image: url("http://www.entypo.com/images//tools.svg");
}
.menu ul li:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
.menu ul li:focus {
  outline: none;
}
#none-menu{
  display: none;
}
.menu{
  display: none;
}
#cartitem{

}
#imgprofile{
  border-radius: 10%;
}
.social .li-icon-font {
    text-align: center;
    cursor: pointer;
    font-size: 14px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: rgba(255, 255, 255, 0.03);
    position: relative;
  }
.social .li-icon-font:after {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    /* border: 1px solid #fff; */
    opacity: 0.03;
}
.social .li-icon-font:hover {
color: #00aced;
}
.li-icon-font:hover i.fa-google-plus {
    color: #dd4b39;
}
.li-icon-font:hover i.fa-facebook {
    color: #3B5998;
}
.li-icon-font:hover i.fa-twitter {
    color: #00aced;
}
.li-icon-font:hover i.fa-instagram {
    color: #795548;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : portrait) {
  #none-menu{
    display: block;
  
}
.menu {
    /*width: 230px;*/
    /*box-shadow: 0 0 0 100em rgba(0, 0, 0, 0);*/
    transform: translate3d(-230px, 0, 0);
    transition: all 0.3s ease-in-out;
  }
 
  .menu{

    display: block !important;
  }
  /*.menu .smartphone-menu-trigger:before,
  .menu .smartphone-menu-trigger:after {
    content: '';
    width: 50%;
    height: 2px;
    background: #fff;
    border-radius: 10px;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0);
  }*/
  /*.menu .smartphone-menu-trigger:after {
    top: 55%;
    transform: translate3d(-50%, -50%, 0);
  }
  .menu ul li {
    padding: 1em 1em 1em 3em;
    font-size: 1.2em;
  }*/
  .menu:focus {
    transform: translate3d(0, 0, 0);
    /*box-shadow: 0 0 0 100em rgba(0, 0, 0, 0.6);*/
  }
  
  #focus:focus .menu {
    background-color: #333;
    transform: translate3d(0, 0, 0);
    box-shadow: 0 0 0 100em rgba(0, 0, 0, 0.6);

  }

}
</style>
<script>
    /**
 * Created by ozaclever on 11/07/2559.
 */


var app = angular.module('myApp', ['ngCookies','ngRoute','ngSanitize']);
    app.controller('myCtrl', function($scope, $location, $http, $cookies,$sce,$filter,$window,$interval) {
       angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'none');
       $scope.anmateprocess = { 'display':'none'};
        //$cookies.remove("idround");
      
    var host = 2;
    var ip = "";
    if (host == 1) {
        ip = "http://gh-travel.com";
    }
    else{
        ip = "http://localhost:8080"
    }
     
    $scope.cart = [];
    if (typeof localStorage["item"] !== "undefined" && localStorage["item"] !== "undefined") {
        $scope.cart = JSON.parse(localStorage["item"]);
        //console.log($scope.cart);
    }
    $scope.carttransfer = [];
        if (typeof localStorage["itemtransfer"] !== "undefined" && localStorage["itemtransfer"] !== "undefined") {
            $scope.carttransfer = JSON.parse(localStorage["itemtransfer"]);
            //console.log($scope.carttransfer);
    }
    $scope.view = [];
    if (typeof localStorage["view"] !== "undefined" && localStorage["view"] !== "undefined") {
        $scope.view = JSON.parse(localStorage["view"]);        
        if ($scope.view.length > 3) {
            $scope.view.splice($scope.view.indexOf($scope.view[0]),1);
            localStorage.setItem('view',JSON.stringify($scope.view));
        }
    }
    $scope.onlyWeekendsPredicate = function(date) {
    var day = date.getDay();
    return day === 0 || day === 6;
  };

    $scope.data = JSON.parse($location.search().data);
    console.log($scope.data);
     $scope.selectedAllotment = {
            child : 0,
            adult : 0
        }
    var monthMatcher = {
            "January" : 0,
            "February" : 1,
            "March" : 2,
            "April" : 3,
            "May" : 4,
            "June" : 5,
            "July" : 6,
            "August" : 7,
            "September" : 8,
            "October" : 9,
            "November" : 10,
            "December" : 11
        }
      $scope.sumprice_adult_child = 0;
      $scope.sumprice_adult = 0;
      $scope.sumprice_child = 0;
      //$scope.amount_adult = 0;
      //$scope.amount_child = 0;
      $scope.sumamount = 0;
      $scope.adultshow = 0;
      $scope.childshow = 0;
       $scope.gallery =[];
       $scope.sumchild = 0;
       $scope.sumadult = 0;
       $scope.amount = 0;
       $scope.front = new Array();
       $scope.textfinal;
       $scope.adult = [];
        $scope.child = [];
        $scope.idround;
        var x = 100;
        for (var i = 1; i <= x; i++) {
          $scope.adult.push(i);
          
        }
        console.log($scope.adult);
        var x2 = 100;
        for (var i = 1; i <= x2; i++) {
          $scope.child.push(i);
          
        }
        console.log($scope.child);



      console.log($scope.data);
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
      $http({
            method : 'post',
            url : "/api/Getdatagallery/"+$scope.data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(res);
              //console.log(parseInt($scope.data));
              for(var i = 0; i < res.data.length; i++  ){


                console.log(res.data[i]);
                $scope.gallery[i] = res.data[i];

                //console.log($scope.gallery);
              }
              i = res.data.length;
              $cookies.put("check", i);
              angular.element(document.querySelector('#gallery-select-value')).triggerHandler('click');

            }

      });
          //localStorage.clear();
            $scope.round_en;
            $scope.dateon = new Array();
          $http({
            method : 'post',
            url : "/api/Getselectdataproduct/"+$scope.data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(res.data)
              
             

              
              $scope.province = res.data[0].province;
              console.log($scope.province);
              $scope.round_en = res.data[0].round_en;
              console.log($scope.round_en);
              //console.log(res.data);
              $scope.topic_en = res.data[0].topic_en;
              $scope.topic_th = res.data[0].topic_th;
              $scope.topic_cn = res.data[0].topic_cn;
              //$scope.cost_a_agent_all = res.data[0].cost_a_agent_all;
              //$scope.cost_b_agent_all = res.data[0].cost_b_agent_all;
               $scope.detail_en = res.data[0].detail_en;
               $scope.detail_th = res.data[0].detail_th;
               $scope.detail_cn = res.data[0].detail_cn;

              $scope.product =  res.data;
              $scope.sumprice_adult = res.data[0].cost_a_agent_all;
              $scope.sumprice_child = res.data[0].cost_b_agent_all;
              $cookies.put("coatadult", $scope.sumprice_adult);
              console.log($scope.product);
            }

      });
      $scope.havetime = new Array();
      $http({
        method : 'post',
        url : "/api/Gettime/"+$scope.data,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      }).success(function(res){
        if(res.status == "ok"){
          $scope.select = res.data;
         
          console.log($scope.select);
          for (var i = 0; i < res.data.length; i++) {

          if((res.data[i].show_h == undefined && res.data[i].show_m == undefined)&&((res.data[i].show_h == null && res.data[i].show_m == null)))
          {
            console.log("in und")
              $scope.havetime = $scope.round_en;
              console.log($scope.havetime);

          }
          else {
            console.log("in !und")
              var fon = ":";
              //$scope.havetime = res.data[i];//$scope.select[i].show_h + fon + $scope.select[i].show_m;
                $scope.havetime.push(res.data[i]);
                console.log($scope.havetime);

                if(res.data.length == 1 ){
                  $scope.idround = res.data[i].id;
                  var t;
                  t = res.data[0].show_h + fon + res.data[0].show_m;
                  $scope.textfinal= t;
                  console.log(t);
                  console.log("work!!!!");
                  
                  $cookies.put("idround", $scope.idround);
                }
          }
          //for (var i = 0; i < res.data.length; i++) {
          //  $scores.data[i]
          //}
          console.log($scope.textfinal);
          console.log($scope.idround+"Round ID...........")
        }
        }

  });
  //$scope.resspa = new Array();
  $http({
      method : 'post',
      url : "/api/Getproduct_onfront",
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function(res){

      if(res.status == "ok"){
        for (var i = 0; i < 4; i++) {
          $scope.front.push(res.data[i]);
            
        }
        

      }
    });
    $scope.addCartfront = function (item) {
      console.log(item);
      console.log(item.id);
      $scope.detail_en = item.detail_en;
      console.log($scope.detail_en);
      //console.log($scope.data);
      $http({
            method : 'post',
            url : "/api/Getdatagallery/"+item.id,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              console.log(res);
                //$scope.detail_en = res.data[0].detail_en;
              //console.log(parseInt($scope.data));
              for(var i = 0; i < res.data.length; i++  ){


                console.log(res.data[i]);
                $scope.gallery[i] = res.data[i];

                //console.log($scope.gallery);
              }
              i = res.data.length;
              $cookies.put("check", i);
              angular.element(document.querySelector('#gallery-select-value')).triggerHandler('click');
              $window.open('view-item#?data=' + JSON.stringify(item.id));
            }

      });
    }
  //$scope.keyword = new Array();
  //$scope.textfinal = '';
  console.log($scope.havetime.length);
  $scope.timeselect = function (event) {
    console.log(event)
    $cookies.remove("idround");
    $cookies.put("idround", event.id);
    console.log(event);
    console.log(event.id)
    console.log($cookies.get('idround'))
    console.log($scope.province);
    var fon = ":";
    var x = event.show_h + fon + event.show_m;
    $scope.textfinal = x;
    //alert( $scope.textfinal)
    console.log(event.id);
   $scope.idround = event.id;
   console.log($scope.idround+"Round ID...........2")

  }
  $scope.deletekeyword = function(input) {
    console.log(input);
    var x = '';
     $scope.textfinal = x;
     //$scope.textfinal.push();
    /*if($scope.keyword.length==1)
            {
              var index = $scope.keyword.indexOf(input);
              $scope.keyword.splice(index,1);
              var text = 0;
            }
            else
            {
              var index = $scope.keyword.indexOf(input);
              $scope.keyword.splice(index,1);
              var text;
                      for(var i = 0 ; i < $scope.keyword.length ; i++)
                      {
                        if($scope.keyword.length==1)
                      {
                        text = $scope.keyword[0];
                        break;
                      }
                      else if(i==0)
                      {
                        text = $scope.keyword[i]
                      }
                      else
                      {
                        text += $scope.keyword[i];
                      }
                      }
                    }*/

  }
      $scope.adultSelect = function(person){
            console.log(person)
            $scope.adultshow = person;
            $scope.sumadult = (person * $scope.sumprice_adult);
            $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;
      }
      $scope.childSelect = function(person2){
            console.log(person2)
            $scope.childshow = person2;
            $scope.sumchild = (person2 * $scope.sumprice_child);
             $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;
           
      }

      $scope.addCart = function(product){
          console.log($scope.textfinal);

          /*for (var i = 0; i < $scope.time.length; i++) {
            if(i == 2)
            {
              $scope.time.replace(($scope.time),2);
              console.log($scope.time);
            }

          }*/
          //var s1 = $scope.time.substr(0,2);
          //var s2 = $scope.time.substr(2);
          //var s0 = ":";
          //$scope.finaltime = s1 + s0 + s2;
          //console.log($scope.finaltime);
          //console.log(s0);
          //console.log(s1);
          //console.log(s2);
        
          console.log($scope.product);
          $scope.date = $('#booking-date').val();
            console.log($scope.date)
            var slitedDate = $scope.date.split("/");
            $scope.ondate = slitedDate[0]+'-'+slitedDate[1]+'-'+slitedDate[2];
           

            $scope.state = false
            angular.forEach($scope.product, function (data) {
                data.adultshow = $scope.adultshow;
                data.childshow = $scope.childshow;
                data.departure = $scope.ondate;
                data.price =  $scope.sumprice_adult_child;
                data.amount = $scope.adultshow+$scope.childshow;
                data.time = $scope.textfinal;
                data.idround = $scope.idround;

                console.log(data);

          });
          $scope.cart.push($scope.product);
          localStorage.setItem('item', JSON.stringify($scope.cart));
          //console.log($scope.cart);
          location.href="cart";
      }
      /*$scope.getItem = function(){
        $scope.cart = JSON.parse(localStorage.getItem('item'));
      }*/

      $scope.removeCart = function(product){
          $scope.cart.splice($scope.cart.indexOf(product),1);
          localStorage.setItem('item',JSON.stringify($scope.cart));

      }
      $scope.img_click = function(input){
            //alert(input);
            //input+=1;
            $cookies.put("check", input);
      }
      $scope.gohome = function(input){
            location.href= ip;
      }

      $scope.gotour = function(){
        location.href="tour";
      }
      
      
      $scope.gohotel = function() {
        location.href="hotels";
      }
      $scope.transfer = function(){
      location.href="Transports";

    }
     $scope.restaurant = function(){
        location.href="restaurant";

      }
      $scope.shopping = function(){
        location.href="shopping";

      }

      $scope.returnhtml = function(x) {
          //console.log(x);
      //var x = '<h1 style="color:#F0F">TEST</h1><img src="https://i.stack.imgur.com/BfuKj.jpg?s=32&g=1" />';
      return $sce.trustAsHtml(x);

    }
       
        
            

        $scope.plus = function(){


            $scope.adultshow = $scope.adultshow + 1;
            //$scope.amount = $scope.adultshow;
            //console.log($scope.amount);
            //console.log($scope.adultshow);
            $scope.sumadult = ($scope.adultshow*$scope.sumprice_adult);
            $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;

            console.log($scope.sumprice_adult_child);
            console.log($scope.adultshow);

        }
        $scope.minus = function(){

            $scope.adultshow = $scope.adultshow - 1;
              if($scope.adultshow<=0)
            {
                if($scope.childshow==0)
                {
                    $scope.adultshow = 0;
                }
                else
                {
                    $scope.adultshow = 0;
                }
            }

                $scope.sumadult = ($scope.adultshow*$scope.sumprice_adult);
                $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;
                console.log($scope.sumprice_adult_child);
                console.log($scope.adultshow);

        }


        $scope.plus1 = function(){

            $scope.childshow = $scope.childshow + 1;
            console.log($scope.childshow);


            $scope.sumchild = ($scope.sumprice_child* $scope.childshow);
            $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;
            console.log($scope.sumchild);

        }
        $scope.minus1 = function(){
            //alert('minus');
            $scope.childshow = $scope.childshow - 1;
            if($scope.childshow<=0)
            {
                if($scope.adultshow==0)
                {
                    $scope.childshow = 0;
                }
                else
                {
                    $scope.childshow = 0;
                }
            }
                    console.log($scope.childshow);
                  $scope.sumchild = ($scope.childshow*$scope.sumprice_child);
                  $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;

                  console.log($scope.sumchild);



        }



        $scope.booking_now = function(product){
          console.log($scope.adultshow);
          console.log($scope.childshow);
          console.log($scope.product);
          $scope.date = $('#booking-date').val();
            var slitedDate = $scope.date.split(" ");
            slitedDate[1] = slitedDate[1].replace(',', '');
            var d = new Date();
            d.setDate(slitedDate[0]);
            d.setMonth(monthMatcher[slitedDate[1]]);
            d.setYear(slitedDate[2]);
            $scope.d = d;
            $scope.state = false
            angular.forEach($scope.product, function (data) {
                data.adultshow = $scope.adultshow;
                data.childshow = $scope.childshow;
                data.departure = $scope.d;
                data.price =  $scope.sumprice_adult_child;
                data.amount = $scope.adultshow+$scope.childshow;
                data.idround = $scope.idround;


                console.log(data);

          });
          $scope.cart.push($scope.product);
          localStorage.setItem('item', JSON.stringify($scope.cart));
          //console.log($scope.cart);
          location.href="cart";

          }
          $scope.select_item_view = function(item,x4){
            
       if (item.type == "Private" || item.type == "Join") {
           
              $window.open('transfer-view#?data=' + JSON.stringify(item.transfer_id));

          }
          else{
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
           
            
            $window.open('view-item#?data=' + JSON.stringify(item.id));

          }
        }
        $scope.select_item = function(item,x4){
       if (item.type == "Private" || item.type == "Join") {
            $scope.view.push(item);
              //console.log(item.transfer_id); 
              $window.open('transfer-view#?data=' + JSON.stringify(item.transfer_id));

          }
          else{
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
        }
      $scope.cartBook = function(){
        location.href="cart";

      }
      /*var timenow = new Date();
        timenow.setDate(timenow.getDate()+1);
        $scope.nowshow = timenow;
        //console.log($scope.nowshow);

        var datecheck = new Date();
        var text1 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 00:00:00";
        var text2 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 20:30:00";
        var text3 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 20:30:00";
        var text4 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 23:59:59";
        //------test time ----------
        //var text5 = "2016-3-30 20:30:01";
        //--------------------------
        var datenow = new Date();
        if(datenow >= new Date(text1) && datenow <= new Date(text2))
        {
            timenow.setDate(timenow.getDate());
            $scope.nowshow = timenow;
        }
        else if(datenow > new Date(text3) && datenow <= new Date(text4))
        {
            timenow.setDate(timenow.getDate()+1);
            $scope.nowshow = timenow;
        }

        $scope.now = new Date();
        $scope.datess= new Date();*/

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
                $scope.placeholderto = 'To';
                $scope.placeholder = 'From';
            }
            else if(x==2){
              
                $cookies.remove("language");
                $cookies.put("language", 2);
                $scope.flag = 'Thai';
                $scope.flagcheck = 2;
                $scope.placeholderto = 'ไปยัง';
                $scope.placeholder = 'จาก';
              //event_change_month("th");
            }
            else if(x==3){
              
                $cookies.remove("language");
                $cookies.put("language", 3);
                $scope.flag = '中文(简体)';
                $scope.flagcheck = 3;
                 $scope.placeholderto = '至';
                $scope.placeholder = '從';
            }
            $scope.body = { 'display':'block'};
            $scope.anmateprocess = { 'display':'none'};
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
</html>
