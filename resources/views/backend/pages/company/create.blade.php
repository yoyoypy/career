@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Company</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="company" class="form-control-label">Company Name</label>
          <input  type="text"
                  name="company"
                  value="{{ old('company') }}"
                  class="form-control @error('company') is-invalid @enderror"/>
          @error('company') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="company" class="form-control-label">Company Website</label>
            <input  type="text"
                    name="website"
                    value="{{ old('website') }}"
                    class="form-control @error('website') is-invalid @enderror"/>
            @error('website') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
          <div class="form-group">
              <label for="logo" class="form-control-label">Company Logo</label>
              <input  type="file"
                      name="logo"
                      value="{{ old('logo') }}"
                      accept="image"
                      class="form-control @error('logo') is-invalid @enderror"/>
              @error('logo') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New company
            </button>
            <a href="{{ route('company.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
