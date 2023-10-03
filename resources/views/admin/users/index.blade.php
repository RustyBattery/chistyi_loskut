<x-admin.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Пользователи
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

            <div class="mb-5">
                @if(!$role)
                    <a href="#" class="inline-flex items-center px-12 py-1 border border-transparent rounded-md font-semibold text-white bg-green-700 transition duration-150 select-none mb-5 mr-3 cursor-default">
                        Все
                    </a>
                @else
                    <a href="{{route('admin.users.index')}}" class="inline-flex items-center px-12 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5 mr-3">
                        Все
                    </a>
                @endif

                @if($role == 'user')
                    <a href="#" class="inline-flex items-center px-6 py-1 border border-transparent rounded-md font-semibold text-white bg-green-700 transition duration-150 select-none mb-5 mr-3 cursor-default">
                        Обычные
                    </a>
                @else
                    <a href="{{route('admin.users.index', ['role' => 'user'])}}" class="inline-flex items-center px-6 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5 mr-3">
                        Обычные
                    </a>
                @endif

                @if($role == 'admin')
                    <a href="#" class="inline-flex items-center px-7 py-1 border border-transparent rounded-md font-semibold text-white bg-green-700 transition duration-150 select-none mb-5 mr-3 cursor-default">
                        Админы
                    </a>
                @else
                    <a href="{{route('admin.users.index', ['role' => 'admin'])}}" class="inline-flex items-center px-7 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5 mr-3">
                        Админы
                    </a>
                @endif
            </div>

            @foreach($users as $user)
                <div class="p-4 bg-white shadow sm:rounded-lg relative mb-16">
                    <form action="{{ route('admin.users.update', [$user->id]) }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label class="block text-gray-700 font-bold mb-2 ml-3" for="name">
                                ФИО
                            </label>
                            <input
                                class="bg-gray-200 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                id="name" name="name" type="text" value="{{$user->name}}" disabled readonly>
                        </div>
                        <div class="mb-2">
                            <label class="block text-gray-700 font-bold mb-2 ml-3" for="email">
                                Email
                            </label>
                            <input
                                class="bg-gray-200 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                id="email" name="email" type="text" value="{{$user->email}}" disabled readonly>
                        </div>
                        <div class="mb-2">
                            <label class="block text-gray-700 text-lg font-bold mb-2 ml-3" for="is_admin">
                                Роль
                            </label>
                            <select id="is_admin" name="is_admin"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500">
                                <option @if(!$user->is_admin) selected
                                        @endif value="0"> Обычный </option>
                                <option @if($user->is_admin) selected
                                        @endif value="1"> Администратор </option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <x-primary-button>Сохранить</x-primary-button>
                        </div>
                    </form>
                    <div class="mt-2 absolute bottom-4 right-4">
                        <form action="{{ route('admin.users.destroy', [$user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>Удалить</x-danger-button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{ $users->links() }}
        </div>
    </div>
</x-admin.app>
