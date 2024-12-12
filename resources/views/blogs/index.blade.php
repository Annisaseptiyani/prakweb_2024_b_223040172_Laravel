<h1>All Blogs</h1>
<a href="{{ route('blogs.create') }}">Create New Blog</a>
@foreach ($blogs as $blog)
    <div>
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->content }}</p>
        <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
        <form action="{{ route('blogs.destroy', $blog) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
