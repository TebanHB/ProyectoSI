<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(user::class);
        $this->call(telefono::class);
        $this->call(pago::class);
        $this->call(credito::class);
        $this->call(compromiso::class);
        $this->call(contado::class);
        $this->call(manzana::class);
        $this->call(contrato::class);
        $this->call(mora::class);
        $this->call(cuota::class);
        $this->call(terreno::class);
        $this->call(vende::class);
        $this->call(reserva::class);
        $this->call(bitacora::class);
        $this->call(notas::class);

    }
}
