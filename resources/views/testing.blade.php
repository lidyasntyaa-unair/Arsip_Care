<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Testing Database</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    <div class="asterisk" style="padding: 20px;">
        <h1 class="asterisk-h1">Data dari PostgreSQL masuk (Testing)</h1>

        <ul>
            <!-- Melakukan looping data menggunakan foreach -->
            @foreach($users as $user)
                <li>
                    <!-- Menggunakan 'name' sesuai kolom bawaan migration Laravel -->
                    {{ $user->name }} - {{ $user->email }}
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
