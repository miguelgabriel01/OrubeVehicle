<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle = [
            0 => [
                'model' => 'BMW 2000',
                'color' => 'black',
                'owners' => '2',
                'type' => 'Carro',
                'value' => '20000',
                'km' => '3000',
                'description' => 'Carro veloz e potente.',
                'user_id' => '5',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
             1 => [
                'model' => 'hb20',
                'color' => 'vermelho',
                'owners' => '1',
                'type' => 'Carro',
                'value' => '3000',
                'km' => '9000',
                'description' => 'Carro veloz e potente.',
                'user_id' => '3',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
             2 => [
                'model' => 'Ferrari GT',
                'color' => 'amarelo',
                'owners' => '1',
                'type' => 'Carro',
                'value' => '20000',
                'km' => '3000',
                'description' => 'Carro veloz e potente.',
                'user_id' => '3',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
    
             3 => [
                'model' => 'Cb600',
                'color' => 'verde',
                'owners' => '3',
                'type' => 'Moto',
                'value' => '76000',
                'km' => '1000',
                'description' => 'Moto veloz e potente.',
                'user_id' => '6',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
    
             4 => [
                'model' => 'CB1200',
                'color' => 'conza',
                'owners' => '0',
                'type' => 'Moto',
                'value' => '7600',
                'km' => '50',
                'description' => 'Moto veloz e potente.',
                'user_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],

                5 => [
                    'model' => 'CB900 rtz',
                    'color' => 'preta',
                    'owners' => '0',
                    'type' => 'Moto',
                    'value' => '25450',
                    'km' => '0',
                    'description' => 'Moto veloz e potente.',
                    'user_id' => '5',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")],
            ];
        Vehicle::insert($vehicle);
        }

    }

