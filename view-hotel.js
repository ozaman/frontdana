var app = angular.module('myApp', ['ngCookies','ui.bootstrap','ngSanitize']);
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
   $scope.slides15 = [
    {
      image: 'data/files/hotel/ho15/1.jpg'
    },
    {
      image: 'data/files/hotel/ho15/2.jpg'
    },
    {
      image: 'data/files/hotel/ho15/3.jpg'
    },
    {
      image: 'data/files/hotel/ho15/4.jpg'
    },
    {
      image: 'data/files/hotel/ho15/5.jpg'
    },
    {
      image: 'data/files/hotel/ho15/6.jpg'
    },
    {
      image: 'data/files/hotel/ho15/7.jpg'
    }
  ];
  //var slides = $scope.slides;
  console.log($scope.slides)
      $scope.err = $location.search().err;
            $scope.data = JSON.parse($location.search().data);
            console.log($scope.data)
            if ($scope.data == 1) {//WYNDHAM GRAND PHUKET KALIM BAY
              $scope.slides = $scope.slides1;
              $scope.background = 'Leave Everyday Behind At Our Luxurious Kathu, Phuket Resort<Br>'+'Perched on a high cliff overlooking the Andaman Sea, the Wyndham Grand Phuket Kalim Bay is a modern luxury resort in beautiful Phuket, Thailand. Picture-perfect views inspire you to relax in contemporary styled rooms, suites and villas with balconies overlooking the sea and gardens. Savor Thai fusion cuisine at our restaurants or share cocktails and panoramic views at our rooftop bar. Plan a romantic wedding or business meeting in elegant event venues. Rejuvenate body and spirit in our peaceful spa and wellness center. Escape to stunning seaside retreat overlooking Kalim Bay and leave ordinary behind. You find everything you need at our Kathu, Phuket resort.';
              $scope.room = 'Deluxe Room Ocean View King<br/>'+
                            'Deluxe Room Ocean View Twin<br/>'+
                            'Pool Suite Garden View<br/>'+
                            'Pool Suite Ocean View<br/>'+
                            'Pool Villa Ocean View';
              $scope.location = "Discover the natural beauty, rich culture and amazing sights of Thailand's largest island at our resort in Phuket.Overlooking Kalim Bay, Wyndham Grand Phuket Kalim Bay is minutes away from fantastic attractions, botanical gardens, golf courses, nightlife, shopping and dining. Ride the elephants at the Siam Safari or see the big cats at Tiger Kingdom. Relax on the pristine sands of beautiful Patong Beach.Explore the shops in Jungceylon or wander through Old Phuket Town. Marvel the golden Buddha at Wat Khao Rang or hit the links at Red Mountain Golf Club. Nestled on the edge of a cliff with sweeping views of the Andaman Sea, our Phuket,Thailand resort is the perfect destination for relaxation, romance and adventure. We are only 31 kilometers from Phuket International Airport and offer shuttle service for a small fee. Enjoy a stunning seaside retreat in a lush island paradise.";
              $scope.attraction = '•  Phuket Half Day Safari (w/Elephant ride) - 0 Miles<Br>'+ 
                                  '• Patong Beach - 4.9 Miles <br/>'+
                                  '• Jungceylon (Shopping) - 5.3 Miles <br/>'+
                                  '• MilesPhuket Fantasea - 7 Miles <br/>'+
                                  '• Tiger Kingdom - 7.9 Miles <br/>'+
                                  '• Surin Beach - 8.2 Miles <br/>'+
                                  '• Red Mountain Golf Club - 11.7 Miles <br/>'+
                                  '• Central Festival Phuket (Shopping) - 13.8 Miles <br/>'+
                                  '• Wat Khao Rang - 15.6 Miles <br/>'+
                                  '• Old Phuket Town - 17.4 Miles';
            }
            else if ($scope.data == 2) {//VILLA TANTAWAN
              $scope.slides = $scope.slides2;
              $scope.background = 'KAMALA IS AN OLD FISHING VILLAGE AND EVEN TODAY YOU CAN STILL THE LONG TAIL BOAT FISHERMAN FIXING THEIR NETS AND PREPARING THEIR VESSELS FOR FISHING.ALTHOUGH TOURISM HAS DEFINITELY TAKEN OVER AS THE NUMBER ONE INCOME FOR THE DELIGHTFUL LOCAL PEOPLE OF KAMALA, WHOSE ILLUMINATING SMILES INTOXICATE ALL THOSE THAT STAY HERE, YOU CAN STILL SEE THE OLD TRADITIONS STILL IN PLACE DOWN AT THE SOUTHERN END OF THE BEACH.'+
'KAMALA IS A POPULAR LOCATION FOR RETIRED COUPLES WHO COME TO BASK AND ENJOY THE ALL YEAR ROUND SUNSHINE, THE FRIENDLINESS AND THE PEACE AND QUIET THAT KAMALA RESORT OFFERS IS A SERIOUS ATTRACTION.'+
'KAMALA BEACH IS ONE OF THE MOST DISCREET BEACHES ON PHUKET, LYING ONLY TEN MINUTES FROM PATONG BEACH AND SURIN BEACH WHICH LIE TO THE SOUTH AND NORTH RESPECTIVELY.';
              $scope.room = 'ONE BED-ROOM POOL VILLA<br/>'+
'TWO BED-ROOM POOL VILLA<br/>'+
'THREE BED-ROOM POOL VILLA';
              $scope.location = ' VILLA TANTAWAN RESORT AND SPA IS LOCATED AT KAMALA BEACH, A SMALL RESORT ON THE WEST COAST OF PHUKET, IS ONLY A 30 MINUTE SHORT DRIVE FROM PHUKET INTERNATIONAL AIRPORT.'+ 
'ON THE MAIN ROAD THAT RUNS THROUGH KAMALA YOU CAN FIND EVEN MORE BARS AND RESTAURANTS, THERE ARE ALSO SEVERAL BANKS AND A POST OFFICE IN THE SOUTH END OF THE BEACH AND TOWARDS THE NORTHERN END YOU CAN FIND FANTASEA.'+
'FANTASEA IS A REAL CROWD PLEASER A HUGE 140 ACRE ENTERTAINMENT ARENA, WITH A HUGE RESTAURANT OFFERING FINE THAI AND EUROPEAN CUISINE; THERE ARE HANDICRAFT AND SOUVENIR SHOPS, ALTHOUGH THE HIGHLIGHT IS THE SPECTACULAR THAI THEMED SHOW.';
              $scope.attraction = '•  PHUKET FANTASEA : 1.5 KM<br/>'+
                                  '• LAEM SING : 2.9 KM<br/>'+
                                  '• KALIM BEACH : 3.5 KM<br/>'+
                                  '• THE PLAZA SURIN : 3.7 KM<br/>'+
                                  '• BANG TAO TEMPLE : 3.9 KM<br/>'+
                                  '• KATHU WATERFALL : 4.6 KM'
                                  '• BLISS BEACH CLUB : 5 KM<br/>'+
                                  '• TESCO LOTUS SUPERMARKET CHERNG TALAY : 5.1 KM<br/>'+
                                  '• PHUKET CABLE SKI : 5.2 KM<br/>'+
                                  '• PATONG HOSPITAL : 5.5 KM<br/>';
            }
            else if ($scope.data == 3) {//PHUKET GRACELAND RESORT AND SPA
              $scope.slides = $scope.slides3;
              $scope.background = '';
              $scope.room = '';
              $scope.location = '';
              $scope.attraction = '';
            }
            else if ($scope.data == 4) {//NOVOTEL PHUKET RESORT
              $scope.slides = $scope.slides4;
              $scope.background = 'At Novotel Phuket Resort, Thailand, first class accommodation and service are a natural extension of our daily mission to provide you with the ultimate resort experience. At the end of 2016, we have completed redesigning and refurbishing all of our guest rooms with luxurious, beautiful, exquisite Thai-styled decoration.';
              
              $scope.attraction = '-  JUNCEYLON SHOPPING MALL<br/>'+
                                  '- PATONG BEACH <br/>'+
                                  '- BANGLA ROAD ';
              $scope.room = 'Spacious, contemporary in design, and adaptable, the Novotel room is truly a place for living, perfect for all your needs.<br/>'+
                            ' ' +'- SUPERIOR ROOM<br/>'+
                            ' ' +'- SUPERIOR OCEAN VIEW<br/>'+
                            ' ' +'- DELUXE ROOM<br/>'+
                            ' ' +'- DELUXE OCEAN VIEW ROOM<br/>'+
                            ' ' +'- DELUXE POOL ACCESS<br/>'+
                            ' ' +'- DELUXE FAMILY<br/>'+
                            ' ' +'- FAMILY SUITE<br/>'+
                            ' ' +'- SUITE ROOM';
              $scope.location = '282 PHRABARAMEE ROAD, PATONG, KATHU, PHUKET 83150 THAILAND,';
            }
            else if ($scope.data == 5) {//THE PAVILIONS PHUKET
              $scope.slides = $scope.slides5;
              $scope.background = 'Welcome to <B>The Pavilions Phuket</B>, Asia’s most romantic, intimate and luxury resort. Perched dramatically atop one of Phuket’s highest points, each private villa and suite is a haven of tranquility. Whether you’re celebrating a special occasion or looking to relax and reconnect, The Pavilions is your perfect intimate escape.<br/>'+
              '<br>PRIVACY, INTIMACY & LUXURY IN A HILLTOP 5-STAR RESORT</br>'+
'&nbsp;&nbsp;The Pavilions Phuket features three award-winning restaurants and bars with gourmet cuisine prepared by our exceptionally skilled culinary team.'+
'Unwind with our state-of-the-art amenities including our spa and wellness center offering relaxing treatments and massages, a lap pool and a fully equipped fitness centre.';
              $scope.room = 'The Pavilions Phuket offers a range of 93 newly appointed Suites and luxury Pool Villas, nestled within a scenic hilltop retreat that presents a variety of stunning views and the definitive illustration of intimacy and privacy.'+
'The Pavilions Suites are beautifully furnished and fully equipped, The Pavilions Suites makes for a peaceful environment allowing you to kick back, relax and breath.'+
'Five types of Villas offer guests something unique and special. Each Villa offers complete privacy and comes with its own private swimming pool. Spa treatments are also available in the privacy of each Villa.'+
      ' ' + '- Hill View Suite<br/>'+
      ' ' + '- Garden Suite<br/>'+
      ' ' + '- Spa and Pool Pavilion<br/>'+
      ' ' + '- Spa and Pool Penthouse<br/>'+
      ' ' + '- Tropical Pool Villa<br/>'+
      ' ' + '- Ocean View Pool Villa<br/>'+
      ' ' + '- Two Bedroom Pool Loft<br/>'+
      ' ' + '- Three Bedroom Pool Loft<br/>'+
      ' ' + '- Four Bedroom Pool Loft';
              $scope.location = '-  The Pavilions Phuket is ideally located in Phuket with the airport,<br/>'+
'- Patong and Phuket Town all just 30 minutes drive away.<br/>'+
'- The Pavilions Phuket is only 5 minutes drive away from Layan Beach and provide our guests with everything needed for a wonderful day on the beach, including a complimentary shuttle service.';
              $scope.attraction = '-  Layan Beach<br/>'+
                                  '- To airport takes 30 minutes';
            }
            else if ($scope.data == 7) {//PUMERIA RESORT PHUKET
              $scope.slides = $scope.slides7;
               $scope.background = 'Pumeria Resort Phuket is a new luxury small resort in Phuket located just half kilometer to Bangtao beach. The guesthouse designed building consists of 6 luxury suites with private saltwater pool and bathtub in every suite. The resort offers 3 suite styles which are Luxury, Loft, and Modern. Our ultimate goal is to fulfil your holidays in cozy and luxury accommodation.';
              $scope.room = '-  LUXURY FAMILY POOL SUITE<br/>'+
                            '- LUXURY POOL SUITE<br/>'+
                            '- LOFT POOL SUITE<br/>'+
                            '- MODERN POOL SUITE<br/>'+
                            '- All pool suites are well-decorated air-condition bedroom with living area connected to outdoor pool area.<br/>'+
                            '- King-sized bed is offered in bedroom with sofa, flat screen LCD settle lite television, telephone, safety box, and Free WIFI internet access.<br/>'+
                            '- The guests easily facilitate themselves with kitchen stuff such as microwave oven, electric kettle, and dining utensil in pantry area.<br/>'+
                            '- Bathroom with bathtub provides bathroom amenities including hair dryer, bathrobe and slippers.<br/>'+
                            '- Pool area consists of 3*6 M private saltwater pool, sun beds, out-door rain shower, and tropical lush garden.';
              $scope.location = '262/41 Soi Bangtao 2, Moo 5 Srisoontorn Road, Cherngtaly, Thalang, Phuket, Thailand 83110';
              $scope.attraction = '-  Bangtao beach – Tranquil and the longest beach in Phuket: 0.5 kms. Or 10 mins walk.<br/>'+
                                  '- Tinlay Night Market – Local food and souvenirs: 0.2 kms or 5 mins walk.<br/>'+
                                  '- Villa Market – Imported groceries super market: 2 kms. Or 8 mins.<br/>'+
                                  '- Phuket Fantasea – A magic and cultural theme park near Kamala beach: 7 kms. Or 15 mins.<br/>'+
                                  '- Patong beach – Most famous and developed beach with nightlife entertainment: 22 kms. Or 30 mins.<br/>'+
                                  '- Jungceylon Patong – Shopping center: 22 kms. Or 30 mins.<br/>'+
                                  '- Central Festival – Shopping center: 22 kms. Or 40 mins.<br/>'+
                                  '- Phuket town – Old Phuket town with Chino-Portuguese building style: 20 kms. Or 40 mins.<br/>'+
                                  '- Promthep Cape – The westernmost sunset point of Thailand: 37 kms. Or 1 hour.<br/>'+
                                  '- King Power – King of duty Free: 38 kms or 25 mins.';
//               $scope.background = 'The chic <b>Pimnara Boutique Hotel</b> comprises of 67 uniquely-decorated rooms designed by 11 well-renowned Thai artists. All rooms are creatively laid out and furnished evoking an enchanting ambience. Guest can choose from the comfortable <b>Standard Room, Superior Room</b> with a seamless integration of bedroom and bathroom, <b>Deluxe Room </b>with a spacious living area and modern entertainment amenities and Loft Suite featuring a stunning panoramic view of Patong. Each of the rooms and suites are provided with modern conveniences to ensure that guests have a comfortable stay at Pimnara Boutique Hotel. With luxurious and convenient amenities, the guests experience the comforts of home in a stylish setting.'+
// 'Modern comforts available are individually-controlled air conditioning, mini bar, LCD TV, DVD player, hair dryer, and coffee/ tea maker, in-room personal safe, baby cot, complimentary wireless internet, and iPad for all <b>Deluxe rooms</b> and <b>Loft</b> suites.';
//               $scope.room = '-  Standard with no window<br/>'+
//                             '- Superior with window<br/>'+
//                             '- Deluxe Room<br/>'+
//                             '- Loft Suite';
//               $scope.location = 'Pimnara boutique hotel provides you with the pleasure of a shopping experience with high convenience as it sits above the largest shopping center in Patong, Jungceylon. Located in the heart of the legendary Bangla beach, indulge yourself with the beauty of the tropical paradise Thailand has to offer. The sparkling Bangla Street, where all the night lights and wonders unite is only footsteps away from an unforgettable bash of a lifetime';
//               $scope.attraction = 'Jungceylon 0 km<br/>'+  '- Bangla Night Entertainment  0.5 km<br/>'+
// '- Joe Conrad Magic Theatre  1.7 km<br/>'+  '- Patong Beach  2.8 km<br/>'+
// '- Water World Asia  4.2 km<br/>'+  '- Phuket Fantasea 9.9 km<br/>'+
// '- Hat Kammala 10.5 km <br/>'+'- Phuket Mining Museum  10.7 km<br/>'+
// '- Central Festival  12.2 km<br/>'+'- Commemoration Public Park 15.1 km<br/>'+
// '- Wat Chalong 17.4 km<br/>'+ ' - Phuket Zoo  18.7 km<br/>'+
// '- Phuket Sea Shell Museum 21.4 km <br/>'+ '- Promthep Cape 23.1 km';
            }
            else if ($scope.data == 8) {//SANTHIYA RESORT AND SPA
              $scope.slides = $scope.slides8;
              $scope.background = '<b>WELCOME TO SANTHIYA KOH YAO YAI</b>'+
'Our eco-luxury resort comprises of 39 teakwood pool villas and 109 deluxe rooms that blend in perfectly with the natural mountainous surroundings and offer a rare, private stretch of beach frontage. Unrivaled guest facilities include a spectacular waterfall swimming pool, an indulgent spa offering a range of pampering treatments, and world class restaurants serving the absolute best in Thai and global cuisine.';
              $scope.room = '-  FOUR BEDROOM POOL VILLA<br/>'+
                            '- FAMILY TWO BEDROOM OCEAN POOL VILLA<br/>'+
                            '- ROYAL GRAND POOL VILLA<br/>'+
                            '- OCEAN VIEW POOL VILLA<br/>'+
                            '- OCEAN VIEW POOL SUITE<br/>'+
                            '- GRAND DELUXE OCEAN VIEW<br/>'+
                            '- SUPREME DELUXE SEA VIEW<br/>'+
                            '- SUPREME DELUXE GARDEN VIEW';
              $scope.location = 'Santhiya Koh Yao Yai Resort & Spa is 20 minutes away from Phuket by our speed boat. Start your getaway with picturesque scenery coupled with the fresh sea air in your very own speed boat transfer. The Santhiya Launch whisks you away from Ao Po Grand Marina across the sea right to the resort’s private pier. ';
              $scope.attraction = 'There are many tourist attractions that still maintain their natural beauty along with many beautiful beaches. Apart from this, not far from the coast are many exotic islands, which add to the beauty of Koh Yao. Underwater is where the magic really happens. The area is home to some of the worlds most undisturbed and colourful sea life, making the island diving and snorkeling some of the best in the world. While Koh Yao Yai is lesser known, it bares a striking difference to the neighboring Phuket. Secluded and quiet, this lesser developed island is the perfect destination to relax, unwind, and unplug.';
            }
            else if ($scope.data == 9) {//RAMADA PHUKET DEEVANA
              $scope.slides = $scope.slides9;
              $scope.background = "<b>Close to Patong Beach and Phuket's bustling nightlife</b>"+
"Our Ramada Phuket Patong offers guests a fantastic location, steps away from the world-famous Patong Beach, shopping bazaars, and Phuket's bustling nightlife. With comfortable, convenient amenities, our hotel is the perfect choice for business and leisure travelers alike. Whether you are our guest for just one night or an extended stay, we offer comfortable accommodations at a great price.";
              $scope.room = '-  DELUXE ROOM<br/>'+
                            '- PREMIER ROOM<br/>'+
                            '- JUNIOR SUITE';
              $scope.location = '45-1 Raj U Thid 200 Pee Road Kathu District, Phuket, Patong, 83150';
              $scope.attraction = "-  Patong Beach<br/>"+
                                  "- Shopping bazaar<br/>"+
                                  "- Phuket's bustling nightlife.";
            }
            else if ($scope.data == 10) {//SLEEP WITH ME DESIGN HOTEL@PATONG
              $scope.slides = $scope.slides10;
              $scope.background = 'SLEEP WITH ME HOTEL design hotel @ patong comprises of 258 Guest Rooms & Suite Rooms, overlooking skyscrapers of Patong Bay. The hotel is known for its modern facilities, personal service and international standards of comfort. However, the SLEEP WITH ME HOTEL design hotel @ patong has its own individual character while reflecting local flavour. Rooms are designed with the diverse needs of today’s world travelers in mind. Whether they are business, leisure, families, groups, or couples, they will find that all the details and amenities are suited for everyone.';
              $scope.room = '-  SUPERIOR<br/>'+
                            '- DELUXE JACUZZI<br/>'+
                            '- SUITE';
              $scope.location = 'The hotel is well located in the heart of Patong, close to Jungceylon Shopping Center, the walking street “Bangla Road”, and only a 3 minutes walk to the beach. ';
              $scope.attraction = '';
            }
            else if ($scope.data == 11) {//ANGSANA LAGUNA PHUKET 
              $scope.slides = $scope.slides11;
              $scope.background = '<b>WELCOME TO ANGSANA LAGUNA PHUKET</b>'+
'Experience the best in sun, sand and sea'+
"Watch sunlight glint off sparkling lagoons. Stroll along pristine beaches lapped by cool waters. Sift warm white sand through your fingers and float along Angsana Laguna Phuket resort's free-form pool meandering 323 metres around the resort. Have a fun-filled vacation with friends, a romantic getaway with your loved one or an enjoyable time bonding with family. Set along the shores of Phuket’s Bang Tao Bay in the island’s northwest, welcome to Angsana Laguna Phuket, part of Asia’s first integrated resort, Laguna Phuket. With 600 acres of parkland, this beachfront resort in Laguna Phuket offers endless activities to bring out the passionate adventurer in you.";
              $scope.room = '- Laguna Room – King<br/>'+
                            '- Laguna Room – Twin<br/>'+
                            '- Laguna Grand Room – King<br/>'+
                            '- Laguna Beachfront Room<br/>'+
                            '- Laguna Poolside Room – King<br/>'+
                            '- Laguna Poolside Room – Twin<br/>'+
                            '- Laguna Premier Room – King<br/>'+
                            '- Angsana One-Bedroom Loft<br/>'+
                            '- Island Villa Duplex<br/>'+
                            '- Island Villa Suite<br/>'+
                            '- Grand Angsana Suite<br/>'+
                            '- Angsana Pool Residence<br/>'+
                            '- Angsana Grand Pool Residence';
              $scope.location = '10 MOO 4 SRISOONTHORN ROAD, PHUKET 83110, THAILAND';
              $scope.attraction = '-  The resort is 20 kilometres from Phuket International Airport. The drive takes 25 minutes.';
            }
            else if ($scope.data == 12) {//Holiday Inn Express Phuket Patong Beach Central 
              $scope.slides = $scope.slides12;
              $scope.background = 'Featuring 277 stylishly designed modern rooms, Holiday Inn Express Phuket Patong Beach Central is the smart choice for savvy leisure travellers who are looking for the best location combined with the best value in a resort-style hotel on their island getaway. Start each day right with our free Express Start Breakfast or Grab and Go option and stay connected with our free Wi-Fi throughout the hotel. Relax in our spacious outdoor swimming pools or open space lounge. Get the most out of your stay with our 24-hour fitness centre, self-service laundry facility and 16-person meeting room.';
              $scope.room = '-  STANDARD ROOM ';
              $scope.location = "A smart hotel in the heart of <b>Patong Beach</b> for the most memorable island getaway experience. Located just a 2 minutes walk from <b>Patong Beach,</b> the <b>most happening beach on Phuket Island,</b> and a short distance from the popular <b>Bangla Road, Jungceylon Shopping Mall</b> and <b>Patong Promenade</b> the hotel offers quick access to all of Phuket's major shopping, dining and entertainment venues. Just a 15 minutes drive will take you to the historic <b>Old Phuket Town.</b>";
              $scope.attraction = '- Jungceylon Shopping Mall<br/>'+
                                  '- The Paradise Complex<br/>'+
                                  '- Soi Bangla<br/>'+
                                  '- Bangla Boxing Stadium<br/>'+
                                  '- Loma Park<br/>'+
                                  '- Phuket Fantasea<br/>'+
                                  '- Phuket Simon Cabaret<br/>'+
                                  '- Siam Niramit<br/>'+
                                  '- Wat Chalong Temple<br/>'+
                                  '- Old Phuket Town';
            }
             else if ($scope.data == 13) {//BANYAN TREE PHUKET 
              $scope.slides = $scope.slides13;
              $scope.background = '';
              $scope.room = '';
              $scope.location = '';
              $scope.attraction = '';
            }
             else if ($scope.data == 14) {//LEBUA TOWER CLUB BANGKOK 
              $scope.slides = $scope.slides14;
              $scope.background = 'On Top of the World: Searching for a luxurious five-star hotel in Bangkok, one where every moment is memorable, personal, and exceptional? Just look up, then come in and discover why we were named the World’s Leading Luxury All-Suite Hotel at the World Travel Awards.';
              $scope.room = '-  TOWER CLUB CITY VIEW SUITE BALCONY <br/>'+   
                            '- TOWER CLUB RIVER VIEW SUITE BALCONY<br/>'+   
                            '- TOWER CLUB 2 BEDROOM LUXURY SUITE <br/>'+    
                            '- TOWER CLUB 3 BEDROOM LEBUA SUITE ';
              $scope.location = '1055 Silom Road Bangrak, Bangkok 10500 Thailand';
              $scope.attraction = "You are also closer to The Dome at lebua, our collection of rooftop restaurants and bars that include the famed Sirocco and Sky Bar, the inviting Distil lounge, our celebrated Asian restaurant Breeze, and Mezzaluna, the award-wining fine-dining mecca renowned for its innovative cuisine, and more recently Flûte – A Perrier-Jouët Bar and Alfresco 64 – A Chivas Bar all widely considered the top restaurants and bars and Bangkok attractions in themselves."+
"Just outside are the famed Bangkok points of interest, as well as the business and shopping districts. This all-suite hotel's proximity to the Chao Phraya River, BTS Sky Train and expressway puts the entire city within reach, though you may prefer to just gaze upon it from the extraordinary vantage points throughout this luxury hotel in Bangkok.";
            }
            else if ($scope.data == 15) {//ALOFT BANGKOK, SUKHUMVIT 11
              $scope.slides = $scope.slides14;
              $scope.background = 'Aloft Bangkok – Sukhumvit 11 offers jet-setting style at a steal and brings urban cool to unexpected places, where anything can happen: energy flows, personalities mingle and opportunities abound. The new generation of travelling is here, why do not get the full experience?';
              $scope.room = '-  CHIC ROOM <br/>'+
                            '- URBAN ROOM <br/>'+
                            '- BREEZY ROOM <br/>'+
                            '- STYLISH SUITE <br/>'+
                            '- SAVVY SUITE <br/>'+
                            '- ULTRA SAVVY SUITE';
              $scope.location = 'ALOFT BANGKOK IS LOCATED AT SUKHUMVIT 11, JUST STEPS AWAY FROM BTS SKYTRAIN AND MRT SUBWAY STATIONS.';
              $scope.attraction = "An easy breezy adventure awaits you in Thailand's hippest hotspot! Aloft Bangkok - Sukhumvit 11 is just steps from the best shopping, nightlife, and dining destinations, and a quick 5-minute stroll or with our free TUK-TUK shuttle to Nana BTS Skytrain and MRT Subway stations for easy access to Bangkok's biggest attractions.";
            }
            console.log($scope.slides)
            $scope.datagallery = '';
            $scope.tourpopular = [];
    $scope.dataTour = [];
    $scope.dataTransfer = [];
    $scope.dataHotel = [];

            
                $http({
                method : 'POST',
                url : "php/getHotelbyid.php",
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