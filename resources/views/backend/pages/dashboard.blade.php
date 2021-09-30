@extends('backend.layouts.default')

@section('content')
    <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-news-paper"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{ $job_count }}</span></div>
                                            <div class="stat-heading">Total Job Open</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{ $applications_count }}</span></div>
                                            <div class="stat-heading">Total Applications</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Lamaran Terbaru </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Job vacancies</th>
                                                    <th>Detail</th>
                                                    <th>CV</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ( $applications as $item )
                                                <tr>
                                                    <td>{{ $item->firstname }}</td>
                                                    <td><a href="../admin/job/{{ $item->Job->id }}/candidate">{{ $item->Job->jobtitle }}</a></td>
                                                    <td>@include('backend.pages.jobsapplication.show')
                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#scrollmodal{{$item->id}}">
                                                            <i class="fa fa-eye"> View</i>
                                                        </button></td>
                                                    <td><a href="{{ $item->cv }}" class="btn btn-primary btn-sm"><i class="fa fa-download"> CV</i></a></td>
                                                    <td>
                                                        <a href="{{ route('applicant.edit', $item->id) }}" class="btn btn-success btn-sm">
                                                            <i class="fa fa-pencil"> Change Status</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                    @empty
                                                    <p>No Data found</p>
                                                    @endforelse
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">
                                            <div class="chart-container ov-h">
                                                <div id="flotPie1" class="float-chart"></div>
                                            </div>
                                        </div>
                                    </div><!-- /.card -->
                                </div>
                            </div>
                        </div> <!-- /.col-md-4 -->
                    </div>
                </div>
                <!-- /.orders -->
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
@endsection
