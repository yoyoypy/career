@extends('backend.layouts.default')

@section('content')
<div class="orders">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('question.create')}}" class="btn btn-info btn-sm" style="float: right">
                <i class="fa fa-pencil"> Add New Question</i>
              </a>
            <h4 class="box-title">Questions List</h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table">
                <thead>
                  <tr>
                    <th>Title Question</th>
                    <th>Question</th>
                    <th>Job Vacancy</th>
                    <th>Value</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->title }}</td>
                      <td>{{ Str::limit($item->question, 40) }}</td>
                      <td>{{ $item->job->jobtitle }}</td>
                      <td>
                        <a href="{{ route('question.value.index', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"> Tambah Jawaban</i>
                        </a>
                      </td>
                      <td>
                        <a href="{{ route('question.edit', $item->id) }}" class="btn btn-warning btn-sm">
                          Edit
                        </a>
                        <form action="{{ route('question.destroy', $item->id) }}"
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
