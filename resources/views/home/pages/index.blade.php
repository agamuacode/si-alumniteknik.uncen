@extends('home.layouts.app')
@section('title')
    Beranda
@endsection
@section('content')
    @include('home.layouts.nav')


    <!-- About Start -->
    <div class="container-fluid about py-5" id="tentang">
        <div class="container py-5">



            <div class="row g-5 align-items-center">
                <div class="col-lg-12 text-center ">
                    <h1 class="mb-4">Welcome to <span class="text-primary">SI Alumni Teknik Uncen</span></h1>
                    <p class="mb-4 bg-primary p-3 rounded text-white shadow">Sistem Informasi Alumni Teknik Tingkat
                        Fakultas dan Jurusan Di Universitas adalah sebuah platform digital yang dirancang untuk
                        mendukung pengelolaan data Alumni di Universitas Cenderawasih tersebut. Sistem ini
                        bertujuan untuk memudahkan pemantauan kegiatan, komunikasi, di tingkat Alumi dengan lebih efisien.
                    </p>
                </div>
            </div>

            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-md-3 m-2">

                    <div class="shadow p-3 text-center rounded">
                        <h4>Fakultas <i class="fas fa-book"></i></i></h4>
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
                        <h4>Anggota Alumni<i class="fas fa-users"></i></i></h4>
                        <p>Jumlah Alumni {{ $pemuda }}</p>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- About End -->
@endsection
