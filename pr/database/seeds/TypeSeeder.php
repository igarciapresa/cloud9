<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

//php artisan db:seed --class=TypeSeeder
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types =['normal', 'agua', 'eléctrico', 'lucha', 'tierra',
            'psíquico', 'roca', 'dragón', 'acero', 'fuego',
            'planta', 'hielo', 'veneno', 'volador', 'bicho',
            'fantasma', 'siniestro', 'hada'
        ];
        $faker = Factory::create();
        foreach($types as $type)
        {
            try
            {
                App\Type::create([
                    'type' => $type
                ]);
            }
            catch(\Illuminate\Database\QueryException $e)
            {}
        }
    }
}
