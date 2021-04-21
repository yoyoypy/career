@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Edit Location</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('location.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="location" class="form-control-label">Location Name</label>
          <input  type="text"
                  name="location"
                  value="{{ old('location') ? old('location') : $item->location }}"
                  class="form-control @error('location') is-invalid @enderror"/>
          @error('location') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Edit Location
            </button>
            <a href="{{ route('location.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
