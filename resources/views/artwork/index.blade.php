@extends('layouts.app')
@section('title','homeArtwork')
@section('content')
<div class="container">
    <h1>Index Page</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Artist Name</th>
                <th>Description</th>
                <th>Art Type</th>
                <th>Media Link</th>
                <th>Cover Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artworks as $artwork)
            <tr>
                <td>{{ $artwork->id }}</td>
                <td>{{ $artwork->artist_name }}</td>
                <td>{{ $artwork->description }}</td>
                <td>{{ $artwork->art_type }}</td>
                <td>{{ $artwork->media_link }}</td>
                <td>{{ $artwork->cover_image }}</td>
                <td>
                    <a href="{{ route('artworks.show', $artwork->id) }}" class="btn btn-primary">Details</a>
                    <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('artworks.destroy', $artwork->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('artworks.create') }}" class="btn btn-success">Add New book</a>
</div>

@endsection
