@extends('layouts.master_user')

@section('content')
    <div class="custom-modal position-absolute start-50 top-50 translate-middle">
        <div class="custom-modal-body p-5 py-4 rounded" style="background-color: #FFC2AB">
            <div class="about-us mb-3">
                <div class="about-us-title fw-bold fs-4">
                    About Us
                </div>

                <div>
                    Sistem pakar ini dibangun untuk membantu user/teknisi
                    dalam mendiagnosis kerusakan hardware pada
                    laptop/komputer
                </div>
            </div>

            <div class="about-us">
                <div class="about-us-title fw-bold fs-4">
                    Anggota Kelompok
                </div>

                <div class="about-us-member">
                    <ul>
                        <li>Atras Shalhan</li>
                        <li>Ela Setiorini</li>
                        <li>Muhammad Billy Hasman</li>
                        <li>Nevada Nayendra Pratama Ginting</li>
                        <li>Steven Liong</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <img class="w-100 position-absolute start-0 top-0 h-100" src="{{ asset('img/about_us.png') }}" alt="Background Image">
@endsection
