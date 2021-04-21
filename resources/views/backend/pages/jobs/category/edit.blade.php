@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Edit Category</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('category.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="category" class="form-control-label">Location Name</label>
          <input  type="text"
                  name="category"
                  value="{{ old('category') ? old('category') : $item->category }}"
                  class="form-control @error('category') is-invalid @enderror"/>
          @error('category') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Edit Category
            </button>
            <a href="{{ route('category.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
