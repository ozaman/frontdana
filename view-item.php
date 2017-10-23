<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >View Product</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
