<div class="shadow md:flex items-center justify-between bg-white">
    <div class="w-full flex md:block justify-center md:w-auto">
        <div class="w-56 py-6">
            <img src="/img/logo.jpg" class="w-full h-full">
        </div>
    </div>

    <div class="md:flex lg:w-2/3 w-full items-center justify-between px-10 font-semibold text-green-600 hidden flex-wrap">
        <div class="text-sm md:text-base">
            <a class="block lg:py-1 hover:text-gray-500 transition" href="tel:+79456652474">+7(495)665-24-74</a>
            <a class="block lg:py-1 hover:text-gray-500 transition" href="tel:+79266032991">+7(926)603-29-91</a>
        </div>
        <div class="text-base lg:text-lg">
            <a class="block py-1 hover:text-gray-500 transition" href="mailto:mi24leta@yandex.ru">mi24leta@yandex.ru</a>
        </div>
        <div class="text-sm md:text-base">
            <a href="https://yandex.ru/maps/-/CDUANC4a" class="hover:text-gray-500 transition">г. Москва, ул. Дорожная, дом 21а </a>
            <div class=" text-blue-900">
                <p>Пн-Пт: с 9:00 - до 18:00</p>
                <p>Сб-Вс: выходные дни</p>
            </div>
        </div>
    </div>
</div>
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-40">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-8 lg:px-20 shadow" style="background-color: #e0f4e3">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('main')" :active="request()->routeIs('main')">
                        Главная
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('catalog')" :active="request()->routeIs('catalog')">
                        Каталог
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('delivery')" :active="request()->routeIs('delivery')">
                        Доставка
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('contacts')" :active="request()->routeIs('contacts')">
                        Контакты
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('price')" :active="request()->routeIs('price')">
                        Прайс
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden" style="background-color: #e0f4e3">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:bg-gray-100focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden" style="background-color: #e0f4e3">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('main')" :active="request()->routeIs('main')">
                Главная
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('catalog')" :active="request()->routeIs('catalog')">
                Каталог
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('delivery')" :active="request()->routeIs('delivery')">
                Доставка
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contacts')" :active="request()->routeIs('contacts')">
                Контакты
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('price')" :active="request()->routeIs('price')">
                Прайс
            </x-responsive-nav-link>
        </div>

    </div>
</nav>
