@extends('layouts.master')

@section('assets')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/dashboard_admin.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="container-fluid d-flex p-0 flex-fill h-100">
        @include("templates.sidebar")

        <div class="content p-3 px-4 col-12 col-sm-9 col-md-10">
            <div class="title fs-5 mb-3">
                Expert System <span class="text-muted">| Diagnosis Kerusakan Komputer menggunakan metode Forward Chaining</span>
            </div>

            <div class="card-container d-flex flex-wrap">
                <div class="p-2 col-12 col-lg-4 col-sm-6 col-xxs-8">
                    <div class="card">
                        <h5 class="card-header d-flex justify-content-between px-4 align-items-center bg-danger text-white">
                            <i class="bi bi-shield-fill-plus fs-1"></i>

                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="fs-1 fw-normal">74</div>
                                <div class="text-center">Gejala</div>
                            </div>
                        </h5>
                        <a href="{{ route("data.gejala") }}"
                            class="card-body m-0 p-2 px-3 text-decoration-none d-flex justify-content-between align-items-center px-3">
                            <div>Selengkapnya</div>
                            <i class="bi bi-arrow-right-circle-fill text-danger fs-5"></i>
                        </a>
                    </div>
                </div>
                <div class="p-2 col-12 col-lg-4 col-sm-6 col-xxs-8">
                    <div class="card">
                        <h5 class="card-header d-flex justify-content-between px-4 align-items-center bg-primary text-white">
                            <i class="bi bi-virus fs-1"></i>

                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="fs-1 fw-normal">74</div>
                                <div class="text-center">Data Penyakit</div>
                            </div>
                        </h5>
                        <a href="{{ route("data.penyakit") }}"
                            class="card-body m-0 p-2 px-3 text-decoration-none d-flex justify-content-between align-items-center px-3">
                            <div>Selengkapnya</div>
                            <i class="bi bi-arrow-right-circle-fill text-primary fs-5"></i>
                        </a>
                    </div>
                </div>
                <div class="p-2 col-12 col-lg-4 col-sm-6 col-xxs-8">
                    <div class="card">
                        <h5 class="card-header d-flex justify-content-between px-4 align-items-center bg-success text-white">
                            <i class="bi bi-journal-text fs-1"></i>

                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="fs-1 fw-normal">74</div>
                                <div class="text-center">Riwayat</div>
                            </div>
                        </h5>
                        <a href="{{ route("data.riwayat") }}"
                            class="card-body m-0 p-2 px-3 text-decoration-none d-flex justify-content-between align-items-center px-3">
                            <div>Selengkapnya</div>
                            <i class="bi bi-arrow-right-circle-fill text-success fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
