var app = angular.module('myApp', ['ngCookies']);
  app.controller('main', function($scope, $document,$scope,$location,$http,$window,$cookies){
    //alert("aaaa");
    $scope.tourpopular = [];
    $scope.dataTour = [];
    $scope.dataTransfer = [];
    $scope.dataHotel = [];
    $scope.dataHotelcheck = 0;
    console.log("aaaaaa")
    $http({
                method : 'POST',
                url : "php/getPackage.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    console.log(res)
                    $scope.tours = res;
                    angular.forEach(res, function (d,i) {
                    if (d.show_web == 1 ) {
                        $scope.dataTour.push(d);
                 }
                

            });   
                    //$scope.dataTour = res;
                    $scope.allTour = res;
                 angular.forEach(res, function (z) {
                    if (z.show_top == 1) {
                        $scope.tourpopular.push(z);
                    }
                

            });   
                 console.log($scope.dataTour)
                 console.log(res)
                 console.log(res[0].username)
                 
                       
                       
            });
                $http({
                method : 'POST',
                url : "php/getTransfer.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    console.log(res)
                    $scope.transfer = res;
                     angular.forEach(res, function (d,i) {
                    if (d.show_web == 1 ) {
                        $scope.dataTransfer.push(d);
                 }
                

            });   
            //         angular.forEach(res, function (d,i) {
            //         if (d.show_home == 1 && i <=10) {
            //             $scope.dataTour.push(d);
            //         }
                

            // }); 
                });
                $http({
                method : 'POST',
                url : "php/getHotel.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    console.log(res)
                    $scope.hotel = res;
                     angular.forEach(res, function (d,i) {
                    if (d.show_web == 1 ) {
                        $scope.dataHotel.push(d);
                 }
                

            });   
            //         angular.forEach(res, function (d,i) {
            //         if (d.show_home == 1 && i <=10) {
            //             $scope.dataTour.push(d);
            //         }
                

            // }); 
                });
    $scope.getTourforareaall = function(){
        $scope.dataTour = [];
        angular.forEach($scope.tours, function (z,i) {
            if (z.show_web == 1 ) {
                        $scope.dataTour.push(z);
                 }
               
            });
    }
    $scope.getTransferforareaall = function(){
        $scope.dataTransfer = [];
        angular.forEach($scope.transfer, function (z,i) {

                 if (z.show_web == 1 ) {
                        $scope.dataTransfer.push(z);
                 }
                //$scope.dataTransfer.push(y);
            
            });
    }
    $scope.getHotelforareaall = function(){
        $scope.dataHotel = []
        $scope.dataHotelcheck = 0;
        angular.forEach($scope.hotel, function (z,i) {
                if (i<=7) {
                    $scope.dataHotel.push(z);
                }
            });
    }
    $scope.viewpackageforid = function(x){
        //alert("aaaa")
         $window.location.href = 'view.php#?data='+x;
    }
    $scope.contact = function(){
        angular.element(document.querySelector('.open')).addClass('uxh-open')
        //alert("aaaa")
         //$window.location.href = 'view.php#?data='+x;
    }
    $scope.getDetailtransfer = function(x){
        
        console.log(x)
        //console.log($scope.allTour)
         $window.location.href = 'view-transfer.php#?data='+x;
            
            
                            
                                
                      
        //$window.location.href = 'new.php';
    }
    $scope.getDetailhotel = function(x){
        
        console.log(x)
        //console.log($scope.allTour)
         $window.location.href = 'view-hotel.php#?data='+x;
            
            
                            
                                
                      
        //$window.location.href = 'new.php';
    }
    $scope.getDetailtour = function(x){
        
        console.log(x)
        //console.log($scope.allTour)
         $window.location.href = 'view.php#?data='+x;
            
            
                            
                                
                      
        //$window.location.href = 'new.php';
    }
    $scope.getTourforarea = function(x){
        $scope.dataTour = [];
        console.log(x)
        //console.log($scope.allTour)
         angular.forEach($scope.tours, function (y,key) {
        console.log(key)
            if (y.city == x) {
                if (y.show_web == 1 ) {
                        $scope.dataTour.push(y);
                 }
                // $scope.dataTour.push(y);
            }
            
            
                            
                                
                        });
        //$window.location.href = 'new.php';
    }
    $scope.getTransferforarea = function(x){
        $scope.dataTransfer = [];
        console.log(x)
        //console.log($scope.allTour)
         angular.forEach($scope.transfer, function (y,key) {
        console.log(key)
            if (y.province == x) {
                 if (y.show_web == 1 ) {
                        $scope.dataTransfer.push(y);
                 }
                //$scope.dataTransfer.push(y);
            }
            
            
                            
                                
                        });
        //$window.location.href = 'new.php';
    }
    $scope.getHotelforarea = function(x){
        $scope.dataHotel = [];
         angular.forEach($scope.hotel, function (y,key) {
        console.log(key)
            if (y.province == x) {
                 if (y.show_web == 1 ) {
                        $scope.dataHotel.push(y);
                 }
                //$scope.dataTransfer.push(y);
            }
            
            
                            
                                
                        });
        // $scope.dataHotel = 1;
        console.log(x)
        if (x == 'Phuket') {
           $scope.dataHotelcheck = 1; 
        }
        else if(x == 'Bangkok'){
           $scope.dataHotelcheck = 2; 

        }
        else{
            $scope.dataHotelcheck = 0; 
        }
        //console.log($scope.allTour)
        //  angular.forEach($scope.hotel, function (y,key) {
        // console.log(key)
        //     if (y.province == x && key <= 8) {
        //         $scope.dataHotel.push(y);
        //     }
            
            
                            
                                
        //                 });
        //$window.location.href = 'new.php';
    }
    $scope.sendmailcontact = function(){
        // console.log($scope.subject)
        // console.log($scope.name)
        // console.log($scope.email)
        // console.log($scope.phone)
        // console.log($scope.message)

        $http({
                method : 'POST',
                url : "../../sendmail/sendmail.php",
                data: $.param({'subject': $scope.subject,'name':$scope.name,'email':$scope.email,'phone':$scope.phone,'message':$scope.message}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    console.log(res)
                    if (res == 1) {
                      alert("Your message was sent, we'll contact you in shortly.");
                    }
                    else{
                      alert("Can't sent your message, please try again.");
                    }
                    
            });   
    }
     // $document.scrollTopAnimated(10 ,5000).then(function() {
     //    console && console.log('You just scrolled to the top!');
     //  });
    // $scope.toTheTop = function() {
    //   $document.scrollTopAnimated(0, 1000).then(function() {
    //     console && console.log('You just scrolled to the top!');
    //   });
    // }
    // var section3 = angular.element(document.getElementById('section-3'));
    // $scope.toSection3 = function() {
    //   $document.scrollToElementAnimated(section3);
    // }
    // angular.element('.navbar').bind("scroll", function(e) {
    //         var popupbookingdetail = e.target.scrollTop;//
    //         console.log(e.target.scrollTop)
    //         //alert("asss")
    //         if (popupbookingdetail > 5) {
    //          //

    //         }
    //         else if(popupbookingdetail < 5){
    //            //angular.element(document.querySelector('#headerdetail')).css('position','relative'); 
    //         }

    //     });
    // angular.element($window).bind("scroll", function() {
    //          if (this.pageYOffset > 100) {
    //              $('.navbar').addClass('scrolled');
    //              angular.element(document.querySelector('.navbar')).css('position','fixed');
    //              angular.element(document.querySelector('.navbar')).css('background','#000');

    //              console.log('Scrolled below header.');
    //          } else if(this.pageYOffset < 100) {
    //              angular.element(document.querySelector('.navbar')).css('position','relative');
    //              angular.element(document.querySelector('.navbar')).css('background','rgba(0, 0, 0, 0)');
                 

    //              $('.navbar').addClass('scrolled');
                 
    //           $('.navbar').removeClass('scrolled');
    //              //element.removeClass('min');
    //              console.log('Header is in view.');
            
    //        }
    //     });
  });