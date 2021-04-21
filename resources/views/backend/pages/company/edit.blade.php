@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Edit Company</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('company.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="company" class="form-control-label">Company Name</label>
          <input  type="text"
                  name="company"
                  value="{{ old('company') ? old('company') : $item->company }}"
                  class="form-control @error('company') is-invalid @enderror"/>
          @error('company') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Edit Company
            </button>
            <a href="{{ route('company.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
