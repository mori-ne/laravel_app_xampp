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
                                ID
                            </th>
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
                                詳細
                            </th>
                            <th>
                                編集
                            </th>
                            <th>
                                削除
                            </th>
                        </tr>
                        @foreach ($data as $userData)
                            <tr class="border">
                                <td class="px-4 py-1">
                                    {{ $userData->id }}
                                </td>
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
                                    <a href="./dashboard/show/{{ $userData->id }}">詳細</a>
                                </td>
                                <td>
                                    <a href="./dashboard/edit/{{ $userData->id }}">編集</a>
                                </td>
                                <td>
                                    <form action="dashboard" method="post">
                                        @method('delete')
                                        @csrf
                                        <input type="hidden" name="userId" value="{{ $userData->id }}">
                                        <button class="text-red-600" name="delete">削除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
