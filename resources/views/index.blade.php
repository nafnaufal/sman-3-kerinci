@extends('layouts.main')
@section('container')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @php
                    $i = 0;
                    $active = '';
                @endphp
                @foreach ($carousell as $item)
                    @php
                        $i++;
                        
                        if ($i == 1) {
                            $active = 'active';
                        } else {
                            $active = '';
                        }
                    @endphp

                    <div class="carousel-item {{ $active }}">
                        <img class="w-100" src="storage/{{ $item->media }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h1 class="display-1 text-white mb-5 animated slideInDown">{{ $item->deskripsi }}
                                        </h1>
                                        <!-- <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/icon/logo.png">
                </div>
                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-1 text-primary mb-0">25</h1>
                    <p class="text-primary mb-4">Year of Experience</p>
                    <h1 class="display-5 mb-4">We Make Your Home Like A Garden</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <!-- <a class="btn btn-primary py-3 px-4" href="">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll"
        data-image-src="https://yaleschoolnj.com/wp-content/uploads/2022/08/home-slide-01-aspect-ratio-1920-600.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">34</h1>
                    <span class="fs-5 fw-semi-bold text-light">Guru</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">248</h1>
                    <span class="fs-5 fw-semi-bold text-light">Siswa</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">61</h1>
                    <span class="fs-5 fw-semi-bold text-light">Staff</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">5</h1>
                    <span class="fs-5 fw-semi-bold text-light">Agenda</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Pimpinan</p>
                <h1 class="display-5 mb-5">Kepala & Wakil Sekolah</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Doris Jordan</h4>
                            <p class="text-primary">Kepala Sekolah</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Doris Jordan</h4>
                            <p class="text-primary">Wakil Kepala Sekolah Bidang Kurikulum</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Johnny Ramirez</h4>
                            <p class="text-primary">Wakil Kepala Sekolah Bidang Kesiswaan</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Diana Wagner</h4>
                            <p class="text-primary">Wakil Kepala Sekolah Bidang Sarana Prasarana</p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Alumni Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Alumni</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($alumni as $alumn)
                            <div class="testimonial-item">
                                <img class="img-fluid rounded mb-3" src="img/testimonial-1.jpg" alt="">
                                <p class="fs-5">{{ $alumn->quote }}
                                </p>
                                <h4>{{ $alumn->nama }}</h4>
                                <span>{{ $alumn->pencapaian }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alumni End -->
@endsection
