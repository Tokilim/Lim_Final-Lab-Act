<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800 py-4 px-6">All Users</h3>

                <div class="p-6">
                    <table class="table table-hover">

                        <thead>
                            <th scope="col">id</th>
                            <th scope="col">category name</th>
                            <th scope="col">user id</th>
                            <th scope="col">Created at</th>
                        </thead>
                        <tbody>
                            @foreach($categories as $category) <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->category_name}} </td>
                                <td>{{$category->user_id}} </td>
                                <td>{{$category->created_at->diffforHumans()}} </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>