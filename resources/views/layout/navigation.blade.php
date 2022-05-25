<!-- ====== Navbar Section Start -->
<header
    x-data="{ navbarOpen: false }"
    class="fixed top-0 left-0 z-50 bg-white w-full flex items-center h-24">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="px-4 w-60 max-w-full">
                <a href="javascript:void(0)" class="w-full block py-5">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-8" />
                </a>
            </div>
            <div class="flex px-4 justify-between items-center w-full">
                <div>
                    <x-layout.nav-hamburger @click="navbarOpen = !navbarOpen"
                        x-bind:class="navbarOpen && 'navbarTogglerActive'">
                    </x-layout.nav-hamburger>

                    <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse"
                        class="absolute py-5 px-6 bg-white shadow rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full lg:block lg:static lg:shadow-none">
                        <ul class="blcok lg:flex">
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-link :href="$item['link']">
                                    {{ $item['label'] }}
                                </x-layout.navbar-link>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                    <a href="javascript:void(0)"
                        class="text-base font-medium text-dark hover:text-primary py-3 px-7">
                        Login
                    </a>
                    <a href="javascript:void(0)"
                        class="text-base font-medium text-white bg-primary rounded-lg py-3 px-7 hover:bg-opacity-90">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->