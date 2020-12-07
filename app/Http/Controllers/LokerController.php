<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class LokerController extends Controller
{
    public function loker()
    {
        return view('loker.form');
    }
 
    public function proses(Request $request)
    {
        $validasi = $request->validate([
            "nama" => ["required"],
            "nik" => ['required'],
            "umur" => ['numeric', "between:18,28"],
            "jenkel" => ['required'],
            'gambar' => ['file', "between:50,300"],
        ]);

        $nama_file = time().".".$request->file("gambar")->extension();

        $request->file("gambar")->move(public_path(), $nama_file);

        echo $request->get("nama"), "<br>";
        echo $request->get("nik"), "<br>";
        echo $request->get("umur"), "<br>";
        echo $request->get("jenkel"), "<br>";
        echo "<img src='/$nama_file'>"; 

        echo "<br>Pendaftaran sedang di proses";
    }
}