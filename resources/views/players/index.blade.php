<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players List</title>
</head>
<body>

    <h1>Players</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>Player Name</th>
                <th>Section</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->section->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
