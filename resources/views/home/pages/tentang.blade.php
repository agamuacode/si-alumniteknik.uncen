@extends('home.layouts.app')
@section('title')
    Tentang Alumni
@endsection
@section('content')
    @include('home.layouts.nav')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Tentang Alumni</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="/" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item active text-white fw-bolder"> Tentang Alumni </li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid about py-5" id="tentang">
        <div class="container py-5">



            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="asset-visitor/img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="section-about-title pe-3">Tentang Kami</h5>
                    <h1 class="mb-4">Welcome to <span class="text-primary">SI Alumni Teknik Uncen Jayapura</span></h1>
                    <p class="mb-4 bg-primary p-3 rounded text-white">Sistem Informasi Alumni Teknik Tingkat
                        Fakultas dan Jurusan Di Universitas adalah sebuah platform digital yang dirancang untuk
                        mendukung pengelolaan data Alumni di Universitas Cenderawasih tersebut. Sistem ini
                        bertujuan untuk memudahkan pemantauan kegiatan, komunikasi, di tingkat Alumi dengan lebih efisien..
                    </p>
                </div>
            </div>

            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-md-3 m-2">

                    <div class="shadow p-3 text-center rounded">
                        <h4>Fakultas<i class="fas fa-book"></i></i></h4>
                        <p>Jumlah Fakultas {{ $wilayah }}</p>
                    </div>

                </div>

                <div class="col-md-3 m-2">

                    <div class="shadow p-3 text-center rounded">
                        <h4>Jurusan <i class="fas fa-school"></i></i></h4>
                        <p>Jumlah Jurusan {{ $gereja }}</p>
                    </div>

                </div>

                <div class="col-md-3 m-2">

                    <div class="shadow p-3 text-center rounded">
                        <h4>Anggota Alumni <i class="fas fa-users"></i></i></h4>
                        <p>Jumlah Alumni {{ $pemuda }}</p>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- About End -->
@endsection
