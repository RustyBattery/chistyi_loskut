<div id="orderModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <div class="">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Оставить заявку
                    </h3>
                    <p class="text-sm">Оставьте заявку и наши специалисты перезвонят вам в ближайшее время</p>
                </div>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="orderModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-6 space-y-6">
                <form action="{{ route('order.create') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="modal-name" class="block mb-2 text-sm font-medium text-gray-900">Ваше имя</label>
                        <input name="name" id="modal-name" type="text" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:ring-2 block w-full p-2.5 @error('name') border-red-800 @enderror">
                        @error('name')
                        <span class="text-red-800 text-xs">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="modal-phone" class="block mb-2 text-sm font-medium text-gray-900">Контактный телефон</label>
                        <input name="phone" id="modal-phone" type="text" value="{{ old('phone') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:ring-2 block w-full p-2.5 @error('phone') border-red-800 @enderror">
                        @error('phone')
                        <span class="text-red-800 text-xs">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="modal-email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input name="email" id="modal-email" type="text" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:ring-2 block w-full p-2.5 @error('email') border-red-800 @enderror">
                        @error('email')
                        <span class="text-red-800 text-xs">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="modal-comment" class="block mb-2 text-sm font-medium text-gray-900">Комментарий</label>
                        <textarea name="comment" id="modal-comment" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:ring-2">{{ old('comment') }}</textarea>
                    </div>

                    <div class="mb-6 flex items-start">
                        <div class="flex items-center h-5">
                            <input checked id="is_agree" name="is_agree" type="checkbox" value="1" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 focus:ring-2" required>
                        </div>
                        <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ознакомлен(а) с <span data-modal-hide="orderModal" data-modal-target="agreementModal" data-modal-toggle="agreementModal" class="text-blue-800 hover:underline cursor-pointer">пользовательским соглашением</span></label>
                    </div>

                    <button type="submit" class="text-white bg-green-700 hover:bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-green-500 focus:ring-2 transition">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('custom_components.modal-agreement')
