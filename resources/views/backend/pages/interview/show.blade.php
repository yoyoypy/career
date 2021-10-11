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
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $interview->created_at->todatestring() }}</td>
                                        <td>{{ $interview->title }}</td>
                                        <td>{{ $interview->applicant->firstname }} {{ $interview->applicant->lastname }}</td>
                                        <td>{{ $interview->date }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
