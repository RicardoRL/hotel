<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $count = 100;
      for($i=0; $i<10; $i++)
      {
        DB::table('rooms')->insert([
          'numero' => $count,
          'tipo' => 'sencilla',
          'precio' => 500,
          'disponible' => 1,
          'en_uso' => 0,
          'habilitada' => 1,
          'limpieza' => 1
        ]);
        $count++;
      }

      $count = 200;
      for($i=0; $i<10; $i++)
      {
        DB::table('rooms')->insert([
          'numero' => $count,
          'tipo' => 'doble',
          'precio' => 800,
          'disponible' => 1,
          'en_uso' => 0,
          'habilitada' => 1,
          'limpieza' => 1
        ]);
        $count++;
      }

      $count = 300;
      for($i=0; $i<5; $i++)
      {
        DB::table('rooms')->insert([
          'numero' => $count,
          'tipo' => 'suite',
          'precio' => 1500,
          'disponible' => 1,
          'en_uso' => 0,
          'habilitada' => 1,
          'limpieza' => 1
        ]);
        $count++;
      }
    }
}
