@extends('layout')

@section('content')

<h2 class="mb-4">Edit Student</h2>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="email" name="email" value="{{ $student->email }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone :</label>
        <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>

@endsection