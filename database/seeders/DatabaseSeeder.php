<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;

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
  }
}