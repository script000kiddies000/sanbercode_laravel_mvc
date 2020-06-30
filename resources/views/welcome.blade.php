<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Selamat Datang {{ $user['first_name'] ?? '' }} {{ $user['last_name'] ?? '' }}!</h1>

    <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
</body>
</html>
