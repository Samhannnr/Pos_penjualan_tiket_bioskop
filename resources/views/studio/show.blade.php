<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Studio</title>
</head>
<body>
    <h1>Studio Details</h1>
    <p><strong>ID:</strong> {{ $data->id }}</p>
    <p><strong>Name:</strong> {{ $data->nama }}</p>
    <p><strong>Capacity:</strong> {{ $data->kapasitas }}</p>
    <a href="{{ route('studio.index') }}">Back to Studio List</a>
</body>
</html>
