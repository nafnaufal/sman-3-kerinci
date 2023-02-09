@extends('layouts.main')
@inject('carbon', 'Carbon\Carbon')
@section('container')

    <div class="container mt-5">
        <div class="row g-5">
            <h1 class="text-center">Agenda</h1>
            <hr>

            @foreach ($agenda as $item)
                @php
                    $datetime = $item->tanggal;
                @endphp

                <div class="col-lg-6 col-md-6">
                    <div class="card p-3 mb-2">
                        <div class="row justify-content-end">
                            <div class="col-4 align-items-center">
                                <div class="ms-2 text-center">
                                    <h6>{{ $carbon::parse($datetime)->toDateString() }}</h6> <span>{{ $carbon::parse($datetime)->toTimeString() }} WIB</span>
                                </div>
                            </div>
                            <h3 class="heading text-center col-8">{{ $item->judul }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
