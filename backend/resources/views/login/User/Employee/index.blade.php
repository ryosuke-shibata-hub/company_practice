@extends('login.layouts.common')
@section('title', 'Employee')
@include('login.layouts.header')
@section('contents')

<div class="conttainer">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">ShowEmployee</div>
        <table class="table table-striped panel-body">
          <thead>
            <tr>
              <th>FirstName</th>
              <th>LastName</th>
              <th>CompanyID</th>
              <th width="100">&nbsp;</th>
              <th width="100">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($employees as $employees)
              <tr>
                <td>{{ $employees->first_name }}</td>
                <td>{{ $employees->last_name }}</td>
                <td>{{ $employees->company_id }}</td>
                <td>
              <form action="{{ route('Employees.destroy',[$employees->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger btn-dell">
                    <i class="fas fa-trash-alt"></i>delete
                  </button>
                </form>
              </td>
              <td>
                <form action="{{ route('Employees.edit',[$employees->id]) }}" method="GET">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>edit
                  </button>
                </form>
              </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



@endsection
@include('login.layouts.footer')
