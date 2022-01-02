@extends('login.layouts.common')
@section('title', 'Company')
@include('login.layouts.header')
@section('contents')

<div class="conttainer">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading text-center ft2 font-f">ShowCompanies</div>
        <table class="table table-striped panel-body">
          <thead>
            <tr>
              <th>CompanyID</th>
              <th>CompanyName</th>
              <th>Email</th>
              <th>logo</th>
              <th>website</th>
              <th width="100">&nbsp;</th>
              <th width="100">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($companies as $company)
            <tr>
              <td>{{ $company->id }}</td>
              <td>{{ $company->name }}</td>
              <td>{{ $company->email }}</td>
              <td>
                <img src="/uploads/{{ $company->logo }}" width="25px">
              </td>
              <td>{{ $company->website }}</td>
              <td>
                @can('admin')
                <form action="{{ route('companies.destroy',[$company->id]) }}"
                        method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-dell">
                      <i class="fas fa-trash-alt"></i>delete
                    </button>
                </form>
              </td>
              <td>
                <form action="{{ route('companies.edit',[$company->id]) }}" method="GET">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>edit
                  </button>
                </form>
                @endcan
              </td>
            </tr>
            @endforeach
          </tbody>
          {{ $companies->links('pagination::bootstrap-4') }}
        </table>
      </div>
    </div>
  </div>
</div>



@endsection
@include('login.layouts.footer')
