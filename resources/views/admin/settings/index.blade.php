<x-admin.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Настройки
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

            <form action="{{ route('admin.settings.price') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white shadow sm:rounded-lg" id="new-category">
                @csrf
                <h2 class="text-xl font-bold pb-3 mb-5 text-gray-700 border-b border-gray-700">Прайс</h2>

                <div class="mb-4">
                    <a href="{{ route('price.download') }}" class="text-gray-700 font-bold px-3 py-1 hover:text-gray-500 hover:underline transition">Скачать текущий файл</a>
                </div>

                <div class="flex items-end">
                    <div class="w-3/4 mr-3">
                        <label class="block text-gray-700 font-bold ml-3 mb-2" for="price">
                            Добавить новый файл
                        </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            id="price" name="price" type="file">
                    </div>
                    <div class="pb-1">
                        <x-primary-button>Сохранить</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin.app>
