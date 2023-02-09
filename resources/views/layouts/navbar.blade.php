<!-- This is an example component -->
<div class="max-w-full mx-auto">

    <nav class="items-center p-5 text-white bg-gray-900 border-gray-100">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <div class="flex items-center">
                <a href="/">
                    <span class="self-center ml-10 text-lg font-semibold whitespace-nowrap">Travelgo</span>
                </a>
                <span class="ml-10">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b border-gray-100 text-white-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Category
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden my-4 text-base list-none bg-gray-900 divide-y divide-gray-100 rounded shadow w-44">
                        <ul class="py-1" aria-labelledby="dropdownLargeButton text-white">
                            <li>
                                <form action="{{ route('view-all') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="search" value="Beauty">
                                    <button type="submit" class="block px-4 py-2 text-sm text-white-700 hover:bg-gray-100">Konser</button>
                                </form>
                            </li>
                            <li>
                                <form action="{{ route('view-all') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="search" value="Clothes">
                                    <button type="submit" class="block px-4 py-2 text-sm text-white-700 hover:bg-gray-100">Wisata</button>
                                </form>
                            </li>
                            <li>
                                <form action="{{ route('view-all') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="search" value="electronics">
                                    <button type="submit" class="block px-4 py-2 text-sm text-white-700 hover:bg-gray-100">Gunung</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </span>
            </div>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center justify-center ml-3 rounded-lg text-white-400 md:hidden hover:text-white-900 focus:outline-none focus:ring-2 focus:ring-blue-300" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col items-center mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:mr-10">
                    @auth
                    <li>
                        <a href="{{ route('user-cart') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 text-white-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <!-- if user logged -->
                    <li>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " type="button">{{ Auth::user()->name }}<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-gray-900 divide-y divide-gray-100 rounded shadow w-44 ">
                            <ul class="py-1 text-sm " aria-labelledby="dropdownDefault">
                                <li>
                                    @if (Auth::user()->role_id == 1)
                                    <a href="{{ route('admin-dashboard') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-gray-900">Dashboard</a>
                                    @else
                                    <a href="{{ route('user-dashboard') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-gray-900">Dashboard</a>
                                    @endif
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 hover:bg-gray-100 hover:text-gray-900">
                                        @csrf
                                        <button>Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- if user logged -->
                    @else
                    <li>
                        <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 text-white-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="block py-2 pl-3 pr-4 border-b border-gray-100 text-white-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Register</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>