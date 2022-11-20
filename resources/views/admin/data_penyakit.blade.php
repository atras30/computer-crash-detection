@extends('layouts.master')
@include('assets.bootstrap_data_table')

@section('content')
    <div class="container-fluid d-flex p-0 flex-fill h-100">
        @include('templates.sidebar')

        <div class="content p-3 px-4 col-12 col-sm-9 col-md-10">
            <div class="header-wrapper d-flex justify-content-between mb-3 align-items-center">
                <div class="title fs-5">
                    Diagnosis Kerusakan Komputer <span class="text-muted">| Data Penyakit</span>
                </div>

                <button class="btn btn-success">
                    + Tambah Penyakit
                </button>
            </div>

            <table id="example" class="table table-striped border border-1 rounded shadow-sm border-black"
                style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($symptoms as $symptom)
                        <tr>
                            <td>{{ $symptom->id }}</td>
                            <td>{{ $symptom->body }}</td>
                            <td class="d-flex flex-md-row flex-column gap-1">
                                <button class="btn btn-primary">Edit</button>
                                <form action="{{route("admin.disease")}}" method="DELETE">
                                    <input type="hidden" value="{{$symptom->id}}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
