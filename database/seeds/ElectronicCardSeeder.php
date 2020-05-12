<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectronicCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0; $i<25; $i++)
      {
        DB::table('electronic_cards')->insert([
          'client_id' => NULL,
          'room_id' => NULL,
          'estado' => 0
        ]);
      }
    }
}
