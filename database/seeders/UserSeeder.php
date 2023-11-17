<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin Users
        User::factory()->create([
            'name' => 'Admin Fabiano',
            'email' => 'fabiano.sbaratta@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Admin Luciana',
            'email' => 'luciana.procopio@icloud.com',
        ]);
        //Shark Users
        User::factory()->create([
            'name' => 'Shark ONE',
            'email' => 'shark_one@pana-workshop.eu',
        ]);
        User::factory()->create([
            'name' => 'Shark TWO',
            'email' => 'shark_two@pana-workshop.eu',
        ]);
        User::factory()->create([
            'name' => 'Shark THREE',
            'email' => 'shark_three@pana-workshop.eu',
        ]);
        //Fish Groups
        User::factory()->create([
            'name' => 'Fish Group RED',
            'email' => 'group_red@pana-workshop.eu',
        ]);
        User::factory()->create([
            'name' => 'Fish Group GREEN',
            'email' => 'group_green@pana-workshop.eu',
        ]);
        User::factory()->create([
            'name' => 'Fish Group YELLOW',
            'email' => 'group_yellow@pana-workshop.eu',
        ]);
        User::factory()->create([
            'name' => 'Fish Group BLUE',
            'email' => 'group_blue@pana-workshop.eu',
        ]);
    }
}
