@props(['comment'])

<article class="flex bg-gray-200 border border-gray-100 rounded-xl mt-5">
    <div class="flex-shrink-0 mr-2">
        <img src="https://i.pravatar.cc/100?id={{ $comment->id }}" alt="" class="rounded-xl">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                Posted
                <time>
                    {{ $comment->created_at->diffForHumans() }}
                </time>
            </p>
        </header>
        <p>{{ $comment->body }}</p>
    </div>
</article>
