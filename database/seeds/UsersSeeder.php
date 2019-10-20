<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profession;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$profesionas=DB::select('SELECT id from professions WHERE title = "Desarrollador back-end"');
        //$profesiones=DB::select('SELECT id from professions WHERE title = ?',['Desarrollador back-end']);

        /*$profesion=DB::table('professions')
        ->where('title','=','Desarrollador back-end')
        ->first();*/

        /*$profesionId = DB::table('professions')
        ->where('title' , 'Desarrollador back-end')
        ->value('id');*/

        factory(User::class)->create([
          'name'=>'Joel'
        ]);

        $id = Profession::whereTitle('Desarrollador back-end')->value('id');
        factory(User::class)->create([
          'name' => 'Gabriel',
          'email' => 'gabriel.viloria0812@gmail.com',
          'password' => bcrypt('laravel'),
          'profession_id' => $id
        ]);
        factory(User::class)->create([
          'profession_id' => $id
        ]);
        factory(User::class,40)->create();
    }
}
