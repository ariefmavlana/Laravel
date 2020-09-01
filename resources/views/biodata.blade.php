<!DOCTYPE html>
<html>
<head>
    <title>Passing Data Controller via Laravel</title>
</head>
<body>
    
    <h1>Passing Data Controller</h1>
    <a href="Belajar Laravel Semangat Kita">www.malasngoding.com</a>

    <br>

    <p>Nama : {{ $nama }}</p>

    <p>Mata Kuliah</p>
    
    <ul>
    @foreach($Matkul as $m)
    
    <li>{{ $m }}</li>
    
    @endforeach
    
    </ul>

</body>
</html>