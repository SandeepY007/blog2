@auth
    <section class="px-40 space-x-10">
        <div class="mb-4 mt-0 flex border border-gray-200 rounded-xl bg-gray-200">
            <img src="https://i.pravatar.cc/100?id={{ $post->id }}" alt="" class="rounded-xl">
            <main class=" mt-10 p-6 rounded-xl">
                <h1 class="text-center text-xl font-bold mb-6">Comment</h1>
                <form action="/posts/{{ $post->slug }}/comment" method="POST">
                    @csrf
                    <div class="mb-6">
                        <textarea name="body" id="body" cols="50" rows="3" placeholder="Enter comment here"
                            class="border border-gray-300 rounded-xl"></textarea><br>
                        <button type="submit" class="bg-blue-500 px-2 rounded-xl">Submit</button>
                    </div>
                </form>
            </main>
        </div>
    </section>
@else
    <p class="px-40 space-x-10 font-semibold">
        <a href="/register" class="hover:underline">Register</a> or<a href="login" class="hover:underline">log
            in</a> to comment on the post
    </p>
@endauth
