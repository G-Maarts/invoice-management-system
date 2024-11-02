<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Management System</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-blue-600 text-white p-4 text-center">
        <h1>Welcome to Your Invoice Management System</h1>
        <p>Manage your invoices easily and effectively</p>
    </header>
    <div class="container mx-auto mt-8">
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn-secondary">Register</a>
        </div>
    </div>
</body>
</html>
