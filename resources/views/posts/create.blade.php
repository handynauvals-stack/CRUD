@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title"
                required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content"
                required></textarea>
        </div>
        <button type="submit" class="btn btnprimary">Submit</button>
    </form>
</div>
@endsection