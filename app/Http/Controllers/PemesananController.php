<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class PemesananController extends Controller
{
    public function pemesanan()
    {
        return view('pemesanan.pemesanan');
    }
 
    public function tambah(Request $request)
    {
        $validasi = $request->validate([
            "nama" => ["required"],
            "tanggal" => ['required'],
            "nohp" => ['numeric'],
            "jumlah" => ['required'],
        ]);

        echo $request->get("nama"), "<br>";
        echo $request->get("tanggal"), "<br>";
        echo $request->get("nohp"), "<br>";
        echo $request->get("jumlah"), "<br>";

        echo "<br>Pemesanan anda sedang di proses";
    }
}