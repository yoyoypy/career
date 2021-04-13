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
            <label for="jobrequirement" class="form-control-label">Job Requirement</label>
            <textarea name="jobrequirement"
                      class="ckeditor form-control @error('jobrequirement') is-invalid @enderror">{{ old('jobdescription')}}</textarea>
            @error('jobrequirement') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
          <label for="joblocation_id" class="form-control-label">Job Location</label>
            <select name="joblocation_id"
                    value="{{ old('joblocation_id') }}"
                    class="form-control @error('joblocation_id') is-invalid @enderror">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
            </select>
          @error('jobcategory_id') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="jobcategory_id" class="form-control-label">Job Category</label>
              <select name="jobcategory_id"
                      value="{{ old('jobcategory_id') }}"
                      class="form-control @error('jobcategory_id') is-invalid @enderror">
                          <option value="0">Please select</option>
                          <option value="1">Option #1</option>
                          <option value="2">Option #2</option>
                          <option value="3">Option #3</option>
              </select>
            @error('jobcategory_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
            <label for="company_id" class="form-control-label">Company</label>
              <select name="company_id"
                      value="{{ old('company_id') }}"
                      class="form-control @error('company_id') is-invalid @enderror">
                          <option value="0">Please select</option>
                          <option value="1">Option #1</option>
                          <option value="2">Option #2</option>
                          <option value="3">Option #3</option>
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
            <label for="start" class="form-control-label">Start Date</label>
            <input  type="text"
                    name="start"
                    value="{{ old('start') }}"
                    class="form-control @error('start') is-invalid @enderror"/>
            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
            @error('start') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="end" class="form-control-label">End Date</label>
            <input  type="text"
                    name="end"
                    value="{{ old('end') }}"
                    class="form-control @error('end') is-invalid @enderror"/>
            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
            @error('end') <div class="text-muted">{{ $message }}</div> @enderror
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
