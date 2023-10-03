<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
    <div class="p-6 text-gray-900">
        <h4 class="text-xl font-bold text-green-800 mb-2">Оставить заявку</h4>
        <p class="mb-4">Оставьте заявку и наши специалисты перезвонят вам в ближайшее время</p>
        <form action="{{ route('order.create') }}" method="POST" class="">
            @csrf
            <div class="md:flex">
                <div class="mb-6 md:w-1/3 md:pr-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Ваше имя</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:ring-2 block w-full p-2.5 @error('name') border-red-800 @enderror">
                    @error('name')
                    <span class="text-red-800 text-xs">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="sm:flex md:w-2/3">
                    <div class="mb-6 sm:px-2 sm:w-1/2">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Контактный телефон</label>
                        <input id="phone" name="phone" type="text" value="{{ old('phone') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:ring-2 block w-full p-2.5 @error('phone') border-red-800 @enderror">
                        @error('phone')
                        <span class="text-red-800 text-xs">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-6 sm:pl-2 sm:w-1/2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input id="email" name="email" type="text" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:ring-2 block w-full p-2.5 @error('email') border-red-800 @enderror">
                        @error('email')
                        <span class="text-red-800 text-xs">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label for="comment" class="block mb-2 text-sm font-medium text-gray-900">Комментарий</label>
                <textarea id="comment" name="comment" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:ring-2">{{ old('name') }}</textarea>
            </div>
            <div class="mb-6">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input checked id="is_agree" name="is_agree" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 focus:ring-2" required>
                    </div>
                    <span class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-default">Ознакомлен(а) с <span data-modal-target="agreementModal" data-modal-toggle="agreementModal" class="text-blue-800 hover:underline cursor-pointer">пользовательским соглашением</span></span>
                </div>
            </div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-green-500 focus:ring-2 transition">Отправить</button>
        </form>
    </div>
</div>
