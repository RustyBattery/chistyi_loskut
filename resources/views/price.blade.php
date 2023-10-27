<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            @if (session('success'))--}}
{{--                <div class="mb-10 px-10 py-5 rounded-md text-lg shadow-sm" style="background-color: #13ae4a34">--}}
{{--                    Заявка принята!--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            @if ($errors->any())--}}
{{--                <div class="mb-10 px-10 py-5 rounded-md text-lg shadow-sm" style="background-color: #ad131334">--}}
{{--                    Данные в заявке некорректны!--}}
{{--                </div>--}}
{{--            @endif--}}
            <nav class="flex px-5 py-3 text-gray-700 mb-2" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('main') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-700">
                            Главная
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Прайс</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="mb-5">
                    <h2 class="text-xl font-semibold text-green-800 mb-3">Прайс</h2>
                </div>
                <a href="{{ route('price.download') }}" class="py-3 pr-3 font-semibold text-lg text-blue-900 transition hover:text-blue-800 hover:underline mb-3">Скачать</a>
{{--                <span data-modal-target="orderModal" data-modal-toggle="orderModal" class="text-white bg-green-700 hover:bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-green-500 focus:ring-2 transition cursor-pointer">Оформить заказ</span>--}}
            </div>
        </div>
    </div>

{{--    @include('custom_components.modal-order')--}}

</x-app-layout>
