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
                        <form action="../../dashboard" method="post">
                            @method('PUT')
                            {{ csrf_field() }}
                            <tr>
                                <td>
                                    <p>
                                        <label>ID: </label>
                                        {{ $user->id }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="hidden" name="userId" value="{{ $user->id }}" />
                                    <div>
                                        <label>企業名</label>
                                        <input type="text" name="name" value="{{ $user->name }}" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <label>投稿者</label>
                                        <input type="text" name="creator" value="{{ $user->creator }}" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <label>投稿者カナ</label>
                                        <input type="text" name="creator_kana" value="{{ $user->creator_kana }}" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <label>メールアドレス</label>
                                        <input type="text" name="email" value="{{ $user->email }}" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="更新" />
                                </td>
                            </tr>
                        </form>

                    </table>
                    <a href="../">戻る</a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
