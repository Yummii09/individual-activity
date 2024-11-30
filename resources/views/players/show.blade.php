<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Details</title>
</head>
<body>
    <h1>Section Details</h1>

    <h2>Section Name: {{ $section->section_name }}</h2>

    <h3>Players in this Section:</h3>
    @if($section->players->isEmpty())
        <p>No players assigned to this section yet.</p>
    @else
        <ul>
            @foreach($section->players as $player)
                <li>{{ $player->name }} ({{ $player->username }})</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('sections.index') }}">Back to Sections List</a>
</body>
</html>
