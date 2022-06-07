
@extends('dashboard')

@section('content')
<div class="mx-12 bg-slate-300 text-center rounded-lg border-8">
    <a href="{{ route('posts.create') }}" class='bg-slate-300'>
    Create Your Blog
    </a>
</div>

<table class='text-red-800 bg-orange-300'>
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Author name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->author_name }}</td>
                <td>
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                    Show
                    </a>
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                    Edit
                    </a>
                    <a href="{{ route('posts.delete', ['post' => $post->id]) }}">
                    Delete
                    </a>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>

@endsection