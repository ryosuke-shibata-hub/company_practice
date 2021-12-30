@extends('login.layouts.common')
@section('title', 'EmployeeCreate')
@include('login.layouts.header')
@section('contents')

<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <h2 class="text-center">CreateEmployee</h2>
      <form action="{{ route('Employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="first_name">first_name</label>
          <input type="text" name="first_name" class="form-control"
                  value="{{ old('first_name') }}">
        </div>
        <div class="form-group">
          <label for="last_name">last_name</label>
          <input type="text" name="last_name" class="form-control"
                  value="{{ old('last_name') }}">
        </div>
        <div class="form-group">
          <label>Belonging company</label>
          <select name="company_id">
            <option value="">------------------------------------</option>
            @foreach($companies as $companies)
              <option value="{{ $companies->id }}">
                {{ $companies->name }}
              </option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
@include('login.layouts.footer')
