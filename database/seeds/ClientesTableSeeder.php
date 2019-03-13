<?php

use Illuminate\Database\Seeder;
use App\Cliente;
class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            factory(Cliente::class, 8000000 )->create();
        }
    }
}
