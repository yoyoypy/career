@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Question</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="jobvacancy_id" class="form-control-label">Job Vacancy</label>
                <select name="jobvacancy_id"
                        value="{{ old('jobvacancy_id') }}"
                        class="form-control @error('jobvacancy_id') is-invalid @enderror">
                        @foreach  ($jobs as $job)
                        <option value="{{ $job->id}}">{{ $job->jobtitle }}</option>
                        @endforeach
                </select>
        </div>
        <div class="form-group">
          <label for="title" class="form-control-label">Question Title</label>
          <input  type="text"
                  name="title"
                  value="{{ old('title') }}"
                  class="form-control @error('title') is-invalid @enderror"/>
          @error('title') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="question" class="form-control-label">Question</label>
            <input  type="text"
                    name="question"
                    placeholder="enter the question here"
                    value="{{ old('question') }}"
                    class="form-control @error('question') is-invalid @enderror"/>
            @error('question') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New Question
            </button>
            <a href="{{ route('question.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
