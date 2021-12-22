<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class gurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nip' => Integer::random(11),
            'nama_guru' => Str::random(10).'@gmail.com',
            'mapel' => Str::make('password'),
        ]);
    }
}
