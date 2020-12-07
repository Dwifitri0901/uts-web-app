@extends('tema.master')

@section("content")
<h1>Form Pemesanan Tempat</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route("pemesanan_tambah") }}" method="POST" enctype="multipart/form-data">
                @csrf
        
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda">

        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" placeholder="Masukan tanggal ">

        <label for="nohp">No Handphone</label>
        <input type="text" name="nohp" class="form-control" placeholder="Masukan Nomor Handphone Anda">

        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" class="form-control" placeholder="Masukan Jumlah Orang">

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

 @endsection