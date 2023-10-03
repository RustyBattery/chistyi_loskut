<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Контакты</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="mb-2">
                    <h2 class="text-xl font-semibold text-green-800 mb-3">Контакты</h2>
                </div>
                <div class="mb-3">
                    <a class="block text-sm font-semibold text-blue-900 hover:text-gray-500 transition mb-1" href="tel:+79456652474">+7(495)665-24-74</a>
                    <a class="block text-sm font-semibold text-blue-900 hover:text-gray-500 transition mb-1" href="tel:+79266032991">+7(926)603-29-91</a>
                    <p class="text-sm">Прием звонков с 9:00 до 18:00 (Пн-Пт)</p>
                </div>
                <div class="mb-3">
                    <h4 class="font-semibold text-green-800 text-lg">Адрес склада</h4>
                    <a href="https://yandex.ru/maps/-/CDUANC4a" class="hover:text-gray-500 transition font-semibold text-blue-900 text-sm">117405, г. Москва, ул. Дорожная, дом 21а </a>
                </div>
                <div class="mb-3">
                    <h4 class="font-semibold text-green-800 text-lg">Email</h4>
                    <a href="mailto:mi24leta@yandex.ru" class="hover:text-gray-500 transition font-semibold text-blue-900 text-sm">mi24leta@yandex.ru</a>
                </div>
                <div class="mb-3">
                    <h4 class="font-semibold text-green-800 text-lg mb-2">Реквизиты компании</h4>
                    <table class="table-auto border-collapse border border-slate-400 shadow text-sm sm:text-base">
                        <tbody>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Полное наименование организации</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">Общество с ограниченной ответственностью «ЧИСТЫЙ ЛОСКУТ»</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Сокращенное наименование организации</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">ООО «ЧИСТЫЙ ЛОСКУТ»</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">ИНН</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">9722007393</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">КПП</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">772201001</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">ОГРН</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">1217700421553</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">ОКПО</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">55612061</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Юридический адрес</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">109316, г. Москва, ул. Талалихина, д. 41, стр. 9, этаж 6, офис 61</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Фактический адрес</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">109316, г. Москва, ул. Талалихина, д. 41, стр. 9, этаж 6, офис 61</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Контактный телефон</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">+7(495)665-24-74</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Электронная почта</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">mi24leta@yandex.ru</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Расчётный счёт</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">40702810402270002871</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Наименование банка</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">АО «Альфа-Банк», г. Москва</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">БИК</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">044525593</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Корреспондентский счёт</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">30101810200000000593</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Генеральный директор</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">Журбенко Светлана Викторовна</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 bg-gray-100">Главный бухгалтер</td>
                                <td class="border border-slate-300 p-2 bg-gray-50">Журбенко Светлана Викторовна</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
