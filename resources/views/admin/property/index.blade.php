@extends('admin.layouts.master')

@section('contents')

<div class="card mt-5">
    <div class="card-header">
      <h4>properties</h4>
    </div>

      <!-- Add Button -->
      <div style="position: fixed; right: 20px;">
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Add</a>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-striped table-md">
          <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>type</th>
            <th>Address</th>
            <th>Bedrooms</th>
            <th>Bathrooms</th>
          </tr>

          @foreach ($properties as $key=>$property )
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $property->title }}</td>
            <td>{{ $property->type }}</td>
            <td>{{ $property->address }}</td>
            <td>{{ $property->bedrooms }}</td>
            <td>{{ $property->bathrooms }}</td>
            <td><div class="row">
                <a href="#" class="btn btn-info mr-2"><i class="fas fa-pen"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            </div></td>
          </tr>
          @endforeach

        </table>
      </div>
    </div>
    @if (count($properties)===0)
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
