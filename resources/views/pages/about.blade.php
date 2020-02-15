@extends('layouts.main')
@section('title', 'Tentang kami')
@section('content')
    
    <div class="container">
        <div class="row mt-5">
            <nav class="breadcrumb bg-white">
                <ul class="breadcrumb bg-white">
                    <li class="breadcrumb-item">
                        <a href="/" class="nav-links text-decoration-none text-dark">home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/about" class="nav-links text-decoration-none text-dark active font-weight-bold">about</a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm">
                <img src="{{url('frontend/images/studentbg.jpg')}}" height="70%" alt="">
            </div>
            <div class="col-sm">
                <h3>Aduan<span>Siswa</span></h3>
                <p>Merupakan  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloribus eligendi molestiaseius, animi voluptatibus repellat </p>
                <a href="/create/lapokan" class="btn btn-outline btn-primary">kirim laporan</a>
            </div>
        </div>
    </div>

@endsection