<!-- resources/views/contacts/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
</head>
<body>
    <h1>Contact List</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <a href="{{ url('/contacts/create') }}">Add New Contact</a> |
    <a href="{{ url('/contacts/import') }}">Import from XML</a>
    <a href="{{ url('/contacts/sample-xml') }}" download> Download Sample XML File </a>

    <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <a href="{{ url('/contacts/' . $contact->id . '/edit') }}">Edit</a> |
                    <form action="{{ url('/contacts/' . $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No contacts found.</td></tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>
