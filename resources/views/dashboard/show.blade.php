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
                        <tr>
                            <td>
                                <div>ID: {{ $user->id }}</div>
                                <div>企業名: {{ $user->name }}</div>
                                <div>投稿者: {{ $user->creator }}</div>
                                <div>投稿者カナ: {{ $user->creator_kana }}</div>
                                <div>メールアドレス: {{ $user->email }}</div>
                            </td>
                        </tr>
                    </table>
                    <a href="../">戻る</a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
