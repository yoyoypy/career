@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Skill</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('skill.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="skill" class="form-control-label">Skill Name</label>
          <input  type="text"
                  name="skill"
                  value="{{ old('skill') }}"
                  class="form-control @error('skill') is-invalid @enderror"/>
          @error('skill') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New Skill
            </button>
            <a href="{{ route('skill.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
