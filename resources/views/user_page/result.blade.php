@extends('layouts.master_user')

@section('content')
    <div class="custom-modal mx-auto mt-4 mb-3" style="width: 70%;">
        <div class="custom-modal-body p-5 py-4 rounded" style="background-color: rgba(231, 210, 173, 1);">
            <div class="choose-symptom-title fw-bold fs-4 text-center mb-2">
                Hasil Diagnosis
            </div>

            <div class="result mb-3 d-flex justify-content-evenly">
                <div class="p-2 col-4">
                    <div class="modal-1 rounded p-3" style="background-color: rgba(228, 186, 109, 1);">
                        <div class="result-title fw-semibold fs-5">
                            Rusak Pada IC Power
                        </div>

                        <div class="grafik">
                            Grafik
                        </div>
                    </div>
                </div>

                <div class="p-2 col-4">
                    <div class="modal-2 rounded p-3" style="background-color: rgba(228, 186, 109, 1);">
                        <div class="result-title fw-semibold fs-5">
                            Rusak pada IC VGA
                        </div>

                        <div class="grafik">
                            Grafik
                        </div>
                    </div>
                </div>

                <div class="p-2 col-4">
                    <div class="modal-3 rounded p-3" style="background-color: rgba(228, 186, 109, 1);">
                        <div class="result-title fw-semibold fs-5">
                            Rusak pada Inverter/ gangguan pada fleksibel kabel
                        </div>

                        <div class="grafik">
                            Grafik
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img class="w-100 position-absolute start-0 top-0" style="height: 110%" src="{{ asset('img/choose_symptom.png') }}"
        alt="Background Image">
    <div class="w-100 position-absolute start-0 top-0 h-100" style="background-color: rgba(0,0,0,.2); z-index:-1">
    @endsection
