<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-10 px-10 py-5 rounded-md text-lg shadow-sm" style="background-color: #13ae4a34">
                    Заявка принята!
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-10 px-10 py-5 rounded-md text-lg shadow-sm" style="background-color: #ad131334">
                    Данные в заявке некорректны!
                </div>
            @endif
            <nav class="flex px-5 py-3 text-gray-700 mb-2" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('main') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-700">
                            Главная
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="{{ route('catalog') }}" class="ml-1 inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-700">Каталог</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{$category->name}}</span>
                        </div>
                    </li>
                </ol>
            </nav>
{{--            <h3 class="text-xl font-semibold text-blue-950 mb-4 pl-4">Каталог</h3>--}}
            <div class="w-full flex flex-wrap items-stretch">
                @foreach($products as $product)
                    <div class="lg:w-1/4 md:w-1/3 sm:w-1/2 w-full p-2">
                        <div class="block h-full bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                            <img class="object-cover sm:h-48 w-full" src="{{$product->img ?? '/img/cover.jpg'}}" alt="">
                            <h6 class="font-semibold w-full text-center mb-2">{{$product->name}}</h6>
                            <p class="text-sm text-center">{{$product->description}}</p>
                            <div class="py-2 border-t-2 mt-2 text-center font-semibold text-green-600 text-lg mb-1">
                                {{'Цена: ' . number_format($product->price/100, 2, ',') . ' ' . $product->unit}}
                            </div>
                            <div class="flex justify-center">
                                <a data-modal-target="orderModal" data-modal-toggle="orderModal" type="button" class="ml-3 text-white bg-green-700 hover:bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-green-500 focus:ring-2 transition w-full cursor-pointer">Заказать</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('custom_components.modal-order')

</x-app-layout>
