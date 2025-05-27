<!--resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    @yield('styles')
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div> 
        @endif
</body>
</html>
