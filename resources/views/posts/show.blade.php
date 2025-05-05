<div>
    {{-- Display the blog post content --}}
    <h1>{{ $post->title }}</h1>
    <p>by {{ $post->author->name }}</p>
    <p>{{ $post->content }}</p>

    {{-- Show all comments for this post --}}
    <h3>Comments:</h3>
    @foreach ($post->comments as $comment)
        <div>
            <strong>{{ $comment->commenter_name }}</strong>: {{ $comment->comment }}
        </div>
    @endforeach

    {{-- Form to add a new comment --}}
    <h3>Add a comment</h3>
    <form method="POST" action="/posts/{{ $post->id }}/comments">
        @csrf
        <input type="text" name="commenter_name" placeholder="Your name">
        <textarea name="comment" placeholder="Your comment"></textarea>
        <button type="submit">Submit</button>
    </form>

    {{-- Display success message after submission --}}
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</div>
