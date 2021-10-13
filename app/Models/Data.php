<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [

        'pendidikan1',
        'jumlah1',
        'tersertifikasi1',
        'pendidikan2',
        'jumlah2',
        'tersertifikasi2',
        'tahun',
        'kelas1',
        'kelas2',
        'kelas3',
        'kelas4',
        'kelas5',
        'kelas6',
        'jumlah',
    ];
}
