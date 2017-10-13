var app = angular.module('myApp', ['ngCookies','ui.bootstrap']);
  app.controller('view', function($scope, $document,$location,$http,$window,$cookies){
   // alert("aaaa");
     // $document.scrollTopAnimated(10 ,5000).then(function() {
     //    console && console.log('You just scrolled to the top!');
     //  });
      $scope.err = $location.search().err;
            $scope.data = JSON.parse($location.search().data);
            console.log($scope.data)
            $scope.datagallery = '';

            $http({
                method : 'POST',
                url : "php/getTourbyid.php",
                data: $.param({'id': $scope.data}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 $scope.tours = res[0];
                 if (res[0].show_recommend == 1) {
                        $scope.echekrecommends = true;
                 }
                  if (res[0].show_popular == 1) {
                        $scope.echekpopulars = true;
                 }
                 
                 $scope.program = res[0].program.split('\n');
                 $scope.conditions = res[0].conditions.split('\n');
                
                 
                  for (var i = 0; i < $scope.program.length; i++) {
                    if ($scope.program[i] != "") {
                       
                      $('#repeatprogram').append('<p class="time">'+$scope.program[i]+'</p>')
                    }
                    else{
                        $('#repeatprogram').append('\n')
                      
                      
                    }
                 }
                 for (var i = 0; i < $scope.conditions.length; i++) {
                    if ($scope.conditions[i] != "") {
                       
                      $('#repeatconditions').append('<p class="time">'+$scope.conditions[i]+'</p>')
                    }
                    else{
                        $('#repeatconditions').append('\n')
                      
                      
                    }
                 }
                       //console.log($scope.propush)         
                       //$('#repeatprogram').html($scope.propush)
                  // angular.forEach( $scope.repeatprogram, function (y) {
                  //   console.log(y)
                  //     if (y == '') {
                        
                  //     }
                  //     else{
                         
                  //     }
                      
                  // });
                 //console.log($scope.tours)
                 $scope.program = res[0].program;
                 //console.log($scope.program)
                  $scope.setIndex = function(index){
                            $scope.tourData = res[index] ;
                        }
                       
            });



  //           $scope.myInterval = 1000;
  // $scope.noWrapSlides = false;
  // $scope.active = 0;
  // var slides = $scope.slides = [];
  // var currIndex = 0;
  //var slides = $scope.slides = [];
 // var currIndex = 0;
      $http({
                            method : 'POST',
                            url : "php/getGallery.php",
                            data: $.param({"id": $scope.data}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
                                $scope.datagallery = res;
                                
                            });
                            console.log($scope.datagallery)
    $scope.toTheTop = function() {
      $document.scrollTopAnimated(0, 1000).then(function() {
        console && console.log('You just scrolled to the top!');
      });
    }
    //var section3 = angular.element(document.getElementById('section-3'));
    $scope.toSection3 = function() {
      $document.scrollToElementAnimated(section3);
    }

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