@extends('layouts.master_user')

@section('content')
    <div class="custom-modal mx-auto mt-4 mb-3" style="width: 70%;">
        <div class="custom-modal-body p-5 py-4 rounded" style="background-color: rgba(231, 210, 173, 1);">
            <div class="choose-symptom-title fw-bold fs-4 text-center mb-2">
                Pilih Gejala
            </div>

            <div class="choose-symptom-list mb-3">
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                    <label class="form-check-label" for="flexCheckDefault1">
                        C01 | Apakah laptop tidak menampilkan gambar pada layar?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                    <label class="form-check-label" for="flexCheckDefault2">
                        C02 | Apakah mesin tidak hidup?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                    <label class="form-check-label" for="flexCheckDefault3">
                        C03 | Apakah indikator lampu yang terhubung pada charger laptop mati?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                    <label class="form-check-label" for="flexCheckDefault4">
                        C01 | Apakah laptop tidak menampilkan gambar pada layar?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                    <label class="form-check-label" for="flexCheckDefault5">
                        C04 | Apakah laptop mati ketika dicolokkan ke charger?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                    <label class="form-check-label" for="flexCheckDefault6">
                        C05 | Apakah masih bisa nenampilkan gambar apabila dihubungkan ke LCD eksternal melalui VGA card?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                    <label class="form-check-label" for="flexCheckDefault7">
                        C06 | Apakah laptop tidak menampilkan gambar pada layar?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                    <label class="form-check-label" for="flexCheckDefault8">
                        C06 | Apakah laptop tidak menampilkan gambar pada layar?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                    <label class="form-check-label" for="flexCheckDefault9">
                        C07 | Apakah mesin tidak hidup?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
                    <label class="form-check-label" for="flexCheckDefault10">
                        C08 | Apakah indikator lampu yang terhubung pada charger laptop mati?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                    <label class="form-check-label" for="flexCheckDefault11">
                        C09 | Apakah laptop mati ketika dicolokkan ke charger?
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                    <label class="form-check-label" for="flexCheckDefault12">
                        C05 | Apakah masih bisa nenampilkan gambar apabila dihubungkan ke LCD eksternal melalui VGA card?
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <a class="btn btn-primary" href="{{route("user.result")}}">
                    Submit
                </a>
            </div>
        </div>
    </div>

    <img class="w-100 position-absolute start-0 top-0" style="height: 110%" src="{{ asset('img/choose_symptom.png') }}"
        alt="Background Image">
    <div class="w-100 position-absolute start-0 top-0 h-100" style="background-color: rgba(0,0,0,.2); z-index:-1">
    @endsection
