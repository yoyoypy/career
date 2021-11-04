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
            <label for="psychotest_1" class="form-control-label">URL Psikotest 1</label>
            <input  type="text"
                    name="psychotest_1"
                    value="{{ old('psychotest_1') }}"
                    placeholder="kosongkan jika tidak ada"
                    class="form-control @error('psychotest_1') is-invalid @enderror"/>
            @error('psychotest_1') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="psychotest_2" class="form-control-label">URL Psikotest 2</label>
            <input  type="text"
                    name="psychotest_2"
                    value="{{ old('psychotest_2') }}"
                    placeholder="kosongkan jika tidak ada"
                    class="form-control @error('psychotest_2') is-invalid @enderror"/>
            @error('psychotest_2') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="applications_id" class="form-control-label">Candidate</label>
              <select name="applications_id"
                      value="{{ old('applications_id') }}"
                      class="form-control col-sm-4 @error('applications_id') is-invalid @enderror">
                      <option value="">Select Candidate</option>
                      <option value="" disabled>---------------</option>
                    @foreach  ($applications as $application)
                      <option value="{{ $application->id}}">{{ $application->firstname }} {{ $application->lastname }}</option>
                    @endforeach
              </select>
            @error('applications_id') <div class="text-muted">{{ $message }}</div> @enderror
            <small class="form-text text-muted">Only candidates with <i>interview</i> status will appear</small>
        </div>
        <div class="form-group">
            <label for="branch_id" class="form-control-label">Interview Location</label>
              <select name="branch_id"
                      value="{{ old('branch_id') }}"
                      class="form-control col-sm-4 @error('branch_id') is-invalid @enderror">
                      <option value="">Select Branch</option>
                      <option value="" disabled>---------------</option>
                    @foreach  ($branches as $branch)
                      <option value="{{ $branch->id}}">{{ $branch->branch }} | PIC : {{ $branch->pic }}</option>
                    @endforeach
              </select>
            @error('applications_id') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    {{-- timepicker --}}
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
        <div class="row form-group">
            <label for="time" class="form-control-label">Time</label>
                <div class="col col-sm-3">
                    <input  type="text"
                            name="time"
                            value="{{ old('time') }}"
                            required
                            class="timepicker form-control @error('time') is-invalid @enderror"/>
                    @error('time') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
    {{-- timepicker --}}
    {{-- datepicker --}}
            <label for="date" class="form-control-label">Date</label>
                <div class="col col-sm-3">
                    <input  type="text"
                            name="date"
                            value="{{ old('date') }}"
                            placeholder="YYYY-MM-DD"
                            required
                            autocomplete="off"
                            id="datepicker"
                            class="form-control @error('date') is-invalid @enderror"/>
                    @error('date') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
        </div>
    {{-- datepicker --}}
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

{{-- datepicker --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
  </script>
{{-- datepicker --}}

{{-- timepicker --}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script>
    $(document).ready(function(){
    $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '09',
            maxTime: '5:00pm',
            defaultTime: '11',
            startTime: '10:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
});
</script>
{{-- timepicker --}}
