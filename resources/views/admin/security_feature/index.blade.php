@extends('admin.layouts.master')

@section('contents')

<div class="card mt-5">
    <div class="card-header">
      <h4>Security Feature</h4>
    </div>

      <!-- Add Button -->
      <div style="position: fixed; right: 20px;">
        <a href="{{ route('admin.security_feature.create') }}" class="btn btn-primary">Add</a>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-striped table-md">
          <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
          </tr>

          @foreach ($security_features as $key=>$security_feature )
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $security_feature->name }}</td>
            <td>{{ $security_feature->status }}</td>
            <td><div class="row">
                <a href="#" class="btn btn-info mr-2"><i class="fas fa-pen"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            </div></td>
          </tr>
          @endforeach

        </table>
      </div>
    </div>
    @if (count($security_features)===0)
    <div>empty</div>

    @endif
    <div class="card-footer text-right">
      <nav class="d-inline-block">
        <ul class="pagination mb-0">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-right"></i></a>
          </li>

        </ul>
      </nav>
    </div>
  </div>

@endsection