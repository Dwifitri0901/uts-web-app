@extends('tema.master')

@section("content")
<h1>Form Loker</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route("proses") }}" method="POST" enctype="multipart/form-data">
                @csrf
        
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda">

        <label for="nik">Nik</label>
        <input type="text" name="nik" class="form-control" placeholder="Masukan Nik Anda">

        <label for="umur">Umur</label>
        <input type="text" name="umur" class="form-control" placeholder="Masukan Umur Anda">

        <label for="jenkel">Jenis kelamin</label>
        <input type="text" name="jenkel" class="form-control" placeholder="Masukan Jenis Kelamin Anda">

        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" class="form-control" placeholder="Masukan Gambar Anda">

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

 @endsection