@extends('backend.layouts.default')

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Traffic Reports</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Job Vacancy all-time-viewed</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="col-sm-12 mb-4">
        <div class="card-group">
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-users"></i>
                    </div>

                    <div class="h4 mb-0">
                        <span class="count">{{ $total_job_view }}</span>
                    </div>

                    <small class="text-muted text-uppercase font-weight-bold">Total Job Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-users"></i>
                    </div>

                    <div class="h4 mb-0">
                        <span class="count">{{ $total_blog_view }}</span>
                    </div>

                    <small class="text-muted text-uppercase font-weight-bold">Total Blog Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">{{ $new }}</span>
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">New Application</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">{{ $interview }}</span>
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">Interview Application</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                </div>
            </div>


            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">{{ $reject }}</span>
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">Reject Application</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="animated fadeIn">
        <div class="row">
            @foreach ($job_traffic as $job)
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <img src="{{ Storage::url($job->JobCategory->image) }}" alt="img" style="max-width: 70px">
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">{{ $job->views_count }}</span> Views</div>
                                        <div class="stat-heading">{{ $job->jobtitle }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Traffic Reports</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Blog Post all-time-viewed</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            @foreach ($blog_traffic as $blog)
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <img src="{{ $blog->thumbnail }}" alt="img" style="max-width: 70px; max-height: 50px">
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">{{ $blog->views_count }}</span> Views</div>
                                        <div class="stat-heading">{{ $blog->title }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
