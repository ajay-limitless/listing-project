@extends('admin.layouts.master')

@section('contents')

<div class="card mt-5">
    <div class="card-header">
      <h4>Leads</h4>
    </div>

      <!-- Add Button -->
      <div style="position: fixed; right: 20px;">
        <a href="{{ route('admin.lead.create') }}" class="btn btn-primary">Add</a>
    </div>


    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-striped table-md">
          <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
          @foreach ($leads as $key=>$lead )
          <tr>


            <td>{{ $key+1 }}</td>
            <td>{{ $lead->name }}</td>
            <td>{{ $lead->email }}</td>
            <td>{{ $lead->phone }}</td>
            <td><div class="row">
                <a href="{{ route('admin.lead.edit',[$lead['id']]) }}" class="btn btn-info mr-2"><i class="fas fa-pen"></i></a>
                <a  class="btn btn-danger"  href="javascript:"
                                    data-id="lead-{{$lead['id']}}" ><i class="fas fa-trash"></i></a>
                </a>
                <form action="{{route('admin.lead.delete',[$lead['id']])}}" method="post" id="lead-{{$lead['id']}}">
                                    @method('DELETE')
                                    @csrf @method('delete')
                                </form>                
            </div></td>
          </tr>
          @endforeach

        </table>
      </div>
    </div>
    @if (count($leads)===0)
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
