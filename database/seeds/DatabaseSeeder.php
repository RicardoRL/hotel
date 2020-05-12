<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncatetables([
          'rooms',
          'electronic_cards'
        ]);

        $this->call(RoomSeeder::class);
        $this->call(ElectronicCardSeeder::class);
    }

    protected function truncatetables(array $tables) // Tablas de areglo que queremos vaciar
    {
        foreach ($tables as $table) {
           DB::table($table)->truncate();
        }
    }
}
