<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the Application</h1>

    @if(isset($userId))
        <p>Your Telegram User ID: {{ $userId }}</p>
    @else
        <p>No User ID received.</p>
    @endif
</body>
</html>