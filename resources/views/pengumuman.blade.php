@extends('layouts.main')
@inject('carbon', 'Carbon\Carbon')
@section('container')
    <div class="container mt-5">
        <div class="row g-5">
            <h1>Pengumuman</h1>
            <hr>
            @foreach ($pengumuman as $item)
                @php
                    $datetime = $item->tanggal;
                @endphp
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="bg-white col-lg-2 col-md-12 col-sm-12 card-header text-center">
                            <div class="event-date">
                                <h4 class="fs-1">{{ $carbon::parse($datetime)->format('d') }}</h4>
                                <span>{{ $carbon::parse($datetime)->format('M Y') }}</span>
                            </div>

                            <span class="event-time">{{ $carbon::parse($datetime)->toTimeString() }} WIB</span>
                        </div>
                        <div class="col-lg-10 col-md-12 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
