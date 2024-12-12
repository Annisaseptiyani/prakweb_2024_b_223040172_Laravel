<h1>Create Blog</h1>
<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="content" placeholder="Content"></textarea>
    <button type="submit">Create</button>
</form>
