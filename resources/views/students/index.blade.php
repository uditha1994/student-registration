@extends('layout')

@section('content')

<h2 class="mb-4">Student List</h2>
<a href="{{route('students.create')}}" class="btn btn-primary mb-3">Add New Student</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr class="table-dark">
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn=warning">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection