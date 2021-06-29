@extends('backend.layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Candidates List for <strong>{{ $items->jobtitle }}</strong></h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Job Vacancies</th>
                                    <th>Phone Number</th>
                                    <th>CV</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($items->Application->sortByDesc('created_at') as $item)
                                    <tr>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->Job->jobtitle }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td><a href="{{ $item->cv }}" class="btn btn-primary btn-sm"><i class="fa fa-download"> Download CV</i></a></td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ route('applicant.edit', $item->id) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-pencil"> Change Status</i>
                                            </a>
                                            @include('backend.pages.jobsapplication.show')
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#scrollmodal{{$item->id}}">
                                                <i class="fa fa-eye"> View</i>
                                            </button>
                                            {{--                                            <a href="{{ route('applicant.show', $item->id) }}" class="btn btn-info btn-sm">--}}
                                            {{--                                                <i class="fa fa-eye"></i>--}}
                                            {{--                                            </a>--}}
                                        </td>
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
                                {{--                            {{$items->links()}}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
