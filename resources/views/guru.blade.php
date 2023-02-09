@extends('layouts.main')
@section('container')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- Identitas Start -->

            <div class="card mb-3" id="identitas">
                <div class="card-header text-center">
                    <h2>Tenaga Kependidikan</h2>
                </div>
                <div class="row d-flex justify-content-around">

                    @foreach ($guru as $item)
                        <div class="col-xs-12 col-sm-6 col-md-3 m-2">
                            <div class="container">
                                <img src="img/team-1.jpg" class="img-fluid rounded border-2" alt="#">
                                <p class="text-center mt-3"><span>{{ $item->nama }}</span>
                                    <br>
                                    {{ $item->nip }}
                                    <br>
                                    {{ $item->jenis }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- About End -->
    @endsection
