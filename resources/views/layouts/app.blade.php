<!--resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    @yield('styles')
</head>

<body>

<!-- <div class="mb-10 rounded border border-green-400 bg-green 100 px-4 py-3 text-lx text-green-700">
    <strong class="font-blood">succ</strong>
    <div>
        cumcuber
    </div>
</div> -->

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
