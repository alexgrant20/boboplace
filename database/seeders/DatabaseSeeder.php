<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Facility;
use App\Models\Hotel;
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

      City::create([
         'name' => 'Jakarta'
      ]);

      Hotel::create([
         'name' => 'Mariot Jowo',
         'rating' => '4',
         'price' => '500500',
         'full_address' => 'Jalan marioto jowo',
         'city_id' => 1,
      ]);

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

      Facility::create(['name' => 'wi-fi']);
      Facility::create(['name' => 'toilet']);
      Facility::create(['name' => 'window']);
      Facility::create(['name' => 'panorama-view']);

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