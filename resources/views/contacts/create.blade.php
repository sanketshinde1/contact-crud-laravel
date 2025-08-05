<!-- resources/views/contacts/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
</head>
<body>
    <h1>Add New Contact</h1>

    <form action="{{ url('/contacts') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <button type="submit">Save</button>
    </form>

    <br><a href="{{ url('/') }}">Back to List</a>
</body>
</html>
