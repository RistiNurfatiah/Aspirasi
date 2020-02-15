@extends('layouts.main')
    
@section('title', 'Form laporan')
@section('content')
    
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="/success" method="POST">
                        @csrf
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap...">
                        @error('namalengkap')
                        <div class="text-danger"> 
                            {{$message}}
                        </div>
                        @enderror
                        <label>KELUHAN</label>
                        <select name="keluh" id="keluh" class="form-control">
                            <option value="Kebersihan">Kebersihan</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Administrasi">Administrasi</option>
                        </select>
                        <label>Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option hidden>kelass</option>
                            <option value="X">X</option>
                            <option value="X">XI</option>
                            <option value="X">XII</option>
                        </select>
                        <label>Nomor Handphone</label>
                        <small>note: wajib diisi</small>
                        <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" name="nomorhp" id="nomorhp" placeholder="masukan nomor hp">
                        <label>Jenis Kelamin</label>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option value="laki laki">laki laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="tidakdisebutkan">Tidak DiSebutkan></option>
                        </select>
                        <label>Komentar</label>
                        <textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control"></textarea>
                        <button type="submit" class="btn btn-outline-primary float-right mt-3 @error('komentar') is-invalid @enderror">Kirim Laporan!</button>
                        @error('komentar')
                        <div class="text-danger"> 
                            {{$message}}
                        </div>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection