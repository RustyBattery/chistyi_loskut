<x-admin.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Категории товаров
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="p-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-10 px-10 py-5 rounded-md text-lg shadow-sm" style="background-color: #13ae4a34">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-10 px-10 py-5 rounded-md text-lg shadow-sm" style="background-color: #ad131334">
                    <p>Полученные данные некорректны!</p>
                    @foreach($errors->all() as $error)
                        <p class="text-sm">{{'- '.$error}}</p>
                    @endforeach
                </div>
            @endif
            <a href="#new-category"
               class="inline-flex items-center px-3 py-1 bg-gray-800 border border-transparent rounded-md text-xl font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5">
                +
            </a>
            <div class="mb-20">
                @foreach($categories as $category)
                    <div class="p-4 bg-white shadow sm:rounded-lg relative mb-10">
                        <div class="flex w-full justify-end mb-2">
                            <a href="{{ route('admin.products.index', [$category->id]) }}" class="ml-1 inline-flex items-center  font-medium text-gray-700 hover:text-green-700">Перейти к товарам</a>
                        </div>
                        <form action="{{ route('admin.categories.update', [$category->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="mb-2 flex flex-wrap md:flex-nowrap items-end">
                                    <img class="object-cover sm:h-48 w-auto mb-2" src="{{ $category->img ? env('APP_URL').'/'.$category->img : '/img/cover.jpg'}}" alt="">
                                    <div class="md:ml-4 sm:h-48 w-full">
                                        <div class="mb-2">
                                            <label class="block text-gray-700 font-bold ml-3 mb-2" for="img">
                                                Новое фото
                                            </label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                                id="img" name="img" type="file">
                                        </div>
                                        <div class="mb-2">
                                            <label class="block text-gray-700 font-bold mb-2 ml-3" for="name">
                                                Название
                                            </label>
                                            <input
                                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                                id="name" name="name" type="text" value="{{$category->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="block text-gray-700 font-bold mb-2 ml-3" for="description">
                                        Описание
                                    </label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                        id="description" name="description" rows="1">{{$category->description}}</textarea>
                                </div>
                                <div class="mt-5">
                                    <x-primary-button>Сохранить</x-primary-button>
                                </div>
                            </div>
                        </form>
                        <div class="mt-2 absolute bottom-4 right-4">
                            <form action="{{ route('admin.categories.destroy', [$category->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-danger-button>Удалить</x-danger-button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>



{{--            {{ $categories->links() }}--}}

            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white shadow sm:rounded-lg" id="new-category">
                @csrf
                <h2 class="text-xl font-bold pb-3 mb-5 text-gray-700 border-b border-gray-700">Добавить новую
                    категорию</h2>
                <div class="">
                    <div class="mb-2">
                        <label class="block text-gray-700 font-bold ml-3 mb-2" for="img">
                            Фото
                        </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            id="img" name="img" type="file">
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 font-bold mb-2 ml-3" for="name">
                            Название
                        </label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                            id="name" name="name" type="text" value="">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2 ml-3" for="description">
                            Описание
                        </label>
                        <textarea
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                            id="description" name="description" rows="1"></textarea>
                    </div>
                    <div class="">
                        <x-primary-button>Сохранить</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin.app>
