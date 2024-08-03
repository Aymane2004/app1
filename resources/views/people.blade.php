<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <h1>About</h1>
    @if (isset($person))
        <p>First Name: {{ $person }}</p>
    @else
        <p>No person found.</p>
    @endif
</body>
</html>