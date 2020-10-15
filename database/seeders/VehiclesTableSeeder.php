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
                'model' => 'Fiat Toro 2021',
                'color' => 'Prata',
                'owners' => '0',
                'type' => 'Carro',
                'value' => '99990',
                'km' => '0',
                'description' => 'A Fiat Toro 2021 surgiu como uma picape compacta com porte intermediário entre as leves e as médias. A Fiat Toro é feita inteiramente em monobloco e utilizando uma plataforma global da FCA de origem na própria marca, sendo esta compartilhada com os Jeep Renegade e Compass..',
                'user_id' => '5',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
             1 => [
                'model' => 'hevrolet Onix 2018',
                'color' => 'Branco',
                'owners' => '1',
                'type' => 'Carro',
                'value' => '41690',
                'km' => '670',
                'description' => 'O Chevrolet Onix 2018, lançado em 2017, já trouxe o visual e interior novos do compacto, além de pequenas mudanças e a versão Effect. O Onix 2018 é uma boa opção de carro compacto no mercado de seminovos. Em todas as configurações, já saiu equipado com direção elétrica, ar-condicionado e vidros dianteiros elétricos.',
                'user_id' => '3',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
             2 => [
                'model' => 'Toyota HiluxS W4 2020',
                'color' => 'Preta',
                'owners' => '2',
                'type' => 'Carro',
                'value' => '120466',
                'km' => '2600',
                'description' => 'Toyota HiluxS W4 2020 Adicionar a transmissão automática de 6 posições eleva o preço para R$ 125.990, R$ 550 mais do que há alguns meses. A versão topo de linha com motorização flex é a Hilux SRV.',
                'user_id' => '3',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
    
             3 => [
                'model' => 'kawasaki 300',
                'color' => 'verde',
                'owners' => '1',
                'type' => 'Moto',
                'value' => '18000',
                'km' => '1000',
                'description' => 'Em resumo, a Ninja 300 mudou tanto em relação a 250, que podemos chamá-la de uma nova moto. Mas a Kawasaki cobra um preço por toda essa "novidade": enquanto a antiga versão de 250 cc .',
                'user_id' => '6',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
    
             4 => [
                'model' => 'Honda CB 1000R ',
                'color' => 'Cinza',
                'owners' => '0',
                'type' => 'Moto',
                'value' => '58944',
                'km' => '0',
                'description' => 'A Honda CB 1000R foi lançada no Brasil nesta quarta-feira (27) por preço de R$ 58.690. Um dos modelos mais aguardados do ano, o moto da categoria naked chega em nova geração com motor de 998,4 cc e 141,4 cavalos de potência.',
                'user_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],

                5 => [
                    'model' => 'Novo HB20 ',
                    'color' => 'Branco',
                    'owners' => '0',
                    'type' => 'Carro',
                    'value' => '25450',
                    'km' => '0',
                    'description' => 'Agora, o Novo HB20 aumenta de tamanho, ganha motor potente e melhora muitas coisas que o anterior estava em pendência com o consumidor. Das novidades, a principal é a redenção da Hyundai com o motor Kappa 1.0 T-GDi, finalmente a bordo do vice-líder de mercado e ainda com tecnologia flex.',
                    'user_id' => '5',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")],
            ];
        Vehicle::insert($vehicle);
        }

    }

