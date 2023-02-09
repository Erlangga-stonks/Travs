@extends('layouts.user-sidebar-dashboard')
@section('content')
<div class="wrapper-2">
    <!-- table -->
    <div class="p-5 dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card flex-fill ">
                    <div class="card-header">
                        <h2 class="font-bold text-center">Transaction History</h2>

                        @if(session()->has('success'))
                        <div class="badge bg-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>

                    <table class="table table-hover ">

                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th class="d-none d-xl-table-cell">Order date</th>
                                <th class="d-none d-md-table-cell">Status</th>
                                <th class="d-none d-md-table-cell">Price</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($transactions as $data)
                            <tr>
                                <td># {{ $data->id }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->created_at->format('j F, Y') }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->status }}</td>
                                <td class="d-none d-xl-table-cell">Rp {{ $data->total_price }}</td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="badge bg-info" href="{{ route('user-dashboard-detail', $data->id) }}">
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