@extends('layouts.app')

@section('content')
  <form action="{{ url('contact') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="form-group col">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName">
      </div>
      <div class="form-group col">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="form-group col">
        <label for="website">Website</label>
        <input type="text" class="form-control" id="website" name="website">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col">
        <label for="comments">Comments</label>
        <input type="text" class="form-control" id="comments" name="comments">
      </div>
    </div>
    <button type="submit" class="btn btn-primary justify-content-end">Submit</button>
  </form>
@endsection
