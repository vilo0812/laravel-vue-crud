<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$profesiones=DB::select('SELECT id from professions WHERE title = "Desarrollador back-end"');
        //$profesiones=DB::select('SELECT id from professions WHERE title = ?',['Desarrollador back-end']);

        /*$profesion=DB::table('professions')
        ->where('title','=','Desarrollador back-end')
        ->first();*/

        /*$profesionId = DB::table('professions')
        ->where('title' , 'Desarrollador back-end')
        ->value('id');*/

        DB::table('users')->insert([
          'name' => 'Gabriel Viloria',
          'email' => 'gabriel.viloria0812@gmail.com',
          'password' => bcrypt('laravel'),
          'profession_id' => DB::table('professions')->whereTitle('Desarrollador back-end')->value('id')
        ]);
    }
}
