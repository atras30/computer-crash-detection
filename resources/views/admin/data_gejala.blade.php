@extends('layouts.master')
@include('assets.bootstrap_data_table')

@section('content')
    <div class="container-fluid d-flex p-0 flex-fill h-100">
        @include('templates.sidebar')

        <div class="content p-3 px-4 col-12 col-sm-9 col-md-10">
            <div class="header-wrapper d-flex justify-content-between mb-3 align-items-center">
                <div class="title fs-5">
                    Diagnosis Kerusakan Komputer <span class="text-muted">| Data Gejala</span>
                </div>

                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create-disease-modal">
                    + Tambah Gejala
                </button>
            </div>

            <table id="example" class="table table-striped border border-1 rounded shadow-sm border-black"
                style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Body</th>
                        <th>Path</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diseases as $disease)
                        <tr>
                            <td>{{ $disease->id }}</td>
                            <td>{{ $disease->body }}</td>
                            <td>{{ $disease->path }}</td>
                            <td class="d-flex flex-md-row flex-column gap-1">
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Body</th>
                        <th>Path</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create-disease-modal" tabindex="-1" aria-labelledby="create-disease-modal"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gejala</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('admin.disease') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-gejala" class="form-label">Nama Gejala</label>
                            <input type="text" class="form-control" id="nama-gejala" name="body"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Pilih Gambar</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>

                        <select class="form-select" aria-label="Default select example" name="symptom_name">
                            @foreach ($symptoms as $symptom)
                                @if ($loop->first)
                                    <option value="{{ $symptom->body }}" selected>{{ $symptom->body }}</option>
                                @else
                                    <option value="{{ $symptom->body }}">{{ $symptom->body }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Gejala</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
