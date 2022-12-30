<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Facility;
use App\Models\File;
use App\Models\Hotel;
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

      City::create(['name' => 'Jakarta']);
      City::create(['name' => 'Bandung']);
      City::create(['name' => 'Tangerang']);
      City::create(['name' => 'Bogor']);
      City::create(['name' => 'Bekasi']);

      Hotel::create([
         'name' => 'Mariot Jowo',
         'rating' => '4',
         'price' => '500500',
         'full_address' => 'Jalan marioto jowo',
         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sit vero nisi voluptatibus quaerat fuga sequi quisquam nostrum dolor commodi aspernatur blanditiis consequatur fugiat, ut temporibus debitis unde? Corrupti, nulla. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, distinctio fuga fugit quis labore nostrum voluptatibus, ipsam facilis ipsa beatae veniam est voluptatem omnis reprehenderit accusamus, reiciendis magni ad totam quibusdam? Inventore nesciunt ipsum quisquam atque! Officiis quo debitis delectus?',
         'city_id' => 1,
      ]);

      Hotel::create([
         'name' => 'Mariot Jawas',
         'rating' => '4',
         'price' => '500500',
         'full_address' => 'Jalan marioto jowo',
         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sit vero nisi voluptatibus quaerat fuga sequi quisquam nostrum dolor commodi aspernatur blanditiis consequatur fugiat, ut temporibus debitis unde? Corrupti, nulla. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, distinctio fuga fugit quis labore nostrum voluptatibus, ipsam facilis ipsa beatae veniam est voluptatem omnis reprehenderit accusamus, reiciendis magni ad totam quibusdam? Inventore nesciunt ipsum quisquam atque! Officiis quo debitis delectus?',
         'city_id' => 1,
      ]);

      Hotel::create([
         'name' => 'Mariot Mawas',
         'rating' => '4',
         'price' => '500500',
         'full_address' => 'Jalan marioto jowo',
         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sit vero nisi voluptatibus quaerat fuga sequi quisquam nostrum dolor commodi aspernatur blanditiis consequatur fugiat, ut temporibus debitis unde? Corrupti, nulla. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, distinctio fuga fugit quis labore nostrum voluptatibus, ipsam facilis ipsa beatae veniam est voluptatem omnis reprehenderit accusamus, reiciendis magni ad totam quibusdam? Inventore nesciunt ipsum quisquam atque! Officiis quo debitis delectus?',
         'city_id' => 1,
      ]);

      Hotel::create([
         'name' => 'Mariot Kawas',
         'rating' => '4',
         'price' => '500500',
         'full_address' => 'Jalan marioto jowo',
         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sit vero nisi voluptatibus quaerat fuga sequi quisquam nostrum dolor commodi aspernatur blanditiis consequatur fugiat, ut temporibus debitis unde? Corrupti, nulla. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, distinctio fuga fugit quis labore nostrum voluptatibus, ipsam facilis ipsa beatae veniam est voluptatem omnis reprehenderit accusamus, reiciendis magni ad totam quibusdam? Inventore nesciunt ipsum quisquam atque! Officiis quo debitis delectus?',
         'city_id' => 1,
      ]);

      Hotel::create([
         'name' => 'Mariot Holas',
         'rating' => '4',
         'price' => '500500',
         'full_address' => 'Jalan marioto jowo',
         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sit vero nisi voluptatibus quaerat fuga sequi quisquam nostrum dolor commodi aspernatur blanditiis consequatur fugiat, ut temporibus debitis unde? Corrupti, nulla. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, distinctio fuga fugit quis labore nostrum voluptatibus, ipsam facilis ipsa beatae veniam est voluptatem omnis reprehenderit accusamus, reiciendis magni ad totam quibusdam? Inventore nesciunt ipsum quisquam atque! Officiis quo debitis delectus?',
         'city_id' => 1,
      ]);

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

      Facility::create(['name' => 'Wi-Fi', 'icon' => 'bi bi-wifi']);
      Facility::create(['name' => 'Toilet',  'icon' => 'fa-solid fa-toilet']);
      Facility::create(['name' => 'Window',  'icon' => 'fa-light fa-window-frame']);
      Facility::create(['name' => 'BBQ facilities', 'icon' => 'fa-solid fa-grill-hot']);
      Facility::create(['name' => 'Swimming pool',  'icon' => 'fa-solid fa-person-swimming']);
      Facility::create(['name' => 'Bar', 'icon' => 'fa-regular fa-martini-glass']);

      PaymentType::create([
         'name' => 'ovo'
      ]);

      PaymentType::create([
         'name' => 'dana'
      ]);

      Transaction::create([
         'user_id' => 1,
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