<html>
    <title>
        belajar_blade
    </title>
    <head>
    <body>
        <p>Hallo!! {{ $nama }}</p>
        <p>Nama Hewan:</p>
        <ul>
            @foreach($daftar_hewan as $key=>$value)
                <li>{{ $key+1 }}. {{ $value }}</li>
            @endforeach
        </ul>
    </body>

</html>