@extends('layouts.admin-sidebar-dashboard')
@section('content')
    <div>
        <div class="flex flex-col items-center min-h-screen p-3 bg-gray-100 sm:justify-start sm:pt-0 ">
            <div class="w-full px-16 py-5 overflow-hidden bg-white rounded-lg">
                <div class="mb-4">
                    <h1 class="text-3xl font-bold text-center">
                        Add product
                    </h1>
                </div>

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ">
                    <form method="POST" action="/admin/create-product" enctype="multipart/form-data">
                        <!-- Title -->
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0 ">Name</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="name" class="form-control "
                                            placeholder="Input Product Name" required>
                                        @error('name')
                                            <p class="text-red-400 text-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0 ">Category</h5>
                                    </div>
                                    <div class="card-body">
                                        <select class="form-select mb-3" name="type_id">
                                            @foreach ($productTypes as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type_id')
                                            <p class="text-red-400 text-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0 ">Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <textarea class="form-control" name="description" rows="2" placeholder="" name="description"></textarea>
                                        @error('description')
                                            <p class="text-red-400 text-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0 ">Quantity</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="number" min="1" name="quantity" class="form-control "
                                            placeholder="Qty" required>
                                    </div>
                                </div>
                                @error('quantity')
                                    <p class="text-red-400 text-sm">{{ $message }}</p>
                                @enderror

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0 ">Price</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="number" min="1000" name="price" class="form-control "
                                            placeholder="Rp " required>
                                    </div>
                                </div>
                                @error('price')
                                    <p class="text-red-400 text-sm">{{ $message }}</p>
                                @enderror

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Photo</h5>
                                    </div>
                                    <div class="card-body">
                                        <input id="file-input" name="picture" type="file" class="form-control "
                                            required />
                                        @error('picture')
                                            <p class="text-red-400 text-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
