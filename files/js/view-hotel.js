var app = angular.module('myApp', ['ngCookies','ui.bootstrap']);
  app.controller('view', function($scope, $document,$location,$http,$window,$cookies){
   // alert("aaaa");
     // $document.scrollTopAnimated(10 ,5000).then(function() {
     //    console && console.log('You just scrolled to the top!');
     //  });
      $scope.myInterval = 1000;
  $scope.noWrapSlides = true;
  $scope.active = 0;
  $scope.slides;
  // var slides = $scope.slides = [];
  // var currIndex = 0;
     // $scope.myInterval = 3000;
  $scope.slides1 = [
    {
      image: 'data/files/hotel/ho1/1.jpg'
    },
    {
      image: 'data/files/hotel/ho1/2.jpg'
    },
    {
      image: 'data/files/hotel/ho1/3.jpg'
    },
    {
      image: 'data/files/hotel/ho1/4.jpg'
    },
    {
      image: 'data/files/hotel/ho1/5.jpg'
    }
  ];
  $scope.slides2 = [
    {
      image: 'data/files/hotel/ho2/1.jpg'
    },
    {
      image: 'data/files/hotel/ho2/2.jpg'
    },
    {
      image: 'data/files/hotel/ho2/3.jpg'
    },
    {
      image: 'data/files/hotel/ho2/4.jpg'
    },
    {
      image: 'data/files/hotel/ho2/5.jpg'
    }
  ];
  $scope.slides3 = [
    {
      image: 'data/files/hotel/ho3/1.jpg'
    },
    {
      image: 'data/files/hotel/ho3/2.jpg'
    },
    {
      image: 'data/files/hotel/ho3/3.jpg'
    },
    {
      image: 'data/files/hotel/ho3/4.jpg'
    },
    {
      image: 'data/files/hotel/ho3/5.jpg'
    }
    ,{
      image: 'data/files/hotel/ho3/6.jpg'
    }
  ];
  $scope.slides4 = [
    {
      image: 'data/files/hotel/ho4/1.jpg'
    },
    {
      image: 'data/files/hotel/ho4/2.jpg'
    },
    {
      image: 'data/files/hotel/ho4/3.jpg'
    },
    {
      image: 'data/files/hotel/ho4/4.jpg'
    },
    {
      image: 'data/files/hotel/ho4/5.jpg'
    },
    {
      image: 'data/files/hotel/ho4/6.jpg'
    },
    {
      image: 'data/files/hotel/ho4/7.jpg'
    }
  ];
  $scope.slides5 = [
    {
      image: 'data/files/hotel/ho5/1.jpg'
    },
    {
      image: 'data/files/hotel/ho5/2.jpg'
    },
    {
      image: 'data/files/hotel/ho5/3.jpg'
    },
    {
      image: 'data/files/hotel/ho5/4.jpg'
    },
    {
      image: 'data/files/hotel/ho5/5.jpg'
    }
  ];
  $scope.slides7 = [
    {
      image: 'data/files/hotel/ho7/1.jpg'
    },
    {
      image: 'data/files/hotel/ho7/2.jpg'
    },
    {
      image: 'data/files/hotel/ho7/3.jpg'
    },
    {
      image: 'data/files/hotel/ho7/4.jpg'
    },
    {
      image: 'data/files/hotel/ho7/5.jpg'
    },
    {
      image: 'data/files/hotel/ho7/6.jpg'
    }
  ];
  $scope.slides8 = [
    {
      image: 'data/files/hotel/ho8/1.jpg'
    },
    {
      image: 'data/files/hotel/ho8/2.jpg'
    },
    {
      image: 'data/files/hotel/ho8/3.jpg'
    },
    {
      image: 'data/files/hotel/ho8/4.jpg'
    },
    {
      image: 'data/files/hotel/ho8/5.jpg'
    },
    {
      image: 'data/files/hotel/ho8/6.jpg'
    },
    {
      image: 'data/files/hotel/ho8/7.jpg'
    },
    {
      image: 'data/files/hotel/ho8/8.jpg'
    },
    {
      image: 'data/files/hotel/ho8/9.jpg'
    },
    {
      image: 'data/files/hotel/ho8/10.jpg'
    }
  ];
  $scope.slides9 = [
    {
      image: 'data/files/hotel/ho9/1.jpg'
    },
    {
      image: 'data/files/hotel/ho9/2.jpg'
    },
    {
      image: 'data/files/hotel/ho9/3.jpg'
    },
    {
      image: 'data/files/hotel/ho9/4.jpg'
    },
    {
      image: 'data/files/hotel/ho9/5.jpg'
    },
    {
      image: 'data/files/hotel/ho9/6.jpg'
    },
    {
      image: 'data/files/hotel/ho9/7.jpg'
    },
    {
      image: 'data/files/hotel/ho9/8.jpg'
    },
    {
      image: 'data/files/hotel/ho9/9.jpg'
    },
    {
      image: 'data/files/hotel/ho9/10.jpg'
    },
    {
      image: 'data/files/hotel/ho9/11.jpg'
    },
    {
      image: 'data/files/hotel/ho9/12.jpg'
    },
    {
      image: 'data/files/hotel/ho9/13.jpg'
    },
    {
      image: 'data/files/hotel/ho9/14.jpg'
    }
  ];
  $scope.slides10 = [
    {
      image: 'data/files/hotel/ho10/1.jpg'
    },
    {
      image: 'data/files/hotel/ho10/2.jpg'
    },
    {
      image: 'data/files/hotel/ho10/3.jpg'
    },
    {
      image: 'data/files/hotel/ho10/4.jpg'
    },
    {
      image: 'data/files/hotel/ho10/5.jpg'
    },
    {
      image: 'data/files/hotel/ho10/6.jpg'
    },
    {
      image: 'data/files/hotel/ho10/7.jpg'
    }
  ];
  $scope.slides11 = [
    {
      image: 'data/files/hotel/ho11/1.jpg'
    },
    {
      image: 'data/files/hotel/ho11/2.jpg'
    },
    {
      image: 'data/files/hotel/ho11/3.jpg'
    },
    {
      image: 'data/files/hotel/ho11/4.jpg'
    },
    {
      image: 'data/files/hotel/ho11/5.jpg'
    },
    {
      image: 'data/files/hotel/ho11/6.jpg'
    },
    {
      image: 'data/files/hotel/ho11/7.jpg'
    },
    {
      image: 'data/files/hotel/ho11/8.jpg'
    },
    {
      image: 'data/files/hotel/ho11/9.jpg'
    },
    {
      image: 'data/files/hotel/ho11/10.jpg'
    },
    {
      image: 'data/files/hotel/ho11/11.jpg'
    },
    {
      image: 'data/files/hotel/ho11/12.jpg'
    },
    {
      image: 'data/files/hotel/ho11/13.jpg'
    },
    {
      image: 'data/files/hotel/ho11/14.jpg'
    },
    {
      image: 'data/files/hotel/ho11/15.jpg'
    }
  ];
  $scope.slides12 = [
    {
      image: 'data/files/hotel/ho12/1.jpg'
    },
    {
      image: 'data/files/hotel/ho12/2.jpg'
    },
    {
      image: 'data/files/hotel/ho12/3.jpg'
    },
    {
      image: 'data/files/hotel/ho12/4.jpg'
    },
    {
      image: 'data/files/hotel/ho12/5.jpg'
    },
    {
      image: 'data/files/hotel/ho12/6.jpg'
    },
    {
      image: 'data/files/hotel/ho12/7.jpg'
    }
  ];
  $scope.slides13 = [
    {
      image: 'data/files/hotel/ho13/1.jpg'
    },
    {
      image: 'data/files/hotel/ho13/2.jpg'
    },
    {
      image: 'data/files/hotel/ho13/3.jpg'
    },
    {
      image: 'data/files/hotel/ho13/4.jpg'
    },
    {
      image: 'data/files/hotel/ho13/5.jpg'
    },
    {
      image: 'data/files/hotel/ho13/6.jpg'
    },
    {
      image: 'data/files/hotel/ho13/7.jpg',
    },
    {
      image: 'data/files/hotel/ho13/8.jpg'
    },
    {
      image: 'data/files/hotel/ho13/9.jpg'
    }
  ];
  $scope.slides14 = [
    {
      image: 'data/files/hotel/ho14/1.jpg'
    },
    {
      image: 'data/files/hotel/ho14/2.jpg'
    },
    {
      image: 'data/files/hotel/ho14/3.jpg'
    },
    {
      image: 'data/files/hotel/ho14/4.jpg'
    }
  ];
  //var slides = $scope.slides;
  console.log($scope.slides)
      $scope.err = $location.search().err;
            $scope.data = JSON.parse($location.search().data);
            console.log($scope.data)
            if ($scope.data == 1) {
              $scope.slides = $scope.slides1;
            }
            else if ($scope.data == 2) {
              $scope.slides = $scope.slides2;
            }
            else if ($scope.data == 3) {
              $scope.slides = $scope.slides3;
            }
            else if ($scope.data == 4) {
              $scope.slides = $scope.slides4;
              $scope.room = 'Novotel Phuket Resort houses 215 rooms, each with private balcony and stunning views of the Andaman Sea and Patong. Each room incorporates the local culture and style through careful interior design and decoration. All rooms are equipped with standard features such as individually controlled air conditioning, IDD/STD telephone, Mini-bar, Tea and coffee making facilities, hairdryer, in-room safe, security card lock, satellite TV and 24-hour room service.';
              $scope.location = 'Novotel Phuket Resort is nestled in the hills above the pristine waters of picturesque Kalim Bay, Patong. It sits 10 metres away from the crystal clear waters and white sandy beach yet still within easy reach of Patong exciting nightlife and shopping.';
            }
            else if ($scope.data == 5) {
              $scope.slides = $scope.slides5;
            }
            else if ($scope.data == 7) {
              $scope.slides = $scope.slides7;
            }
            else if ($scope.data == 8) {
              $scope.slides = $scope.slides8;
            }
            else if ($scope.data == 9) {
              $scope.slides = $scope.slides9;
            }
            else if ($scope.data == 10) {
              $scope.slides = $scope.slides10;
            }
            else if ($scope.data == 11) {
              $scope.slides = $scope.slides11;
            }
            else if ($scope.data == 12) {
              $scope.slides = $scope.slides12;
            }
             else if ($scope.data == 13) {
              $scope.slides = $scope.slides13;
            }
             else if ($scope.data == 14) {
              $scope.slides = $scope.slides14;
            }
            console.log($scope.slides)
            $scope.datagallery = '';
            $scope.tourpopular = [];
    $scope.dataTour = [];
    $scope.dataTransfer = [];
    $scope.dataHotel = [];

            
                $http({
                method : 'POST',
                url : "php/getPackage.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    console.log(res)
                    $scope.toursall = res;
                    angular.forEach(res, function (d,i) {
                    if (d.show_re == 1 ) {
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
                 console.log(res)
                 console.log(res[0].username)
                 
                       
                       
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
$scope.viewpackageforid = function(x){
        //alert("aaaa")
         $window.location.href = 'view-hotel.php#?data='+x;
         $window.location.reload();
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