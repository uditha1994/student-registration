<h2>Add New Student</h2>

<form action="{{ route('students.store') }}" method="POST"></form>
@csrf
<label for="name">Name:</label>
<input type="text" name="name" placeholder="Name">
<label for="email">Email:</label>
<input type="email" name="email" placeholder="Email">
<label for="phone">Phone:</label>
<input type="text" name="phone" placeholder="Phone">
<button type="submit">Save</button>
</form>