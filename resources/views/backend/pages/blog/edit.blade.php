@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Edit Blog</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('blog.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="title" class="form-control-label">Blog Title</label>
          <input  type="text"
                  name="title"
                  value="{{ old('title') ? old('title') : $item->title }}"
                  class="form-control @error('title') is-invalid @enderror"/>
          @error('title') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Blog Description</label>
            <textarea name="description"
                      class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
              <label for="thumbnail" class="form-control-label">Blog Thumbnail</label>
              <input  type="file"
                      name="thumbnail"
                      value="{{ old('thumbnail') ? old('thumbnail') : $item->thumbnail }}"
                      accept="image"
                      class="form-control @error('thumbnail') is-invalid @enderror"/>
                      <small><strong>jpg/jpeg/png format</strong></small>
              @error('thumbnail') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Post New Blog
            </button>
            <a href="{{ route('blog.index')}}" class="btn btn-danger btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
