@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Create Student') }}</div>

                <div class="card-body">
                <div class="container">
    <h2 class="mt-5 mb-4 bg bg-info">Registration Form</h2>
    <form action="{{route('store.student')}}" method="post" class="bg bg-info">
        @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="roll">Roll:</label>
        <input type="text" class="form-control" name="roll" placeholder="Enter your roll number" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" name="age" placeholder="Enter your age" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" name="gender" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="district">District:</label>
        <input type="text" class="form-control" name="district" placeholder="Enter your district" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
