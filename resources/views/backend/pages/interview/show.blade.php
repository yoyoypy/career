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
                                    <th>Interview Location</th>
                                    <th>Interview Schedule</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $item->created_at->diffForHumans() }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->applicant->firstname }} {{ $item->applicant->lastname }}</td>
                                        <td>{{ $item->branch->branch }}</td>
                                        <td>{{ $item->date }} {{ $item->time }}</td>
                                        <td>
                                            <a href="{{ route('interview.edit', $item->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-pencil"> Edit Schedule</i>
                                            </a>
                                            <form action="{{ route('interview.destroy', $item->id) }}"
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
                    @if ($item->send_mail == false)
                    <div class="form-group" style="float: left">
                        <form action="{{ route('invite', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="float: left">
                            <button class="btn btn-primary btn-sm" type="submit" onclick="this.form.submit(); this.disabled=true;">
                                Send Invitation
                            </button>
                        </div>
                        </form>
                    </div>
                    @else
                    <div class="form-group" style="float: left">
                        <div class="form-group" style="float: left">
                            <button class="btn btn-danger btn-sm disabled" type="submit">
                                Invitation Already Send !
                            </button>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
