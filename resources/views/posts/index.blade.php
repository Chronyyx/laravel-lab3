<div>
    <h1>All Blog Posts</h1>

    {{-- Loop through each post and display its title and author --}}
    @foreach ($posts as $post)
        <div>
            {{-- Link to view a single post --}}
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p>by {{ $post->author->name }}</p>
        </div>
    @endforeach
</div>
