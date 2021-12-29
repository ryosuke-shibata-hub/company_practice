@extends('login.layouts.common')
@section('title', 'Company')
@include('login.layouts.header')
@section('contents')

<div class="conttainer">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Companies一覧</div>
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
            @foreach($companies as $companies)
            <tr>
              <td>{{ $companies->id }}</td>
              <td>{{ $companies->name }}</td>
              <td>{{ $companies->email }}</td>
              <td>{{ $companies->logo }}</td>
              <td>{{ $companies->website }}</td>
              <td>
                <form action="" method="GET">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i>delete
                  </button>
                </form>
              </td>
              <td>
                <form action="{{ route('companies.edit',[$companies->id]) }}" method="GET">
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
