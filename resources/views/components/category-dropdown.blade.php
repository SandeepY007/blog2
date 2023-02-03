<div>
    <x-dropdown>
        <x-slot name="trigger">
            <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex w-full">

                {{ isset($currentCategory) ? $currentCategory->name : 'Category' }}

                <x-down-arrow class="absolute pointer-events-none" style="right: 12px;" />
            </button>
        </x-slot>
        <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home') && is_null(request()->getQueryString())">
            All
        </x-dropdown-item>
        @foreach ($categories as $category)
            <x-dropdown-item
                href="/?categories={{ $category->slug }} & {{ http_build_query(request()->except('category','page')) }}"
                :active="isset($currentCategory) && $currentCategory->is($category)">
                {{ ucwords($category->name) }}
            </x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>
