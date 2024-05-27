<?php

namespace Database\Seeders;
use Database\Factories\ProfilesfactoryFactory;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Hash; 
class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::factory(60)->create();

        /*DB::table('profiles')->insert([
            'name'=>str::random(20),
            'email'=>str::random(10)."@gmail.com",
            'password'=> Hash::make('password'),
            'bio'=>str::random(200),

        ]);*/
    }
}