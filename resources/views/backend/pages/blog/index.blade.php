@extends('backend.layouts.default')

@section('content')
<div class="orders">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('blog.create')}}" class="btn btn-info btn-sm" style="float: right">
                <i class="fa fa-pencil"> Post New Blog</i>
              </a>
            <h4 class="box-title">Blogs List</h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Total Views</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->title }}</td>
                      <td><img src="{{ url($item->thumbnail) }}" alt="Wrong url" style="max-width: 100px"></td>
                      <td>{{ $item->views_count }}</td>
                      <td>
                        <a href="{{ route('blog.edit', $item->id) }}" class="btn btn-primary btn-sm">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{ route('blog.destroy', $item->id) }}"
                              method="post"
                              class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?')">
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
