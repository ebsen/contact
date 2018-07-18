@extends('layouts.app')

@section('content')
  {{-- Alerts --}}
  <div id="success" class="d-none col-12 alert alert-success" role="alert"></div>
  <div id="errors" class="d-none col-12 alert alert-danger" role="alert">
    <ul class="mb-0"></ul>
  </div>

  {{-- Form --}}
  <form id="contact" action="{{ url('contact') }}" method="POST">
    @csrf
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
    <button type="submit" class="btn btn-default justify-content-end">Submit</button>
  </form>
@endsection
