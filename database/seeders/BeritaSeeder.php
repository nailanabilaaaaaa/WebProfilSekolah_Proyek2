<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'title' => 'Kemendikbudristek Dukung Strategi Pengendalian Covid-19 yang Lebih Aktif',
            'content' => 'Jakarta, 27 September 2021 --- Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) siap berkolaborasi dengan Kementerian Kesehatan (Kemenkes) untuk penerapan strategi pengendalian Covid-19 yang lebih aktif.
             Yang pertama adalah memastikan pelaksanaan tes acak di satuan pendidikan. Kemudian, integrasi aplikasi PeduliLindungi pada satuan pendidikan untuk menghasilkan data yang valid. Dengan data surveilans yang lebih baik, Mendikbudristek menegaskan untuk menutup sekolah-sekolah penyelenggara pembelajaran tatap muka (PTM) terbatas dengan kasus terkonfirmasi positif (positivity rate) di atas lima persen.
             "Secara klinis dan secara statistik jauh lebih valid, jauh lebih jelas sasarannya, dan tidak merugikan (sekolah yang bisa menjaga disiplin protokol kesehatan)," tuturnya. Untuk itu, pemerintah akan mengubah strategi menjadi strategi pelacakan kasus secara aktif (active case finding). Di mana sebelumnya, pelacakan menargetkan kepada orang-orang bergejala, maka ke depan akan diubah menjadi lebih aktif melakukan pelacakan kontak (contact tracing) dan surveilans (survei).
              "Kita akan lakukan testing sekitar 1,7 juta per bulan, atau sekitar 30 ribu orang per hari," jelasnya. Kemudian, bilamana ditemukan kasus positif di sekolah penyelenggara PTM terbatas, maka dilakukan prosedur isolasi dan karantina. Bilamana kasus terkonfirmasi positif mencapai satu sampai dengan lima persen, maka dilakukan tes untuk semua rombongan belajar (rombel) dan semua rombongan belajar dikarantina di rumah.',
        ]);
        
    }
}
