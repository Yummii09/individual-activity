<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Section</title>
</head>
<body>
    <h1>Create Section</h1>

    <form action="{{ route('sections.store') }}" method="POST">
        @csrf
        <label for="section_name">Section Name</label>
        <input type="text" name="section_name" required>
        <button type="submit">Create Section</button>
    </form>
</body>
</html>
