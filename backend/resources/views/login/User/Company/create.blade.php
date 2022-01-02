@extends('login.layouts.common')
@section('title', 'CompanyCreate')
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
      <h2 class="text-center">Company Create</h2>
      <form action="{{ route('companies.store') }}" method="POST"
            enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="company-name">CompanyName</label>
          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="company-email">ComapanyEmail</label>
          <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="company_logo">Company_logo</label><br>
          <input type="file" name="file">
        </div>
        <div class="form-group">
          <label for="company-website">CompanyWebsite</label>
          <input type="text" name="website" class="form-control" value="{{ old('website') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
@include('login.layouts.footer')
