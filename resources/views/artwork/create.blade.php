@extends('layouts.app')
@section('title','createPage')

@section('content')

<div class="container">
        <h1>Add New Artwork</h1>

        <form action="{{ route('artworks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="artist_name">Artist Name</label>
                <input type="text" name="artist_name" id="artist_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="art_type">Art Type</label>
                <select name="art_type" id="art_type" class="form-control" required>
                    <option value="hội họa">Hội họa</option>
                    <option value="âm nhạc">Âm nhạc</option>
                    <option value="văn học">Văn học</option>
                </select>
            </div>

            <div class="form-group">
                <label for="media_link">Media Link</label>
                <input type="text" name="media_link" id="media_link" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cover_image">Cover Image</label>
                <input type="text" name="cover_image" id="cover_image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
