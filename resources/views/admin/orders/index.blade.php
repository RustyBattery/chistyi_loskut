<x-admin.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Заявки
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
                @if(!$status)
                    <a href="#" class="inline-flex items-center px-14 py-1 border border-transparent rounded-md font-semibold text-white bg-green-700 transition duration-150 select-none mb-5 mr-3 cursor-default">
                        Все
                    </a>
                @else
                    <a href="{{route('admin.orders.index')}}" class="inline-flex items-center px-14 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5 mr-3">
                        Все
                    </a>
                @endif

                @if($status == 'new')
                    <a href="#" class="inline-flex items-center px-11 py-1 border border-transparent rounded-md font-semibold text-white bg-green-700 transition duration-150 select-none mb-5 mr-3 cursor-default">
                        Новые
                    </a>
                @else
                    <a href="{{route('admin.orders.index', ['status' => 'new'])}}" class="inline-flex items-center px-11 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5 mr-3">
                        Новые
                    </a>
                @endif

                @if($status == 'in_process')
                    <a href="#" class="inline-flex items-center px-7 py-1 border border-transparent rounded-md font-semibold text-white bg-green-700 transition duration-150 select-none mb-5 mr-3 cursor-default">
                        В процессе
                    </a>
                @else
                    <a href="{{route('admin.orders.index', ['status' => 'in_process'])}}" class="inline-flex items-center px-7 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5 mr-3">
                        В процессе
                    </a>
                @endif

                @if($status == 'done')
                    <a href="#" class="inline-flex items-center px-4 py-1 border border-transparent rounded-md font-semibold text-white bg-green-700 transition duration-150 select-none mb-5 mr-3 cursor-default">
                        Выполненные
                    </a>
                @else
                    <a href="{{route('admin.orders.index', ['status' => 'done'])}}" class="inline-flex items-center px-4 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition duration-150 select-none mb-5 mr-3">
                        Выполненные
                    </a>
                @endif
            </div>

            @foreach($orders as $order)
                <div class="p-4 bg-white shadow sm:rounded-lg relative mb-16">
                    <form action="{{ route('admin.orders.update', [$order->id]) }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label class="block text-gray-700 font-bold mb-2 ml-3" for="name">
                                ФИО
                            </label>
                            <input
                                class="bg-gray-200 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                id="name" name="name" type="text" value="{{$order->name}}" disabled readonly>
                        </div>
                        <div class="sm:flex">
                            <div class="mb-2 sm:w-1/2 sm:pr-1">
                                <label class="block text-gray-700 font-bold mb-2 ml-3" for="phone">
                                    Номер телефона
                                </label>
                                <input
                                    class="bg-gray-200 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                    id="phone" name="phone" type="text" value="{{$order->phone}}" disabled readonly>
                            </div>
                            <div class="mb-2 sm:w-1/2 sm:pl-1">
                                <label class="block text-gray-700 font-bold mb-2 ml-3" for="email">
                                    Email
                                </label>
                                <input
                                    class="bg-gray-200 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                    id="email" name="email" type="text" value="{{$order->email}}" disabled readonly>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label class="block text-gray-700 font-bold mb-2 ml-3" for="comment">
                                Комментарий
                            </label>
                            <textarea
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500"
                                id="comment" name="comment" rows="3">{{$order->comment}}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-gray-700 text-lg font-bold mb-2 ml-3" for="status">
                                Статус
                            </label>
                            <select id="status" name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-gray-500 focus:border-gray-500">
                                <option @if($order->status == 'new') selected
                                        @endif value="new"> Новая </option>
                                <option @if($order->status == 'in_process') selected
                                        @endif value="in_process"> В процессе </option>
                                <option @if($order->status == 'done') selected
                                        @endif value="done"> Выполнена </option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <x-primary-button>Сохранить</x-primary-button>
                        </div>
                    </form>
                    <div class="mt-2 absolute bottom-4 right-4">
                        <form action="{{ route('admin.orders.destroy', [$order->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>Удалить</x-danger-button>
                        </form>
                    </div>
                </div>
            @endforeach
                {{ $orders->links() }}
        </div>
    </div>
</x-admin.app>
