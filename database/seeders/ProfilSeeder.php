<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil')->insert([
            'profil_sekolah' => 'Sekolah adalah salah satu lembaga pendidikan formal. Sebagai suatu lembaga pendidikan formal, sekolah berperan sangat menentukan dalam rangka usaha untuk meningkatkan kwalitas pendidikan  Sekolah juga merupakan lembaga pendidikan yang selalu berinteraksi dengan  masyarakat sekitarnya. Sekolah memiliki satu tradisi yang kaya dengan keterlibatan orang tua siswa dan komunitasnya dalam penyelenggaraan pendidikan. Untuk memantapkan dan mengembangkan tradisi tersebut, maka dibentuklah satu lembaga yang dikenal dengan nama Komite Sekolah yang berkedudukan di satu satuan pendidikan, tidak terkecuali di SDN Bareng 1.
            SDN Bareng 1 juga sudah membentuk wadah tersebut sebagai mitra kerja sekolah guna bersama-sama ikut serta memajukan dunia pendidikan dan ikut serta juga memberikan informasi kepada masyarakat akan betapa pentingnya pendidikan untuk anak-anak kita sebagai penerus perjuangan bangsa ini. Untuk itu SDN Bareng 1 merumuskan visi, misi, serta motto guna mewujudkan hal tersebut. Visi, misi, dan motto yang dimaksud adalah sebagai berikut.',
            'motto_sekolah' => '“MAJU BERSAMA UNTUK MUTU PENDIDIKAN DI SD NEGERI BARENG 1”',
            'visi_sekolah' => 'Terwujudnya Manusia Beriman, Bertaqwa, Berbudi Luhur, Cerdas Dan Terampil Yang Berwawasan Lingkungan',
            'misi_sekolah' => 'Melaksanakan dan mengamalkan ajaran agama, berakhlak mulia (cerdas spiritual/olah hati). 
            Mengembangkan wawasan dalam kehidupan bermasyarakat (cerdas sosial).
            Melaksanakan pembelajaran dan bimbingan secara efisien dan efektif dalam berpikir ilmiah yang kritis, kreatif dan mandiri (cerdas intelektual/olah pikir).
            Mengembangkan potensi siswa dalam kemampuan mengekspresikan dan mengapresiasi keindahan dan harmoni (cerdas emosional/olah hati).
            Mengembangkan potensi fisik dan menanamkan sportivitas serta kesadaran hidup bersih dan sehat (cerdas kinestesis).',
            'tujuan_sekolah' => 'Mengamalkan ajaran agama dan berakhlak mulia dari hasil proses pembelajaran dan kegiatan pembiasaan. 
            Menjadikan peserta didik yang berkarakter dan berwawasan kebangsaan dalam kehidupan bermasyarakat, berbangsa dan bernegara.
            Memberikan dasar-dasar ilmu pengetahuan dan teknologi sebagai bekal peserta didik melanjutkan ke sekolah yang lebih tinggi.
            Meningkatkan dan mengembangkan pembelajaran ang inovatif dan kreatif melalui pengembangan kurikulum yang adaptif dan proaktif, berbudaya.
            Menghasilkan perangkat dan proses pembelajaran yang inovatif dan kreatif melalui pembelajaran aktif dan menyenangkan.
            Menghasilkan prestasi peserta didik dibidang akademik dan non akademik.
            Menjadikan peserta didik sebagai pelopor dan penggerak peduli lingkungan hidup, kebiasaan hidup bersih dan sehat.',
        ]);
    }
}
