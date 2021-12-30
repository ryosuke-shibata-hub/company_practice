@extends('login.layouts.common')
@section('title', 'Employee')
@include('login.layouts.header')
@section('contents')

<div class="conttainer">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading text-center ft2 font-f">ShowEmployee</div>
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
            @foreach($employees as $employee)
              <tr>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->company_id }}</td>
                <td>
              <form action="{{ route('Employees.destroy',[$employee->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger btn-dell">
                    <i class="fas fa-trash-alt"></i>delete
                  </button>
                </form>
              </td>
              <td>
                <form action="{{ route('Employees.edit',[$employee->id]) }}" method="GET">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>edit
                  </button>
                </form>
              </td>
              </tr>
            @endforeach
          </tbody>
             {{ $employees->links('pagination::bootstrap-4') }}
        </table>
      </div>
    </div>
  </div>
</div>



@endsection
@include('login.layouts.footer')
