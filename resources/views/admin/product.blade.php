@extends('layouts.admin-sidebar-dashboard')
@section('content')
    <div class="wrapper-2">
        <!-- table -->
        <div class="p-5 dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card flex-fill ">
                        <div class="card-header">

                            <a href="{{ route('admin-create-product') }}" class="btn btn-primary mb-0"><i class="align-middle"
                                    data-feather="plus"></i>Tambah Data</a>
                            @if (session()->has('success'))
                                <div class="badge bg-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>

                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="d-none d-xl-table-cell">Nama Produk</th>
                                    <th class="d-none d-md-table-cell">Gambar</th>
                                    <th class="d-none d-md-table-cell">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $data)
                                    <tr>
                                        <td># {{ $data->id }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $data->name }}</td>
                                        <td class="d-none d-xl-table-cell"><img
                                                src="{{ asset('storage/' . $data->picture) }}" alt="{{ $data->name }}"
                                                class="w-50"></td>
                                        <td class="d-none d-xl-table-cell">
                                            <a class="badge bg-success"
                                                href="{{ route('admin-update-product', $data->id) }}">
                                                <i class="material-icons" style="font-size:16px">border_color</i>
                                            </a>
                                            <a class="badge bg-danger border-0 d-inline"
                                                onclick="return confirm('hapus data ?')"
                                                href="{{ route('admin-delete-product', $data->id) }}">
                                                <i class="material-icons" style="font-size:16px">delete_sweep</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
