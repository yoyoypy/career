@extends('backend.layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (\Route::current()->getName() == 'candidate')
                            <form action="{{ route('candidate', $job->id) }}" method="GET">
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-search"></i> Search
                                                </button>
                                            </div>
                                            <input  type="number"
                                                    name="salary"
                                                    placeholder="Input Max Salary"
                                                    value="{{ old('salary') }}"
                                                    required
                                                    class="form-control col col-sm-3 @error('salary') is-invalid @enderror"/>
                                                    @error('salary') <div class="text-muted">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                        <h4 class="box-title">Applications List</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Job Vacancies</th>
                                    <th>Expected Salary</th>
                                    <th>CV</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                @if (\Route::current()->getName() == 'applicant.rejected')
                                    <th>delete</th>
                                @endif
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->firstname }}</td>
                                        <td>{{ $item->Job->jobtitle }}</td>
                                        <td>Rp {{ number_format($item->salary) }}</td>
                                        <td><a href="{{ route('view-cv', $item->id) }}" target="new" class="btn btn-info btn-sm"><i class="fa fa-file-pdf-o"> View CV</i></a></td>
                                        <td>
                                            @if($item->status == 'new')
                                            <span class="badge badge-primary">
                                          @elseif($item->status == 'interview')
                                            <span class="badge badge-warning">
                                          @elseif($item->status == 'hired')
                                            <span class="badge badge-success">
                                          @elseif($item->status == 'rejected')
                                            <span class="badge badge-danger">
                                          @else
                                            <span>
                                          @endif
                                          {{ $item->status }}
                                            </span></td>
                                        <td>
                                            <a href="{{ route('applicant.edit', $item->id) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-pencil"> Change Status</i>
                                            </a>
                                            @include('backend.pages.jobsapplication.show')
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#scrollmodal{{$item->id}}">
                                                <i class="fa fa-eye"> Detail View</i>
                                            </button>
                                        </td>
                                    @if (\Route::current()->getName() == 'applicant.rejected')
                                        <td>
                                        <form action="{{ route('applicant.destroy', $item->id) }}"
                                                method="post"
                                                class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                              <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        </td>
                                    @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-5">
                                            No Data Found
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            <div class="row justify-content-md-center">
                           {{$items->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
