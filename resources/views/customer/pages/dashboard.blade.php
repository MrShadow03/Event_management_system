<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        .container {
            margin: 0 auto;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-top: 50px;
        }
        button {
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <form action="{{ route('customer.logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
