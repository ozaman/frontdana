<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hotels</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/menu-res.css">
  <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/main-jquery.js" type="text/javascript"></script>
  <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
   <script src="js/owl.carousel.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main-script.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://code.angularjs.org/1.4.5/angular-route.js"></script>
  <script src="https://code.angularjs.org/1.4.8/angular-cookies.min.js" type="text/javascript"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="js/hotel.js" type="text/javascript"></script>

</head>

<body ng-app="myApp" ng-controller="myCtrl" ng-init="initemhotelselect()">
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
    <div class="row">
        <div class="col-md-12">
            <div class="filter_box">


            </div>
        </div> 
    </div>
    <section>
        <div class="container" style="padding:0">
               
        <div class="row">
              <div class="col-md-10" style="padding:0">
              <div class="box-item-hotel">
                <div class="" ng-repeat="item in hotel">
                  <div class="a-link-item">
                    <img  class="img-icon" ng-src="{{'http://www.t-booking.com/pic/gallerydayicon/crop/' + xx.image_crop +'.jpg'}}" err-src="images/i2.jpg" >

                    <h2 class="searchresult_name"title="hotel name">{{item.topic_en}}<span class="hotel_num">{{$index+1}}</span></h2>
                      <div class="section2">
                        <span class="city"><font><font>&nbsp;&nbsp;{{item.province}}</font></font></span>
                        <a class="link_map" rel="nofollow" target="_link" href="{{item.mapurl}}"><img class="" src="icon/pointer.png" style="width:4%;margin-top:-5px;"><font><font>Map / Transportation </font></font></a>
                        
                        <p class="searchresult_htladdress">{{item.address_en}}</p>
                        
                        <!--<span class="desc">address :{{item.intro_en}}</span>-->
                      </div>
                    <div class="product_r">
                      <span class="base_price"></span>
                          <span class="sala">{{item.minrate | currency:"":0}}-{{item.maxrate | currency:"":0}}&nbsp;฿</span>
                          <span class="view_detail_link" ng-click="getViewhotel(item)">View</span>
                          <span class="pay_later"></span>
                          <p class="sone">{{item.amphur}}</p>
                    </div>
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
<style>
body{

}
.box-item-hotel{
    width: 100%;
    margin-top: 22px;
    border: 1px solid #ddd;   
    padding: 1px 14px;
}
.sala{
    display: block;
    color: #a7690c;
    font-size: 12px;
    margin-top: 30px;
    margin-bottom: 20px;
}
#active-hotels{
 color: #0dabf9;
}
.view_detail_link{
    display: inline-block;
    position: relative;
    z-index: 1;
    line-height: 2;
    font-weight: 300;
    width: 100px;
    height: 25px;
    padding-left: 10px;
    padding-right: 10px;
    color: #fff;
    box-shadow: 0px 2px 0px #00BCD4;
    background-image: -webkit-linear-gradient(91deg, #e58c00 0%, #3a8aa7 100%);
    background-image: linear-gradient(-1deg, #00BCD4 0%, #55caf5 100%);
    border: 1px solid #00BCD4;
    text-align: center;
    border-radius: 3px;
    outline: none;
    cursor: pointer;
}
.view_detail_link:hover{
    background-image: linear-gradient(-1deg, #4DD0E1 0%, #55caf5 100%);
    border: 1px solid #4FC3F7;
    box-shadow: 0px 2px 0px #4FC3F7;
}
.product_r {
        position: relative;
    width: 150px;
    /* padding-bottom: 10px; */
    clear: both;
    background-color: #f3f6f9;
    text-align: center;
    font-family: microsoft yahei;
    float: right;
    height: 186px;
    margin-top: -122px;
}
.searchresult_name {
    font: bold 14px Tahoma;
    padding-right: 8px;
    margin-bottom: 18px;
    padding-left: 27px;
    position: relative;
    z-index: 2;
}
.hotel_num {
    background-image: url(../images/icon_searchresult13.png);
    background-repeat: no-repeat;
    float: left;
    margin-left: -32px;
    width: 24px;
    height: 28px;
    background-position: -156px 0;
    font-family: tahoma;
    font-weight: bold;
    font-size: 12px;
    color: #fff;

    line-height: 24px;
    text-align: center;
    vertical-align: 1px;
}
.product_r .base_price {
    color: #f60;
    display: block;
    margin-bottom: 0;
    line-height: 1.2;
}
.base_price {
    /*font-style: normal;
    font-family: arial;
    text-decoration: none;*/
}
.product_mod h2 {
    font-size: 20px !important;
    color: #00A6C4;
    margin-bottom: 4px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 460px;
    height: 26px;
}
.a-link-item h2{
    position: relative;
    font-size: 20px !important;
    margin-left: 6px;
    width: 578px;
}
  .bt-select{
    position: relative;
    display: inline-block;
    width: 170px;
    height: 37px;
    background-color: #0FB0CE;
    padding: 10px 63px;
    margin-top: 75px;
    border: solid 1px #0FB0CE;

  }
  .bt-select2{
    position: relative;
    display: inline-block;
    width: 170px;
    height: 37px;
    background-color: #fff;
    padding: 10px 63px;
    margin-top: 75px;
    border: solid 1px #0FB0CE;
    margin-left: -4px;

  }
  .bt-select3{
    position: relative;
    display: inline-block;
    width: 170px;
    height: 37px;
    background-color: #fff;
    padding: 10px 63px;
    margin-top: 75px;
    border: solid 1px #0FB0CE;
    margin-left: -4px;
  }
  .box-detail{
    margin-top: 0 !important;
  }
  .search-case{
    border-bottom: 1px dotted #c2c2c2;
    height: 37px;
    width: 97%;
    margin-left: 20px;
  }
  .search-case p{
    position: relative;
    display: inline-block;
    margin: 9px 0px;
    margin-right: 20px;
    /* margin-top: 6px; */
  }
  .l-check{
    margin-left: 10px !important;
    padding: 0 !important;
  }
  .a-link-item{
    border-bottom: solid 1px #ddd;
    width: 100%;
    height: 200px;
    margin-top: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
    box-shadow: 0 5px 5px #e5e5e5;
  }
  /*.a-link-item:hover{
    border: solid 1px #0fabce;
    background-color: rgba(15, 171, 206, 0.12);
  }*/
  .img-icon{
    float: left;
    width: 152px;
    height: 143px;
    margin-top: 40px;
    margin-right: 10px;
    border-radius: 10px;
    position: absolute;
  }
  .filter_box {
    position: relative;
    width: 100%;
    /* border: dashed 1px #338cb7; */
    height: 300px;
    background: #55caf5;
    /* margin-left: 2.5%; */
  }
  .section2{
    position: relative;
    margin-left: 166px;

  }
  .city{
    margin-right: 50px;
    color: #8a6d3b;
    margin-left: -5px;
    font-size: 18px;
    font-weight: 500;
  }
  .link_map{
    margin-left: 100px;
  }
  .link_map:hover{
    text-decoration: none;
  }
  .sone{
    position: absolute;
    display: block;
    float: right;
    margin-top: 27px;
    margin-left: 34%;
    z-index: 1;
    color: #999;
  }
  .searchresult_htladdress{
    margin-top: 20px;
  }
  
</style>
</body>
<script >
    /**
 * Created by ozaclever on 11/07/2559.
 */



var app = angular.module('myApp', ['ngCookies','ngRoute']);
  app.controller('myCtrl', function($scope, $location, $http, $cookies, $window) {
     angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'none');

    //$scope.cart = new Array();
   

    var host = 2;
     var ip = "";
     if (host == 1) {
          ip = "http://gh-travel.com";
     }
     else{
          ip = "http://localhost:8080"
     }
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
    $scope.itemhotel = new Array();
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
    //====================HOTEL==========================//

    $http({
        method : 'post',
        url : "/api/Getproduct_hotel",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      }).success(function(res){

        if(res.status == "ok"){
          //document.getElementById("cssload-container").style.display = "none";
          $scope.hotel = res.data;
          console.log(res.data);

        }
      });
      
      $scope.select_itemhotel = function(x,item){
        console.log(x);
        console.log(item);
        $scope.sale = tour;
        console.log(item.id);
        console.log(x);
        console.log($scope.id);
        $scope.id[x];
        console.log($scope.id[x]);
        //angular.element(document.querySelector('#get-select-value')).triggerHandler('click',$scope.tour);
        location.href="hotel#?data=" + JSON.stringify(item.id);
      }
      //=====================THE END==================//
    $scope.cartBook = function(){
      location.href="cart";

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
    $scope.transfer = function(){
      location.href="Transports";

    }
     $scope.restaurant = function(){
        location.href="restaurant";

      }
      $scope.shopping = function(){
        location.href="shopping";

      }
       $scope.gotour = function(){
        location.href="tour";

      }

      
    $scope.getViewhotel = function(item){
      $scope.itemhotel.push(item);
      //console.log(item);      
      localStorage.setItem('itemhotel',JSON.stringify($scope.itemhotel));
      $window.open('hotel-view#?data=' + JSON.stringify(item.id));

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
