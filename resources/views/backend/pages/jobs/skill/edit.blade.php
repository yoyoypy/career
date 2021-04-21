@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Edit Skill</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('skill.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="skill" class="form-control-label">Skill Name</label>
          <input  type="text"
                  name="skill"
                  value="{{ old('skill') ? old('skill') : $item->skill }}"
                  class="form-control @error('skill') is-invalid @enderror"/>
          @error('skill') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Edit Skill
            </button>
            <a href="{{ route('skill.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
