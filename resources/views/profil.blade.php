@extends('layouts.main')
@section('container')

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">

        <!-- Identitas Start -->

        <div class="card mb-3" id="identitas">
            <div class="card-header text-center bg-dark">
                <h2 class="text-white">Identitas Sekolah</h2>
            </div>
            <div class="row g-5 align-items-top">
                <div class="col-lg-5 col-md-5 wow fadeInUp align-bottom" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/icon/logo.png">
                </div>
                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Sekolah</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->nama }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">NPSN</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->npsn }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">NSS</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->nss }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Akreditasi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->akreditasi }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Kepala Sekolah</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Robert Kiyosaki
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->alamat }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Desa/Kelurahan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->desa }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Kecamatan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->kecamatan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Kabupaten</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->kabupaten }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Provinsi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->provinsi }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $profil->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Website</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <a href="{{ $profil->web }}">{{ $profil->web }}/</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Identitas End -->


        <!-- Visi Misi Start -->
        <div class="card my-5" id="visimisi">
            <div class="card-header text-center bg-dark">
                <h2 class="text-white">Visi & Misi</h2>
            </div>
            <div class="row g-5 align-items-top">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row justify-content-end">
                                    <!-- <div class="col-12 text-end">
                                                <h4><strong>Misi:</h4>
                                            </div> -->
                                    <div class="col-md-4 col-lg-4 text-center" style="align-self: center;">
                                        <h4 class="fs-1 fw-bolder">Misi</h4>
                                    </div>
                                    <div class="col-md-8 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                                        <p style="text-align: justify;">{{ $profil->misi }}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="row justify-content-start">
                                    <!-- <div class="col-12 text-end">
                                                <h4><strong>Misi:</h4>
                                            </div> -->
                                    <div class="col-md-4 col-lg-4 text-center order-lg-last order-md-last"
                                        style="align-self: center;">
                                        <h4 class="fs-1 fw-bolder">Visi</h4>
                                    </div>
                                    <div class="col-md-8 col-lg-8 order-lg-first order-md-first wow fadeInUp"
                                        data-wow-delay="0.1s">
                                        <p style="text-align: justify;">{{ $profil->visi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visi Misi End -->

        <!-- Testimonial Start -->
        <div class="container mt-5" id="sejarah">
            <div class="row g-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Sejarah</p>
                    <h1 class="display-5 mb-5">Bagaimana SMAN 3 Kerinci Terbentuk?</h1>
                    <p class="mb-4">{{ $profil->sejarah }}</p>
                    <!-- <a class="btn btn-primary py-3 px-4" href="">See More</a> -->
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </div>
</div>
<!-- About End -->
@endsection