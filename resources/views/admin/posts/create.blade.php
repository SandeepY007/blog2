  <x-layout>
    <x-setting heading="Publish new post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" type="text" />

            <x-form.input name="slug" type="text" />

            <x-form.input name="thumbnail" type="file" />

            <x-form.textarea name="excerpt" />

            <x-form.textarea name="body" />

            <x-form.field>
                <select name="category_id" id="category_id" class="border border-gray-500 width-full pl-4 pr-5">
                    @foreach (App\Models\Category::all() as $category)
                        <option value="{{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : '' }}">
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category_id" />
            </x-form.field>
            <x-form.button>Submit</x-form.button>
        </form>
    </x-setting>
</x-layout>
