@extends('layouts.master_user')

@section('content')
    <div class="custom-modal mx-auto mt-4 mb-3" style="width: 70%;">
        <div class="custom-modal-body p-5 py-4 rounded" style="background-color: rgba(231, 210, 173, 1);">
            <div class="choose-symptom-title fw-bold fs-4 text-center mb-2">
                Hasil Diagnosis
            </div>

            <div class="result mb-3 d-flex flex-wrap justify-content-evenly">
                @foreach ($diseases as $disease)
                    <div class="p-2 col-4">
                        <div class="rounded p-3" style="background-color: rgba(228, 186, 109, 1);">
                            <div class="result-title fw-semibold fs-5 text-center mb-2">
                                {{$disease->body}}
                            </div>

                            <img class="image img-thumbnail mb-2" src="{{asset("img/diseases/{$disease->path}")}}"/>

                            <div class="solusi">
                                <span class="fw-bold">Solusi :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi aspernatur ad illo aliquid suscipit dicta nulla sapiente pariatur, veniam et?
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <img class="w-100 position-absolute start-0 top-0" style="height: 110%" src="{{ asset('img/choose_symptom.png') }}"
        alt="Background Image">
    <div class="w-100 position-absolute start-0 top-0 h-100" style="background-color: rgba(0,0,0,.2); z-index:-1">
    @endsection
