@extends('layouts.app')
@section('content')

<!-- caraousel -->
<div id="carouselExampleCaptions" class="relative carousel slide" data-bs-ride="carousel">
    <div class="absolute bottom-0 left-0 right-0 flex justify-center p-0 mb-4 carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="relative w-full overflow-hidden carousel-inner">
        <div class="relative float-left w-full carousel-item active">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="block w-full" alt="..." />
            <div class="absolute hidden text-center carousel-caption md:block">
                <h5 class="text-xl">First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="relative float-left w-full carousel-item">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="block w-full" alt="..." />
            <div class="absolute hidden text-center carousel-caption md:block">
                <h5 class="text-xl">Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="relative float-left w-full carousel-item">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" class="block w-full" alt="..." />
            <div class="absolute hidden text-center carousel-caption md:block">
                <h5 class="text-xl">Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="absolute top-0 bottom-0 left-0 flex items-center justify-center p-0 text-center border-0 carousel-control-prev hover:outline-none hover:no-underline focus:outline-none focus:no-underline" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="inline-block bg-no-repeat carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="absolute top-0 bottom-0 right-0 flex items-center justify-center p-0 text-center border-0 carousel-control-next hover:outline-none hover:no-underline focus:outline-none focus:no-underline" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="inline-block bg-no-repeat carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- caraousel -->


<div class="container p-5 mx-auto mt-10">
    <form action="{{ route('search') }}" method="POST">
        @csrf
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="text" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border rounded-lg border-gray bg-gray-50 " placeholder="Cari Produk... " required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
        </div>
    </form>
</div>

<!-- category 1 -->

<div class="bg-white">
    @foreach ($datas as $data)
    <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="flex flex-row text-2xl font-bold tracking-tight">{{ $data->name }}
            <form action="{{ route('view-all') }}" method="POST" class="ml-4 ">
                @csrf
                <input type="hidden" name="search" value="{{ $data->name }}">
                <button type="submit" class="p-1 text-white bg-red-500 rounded-xl hover:bg-red-700">View all</button>
            </form>
        </h2>
        <div class="grid grid-cols-1 mt-6 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($data->products as $product)
            <div class="relative group">
                <div class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                </div>
                <div class="flex justify-between mt-4">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="{{ route('product', $product->id) }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $product->name }}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 cut-text">{{ $data->name }}</p>
                        <p class="mt-3 text-sm font-medium text-gray-900">Rp
                            {{ number_format($product->price, 2,',','.') }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
<!-- end category 1 -->

@endsection