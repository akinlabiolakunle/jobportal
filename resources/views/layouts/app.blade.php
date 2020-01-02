<html>

<head>
    <title> @yield('title') </title>
    @include('layouts.includes.head')
</head>
<body>
<div class="container">
    <header class="row">
        @include('layouts.includes.navbar')
    </header>

    <div id="main">
        @include('layouts.includes.errors')
        @yield('content')
    </div>

    <footer id="footer">
        @include('layouts.includes.footer')
    </footer>

</div>
</body>

</html>
