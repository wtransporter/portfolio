<section id="projects"
    x-data="{
                showCards: 'all',
                activeClasses: 'bg-primary text-white',
                inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
            }"
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
                    @foreach ($tabs as $tab)
                    <li class="mb-1">
                        <button @click="showCards = '{{ $tab }}'"
                            :class="showCards == '{{ $tab }}' ? activeClasses : inactiveClasses "
                            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                            {{ ucfirst($tab) }}
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($projects as $project)
            <x-home.portfolio-item :categories="$project['category']" :image="$project['image']" :title="$project['title']">
            </x-home.portfolio-item>
            @endforeach
        </div>
    </div>
</section>
<!-- ====== Portfolio Section End -->