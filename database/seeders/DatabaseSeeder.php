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

      File::create([]);


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
