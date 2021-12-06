@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add Job Vacancy</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('job.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="jobtitle" class="form-control-label">Job Title</label>
          <input  type="text"
                  name="jobtitle"
                  value="{{ old('jobtitle') }}"
                  class="form-control @error('jobtitle') is-invalid @enderror"/>
          @error('jobtitle') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
          <label for="jobdescription" class="form-control-label">Job Description</label>
          <textarea name="jobdescription"
                    class="ckeditor form-control @error('jobdescription') is-invalid @enderror">{{ old('jobdescription')}}</textarea>
          @error('jobdescription') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
          <label for="joblocation_id" class="form-control-label">Job Location</label>
            <select name="joblocation_id"
                    value="{{ old('joblocation_id') }}"
                    class="form-control @error('joblocation_id') is-invalid @enderror">
                        <option value="">Select Job Location</option>
                        <option value="" disabled>-----------------</option>
                    @foreach  ($locations as $location)
                        <option value="{{ $location->id}}">{{ $location->location }}</option>
                    @endforeach
            </select>
          @error('jobcategory_id') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="jobcategory_id" class="form-control-label">Job Category</label>
              <select name="jobcategory_id"
                      value="{{ old('jobcategory_id') }}"
                      class="form-control @error('jobcategory_id') is-invalid @enderror">
                      <option value="">Select Job Category</option>
                      <option value="" disabled>-----------------</option>
                      @foreach  ($categories as $category)
                      <option value="{{ $category->id}}">{{ $category->category }}</option>
                  @endforeach
              </select>
            @error('jobcategory_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
            <label for="benefit" class="form-control-label">Benefit</label>
                <textarea name="benefit"
                      class="ckeditor form-control @error('benefit') is-invalid @enderror">{{ old('benefit')}}</textarea>
                <small class="form-text text-muted">tips: look nicer if you use bulleted list</small>
            @error('benefit') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="company_id" class="form-control-label">Company</label>
              <select name="company_id"
                      value="{{ old('company_id') }}"
                      class="form-control @error('company_id') is-invalid @enderror">
                      <option value="">Select Company</option>
                      <option value="" disabled>-----------------</option>
                    @foreach  ($companies as $company)
                      <option value="{{ $company->id}}">{{ $company->company }}</option>
                    @endforeach
              </select>
            @error('company_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
            <label for="position" class="form-control-label">Position Available</label>
              <input   type="number"
                        name="position"
                        value="{{ old('position') }}"
                        class="form-control @error('position') is-invalid @enderror"/>
            @error('position') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
          <div class="form-group">
              <label for="employment" class="form-control-label">Select Employment Type</label>
              <select name="employment"
                      value="{{ old('employment') }}"
                      class="form-control @error('employment') is-invalid @enderror">
                    <option value="">Select Employment Type</option>
                    <option value="" disabled>-----------------</option>
                    <option value="Full-time">Full-Time</option>
                    <option value="Internship">Internship</option>
              </select>
              @error('employment') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
            <label for="salary" class="form-control-label">Salary</label>
              <input   type="text"
                        name="salary"
                        value="Negotiable"
                        class="form-control @error('salary') is-invalid @enderror"/>
                <small class="form-text text-muted">input "Negotiable" if you dont want to show the salary</small>
            @error('salary') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="start" class="form-control-label">Start Date</label>
            <input  type="text"
                    name="start"
                    value="{{ old('start') }}"
                    autocomplete="off"
                    class="datepicker form-control @error('start') is-invalid @enderror"/>
            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
            @error('start') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="end" class="form-control-label">End Date</label>
            <input  type="text"
                    name="end"
                    value="{{ old('end') }}"
                    autocomplete="off"
                    class="datepicker form-control @error('end') is-invalid @enderror"/>
            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
            @error('end') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="status" class="form-control-label">Select Status</label>
              <select name="status"
                      value="{{ old('status') }}"
                      class="form-control @error('status') is-invalid @enderror">
                          <option value="active">Active</option>
                          <option value="inactive">Inactive</option>
              </select>
            @error('status') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit">
            Submit Job Vacancy
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection


<!--CKEditor5-->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
    $( function() {
        $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
  </script>
