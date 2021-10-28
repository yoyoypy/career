@extends('backend.layouts.default')

@section('content')
<div class="orders">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('branch.create')}}" class="btn btn-info btn-sm" style="float: right">
                <i class="fa fa-pencil"> Add New Branch</i>
              </a>
            <h4 class="box-title">Branches List</h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Branch</th>
                    <th>PIC</th>
                    <th>PIC Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->branch }}</td>
                      <td>{{ $item->pic }}</td>
                      <td>{{ $item->pic_phone }}</td>
                      <td>{{ Str::limit($item->address, 50) }}</td>
                      <td>
                        <a href="{{ route('branch.edit', $item->id) }}" class="btn btn-primary btn-sm">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{ route('branch.destroy', $item->id) }}"
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
