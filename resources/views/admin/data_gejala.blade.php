@extends('layouts.master')
@include('assets.bootstrap_data_table')

@section('content')
    <div class="container-fluid d-flex p-0 flex-fill h-100">
        @include('templates.sidebar')

        <div class="content p-3 px-4 col-12 col-sm-9 col-md-10">
            <div class="title fs-5 mb-3">
                Diagnosis Kerusakan Komputer <span class="text-muted">| Data Gejala</span>
            </div>

            @include('assets.dummy_data')
        </div>
    </div>
@endsection
