@extends('dashboard')

@section('content')
<div class="mx-12">
    <a href="{{ route('posts.create') }}">Create</a>
</div>

<table class="table-auto p-4">
    <thead>
        <th scope="col" class="px-6 py-3">ID</th>
        <th scope="col" class="px-6 py-3">Title</th>
        <th scope="col" class="px-6 py-3">Body</th>
        <th scope="col" class="px-6 py-3">Author name</th>
        <th scope="col" class="px-6 py-3">Actions</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">{{ $post->id }}</td>
            <td class="px-6 py-4">{{ $post->title }}</td>
            <td class="px-6 py-4">{{ $post->body }}</td>
            <td class="px-6 py-4">{{ $post->author_name }}</td>
            <td class="px-6 py-4">
                <a href="{{ route('posts.show', ['post' => $post->id]) }}">Show</a>
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
                <a href="{{ route('posts.delete', ['post' => $post->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
<tbody>    
</table>

@endsection