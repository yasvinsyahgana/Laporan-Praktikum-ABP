<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
@auth
<div class="row justify-content-end mt-2">
    <div class="col-auto">
        {{ Auth::user()->name }}
        <a href="{{ route('logout') }}" class="btn btn-sm btn-warning">Logout</a>
    </div>
</div>
@endauth
<body style="width:95%; margin:auto">
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
