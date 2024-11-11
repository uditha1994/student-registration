@extends('layout')
@section('content')

<h2 class="mb-4">Add New Student</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" placeholder="Name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone:</label>
        <input type="text" name="phone" placeholder="Phone" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>

@endsection