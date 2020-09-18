<?php


namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run() {
        User::create(['name' => 'Cristian Quispe Ramirez', 'email' => 'cristian.quispe@globant.com', 'password' => bcrypt('nfmc123')]);
    }
}
