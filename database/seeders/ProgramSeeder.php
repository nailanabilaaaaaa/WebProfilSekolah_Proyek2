<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program')->insert([
            'no1' => '1',
            'kegiatan1' => '5 S (Senyum, Sapa, Salim, Sopan, santun) di gerbang depan sekolah',
            'no2' => '2',
            'kegiatan2' => 'Upacara bendera',
            'no3' => '1',
            'lainnya' => 'Kegiatan Ekstrakurikuler, yang merupakan program dari kesiswaan untuk pengembangan bakat dan minat peserta didik serta mempersiapkan siswa dalam lomba di bidang non akademik',
        ]);
    }
}
