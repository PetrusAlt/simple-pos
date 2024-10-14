<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if ( $customers )
            <div class="bg-white dark:bg-gray-800 mb-10 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <h1 class="text-3xl font-bold">Customers list</h1>
                        <button class="mx-3 px-4 h-auto border border-slate-800">+</button>
                    </div>
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="h-10 font-bold text-lg">
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($customers as $item)
                            <tr>
                                <td> {{ $item['name'] }} </td>
                                <td> {{ $item['address'] }} </td>
                                <td> {{ $item['phone'] }} </td>
                                <td> {{ $item['description'] }} </td>
                                <td class="text-center"> {{ __('Edit') }} {{ __('Delete') }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        @if ( $products )
            <div class="bg-white dark:bg-gray-800 mb-10 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <h1 class="text-3xl font-bold">Products list</h1>
                        <button class="mx-3 px-4 h-auto border border-slate-800">+</button>
                    </div>
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="h-10 font-bold text-lg">
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td> {{ $item['name'] }} </td>
                                <td> {{ $item['description'] }} </td>
                                <td class="text-center"> {{ __('Edit') }} {{ __('Delete') }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        @if ( $orders )
            <div class="bg-white dark:bg-gray-800 mb-10 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <h1 class="text-3xl font-bold">Orders list</h1>
                        <button class="mx-3 px-4 h-auto border border-slate-800">+</button>
                    </div>
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="h-10 font-bold text-lg">
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Total</th>
                                <th>Grandtotal</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $item)
                            <tr>
                                <td> {{ $item['name'] }} </td>
                                <td> {{ $item['phone'] }} </td>
                                <td> {{ $item['total'] }} </td>
                                <td> {{ $item['grandtotal'] }} </td>
                                <td class="text-center"> {{ __('Edit') }} {{ __('Delete') }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        </div>
    </div>
</x-app-layout>
