@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Branch</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('branch.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="branch" class="form-control-label">Branch Name</label>
          <input  type="text"
                  name="branch"
                  value="{{ old('branch') }}"
                  required
                  class="form-control @error('branch') is-invalid @enderror"/>
          @error('branch') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="pic" class="form-control-label">Branch PIC</label>
            <input  type="text"
                    name="pic"
                    value="{{ old('pic') }}"
                    required
                    class="form-control @error('pic') is-invalid @enderror"/>
            @error('pic') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="pic_phone" class="form-control-label">PIC Phone Number</label>
            <input  type="number"
                    name="pic_phone"
                    value="{{ old('pic_phone') }}"
                    placeholder="08xxxxxxxxxx"
                    required
                    class="form-control @error('pic_phone') is-invalid @enderror">
            @error('pic_phone') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="address" class="form-control-label">Branch Address</label>
            <textarea name="address"
                      required
                      class="form-control @error('address') is-invalid @enderror">{{ old('address')}}</textarea>
            @error('address') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New Branch
            </button>
            <a href="{{ route('branch.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
