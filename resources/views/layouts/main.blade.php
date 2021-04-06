<html>
<head>
<meta charset="UTF-8">
<title>Kanidtha's Books Store - @yield('title')</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
</head>
<body>
    <header>
        <h1>  @yield('title')</h1>
        
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&#xA9; Copyright Week-05, 2020 Kanidtha's UI element.</p>
    </footer>
</body>
</html>