@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Job Location</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('location.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="location" class="form-control-label">Location Name</label>
          <input  type="text"
                  name="location"
                  value="{{ old('location') }}"
                  class="form-control @error('location') is-invalid @enderror"/>
          @error('location') <div class="text-muted">{{ $message }}</div> @enderror
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
                Submit New Location
            </button>
            <a href="{{ route('location.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
