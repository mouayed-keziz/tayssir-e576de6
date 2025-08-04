<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //
        // 0. Seed geography data first (Wilaya and Commune)
        $this->call([
            WilayaCommuneSeeder::class,
            ShieldSeeder::class,
            GuestSubscriptionSeeder::class
        ]);
    }
}
