<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>

<p>Bienvenue {{ auth()->user()->name }}</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Se déconnecter</button>
</form>

</body>
</html>