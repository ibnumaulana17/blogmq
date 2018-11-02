<?php

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            'id' => 1,
            'nama_jurusan' => 'RPL',
            'keterangan' => 'bla bla bla '

        ]);
    }
}
