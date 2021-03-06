@extends('backend.layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Status  {{$item->firstname}}</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('applicant.update', $item->id) }}" method="POST"">
                @method('PUT')
                @csrf
            <div class="form-group">
                <label for="status" class="form-control-label">Select Status</label>
                <select name="status"
                        value="{{ old('status') ? old('status') : $item->status }}"
                        class="form-control @error('status') is-invalid @enderror">
                    <option value="">Select Status</option>
                    <option value="" disabled>-----------------</option>
                    <option value="new">New</option>
                    <option value="qualified">Qualified</option>
                    <option value="interview">Interview</option>
                    <option value="hired">Hired</option>
                    <option value="rejected">Rejected</option>
                </select>
                @error('status') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="text-right" style="padding-right: 8px">
            <div class="form-group" style="float: right">
                <button class="btn btn-primary btn-sm" type="submit">
                    Edit Status
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-warning btn-sm">
                    Cancel
                </a>
            </div>
        </div>
        </form>
    </div>
@endsection
