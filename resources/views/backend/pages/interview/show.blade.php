@extends('backend.layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Interview Schedule Detail</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Schedule Created</th>
                                    <th>Title</th>
                                    <th>Candidates</th>
                                    <th>Interview Schedule</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $interview->created_at->todatestring() }}</td>
                                        <td>{{ $interview->title }}</td>
                                        <td>{{ $interview->applicant->firstname }} {{ $interview->applicant->lastname }}</td>
                                        <td>{{ $interview->date }}</td>
                                        <td>
                                            <a href="{{ route('interview.edit', $interview->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-pencil"> Edit Schedule</i>
                                            </a>
                                            <form action="{{ route('interview.destroy', $interview->id) }}"
                                                method="post"
                                                class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                              <i class="fa fa-trash"></i>
                                            </button>
                                          </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-right" style="padding-right: 8px">
                    <div class="form-group" style="float: right">
                        <a href="{{ route('interview.index')}}" class="btn btn-warning btn-sm">
                            Back to Schedule
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
