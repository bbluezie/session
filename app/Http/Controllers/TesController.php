<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    //menampilkan isi session
    public function tampilkanSession(Request $request) {
        if
           ($request->session()->has('nama') & 
            $request->session()->has('kelas') &
            $request->session()->has('alamat') &
            $request->session()->has('hobi'))
        { 
            $nama = $request->session()->get('nama');
            $kelas = $request->session()->get('kelas');
            $alamat = $request->session()->get('alamat');
            $hobi = $request->session()->get('hobi');

            echo "Nama: " . $nama . "<br>";
            echo "Kelas: " . $kelas ."<br>";
            echo "Alamat: " . $alamat ."<br>";
            echo "Hobi: " . $hobi ;
        }else{
            echo 'Tidak ada data nama atau alamat dalam session.';
        }
    }

    //membuat session
    public function buatSession(Request $request) {
        $request->session()->put('nama', 'Bluzie');
        $request->session()->put('kelas', 'RPL');
        $request->session()->put('alamat', 'Anggrek');
        $request->session()->put('hobi', 'Drakor');
        echo "Data telah ditambahkan ke session.";
    }

    //menghapus session
    public function hapusSession(Request $request) {
        $request->session()->forget('nama');
        $request->session()->forget('kelas');
        $request->session()->forget('alamat');
        $request->session()->forget('hobi');
        echo "Data telah dihapus dari session.";
    }
}
