<!-- resources/views/contacts/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="{{ url('/contacts/' . $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $contact->name }}" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ $contact->phone }}" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br><a href="{{ url('/') }}">Back to List</a>
</body>
</html>
