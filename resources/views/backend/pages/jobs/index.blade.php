@extends('backend.layouts.default')

@section('content')
<div class="orders">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Job Available</h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Job Title</th>
                    <th>Job Location</th>
                    <th>Job Category</th>
                    <th>Company</th>
                    <th>Start Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->jobtitle }}</td>
                      <td>{{ $item->Location->location }}</td>
                      <td>{{ $item->JobCategory->category }}</td>
                      <td>{{ $item->Company->company }}</td>
                      <td>{{ $item->start }}</td>
                      <td>{{ $item->status }}</td>
                      <td>
                        {{--  <a href="{{ route('products.gallery', $item->id) }}" class="btn btn-info btn-sm">
                         <a href="#" class="btn btn-info btn-sm">
                          <i class="fa fa-picture-o"></i>
                            </a> --}}
                        <a href="{{ route('job.edit', $item->id) }}" class="btn btn-primary btn-sm">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{ route('job.destroy', $item->id) }}"
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
                  @empty
                      <tr>
                        <td colspan="6" class="text-center p-5">
                          No Data Found
                        </td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
