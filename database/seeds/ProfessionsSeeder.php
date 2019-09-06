<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;
class ProfessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ///DB::insert('INSERT INTO professions (title) VALUES (:title) ',['title' => 'Desarrollador back-end']);

      // DB::table('professions')->insert([
      //   'title' => 'Desarrollador back-end'
      // ]);

      Profession::create([
        'title' => 'Desarrollador back-end'
      ]);

      Profession::create([
        'title' => 'Desarrollador front-end'
      ]);

      Profession::create([
        'title' => 'Diseñador web'
      ]);

    }
}
