@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Schedule</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('interview.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title" class="form-control-label">Interview Title</label>
          <input  type="text"
                  name="title"
                  value="{{ old('title') }}"
                  required
                  class="form-control @error('title') is-invalid @enderror"/>
          @error('title') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="applications_id" class="form-control-label">Candidate</label>
              <select name="applications_id"
                      value="{{ old('applications_id') }}"
                      class="form-control @error('applications_id') is-invalid @enderror">
                    @foreach  ($applications as $application)
                      <option value="{{ $application->id}}">{{ $application->firstname }} {{ $application->lastname }}</option>
                    @endforeach
              </select>
            @error('applications_id') <div class="text-muted">{{ $message }}</div> @enderror
            <small class="form-text text-muted">Only candidates with <i>interview</i> status will appear</small>
        </div>
        <div class="form-group">
            <label for="date" class="form-control-label">Start Date</label>
            <input  type="text"
                    name="date"
                    value="{{ old('date') }}"
                    placeholder="YYYY-MM-DD"
                    required
                    autocomplete="off"
                    id="datepicker"
                    class="form-control @error('date') is-invalid @enderror"/>
            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
            @error('date') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New Schedule
            </button>
            <a href="{{ route('interview.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
  </script>
