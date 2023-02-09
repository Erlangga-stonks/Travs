@extends('layouts.user-sidebar-dashboard')
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
                                    <th>No</th>
                                    <th class="d-none d-xl-table-cell">Transaction ID</th>
                                    <th class="d-none d-md-table-cell">Product</th>
                                    <th class="d-none d-md-table-cell">Quantity</th>
                                    <th class="d-none d-md-table-cell">Subtotal Price</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($details as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $data->transaction_id }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $data->product->name }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $data->quantity }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $data->subtotal_price }}</td>
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
