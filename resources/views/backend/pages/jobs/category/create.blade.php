@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Job Category</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="category" class="form-control-label">Category Name</label>
          <input  type="text"
                  name="category"
                  value="{{ old('category') }}"
                  class="form-control @error('category') is-invalid @enderror"/>
          @error('category') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
          <div class="form-group">
              <label for="image" class="form-control-label">Image Thumbnail</label>
              <input  type="file"
                      name="image"
                      value="{{ old('image') }}"
                      class="form-control @error('image') is-invalid @enderror"/>
              @error('image') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New Category
            </button>
            <a href="{{ route('category.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
