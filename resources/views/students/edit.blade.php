<h2>Edit Student</h2>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name :</label>
    <input type="text" name="name" value="{{ $student->name }}">
    <label for="email">Email :</label>
    <input type="email" name="email" value="{{ $student->email }}">
    <label for="phone">Phone :</label>
    <input type="text" name="phone" value="{{ $student->phone }}">
    <button type="submit">Update</button>
</form>