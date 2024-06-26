<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}

<table class="w-full mx-auto sm:px-6 lg:px-8">
    <tr class="border">
        <th>
            会社名
        </th>
        <th>
            作成者名
        </th>
        <th>
            作成者名（ふりがな）
        </th>
        <th>
            メールアドレス
        </th>
        <th>
            編集
        </th>
        <th>
            削除
        </th>
    </tr>
    @foreach($data as $userData)
    <tr class="border">
        <td class="px-4 py-1">
            {{ $userData->name }}
        </td>
        <td class="px-4 py-1">
            {{ $userData->creator }}
        </td>
        <td class="px-4 py-1">
            {{ $userData->creator_kana }}
        </td>
        <td class="px-4 py-1">
            {{ $userData->email }}
        </td>
        <td>
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">編集</button>
        </td>
        <td>
            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">削除</button>
        </td>
    </tr>
    @endforeach
</table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
