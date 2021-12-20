@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Blog</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title" class="form-control-label">Blog Title</label>
          <input  type="text"
                  name="title"
                  value="{{ old('title') }}"
                  class="form-control @error('title') is-invalid @enderror"/>
          @error('title') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Blog Description</label>
            <textarea name="description"
                      class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
              <label for="thumbnail" class="form-control-label">Blog Thumbnail</label>
              <input  type="file"
                      required
                      name="thumbnail"
                      value="{{ old('thumbnail') }}"
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

<!--CKEditor5-->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
