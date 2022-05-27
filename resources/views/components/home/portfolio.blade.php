<section id="projects"
    x-data="
                {
                showCards: 'all',
                activeClasses: 'bg-primary text-white',
                inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
                }
            "
    class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div
                    class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <span
                        class="font-semibold text-lg text-primary mb-2 block">
                        My Portfolio
                    </span>
                    <h2
                        class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark mb-4">
                        My Recent Projects
                    </h2>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <ul
                    class="flex flex-wrap justify-center mb-12 space-x-1">
                    <li class="mb-1">
                        <button
                            @click="showCards = 'all' "
                            :class="showCards == 'all' ? activeClasses : inactiveClasses "
                            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                            All Projects
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'business' "
                            :class="showCards == 'business' ? activeClasses : inactiveClasses "
                            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                            Business
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'design' "
                            :class="showCards == 'design' ? activeClasses : inactiveClasses "
                            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                            Design
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'marketing' "
                            :class="showCards == 'marketing' ? activeClasses : inactiveClasses "
                            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                            Marketing
                        </button>
                    </li>
                    <li class="mb-1">
                        <button
                            @click="showCards = 'development' "
                            :class="showCards == 'development' ? activeClasses : inactiveClasses "
                            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                            Development
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div
                :class="showCards == 'all' || showCards == 'business' ? 'block' : 'hidden' "
                class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="relative mb-12">
                    <div class="border-2 border-gray-400 rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('img/management.png') }}"
                            alt="portfolio"
                            class="w-full" />
                    </div>
                    <div
                        class="text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                        <span
                            class="text-sm text-primary font-semibold block mb-2">
                            Business
                        </span>
                        <h3
                            class="font-bold text-xl text-dark mb-4">
                            HR - Employee Management
                        </h3>
                        <a
                            href="javascript:void(0)"
                            class="text-body-color text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-primary hover:border-primary hover:text-white transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            <div
                :class="showCards == 'all' || showCards == 'marketing' ? 'block' : 'hidden' "
                class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="relative mb-12">
                    <div class="border-2 border-gray-400 rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('img/task-tracker.png') }}"
                            alt="portfolio"
                            class="w-full" />
                    </div>
                    <div
                        class="text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                        <span
                            class="text-sm text-primary font-semibold block mb-2">
                            Marketing
                        </span>
                        <h3
                            class="font-bold text-xl text-dark mb-4">
                            Best Marketing tips
                        </h3>
                        <a
                            href="javascript:void(0)"
                            class="text-body-color text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-primary hover:border-primary hover:text-white transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            <div
                :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden' "
                class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="relative mb-12">
                    <div class="border-2 border-gray-400 rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('img/task-tracker.png') }}"
                            alt="portfolio"
                            class="w-full" />
                    </div>
                    <div
                        class="text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                        <span
                            class="text-sm text-primary font-semibold block mb-2">
                            Development
                        </span>
                        <h3
                            class="font-bold text-xl text-dark mb-4">
                            Task Tracker
                        </h3>
                        <a
                            href="javascript:void(0)"
                            class="text-body-color text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-primary hover:border-primary hover:text-white transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            <div
                :class="showCards == 'all' || showCards == 'design' ? 'block' : 'hidden' "
                class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="relative mb-12">
                    <div class="border-2 border-gray-400 rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('img/task-tracker.png') }}"
                            alt="portfolio"
                            class="w-full" />
                    </div>
                    <div
                        class="text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                        <span
                            class="text-sm text-primary font-semibold block mb-2">
                            Design
                        </span>
                        <h3
                            class="font-bold text-xl text-dark mb-4">
                            Business Card Design
                        </h3>
                        <a
                            href="javascript:void(0)"
                            class="text-body-color text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-primary hover:border-primary hover:text-white transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            <div
                :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden' "
                class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="relative mb-12">
                    <div class="border-2 border-gray-400 rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('img/games.png') }}"
                            alt="portfolio"
                            class="w-full" />
                    </div>
                    <div
                        class="text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                        <span
                            class="text-sm text-primary font-semibold block mb-2">
                            Development
                        </span>
                        <h3
                            class="font-bold text-xl text-dark mb-4">
                            Game Tracker
                        </h3>
                        <a
                            href="javascript:void(0)"
                            class="text-body-color text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-primary hover:border-primary hover:text-white transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            <div
                :class="showCards == 'all' || showCards == 'business' ? 'block' : 'hidden' "
                class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="relative mb-12">
                    <div class="border-2 border-gray-400 rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('img/web-shop.png') }}"
                            alt="portfolio"
                            class="w-full" />
                    </div>
                    <div
                        class="text-center bg-white relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-20">
                        <span
                            class="text-sm text-primary font-semibold block mb-2">
                            Business
                        </span>
                        <h3
                            class="font-bold text-xl text-dark mb-4">
                            Web Shop
                        </h3>
                        <a
                            href="javascript:void(0)"
                            class="text-body-color text-sm font-semibold py-3 px-7 inline-block border rounded-md hover:bg-primary hover:border-primary hover:text-white transition">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Portfolio Section End -->