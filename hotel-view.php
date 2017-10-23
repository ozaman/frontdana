<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel view</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/menu-res.css">
  <link rel="stylesheet" type="text/css" href="css/default.css">
  <link rel="stylesheet" type="text/css" href="css/default.date.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--  <script src="/assets/editor/v2x0/application-4856922c0fa82feadc452fb3dcc72ba5.js"></script>-->
  <script src="js/jquery-cookie.js" type="text/javascript"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/jquery.modal.min.js" type="text/javascript"></script>
  <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
  <script src="js/picker.js" type="text/javascript"></script>
  <script src="js/picker.date.js" type="text/javascript"></script>
  <script src="js/page3_jquery.js" type="text/javascript" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
  <script src="js/hotel-view.js" type="text/javascript" ></script>
   <script src="js/owl.carousel.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main-script.js" type="text/javascript"></script>
  <script src="https://code.angularjs.org/1.4.5/angular-route.js"></script>
  <script src="https://code.angularjs.org/1.4.8/angular-cookies.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular-sanitize.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body ng-app="myApp" ng-controller="myCtrl" ng-init="getItem()">
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

    
    <div class="row">
      <div class="col-md-12">
        <div class="base_bd">
        <div class="htl_info_com">
            <div class="htl_info">
                <div ng-repeat="item in datahotel">                    
                    <h1 class="name" >{{item.topic_en}}
                        
                        <span class="hotel_diamond04" >*****</span>
                    </h1>
                    <div class="adress" >{{item.address_en}}
                         <a id="linkViewMap" class="view_map" href="{{item.mapurl}}" >map</a>
                    </div>
                    <div class="icon_list">                        
                    </div>
                </div>
                <div class="price_box"></div>
                <div class="book_info">
                    <p class="book_btn" id="book_btn" href="javascript:;">book</p>                    
                </div>
            
                
            </div>
            <div class="htl_com" >
              <p class="commnet_score" ><span class="score">&nbsp;&nbsp;&nbsp;&nbsp;<span class="score_text">4.6</span></span><span class="recommend">80%</span><span class="commnet_num"><span itemprop="reviewCount"></span></span></p>
                <div class="comment_text">test</div>

            </div>
        </div>

        <div class="htl_pic_map">
            <div class="htl_pic" id="picList">

            </div>
              <div class="btn_upload_box"></div>
        </div>
            <div class="htl_map" id="map">
              <p class="view"></p>
                <a href="{{}}"  d-url="/international/map/995019.html" class="view" id="viewMap">veiw</a>
            <img src=""></div>
        </div>
          <div class="col-md-7 "  >	
          </div>
          <div class="col-md-5">
	       </div>
        </div>
      </div>
    </div>
    <style>
    .htl_map .view {
    position: absolute;
    top: 184px;
    right: 172px;
    display: block;
    width: 128px;
    height: 30px;
    color: #fff;
    text-align: center;
    line-height: 30px;
    overflow: hidden;
    background-color: #2277CC;
    border: 1px solid #2266AA;
}
.htl_pic_map {
    margin-bottom: 18px;
}
      .htl_pic_map .htl_pic {
    float: left;
    width: 74%;
    height: 224px;
    overflow: hidden;
    background: #ccc;
}
.htl_pic_map .htl_map {
    position: relative;
    float: right;
    width: 298px;
    height: 222px;
    border: 1px solid #ccc;
    overflow: hidden;
    background: #FFFAF0 url(http://pic.c-ctrip.com/hotelinternational121211/bg_nomap.png) no-repeat center center;
}


    .htl_com .commnet_score {
    display: block;
    padding: 0 15px;
    color: #333;
    text-align: right;
    text-decoration: none;
    cursor: pointer;
    overflow: hidden;
}
    .htl_info_com .adress {
      margin: 5px 0;
      width: 650px;
      }
      .htl_info_com .book_btn {
    text-shadow: 1px 1px 0 #cf7000;
    background-color: #ffb000;
    border: solid 1px #e77c00;
}

.htl_info_com .htl_com {
    clear: right;
    float: right;
    width: 25.4327%;
    height: 110px;
    padding-top: 5px;
    background-color: #f0f8ff;
    overflow: hidden;
}


.htl_info_com .book_btn {
    float: right;
    width: 130px;
    height: 42px;
    color: #fff;
    font: bold 16px/40px "Microsoft YaHei", SimSun, Tahoma, Verdana, Arial, sans-serif;
    cursor: pointer;
    text-align: center;
    box-shadow: 0 1px 0 rgba(95,50,0,0.7);
    border-radius: 3px;
    verflow: visible;
}
.htl_com .comment_text {
    width: 89%;
    height: 50px;
    margin: 0 auto;
    padding: 5px 0;
    border: 1px solid #e3eef9;
    border-radius: 5px;
    background-color: #fff;
    overflow: hidden;
}
      .htl_info_com .book_info {
    position: absolute;
    top: 68px;
    right: 0;
    width: 190px;
}
      .htl_info_com .price_box {
    position: absolute;
    top: 0;
    right: 0;
    width: 170px;
    height: 68px;
}
      .name{
        display: inline-block;
        width: 600px;
        vertical-align: middle;
        margin: 0;
        font: bold 20px/28px "microsoft yahei",simsun;
        color: #06c;
      }
      .base_bd{
        width: 90%;
        margin-top: 20px;
        border: solid 1px #ccc;
        height: 800px;
        margin-left: 5%;
      }
      .htl_info{
        position: relative;
        z-index: 1;
        float: left;
            width: 74%;
        min-height: 115px;
        background: #eee;
      }
    </style>

    
<!--<div class="row">
    <div class="col-md-7">
        <div class=" box-detailss">

          <span class="detail" ng-bind-html="returnhtml(detail)"></span>

        </div>
    </div>
    
        <!--<div class="box-item-show2">

        </div>
  </div>-->
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
</body>
<script>
    var app = angular.module('myApp', ['ngCookies','ngRoute','ngSanitize']);
  app.controller('myCtrl', function($scope, $location, $http, $cookies,$sce,$filter) {
     angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'none');
      //$scope.product = new Array();
      var host = 2;
     var ip = "";
     if (host == 1) {
          ip = "http://gh-travel.com";
     }
     else{
          ip = "http://localhost:8080"
     }
     
      $scope.cart = [];
    if (typeof localStorage["itemhotel"] !== "undefined" && localStorage["itemhotel"] !== "undefined") {
      $scope.cart = JSON.parse(localStorage["itemhotel"]);
      console.log($scope.cart);
    }
    $scope.carttransfer = [];
         if (typeof localStorage["itemtransfer"] !== "undefined" && localStorage["itemtransfer"] !== "undefined") {
      $scope.carttransfer = JSON.parse(localStorage["itemtransfer"]);
      console.log($scope.carttransfer);

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
              $scope.Profile = res[0].resource;
              $scope.userEmail = res[0].email;
              $scope.loginname = res[0].fname+" "+res[0].lname;
            });
      }
      else
      {
        $scope.loginstatus = true;
      }
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

      console.log($scope.data);
      $http({
            method : 'post',
            url : "/api/Getgallery_hotel/"+$scope.data,
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
            //$scope.round_en;
          $http({
            method : 'post',
            url : "/api/Getselect_hotel/"+$scope.data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          }).success(function(res){
            if(res.status == "ok"){
              $scope.datahotel = res.data;
              console.log(res.data);
              //$scope.round_en = res.data[0].round_en;
              //console.log($scope.round_en);
              //console.log(res.data);
              $scope.topic_en = res.data[0].topic_en;
              //$scope.cost_a_agent_all = res.data[0].cost_a_agent_all;
              //$scope.cost_b_agent_all = res.data[0].cost_b_agent_all;
               $scope.detail = res.data[0].detail;

              $scope.product =  res.data;
              //$scope.sumprice_adult = res.data[0].cost_a_agent_all;
              //$scope.sumprice_child = res.data[0].cost_b_agent_all;
              $scope.product.forEach( function (item) {

              });
              console.log($scope.product);
            }

      });
      $scope.havetime = new Array();
      $http({
        method : 'post',
        url : "/api/Gettime/"+$scope.data.id,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      }).success(function(res){
        if(res.status == "ok"){
          $scope.select = res.data;
          console.log($scope.select);
          for (var i = 0; i < res.data.length; i++) {
          if((res.data[i].show_h == undefined && res.data[i].show_m == undefined)&&((res.data[i].show_h == null && res.data[i].show_m == null)))
          {
              $scope.havetime = $scope.round_en;

          }
          else {
              var fon = ":";
              //$scope.havetime = res.data[i];//$scope.select[i].show_h + fon + $scope.select[i].show_m;
                $scope.havetime.push(res.data[i]);
                console.log($scope.havetime);
          }
          //for (var i = 0; i < res.data.length; i++) {
          //  $scores.data[i]
          //}
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
        //document.getElementById("cssload-container").style.display = "none";
        $scope.front = res.data;
        console.log(res.data);
        console.log(res.data.length);



       



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
  $scope.textfinal = '';
  $scope.timeselect = function ($event) {
                    var fon = ":";
                    var x = $event.show_h + fon + $event.show_m;
                    $scope.textfinal = x;

                    

  }
  $scope.deletekeyword = function(input) {
    console.log(input);
    var x = '';
     $scope.textfinal = x;
    

  }
      $scope.addCart = function(product){
          console.log($scope.textfinal);

         
          //var s1 = $scope.time.substr(0,2);
          //var s2 = $scope.time.substr(2);
          //var s0 = ":";
          //$scope.finaltime = s1 + s0 + s2;
          //console.log($scope.finaltime);
          //console.log(s0);
          //console.log(s1);
          //console.log(s2);
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
                data.time = $scope.textfinal;


                console.log(data);

          });
          $scope.cart.push($scope.product);
          localStorage.setItem('item', JSON.stringify($scope.cart));
          //console.log($scope.cart);
          location.href="http://localhost:8080/cart";
      }
      $scope.getItem = function(){
        $scope.cart = JSON.parse(localStorage.getItem('item'));
      }

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

      $scope.page2 = function(){
        location.href="page2";
      }
      $scope.train = function(){
        location.href="train";

      }
      $scope.air = function(){
        location.href="air";

      }
      $scope.transfer = function(){
      location.href="Transports";

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


                console.log(data);

          });
          $scope.cart.push($scope.product);
          localStorage.setItem('item', JSON.stringify($scope.cart));
          //console.log($scope.cart);
          location.href="http://localhost:8080/cart";

          }
      $scope.cartBook = function(){
        location.href="cart";

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
