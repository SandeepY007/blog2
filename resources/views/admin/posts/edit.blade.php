  <x-layout>
      <x-setting :heading="'Edit Post :' . $post->title">
          <form action="/admin/posts/{{$post->slug}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <x-form.input name="title" type="text" :value="old('title', $post->title)" />

              <x-form.input name="slug" type="text" :value="old('slug', $post->slug)" />

              <div>
                  <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                  <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl">
              </div>

              <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>

              <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

              <x-form.field>
                  <select name="category_id" id="category_id" class="border border-gray-500 width-full pl-4 pr-5">
                      @foreach (App\Models\Category::all() as $category)
                          <option
                              value="{{ $category->id }} {{ old('category_id', $post->slug) == $category->id ? 'selected' : '' }}">
                              {{ ucwords($category->name) }}</option>
                      @endforeach
                  </select>
                  <x-form.error name="category_id" />
              </x-form.field>
              <x-form.button>Submit</x-form.button>
          </form>
      </x-setting>
  </x-layout>
