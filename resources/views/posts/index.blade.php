<div>
    <h1>All Blog Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p>by {{ $post->author->name }}</p>
        </div>
    @endforeach
</div>
