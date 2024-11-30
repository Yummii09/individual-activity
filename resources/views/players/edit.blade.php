<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Section</title>
</head>
<body>
    <h1>Edit Section</h1>

    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    
    <form action="{{ route('sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')

        
        <div>
            <label for="player_name">Player Name</label>
            <input type="text" id="player_name" name="player_name" value="{{ $section->player->name }}" readonly>
        </div>

       
        <div>
            <label for="section_name">Section Name</label>
            <input type="text" id="section_name" name="section_name" value="{{ old('section_name', $section->section_name) }}">
        </div>

        <div>
            <button type="submit">Update Section</button>
        </div>
    </form>

    <br>
    <a href="{{ route('sections.index') }}">Back to Sections List</a>
</body>
</html>
