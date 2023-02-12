<x-layout>
    <x-setting heading="Manage new post">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                    @foreach($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{$post->thumbnail}}" alt="Poost Image">
                        </th>
                        <td class="px-8 py-4">
                           <a href="/posts/{{$post->slug}}"> {{$post->title}}</a>
                        </td>
                        <td class="px-8 py-4">
                            {{$post->excerpt}}
                        </td>
                        <td class="px-8 py-4">
                            Status
                        </td>
                        <td class="px-8 py-4">
                            <a href="/admin/posts/{{$post->slug}}/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-8 py-4">
                            <form method="post" action="/admin/posts/{{$post->slug}}">
                                @csrf
                                @method('DELETE')
                                
                                <button>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> ​
    </x-setting>
</x-layout>
