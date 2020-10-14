<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             
    $users = [
        0 => [
            'name' => 'Grupo Volkswagen',
            'email' => 'volkswagen@gmail.com', 
            'password' => bcrypt('volkswagen2020'),
            'number' => '085992765185',
            'city' => 'Recife',
            'state' => 'Pernambuco',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
         1 => [
            'name' => 'Grupo Toyota',
            'email' => 'toyota@gmail.com',
            'password' => bcrypt('toyota2020'),
            'number' => '085992765276',
            'city' => 'João pessoa',
            'state' => 'Paraiba',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),],
         2 => [
             'name' => 'General Motors',
             'email' => 'generalmotors@gmail.com',
             'password' => bcrypt('generalmotors2020'),
             'number' => '081882653745',
             'city' => 'Igarassu',
             'state' => 'Pernambuco',
             'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")],

         3 => [
             'name' => 'Grupo Hyundai-Kia',
             'email' => 'hyundai@gmail.com', 
             'password' => bcrypt('hyundai2020'),
             'number' => '081992765185',
             'city' => 'São paulo',
             'state' => 'São paulo',
             'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")],

         4 => [
             'name' => 'Grupo Honda',
             'email' => 'honda@gmail.com', 
             'password' => bcrypt('honda2020'), 
             'number' => '082992765185',
             'city' => 'Rio de Janeiro',
             'state' => 'Rio de Janeiro',
             'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")],

         5 => [
             'name' => 'Suzuki-Maruti',
             'email' => 'suzukimaruti@gmail.com', 
             'password' => bcrypt('suzuki2020'),
             'number' => '019992765185',
             'city' => 'Igarassu',
             'state' => 'Pernambuco',
              'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")],
    ];
    User::insert($users);
    }
}
