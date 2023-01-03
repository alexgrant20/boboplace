<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Facility;
use App\Models\File;
use App\Models\Hotel;
use App\Models\HotelFacility;
use App\Models\PaymentType;
use App\Models\Role;
use App\Models\Status;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    Role::create([
      'name' => 'admin'
    ]);

    Role::create([
      'name' => 'member'
    ]);

    Facility::create(['name' => 'Wi-Fi', 'icon' => 'bi bi-wifi']);
    Facility::create(['name' => 'Toilet',  'icon' => 'fa-solid fa-toilet']);
    Facility::create(['name' => 'Window',  'icon' => 'fa-solid fa-window-frame']);
    Facility::create(['name' => 'BBQ facilities', 'icon' => 'fa-solid fa-fire']);
    Facility::create(['name' => 'Swimming pool',  'icon' => 'fa-solid fa-person-swimming']);
    Facility::create(['name' => 'Bar', 'icon' => 'fa-solid fa-martini-glass']);
    Facility::create(['name' => 'Spa', 'icon' => 'fa-solid fa-spa']);
    Facility::create(['name' => 'Restaurant', 'icon' => 'fa-solid fa-user-chef']);

    City::create(['name' => 'Jakarta']);
    City::create(['name' => 'Bandung']);
    City::create(['name' => 'Tangerang']);
    City::create(['name' => 'Bogor']);
    City::create(['name' => 'Bekasi']);
    City::create(['name' => 'Jayapura']);
    City::create(['name' => 'Bali']);

    Hotel::create([
      'name' => 'Swiss-Belhotel Papua',
      'rating' => '4',
      'price' => '2549238',
      'full_address' => 'Pusat Bisnis Jayapura, Jl. Pacific Permai, Bayangkara, Kec. Jayapura Utara, Kota Jayapura, Papua 99112•(0967) 551888',
      'description' => 'The relaxed beachfront hotel features a restaurant, bar, outdoor pool and free breakfast.',
      'city_id' => 6,
    ]);

    File::create([
      'hotel_id' => 1,
      'path' => '/storage/hotel/sbp-1.jpg',
    ]);

    File::create([
      'hotel_id' => 1,
      'path' => '/storage/hotel/sbp-2.jpeg',
    ]);

    File::create([
      'hotel_id' => 1,
      'path' => '/storage/hotel/sbp-3.jpeg',
    ]);

    HotelFacility::create(['hotel_id' => 1, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 1, 'facility_id' => 2]);
    HotelFacility::create(['hotel_id' => 1, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 1, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'Hotel Aston Jayapura & Convention Center',
      'rating' => '3',
      'price' => '610809',
      'full_address' => 'Jl. Percetakan Negara No.50 - 58, Gurabesi, Kec. Jayapura Utara, Kota Jayapura, Papua 99111•(0967) 537700',
      'description' => 'Rooms are warmly decorated, some with ocean views, plus a gym, spa, cafe/bar & event space.',
      'city_id' => 6,
    ]);

    File::create([
      'hotel_id' => 2,
      'path' => '/storage/hotel/ajh-1.jpeg',
    ]);

    File::create([
      'hotel_id' => 2,
      'path' => '/storage/hotel/ajh-2.jpg',
    ]);

    File::create([
      'hotel_id' => 2,
      'path' => '/storage/hotel/ajh-3.jpeg',
    ]);

    HotelFacility::create(['hotel_id' => 2, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 2, 'facility_id' => 2]);
    HotelFacility::create(['hotel_id' => 2, 'facility_id' => 3]);
    HotelFacility::create(['hotel_id' => 2, 'facility_id' => 4]);
    HotelFacility::create(['hotel_id' => 2, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 2, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'Swiss-Belhotel Merauke',
      'rating' => '4',
      'price' => '671500',
      'full_address' => 'Jl. Raya Mandala No.53, Bambu Pemali, Kec. Merauke, Kabupaten Merauke, Papua 99616•(0971) 326333',
      'description' => 'Warmly furnished room in a premium hotel featuring a spacious restaurant & outdoor pool',
      'city_id' => 6,
    ]);

    File::create([
      'hotel_id' => 3,
      'path' => '/storage/hotel/sbm-1.jpeg',
    ]);

    File::create([
      'hotel_id' => 3,
      'path' => '/storage/hotel/sbm-2.jpeg',
    ]);

    File::create([
      'hotel_id' => 3,
      'path' => '/storage/hotel/sbm-3.jpg',
    ]);

    HotelFacility::create(['hotel_id' => 3, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 3, 'facility_id' => 3]);
    HotelFacility::create(['hotel_id' => 3, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'Horison Jayapura',
      'rating' => '3',
      'price' => '1115775',
      'full_address' => 'Jl. Percetakan II No.2, Gurabesi, Kec. Jayapura Utara, Kota Jayapura, Papua 99351•(0967) 522345',
      'description' => 'Bright rooms in this contemporary hotel with spa, pool & fitness center and free parking.',
      'city_id' => 6,
    ]);

    File::create([
      'hotel_id' => 4,
      'path' => '/storage/hotel/hj-1.jpg',
    ]);

    File::create([
      'hotel_id' => 4,
      'path' => '/storage/hotel/hj-2.jpeg',
    ]);

    File::create([
      'hotel_id' => 4,
      'path' => '/storage/hotel/hj-3.jpeg',
    ]);

    HotelFacility::create(['hotel_id' => 4, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 4, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 4, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'Swiss-Belhotel Cendrawasih Biak',
      'rating' => '4',
      'price' => '959500',
      'full_address' => 'Jl. Imam Bonjol No.46, Fandoi, Kec. Biak Kota, Kabupaten Biak Numfor, Papua 98111•(0981) 8215555',
      'description' => 'A modern hotel offering a gym, spa, outdoor swimming pool, karaoke, bar and cafe.',
      'city_id' => 6,
    ]);

    File::create([
      'hotel_id' => 5,
      'path' => '/storage/hotel/sbc-1.jpeg',
    ]);

    File::create([
      'hotel_id' => 5,
      'path' => '/storage/hotel/`sbc-2.jpeg',
    ]);

    File::create([
      'hotel_id' => 5,
      'path' => '/storage/hotel/sbc-3.jpeg',
    ]);

    HotelFacility::create(['hotel_id' => 5, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 5, 'facility_id' => 3]);
    HotelFacility::create(['hotel_id' => 5, 'facility_id' => 4]);

    Hotel::create([
      'name' => 'Puri Setiabudhi',
      'rating' => '4',
      'price' => '762000',
      'full_address' => 'Jl. Dr. Setiabudhi No. 378, 40143 Bandung, Indonesia',
      'description' => 'Offering an outdoor swimming pool, Puri Setiabudhi is situated in Bandung in the West Java Region, 1.4 km from Villa Isola. Free WiFi is featured throughout the property and free private parking is available on site.
         Every room is equipped with air conditioning and a flat-screen TV. Certain units have a seating area, a dining room and a kitchen. The private bathroom has a shower, slippers and free toiletries.
         The property provides concierge service and a 24-hour front desk, as well as childrens playground and meeting facilities. Guests can enjoy a meal at the restaurant or order room service to dine in privacy.
         Dago Pakar is 4.4 km from Puri Setiabudhi, while Cihampelas Walk is 5 km from the property. Husein Sastranegara Airport is 6 km away.
         ',
      'city_id' => 2,
    ]);

    File::create([
      'hotel_id' => 6,
      'path' => '/storage/hotel/puriSetia1.jpg',
    ]);

    File::create([
      'hotel_id' => 6,
      'path' => '/storage/hotel/puriSetia2.jpg',
    ]);

    File::create([
      'hotel_id' => 6,
      'path' => '/storage/hotel/puriSetia3.jpg',
    ]);

    HotelFacility::create(['hotel_id' => 6, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 6, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 6, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'Pullman Bandung Grand Central',
      'rating' => '5',
      'price' => '2869602',
      'full_address' => 'Jl Diponegoro No 27 Citarum Bandung Wetan, Bandung Wetan, 40115 Bandung, Indonesia',
      'description' => 'Located in Bandung, 600 m from Gedung Sate, Pullman Bandung Grand Central provides accommodation with a garden, free private parking, a terrace and a restaurant. This 5-star hotel offers a kids club, room service and free WiFi. The hotel features an outdoor swimming pool and a 24-hour front desk.
         The hotel will provide guests with air-conditioned rooms offering a desk, a coffee machine, a safety deposit box, a flat-screen TV and a private bathroom with a shower. At Pullman Bandung Grand Central each room has bed linen and towels.
         A buffet, continental or American breakfast is available daily at the property.
         Braga City Walk is 3.2 km from the accommodation, while Bandung Train Station is 3.6 km away. The nearest airport is Husein Sastranegara International Airport, 4 km from Pullman Bandung Grand Central.
         Couples particularly like the location — they rated it 9.3 for a two-person trip.
         ',
      'city_id' => 2,
    ]);

    File::create([
      'hotel_id' => 7,
      'path' => '/storage/hotel/pullman1.jpg',
    ]);

    File::create([
      'hotel_id' => 7,
      'path' => '/storage/hotel/pullman2.jpg',
    ]);

    File::create([
      'hotel_id' => 7,
      'path' => '/storage/hotel/pullman3.jpg',
    ]);

    HotelFacility::create(['hotel_id' => 7, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 7, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 7, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'Forest Hills Hotel',
      'rating' => '4',
      'price' => '799000',
      'full_address' => 'Jl.Raya Soreang-Ciwidey Jalan Raya Soreang-Ciwidey Km 23, 40911 Soreang, Indonesia',
      'description' => 'Located in soreang, 24 km from Bandung Train Station, Forest Hills Hotel provides accommodation with an outdoor swimming pool, free private parking, a fitness centre and a restaurant. This 4-star hotel offers room service and a 24-hour front desl. The property features a sauna, karaoke and a kids’ club.
         The hotel will provide guests with air-conditioned rooms offering a desk, a kettle, a fridge, a minibar, a safety deposit box, a flat-screen TV and a private bathroom with a shower. At Forest Hills Hotel each room comes with bed linen and towel.
         Breakfast is available daily, and includes buffet. A la carte and continental options.
         The accommodation offers a children’s playground.
         Kawah Putih Crater os 24 km from Forest Hills Hotel, while Braga City Walk is 24 km away. The nearest airport is Husein Sastranegara International Airport, 21 km from the hotel.
         ',
      'city_id' => 2,
    ]);

    File::create([
      'hotel_id' => 8,
      'path' => '/storage/hotel/frh1.jpg',
    ]);

    File::create([
      'hotel_id' => 8,
      'path' => '/storage/hotel/frh2.jpg',
    ]);

    File::create([
      'hotel_id' => 8,
      'path' => '/storage/hotel/frh3.jpg',
    ]);

    HotelFacility::create(['hotel_id' => 8, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 8, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 8, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'The Dago View Bandung',
      'rating' => '4',
      'price' => '1500000',
      'full_address' => 'Jl.Raya Soreang-Ciwidey Jalan Raya Soreang-Ciwidey Km 23, 40911 Soreang, Indonesia',
      'description' => 'The Dago View Bandung, a property with a garden and a terrace, is set in Bandung, 8.4 km from Cihampelas Walk, 10 km from Braga City Walk, as well as 10 km from Saung Angklung Udjo. The air-conditioned accommodation is 8.1 km from Gedung Sate, and guests benefit from private parking available on site and free WiFi.
         This villa is fitted with 3 bedrooms, a kitchen with a fridge and a stovetop, a flat-screen TV, a seating area and 3 bathrooms equipped with a shower.
         A car rental service is available at the villa.
         Bandung Train Station is 10 km from The Dago View Bandung, while Trans Studio Bandung is 13 km away. The nearest airport is Husein Sastranegara International, 11 km from the accommodation, and the property offers a paid airport shuttle service.
         ',
      'city_id' => 2,
    ]);

    File::create([
      'hotel_id' => 9,
      'path' => '/storage/hotel/tdv1.jpg',
    ]);

    File::create([
      'hotel_id' => 9,
      'path' => '/storage/hotel/tdv2.jpg',
    ]);

    File::create([
      'hotel_id' => 9,
      'path' => '/storage/hotel/tdv3.jpg',
    ]);

    HotelFacility::create(['hotel_id' => 9, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 9, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 9, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'Novotel Bandung',
      'rating' => '4',
      'price' => '699300',
      'full_address' => 'Cihampelas 23 - 25, 40171 Bandung, Indonesia',
      'description' => 'Strategically located 1 km from Bandung Train Station, the 4-star Novotel Bandung offers modern comforts and facilities like free Wi-Fi and an outdoor pool. Guests can sample delicious dishes at the on-site restaurants or get a pampering treatment at the spa centre.
         The well-decorated rooms at Bandung Novotel feature floor-to-ceiling windows which let in lots of natural light, making the air-condtioned space bright and airy. Each room is equipped with a cable/satellite TV, minibar and personal safe. En suite bathroom is provided with free toiletries.
         Guests may exercise at the well-equipped fitness centre or enjoy a massage at Novotels spa. The hotel also provides a tour desk and business centre.
         The Square serves authentic Indonesian, as well as Asian and Western cuisine. A variety of cocktails and light snacks are served at the Lounge Bar where you can relax after a long day of exploring the city.
         Attractions such as the Perjuangan Monument and the Geological Museum of Bandung are both less than 2 km from Bandung Novotel. Free parking is available for guests who drive.
         Husein Sastranegara International Airport is 3 km from Novotel Bandung.
         ',
      'city_id' => 2,
    ]);

    File::create([
      'hotel_id' => 10,
      'path' => '/storage/hotel/novotel1.jpg',
    ]);

    File::create([
      'hotel_id' => 10,
      'path' => '/storage/hotel/novotel2.jpg',
    ]);

    File::create([
      'hotel_id' => 10,
      'path' => '/storage/hotel/novotel3.jpg',
    ]);

    HotelFacility::create(['hotel_id' => 10, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 10, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 10, 'facility_id' => 6]);

    Hotel::create([
      'name' => 'The Apurva Kempinski Bali',
      'rating' => '5',
      'price' => '7603882',
      'full_address' => 'lot 4, Jl. Raya Nusa Dua Selatan, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali',
      'description' => 'When it comes to staying in Bali, most can agree that the Apurva Kempinski Bali atop the magnificent Nusa Dua cliff is one of the best choices, regardless of your traveling purpose. The resort offers spacious rooms and free WiFi throughout.

      Defining the true epitome of high-class beachfront stay, the hotel presents all guests with picturesque sceneries of the on-site tropical garden and the vast Indian Ocean. With 475 stylish and airy rooms, The Apurva Kempinski Bali features complete amenities such as a flat-screen TV, telephone, slippers, coffee/tea maker, mini bar, a desk, sofa, ironing facilities, and a safety deposit box. The ensuite bathroom comes with complimentary toiletries and a hairdryer.

      Apart from its 3 lounges and 4 restaurants, the 2019-launched property also provides many other facilities for all guests. Some of which are swimming pools, airport shuttle, fitness center, waterslide, beach chairs and umbrellas, baggage storage, concierge service, currency exchange and a 24-hour front desk.

      For those with an artistic soul, the on-site Asha Curated Boutique & Gallery is a celebrated stage for craftsmanship and creativity that spans across the prosperous nation.

      Regarding accessibility, The Apurva Kempinski Bali is close to attractive spots like Sawangan Beach located 1.2 km away. If you need assistance to reach other places, the front desk will be happy to assist and ensure your exploration is going as smoothly as possible. Ngurah Rai International Airport is 16.4 km away.',
      'city_id' => 7,
    ]);

    File::create([
      'hotel_id' => 11,
      'path' => '/storage/hotel/apurva1.png',
    ]);

    File::create([
      'hotel_id' => 11,
      'path' => '/storage/hotel/apurva2.png',
    ]);

    File::create([
      'hotel_id' => 11,
      'path' => '/storage/hotel/apurva3.png',
    ]);

    HotelFacility::create(['hotel_id' => 11, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 11, 'facility_id' => 2]);
    HotelFacility::create(['hotel_id' => 11, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 11, 'facility_id' => 7]);
    HotelFacility::create(['hotel_id' => 11, 'facility_id' => 8]);


    Hotel::create([
      'name' => 'Diamond Hotel Kuta Bali',
      'rating' => '4',
      'price' => '465000',
      'full_address' => 'Jl. Raya Kuta No 39, Kuta Badung Bali',
      'description' => 'Diamond Hotel Kuta Bali Located on Jalan Raya Kuta, easy way to a new development business district Sunset Road and Denpasar City, as well as famous Kuta Beach, Legian, and Seminyak.
      The hotel features 168 brand new rooms and all rooms are well designed for everythng you need for a great stay. Exeprience our quality bedding. Recharge after along day with our power shower equipeed with a 3-head massage shower head and everything in control with our self laundry facility.

      Nearby Attraction:
      15 min away to water activity Waterboom Park
      15 min to Legian and Seminyak Night Club
      30 min drive to Sanur to enjoy the sunrise

      Nearby Restaurant
      5 min walk to Dewi Sri Food Center
      20 min to Jimbaran Beach to enjoy Sunset and Dinner

      Nearby Shop
      5 min to Trans Studio Mall Shopping Center
      10 min to Beachwalk Supermall
      10 min to Carefour and Bali Gallery Shopping Park',
      'city_id' => 7,
    ]);

    File::create([
      'hotel_id' => 12,
      'path' => '/storage/hotel/diamond1.png',
    ]);

    File::create([
      'hotel_id' => 12,
      'path' => '/storage/hotel/diamond2.png',
    ]);

    File::create([
      'hotel_id' => 12,
      'path' => '/storage/hotel/diamond3.png',
    ]);

    HotelFacility::create(['hotel_id' => 12, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 12, 'facility_id' => 2]);
    HotelFacility::create(['hotel_id' => 12, 'facility_id' => 3]);
    HotelFacility::create(['hotel_id' => 12, 'facility_id' => 5]);


    Hotel::create([
      'name' => 'The Anvaya Beach Resort Bali',
      'rating' => '5',
      'price' => '1817592',
      'full_address' => 'Jl. Kartika PlazaTuban',
      'description' => 'Nestled right on the shorelines of Kuta Beach in Bali, The Anvaya Resort Bali presents an elegant getaway just a 5-minute walk from the famous Waterbom waterpark. It also offers an outdoor swimming pool, a spa, and meeting facilities. Complimentary WiFi access is available in all areas of the property.

      Boasting a contemporary design, every room is air-conditioned and fitted with a flat-screen cable TV. There is also tea/coffee making facilities, a personal safe and a seating area provided in all rooms. The private en suite bathroom comes with shower facilities and free toiletries. Certain units provide a much larger space with multiple bedrooms, a living room and a private outdoor pool

      The hotel Kunyit Restaurant serves an array of delectable Balinese and Indonesian dishes while guests can enjoy scrumptious international cuisine with selections of wine at the beachfront Sands And Wine Cellar. For a more relaxed atmosphere, the Leisure Deck is the perfect place to enjoy sunset sessions.

      Other facilities available at this hotel include a fitness centre and free on-site private parking for guests who drive. The staff at the 24-hour front desk can assist guests with laundry requests, luggage storage, car hire and day tour arrangements at additional charges.

      The lively Seminyak Beach is about a 20-minute drive from The Anvaya Resort Bali while Garuda Wisnu Kencana Cultural Park is about a 30-minute drive away. Ngurah Rai International Airport is reachable within a 10-minute drive and airport shuttle service is available at a fee.',
      'city_id' => 7,
    ]);

    File::create([
      'hotel_id' => 13,
      'path' => '/storage/hotel/anvaya1.png',
    ]);

    File::create([
      'hotel_id' => 13,
      'path' => '/storage/hotel/anvaya2.png',
    ]);

    File::create([
      'hotel_id' => 13,
      'path' => '/storage/hotel/anvaya3.png',
    ]);

    HotelFacility::create(['hotel_id' => 13, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 13, 'facility_id' => 2]);
    HotelFacility::create(['hotel_id' => 13, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 13, 'facility_id' => 7]);
    HotelFacility::create(['hotel_id' => 13, 'facility_id' => 8]);

    Hotel::create([
      'name' => 'Lovina Beach Club & Resort',
      'rating' => '5',
      'price' => '845000',
      'full_address' => 'Jl. Seririt- Singaraja, Tukadmungga, Kec. Buleleng, Kabupaten Buleleng, Bali',
      'description' => 'About Lovina Beach Club & Resort
      Lovina Beach Club & Resort is a five star beach located. This elegant resort presents a beautiful view of the ocean with a natural and fresh atmosphere. The right accommodation for a place to rest when you vacation with family.

      Lovina Beach Club & Resort Location
      Lovina Beach Club & Resort is conveniently located near Lovina Beach and Pura Segara Tukadmungga Temple. The place is suitable for you who want to more easily visit every interesting place while in Bali.',
      'city_id' => 7,
    ]);

    File::create([
      'hotel_id' => 14,
      'path' => '/storage/hotel/lovina1.png',
    ]);

    File::create([
      'hotel_id' => 14,
      'path' => '/storage/hotel/lovina2.png',
    ]);

    File::create([
      'hotel_id' => 14,
      'path' => '/storage/hotel/lovina3.png',
    ]);

    HotelFacility::create(['hotel_id' => 14, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 14, 'facility_id' => 2]);
    HotelFacility::create(['hotel_id' => 14, 'facility_id' => 4]);
    HotelFacility::create(['hotel_id' => 14, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 14, 'facility_id' => 6]);
    HotelFacility::create(['hotel_id' => 14, 'facility_id' => 7]);
    HotelFacility::create(['hotel_id' => 14, 'facility_id' => 8]);

    Hotel::create([
      'name' => 'The Edge Bali',
      'rating' => '5',
      'price' => '11457746',
      'full_address' => 'Jalan Pura Goa Lempeh, Banjar Dinas Kangin, Uluwatu',
      'description' => 'Situated on a cliff overlooking the ocean, THE edge Bali offers luxurious 5-star villas with private pools, home entertainment systems and free WiFi. It features a world-class spa and fitness centre.
      Boasting 2 private pools, spacious villas feature state-of-the-art entertainment systems in a private home theatre. They have a well-equipped kitchen, wine cellar and cigar lounge. Guests can lounge in the villa’s tropical garden or on the private sundeck.
      Relaxing body treatments await guests at The Edge’s spa, which features private steam baths and sweeping ocean views. Personal villa butlers can help with travel and entertainment arrangements.
      Personal butlers prepare and serve breakfast in the villas’ private kitchens. Personally tailored gourmet menus featuring fresh seafood and European dishes are handcrafted by the executive chef. An extensive wine list is available.
      THE edge Bali is a 45-minute drive from Ngurah Rai International Airport. There is an international standard golf course located 3 km from the hotel.',
      'city_id' => 7,
    ]);

    File::create([
      'hotel_id' => 15,
      'path' => '/storage/hotel/edge1.png',
    ]);

    File::create([
      'hotel_id' => 15,
      'path' => '/storage/hotel/edge2.png',
    ]);

    File::create([
      'hotel_id' => 15,
      'path' => '/storage/hotel/edge3.png',
    ]);

    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 1]);
    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 2]);
    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 3]);
    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 4]);
    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 5]);
    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 6]);
    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 7]);
    HotelFacility::create(['hotel_id' => 15, 'facility_id' => 8]);

    User::create(
      [
        'role_id' => 1,
        'username' => 'bobo admin',
        'email' => 'boboadmin@gmail.com',
        'password' => Hash::make('password'),
        'phone_number' => '628787949591',
        'is_email_verified' => now(),
      ],
    );

    User::create([
      'role_id' => 2,
      'username' => 'bobo member',
      'email' => 'bobomember@gmail.com',
      'password' => Hash::make('password'),
      'phone_number' => '628787303431',
      'is_email_verified' => now(),
    ]);

    Status::create([
      'name' => 'draft'
    ]);

    Status::create([
      'name' => 'paid'
    ]);

    PaymentType::create([
      'name' => 'ovo'
    ]);

    PaymentType::create([
      'name' => 'dana'
    ]);

    Transaction::create([
      'user_id' => 2,
      'hotel_id' => 1,
      'status_id' => 1,
      'transaction_date' => now(),
      'checkin_date' => now(),
      'checkout_date' => now()->addDays(3),
      'total_adult' => 0,
      'total_children' => 2,
    ]);
  }
}
