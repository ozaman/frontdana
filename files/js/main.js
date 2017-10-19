var app = angular.module('myApp', ['ngCookies']);
  app.controller('main', function($scope, $document,$scope,$location,$http,$window,$cookies){
    //alert("aaaa");
    $scope.tourpopular = [];
    $scope.dataTour = [];
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
                    if (d.show_home == 1 && i <=10) {
                        $scope.dataTour.push(d);
                    }
                

            });   
                    //$scope.dataTour = res;
                    $scope.allTour = res;
                 angular.forEach(res, function (z) {
                    if (z.show_popular == 1) {
                        $scope.tourpopular.push(z);
                    }
                

            });   
                 console.log(res)
                 console.log(res[0].username)
                 
                       
                       
            });
    $scope.getTourforareaall = function(){
        $scope.dataTour = [];
        angular.forEach($scope.tours, function (z,i) {
                if (i<=7) {
                    $scope.dataTour.push(z);
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
    $scope.getTourforarea = function(x){
        $scope.dataTour = [];
        console.log(x)
        //console.log($scope.allTour)
         angular.forEach($scope.tours, function (y,key) {
        console.log(key)
            if (y.city == x && key <= 8) {
                $scope.dataTour.push(y);
            }
            
                            // if (y.read_msg == 0 && y.comment_from == 'driver') {                                       
                            //     angular.element(document.querySelector('#menudriver'+y.id)).addClass('menudriver')
                            //     updatenoti();
                                            
                            // }
                            // if (y.read_msg == 0 && y.comment_from == 'callcenter') {
                            //     console.log(y.id)
                            //     angular.element(document.querySelector('#menudriver'+y.id)).addClass('menudriver')
                            //     updatenoti();
                            // }
                                
                        });
        //$window.location.href = 'new.php';
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