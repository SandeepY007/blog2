<x-layout>
    <article>
        <article>
            <h1>{{ $post->title }}</h1>
            <p>Written By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> :- <a
                    href="#">{{ $post->category->name }}</a></p>
            <p>{!! $post->body !!}</p>
        </article>
        <a href="/">
            <h1>Go Back</h1>
        </a>
    </article>
</x-layout>
