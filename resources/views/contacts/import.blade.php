<!-- resources/views/contacts/import.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Import Contacts</title>
</head>
<body>
    <h1>Import Contacts from XML</h1>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/contacts/import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Select XML File:</label><br>
        <input type="file" name="xml_file" required accept=".xml"><br><br>
        <button type="submit">Import</button>
    </form>

    <br><a href="{{ url('/') }}">Back to List</a>
</body>
</html>
