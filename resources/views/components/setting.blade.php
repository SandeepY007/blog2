@props(['heading'])
<section class="px-6 py-8 flex">
    <div class="">
        <h1 class="mb-5 font-serif text-xl px-7">{{ $heading }}</h1>
        <aside class="w-48">
            <h1 class="px-7 text-xl font-bold">Links</h1>
            <ul>
                <li>
                    <a href="/admin/posts/create" class="px-7 text-xl font-bold {{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Most</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/admin/posts"
                        class="px-7 text-xl font-bold {{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">Manage
                        Post</a>
                </li>
            </ul>
        </aside>
    </div>
    <main class="mt-10 border border-gray-500 p-6 rounded-xl bg-gray-100 w-23">
        {{ $slot }}
    </main>
</section>
