<x-admin.app>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(auth()->user()->is_admin())
                        Добро пожаловать в админ панель!
                    @else
                        Недостаточно прав для доступа к админ панели!
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-admin.app>
