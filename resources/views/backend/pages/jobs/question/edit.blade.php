@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Edit Question {{ $item->title }}</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('question.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="jobvacancy_id" class="form-control-label">Job Vacancy</label>
                <select name="jobvacancy_id"
                        value="{{ old('jobvacancy_id') ? old('jobvacancy_id') : $item->jobvacancy_id }}"
                        class="form-control @error('jobvacancy_id') is-invalid @enderror">
                        @foreach  ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->jobtitle }}</option>
                        @endforeach
                </select>
        </div>
        <div class="form-group">
          <label for="title" class="form-control-label">Question Title</label>
          <input  type="text"
                  name="title"
                  value="{{ old('title') ? old('title') : $item->title }}"
                  class="form-control @error('title') is-invalid @enderror"/>
          @error('title') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="question" class="form-control-label">Question</label>
            <input  type="text"
                    name="question"
                    placeholder="enter the question here"
                    value="{{ old('question') ? old('question') : $item->question }}"
                    class="form-control @error('question') is-invalid @enderror"/>
            @error('question') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="value_1" class="form-control-label">Jawaban 1</label>
            <input  type="text"
                    name="value_1"
                    placeholder="masukan jawaban kesatu disini"
                    value="{{ old('value_1') ? old('value_1') : $item->value_1 }}"
                    class="form-control @error('value_1') is-invalid @enderror"/>
            @error('value_1') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="value_2" class="form-control-label">Jawaban 2</label>
            <input  type="text"
                    name="value_2"
                    placeholder="kosongkan jika tidak ada"
                    value="{{ old('value_2') ? old('value_2') : $item->value_2 }}"
                    class="form-control @error('value_2') is-invalid @enderror"/>
            @error('value_2') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="value_3" class="form-control-label">Jawaban 3</label>
            <input  type="text"
                    name="value_3"
                    placeholder="kosongkan jika tidak ada"
                    value="{{ old('value_3') ? old('value_3') : $item->value_3 }}"
                    class="form-control @error('value_3') is-invalid @enderror"/>
            @error('value_3') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="value_4" class="form-control-label">Jawaban 4</label>
            <input  type="text"
                    name="value_4"
                    placeholder="kosongkan jika tidak ada"
                    value="{{ old('value_4') ? old('value_4') : $item->value_4 }}"
                    class="form-control @error('value_4') is-invalid @enderror"/>
            @error('value_4') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="value_5" class="form-control-label">Jawaban 5</label>
            <input  type="text"
                    name="value_5"
                    placeholder="kosongkan jika tidak ada"
                    value="{{ old('value_5') ? old('value_5') : $item->value_5 }}"
                    class="form-control @error('value_5') is-invalid @enderror"/>
            @error('value_5') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Update Question
            </button>
            <a href="{{ route('question.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
