@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Value for {{ $question->title }}</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('question.value.store', $question->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="value" class="form-control-label">Value</label>
          <input  type="text"
                  name="value"
                  value="{{ old('value') }}"
                  class="form-control @error('value') is-invalid @enderror"/>
          @error('value') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New Value
            </button>
            <a href="{{ url()->previous() }}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
