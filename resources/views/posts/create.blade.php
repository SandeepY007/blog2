  <x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mt-10 mx-auto border border-gray-500 p-6 rounded-xl bg-gray-100">
            <h1 class="text-center text-xl font-bold mb-6">Post</h1>
            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{old('title')}}" class="border border-gray-400 p-2 w-full ">
                    <span class="text-red-500 text-sm">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{old('slug')}}" class="border border-gray-400 p-2 w-full ">
                    <span class="text-red-500 text-sm">
                        @error('slug')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">Thubmnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" value="{{old('thumbnail')}}" class="border border-gray-400 p-2 w-full ">
                    <span class="text-red-500 text-sm">
                        @error('thumbnail')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>
                    <textarea type="text" name="excerpt" id="excerpt" class="border border-gray-400 p-2 w-full ">{{old('excerpt')}}</textarea>
                    <span class="text-red-500 text-sm">
                        @error('excerpt')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                    <textarea type="text" name="body" id="body" class="border border-gray-400 p-2 w-full ">{{old('body')}}</textarea>
                    <span class="text-red-500 text-sm">
                        @error('body')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-6">
                    <select name="category_id" id="category_id" class="border border-gray-500 width-full pl-4 pr-5">
                        @foreach (App\Models\Category::all() as $category)
                            <option value="{{ $category->id }} {{old('category_id')== $category->id ? 'selected' : ''}}">{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    <span class="text-red-500 text-sm">
                        @error('category_id')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <button type="submit" class="bg-blue-500 rounded-xl px-2 con">Submit</button>
            </form>
        </main>
    </section>
</x-layout>
