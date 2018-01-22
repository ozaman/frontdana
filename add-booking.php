<!DOCTYPE html>
<!-- saved from url=(0076)http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html -->
<html lang="en" class="perfect-scrollbar-on"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>dana tours asia</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Canonical SEO -->
   
    <!-- Bootstrap core CSS     -->
    <link href="../js/bootstrap.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="../files/css-/material-dashboard.css?v=<?=time()?>" rel="stylesheet">
    <link href="../files/css-/main.css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
   

</head>

<body ng-app="myApp" ng-controller="myCtrl">
     <!--              <div class="loading " style="opacity: 0;">
  <div class="loading-container">
    <p>Loadding...</p>
    <img class="loader" src="/rubik/assets/img/rubik.svg">
  </div>
</div> -->
    <div class="wrapper">
        <div class="sidebar" data-active-color="green" data-background-color="black" data-image="">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="" class="simple-text">
                Dana tours 
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="" class="simple-text">
                    DN
                </a>
            </div>
            <div class="sidebar-wrapper ">
               <!--  <div class="user">
                    <div class="photo">
                        <img src="img/profile.png">
                    </div>
                    <div class="info">
                        <a >
                            USERS ADMIN
                           
                        </a>
                       
                    </div>
                </div> -->
                <ul class="nav">
                    <li >
                        <a href="../index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a data-toggle="collapse" href="index.php#pagesExamples" >
                            <i class="material-icons">home</i> 
                           
                            <p>Main Menu
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="pagesExamples" aria-expanded="true">
                            <ul class="nav"> 
                                <li >
                                    <a href="tours-package.php">
                                        <i class="material-icons">local_offer</i> Tour Packages
                                    </a>
                                </li>
                                 <li >
                                    <a href="transfer-package.php">
                                        <i class="material-icons">directions_car</i> Transfer Packages
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="add-booking.php">
                                        <i class="material-icons">note_add</i>Add Bookings
                                    </a>
                                </li>
                                <li>
                                    <a href="company.php">
                                        <i class="material-icons">dns</i>Companies
                                    </a>
                                </li>
                                <li>
                                    <a href="agent.php">
                                        <i class="material-icons">recent_actors</i> Agents
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="users.php">
                                        <i class="material-icons">people</i> Users
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="index.php#componentsExamples">
                            <i class="material-icons">assignment</i> 
                            <p>Report
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                             <li>
                                    <a href="../report/complete-booking.php">
                                    <i class="material-icons">check_circle</i>
                                         Complete Booking
                                    </a>
                                </li>
                               <li>
                                    <a href="../report/new-booking.php">
                                        <i class="material-icons">insert_drive_file</i> New Bookings
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="../report/cancel-booking.php">
                                        <i class="material-icons">cancel</i> Cancel Bookings
                                    </a>
                                </li>
                                 <li>
                                    <a href="../report/account.php">
                                    <i class="material-icons">account_balance_wallet</i>
                                         Account
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="index.php#formsExamples">
                            <i class="material-icons">folder_special</i> 
                            <p>Logs
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                               <!-- <li>
                                    <a href="../logs/add-booking.php">
                                        <i class="material-icons">note_add</i> Add Bookings
                                    </a>
                                </li> -->
                                <li class="active">
                                    <a href="../logs/confirm-booking.php">
                                        <i class="material-icons">check_circle</i>  Confirm Bookings
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="../logs/cancel-booking.php">
                                        <i class="material-icons">cancel</i>  Cancel Bookings
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                
                </ul>
           <!--  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div> --><!-- <div class="ps-scrollbar-y-rail" style="top: 0px; height: 563px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 435px;"></div></div> --></div>
        <div class="sidebar-background" style="background-image: url(http://demos.creative-tim.com/material-dashboard-pro/assets/img/sidebar-1.jpg)"></div></div>
        <div class="main-panel ">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""> Main menu </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav  navbar-nav navbar-right">
                            <!-- <li>
                                <a href="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li> -->
                            <li class="dropdown ">
                                <a href="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                      <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                   
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                       
                                <div class="ripple-container"></div></a>
                                <ul class="dropdown-menu" id="login-down">
                                    <li>
                                        <a href="">
                                            <i class="material-icons">access_alarms</i> Bookings
                                        </a>
                                    </li>
                                   <!--  <li>
                                        <a href="" >
                                            <i class="material-icons">power_settings_new</i>Logout
                        
                                        </a>
                                    </li> -->
                                </ul>
                            </li>
                            <!-- <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                               
                            </li> -->
                            <li class="dropdown ">
                                <a href="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                      <i class="material-icons">person</i>
                                   <!--  <span class="notification">5</span> -->
                                   
                                    <p class="hidden-lg hidden-md">Profile<b class="caret"></b></p>
                                       
                                <div class="ripple-container"></div></a>
                                <ul class="dropdown-menu" id="login-down">
                                    <li class="">
                                        <a href="users.php" >
                                       <i class="material-icons">settings</i>Settings
                        
                                        </a>
                                    </li>
                                    <li>
                                         <a href="" data-toggle="modal" data-target="#logout">
                                            <i class="material-icons">power_settings_new</i>Logout
                        
                                        </a>
                                    </li>
                                </ul>
                            </li>
                         
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search" style="    border: 0;
    background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#ffffff, #ffffff);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    transition: background 0s ease-out;
    float: none;
    box-shadow: none;
    border-radius: 0;
    font-weight: 400;">
                                <span class="material-input"></span>
                            <span class="material-input"></span></div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
          
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="row">                            
                                <div class="" style="background: #fff; padding-left: 10px;">                                
                                    <div class="navigate" >
                                        <!-- <a href="tours-package.php">
                                            <button type="button" class="btn btn-rose btn-sm" style=""><i class="fa fa-sign-out fa-fw"></i> Back</button></a> -->
                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;background: #fff; display: inline-block; ">
                                            <!-- <li><a href="package.php">Main Menu</a></li> -->
                                            <li class="active"> / Add bookings</li><!-- <span ng-bind="ssss*1000 |  date:'MM/dd/yyyy HH:mm:ss'"></span>-<span ng-bind="ssss2*1000 |  date:'MM/dd/yyyy HH:mm:ss'"></span> -->
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        label.label-tour {
    text-align: right;
    width: 115px;
    margin-right: 10px;
}
.form-group {
  margin: 0;
  padding-bottom: 10px;
  margin: 20px 0 0 0;
}
                    </style>

                     <div class="row">
                        <div class="col-md-12">  
                                                    
                                <form class="form-group "  >
                                    <input type="hidden" value="{{token}}" name="token"/>
                                   <!--  <input type="hidden" value="{{city}}" name="city"/> -->
                                    <div class="form-group form-inline">
                                    <div class="radio" id="radioin">
                                        <label style="padding: 0px 30px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Tour" >
                                            Tour
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label style="padding: 0px 30px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Transfer">
                                            Transfer
                                        </label>
                                    </div>
                                    </div>
                                    <!--  <div class="form-group form-inline">
                                    <div class="radio" id="radioin">
                                        <label style="padding: 0px 30px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Tour" >
                                            Tour
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label style="padding: 0px 30px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="transfer">
                                            transfer
                                        </label>
                                    </div>
                                    </div> -->

                                   <!--  <div class="form-group form-inline " style="width: 100%">
                                            <label for="class" class="label-tour" >City<span> :</span></label>
                                            <select name="city" id="city"  class="form-control col-md-8" required style=" border: 1px solid #ccc; border-radius: 5px; width: 220px;" ng-model="city" >
                                                <option value="">none</option>
                                                <option>Phuket</option>
                                                <option>Phang nga</option>
                                                <option>Krabi</option>
                                                <option>Phi Phi island</option>
                                               
                                            </select>
                                        </div> -->

                                    
                                <div >
                                <div class="form-group form-inline" ng-show="checktransfer">
                                        <label for="name" class="label-tour">Province<span> :</span></label>
                                       
                                         <select class="form-control" ng-change="changeprovince(selectprovince)" id="selectprovince" ng-model="selectprovince" data-ng-options="i as i.name for i in dataprovince" style="width: 150px;">
                                                    <option value="">None</option>
                                              </select>
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktransfer">
                                        <label for="name" class="label-tour">Package<span>:</span></label>
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "Max length 200 characters" id="name" name="topic" ng-model="topic" required/> -->
                                         <select class="form-control" ng-change="changepackage(selectpackage)" id="selectpackage" ng-model="selectpackage" data-ng-options="i as i.name+'('+i.company_name+')' for i in dataselectransfer" >
                                                    <option value="">- None -</option>
                                              </select>
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktransfer">
                                        <label for="name" class="label-tour">Person<span> :</span></label>
                                         <label class="form-control " id="label-addbooking" "><span ng-bind="person "></span></label>
                                        <!-- <input type="text" class=" form-control" maxlength="200" placeholder = "2x,xxx" id="price" required/ style="width: 150px"> -->
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktransfer">
                                        <label for="name" class="label-tour">Transfer price<span> :</span></label>
                                         <label class="form-control "  id="label-addbooking" ><span ng-bind="costpackage | currency:'':0"></span></label>
                                        <!-- <input type="text" class=" form-control" maxlength="200" placeholder = "2x,xxx" id="price" required/ style="width: 150px"> -->
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktransfer">
                                        <label for="name" class="label-tour">Total price<span> :</span></label>
                                        <label class="form-control "  id="label-addbooking" "><span ng-bind="total_pricetransfer | currency:'':0"></span></label>
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "2x,xxx" id="price" name="price" ng-model="price" required/> -->
                                    </div>
                                    <div class="form-group form-inline"  ng-show="checktour">
                                        <label for="name" class="label-tour">Package<span> :</span></label>
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "Max length 200 characters" id="name" name="topic" ng-model="topic" required/> -->
                                         <select class="form-control" ng-change="changepackage(selectpackage)" id="selectpackage" ng-model="selectpackage" data-ng-options="i as i.name+'('+i.company_name+')' for i in dataTour" >
                                                    <option value="">-None-</option>
                                              </select>
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktour">
                                        <label for="name" class="label-tour">Net adult price<span> :</span></label>
                                        <label class="form-control"   id="label-addbooking" >
                                        <span ng-bind="net_price_adult | currency:'':0"></span></label>
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "2x,xxx" id="price" name="price" ng-model="price" required/> -->
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktour">
                                        <label for="name" class="label-tour">Sale adult price<span> :</span></label>
                                        <input class="form-control"  id="label-addbooking" ng-value="sale_price_adult | currency:'':0" ng-change="saleprice(sale_price_adult)" ng-model="sale_price_adult">
                                        <!-- <span ng-bind="sale_price_adult | currency:'':0"></span></label> -->
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "2x,xxx" id="price" name="price" ng-model="price" required/> -->
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktour">
                                        <label for="name" class="label-tour">Net child price<span> :</span></label>
                                         <label class="form-control"  id="label-addbooking" ><span ng-bind="net_price_child | currency:'':0"></span></label>
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "2x,xxx" id="price" name="price" ng-model="price" required/> -->
                                    </div>
                                    
                                    <div class="form-group form-inline" ng-show="checktour">
                                        <label for="name" class="label-tour">Sale child price<span> :</span></label>
                                         <input class="form-control"  id="label-addbooking"  ng-value="sale_price_child | currency:'':0" ng-change="salepricechild(sale_price_child)" ng-model="sale_price_child" >
                                         <!-- <span ng-bind="sale_price_child | currency:'':0"></span></label> -->
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "2x,xxx" id="price" name="price" ng-model="price" required/> -->
                                    </div>
                                    <div class="form-group form-inline" ng-show="checktour">
                                        <label for="name" class="label-tour">Total price<span> :</span></label>
                                        <label class="form-control "  id="label-addbooking" ><span ng-bind="total_price | currency:'':0"></span></label>
                                        <!-- <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "2x,xxx" id="price" name="price" ng-model="price" required/> -->
                                    </div>
                                    <div class="form-group form-inline" ng-if="area == 'In'">
                                        <label class="label-tour">Flight<span> :</span></label>
                                        <input type="text"  class="form-control" placeholder="A130" name="flight" ng-change="changefkight(flight)" ng-model="flight" id="flight" ng-value="flight" style="width: 150px">
                                        <!-- <label class="typeUser" >{{edit_du.email}}</label> -->
                                    </div>


                                 
                               <!--  <div class="box-list-cars" ng-style="list">You choose 
                                    <span style="color: red">({{listcar}})</span> cars 
                                    <span style="color:#000">1- {{person}} person</span>
                                </div> -->
                             
                                    

                               
                                 <div class="form-group form-inline">
                                            <label  class="label-tour">date :</label>
                                           
                                            <!-- <span ng-if="flagcheck == 2">วันที่ :</span>
                                            <span ng-if="flagcheck == 3">日期 :</span> -->
                                     
                                            <div class='input-group date' id='datetimepicker1' >
                                                    <input type='text' class="form-control" id="on_date"  name="ondate"  ng-model="ondate" value="ondate"  required >
                                                    <span class="input-group-addon" id="icon-calen" style="">
                                                        <i class="fa fa-calendar" id="calen" aria-hidden="true" style="color: #9E9E9E"></i>
                                                    </span>
                                                </div>
                                                
                                </div>
                                   
                                           
                                                
                                <div class="box-list-cars" ng-style="list" ng-show="checktransfer">You choose 
                                    <span style="color: red">({{listcar}})</span> cars 
                                    <span style="color:#000">1- {{person}} person</span>
                                </div>
                                    <div ng-show="checktransfer" class="form-group form-inline "  style="width: 100%">
                                            <label  class="label-tour">Cars: </label>
                                           
                                        
                                      
                                        <select class="form-control" id="numperson" ng-model="cars" ng-change="changevalue(cars.value)" data-ng-options="i as i.value for i in optioncar" style="width: 68px;">
                                          <option value="">{{listcar}}</option>            
                                        </select>
                                    </div>
                                                
                                                <div class=" form-group form-inline col-adult" style="display: inline-block;width: 100%">
                                                <label class="label-tour">Adult(s):</label> 
                                            <select class="form-control" ng-change="changenumperson(adult)" id="numperson" ng-model="adult" data-ng-options="i  for i in numperson">
                                                    <option value="">0</option>
                                              </select>
                                            <!-- <span style="padding:9%"></span> -->
                                            <!-- <span style="margin-right: 10px;margin-left: 20px;"></span> -->
                                            
                                                <label class="" style="text-align: right;  width: 68px;  margin-right: 10px;">Child(s):</label> 
                                      
                                             
                                              <!-- <span style="padding-left: 3%;">/</span> -->
                                              <select class="form-control" ng-change="changenumperson2(child)" id="numperson2" ng-model="child" data-ng-options="i  for i in numperson2">
                                                    <option value="">0</option>
                                              </select>
                                            
                                           
                                            
                                            
                                    </div>
                                      
                                    <div class="form-group form-inline " style="width: 100%">
                                            <label for="class" class="label-tour" >Agent<span> :</span></label>
                                             <select class="form-control" ng-change="changeagent(selectagent)" id="selectagent" ng-model="selectagent" data-ng-options="i as i.fname for i in dataAgent" id="label-addbooking">
                                                    <option value="">- None -</option>
                                              </select>
                                    </div>
                                    <div class="form-group form-inline" >
                                        <label class="label-tour" id="title-around">Pickup time : </label> 
                                            
                                            <!-- <span ng-if="flagcheck == 2">ช่วงเวลา : </span> -->
                                            <!-- <span ng-if="flagcheck == 3">大約時間 : </span> &nbsp; &nbsp; -->
                                        <div class="form-group form-inline" style="padding: 0;margin: 0">
                                            <select class="form-control" ng-change="changenum(selectnum)" id="num" ng-model="selectnum" data-ng-options="i  for i in num" style="">
                                            <option value="">00</option>
                                                
                                                
                                          </select>
                                          <span>:</span>
                                          <select class="form-control" ng-change="changenum2(selectnum2)" id="num2" ng-model="selectnum2" data-ng-options="i  for i in num2">
                                           <option value="">00</option>
                                                
                                                
                                          </select>
                                           <span>-</span>
                                            <select class="form-control" ng-change="changenum3(selectnum3)" id="num3" ng-model="selectnum3" data-ng-options="i  for i in num" style="">
                                            <option value="">00</option>
                                                
                                                
                                          </select>
                                          <span>:</span>
                                          <select class="form-control" ng-change="changenum4(selectnum4)" id="num4" ng-model="selectnum4" data-ng-options="i  for i in num2">
                                           <option value="">00</option>
                                                
                                                
                                          </select>
                                        </div>

                                            
                                        <!-- <p id="title-car">
                                            <span ng-if="flagcheck == 1">Cars: </span>
                                            <span ng-if="flagcheck == 2">รถกีคัน: </span>
                                            <span ng-if="flagcheck == 3">多少輛車: </span>
                                        </p> -->
                                      
                                       <!--  <select id="cars" ng-model="cars" ng-change="changevalue(cars.value)" data-ng-options="i as i.value for i in optioncar">
                                          <option value="">{{listcar}}</option>            
                                        </select> -->
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="label-tour">Room number<span> :</span></label>
                                        <input type="text"  class="form-control" placeholder="A130" name="room" ng-change="roomnumber(room)" ng-model="room" id="room" ng-value="room" id="label-addbooking">
                                        <!-- <label class="typeUser" >{{edit_du.email}}</label> -->
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="name" class="label-tour">Pickup place<span> :</span></label>
                                        <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "Type airport,hotel name, or location." ng-change="pickupplacetour(pickupplace)" id="pickupplace" name="pickupplace" ng-model="pickupplace" required/>
                                    </div>
                                 
                                 <div class="form-group form-inline">
                                        <label for="name" class="label-tour">To place<span> :</span></label>
                                        <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "Type airport,hotel name, or location." ng-change="pickupplacetotour(toplace)" id="toplace" name="toplace" ng-model="toplace" required/>
                                    </div>
                                    <!-- <hr/ > -->
                                    <div class="form-group form-inline">
                                    <div class="checkbox" style="padding: 0 20px 0 0" id="checkforagent">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" value="checked" ng-model="state" ng-click="Acceptance($event,state)"><!-- <span class="checkbox-material"><span class="check"></span></span> -->Select detail on agent
                                            </label>
                                    </div>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="label-tour">Name<span> :</span></label>
                                        <input type="text"  class="form-control" placeholder="Ex.john smith" name="name" ng-model="name" ng-change="nameuser(name)" ng-value="name" title="Please input character only." required size="53">
                                        <!-- <label class="typeUser" >{{edit_du.firstname}}</label> -->
                                    </div>
                                   
                                    <div class="form-group form-inline">
                                        <label class="label-tour">Phone<span> :</span></label>
                                        <div id="select-country" class="form-control " ng-click="Country()" size="100" >
                                                <span><img ng-if="imgcoutry != ''" src="../files/img/flag/icon/{{imgcoutry}}.png" width="22" style="margin-right: 5px"></span>
                                                <span ng-bind="Countryfont"></span>
                                           </div>
                                              <ul class="cu-name" ng-style="countrybox">
                                                  <li ng-repeat="i in country" ng-click="numCountryselect(i,$event)">
                                                  <span><img src="../files/img/flag/icon/{{i.country_code}}.png" width="25"></span>
                                                    <!-- <span id="flagstrap-icon" class="flagstrap-icon-{{i.iso}}"></span> -->
                                                    <span>(+{{i.phonecode}})<span id="name-cu">{{i.name_en}}</span></span>
                                                  </li>
                                              </ul>
                  
                
                                               
                                                        <input type="text" class="form-control " name="selectcountryValue" id="labelcun" name="phonecode" ng-value="selectcountryValue"  disabled  size="15" placeholder="Code country" ng-model="selectcountryValue">
                                                           
                                                 
                                                        <input type="text" class="form-control" ng-model="phone" name="phone" ng-change="phoneuser(phone)" id="InputPassPhone" placeholder="Phone" size="53" ng-value="phone">
                                       
                                    </div>
                                    
                                    <div class="form-group form-inline">
                                        <label class="label-tour">Email<span> :</span></label>
                                        <input type="email"  class="form-control" placeholder="Ex.info@gmail.com" name="email" ng-change="emailuser(email)" ng-model="email" id="email" ng-value="email" required size="53">
                                        <!-- <label class="typeUser" >{{edit_du.email}}</label> -->
                                    </div>
                                    
                                </div><!-- end tour -->
                                    

                                    <div class=" form-group form-inline" style="width: 100%" >
                                        <div class="btn-save-cancel form-inline" id="btnsave">
                                            <button type="submit" class=" btn btn-success" id="bt-view" ng-click="saveAddbooking()">Save
                                                <!-- <span class="fa2 fa fa-floppy-o"></span> Save</button> -->

                                            <a href="">
                                                <button type="button" class="btn btn-default" onclick="Back()" id="bt-view">Cancel</button></a>
                                        </div>
                                    </div>
                                </form>
                               
                               
                
                        
                        </div>                            
                    </div>
                </div>
            </div>
                <style >

    #InputPassPhone{
        margin-left: 127px;
        margin-top: -8px;

    }
    #checkforagent{
         margin-left: 127px;
    }
    #datetimepicker11{
        width: 220px;
    }
    #icon-calen{
        /*padding-right: 5%; */
        margin-top: -34px;   
        position: absolute; 
        right: 0; z-index: 100; 
        font-size: 20px;
    }
    #on_date{
        width: 100%;
    }
    #select-country {
        text-align: center;
    border: 1px solid #cccccc;
    /*border-radius: 5px;*/
    display: inline-block;
    padding: 6px 65px;
     /*width: 65%; */
    /* margin-left: 5%; */
     margin-bottom: 20px; 
}
        .cu-name{
    display: none;
    width: 45.5%;
    background: #fff;
    z-index: 1;
    height: 190px;
    overflow-y: scroll;
    /* overflow: hidden; */
    padding-left: 0;
    border: 1px solid #ddd;
    position: absolute;
    margin-left: 127px;
    padding: 10px;

}
#labelcun{
    background-color: #fff;
    margin: 0;
    margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
}
.cu-name li{
   padding: 3px 35px; 
}
.cu-name li:hover{
   background: #e91e63;
    color: #fff !important;
}
#selectpackage{
    width: 741px;
}
.box-planceform {
    z-index: 100;
    display: none;
    background: #FFF;
    padding: 5px 5px;
    height: 140px;
    overflow-y: scroll;
    z-index: 100000;
    position: absolute;
    width: 96%;
    height: 140px;
    overflow-y: scroll;
    z-index: 100000;
    position: absolute;
    width: 96%;
}
.box-planceform ul li {
    padding: 5px 15px;
    cursor: pointer;
}
.box-planceform ul {
    padding-left: 0px;
}
.box-planceto {
    z-index: 10000;
    display: none;
    background: #FFF;
    padding: 5px 5px;
    /* padding-left: 0px; */
    height: 140px;
    overflow-y: scroll;
    z-index: 100000;
    position: absolute;
    width: 96%;
}
.box-planceto ul li {
    padding: 5px 15px;
    cursor: pointer;
}
.box-planceto ul {
    padding-left: 0px;
}
#amphur{
    color: #FF5722;
}
.box-planceform ul li:hover{
    background: #ffeb3b;
}
.box-planceto ul li:hover{
    background: #ffeb3b;
}
@media screen and (max-width: 767px){

#InputPassPhone {
    margin-left: 0;
}
.cu-name{
     margin-left: 0;
}
label.label-editUser {
    text-align: left;
}
#select-country{
    margin-bottom: 12px;
}
#icon-calen{
    padding-right: 9%; 
}
#datetimepicker11{
        width: 100%;
}
#checkforagent{
         margin-left: 0;
}
#selectpackage{
    width: 100%;
}

}

    </style>




            <style>
                .checkbox-popular{
                    margin-left: 185px;
                }
                .radio-type{
                        margin-top: 60px;
                        margin-left: 118px;
                }
                #btnsave{
                        margin-left: 127px;
                }
                @-webkit-keyframes zoomOut {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  100% {
    opacity: 0;
  }
}
@keyframes zoomOut {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  100% {
    opacity: 0;
  }
}
.zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut;
}

.animated {
  -webkit-animation-duration: 5s;
  animation-duration: 5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.loading {
  position: fixed;
  top: 0;
  width: 100%;
  height: 100%;
  background: white;
  z-index: 1032;
  opacity: 1;
  transition: opacity 0.5s cubic-bezier(0.7, 0, 0.3, 1);
}
.loading.hide {
  display: none;
}
.loading .loading-container {
  z-index: 1033;
  display: block;
  position: relative;
  text-align: center;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.loading .loading-container .loader {
  width: 40px;
}
.loading .loading-container p {
  font-size: 30px;
  margin-bottom: 30px;
}
#cktour{
    margin-left: 129px;
}
.box-list-cars{
    display: none;
    margin-left: 130px;
    margin-top: 10px;
}
#radioin{
 margin-left: 120px;
}
#label-addbooking{
	margin-bottom: 0;
	width: 150px;

}

               @media screen and (max-width: 767px){


                .checkbox-popular{
                     margin-left: 0;
                }
                .radio-type{
                     margin-left: 0;
                }
                label.label-tour{
                    text-align: left;
                }
                 #btnsave{
                        margin-left: 0;
                }
                .radio-type{
                        margin-top: 60px;
                        margin-left: 0;
                }
                #numperson{
                    margin-bottom: 30px;
                }
                #cktour{
    			margin-left: 0;
		}
		#radioin{
 			margin-left: 0;
			margin-bottom: 20px;
		}
		#label-addbooking{
			margin-bottom: 0;
			width: 100%;

		}
               }
            </style>
             <div class="modal fade" id="logout">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" >Logout</h4>
                            </div>
                            <div class="modal-body">
                                <div>Do you really want to log out of the backend system?</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="logout()">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Company
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        ©
                     <!--  <script async="" src="/analytics.js.ดาวน์โหลด"></script> -->
                      <script>
                            document.write(new Date().getFullYear())
                        </script>2017
                        <a href="">Dana Tours & Travel. All Rights Reserved.</a>
                    </p>
                </div>
            </footer>
      </div>
    </div>
    <!-- <div class="fixed-plugin">
        
    </div> -->

<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/material.min.js" type="text/javascript"></script>
<script src="../js/jquery/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../js/moment.min.js"></script>
<!--  Charts Plugin -->
<!-- <script src="js/chartist.min.js"></script> -->
<!--  Plugin for the Wizard -->
<script src="../files/js-/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<!-- <script src="files/js-/bootstrap-notify.js"></script> -->
<!--   Sharrre Library    -->
<script src="../js/jquery/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../files/js-/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="../files/js-/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="../files/js-/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="files/js-/js"></script> -->
<!-- Select Plugin -->
<script src="../files/js-/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../files/js-/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="../files/js-/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../files/js-/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../files/js-/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../files/js-/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../js/jquery/demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="../js/angular/angular-cookies.min.js"></script>

<!-- <script src="../files/js-/main.js?v=<?=time()?>"></script> -->
<!-- <script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script> -->


<div class="jvectormap-tip"></div>
</body>
<script>
$(document).ready(function(){
     $('#datetimepicker1').datetimepicker({
               format: 'DD/MM/YYYY'
              
                // daysOfWeekDisabled: [0, 6]
            });
     $('#datetimepicker2').datetimepicker({
               format: 'DD/MM/YYYY'
              
                // daysOfWeekDisabled: [0, 6]
            });
 });
</script>

</script>
<script>
    // function checkURL (abc) {
    //   var string = abc.value;
    //     if (!~string.indexOf("www")){
    //       string = "http://" + "www." + string;
    //     }
    //     else if (~string.indexOf("www")){
    //       string = "http://" + string;
    //     }
    //     abc.value = string;
    //     return abc
    // }
    
    var app = angular.module('myApp',['ngCookies']);
    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){
        //loadpage();
        loadpage();
         $scope.dataphonecode;
        $scope.imgcoutry = '';
        $scope.btnsave = false;
        
         $scope.dataAgent;
          
            $scope.checktour = true; 
        $scope.searchtransport = null;
        $scope.transferplace = [];
         $scope.checktype = 'Tour';
         $scope.dataselectransfer = [];
          $scope.total_pricetransfer = 0;
          $scope.adultshow = 0;
          $scope.childshow = 0;
          $scope.person = 0;
          $scope.costpackage = 0;
         //$scope.checktype;
        
        
         $scope.placeholderto = 'Type airport,hotel name';
                $scope.placeholder = 'Type airport,hotel name';

       
        $scope.url = 'http://localhost/dana/';
    function loadpage(){
         $scope.numperson = [];
        $scope.numperson2 = [];
        $scope.total_price = 0;
        $scope.sale_price_adult =0;
        $scope.sale_price_child = 0;
        $scope.net_price_adult = 0;
        $scope.net_price_child = 0;
        $scope.total_price_child = 0;
        $scope.total_price_adult = 0;
        $scope.dataselectagent = [];
        $scope.child = 0;
        $scope.adult = 0;
         $scope.uname;
        $scope.optioncar = [ {value:1},{value:2},{value:3},{value:4},{value:5} ];
        $scope.num = [ '01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23'];
        $scope.num2 = [ '01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20',
                    '21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40',
                    '41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59'];
        $scope.Countryfont = "      Please select country";
      if($cookies.get('login'))
      {
        $scope.loginstatus = false;
        $scope.token = $cookies.get('login');

        $http({
                method:'post',
                url: "../php/getUserbyid.php",
                data: $.param({id: $cookies.get('login')}),
                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                    $scope.uname = res[0].firstname;
                    //console.log($scope.uname)
                    $scope.isSuperAdmin = (res[0].role == 1) ? true : false;
                    $scope.isAdmin = (res[0].role == 2)  ? true : false;
                    $scope.isUsernomal = (res[0].role == 3)  ? true : false;
                    
                    if(res[0].role==1)
                        $scope.role = 1;
                    else if(res[0].role==2)
                        $scope.role = 2;
                    else 
                        $scope.role = 3;
                  
                   
                    if(res[0].email != undefined){
                       // $scope.name = (res[0].email).split('@');
                        //$scope.Username = $scope.name[0];
                        //console.log($scope.Username)
                    }
                    $scope.Menu = res[1];
                    //console.log($scope.Menu)
            });
            $http({
                    method : 'POST',
                    url : "../php/getCountry.php",
                    //data: $.param({sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        $scope.country = res;
                        //console.log(res)
            });
            $http({
                method : 'POST',
                url : "../php/getTours.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 //console.log(res)
                 $scope.dataTour = res;
                 
                       
            });
                $http({
                    method: 'post',
                    url: "../php/getAgent.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    
                    $scope.dataAgent = res;
                    //console.log($scope.dataAgent)
                    
                    
             });
             $http({
                    method: 'post',
                    url: "../php/getProvince.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    //console.log(res)
                    $scope.dataprovince = res;
                    ////console.log($scope.dataUser)
                    
                    
             });
                $http({
                method : 'POST',
                url : "../php/getTransports.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 //console.log(res)
                 $scope.datatransport = res;
                 //$scope.allTour = res;
                       
            });
             // $http({
             //        method: 'post',
             //        url: "../php/getTransferplace.php",                    
             //        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
             //    }).success(function (res) {
             //        //console.log(res)
             //        $scope.dataplace = res;
             //        ////console.log($scope.dataUser)
                    
                    
             // });  
                    var x = 100;
            for (var i = 1; i <= x; i++) {
              $scope.numperson.push(i);
              
            }
            //console.log($scope.numperson);
            var x2 = 100;
            for (var i = 1; i <= x2; i++) {
              $scope.numperson2.push(i);
              
            }
            //console.log($scope.numperson2);
          }
          else
          {
            $scope.loginstatus = true;
            location.href="../login.php";
          }
    }
     $scope.profile = function(){
        location.href="profile";

    }
    $scope.saleprice = function(x){
        console.log(x)
        console.log($scope.sale_price_adult)
          $scope.total_price_adult = x*$scope.adult;
            $scope.total_price = $scope.total_price_adult + $scope.total_price_child;

    }
     $scope.salepricechild = function(x){
        console.log(x)
        $scope.total_price_child = x*$scope.child;
            $scope.total_price = $scope.total_price_adult + $scope.total_price_child;

    }
    $scope.listcar = 1;
    $scope.changevalue = function(item){            
            var pax;
            if (item == undefined) {
                pax = 1;
            }
            else{
                pax = item;
            }
            
            //console.log(pax);
            $scope.listcar = pax;
            if ($scope.listcar > 1) {
                $scope.list ={'display':'block'};
            }
            else{
               $scope.list ={'display':'none'}; 
            }
            $scope.person = $scope.listcar * $scope.capa ;
            //console.log($scope.person)
            $scope.total_pricetransfer = $scope.cost*pax;
            //console.log($scope.sumprice_adult_child)
            //console.log($scope.cost)
        }
    $scope.logtype=function(x){
        $scope.checktype = x;
        //console.log($scope.checktype)
        if ($scope.checktype == 'Tour') {
            $scope.checktour = true;             
            $scope.checktransfer = false;
        }
         if ($scope.checktype == 'Transfer') {
            $scope.checktour = false;             
            $scope.checktransfer = true;
         }
        
       
       
    }
    $scope.pickupplacetour = function(x){
        
        $scope.tourpplace =  x;
        //console.log( $scope.tourpplace)
       

    }
    $scope.pickupplacetotour = function(x){
        
        $scope.tourpplaceto =  x;
        //console.log( $scope.tourpplaceto)
       

    }
    $scope.changeprovince = function(select){
        //console.log(select)
        $scope.province = select.name;
        $scope.province_id = select.id;
        angular.forEach($scope.datatransport, function(data){
            if(select.id == data.pro_id)
            {   
                $scope.dataselectransfer.push(data)
                 
            }
        });

    }
 

    $scope.Country = function(){      
        $scope.countrybox = { 'display':'block'};
      
    }
    $scope.numCountryselect = function(i ,$event){
        $scope.countrybox = { 'display':'none'};
      //$scope.imgcoutry = i.
      //if ($scope.flagcheck ==1) {
         $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_en;
      //}
      // if ($scope.flagcheck ==2) {
      //    $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_th;
      // }
      // if ($scope.flagcheck ==3) {
      //    $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_cn;
      // }
      $scope.selectcountryValue = '+'+i.phonecode;
      $scope.tcountryValue = '+'+i.phonecode;
      $scope.imgcoutry = i.country_code;
     
      $scope.phonesend = $scope.selectcountryValue;
      $scope.dataphonecodeedit = i.phonecode;
     
      //console.log($scope.selectcountryValue)
    }
    $scope.changenum = function(list){
            
                $scope.time_h = list;
            //console.log($scope.time_h)

            
    }
    $scope.changenum2 = function(list2){
            $scope.time_m = list2;
            //console.log($scope.time_m)

    }
    $scope.changenum3 = function(list3){
            
                $scope.time_h2 = list3;
            //console.log($scope.time_h)

            
    }
    $scope.changenum4 = function(list4){
            $scope.time_m2 = list4;
            //console.log($scope.time_m)

    }
    $scope.changenumperson = function(person){
            if ($scope.checktype == 'Tour') {
            $scope.adult = person;
            $scope.total_price_adult = $scope.sale_price_adult*person;
            $scope.total_price = $scope.total_price_adult + $scope.total_price_child;
            //console.log($scope.adult)
        }
        if ($scope.checktype == 'Transfer') {
            if ( $scope.child+$scope.adult > $scope.person) {
                 $scope.listcar++;
                 $scope.total_pricetransfer = $scope.cost*$scope.listcar;
                 $scope.person = $scope.capa*$scope.listcar;
            }
        }
    }
    $scope.changenumperson2 = function(person2){
         if ($scope.checktype == 'Tour') {
            $scope.child = person2;
            $scope.total_price_child = $scope.sale_price_child*person2;
            $scope.total_price = $scope.total_price_adult + $scope.total_price_child;
            //console.log($scope.child)
        }
        if ($scope.checktype == 'Transfer') {
            if ( $scope.child+$scope.adult > $scope.person) {
                 $scope.listcar++;
                 $scope.total_pricetransfer = $scope.cost*$scope.listcar;
                 $scope.person = $scope.capa*$scope.listcar;
            }
        }
           
    }
    $scope.changeagent = function(agent){
            $scope.agentid = agent.id;
            $scope.nameagent = agent.fname; 
            //console.log($scope.agentid)
            angular.forEach($scope.dataAgent, function(data){
            if(agent.id == data.id)
            {   
                $scope.dataselectagent.push(data)
                 
            }
        });
            //console.log($scope.dataselectagent)
    }
    $scope.changepackage = function(package){

        if ($scope.checktype == 'Tour') {
            $scope.costpackage = package.cost;
            $scope.packagename = package.name;
            $scope.packageid = package.id;
            //console.log($scope.packageid)
            $scope.sale_price_adult = package.sale_price_adult;
            $scope.sale_price_child = package.sale_price_child;
            $scope.net_price_adult = package.net_price_adult;
            $scope.net_price_child = package.net_price_child;
            $scope.company_id = package.company_id;
            $scope.company_name = package.company_name;
            $scope.pro_class = package.class;

        }
        if ($scope.checktype == 'Transfer') {
            $scope.costpackage = package.price;
            $scope.packagename = package.name;
            $scope.packageid = package.id;
            $scope.capa = package.person;
            //console.log($scope.packageid)
            $scope.total_pricetransfer = package.price;
            $scope.list ={'display':'block'};
            $scope.person =  $scope.capa;
            $scope.cost = package.price;
            $scope.company_id = package.company_id;
            $scope.company_name = package.company_name;
            $scope.area = package.flight;
        }
            

    }
    
    
    $scope.adultSelect = function(person){person
        if ($scope.checktype == 'Tour') {
            //console.log(person)
            $scope.adultshow = person;
            $scope.sumadult = (person * $scope.sumprice_adult);
            $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;
        }
        if ($scope.checktype == 'Transfer') {

            if ($scope.adultshow+$scope.childshow > $scope.person) {

            }
        }
            
    }
    $scope.childSelect = function(person2){
         if ($scope.checktype == 'Tour') {
            //console.log(person2)

            $scope.childshow = person2;
            $scope.sumchild = (person2 * $scope.sumprice_child);
             $scope.sumprice_adult_child = $scope.sumadult + $scope.sumchild;
         }
         if ($scope.checktype == 'Transfer') {

        }
           
    }
    $scope.Acceptance =function(even, state){

    if (state == true) {
      $scope.state = true;
      //console.log( $scope.dataselectagent)
      $scope.name = $scope.dataselectagent[0].fname+' '+$scope.dataselectagent[0].lname;
      $scope.selectcountryValue = '+'+$scope.dataselectagent[0].phonecode;
      $scope.phonecode = $scope.dataselectagent[0].phonecode;
      //console.log($scope.phonecode)
      $scope.phone = $scope.dataselectagent[0].phone;
      $scope.email = $scope.dataselectagent[0].email;
      $scope.imgcoutry = $scope.country[0].country_code;
       $scope.Countryfont = ' ' + '(' + '+' + $scope.dataselectagent[0].phonecode + ')' + $scope.country[0].name_en;
      //alert("==if==")
     //angular.element(document.querySelector(".box-book-pay")).css('display','block');
      ////console.log("work!!!!!")
    }
    else{
      $scope.state = false;
     $scope.name ='';
      $scope.selectcountryValue = '';
      $scope.phone = '';
      $scope.email = '';
      $scope.imgcoutry = '';
       $scope.Countryfont = 'Please select country';
    }

  }
    $scope.roomnumber = function(x){
            $scope.roomtour = x;
            //console.log($scope.roomtour)
    }
    $scope.changefkight = function(x){
            $scope.flightname = x;
            //console.log($scope.flightname)
    }
    $scope.emailuser = function(x){
            $scope.email = x;
            //console.log($scope.email)
    }
    $scope.phoneuser = function(x){
            $scope.phone = x;
            //console.log($scope.phone)
    }
    $scope.nameuser = function(x){
            $scope.name = x;
            console.log($scope.name)
    }
    $scope.saveAddbooking =function(){
       
            if ($scope.time_h == undefined) {
                $scope.time_h = '00';
            }
            if ($scope.time_m == undefined) {
                $scope.time_m = '00';
            }
            if ($scope.time_h2 == undefined) {
                $scope.time_h2 = '00';
            }
            if ($scope.time_m2 == undefined) {
                $scope.time_m2 = '00';
            }
            
            if ($scope.child == undefined) {
                $scope.child = 0;
            }
            if ($scope.adult == undefined) {
                $scope.adult = 0;
            }
            if($scope.phonecode == '' || $scope.phonecode == undefined){
                $scope.phonecode = $scope.tcountryValue;
            }
             if ($scope.checktype == 'Tour') {
           
           
        }
        if ($scope.checktype == 'Transfer') {
           
            
            $scope.total_price = $scope.total_pricetransfer;
        }
            
            
            ////console.log('aaa'+ $('#datetimepicker11').val())
            $scope.ontime = $scope.time_h+':'+$scope.time_m+ '-' + $scope.time_h2+':'+$scope.time_m2;
            $scope.ondates = $('#on_date').val();
            //console.log($scope.checktype)
            //console.log($scope.packageid)
            //console.log($scope.time_h+':'+$scope.time_m)
            //console.log($scope.ondates)
            //console.log($scope.adult)
            //console.log($scope.child)
            ////console.log($scope.price)
            //console.log($scope.agentid)
            //console.log($scope.tourpplace)
            //console.log($scope.tourpplaceto)
            //console.log($scope.name)
            //console.log($scope.phone)
            //console.log($scope.phonecode)
            //console.log($scope.email)
            //console.log($cookies.get('login'));
            //console.log($scope.uname)
            //console.log( $scope.nameagent)
            //console.log($scope.packagename )
            //console.log($scope.costpackage )
            $scope.sumtotal = parseInt($scope.adult)+ parseInt($scope.child);
            //console.log($scope.sumtotal)
            //console.log($scope.sale_price_adult)
            //console.log($scope.sale_price_child)
            //console.log($scope.total_price)
            //console.log($scope.roomtour)
            ////console.log($scope.roomtour)
            //console.log($scope.province_id)


            //console.log($scope.province)

            
            
             $http({
                    method : 'POST',
                    url : "../php/addBooking.php",
                    data: $.param({'program': $scope.packageid
                                ,'ondate': $scope.ondates
                                ,'ontime': $scope.ontime
                                ,'agent': $scope.agentid
                                ,'adult': $scope.adult
                                ,'child': $scope.child 
                                ,'place': $scope.tourpplace
                                ,'toplace': $scope.tourpplaceto
                                ,'name': $scope.name
                                ,'phone':$scope.phone
                                ,'email':$scope.email
                                ,'roomnumber':$scope.roomtour
                                ,'phonecode':$scope.phonecode
                                ,'postid':$cookies.get('login')
                                ,'postname':$scope.uname
                                ,'agentname':$scope.nameagent
                                ,'package_name':$scope.packagename                           
                                ,'total':$scope.sumtotal
                                ,'adult_price':$scope.sale_price_adult
                                ,'child_price':$scope.sale_price_child
                                ,'total_price':$scope.total_price
                                ,'type': $scope.checktype
                                ,'province': $scope.province
                                ,'province_id': $scope.province_id
                                ,'transfer_price': $scope.cost
                                ,'company_id': $scope.company_id
                                ,'company_name': $scope.company_name
                                ,'pro_class': $scope.pro_class
                                ,'area': $scope.area
                                ,'net_price_adult': $scope.net_price_adult
                                ,'net_price_child': $scope.net_price_child
                                ,'flight': $scope.flightname
                                

            


                                

                                
                                }), 

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                     //console.log(res)
                     $window.location.href="../report/new-booking.php"
                   
                           
               });
        
        
       
        
    
    }
    $scope.logout = function(){
            $cookies.remove("login");
           
            $window.location.href = '../login.php';
    }
        
        
});
    </script>
</html>