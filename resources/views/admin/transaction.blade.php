@extends('layouts.admin-sidebar-dashboard')
@section('content')
<div class="wrapper-2">
    <!-- table -->
    <div class="p-5 dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card flex-fill ">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="d-none d-xl-table-cell">Nama Pembeli</th>
                                <th class="d-none d-md-table-cell">Total Price</th>
                                <th class="d-none d-md-table-cell">Status</th>
                                <th class="d-none d-md-table-cell">Last Updated</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($transactions as $data)
                            <tr>
                                <td># {{ $data->id }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->user->name }}</td>
                                <td class="d-none d-xl-table-cell">Rp {{ $data->total_price }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->status }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->updated_at->format('j F, Y') }}</td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="badge bg-success"
                                        href="{{ route('admin-transaction-accept', $data->id) }}">
                                        <i class="material-icons" style="font-size:16px">border_color</i>
                                    </a>
                                    <a class="badge bg-info" href="{{ route('admin-transaction-detail', $data->id) }}">
                                        <i class="material-icons" style="font-size:16px">visibility</i>
                                    </a>
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