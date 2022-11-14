@extends('layouts.master_user')

@section('content')
    <div>
        <img class="w-100 position-absolute start-0 top-0 h-100" src="{{ asset('img/background_home.png') }}" alt="Background Image">

        <div class="position-absolute top-50 title">
            <div class="fw-bold fs-3">
                Expert System
            </div>
            <div class="fs-4">
                <div>Aplikasi untuk mendiagnosis</div>
                <div>kerusakan Komputer</div>
            </div>

            @auth
                <a class="btn btn-primary mt-2" href="{{route("user.choose_symptom")}}">Mulai Konsultasi</a>
            @endauth
        </div>
    </div>
@endsection
