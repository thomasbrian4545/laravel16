<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    public function all()
    {
        $jurusans = DB::select('SELECT * FROM jurusans');
        foreach ($jurusans as $jurusan) {
            echo "$jurusan->id | $jurusan->nama | $jurusan->kepala_jurusan | ";
            echo "$jurusan->daya_tampung <br>";
        }
    }

    public function find()
    {
        $jurusan = Jurusan::find(1);
        echo "Jurusan $jurusan->nama <br>";
        echo "Nama Kepala Jurusan : $jurusan->kepala_jurusan <br>";
        echo "Daya Tampung : $jurusan->daya_tampung orang <hr>";
        echo "## Daftar Mahasiswa ##";
        echo "<br><br>";
        foreach ($jurusan->mahasiswas as $mahasiswa) {
            echo "$mahasiswa->nama ($mahasiswa->nim) <br>";
        }
    }

    public function allJoin()
    {
        $jurusans = Jurusan::all();

        foreach ($jurusans as $jurusan) {
            echo "Jurusan $jurusan->nama ($jurusan->daya_tampung orang)<br> ";
            echo "Kepala Jurusan: $jurusan->kepala_jurusan <br> ";
            echo "Mahasiswa: ";
            foreach ($jurusan->mahasiswas as $mahasiswa) {
                echo "$mahasiswa->nama ($mahasiswa->nim), ";
            }
            echo "<hr>";
        }
    }
}
