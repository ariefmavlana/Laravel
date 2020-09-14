<!DOCTYPE html>
<html lang="en">
<head>
    <title>#8 SISTEM TEMPLATE BLADE LARAVEL</title>
</head>
<body>
    
    <header>

        <h2>Blog ariefmavlana</h2>
        <nav>
            <a href="/blog">HOME<a/a>
            
            <a href="/blog/tentang">TENTANG</a>
            
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    <header>
    <hr>
    <br>
    <br>

    <h3>@yield('judul_halaman')</h3>

    @yield ('konten')

    <br>
    <br>
    <hr>
    <footer>
        <p>&copy; <a href="https://www.youtube.com"></a>. 2020-2021</p>
    </footer>
</body>
</html>